<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
$this->setFrameMode(true);
?>

<div class="center">
    <div class="content">
        <?= $arResult['PREVIEW_TEXT'] ?>
        <h2 class="justifyleft">Комплекс работ</h2>
        <hr>
        <div class="about__items">

            <? foreach ($arResult['PROPERTIES']['FEATURES']['VALUE'] as $key => $feature): ?>
                <div class="about__item">
                    <svg class="about__svg">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/template/img/icons.svg#<?= $arResult['PROPERTIES']['FEATURES']['DESCRIPTION'][$key] ?>"></use>
                    </svg>
                    <span class="about__text"><?= $feature ?></span>
                </div>
            <? endforeach; ?>
        </div>
        <?= $arResult['DETAIL_TEXT'] ?>
    </div>
</div>