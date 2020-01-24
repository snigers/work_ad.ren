<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
	<ul class="nav navbar-nav">
		
		<?
		echo "<!--";
		pr($arResult);
		echo "-->";
		foreach($arResult as $key => $arItem):
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
			?>
            <?if ($arItem["IS_PARENT"] && $arItem["LINK"] == "/office/"):?>
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
                                <div class="submenu-pic" style="background: url(/layout/files/submenu-office-bg.jpg)"><img src="/layout/files/submenu-office-pic.jpg"></div>
                            </div>
                        </div>
                    </div>
                </li>
			<?endif;?>
			
			<?if ($arItem["IS_PARENT"] && $arItem["LINK"] != "/office/"):?>
				<li class="has-submenu"><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
					<div class="submenu submenu-alt">
						<ul class="submenu-list submenu-list-alt">
							<?foreach($arResult as $key2 => $arSubItem):?>
								<?if ($arSubItem["DEPTH_LEVEL"] == 2):?>
									<?if ($arSubItem["CHAIN"][0] == $arItem["TEXT"]):?>
										<li>
											<a class="submenu-item" href="<?=$arSubItem["LINK"]?>">
												<div class="submenu-item-pic" style="background:url(<?=$arSubItem["PARAMS"]["IMAGE"]?>);"></div>
												<div class="submenu-item-descr">
													<div class="ttl"><?=$arSubItem["TEXT"]?></div>
												</div>
											</a>
										</li>
									<?endif;?>
								<?endif;?>
							<?endforeach;?>
						</ul>
					</div>
				</li>
			<?endif;?>
		
            <?if (!$arItem["IS_PARENT"] && $arItem["DEPTH_LEVEL"] == 1):?>
                <li><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
            <?endif;?>
		<?endforeach?>
	
	</ul>
<?endif?>