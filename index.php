<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 

      <main>
        <!-- Верхний блок-->
        <div class="section section-top">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.detail",
				"mainBackground",
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
					"ELEMENT_ID" => "17",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"IBLOCK_ID" => "5",
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
          <div class="container">
            <div class="section-content">
              <div class="section-top-ttl">
                <div class="h1">
					<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleH1.php"));?>
                </div>
              </div>
              <div class="section-top-links">
                <div class="row">
                    <?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"mainBtnBackground",
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
							"IBLOCK_ID" => "6",
							"IBLOCK_TYPE" => "main",
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
							"PROPERTY_CODE" => array("TITLE_BTN","LINK_BTN",""),
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
            </div>
          </div>
        </div>
        <!-- Верхний блок END-->
        <!-- 6 причин-->
        <div class="section section-reasons">
          <div class="container">
            <div class="section-content">
                <div class="h2">
                  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleBlockTwo.php"));?>
                </div>
                
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "mainSliderBlockTwo",
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
                        "COMPONENT_TEMPLATE" => "mainSliderBlockTwo",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(0=>"",1=>"",),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "1",
                        "IBLOCK_TYPE" => "main",
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
                        "PROPERTY_CODE" => array(0=>"TITLE_TO_SLIDE",1=>"",),
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
        <!-- 6 причин END-->
        <!-- Работа в магазине-->
        <div class="section section-dept section-grey">
          <div class="container">
            <div class="section-content">
              <div class="dept-teaser">
				  <?$APPLICATION->IncludeComponent(
					  "bitrix:news.detail",
					  "mainBlockJobOne",
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
						  "COMPONENT_TEMPLATE" => "mainBlockJobOne",
						  "DETAIL_URL" => "",
						  "DISPLAY_BOTTOM_PAGER" => "N",
						  "DISPLAY_DATE" => "N",
						  "DISPLAY_NAME" => "Y",
						  "DISPLAY_PICTURE" => "Y",
						  "DISPLAY_PREVIEW_TEXT" => "Y",
						  "DISPLAY_TOP_PAGER" => "N",
						  "ELEMENT_CODE" => "",
						  "ELEMENT_ID" => "7",
						  "FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
						  "IBLOCK_ID" => "2",
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
              <div class="h3">Последние вакансии</div>
              <div class="vac-list vac-list-alt">
                <div class="row">
                  <div class="col-12 col-md-4"><a class="vac-tmb" href="#">
                      <div class="vac-tmb-header">
                        <div class="h3">специалист по сервису (продавец-консультант) в дисконт-центр</div>
                        <div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
                      </div>
                      <div class="vac-tmb-footer">
                        <div class="vac-tmb-place">
                          <p>Фирменный магазин, Москва</p>
                        </div>
                        <div class="vac-tmb-logo"><img src="/layout/images/logo-adidas.svg"></div>
                      </div></a></div>
                  <div class="col-12 col-md-4"><a class="vac-tmb" href="#">
                      <div class="vac-tmb-header">
                        <div class="h3">инструктор по бегу</div>
                        <div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
                      </div>
                      <div class="vac-tmb-footer">
                        <div class="vac-tmb-place">
                          <p>Фирменный магазин, Москва</p>
                        </div>
                        <div class="vac-tmb-logo"><img src="/layout/images/logo-reebok.svg"></div>
                      </div></a></div>
                  <div class="col-12 col-md-4"><a class="vac-tmb" href="#">
                      <div class="vac-tmb-header">
                        <div class="h3">специалист по фитнесу (продавец-консультант)</div>
                        <div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
                      </div>
                      <div class="vac-tmb-footer">
                        <div class="vac-tmb-place">
                          <p>Фирменный магазин, Москва</p>
                        </div>
                        <div class="vac-tmb-logo"><img src="/layout/images/logo-adidas.svg"></div>
                      </div></a></div>
                </div>
              </div>
              <div class="all-link-wrapper"><a class="btn btn-2" href="#">Все вакансии в магазинах</a></div>
            </div>
          </div>
        </div>
        <!-- Работа в магазине END-->
        <!-- Работа в офисе-->
        <div class="section section-dept section-white">
          <div class="container">
            <div class="section-content">
              <div class="dept-teaser">
				  <?$APPLICATION->IncludeComponent(
					  "bitrix:news.detail",
					  "mainBlockJobOne",
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
						  "COMPONENT_TEMPLATE" => "mainBlockJobOne",
						  "DETAIL_URL" => "",
						  "DISPLAY_BOTTOM_PAGER" => "N",
						  "DISPLAY_DATE" => "N",
						  "DISPLAY_NAME" => "Y",
						  "DISPLAY_PICTURE" => "Y",
						  "DISPLAY_PREVIEW_TEXT" => "Y",
						  "DISPLAY_TOP_PAGER" => "N",
						  "ELEMENT_CODE" => "",
						  "ELEMENT_ID" => "8",
						  "FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
						  "IBLOCK_ID" => "2",
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
              <div class="h3">Последние вакансии</div>
              <div class="vac-list vac-list-alt">
                <div class="row">
                  <div class="col-12 col-md-4"><a class="vac-tmb" href="#">
                      <div class="vac-tmb-header">
                        <div class="h3">специалист по сервису (продавец-консультант) в дисконт-центр</div>
                        <div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
                      </div>
                      <div class="vac-tmb-footer">
                        <div class="vac-tmb-place">
                          <p>Фирменный магазин, Москва</p>
                        </div>
                        <div class="vac-tmb-logo"><img src="/layout/images/logo-adidas.svg"></div>
                      </div></a></div>
                  <div class="col-12 col-md-4"><a class="vac-tmb" href="#">
                      <div class="vac-tmb-header">
                        <div class="h3">инструктор по бегу</div>
                        <div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
                      </div>
                      <div class="vac-tmb-footer">
                        <div class="vac-tmb-place">
                          <p>Фирменный магазин, Москва</p>
                        </div>
                        <div class="vac-tmb-logo"><img src="/layout/images/logo-reebok.svg"></div>
                      </div></a></div>
                  <div class="col-12 col-md-4"><a class="vac-tmb" href="#">
                      <div class="vac-tmb-header">
                        <div class="h3">специалист по фитнесу (продавец-консультант)</div>
                        <div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
                      </div>
                      <div class="vac-tmb-footer">
                        <div class="vac-tmb-place">
                          <p>Фирменный магазин, Москва</p>
                        </div>
                        <div class="vac-tmb-logo"><img src="/layout/images/logo-adidas.svg"></div>
                      </div></a></div>
                </div>
              </div>
              <div class="all-link-wrapper"><a class="btn btn-2" href="#">Все вакансии в магазинах</a></div>
            </div>
          </div>
        </div>
        <!-- Работа в офисе END-->
        <!-- Работа в центре дистрибуции-->
        <div class="section section-dept section-grey">
          <div class="container">
            <div class="section-content">
              <div class="dept-teaser">
				  <?$APPLICATION->IncludeComponent(
					  "bitrix:news.detail",
					  "mainBlockJobOne",
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
						  "COMPONENT_TEMPLATE" => "mainBlockJobOne",
						  "DETAIL_URL" => "",
						  "DISPLAY_BOTTOM_PAGER" => "N",
						  "DISPLAY_DATE" => "N",
						  "DISPLAY_NAME" => "Y",
						  "DISPLAY_PICTURE" => "Y",
						  "DISPLAY_PREVIEW_TEXT" => "Y",
						  "DISPLAY_TOP_PAGER" => "N",
						  "ELEMENT_CODE" => "",
						  "ELEMENT_ID" => "9",
						  "FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
						  "IBLOCK_ID" => "2",
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
              <div class="h3">Последние вакансии</div>
              <div class="vac-list vac-list-alt">
                <div class="row">
                  <div class="col-12 col-md-4"><a class="vac-tmb" href="#">
                      <div class="vac-tmb-header">
                        <div class="h3">специалист по сервису (продавец-консультант) в дисконт-центр</div>
                        <div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
                      </div>
                      <div class="vac-tmb-footer">
                        <div class="vac-tmb-place">
                          <p>Фирменный магазин, Москва</p>
                        </div>
                        <div class="vac-tmb-logo"><img src="/layout/images/logo-adidas.svg"></div>
                      </div></a></div>
                  <div class="col-12 col-md-4"><a class="vac-tmb" href="#">
                      <div class="vac-tmb-header">
                        <div class="h3">инструктор по бегу</div>
                        <div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
                      </div>
                      <div class="vac-tmb-footer">
                        <div class="vac-tmb-place">
                          <p>Фирменный магазин, Москва</p>
                        </div>
                        <div class="vac-tmb-logo"><img src="/layout/images/logo-reebok.svg"></div>
                      </div></a></div>
                  <div class="col-12 col-md-4"><a class="vac-tmb" href="#">
                      <div class="vac-tmb-header">
                        <div class="h3">специалист по фитнесу (продавец-консультант)</div>
                        <div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
                      </div>
                      <div class="vac-tmb-footer">
                        <div class="vac-tmb-place">
                          <p>Фирменный магазин, Москва</p>
                        </div>
                        <div class="vac-tmb-logo"><img src="/layout/images/logo-adidas.svg"></div>
                      </div></a></div>
                </div>
              </div>
              <div class="all-link-wrapper"><a class="btn btn-2" href="#">Все вакансии в магазинах</a></div>
            </div>
          </div>
        </div>
        <!-- Работа в центре дистрибуции END-->
        <!-- Новости-->
        <div class="section section-news section-white">
          <div class="container">
            <div class="section-content">
              <div class="h2">
				  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleNews.php"));?>
              </div>
              <div class="section-sub-ttl">
				  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/subtitleNews.php"));?>
              </div>
              <div class="news-list news-list-alt">
                <div class="row">
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"newsAndArticle",
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
							"COMPONENT_TEMPLATE" => "newsAndArticle",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array(0=>"TAGS",1=>"",),
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "3",
							"IBLOCK_TYPE" => "news",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"INCLUDE_SUBSECTIONS" => "N",
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
							"PROPERTY_CODE" => array(0=>"PUBLICATION_DATE",1=>"",),
							"SET_BROWSER_TITLE" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "N",
							"SHOW_404" => "N",
							"SORT_BY1" => "PUBLICATION_DATE",
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
              <div class="all-link-wrapper-alt">
				  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/btnAllNews.php"));?>
              </div>
            </div>
          </div>
        </div>
        <!-- Новости END-->
        <!-- Разделы-->
        <div class="section section-cats section-grey">
          <div class="container">
            <div class="section-content">
              <div class="cats-list">
                <div class="row">
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"mainSectionsAndArticle",
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
							"FIELD_CODE" => array("PREVIEW_PICTURE",""),
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "4",
							"IBLOCK_TYPE" => "main",
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
							"PROPERTY_CODE" => array("TITLE_BTN","LINK",""),
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
            </div>
          </div>
        </div>
        <!-- Разделы END-->
      </main>
   
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>