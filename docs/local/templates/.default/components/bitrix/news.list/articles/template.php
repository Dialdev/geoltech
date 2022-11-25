<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="service">
	<div class="service__wrapper">
		<div class="center">
			<div class="service__block  article">
				<?foreach($arResult["ITEMS"] as $k=>$arItem):
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
				?>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="service__item service__item_top <?= (($k+1)%2) ?  "service__item_right" : "service__item_left" ;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="services__image">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"  alt="">
							<div class="service__title"><span><?=$arItem["NAME"]?></span></div>
						</div>
					</a>
					<div class="article_prev_text">
						<span><?=$arItem["PREVIEW_TEXT"]?></span>
					</div>
				<?endforeach?>
				<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
					<?=$arResult["NAV_STRING"]?>
				<?endif?>

			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
