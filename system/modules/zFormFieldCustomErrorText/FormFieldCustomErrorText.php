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
 * Class FormFieldCustomErrorText
 *
 * Provide methods to set custom error text
 * @copyright  Cliff Parnitzky 2013
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class FormFieldCustomErrorText extends Controller {
	
	/**
	 * Set custom error text if validation failed and text is configured.
	 */
	public function setCustomErrorText (Widget $objWidget, $intId) {
		if ($objWidget->hasErrors() && $objWidget->customErrorTextActive) {
			// get the error text
			global $objPage;
			$customErrorText = "";
			$arrTexts = deserialize($objWidget->customErrorTextValues);
			if (is_array($arrTexts) && count($arrTexts) > 0)
			{
				foreach ($arrTexts as $textValue)
				{
					if ($textValue['customErrorTextValueLanguage'] == $objPage->language)
					{
						$customErrorText = $textValue['customErrorTextValueContent'];
					}
				}
				if (strlen($customErrorText) == 0)
				{
					// use first entry as fallback
					$customErrorText = $arrTexts[0]['customErrorTextValueContent'];
				}
			}
			
			if (strlen($customErrorText) > 0)
			{
				// cache errors
				$arrErrors = $objWidget->getErrors();
				
				// clear error array (change access to property via reflection)
				$rp = new ReflectionProperty($objWidget,'arrErrors');
				$rp->setAccessible(true);
				$rp->setValue($objWidget, array());
				$rp->setAccessible(false);
				
				$strErrorText = "";
				// get CSS id and class ... if both are empty, insert error text directly, otherwise surround with <span>
				$arrCss = deserialize($objWidget->customErrorTextCss);
				if (is_array($arrCss) && count($arrCss) == 2 && (strlen($arrCss[0]) > 0 || strlen($arrCss[1]) > 0))
				{
					$strErrorText .= "<span";
					// add id if set
					if (strlen($arrCss[0]) > 0)
					{
						$strErrorText .= " id=\"" . $arrCss[0] . "\"";
					}
					// add class if set
					if (strlen($arrCss[1]) > 0)
					{
						$strErrorText .= " class=\"" . $arrCss[1] . "\"";
					}
					$strErrorText .= ">";
				}
				
				// set the custom text
				$strErrorText .= $this->replaceSpecialInsertTags($customErrorText, $objWidget);
				echo $strErrorText;
				
				// close surrounding <span>
				if (is_array($arrCss) && count($arrCss) == 2 && (strlen($arrCss[0]) > 0 || strlen($arrCss[1]) > 0))
				{
					$strErrorText .= "</span>";
				}
				
				$objWidget->addError($strErrorText);
				
				// append cached errors to property (only for completeness)
				foreach ($arrErrors as $error) {
					$objWidget->addError($error);
				}
			}
			else
			{
				$this->log('Could not determine custom form field error text, despite this option is active for field with id: ' . $objWidget->id, 'FormFieldCustomErrorText->setCustomErrorText(...)', TL_ERROR); 
			}
		}
		return $objWidget;
	}
	
	/**
	 * Replaces the insert tags.
	 */
	private function replaceSpecialInsertTags($text, $field)
	{
		$textArray = preg_split('/\{\{([^\}]+)\}\}/', $text, -1, PREG_SPLIT_DELIM_CAPTURE);
		
		for ($count = 0; $count < count($textArray); $count++)
		{
			$parts = explode("::", $textArray[$count]);
			if ($parts[0] == "field")
			{
				$value = $field->$parts[1];
				if ($value != null)
				{
					$textArray[$count] = $value;
				}
			}
		}
		return implode('', $textArray);
	}
}

?>