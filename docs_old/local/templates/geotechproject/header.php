<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$curPage = $APPLICATION->GetCurPage();
$curDir = $APPLICATION->GetCurDir();

$shownavchain = ($APPLICATION->GetProperty("NOT_SHOW_NAV_CHAIN") != 'Y') ? true : false ;

use Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>" class="">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143239882-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143239882-1');
</script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?$APPLICATION->ShowTitle()?> - Геолтех</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="theme-color" content="#f26522">
	<meta name="HandheldFriendly" content="true">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?$APPLICATION->ShowHead();?>
	<?
	Asset::getInstance()->addCss("/local/templates/geotechproject/template/css/banner-styles.css");
	Asset::getInstance()->addCss("/local/templates/geotechproject/template/css/font-awesome.min.css");
	Asset::getInstance()->addCss("/local/templates/geotechproject/template/js/fancybox/jquery.fancybox.min.css");
	Asset::getInstance()->addCss("/local/templates/geotechproject/template/css/normalize.css.css");
	Asset::getInstance()->addCss("/local/templates/geotechproject/template/css/iconochive.css");
	Asset::getInstance()->addCss("/local/templates/geotechproject/template/css/styles.css");
	Asset::getInstance()->addCss("/local/templates/geotechproject/template/css/media.css");

	Asset::getInstance()->addJs("/local/templates/geotechproject/template/js/jquery-3.3.1.min.js");
	Asset::getInstance()->addJs("/local/templates/geotechproject/template/js/selectivizr-min.js");
	Asset::getInstance()->addJs("/local/templates/geotechproject/template/js/jquery.inputmask.js");
	Asset::getInstance()->addJs("/local/templates/geotechproject/template/js/fancybox/jquery.fancybox.min.js");
	Asset::getInstance()->addJs("/local/templates/geotechproject/template/js/site.js");
	?>
<meta name="yandex-verification" content="e112f629d6d8b588" />
</head>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<body>
<?$APPLICATION->IncludeComponent(
    "bitrix:iblock.element.add.form",
    "callback",
    array(
        "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
        "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
        "CUSTOM_TITLE_DETAIL_PICTURE" => "",
        "CUSTOM_TITLE_DETAIL_TEXT" => "",
        "CUSTOM_TITLE_IBLOCK_SECTION" => "",
        "CUSTOM_TITLE_NAME" => "ФИО",
        "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
        "CUSTOM_TITLE_PREVIEW_TEXT" => "Телефон",
        "CUSTOM_TITLE_TAGS" => "",
        "DEFAULT_INPUT_SIZE" => "30",
        "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
        "ELEMENT_ASSOC" => "CREATED_BY",
        "GROUPS" => array(
            0 => "2",
        ),
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "forms",
        "LEVEL_LAST" => "N",
        "LIST_URL" => "",
        "MAX_FILE_SIZE" => "0",
        "MAX_LEVELS" => "100000",
        "MAX_USER_ENTRIES" => "100000",
        "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
        "PROPERTY_CODES" => array(
            0 => "NAME",
            2 => "PREVIEW_TEXT",
        ),
        "PROPERTY_CODES_REQUIRED" => array(
            0 => "NAME",
            1 => "PREVIEW_TEXT",
        ),
        "RESIZE_IMAGES" => "N",
        "SEF_MODE" => "N",
        "STATUS" => "INACTIVE",
        "STATUS_NEW" => "NEW",
        "USER_MESSAGE_ADD" => "",
        "USER_MESSAGE_EDIT" => "",
        "USE_CAPTCHA" => "N",
        "COMPONENT_TEMPLATE" => "callback"
    ),
    false
);?>

<div class="main">

	<div class="header">
		<div class="header__top">
			<div class="center header__wrapper">
				<div class="header__left">
					<div class="header__address"><? $APPLICATION->IncludeFile('/local/includes/address.php', array(), array('MODE' => 'html')) ?></div>
					<a href="mailto:<?=getIncludeEmailText('/local/includes/email.php')?>"
					   class="header__email"><? $APPLICATION->IncludeFile('/local/includes/email.php', array(), array('MODE' => 'html')) ?></a>
				</div>
				<div class="header__image">
					<img src="<?=SITE_TEMPLATE_PATH?>/template/img/hammer.png"
						 alt="">
				</div>
				<div class="header__right">
					<div class="header__feedback">Заказать звонок <i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<a href="tel:<?= setCallablePhone('/local/includes/phone.php') ?>" class="header__phone"><? $APPLICATION->IncludeFile('/local/includes/phone.php', array(), array('MODE' => 'html')) ?></a>
				</div>
			</div>
		</div>

		<div class="header__bottom">
			<div class="center header__wrapper">
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	".default", 
	array(
		"ROOT_MENU_TYPE" => "top_left",
		"CHILD_MENU_TYPE" => "",
		"MAX_LEVEL" => "1",
		"USE_EXT" => "N",
		"POSITION_CLASS" => "header__menu_left",
		"COMPONENT_TEMPLATE" => ".default",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
				<a href="/" class="header__logo">
					<img src="<?=SITE_TEMPLATE_PATH?>/template/img/geolteh-40-logo.jpg"
						 alt="ГеолТехПроект Изыскания">
				</a>
				<?$APPLICATION->IncludeComponent("bitrix:menu", "", array(
					"ROOT_MENU_TYPE" => "top_right",
					"CHILD_MENU_TYPE" => "left",
					"MAX_LEVEL" => "1",
					"USE_EXT" => "N",
					"POSITION_CLASS" => "header__menu_right"
				));?>
				<button type="button" class="header__burger js-burger">
					<span></span><span></span><span></span><span></span><span></span><span></span>
				</button>
				<div class="header__aside js-menu">
					<ul class="header__navigation navigation header__menu">
						<li class="header__item header__item_parent"><a
								href="/vypolnennye-raboty/"
								title="Выполненные работы" class="header__link">Выполненные работы</a>
						</li>
						<li class="header__item"><a
								href="/kontakty/"
								title="Контакты" class="header__link">Контакты</a>
						</li>
						<li class="header__item"><a
								href="/otzyvy/"
								title="Отзывы" class="header__link">Отзывы</a>
						</li>
						<li class="header__item last"><a
								href="/tseny/"
								title="Цены" class="header__link">Цены</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?/*$APPLICATION->IncludeComponent("bitrix:menu", "sub", array(
					"ROOT_MENU_TYPE" => "works",
					"CHILD_MENU_TYPE" => "",
					"MAX_LEVEL" => "1",
					"USE_EXT" => "Y",
				));*/?>
	</div>

	<? if ($curPage != '/') {?>

	<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","")?>
	<h1 class="page_title"><?$APPLICATION->ShowTitle(false)?></h1>

	<?}?>