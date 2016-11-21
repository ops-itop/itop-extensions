<?php
// Copyright (C) 2012-2015 Combodo SARL
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

//
// Class: TriggerOnLogUpdate
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:TriggerOnLogUpdate' => 'Déclencheur sur mise à jour du journal',
	'Class:TriggerOnLogUpdate+' => 'Déclencheur sur mise à jour du journal',
	'Class:TriggerOnLogUpdate/Attribute:target_log' => 'Code du journal',
	'Class:TriggerOnLogUpdate/Attribute:target_log+' => 'Code de l\'attribut du journal concerné',

	'UI-emry-enable' => 'Envoyer votre réponse par Email',
	'UI-emry-noattachment' => 'Aucun attachement',
	'UI-emry-caselog-prompt' => 'Entrez votre texte ici',
	'UI-emry-select-attachments' => 'Pièces jointes...',
	'UI-emry-attachments-to-be-sent' => 'Les pièces jointes suivantes seront envoyées:',
	'UI-emry-select-attachments-tooltip' => 'Cliquez pour choisir les pièces jointes à envoyer',
));
