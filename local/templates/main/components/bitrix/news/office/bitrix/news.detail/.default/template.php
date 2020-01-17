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
    <div class="page-body">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="page-sidebar">
                        <ul class="page-menu">
                            <li><a href="#">Пункт плавающего меню</a></li>
                            <li><a href="#">Пункт плавающего меню в&nbsp;две строки</a></li>
                            <li><a href="#">Очень длинный Пункт плавающего меню, который может быть в&nbsp;три строки</a></li>
                            <li><a href="#">Пункт меню при наведении</a></li>
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
							<?=$arResult["PROPERTIES"]["CONTENT"]["~VALUE"]["TEXT"]?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-grey">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-4">
                            <div class="h2">Элементы интерфейса</div>
                            <div class="h3">Формы</div>
                            <div class="block-white">
                                <form>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="input_1">Текстовое поле</label>
                                                <input type="text" name="input_1" id="input_1" placeholder=" " required>
                                            </div>
                                            <div class="form-group">
                                                <label for="input_2">Текстовое поле с плейсхолдером</label>
                                                <input type="text" name="input_2" id="input_2" placeholder="Иванов Иван Иванович" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="input_3">Телефон</label>
                                                <input class="input-phone" type="text" name="input_3" id="input_3" placeholder="+7 (___) ___-__-__" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="input_4">Неактивное текстовое поле</label>
                                                <input type="text" name="input_4" id="input_4" placeholder="Иванов Иван Иванович" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="select_1">Выпадающий список</label>
                                                <select name="select_1" id="select_1" required>
                                                    <option value="1">Пункт выпадающего списка 1</option>
                                                    <option value="2">Пункт выпадающего списка 2</option>
                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                    <option value="5">Пункт выпадающего списка 1</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="select_2">Выпадающий список с названием</label>
                                                <select name="select_2" id="select_2" title="Выберите значение" required>
                                                    <option value="1">Пункт выпадающего списка 1</option>
                                                    <option value="2">Пункт выпадающего списка 2</option>
                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                    <option value="5">Пункт выпадающего списка 1</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="select_3">Неактивный выпадающий список</label>
                                                <select name="select_3" id="select_3" title="Выберите значение" disabled>
                                                    <option value="1">Пункт выпадающего списка 1</option>
                                                    <option value="2">Пункт выпадающего списка 2</option>
                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                    <option value="5">Пункт выпадающего списка 1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-2" type="submit">Отправить</button>
                                    </div>
                                </form>
                            </div>
                            <div class="h3">Формы на сером фоне</div>
                            <div class="form-alt">
                                <form>
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label for="input_2_1">Текстовое поле</label>
                                                <input type="text" name="input_2_1" id="input_2_1" placeholder=" " required>
                                            </div>
                                            <div class="form-group">
                                                <label for="input_2_2">Текстовое поле с плейсхолдером</label>
                                                <input type="text" name="input_2_2" id="input_2_2" placeholder="Иванов Иван Иванович" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="input_2_3">Телефон</label>
                                                <input class="input-phone" type="text" name="input_2_3" id="input_2_3" placeholder="+7 (___) ___-__-__" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="input_2_4">Неактивное текстовое поле</label>
                                                <input type="text" name="input_2_4" id="input_2_4" placeholder="Иванов Иван Иванович" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="select_2_1">Выпадающий список</label>
                                                <select name="select_2_1" id="select_2_1" required>
                                                    <option value="1">Пункт выпадающего списка 1</option>
                                                    <option value="2">Пункт выпадающего списка 2</option>
                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                    <option value="5">Пункт выпадающего списка 1</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="select_2_2">Выпадающий список с названием</label>
                                                <select name="select_2_2" id="select_2_2" title="Выберите значение" required>
                                                    <option value="1">Пункт выпадающего списка 1</option>
                                                    <option value="2">Пункт выпадающего списка 2</option>
                                                    <option value="3">Пункт выпадающего списка, занимающий две строки</option>
                                                    <option value="4">Пункт выпадающего списка настолько длинный, что занимает целых три строки</option>
                                                    <option value="5">Пункт выпадающего списка 1</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="select_2_3">Неактивный выпадающий список</label>
                                                <select name="select_2_3" id="select_2_3" title="Выберите значение" disabled>
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
                                                <label>Радиокнопки</label>
                                                <div class="form-radios">
                                                    <div class="form-radio">
                                                        <input type="radio" name="radio_1" id="radio_1_1" checked>
                                                        <label for="radio_1_1">Радиокнопка</label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" name="radio_1" id="radio_1_2">
                                                        <label for="radio_1_2">Радиокнопка с невероятно длинным текстом, в котором очень подробно все описано</label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" name="radio_1" id="radio_1_3" disabled>
                                                        <label for="radio_1_3">Радиокнопка неактивная</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Чекбоксы</label>
                                                <div class="form-checkboxes">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" name="checkbox_1_1" id="checkbox_1_1" checked>
                                                        <label for="checkbox_1_1">Чекбокс</label>
                                                    </div>
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" name="checkbox_1_2" id="checkbox_1_2" required>
                                                        <label for="checkbox_1_2">Обязательный чекбокс</label>
                                                    </div>
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" name="checkbox_1_3" id="checkbox_1_3" disabled>
                                                        <label for="checkbox_1_3">Неактивный чекбокс</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Сортировка</label>
                                                <div class="form-item-sort">
                                                    <div class="select-sort-name">Сортировка:</div>
                                                    <select class="select-sort" name="controls_sort" id="controls_sort">
                                                        <option value="1">По умолчанию</option>
                                                        <option value="2">Сначала новые</option>
                                                        <option value="3">Сначала старые</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-2" type="submit">Отправить</button>
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
