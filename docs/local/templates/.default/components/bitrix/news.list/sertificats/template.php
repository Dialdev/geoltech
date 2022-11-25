<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="center">
	<div class="content">
		<div class="license">
			<h4>Лицензии на производство макршейдерийных работ</h4>
			
<?foreach($arResult["ITEMS"] as $k=>$arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
?>

	<?if ($arItem["PREVIEW_PICTURE"]["SRC"] != '') {
		$pict = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width" => 485, "height" => 360), BX_RESIZE_IMAGE_PROPORTIONAL_ALT);
		$pict_big = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width" => 1000, "height" => 1000), BX_RESIZE_IMAGE_PROPORTIONAL_ALT);
		?>
			<a class="fb"
			   href="<?=$pict_big['src']?>"
			   rel="group" data-fancybox="item">
				<img src="<?=$pict['src']?>" alt="">
			</a>
	<?}?>
	

<?endforeach?>
		</div>
	</div>

</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif?>

