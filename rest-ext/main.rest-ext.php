<?php

// PHP Data Model definition file

// WARNING - WARNING - WARNING
// DO NOT EDIT THIS FILE (unless you know what you are doing)
//
// If you use supply a datamodel.xxxx.xml file with your module
// the this file WILL BE overwritten by the compilation of the
// module (during the setup) if the datamodel.xxxx.xml file
// contains the definition of new classes or menus.
//
// The recommended way to define new classes (for iTop 2.0) is via the XML definition.
// This file remains in the module's template only for the cases where there is:
// - either no new class or menu defined in the XML file
// - or no XML file at all supplied by the module

/**
 * Implementation of custom REST services (get_related_person: support custom show_fields)
 */

class CustomExtServices implements iRestServiceProvider
{
	public function ListOperations($sVersion)
	{
		$aOps = array();
		if (in_array($sVersion, array('1.0', '1.1', '1.2', '1.3')))
		{
			$aOps[] = array(
				'verb' => 'ext/get_related_person',
				'description' => 'custom service: Get related objects(Person) through the specified relation'
			);
		}
		return $aOps;
	}
	
	public function ExecOperation($sVersion, $sVerb, $aParams)
	{
		$oResult = new RestResultWithObjects();
		switch ($sVerb)
		{
		case 'ext/get_related_person':
			$oResult = new RestResultWithRelations();
			$sClass = RestUtils::GetClass($aParams, 'class');
			$key = RestUtils::GetMandatoryParam($aParams, 'key');
			$sRelation = RestUtils::GetMandatoryParam($aParams, 'relation');
			$iMaxRecursionDepth = RestUtils::GetOptionalParam($aParams, 'depth', 20 /* = MAX_RECURSION_DEPTH */);
			$sDirection = RestUtils::GetOptionalParam($aParams, 'direction', null);
			$bEnableRedundancy = RestUtils::GetOptionalParam($aParams, 'redundancy', false);
			// 只取关联的Person
			$aShowFields = RestUtils::GetFieldList("Person", $aParams, 'output_fields');
			$bExtendedOutput = (RestUtils::GetOptionalParam($aParams, 'output_fields', '*') == '*+');
			// 用于画图时隐藏某些Class
			$aHideClass = RestUtils::GetOptionalParam($aParams, 'hide_classes', array());
			$bReverse = false;

			if (is_null($sDirection) && ($sRelation == 'depends on'))
			{
				// Legacy behavior, consider "depends on" as a forward relation
				$sRelation = 'impacts';
				$sDirection = 'up'; 
				$bReverse = true; // emulate the legacy behavior by returning the edges
			}
			else if(is_null($sDirection))
			{
				$sDirection = 'down';
			}
	
			$oObjectSet = RestUtils::GetObjectSetFromKey($sClass, $key);
			if ($sDirection == 'down')
			{
				$oRelationGraph = $oObjectSet->GetRelatedObjectsDown($sRelation, $iMaxRecursionDepth, $bEnableRedundancy);
			}
			else if ($sDirection == 'up')
			{
				$oRelationGraph = $oObjectSet->GetRelatedObjectsUp($sRelation, $iMaxRecursionDepth, $bEnableRedundancy);
			}
			else
			{
				$oResult->code = RestResult::INTERNAL_ERROR;
				$oResult->message = "Invalid value: '$sDirection' for the parameter 'direction'. Valid values are 'up' and 'down'";
				return $oResult;
				
			}
			
			if ($bEnableRedundancy)
			{
				// Remove the redundancy nodes from the output
				$oIterator = new RelationTypeIterator($oRelationGraph, 'Node');
				foreach($oIterator as $oNode)
				{
					if ($oNode instanceof RelationRedundancyNode)
					{
						$oRelationGraph->FilterNode($oNode);
					}
				}
			}
			
			$aIndexByClass = array();
			$oIterator = new RelationTypeIterator($oRelationGraph);
			foreach($oIterator as $oElement)
			{
				if ($oElement instanceof RelationObjectNode)
				{
					$oObject = $oElement->GetProperty('object');
					// 只取关联的Person
					if ($oObject && get_class($oObject)=="Person")
					{
						if ($bEnableRedundancy)
						{
							// Add only the "reached" objects
							if ($oElement->GetProperty('is_reached'))
							{
								$aIndexByClass[get_class($oObject)][$oObject->GetKey()] = null;
								$oResult->AddObject(0, '', $oObject, $aShowFields, $bExtendedOutput);
							}
						}
						else
						{
							$aIndexByClass[get_class($oObject)][$oObject->GetKey()] = null;
							$oResult->AddObject(0, '', $oObject, $aShowFields, $bExtendedOutput);
						}
					}
				}
				else if ($oElement instanceof RelationEdge)
				{
					$oSrcObj = $oElement->GetSourceNode()->GetProperty('object');
					$oDestObj = $oElement->GetSinkNode()->GetProperty('object');
					
					// 不显示隐藏的Class
					if(in_array(get_class($oSrcObj), $aHideClass) || in_array(get_class($oDestObj), $aHideClass))
					{
						continue;
					}
					$sSrcKey = get_class($oSrcObj) . '::' . $oSrcObj->GetKey() . '::' . $oSrcObj->Get('friendlyname');
					$sDestKey = get_class($oDestObj) . '::' . $oDestObj->GetKey() . '::' . $oDestObj->Get('friendlyname');
					
					if ($bEnableRedundancy)
					{
						// Add only the edges where both source and destination are "reached"
						if ($oElement->GetSourceNode()->GetProperty('is_reached') && $oElement->GetSinkNode()->GetProperty('is_reached'))
						{
							if ($bReverse)
							{
								$oResult->AddRelation($sDestKey, $sSrcKey);
							}
							else
							{
								$oResult->AddRelation($sSrcKey, $sDestKey);
							}
						}
					}
					else
					{
						if ($bReverse)
						{
							$oResult->AddRelation($sDestKey, $sSrcKey);
						}
						else
						{
							$oResult->AddRelation($sSrcKey, $sDestKey);
						}
					}
				}
			}

			if (count($aIndexByClass) > 0)
			{
				$aStats = array();
				$aUnauthorizedClasses = array();
				foreach ($aIndexByClass as $sClass => $aIds)
				{
					if (UserRights::IsActionAllowed($sClass, UR_ACTION_BULK_READ) != UR_ALLOWED_YES)
					{
						$aUnauthorizedClasses[$sClass] = true;
					}
					$aStats[] = $sClass.'= '.count($aIds);
				}
				if (count($aUnauthorizedClasses) > 0)
				{
					$sClasses = implode(', ', array_keys($aUnauthorizedClasses));
					$oResult = new RestResult();
					$oResult->code = RestResult::UNAUTHORIZED;
					$oResult->message = "The current user does not have enough permissions for exporting data of class(es): $sClasses";
				}
				else
				{
					$oResult->message = "Scope: ".$oObjectSet->Count()."; Related objects: ".implode(', ', $aStats);
				}
			}
			else
			{
				$oResult->message = "Nothing found";
			}
			break;
		default:
		}
		return $oResult;
	}
}