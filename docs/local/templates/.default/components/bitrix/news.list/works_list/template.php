<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>


<div class="work-table__container">
	<table class="work-table">
		<tbody>
		<tr>
			<th>№&nbsp;</th>
			<th style="text-align: center;">Наименование работ</th>
			<th>Наименование заказчика</th>
			<th>Год окончания работ</th>
		</tr>


<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
?>
				<tr>
					<td><?=$k+1?></td>
					<td class="justifyleft"><?=$arItem['NAME']?></td>
					<td><?=$arItem['PROPERTIES']['ZAKAZCHIK']['VALUE']?></td>
					<td><?=$arItem['PROPERTIES']['YEAR']['VALUE']?> год</td>
				</tr>
						<?$k++;?>
<?endforeach?>
						</tbody>
					</table>
				</div>
			</div>
	</div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif?>


