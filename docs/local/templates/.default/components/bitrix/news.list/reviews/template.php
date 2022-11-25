<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="center">
	<div class="content">
		<div class="reviews">
			
<?foreach($arResult["ITEMS"] as $k=>$arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
?>

	<?if ($arItem["PROPERTIES"]["YOUTUBE"]["VALUE"] != '') {
	$img = substr($arItem["PROPERTIES"]["YOUTUBE"]["VALUE"], -11);
	?>
	<a data-fancybox="videoslide" href="<?=$arItem["PROPERTIES"]["YOUTUBE"]["VALUE"]?>?controls=0" class="reviews__item video">
		<img src="https://img.youtube.com/vi/<?=$img?>/0.jpg" alt="">
                    <span class="video__play">
                        <svg>
							<path d="M.56,11A.56.56,0,0,1,0,10.43V.56A.56.56,0,0,1,.56,0L9.73,5.08a.58.58,0,0,1,0,.84C9.31,6.35.56,11,.56,11Z"></path>
						</svg>
                    </span>
	</a>
	<?}?>
	<?if ($arItem["PREVIEW_PICTURE"]["SRC"] != '') {
		$pict = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width" => 485, "height" => 360), BX_RESIZE_IMAGE_EXACT);
		$pict_big = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width" => 1000, "height" => 100), BX_RESIZE_IMAGE_PROPORTIONAL_ALT);
		?>
			<a data-fancybox="item" href="<?=$pict_big['src']?>" class="reviews__item photo">
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

