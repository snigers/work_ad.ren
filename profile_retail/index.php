<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Анкета для работы в фирменных магазинах");
$APPLICATION->SetPageProperty("TITLE", "Анкета для работы в фирменных магазинах");
?>


	<main>
		<div class="page-header">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.detail",
				"profileBackground",
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
					"ELEMENT_ID" => "282",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"IBLOCK_ID" => "56",
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
		<div class="page-body page-body-dark-grey">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3">
						<div class="page-sidebar">
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.detail",
								"profileMenu",
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
									"ELEMENT_ID" => "283",
									"FIELD_CODE" => array(0=>"",1=>"",),
									"IBLOCK_ID" => "57",
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
									"PROPERTY_CODE" => array(
										0=>"FIRST_POINT",
										1=>"TWO_POINT",
										2=>"THREE_POINT",
										3=>"FOUR_POINT",
										4=>"FIVE_POINT",
										5=>"SIX_POINT"
									),
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
							
							
							<?//Получаем свойство отвечающее за разделы
								$sections = array();
								$property_enums = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>55, "CODE" => "SECTION"));
								while($enum_fields = $property_enums->GetNext())
								{	$sections[] = $enum_fields;	}
//								pr($sections);
							?>
							<?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "profileMenu",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "topSubMenu",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "topSubMenu",
                                    "USE_EXT" => "N",
                                    "COMPONENT_TEMPLATE" => "profileMenu"
                                ),
                                false
                            );?>
<!--							<div class="d-block d-md-none">-->
<!--								<div class="page-tabs-mob">-->
<!--									<div class="dropdown">-->
<!--										<button class="btn dropdown-toggle btn-dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--><?//=$sections[0]["VALUE"]?><!--</button>-->
<!--										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
<!--											<a class="dropdown-item" href="#">--><?//=$sections[1]["VALUE"]?><!--</a>-->
<!--											<a class="dropdown-item" href="#">--><?//=$sections[2]["VALUE"]?><!--</a>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<ul class="page-tabs page-sections">-->
<!--								-->
<!--								<li>-->
<!--									<a class="active" href="" data-section="13">-->
<!--										<div class="cont">Фирменные магазины</div>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li>-->
<!--									<a href="" data-section="14">-->
<!--										<div class="cont">Офис</div>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li>-->
<!--									<a href="" data-section="15">-->
<!--										<div class="cont">Центр дистридуции</div>-->
<!--									</a>-->
<!--								</li>-->
<!--								--><?//foreach ($sections as $key => $arItem):?>
<!--									--><?//// Тут выбираем секцию в зависимости от раздела?>
<!--									--><?//// Оставил в таком виде для возможности редактирования разделов из одного свойства?>
<!--									--><?//if ($key == 0):?>
<!--										<li>-->
<!--											<a class="active" href="" data-section="--><?//=$arItem["ID"]?><!--">-->
<!--												<div class="cont">--><?//=$arItem["VALUE"]?><!--</div>-->
<!--											</a>-->
<!--										</li>-->
<!--									--><?//endif;?>
<!--									--><?//if ($key == 1):?>
<!--										<li>-->
<!--											<a href="/profile_office/" data-section="--><?//=$arItem["ID"]?><!--">-->
<!--												<div class="cont">--><?//=$arItem["VALUE"]?><!--</div>-->
<!--											</a>-->
<!--										</li>-->
<!--									--><?//endif;?>
<!--									--><?//if ($key == 2):?>
<!--										<li>-->
<!--											<a href="/profile_distribution/" data-section="--><?//=$arItem["ID"]?><!--">-->
<!--												<div class="cont">--><?//=$arItem["VALUE"]?><!--</div>-->
<!--											</a>-->
<!--										</li>-->
<!--									--><?//endif;?>
<!--								--><?//endforeach;?>
<!--							</ul>-->
							<div class="page-title">
								<h1><?$APPLICATION->ShowTitle(false)?></h1>
							</div>
							<div class="page-content">
								
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"profileDesc",
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
										"ELEMENT_ID" => "284",
										"FIELD_CODE" => array(0=>"",1=>"",),
										"IBLOCK_ID" => "58",
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
										"PROPERTY_CODE" => array(),
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
								
								<div class="vacancy-form">
									<?$APPLICATION->IncludeComponent(
										"bitrix:iblock.element.add.form",
										"jobApplication",
										Array(
											"COMPONENT_TEMPLATE" => ".default",
											"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
											"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
											"CUSTOM_TITLE_DETAIL_PICTURE" => "",
											"CUSTOM_TITLE_DETAIL_TEXT" => "",
											"CUSTOM_TITLE_IBLOCK_SECTION" => "",
											"CUSTOM_TITLE_NAME" => "",
											"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
											"CUSTOM_TITLE_PREVIEW_TEXT" => "",
											"CUSTOM_TITLE_TAGS" => "",
											"DEFAULT_INPUT_SIZE" => "30",
											"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
											"ELEMENT_ASSOC" => "CREATED_BY",
											"ELEMENT_ASSOC_PROPERTY" => "176",
											"GROUPS" => array(0=>"2",),
											"IBLOCK_ID" => "55",
											"IBLOCK_TYPE" => "job_postings",
											"LEVEL_LAST" => "Y",
											"LIST_URL" => "",
											"MAX_FILE_SIZE" => "0",
											"MAX_LEVELS" => "100000",
											"MAX_USER_ENTRIES" => "100000",
											"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
											"PROPERTY_CODES" => array(0=>"173",1=>"174",2=>"175",3=>"176",4=>"177",5=>"178",6=>"179",7=>"180",8=>"181",9=>"182",10=>"183",11=>"184",12=>"185",13=>"186",14=>"187",15=>"188",16=>"189",17=>"190",18=>"191",19=>"192",20=>"193",),
											"PROPERTY_CODES_REQUIRED" => array(0=>"",),
											"RESIZE_IMAGES" => "N",
											"SEF_MODE" => "N",
											"STATUS" => "ANY",
											"STATUS_NEW" => "N",
											"USER_MESSAGE_ADD" => "",
											"USER_MESSAGE_EDIT" => "",
											"USE_CAPTCHA" => "N"
										)
									);?>
         

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