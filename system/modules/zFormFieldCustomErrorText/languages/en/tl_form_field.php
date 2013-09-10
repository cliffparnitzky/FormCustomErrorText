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
$GLOBALS['TL_LANG']['tl_form_field']['customErrorText_legend'] = 'Custom error texts';
 
/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextActive']        = array('Activate Custom error texts', 'Select if custom error texts should be defined for this form field.');
$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextCss']           = array('Error texts CSS ID/class', 'Here you can set an ID and one or more classes for the error text. In output, it will automatically be surrounded by <i>&lt;span&gt;</i> element.');
$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextValues']        = array('Error texts', 'Set the error text for different languages. The first entry in the table will be used as default value if no text for a language is defined.');
$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextValueLanguage'] = array('Language', 'Select the language of the error text.');
$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextValueContent']  = array('Text', 'Set the text to be displayed.');

/**
 * Help
 */
$GLOBALS['TL_LANG']['tl_form_field']['customErrorText']['help']['inserttags']['headline'] = array('<u>Inserttags</u>', 'The following inserttags could be used:');
$GLOBALS['TL_LANG']['tl_form_field']['customErrorText']['help']['inserttags']['field']    = array('<i>{{field::*}}</i>', 'This tag returns all values of the current field (replace * with any attribute of the field, for example <i>label</i> or <i>maxlength</i>).');

?>