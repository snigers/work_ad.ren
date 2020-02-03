<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<main>
    <div class="page-header">
        <div class="row">
            <div class="col-6">
				<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["LEFT_IMG_HEADER"]["VALUE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
                <div class="page-header-bg" style="background-image: url(<?=($img["src"]) ? $img["src"] : "/layout/files/page-header-bg-typography-l.jpg"?>)"></div>
            </div>
            <div class="col-6">
				<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["RIGHT_IMG_HEADER"]["VALUE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
                <div class="page-header-bg" style="background-image: url(<?=($img["src"]) ? $img["src"] : "/layout/files/page-header-bg-typography-r.jpg"?>)"></div>
            </div>
        </div>
    </div>
    
    <?
//    pr($arResult);
    ?>
    <div class="page-body">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="page-sidebar">
                        <ul class="page-menu">
                            <?if ($arResult["PROPERTIES"]["FIRST_MENU_ITEM"]["VALUE"]):?>
                                <li><a href="why"><?=$arResult["PROPERTIES"]["FIRST_MENU_ITEM"]["VALUE"]?></a></li>
                            <?endif;?>
							<?if ($arResult["PROPERTIES"]["TWO_MENU_ITEM"]["VALUE"]):?>
                                <li><a href="vacancies"><?=$arResult["PROPERTIES"]["TWO_MENU_ITEM"]["VALUE"]?></a></li>
							<?endif;?>
							<?if ($arResult["PROPERTIES"]["THREE_MENU_ITEM"]["VALUE"]):?>
                                <li><a href="excursion"><?=$arResult["PROPERTIES"]["THREE_MENU_ITEM"]["VALUE"]?></a></li>
							<?endif;?>
							<?if ($arResult["PROPERTIES"]["FOUR_MENU_ITEM"]["VALUE"]):?>
                                <li><a href="department"><?=$arResult["PROPERTIES"]["FOUR_MENU_ITEM"]["VALUE"]?></a></li>
							<?endif;?>
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
<!--                        <ul class="breadcrumb">-->
<!--                            <li><a href="#">Adidas</a></li>-->
<!--                            <li><a href="#">Бренды</a></li>-->
<!--                            <li><span>Adidas</span></li>-->
<!--                        </ul>-->
                        <div class="page-title">
                            <h1><?=$arResult["NAME"]?></h1>
                        </div>

                        <div class="page-content">
                            <?=$arResult["PROPERTIES"]["SUBTITLE"]["~VALUE"]["TEXT"]?>
                            <div class="article-button-wrapper"><a class="btn btn-1" href="<?=($arResult["PROPERTIES"]["LINK_BTN_ANKET"]["VALUE"]) ? $arResult["PROPERTIES"]["LINK_BTN_ANKET"]["VALUE"] : "/profile_office/"?>">
                                    <span><?=($arResult["PROPERTIES"]["BTN_ANKET"]["VALUE"]) ? $arResult["PROPERTIES"]["BTN_ANKET"]["VALUE"] : "Заполнить анкету"?></span></a></div>
                            <a name="why"></a>
                            <div class="h2"><?=($arResult["PROPERTIES"]["TITLE_WHY_ADIDAS"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_WHY_ADIDAS"]["VALUE"] : "Почему Adidas"?></div>
                            <div class="why-list">
                                <div class="row">
                                    <?foreach($arResult["PROPERTIES"]["ELEMENT_WHY_ADIDAS"]["VALUE"] as $arItem):?>
                                        <div class="col-12 col-md-6">
                                            <div class="why-tmb">
	
												<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
                                                <div class="why-tmb-pic" style="background-image:url(<?=$img["src"]?>)"></div>
                                                <div class="why-tmb-descr">
                                                    <div class="why-tmb-num"><?=$arItem["PROPERTY_INDICATOR_VALUE"]?></div>
                                                    <div class="why-tmb-text">
                                                        <p><?=$arItem["NAME"]?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?endforeach;?>
                                </div>
                            </div>
                            
                            <?if ($arResult["PROPERTIES"]["TITLE_VIDEO"]["VALUE"] && $arResult["PROPERTIES"]["LINK_VIDEO"]["VALUE"]):?>
                                <div class="h3"><?=$arResult["PROPERTIES"]["TITLE_VIDEO"]["VALUE"]?></div>
                                <div><?=$arResult["PROPERTIES"]["LINK_VIDEO"]["VALUE"]?></div>
                            <?endif;?>
                            
                            <div class="block-wide">
                                <div class="blockquote-alt-wrapper">
                                    <div class="blockquote-alt-pics">
                                        <div class="row">
                                            <?foreach($arResult["PROPERTIES"]["IMG_QUOTE"]["VALUE"] as $arImg):?>
                                                <div class="col-6"><img src="<?=CFile::GetPath($arImg)?>"></div>
                                            <?endforeach;?>
                                        </div>
                                    </div>
                                    <blockquote class="blockquote-alt">
                                        <div class="blockquote-alt-content">
                                            <div class="blockquote-alt-text">
                                                <?=$arResult["PROPERTIES"]["QUOTE"]["~VALUE"]["TEXT"]?>
                                            </div>
                                            <div class="blockquote-alt-author">
                                                <?if ($arResult["PROPERTIES"]["QUOTE_AUTHOR"]["VALUE"] && $arResult["PROPERTIES"]["POSITION"]["VALUE"] && $arResult["PROPERTIES"]["CITY"]["VALUE"]):?>
                                                    <p><strong><?=$arResult["PROPERTIES"]["QUOTE_AUTHOR"]["VALUE"]?>,</strong> <?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?>, г. <?=$arResult["PROPERTIES"]["CITY"]["VALUE"]?></p>
                                                <?endif;?>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            
                            <div class="h4">
                                <?if ($arResult["PROPERTIES"]["SUBTITLE_QUOTE"]["VALUE"]):?>
                                    <?=$arResult["PROPERTIES"]["SUBTITLE_QUOTE"]["VALUE"]?>
                                <?endif;?>
                            </div>
                            
                            <?=$arResult["PROPERTIES"]["DESCRIPTION_QUOTE"]["~VALUE"]["TEXT"]?>


                        
                        
                        </div>
<!--                        <div class="page-content">-->
<!--							--><?//=$arResult["PROPERTIES"]["CONTENT"]["~VALUE"]["TEXT"]?>
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <?if ($arResult["PROPERTIES"]["OPEN_LAST_VAC"]["VALUE"] == "Y"):?>
            <div class="section-group section-group-grey">
                <div class="section section-vacancies">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-4">
                                    <a name="vacancies"></a>
                                    <div class="h2"><?=($arResult["PROPERTIES"]["TITLE_LAST_VAC"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_LAST_VAC"]["VALUE"] : "Последние вакансии"?></div>
                                    <div class="vac-list vac-list-alt">
                                        <div class="row">
                                            <?
                                            // Вильтруем только те вакансии у которых указан данный раздел
                                            $resID = array();
                                            foreach ($arParams["VACANCIES_LIST"] as $keyID => $arVac)
                                            {
                                                if ($keyID == $arResult["ID"])
                                                {
													foreach ($arVac["VACANCIES"] as $VACANCY) {
                                                        $resID[] = $VACANCY;
                                                    }
                                                }
                                            }
											$GLOBALS['arrFilterVac']["ID"] = $resID;
                                            ?>
                                            <?$APPLICATION->IncludeComponent(
                                                "bitrix:news.list",
                                                "jobLastVac",
                                                Array(
                                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                                    "ADD_SECTIONS_CHAIN" => "N",
                                                    "AJAX_MODE" => "N",
                                                    "AJAX_OPTION_ADDITIONAL" => "",
                                                    "AJAX_OPTION_HISTORY" => "N",
                                                    "AJAX_OPTION_JUMP" => "N",
                                                    "AJAX_OPTION_STYLE" => "N",
                                                    "CACHE_FILTER" => "N",
                                                    "CACHE_GROUPS" => "N",
                                                    "CACHE_TIME" => "36000000",
                                                    "CACHE_TYPE" => "A",
                                                    "CHECK_DATES" => "Y",
                                                    "DETAIL_URL" => "",
                                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                                    "DISPLAY_DATE" => "Y",
                                                    "DISPLAY_NAME" => "Y",
                                                    "DISPLAY_PICTURE" => "Y",
                                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                                    "DISPLAY_TOP_PAGER" => "N",
                                                    "FIELD_CODE" => array("",""),
                                                    "FILTER_NAME" => "arrFilterVac",
                                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                                    "IBLOCK_ID" => "27",
                                                    "IBLOCK_TYPE" => "office",
                                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                                    "INCLUDE_SUBSECTIONS" => "N",
                                                    "MESSAGE_404" => "",
                                                    "NEWS_COUNT" => "10000",
                                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                                    "PAGER_DESC_NUMBERING" => "N",
                                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                                    "PAGER_SHOW_ALL" => "N",
                                                    "PAGER_SHOW_ALWAYS" => "N",
                                                    "PAGER_TEMPLATE" => ".default",
                                                    "PAGER_TITLE" => "Новости",
                                                    "PARENT_SECTION" => "",
                                                    "PARENT_SECTION_CODE" => "",
                                                    "PREVIEW_TRUNCATE_LEN" => "",
                                                    "PROPERTY_CODE" => array("INDICATOR",""),
                                                    "SET_BROWSER_TITLE" => "N",
                                                    "SET_LAST_MODIFIED" => "N",
                                                    "SET_META_DESCRIPTION" => "N",
                                                    "SET_META_KEYWORDS" => "N",
                                                    "SET_STATUS_404" => "N",
                                                    "SET_TITLE" => "N",
                                                    "SHOW_404" => "N",
                                                    "SORT_BY1" => "ID",
                                                    "SORT_BY2" => "SORT",
                                                    "SORT_ORDER1" => "ASC",
                                                    "SORT_ORDER2" => "ASC",
                                                    "STRICT_SECTION_CHECK" => "N"
                                                ),
                                                false,
                                                array('HIDE_ICONS' => "Y")
                                            );?>
                                        </div>
                                    </div>
                                    <div class="all-link-wrapper"><a class="btn btn-2" href="/vacancies/">Все вакансии</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?endif;?>
		<?if (is_array($arResult["PROPERTIES"]["GALLERY"]["VALUE"])):?>
            <div class="section section-excursion">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-12 col-md-8 offset-md-4">
                                <a name="excursion"></a>
                                <div class="h2"><?=($arResult["PROPERTIES"]["TITLE_GALLERY"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_GALLERY"]["VALUE"] : "Фотогалерея"?></div>
                                <div class="block-wide">
                                    <div class="gallery-slider">
                                        <?foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $arItem):?>
											<?$img = CFile::ResizeImageGet($arItem, Array("width" => 1134, "height" => 640), BX_RESIZE_IMAGE_EXACT);?>
                                            <div class="slide"><img data-lazy="<?=$img["src"]?>"></div>
                                        <?endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?endif;?>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-4">
                    <div class="page-content-wrapper">
                        <a name="department"></a>
                        <div class="page-content">
                            <div class="h2"><?=($arResult["PROPERTIES"]["TITLE_DEPARTMENT"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_DEPARTMENT"]["VALUE"] : "Работа в других отделах"?></div>
                            <div class="dept-list">
    
    
    
    