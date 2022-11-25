<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

	<div class="content center">

<?
$serviceId = $APPLICATION->IncludeComponent("bitrix:news.detail", "services", array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
	"PROPERTY_CODE" => array(),
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"SET_CANONICAL_URL" => "Y",
	"SET_STATUS_404" => "Y",
	"SHOW_404" => "Y",
	"ADD_ELEMENT_CHAIN" => "Y",
));
?>

		<?
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

		));?>

		</div>
<?}?>


