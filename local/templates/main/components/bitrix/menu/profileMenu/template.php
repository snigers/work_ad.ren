<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="d-block d-md-none">
        <div class="page-tabs-mob">
            <div class="dropdown">
                <?foreach($arResult as $arItem):?>
                    <?if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                    ?>
                    <?if($arItem["SELECTED"]):?>
                        <button class="btn dropdown-toggle btn-dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$arItem["TEXT"]?></button>
                    <?endif;?>
                <?endforeach;?>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<?foreach($arResult as $arItem):?>
						<?if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
							continue;
						?>
						<?if(!$arItem["SELECTED"]):?>
							<a class="dropdown-item" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
						<?endif;?>
					<?endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <ul class="page-tabs">
		<?
		foreach($arResult as $arItem):
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
			?>
			<?if($arItem["SELECTED"]):?>
			<li><a href="<?=$arItem["LINK"]?>" class="active"><div class="cont"><?=$arItem["TEXT"]?></div></a></li>
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>"><div class="cont"><?=$arItem["TEXT"]?></div></a></li>
		<?endif?>
	
		<?endforeach?>
    </ul>
<?endif?>