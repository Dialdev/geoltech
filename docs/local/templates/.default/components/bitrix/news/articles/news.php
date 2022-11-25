<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$APPLICATION->IncludeComponent("bitrix:news.list", "articles", Array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],	// Код информационного блока
		"NEWS_COUNT" => $arParams["NEWS_COUNT"],	// Количество новостей на странице
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
	),
	false
);?>