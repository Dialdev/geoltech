<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(false);?>
<div class="blackblock blackblock_call"  <?if (strlen($arResult["MESSAGE"]) > 0 || !empty($arResult["ERRORS"])) {?>style="display: block;"<?}?>></div>
<div class="feedback feedback_call" <?if (strlen($arResult["MESSAGE"]) > 0 || !empty($arResult["ERRORS"])) {?>style="display: block;"<?}?> >
	<div class="button__close button__close_call">×</div>
	<h3 class="feedback__title">Заказать звонок</h3>
	<?

	if (!empty($arResult["ERRORS"])):?>
		<? ShowError(implode("<br />", $arResult["ERRORS"])) ?>
	<?endif;
	if (strlen($arResult["MESSAGE"]) > 0){?>

<div class="feedback__thank">
        <h5>Спасибо</h5>
        <p>В ближайшее время наш менеджер свяжется с вами.</p>
</div>
		<script>
			history.pushState(null, "", location.href.split("?")[0]);
		</script>
	<? } else { ?>
	<form name="iblock_add" action="" method="post" enctype="multipart/form-data" id="callback_form">
		<?= bitrix_sessid_post() ?>
			<input type="text" class="input__text" name="PROPERTY[NAME][0]"
				   value="<?= $arResult["ELEMENT_PROPERTIES"]['NAME'][0]["VALUE"]; ?>" placeholder="ФИО *" required>
			<input type="text" class="input__text input__phone" name="PROPERTY[PREVIEW_TEXT][0]"
				   value="<?= $arResult["ELEMENT_PROPERTIES"]['PREVIEW_TEXT'][0]["VALUE"]; ?>" placeholder="Телефон *" required>
		<div class="popup-line clear">
			<label class="checkbox__wrapper">
				<input type="checkbox" checked="" class="checkbox__item" id="555" value="555" required>
				<span class="checkbox__arrow"></span>
				<span class="checkbox__name">Согласен с правилами обработки персональных данных установленными в <a href="/upload/policy.pdf" target="_blank">политике конфиденциальности</a></span>
			</label>
		</div>
		<?/*<button type="submit" class="input__submit" name="iblock_submit">Отправить</button>*/?>
		<input type="submit" name="iblock_submit" value="Отправить" class="input__submit">
	</form>
	<? } ?>
</div>









