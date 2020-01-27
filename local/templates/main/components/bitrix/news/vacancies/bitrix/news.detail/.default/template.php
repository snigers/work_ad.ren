<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$APPLICATION->AddChainItem($arResult["PROPERTIES"]["SHORT_TITLE"]["VALUE"], "", true);
?>


    <main>
        <div class="page-header">
            <div class="row">
                <div class="col-6">
                    <div class="page-header-bg" style="background-image: url(<?=CFile::GetPath($arResult["PROPERTIES"]["LEFT_PICTURE_HEADER"]["VALUE"])?>)"></div>
                </div>
                <div class="col-6">
                    <div class="page-header-bg" style="background-image: url(<?=CFile::GetPath($arResult["PROPERTIES"]["RIGHT_PICTURE_HEADER"]["VALUE"])?>)"></div>
                </div>
            </div>
        </div>
        <div class="page-body page-body-dark-grey">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="page-sidebar">
                            <ul class="page-menu">
                                <li><a href="#description">Описание</a></li>
                                <li><a href="#pros">Преимущества</a></li>
                                <li><a href="#similar">Похожие вакансии</a></li>
                                <li><a href="#success">Истории успеха</a></li>
                                <li><a href="#faq">Вопросы и&nbsp;ответы</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 offset-md-1">
                        <div class="page-content-wrapper">
							<?$APPLICATION->IncludeComponent(
								"bitrix:breadcrumb",
								"jobBreadcrumb",
								Array(
									"START_FROM" => "0",
									"PATH" => "",
									"SITE_ID" => "-"
								),
								false
							);?>
                            <div class="page-title">
                                <div class="vacancy-header">
                                    <div class="row">
                                        <div class="vacancy-header-l">
                                            <h1><?=$arResult["NAME"]?></h1>
                                        </div>
                                        <div class="vacancy-header-r"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["LOGO_PREVIEW"]["VALUE"])?>"></div>
                                    </div>
                                </div>
                                <div class="vacancy-controls">
                                    <div class="row">
                                        <div class="vacancy-controls-l">
                                            <ul class="vacancy-tags">
                                                <li><a href="/vacancies/?city=<?=$arResult["PROPERTIES"]["CITY"]["VALUE"]?>&cityxml=<?=$arResult["PROPERTIES"]["CITY"]["VALUE_XML"]?>"><?=$arResult["PROPERTIES"]["CITY"]["VALUE"]?></a></li>
                                                <li><a href="/vacancies/?direction=<?=$arResult["PROPERTIES"]["DIRECTION"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["DIRECTION"]["VALUE"]?></a></li>
                                                <li><a href="/vacancies/?type_employment=<?=$arResult["PROPERTIES"]["TYPE_EMPLOYMENT"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["TYPE_EMPLOYMENT"]["VALUE"]?></a></li>
                                            </ul>
                                        </div>
                                        <div class="vacancy-controls-r">
                                            <div class="controls-buttons">
                                                <a class="btn btn-fav" href="#">
                                                    <div class="ico"><img src="/layout/images/ico-fav-2.svg"></div>
                                                </a>
                                                <a class="btn btn-share" href="#">
                                                    <div class="ico"><img src="/layout/images/ico-share.svg"></div>
                                                </a>
                                                <a class="btn btn-1 btn-1-med" href="<?=$arResult["LINK_RESPOND"]?>"><?=($arResult["PROPERTIES"]["BTN_ONE_TITLE"]["VALUE"]) ? $arResult["PROPERTIES"]["BTN_ONE_TITLE"]["VALUE"] : "Откликнуться"?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-content"><a name="descrition"></a>
                                <div class="h3"><?=$arResult["PROPERTIES"]["TITLE_VACANCIES"]["VALUE"]?></div>
                                <?=$arResult["DETAIL_TEXT"]?>
                                <div class="article-button-wrapper"><a class="btn btn-1 btn-1-big" href="<?=$arResult["LINK_RESPOND"]?>"><?=($arResult["PROPERTIES"]["BTN_ONE_TITLE"]["VALUE"]) ? $arResult["PROPERTIES"]["BTN_TWO_TITLE"]["VALUE"] : "Откликнуться на вакансию"?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-group section-group-dark-grey">
                <div class="section section-why">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-4"><a name="pros"></a>
                                    <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_WHY_ADIDAS"]["VALUE"]?></div>
                                    <div class="why-list">
                                        <div class="row">
                                            <?foreach($arResult["PROPERTIES"]["ITEMS_WHY_ADIDAS"]["VALUE"] as $arItem):?>
                                                <div class="col-12 col-md-6">
                                                    <div class="why-tmb">
                                                        <div class="why-tmb-pic" style="background-image:url(<?=CFile::GetPath($arItem["PREVIEW_PICTURE"])?>);"></div>
                                                        <div class="why-tmb-descr">
                                                            <div class="why-tmb-num"><?=$arItem["NAME"]?></div>
                                                            <div class="why-tmb-text">
                                                                <p><?=$arItem["~PREVIEW_TEXT"]?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?if ($arResult["PROPERTIES"]["VIDEO"]["VALUE"]):?>
                    <div class="section section-video">
                        <div class="container">
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-12 col-md-8 offset-md-4">
                                        <div class="h3"><?=$arResult["PROPERTIES"]["TITLE_BLOCK_VIDEO"]["VALUE"]?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?endif;?>
                <div class="section section-blockquote">
                    <div class="container">
                        <div class="section-content">
                            <div class="blockquote-alt-wrapper">
                                <div class="blockquote-alt-pics">
                                    <div class="row">
                                        <?foreach($arResult["PROPERTIES"]["IMG_BLOCK_QUOTE"]["VALUE"] as $arItem):?>
                                            <div class="col-6"><img src="<?=CFile::GetPath($arItem)?>"></div>
                                        <?endforeach;?>
                                    </div>
                                </div>
                                <blockquote class="blockquote-alt">
                                    <div class="blockquote-alt-content">
                                        <div class="blockquote-alt-text">
                                            <p><?=$arResult["PROPERTIES"]["QUOTE"]["~VALUE"]?></p>
                                        </div>
                                        <div class="blockquote-alt-author">
                                            <p><strong><?=$arResult["PROPERTIES"]["NAME_AUTHOR_QUOTE"]["VALUE"]?>,</strong>
                                                <?=($arResult["PROPERTIES"]["POSITION_AUTHOR_QUOTE"]["VALUE"]) ? $arResult["PROPERTIES"]["POSITION_AUTHOR_QUOTE"]["VALUE"] . ", " : ""?>
                                                    <?=($arResult["PROPERTIES"]["CITY_QUOTE"]["VALUE"]) ? "г. " . $arResult["PROPERTIES"]["CITY_QUOTE"]["VALUE"] : ""?></p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-group section-group-grey">
                <div class="section section-vacancies">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-4"><a name="similar"></a>
                                    <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_BLOCK_SIMILAR_VACANCIES"]["VALUE"]?></div>
                                    <div class="vac-list vac-list-alt">
                                        <div class="row">
                                            <?foreach($arResult["PROPERTIES"]["SIMILAR_VACANCIES"]["VALUE"] as $arItems):?>
                                                <div class="col-12 col-lg-6 test">
                                                    <a class="vac-tmb" href="<?=$arItems["DETAIL_PAGE_URL"]?>">
                                                        <div class="vac-tmb-header">
                                                            <div class="h3"><?=$arItems["NAME"]?></div>
                                                            <div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
                                                        </div>
                                                        <div class="vac-tmb-footer">
                                                            <div class="vac-tmb-place">
                                                                <p><?=$arItems["PROPERTY_DIRECTION_VALUE"]?><?=($arItems["PROPERTY_CITY_VALUE"]) ? ", " . $arItems["PROPERTY_CITY_VALUE"] : ""?></p>
                                                            </div>
                                                            <div class="vac-tmb-logo"><img src="<?=CFile::GetPath($arItems["PROPERTY_LOGO_PREVIEW_VALUE"])?>"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?endforeach;?>
                                        </div>
                                    </div>
                                    <div class="all-link-wrapper"><a class="btn btn-2" href="/vacancies/"><?=$arResult["PROPERTIES"]["TITLE_BTN_SIMILAR"]["VALUE"]?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section section-success">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-4"><a name="success"></a>
                                    <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_BLOCK_SUCCESS_STORIES"]["VALUE"]?></div>
                                    <div class="success-list">
                                        <div class="row">
                                            <?$count = 1;?>
                                            <?foreach($arResult["PROPERTIES"]["ITEM_STORIES"]["VALUE"] as $arItem):?>
                                                <?if ($count > 3):?>
                                                    <?$count = 1;?>
                                                <?endif;?>
    
                                                <?if ($count === 1):?>
													<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 749, "height" => 301), BX_RESIZE_IMAGE_EXACT);?>
                                                    <div class="col-12">
                                                        <a class="success-tmb" href="<?="/education_and_development/success/#story=story" . $arItem["ID"]?>">
                                                            <div class="success-tmb-pic"><img src="<?=$img["src"]?>"></div>
                                                            <div class="success-tmb-descr">
                                                                <div class="h3"><?=$arItem["PROPERTY_QUOTE_VALUE"]["TEXT"]?></div>
                                                                <div class="success-tmb-author">
                                                                    <div class="success-tmb-name">
                                                                        <p><?=$arItem["NAME"]?></p>
                                                                    </div>
                                                                    <div class="success-tmb-post">
                                                                        <p><?=$arItem["PROPERTY_POSITION_VALUE"]?>, <?=$arItem["PROPERTY_CITY_VALUE"]?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?else:?>
													<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 364, "height" => 300), BX_RESIZE_IMAGE_EXACT);?>
                                                    <div class="col-12 col-md-6">
                                                        <a class="success-tmb" href="<?="/education_and_development/success/#story=story" . $arItem["ID"]?>">
                                                            <div class="success-tmb-pic"><img src="<?=$img["src"]?>"></div>
                                                            <div class="success-tmb-descr">
                                                                <div class="h3"><?=$arItem["PROPERTY_QUOTE_VALUE"]["TEXT"]?></div>
                                                                <div class="success-tmb-author">
                                                                    <div class="success-tmb-name">
                                                                        <p><?=$arItem["NAME"]?></p>
                                                                    </div>
                                                                    <div class="success-tmb-post">
                                                                        <p><?=$arItem["PROPERTY_POSITION_VALUE"]?>, <?=$arItem["PROPERTY_CITY_VALUE"]?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?endif?>
	
												<?$count++;?>
                                            <?endforeach;?>
                                        </div>
                                    </div>
                                    <div class="all-link-wrapper"><a class="btn btn-1" href="/education_and_development/success/"><?=($arResult["PROPERTIES"]["TITLE_BTN_STORIES"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_BTN_STORIES"]["VALUE"] : "Читать все истории"?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-group section-group-grey-alt">
                <div class="section section-faq">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-4"><a name="faq"></a>
                                    <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_BLOCK_FAQ"]["VALUE"]?></div>
                                    <div class="faq-list">
                                        <?foreach($arResult["PROPERTIES"]["ITEMS_FAQ"]["VALUE"] as $arItems):?>
                                            <div class="faq-item">
                                                <div class="faq-item-ttl">
                                                    <div class="h3"><?=$arItems["NAME"]?></div>
                                                </div>
                                                <div class="faq-item-content">
                                                    <p><?=$arItems["PREVIEW_TEXT"]?></p>
                                                </div>
                                            </div>
                                        <?endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



<?/*
<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>