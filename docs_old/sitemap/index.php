<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карта сайта");?><?$APPLICATION->IncludeComponent("bitrix:main.map", "sitemap", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COL_NUM" => "1",	// Количество колонок
		"LEVEL" => "3",	// Максимальный уровень вложенности (0 - без вложенности)
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_DESCRIPTION" => "N",	// Показывать описания
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>