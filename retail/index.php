<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Работай в фирменных магазинах adidas");
$APPLICATION->SetTitle("Работай в фирменных магазинах adidas");
?>
	
	
	<main>
		<div class="page-header">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.detail",
				"retailBackground",
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
					"ELEMENT_ID" => "63",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"IBLOCK_ID" => "18",
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
		<div class="page-body">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3">
						<div class="page-sidebar">
       
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"retailMenu",
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
									"COMPONENT_TEMPLATE" => "retailMenu",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array(0=>"",1=>"",),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "19",
									"IBLOCK_TYPE" => "office",
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
									"PROPERTY_CODE" => array(0=>"TITLE_FOR_MENU",1=>"LINK_FOR_MENU",),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "SORT",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "ASC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N"
								)
							);?>
      
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
								<div class="h1"><?$APPLICATION->ShowTitle(false);?></div>
							</div>
       
							<div class="page-content">
								
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"retailSubtitleAndBtnProfile",
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
										"ELEMENT_ID" => "73",
										"FIELD_CODE" => array(0=>"",1=>"",),
										"IBLOCK_ID" => "20",
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
									)
								);?>
                                
                                <a name="why"></a>
								
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"retailTitleH2",
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
										"ELEMENT_ID" => "64",
										"FIELD_CODE" => array("",""),
										"IBLOCK_ID" => "19",
										"IBLOCK_TYPE" => "office",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array("",""),
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
        
								<div class="why-list">
									<div class="row">
										
										<?$APPLICATION->IncludeComponent(
											"bitrix:news.list",
											"retailWhyAdidas",
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
												"IBLOCK_ID" => "21",
												"IBLOCK_TYPE" => "office",
												"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
												"INCLUDE_SUBSECTIONS" => "N",
												"MESSAGE_404" => "",
												"NEWS_COUNT" => "20",
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
								
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"retailTitleH3",
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
										"ELEMENT_ID" => "72",
										"FIELD_CODE" => array("",""),
										"IBLOCK_ID" => "19",
										"IBLOCK_TYPE" => "office",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array("",""),
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
									"bitrix:news.detail",
									"retailBlockWithQuote",
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
										"ELEMENT_ID" => "78",
										"FIELD_CODE" => array("",""),
										"IBLOCK_ID" => "22",
										"IBLOCK_TYPE" => "office",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array("AUTHOR","POSITION_AND_CITY","TITLE","DESCRIPTION","QUOTE",""),
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
									)
								);?>
                                
                                <a name="departments"></a>
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
								<div class="col-12 col-md-8 offset-md-4"><a name="vacancies"></a>
         
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"retailTitleH2",
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
											"ELEMENT_ID" => "65",
											"FIELD_CODE" => array("",""),
											"IBLOCK_ID" => "19",
											"IBLOCK_TYPE" => "office",
											"IBLOCK_URL" => "",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"MESSAGE_404" => "",
											"META_DESCRIPTION" => "-",
											"META_KEYWORDS" => "-",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Страница",
											"PROPERTY_CODE" => array("",""),
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
									
									<div class="vac-list vac-list-alt">
										<div class="row">
                                            <?$APPLICATION->IncludeComponent(
												"bitrix:news.list",
												"retailLastVac",
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
									<div class="all-link-wrapper"><a class="btn btn-2" href="#">Все вакансии</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section section-stores">
					<div class="container">
						<div class="section-content">
							<div class="row">
								<div class="col-12 col-md-8 offset-md-4">
         
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"retailTitleH2",
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
											"ELEMENT_ID" => "66",
											"FIELD_CODE" => array("",""),
											"IBLOCK_ID" => "19",
											"IBLOCK_TYPE" => "office",
											"IBLOCK_URL" => "",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"MESSAGE_404" => "",
											"META_DESCRIPTION" => "-",
											"META_KEYWORDS" => "-",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Страница",
											"PROPERTY_CODE" => array("",""),
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
							</div>
							<div class="block-wide">
								<div class="stores-map-wrapper">
									<div class="stores-map-controls">
										<div class="stores-map-select form-alt">
											<select class="city-select" name="stores_city" id="stores_city">
												<option value="1" data-stores="load/stores-moscow.json" selected>Москва</option>
												<option value="2" data-stores="load/stores-spb.json">Санкт-Петербург</option>
												<option value="3" data-stores="load/stores-nn.json">Нижний Новгород</option>
											</select>
										</div>
										<div class="stores-map-menu">
											<ul>
												<li class="active" data-view="#storesMap">На&nbsp;карте</li>
												<li data-view="#storesList">Списком</li>
											</ul>
										</div>
									</div>
									<div class="stores-map stores-tab" id="storesMap" style="display: block;"></div>
									<div class="stores-list stores-tab" id="storesList" style="display: none;">
										<div class="stores-table-header-wrapper">
											<table class="stores-table-header">
												<tr>
													<th>Название</th>
													<th>Бренды</th>
													<th>Метро</th>
													<th>Адрес</th>
													<th>Телефоны</th>
												</tr>
											</table>
										</div>
										<div class="stores-table-wrapper">
											<table class="stores-table"></table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-group section-group-dark-grey">
				<div class="section section-career">
					<div class="container">
						<div class="section-content">
							<div class="row">
								<div class="col-12 col-md-8 offset-md-4">
									<div class="career-list">
                                        <a name="adaptation"></a>
										
										
										<?$APPLICATION->IncludeComponent(
											"bitrix:news.detail",
											"retailAdaptation",
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
												"COMPONENT_TEMPLATE" => "retailAdaptation",
												"DETAIL_URL" => "",
												"DISPLAY_BOTTOM_PAGER" => "N",
												"DISPLAY_DATE" => "Y",
												"DISPLAY_NAME" => "Y",
												"DISPLAY_PICTURE" => "Y",
												"DISPLAY_PREVIEW_TEXT" => "Y",
												"DISPLAY_TOP_PAGER" => "N",
												"ELEMENT_CODE" => "",
												"ELEMENT_ID" => "79",
												"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
												"IBLOCK_ID" => "23",
												"IBLOCK_TYPE" => "office",
												"IBLOCK_URL" => "",
												"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
												"MESSAGE_404" => "",
												"META_DESCRIPTION" => "-",
												"META_KEYWORDS" => "-",
												"PAGER_BASE_LINK_ENABLE" => "N",
												"PAGER_SHOW_ALL" => "N",
												"PAGER_TEMPLATE" => ".default",
												"PAGER_TITLE" => "Страница",
												"PROPERTY_CODE" => array(0=>"TITLE_BTN",1=>"LINK_BTN",2=>"",),
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
											)
										);?>
                                        
                                        <a name="career"></a>
										
										<?$APPLICATION->IncludeComponent(
											"bitrix:news.detail",
											"retailAdaptation",
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
												"COMPONENT_TEMPLATE" => "retailAdaptation",
												"DETAIL_URL" => "",
												"DISPLAY_BOTTOM_PAGER" => "N",
												"DISPLAY_DATE" => "Y",
												"DISPLAY_NAME" => "Y",
												"DISPLAY_PICTURE" => "Y",
												"DISPLAY_PREVIEW_TEXT" => "Y",
												"DISPLAY_TOP_PAGER" => "N",
												"ELEMENT_CODE" => "",
												"ELEMENT_ID" => "80",
												"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
												"IBLOCK_ID" => "23",
												"IBLOCK_TYPE" => "office",
												"IBLOCK_URL" => "",
												"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
												"MESSAGE_404" => "",
												"META_DESCRIPTION" => "-",
												"META_KEYWORDS" => "-",
												"PAGER_BASE_LINK_ENABLE" => "N",
												"PAGER_SHOW_ALL" => "N",
												"PAGER_TEMPLATE" => ".default",
												"PAGER_TITLE" => "Страница",
												"PROPERTY_CODE" => array(0=>"TITLE_BTN",1=>"LINK_BTN",2=>"",),
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
											)
										);?>
          
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section section-success">
					<div class="container">
						<div class="section-content">
							<div class="row">
								<div class="col-12 col-md-8 offset-md-4">
                                    <a name="success"></a>
									
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"retailTitleH2",
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
											"ELEMENT_ID" => "69",
											"FIELD_CODE" => array("",""),
											"IBLOCK_ID" => "19",
											"IBLOCK_TYPE" => "office",
											"IBLOCK_URL" => "",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"MESSAGE_404" => "",
											"META_DESCRIPTION" => "-",
											"META_KEYWORDS" => "-",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Страница",
											"PROPERTY_CODE" => array("",""),
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
         
									<div class="success-list">
										<div class="row">
           
											<?$APPLICATION->IncludeComponent(
												"bitrix:news.list",
												"retailHistorySuccess",
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
													"COMPONENT_TEMPLATE" => "retailHistorySuccess",
													"DETAIL_URL" => "",
													"DISPLAY_BOTTOM_PAGER" => "N",
													"DISPLAY_DATE" => "Y",
													"DISPLAY_NAME" => "Y",
													"DISPLAY_PICTURE" => "Y",
													"DISPLAY_PREVIEW_TEXT" => "Y",
													"DISPLAY_TOP_PAGER" => "N",
													"FIELD_CODE" => array(0=>"PREVIEW_TEXT",1=>"",),
													"FILTER_NAME" => "",
													"HIDE_LINK_WHEN_NO_DETAIL" => "N",
													"IBLOCK_ID" => "14",
													"IBLOCK_TYPE" => "history_success",
													"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
													"INCLUDE_SUBSECTIONS" => "Y",
													"MESSAGE_404" => "",
													"NEWS_COUNT" => "3",
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
													"PROPERTY_CODE" => array(0=>"CITY",1=>"POSITION",2=>"QUOTE",3=>"",),
													"SET_BROWSER_TITLE" => "N",
													"SET_LAST_MODIFIED" => "N",
													"SET_META_DESCRIPTION" => "N",
													"SET_META_KEYWORDS" => "N",
													"SET_STATUS_404" => "N",
													"SET_TITLE" => "N",
													"SHOW_404" => "N",
													"SORT_BY1" => "ID",
													"SORT_BY2" => "SORT",
													"SORT_ORDER1" => "DESC",
													"SORT_ORDER2" => "ASC",
													"STRICT_SECTION_CHECK" => "N"
												),
												false,
												array('HIDE_ICONS' => "Y")
											);?>
           
										</div>
									</div>
									<div class="all-link-wrapper">
										<?$APPLICATION->IncludeComponent(
											"bitrix:news.detail",
											"retailButtonSuccess",
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
												"ELEMENT_ID" => "81",
												"FIELD_CODE" => array("",""),
												"IBLOCK_ID" => "24",
												"IBLOCK_TYPE" => "office",
												"IBLOCK_URL" => "",
												"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
												"MESSAGE_404" => "",
												"META_DESCRIPTION" => "-",
												"META_KEYWORDS" => "-",
												"PAGER_BASE_LINK_ENABLE" => "N",
												"PAGER_SHOW_ALL" => "N",
												"PAGER_TEMPLATE" => ".default",
												"PAGER_TITLE" => "Страница",
												"PROPERTY_CODE" => array("LINK",""),
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
											)
										);?>

                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section section-excursion">
					<div class="container">
						<div class="section-content">
							<div class="row">
								<div class="col-12 col-md-8 offset-md-4"><a name="excursion"></a>
									
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"retailTitleH2",
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
											"ELEMENT_ID" => "70",
											"FIELD_CODE" => array("",""),
											"IBLOCK_ID" => "19",
											"IBLOCK_TYPE" => "office",
											"IBLOCK_URL" => "",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"MESSAGE_404" => "",
											"META_DESCRIPTION" => "-",
											"META_KEYWORDS" => "-",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Страница",
											"PROPERTY_CODE" => array("",""),
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
         
									<div class="block-wide">
										
										<?$APPLICATION->IncludeComponent(
											"bitrix:news.detail",
											"retailSliderAtEnd",
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
												"ELEMENT_ID" => "82",
												"FIELD_CODE" => array("",""),
												"IBLOCK_ID" => "25",
												"IBLOCK_TYPE" => "office",
												"IBLOCK_URL" => "",
												"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
												"MESSAGE_404" => "",
												"META_DESCRIPTION" => "-",
												"META_KEYWORDS" => "-",
												"PAGER_BASE_LINK_ENABLE" => "N",
												"PAGER_SHOW_ALL" => "N",
												"PAGER_TEMPLATE" => ".default",
												"PAGER_TITLE" => "Страница",
												"PROPERTY_CODE" => array("","SLIDER",""),
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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-group section-group-grey">
				<div class="section section-faq">
					<div class="container">
						<div class="section-content">
							<div class="row">
								<div class="col-12 col-md-8 offset-md-4"><a name="faq"></a>
         
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.detail",
										"retailTitleH2",
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
											"ELEMENT_ID" => "71",
											"FIELD_CODE" => array("",""),
											"IBLOCK_ID" => "19",
											"IBLOCK_TYPE" => "office",
											"IBLOCK_URL" => "",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"MESSAGE_404" => "",
											"META_DESCRIPTION" => "-",
											"META_KEYWORDS" => "-",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Страница",
											"PROPERTY_CODE" => array("",""),
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
         
									<div class="faq-list">
										<?$APPLICATION->IncludeComponent(
											"bitrix:news.list",
											"retailQuoteAnswer",
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
												"IBLOCK_ID" => "26",
												"IBLOCK_TYPE" => "office",
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
												"PROPERTY_CODE" => array("ANSWER", ""),
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
											)
										);?>
          
									</div>
								</div>
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