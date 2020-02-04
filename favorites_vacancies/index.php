<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Избранные вакансии");
?>
<main>
	<div class="page-header">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.detail",
			"vacanciesImgHeader",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_ELEMENT_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"BROWSER_TITLE" => "-",
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
				"ELEMENT_CODE" => "",
				"ELEMENT_ID" => "195",
				"FIELD_CODE" => array("PREVIEW_PICTURE",""),
				"IBLOCK_ID" => "34",
				"IBLOCK_TYPE" => "vacancies",
				"IBLOCK_URL" => "",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"MESSAGE_404" => "",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Страница",
				"PROPERTY_CODE" => array("LEFT_IMG_HEADER","RIGHT_IMG_HEADER",""),
				"SET_BROWSER_TITLE" => "N",
				"SET_CANONICAL_URL" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"STRICT_SECTION_CHECK" => "N",
				"USE_PERMISSIONS" => "N",
				"USE_SHARE" => "N"
			),
			false,
			array('HIDE_ICONS' => "Y")
		);?>
	</div>
	<div class="page-body page-body-grey">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-4">
					<div class="page-title page-title-alt page-title-grey">
						<div class="h1"><?$APPLICATION->ShowTitle(false);?></div>
					</div>
				</div>
			</div>
			<div class="wide-page-wrapper">
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
				<div class="vac-list vac-list-fav">
					<div class="row row-alt">
                        <?if (!empty($_SESSION["LIST_FAVORITES"])):?>
                            <?$GLOBALS['arrFilter'] = array("ACTIVE" => array("Y", "N"), "ID" => $_SESSION["LIST_FAVORITES"])?>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "vacanciesFavorit",
                                array(
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
                                    "CHECK_DATES" => "N",
                                    "COMPONENT_TEMPLATE" => "vacanciesFavorit",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(
                                        0 => "",
                                        1 => "ACTIVE",
                                        2 => "",
                                    ),
                                    "FILTER_NAME" => "arrFilter",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "27",
                                    "IBLOCK_TYPE" => "job_openings",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "N",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "1000",
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
                                    "PROPERTY_CODE" => array(
                                        0 => "BRAND",
                                        1 => "VIDEO",
                                        2 => "CITY",
                                        3 => "CITY_QUOTE",
                                        4 => "PUBLICATION_DATA",
                                        5 => "POSITION_AUTHOR_QUOTE",
                                        6 => "TITLE_WHY_ADIDAS",
                                        7 => "TITLE_VACANCIES",
                                        8 => "TITLE_BLOCK_FAQ",
                                        9 => "TITLE_BLOCK_SUCCESS_STORIES",
                                        10 => "TITLE_BLOCK_SIMILAR_VACANCIES",
                                        11 => "TITLE_BLOCK_VIDEO",
                                        12 => "NAME_AUTHOR_QUOTE",
                                        13 => "SHORT_TITLE",
                                        14 => "BTN_TWO_TITLE",
                                        15 => "TITLE_BTN_STORIES",
                                        16 => "TITLE_BTN_SIMILAR",
                                        17 => "BTN_ONE_TITLE",
                                        18 => "DIRECTION",
                                        19 => "TYPE_EMPLOYMENT",
                                        20 => "QUOTE",
                                        21 => "",
                                    ),
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "SORT",
                                    "SORT_BY2" => "ID",
                                    "SORT_ORDER1" => "ASC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N"
                                ),
                                false
                            );?>
                        <?endif;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>