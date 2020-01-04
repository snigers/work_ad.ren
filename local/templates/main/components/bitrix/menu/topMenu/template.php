<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
	<ul class="nav navbar-nav">
		
		<?
		foreach($arResult as $key => $arItem):
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
			?>
            <?if ($arItem["IS_PARENT"]):?>
                <li class="has-submenu"><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
                    <div class="submenu">
                        <div class="submenu-inner">
                            <div class="row">
                                <div class="submenu-descr">
                                    <ul class="submenu-list">
                                        <?foreach($arResult as $key2 => $arSubItem):?>
                                            <?if ($arSubItem["DEPTH_LEVEL"] == 2):?>
                                                <?if ($arSubItem["CHAIN"][0] == $arItem["TEXT"]):?>
                                                    <li><a href="<?=$arSubItem["LINK"]?>"><span><?=$arSubItem["TEXT"]?></a></li>
                                                <?endif;?>
                                            <?endif;?>
                                        <?endforeach;?>
                                    </ul>
                                </div>
                                <div class="submenu-pic" style="background-image: url(files/submenu-office-bg.jpg)"><img src="/layout/files/submenu-office-pic.jpg"></div>
                            </div>
                        </div>
                    </div>
                </li>
            <?elseif ($arItem["DEPTH_LEVEL"] == 1):?>
                <li><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
            <?endif;?>
		<?endforeach?>
	
	</ul>
<?endif?>