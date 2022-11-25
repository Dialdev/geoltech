<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="header__submenu">
	<div class="center">
		<div class="header__submenu-wrap">
			<ul class="header__sublist">
<?
$previousLevel = 0;
foreach ($arResult as $k=>$arItem):
	if ($previousLevel > $arItem["DEPTH_LEVEL"])
		echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
	$previousLevel = $arItem["DEPTH_LEVEL"];
?>
	<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="header__subitem<?if ($arItem["SELECTED"]):?> _active<?endif?>"><a href="<?=$arItem["LINK"]?>" class="header__sublink"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
<?
endforeach;
?>
			</ul>
		</div>
	</div>
</div>