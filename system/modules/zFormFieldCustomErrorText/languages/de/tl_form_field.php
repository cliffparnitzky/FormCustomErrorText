<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2013
 * @author     Cliff Parnitzky
 * @package    FormFieldCustomErrorText
 * @license    LGPL
 */
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form_field']['customErrorText_legend'] = 'Benutzerdefinierte Fehlertexte';
 
/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextActive']        = array('Benutzerdefinierte Fehlertexte aktivieren', 'Wählen Sie, ob für dieses Formularfeld benutzerdefinierte Fehlertexte festgelegt werden sollen.');
$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextCss']           = array('Fehlertext-CSS-ID/Klasse', 'Hier können Sie eine ID und beliebig viele Klassen für den Fehlertext eingeben. Dieser wird dann automatisch als <i>&lt;span&gt;</i>-Element ausgegeben.');
$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextValues']        = array('Fehlertexte', 'Legen Sie die Fehlertext für verschiedene Sprachen fest. Der erste Eintrag in der Tabelle wird als Standardwert verwendet, wenn zu einer Sprache kein Text definiert ist.');
$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextValueLanguage'] = array('Sprache', 'Wählen Sie die Sprache des Fehlertexts.');
$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextValueContent']  = array('Text', 'Legen Sie den Text fest, der ausgegeben werden soll.');

/**
 * Help
 */
$GLOBALS['TL_LANG']['tl_form_field']['customErrorText']['help']['inserttags']['headline'] = array('<u>Inserttags</u>', 'Folgende Inserttags können verwendet werden:');
$GLOBALS['TL_LANG']['tl_form_field']['customErrorText']['help']['inserttags']['field']    = array('<i>{{field::*}}</i>', 'Dieses Tag liefert alle Werte des aktuellen Feldes (ersetzen Sie * mit einem beliebigen Attribut des Feldes, z.B. <i>label</i> oder <i>maxlength</i>).');
 
?>