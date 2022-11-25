<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$res = CIBlockSection::GetList(
    [
        $arParams["SORT_BY1"] => $arParams["SORT_ORDER1"],
        $arParams["SORT_BY2"] => $arParams["SORT_ORDER2"],
    ],
    [
        'IBLOCK_ID' => $arParams['IBLOCK_ID']
    ]
);

while ($arRes = $res->GetNext()) {
    $arResult['SECTIONS'][$arRes['ID']] = $arRes;
}

foreach ($arResult['ITEMS'] as $arItem) {
    $arResult['SECTIONS'][$arItem['IBLOCK_SECTION_ID']]['ITEMS'][] = $arItem;
}
unset($arResult['ITEMS']);
