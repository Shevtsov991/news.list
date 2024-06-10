<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>


<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<section class="grid">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<article class="grid-item">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div class="image">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<img class="preview_picture" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["NAME"]?>"  />
				</a>
				</div>
			<?endif?>
			<div class="info">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><h2><?echo $arItem["NAME"]?></h2></a>
					<?else:?>
						<h2><?echo $arItem["NAME"]?></h2>
					<?endif;?>
				<?endif;?>
				<div class="info-text">
					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
						<p><?echo $arItem["PREVIEW_TEXT"];?></p>
					<?endif;?>
				</div>
				<div class="button-wrap">
					<a class="atuin-btn" href="<?$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
				</div>
			</div>
		</article>
	<?endforeach;?>
</section>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

