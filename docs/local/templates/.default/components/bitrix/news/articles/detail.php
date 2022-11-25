<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

	<div class="content center">

<?
$serviceId=$APPLICATION->IncludeComponent("bitrix:news.detail", "articles", Array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],	// Код информационного блока
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],	// Код новости
		"PROPERTY_CODE" => "",	// Свойства
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"SET_CANONICAL_URL" => "Y",	// Устанавливать канонический URL
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SHOW_404" => "Y",	// Показ специальной страницы
		"ADD_ELEMENT_CHAIN" => "Y",	// Включать название элемента в цепочку навигации
	),
	false
);
?>

		<?/*
		$worksProp = CIBlockElement::GetProperty( $arParams["IBLOCK_ID"], $serviceId, array("sort" => "asc"), Array("CODE"=>"WORKS"))->Fetch();
		if ($worksProp['VALUE'] != '') {
		?>
		<div class="page_bottom_title">Выполненные работы</div>

		<?$APPLICATION->IncludeComponent("bitrix:news.list", "works_list", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => 200,
		"DISPLAY_BOTTOM_PAGER" => "N",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"PROPERTY_CODE" => array(
			0 => "ZAKAZCHIK",
			1 => "YEAR",
			),
			"PARENT_SECTION" => $worksProp['VALUE'],

		));*/?>

		</div>
<?}?>


