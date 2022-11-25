<?php
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");
define('BIG_CACHE_TIME', 36000);
define('HOUR_CACHE_TIME', 3600);

use Bitrix\Main;
/*
function p($smth) {
	global $USER;
	if ($USER->IsAdmin()) {
			echo '<pre>';
			print_r($smth);
			echo '</pre>';
		}
}
*/
function getIncludeEmailText($file) {
	return	$result = file_get_contents($_SERVER["DOCUMENT_ROOT"].$file);
}

function setCallablePhone($file) {

	$phoneNumber = file_get_contents($_SERVER["DOCUMENT_ROOT"].$file);
	$number = preg_replace("/[^0-9+]/", '', $phoneNumber);
	if ($number[0]=='8') {$number[0]='7';}
	if ($number[0]=='+') {$number = str_replace('+', '', $number);}
	$number = '+'.$number;

	return $number;
}


use Bitrix\Main\Entity;

AddEventHandler("iblock", "OnBeforeIBlockElementAdd",  "OnBeforeIBlockElementAddHandler");

function OnBeforeIBlockElementAddHandler(&$arFields)
{
	//AddMessage2Log($arFields);
	if($arFields["IBLOCK_ID"] == 5) //вопрос-ответ, отзывы
	{
		CModule::IncludeModule('main');
		CModule::IncludeModule('iblock');

		if ($arFields["IBLOCK_ID"]==5) $subject = "Заказ обратного звонка";

		$arEventFields = array(
			"SUBJECT" => strval($subject),
			"TEXT" => strval($arFields['PREVIEW_TEXT']),
			"NAME" => strval($arFields["NAME"]));
		CEvent::Send("FEEDBACK", 's1', $arEventFields,'N',9);
	}
}

