<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>



<form id="form_anketa" method="post" enctype="multipart/form-data">
        <div class="form-section"><a name="description"></a>
            <div class="h3">Вакансия</div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_vacancy"><?=$arResult["PROPERTY_LIST_FULL"][174]["NAME"]?></label>
                        <select name="PROPERTY[174]" id="vac_vacancy" title=" " data-getname="<?=$_GET["name"]?>" required>
                            <option value="" disabled></option>
                            <?foreach ($arResult["PROPERTY_LIST_FULL"][174]["ENUM"] as $arItem):?>
                                <option value="<?=$arItem["ID"]?>"><?=$arItem["NAME"]?></option>
                            <?endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_vac_city"><?=$arResult["PROPERTY_LIST_FULL"][175]["NAME"]?></label>
                        <select name="PROPERTY[175][0][VALUE]" id="vac_vac_city" title=" " required>
                            <option value="" disabled></option>
							<?foreach ($arResult["PROPERTY_LIST_FULL"][175]["ENUM"] as $arItem):?>
                                <option value="<?=$arItem["ID"]?>"><?=$arItem["UF_NAME"]?></option>
							<?endforeach;?>
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
                        <label for="vac_name"><?=$arResult["PROPERTY_LIST_FULL"][176]["NAME"]?></label>
                        <input type="text" name="PROPERTY[176][0]" id="vac_name" placeholder=" " required>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_lastname"><?=$arResult["PROPERTY_LIST_FULL"][177]["NAME"]?></label>
                        <input type="text" name="PROPERTY[177][0]" id="vac_lastname" placeholder=" " required>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-grop">
                        <label for="vac_birthdate_input"><?=$arResult["PROPERTY_LIST_FULL"][178]["NAME"]?></label>
                        <div class="input-group date input-date" id="vac_birthdate" data-target-input="nearest">
                            <input class="datetimepicker-input" type="text" data-target="#vac_birthdate" id="vac_birthdate_input" name="PROPERTY[178][0][VALUE]" placeholder="--.--.----" required>
                            <div class="input-date-arrow" data-target="#vac_birthdate" data-toggle="datetimepicker"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_citizenship"><?=$arResult["PROPERTY_LIST_FULL"][179]["NAME"]?></label>
                        <input type="text" name="PROPERTY[179][0]" id="vac_citizenship" placeholder=" " required>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_city"><?=$arResult["PROPERTY_LIST_FULL"][180]["NAME"]?></label>
                        <input type="text" name="PROPERTY[180][0]" id="vac_city" placeholder=" " required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section"><a name="contacts"></a>
            <div class="h3">Контакты</div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_phone"><?=$arResult["PROPERTY_LIST_FULL"][181]["NAME"]?></label>
                        <input class="input-phone" type="text" name="PROPERTY[181][0]" id="vac_phone" placeholder=" " required>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_email"><?=$arResult["PROPERTY_LIST_FULL"][182]["NAME"]?></label>
                        <input type="email" name="PROPERTY[182][0]" id="vac_email" placeholder=" " required>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_facebook"><?=$arResult["PROPERTY_LIST_FULL"][183]["NAME"]?></label>
                        <input type="text" name="PROPERTY[183][0]" id="vac_facebook" placeholder=" ">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_instagram"><?=$arResult["PROPERTY_LIST_FULL"][184]["NAME"]?></label>
                        <input type="text" name="PROPERTY[184][0]" id="vac_instagram" placeholder=" ">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_vkontakte"><?=$arResult["PROPERTY_LIST_FULL"][185]["NAME"]?></label>
                        <input type="text" name="PROPERTY[185][0]" id="vac_vkontakte" placeholder=" ">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_odnoklassniki"><?=$arResult["PROPERTY_LIST_FULL"][186]["NAME"]?></label>
                        <input type="text" name="PROPERTY[186][0]" id="vac_odnoklassniki" placeholder=" ">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section"><a name="languages"></a>
            <div class="h3">Языки</div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="vac_lang"><?=$arResult["PROPERTY_LIST_FULL"][187]["NAME"]?></label>
                        <select name="PROPERTY[187][0][VALUE]" id="vac_lang" title=" " required>
							<?foreach ($arResult["PROPERTY_LIST_FULL"][187]["ENUM"] as $arItem):?>
                                <option value="<?=$arItem["ID"]?>"><?=$arItem["UF_NAME"]?></option>
							<?endforeach;?>
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
                                <label for="vac_lang_foreign"><?=$arResult["PROPERTY_LIST_FULL"][188]["NAME"]?></label>
                                <select name="PROPERTY[188][*][VALUE][]" title=" " id="vac_lang_foreign">
									<?foreach ($arResult["PROPERTY_LIST_FULL"][188]["ENUM"] as $arItem):?>
                                        <option value="<?=$arItem["ID"]?>"><?=$arItem["UF_NAME"]?></option>
									<?endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="vac_lang_level"><?=$arResult["PROPERTY_LIST_FULL"][189]["NAME"]?></label>
                                <select class="level-language" name="PROPERTY[189][*][VALUE][]" title=" " id="vac_lang_level">
									<?foreach ($arResult["PROPERTY_LIST_FULL"][189]["ENUM"] as $arItem):?>
                                        <option value="<?=$arItem["ID"]?>"><?=$arItem["VALUE"]?></option>
									<?endforeach;?>
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
                                <label for="vac_lang_foreign"><?=$arResult["PROPERTY_LIST_FULL"][188]["NAME"]?></label>
                                <select name="PROPERTY[188][0][VALUE][]" title=" " id="vac_lang_foreign">
									<?foreach ($arResult["PROPERTY_LIST_FULL"][188]["ENUM"] as $arItem):?>
                                        <option value="<?=$arItem["ID"]?>"><?=$arItem["UF_NAME"]?></option>
									<?endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="vac_lang_level"><?=$arResult["PROPERTY_LIST_FULL"][189]["NAME"]?></label>
                                <select class="level-language" name="PROPERTY[189][0][VALUE][]" title=" " id="vac_lang_level">
									<?foreach ($arResult["PROPERTY_LIST_FULL"][189]["ENUM"] as $arItem):?>
                                        <option value="<?=$arItem["ID"]?>"><?=$arItem["VALUE"]?></option>
									<?endforeach;?>
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
                        <label for="vac_knew"><?=$arResult["PROPERTY_LIST_FULL"][190]["NAME"]?></label>
                        <select name="PROPERTY[190]" id="vac_knew" title=" " required>
							<?foreach ($arResult["PROPERTY_LIST_FULL"][190]["ENUM"] as $arItem):?>
                                <option value="<?=$arItem["ID"]?>"><?=$arItem["VALUE"]?></option>
							<?endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="vac_story"><?=$arResult["PROPERTY_LIST_FULL"][191]["NAME"]?></label>
                        <textarea name="PROPERTY[191][0]" id="vac_story" rows="4" placeholder=" " required></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section"><a name="cv"></a>
            <div class="h3">Резюме <span>(необязательно)</span></div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="vac_cv"><?=$arResult["PROPERTY_LIST_FULL"][192]["NAME"]?></label>
                        <input type="text" name="PROPERTY[192][0]" id="vac_cv" placeholder=" ">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="vac_cv_file"><?=$arResult["PROPERTY_LIST_FULL"][193]["NAME"]?></label>
                        <input type="hidden" name="PROPERTY[193][0]" value="">
                        <input type="file" name="PROPERTY_FILE_193_0" id="file" data-label="Прикрепить резюме">
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