<?php

class ReadMoreFunctions {

	public static function createSelectBox($params, $name, $selectedValue) {

		$selectBox = "<select name='".$name."' class=\"selectpicker input-md\">";
		foreach ($params as $value => $name) {
			$selected = "";
			if($value == $selectedValue) {
				$selected = "selected";
			}
			$selectBox .= "<option value='".$value."' $selected>$name</option>";
		}
		$selectBox .= "</select>";
		return $selectBox;
	}

	public static function createRadioButtons($data, $savedValue, $attrs) {

		$attrString = '';
		$selected = '';

		if(!empty($attrs) && isset($attrs)) {

			foreach ($attrs as $attrName => $attrValue) {
				$attrString .= ''.$attrName.'="'.$attrValue.'" ';
			}
		}

	    $radioButtons = '';

		foreach($data as $value) {

			$checked = '';
			if($value == $savedValue) {
				$checked = 'checked';
			}

			$radioButtons .= "<input type=\"radio\" value=\"$value\" $attrString  $checked>";
		}
		return $radioButtons;
	}
}