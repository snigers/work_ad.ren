<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');?>
	
	
	<main>
		<div class="page-header">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.detail",
				"careerBackground",
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
					"COMPONENT_TEMPLATE" => "mainBackground",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"ELEMENT_CODE" => "",
					"ELEMENT_ID" => "268",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"IBLOCK_ID" => "51",
					"IBLOCK_TYPE" => "main",
					"IBLOCK_URL" => "",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"MESSAGE_404" => "",
					"META_DESCRIPTION" => "-",
					"META_KEYWORDS" => "-",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Страница",
					"PROPERTY_CODE" => array(0=>"",1=>"LEFT_IMG",2=>"RIGHT_IMG",),
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
		<div class="page-body page-body-black page-body-career">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3">
						<div class="page-sidebar">
							<ul class="page-menu">
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.list",
									"",
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
										"FILTER_NAME" => "",
										"HIDE_LINK_WHEN_NO_DETAIL" => "N",
										"IBLOCK_ID" => "52",
										"IBLOCK_TYPE" => "career",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"INCLUDE_SUBSECTIONS" => "N",
										"MESSAGE_404" => "",
										"NEWS_COUNT" => "2",
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
										"PROPERTY_CODE" => array("","","","","","",""),
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
									)
								);?>
							</ul>
						</div>
					</div>
					<div class="col-12 col-md-8 offset-md-1">
						<div class="page-content-wrapper page-content-wrapper-black">
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
							<div class="page-title"><a name="career"></a>
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"careerDescription",
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
										"COMPONENT_TEMPLATE" => "mainBackground",
										"DETAIL_URL" => "",
										"DISPLAY_BOTTOM_PAGER" => "N",
										"DISPLAY_DATE" => "Y",
										"DISPLAY_NAME" => "Y",
										"DISPLAY_PICTURE" => "Y",
										"DISPLAY_PREVIEW_TEXT" => "Y",
										"DISPLAY_TOP_PAGER" => "N",
										"ELEMENT_CODE" => "",
										"ELEMENT_ID" => "271",
										"FIELD_CODE" => array(0=>"",1=>"",),
										"IBLOCK_ID" => "53",
										"IBLOCK_TYPE" => "main",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array(0=>"",1=>"LEFT_IMG",2=>"RIGHT_IMG",),
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
								
								
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.list",
									"careerStairs",
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
										"FIELD_CODE" => array("", ""),
										"FILTER_NAME" => "",
										"HIDE_LINK_WHEN_NO_DETAIL" => "N",
										"IBLOCK_ID" => "50",
										"IBLOCK_TYPE" => "career",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"INCLUDE_SUBSECTIONS" => "N",
										"MESSAGE_404" => "",
										"NEWS_COUNT" => "100",
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
										"PROPERTY_CODE" => array("TITLE_WHERE_I_GO", "TITLE_WHAT_I_DOING", "DESC_WHERE_I_GO", "DESC_WHAT_I_DOING", "FULL_NAME", ""),
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
									)
								);?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>



<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>