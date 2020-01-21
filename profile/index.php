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
							
							
							<?
								$sections = array();
								$property_enums = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>55, "CODE" => "SECTION"));
								while($enum_fields = $property_enums->GetNext())
								{	$sections[] = $enum_fields;	}
							?>
							<div class="d-block d-md-none">
								<div class="page-tabs-mob">
									<div class="dropdown">
										<button class="btn dropdown-toggle btn-dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$sections[0]["VALUE"]?></button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#"><?=$sections[1]["VALUE"]?></a>
											<a class="dropdown-item" href="#"><?=$sections[2]["VALUE"]?></a>
										</div>
									</div>
								</div>
							</div>
							<ul class="page-tabs">
								<?foreach ($sections as $key => $arItem):?>
									<?if ($key == 0):?>
										<li>
											<a class="active" href="#">
												<div class="cont"><?=$arItem["VALUE"]?></div>
											</a>
										</li>
									<?else:?>
										<li>
											<a href="#">
												<div class="cont"><?=$arItem["VALUE"]?></div>
											</a>
										</li>
									<?endif;?>
								<?endforeach;?>
							</ul>
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
									<form>
										<div class="form-section"><a name="description"></a>
											<div class="h3">Вакансия</div>
											<div class="row">
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_vacancy">На какую вакансию откликаетесь?</label>
														<select name="vac_vacancy" id="vac_vacancy" title=" " required>
															<option value="" disabled></option>
															<option value="1">Пункт выпадающего списка 1</option>
															<option value="2">Пункт выпадающего списка 2</option>
															<option value="3">Пункт выпадающего списка, занимающий две строки</option>
															<option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
															<option value="5">Пункт выпадающего списка 1</option>
														</select>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_vac_city">Город</label>
														<select name="vac_vac_city" id="vac_vac_city" required>
															<option value="1">Пункт выпадающего списка 1</option>
															<option value="2">Пункт выпадающего списка 2</option>
															<option value="3">Пункт выпадающего списка, занимающий две строки</option>
															<option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
															<option value="5">Пункт выпадающего списка 1</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="form-section"><a name="info"></a>
											<div class="h3">Общие сведения</div>
											<div class="row">
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_name">Имя</label>
														<input type="text" name="vac_name" id="vac_name" placeholder=" " required>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_lastname">Фамилия</label>
														<input type="text" name="vac_lastname" id="vac_lastname" placeholder=" " required>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-grop">
														<label for="vac_birthdate_input">Дата рождения</label>
														<div class="input-group date input-date" id="vac_birthdate" data-target-input="nearest">
															<input class="datetimepicker-input" type="text" data-target="#vac_birthdate" id="vac_birthdate_input" name="vac_birthdate_input" placeholder="--.--.----" required>
															<div class="input-date-arrow" data-target="#vac_birthdate" data-toggle="datetimepicker"></div>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_citizenship">Гражданство</label>
														<input type="text" name="vac_citizenship" id="vac_citizenship" placeholder=" " required>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_city">Город проживания</label>
														<input type="text" name="vac_city" id="vac_city" placeholder=" " required>
													</div>
												</div>
											</div>
										</div>
										<div class="form-section"><a name="contacts"></a>
											<div class="h3">Контакты</div>
											<div class="row">
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_phone">Ваш телефон</label>
														<input class="input-phone" type="text" name="vac_phone" id="vac_phone" placeholder=" " required>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_email">Электронная почта</label>
														<input type="email" name="vac_email" id="vac_email" placeholder=" " required>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_facebook">Ссылка на профиль в Facebook</label>
														<input type="text" name="vac_facebook" id="vac_facebook" placeholder=" " required>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_instagram">Ссылка на профиль в Instagram</label>
														<input type="text" name="vac_instagram" id="vac_instagram" placeholder=" " required>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_vkontakte">Ссылка на профиль в Вконтакте</label>
														<input type="text" name="vac_vkontakte" id="vac_vkontakte" placeholder=" " required>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_odnoklassniki">Ссылка на профиль в Одноклассники</label>
														<input type="text" name="vac_odnoklassniki" id="vac_odnoklassniki" placeholder=" " required>
													</div>
												</div>
											</div>
										</div>
										<div class="form-section"><a name="languages"></a>
											<div class="h3">Языки</div>
											<div class="row">
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label for="vac_lang">Родной язык</label>
														<select name="vac_lang[]" id="vac_lang" required>
															<option value="1">Пункт выпадающего списка 1</option>
															<option value="2">Пункт выпадающего списка 2</option>
															<option value="3">Пункт выпадающего списка, занимающий две строки</option>
															<option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
															<option value="5">Пункт выпадающего списка 1</option>
														</select>
													</div>
												</div>
											</div>
											<div class="hr"></div>
											<div class="multi-form-items">
												<!-- Шаблон того, что добавляем по клику на кнопку-->
												<div class="multi-form-item-template">
													<div class="row">
														<div class="col-12 col-md-6">
															<div class="form-group">
																<label for="vac_lang_foreign">Иностранный язык</label>
																<select name="vac_lang_foreign[]" id="vac_lang_foreign">
																	<option value="1">Пункт выпадающего списка 1</option>
																	<option value="2">Пункт выпадающего списка 2</option>
																	<option value="3">Пункт выпадающего списка, занимающий две строки</option>
																	<option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
																	<option value="5">Пункт выпадающего списка 1</option>
																</select>
															</div>
														</div>
														<div class="col-12 col-md-6">
															<div class="form-group">
																<label for="vac_lang_level">Уровень владения</label>
																<select name="vac_lang_level[]" id="vac_lang_level">
																	<option value="1">Пункт выпадающего списка 1</option>
																	<option value="2">Пункт выпадающего списка 2</option>
																	<option value="3">Пункт выпадающего списка, занимающий две строки</option>
																	<option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
																	<option value="5">Пункт выпадающего списка 1</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<!-- Шаблон того, что добавляем по клику на кнопку END-->
												<div class="multi-form-item" data-index="1">
													<div class="row">
														<div class="col-12 col-md-6">
															<div class="form-group">
																<label for="vac_lang_foreign_1">Иностранный язык</label>
																<select name="vac_lang_foreign[]" id="vac_lang_foreign_1" required>
																	<option value="1">Пункт выпадающего списка 1</option>
																	<option value="2">Пункт выпадающего списка 2</option>
																	<option value="3">Пункт выпадающего списка, занимающий две строки</option>
																	<option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
																	<option value="5">Пункт выпадающего списка 1</option>
																</select>
															</div>
														</div>
														<div class="col-12 col-md-6">
															<div class="form-group">
																<label for="vac_lang_level_1">Уровень владения</label>
																<select name="vac_lang_level[]" id="vac_lang_level_1" required>
																	<option value="1">Пункт выпадающего списка 1</option>
																	<option value="2">Пункт выпадающего списка 2</option>
																	<option value="3">Пункт выпадающего списка, занимающий две строки</option>
																	<option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
																	<option value="5">Пункт выпадающего списка 1</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="btn-add-wrapper">
													<div class="btn btn-2 btn-add btn-add-form-item">Добавить язык</div>
												</div>
											</div>
										</div>
										<div class="form-section"><a name="extra"></a>
											<div class="h3">Дополнительно</div>
											<div class="row">
												<div class="col-12">
													<div class="form-group">
														<label for="vac_knew">Откуда узнали о нас?</label>
														<select name="vac_knew" id="vac_knew" required>
															<option value="1">Пункт выпадающего списка 1</option>
															<option value="2">Пункт выпадающего списка 2</option>
															<option value="3">Пункт выпадающего списка, занимающий две строки</option>
															<option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
															<option value="5">Пункт выпадающего списка 1</option>
														</select>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<label for="vac_story">Расскажите о себе, или напишите что угодно</label>
														<textarea name="vac_story" id="vac_story" rows="4" placeholder=" " required></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="form-section"><a name="cv"></a>
											<div class="h3">Резюме <span>(необязательно)</span></div>
											<div class="row">
												<div class="col-12">
													<div class="form-group">
														<label for="vac_cv">Вставьте ссылку на ваше резюме</label>
														<input type="text" name="vac_cv" id="vac_cv" placeholder=" ">
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<label for="vac_cv_file">Или прикрепите файл резюме или его скриншоты</label>
														<input type="file" name="vac_cv_file" id="vac_cv_file" data-label="Прикрепить резюме">
													</div>
												</div>
											</div>
										</div>
										<div class="form-section">
											<div class="form-agree">
												<div class="form-checkbox">
													<input type="checkbox" name="vac_agree" id="vac_agree" required>
													<label for="vac_agree">Я принимаю <a href="#">пользовательское соглашение</a></label>
												</div>
											</div>
										</div>
										<div class="form-footer">
											<button class="btn btn-1 btn-1-bigger" type="submit">Отправить анкету</button>
										</div>
									</form>
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