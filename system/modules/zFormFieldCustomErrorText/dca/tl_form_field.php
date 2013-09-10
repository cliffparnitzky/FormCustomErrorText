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
 * Add a palette to tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'customErrorTextActive';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['customErrorTextActive'] = 'customErrorTextCss,customErrorTextValues';

foreach ($GLOBALS['TL_DCA']['tl_form_field']['palettes'] as $name=>$palette) {
	$GLOBALS['TL_DCA']['tl_form_field']['palettes'][$name] = str_replace("{expert_legend:hide}", "{customErrorText_legend:hide},customErrorTextActive;{expert_legend:hide}", $palette);
}

/**
 * Add fields to tl_form_field
 */

$GLOBALS['TL_DCA']['tl_form_field']['fields']['customErrorTextActive'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextActive'],
	'exclude'                 => true,
	'filter'                  => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['customErrorTextCss'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextCss'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('multiple'=>true, 'size'=>2, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['customErrorTextValues'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextValues'],
	'inputType'               => 'multiColumnWizard',
	'reference'               => &$GLOBALS['TL_LANG']['tl_form_field']['customErrorText']['help']['inserttags'],
	'eval'                    => array
	(
		'mandatory'    => false,
		'style'        => 'min-width: 100%;',
		'tl_class'     =>'clr',
		'minCount'     => 1,
		'helpwizard'   => true,
		'columnFields' => array
		(
			'customErrorTextValueLanguage' => array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextValueLanguage'],
				'exclude'          => true,
				'inputType'        => 'select',
				'options'          => $this->getLanguages(),
				'eval'             => array('style'=>'width: 95%;', 'includeBlankOption'=>true, 'mandatory'=>true)
			),
			'customErrorTextValueContent' => array
			(
				'label'            => &$GLOBALS['TL_LANG']['tl_form_field']['customErrorTextValueContent'],
				'exclude'          => true,
				'inputType'        => 'text',
				'eval'             => array('style'=>'width: 95%;', 'mandatory'=>true)
			)
		)
	)
); 

?>