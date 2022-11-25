<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
$this->setFrameMode(true);

if (!function_exists('array_key_first')) {
    function array_key_first(array $arr) {
        foreach($arr as $key => $unused) {
            return $key;
        }
        return NULL;
    }
}
?>
<? if ($arParams['SERVICE_PAGE'] != 'Y') { ?>

    <div class="content-menu _tabs">
        <ul class="content-menu__outer center">
            <? foreach ($arResult['SECTIONS'] as $key => $arSection): ?>
                <li class="content-menu<?= ($key === array_key_first($arResult['SECTIONS'])) ? " active" : "";
                ?><?= ($key === max(array_keys($arResult['SECTIONS']))) ? " last" : ""; ?>">
                    <a href="" data-tab-id="<?= $arSection['ID'] ?>"><?= $arSection['NAME'] ?></a>
                </li>
            <? endforeach; ?>
        </ul>
    </div>

    <div class="center">
        <div class="content">
            <? foreach ($arResult['SECTIONS'] as $key => $arSection): ?>
                <div class="tab-block<?= ($key === array_key_first($arResult['SECTIONS'])) ? " _show" : "";?>" data-tab-id="<?= $key ?>">
                    <div class="page-title-2"><?= $arSection['NAME'] ?></div>
                    <div class="work-table__container">
                        <table class="work-table">
                            <tbody>
                            <tr>
                                <th>№&nbsp;</th>
                                <th style="text-align: center;">Наименование работ</th>
                                <th>Наименование заказчика</th>
                                <th>Год окончания работ</th>
                            </tr>
                            <? $k = 0; ?>
                            <? foreach ($arSection["ITEMS"] as $arItem): ?>
                                <tr>
                                    <td><?= $k + 1 ?></td>
                                    <td class="justifyleft"><?= $arItem['NAME'] ?></td>
                                    <td><?= $arItem['PROPERTIES']['ZAKAZCHIK']['VALUE'] ?></td>
                                    <td><?= $arItem['PROPERTIES']['YEAR']['VALUE'] ?> год</td>
                                </tr>
                                <? $k++; ?>
                            <? endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <?= $arResult["NAV_STRING"] ?>
    <? endif ?>

<? } ?>