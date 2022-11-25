<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<ul class="header__menu <?=$arParams["POSITION_CLASS"]?>">
<?
$previousLevel = 0;
foreach ($arResult as $k=>$arItem):
	if ($previousLevel > $arItem["DEPTH_LEVEL"])
		echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
	$previousLevel = $arItem["DEPTH_LEVEL"];
?>
	<?if ($arItem["DEPTH_LEVEL"] == 1):?>
		<?/*if ($arItem["LINK"] == '/vypolnennye-raboty/' ):?>
			<li class="header__item header__item_parent"><a href="<?=$arItem["LINK"]?>" class="header__link"><?=$arItem["TEXT"]?></a>

		<?else:*/?>
			<li class="header__item<?if ($arItem["SELECTED"]):?> _active<?endif?>"><a href="<?=$arItem["LINK"]?>" class="header__link"><?=$arItem["TEXT"]?></a></li>
		<?//endif?>
	<?else:?>
		<li class="submenu__item<?if ($arItem["SELECTED"]):?> _active<?endif?>"><a href="<?=$arItem["LINK"]?>" class="submenu__link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
<?
endforeach;
/*if ($previousLevel > 1)
	echo str_repeat("</ul></li>", ($previousLevel - 1));*/
?>
</ul>