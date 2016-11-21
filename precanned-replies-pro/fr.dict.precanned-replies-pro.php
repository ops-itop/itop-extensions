<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

Dict::Add('FR FR', 'French', 'Français', array(
	'Menu:PrecannedRepliesCategories' => 'Catégories de réponse prédéfinie',
	'Menu:PrecannedRepliesCategories+' => 'Catégories de réponse prédéfinie',

	'Class:PrecannedReplyCategory' => 'Catégorie de réponse prédéfinie',
	'Class:PrecannedReplyCategory+' => 'Catégorie de réponse prédéfinie',
	'Class:PrecannedReplyCategory/Attribute:name' => 'Nom',
	'Class:PrecannedReplyCategory/Attribute:name+' => '',
	'Class:PrecannedReplyCategory/Attribute:description' => 'Description',
	'Class:PrecannedReplyCategory/Attribute:description+' => '',
	'Class:PrecannedReplyCategory/Attribute:replies_list' => 'Réponses prédéfinies',
	'Class:PrecannedReplyCategory/Attribute:replies_list+' => 'Réponses prédéfinies dans cette catégorie',

	'Class:PrecannedReply/Attribute:org_id' => 'Organisation',
	'Class:PrecannedReply/Attribute:org_id+' => '',
	'Class:PrecannedReply/Attribute:category_id' => 'Catégorie',
	'Class:PrecannedReply/Attribute:category_id+' => '',
));
?>
