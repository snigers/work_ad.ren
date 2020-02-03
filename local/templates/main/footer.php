<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)die();
use Bitrix\Main\Page\Asset;?>
    <?if ($APPLICATION->GetCurDir() != "/about/"):?>
        <footer>
            <div class="container">
              <div class="footer-content">
                <div class="footer-top">
                  <div class="footer-ttl">
                      <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/footer/titleFooter.php"));?>
                  </div>
                  <div class="footer-button">
                      <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/footer/btnAllJobOpen.php"));?>
                  </div>
                </div>
                <div class="footer-bottom">
                  <div class="h3">
                      <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/footer/titleH3.php"));?>
                  </div>
                  <div class="footer-soclinks">
                      <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/footer/btnVK.php"));?>
                      <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/footer/btnFB.php"));?>
                      <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/footer/btnInstagram.php"));?>
                  </div>
                  <div class="footer-copy">
                    <div class="footer-copy-item">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/footer/allRightsReserved.php"));?>
                    </div>
                    <div class="footer-copy-item">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/footer/politics.php"));?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </footer>
    <?endif;?>
        <div class="popup story-popup" id="storyPopup">
            <div class="popup-backdrop"></div>
            <div class="close"></div>
            <div class="popup-inner-wrapper">
                <div class="popup-inner-scroll">
                    <div class="popup-inner"></div>
                </div>
            </div>
        </div>
      <div class="modal fade form-modal order-modal" id="orderModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header">
              <div class="h2">Оставить заявку</div>
              <p>Оставьте заявку, наш специалист свяжется с&nbsp;Вами в&nbsp;течении 15&nbsp;мин!</p>
            </div>
            <div class="modal-body">
              <div class="form-alt">
                <form id="orderForm">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label for="modal_order_name">Ваше имя</label>
                        <input type="text" name="modal_order_name" id="modal_order_name" required>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label for="modal_order_phone">Телефон</label>
                        <input class="input-phone" type="text" name="modal_order_phone" id="modal_order_phone" required>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-footer">
                        <button class="btn btn-2" type="submit"><span>Отправить заявку</span></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade form-modal order-modal" id="bankModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header">
              <div class="h2">Оставить заявку</div>
              <p>Оставьте заявку, наш специалист свяжется с&nbsp;Вами в&nbsp;течении 15&nbsp;мин!</p>
            </div>
            <div class="modal-body">
              <div class="form-alt">
                <form id="bankForm">
                  <input type="hidden" name="modal_bank_bank" id="modal_bank_bank">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label for="modal_bank_name">Ваше имя</label>
                        <input type="text" name="modal_bank_name" id="modal_bank_name" required>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label for="modal_bank_phone">Телефон</label>
                        <input class="input-phone" type="text" name="modal_bank_phone" id="modal_bank_phone" required>
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="form-footer">
                        <button class="btn btn-2" type="submit"><span>Отправить заявку</span></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade form-modal" id="teamModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header">
              <div class="h2">Задать вопрос</div>
              <p>Оставьте заявку, наш специалист свяжется с&nbsp;Вами в&nbsp;течении 15&nbsp;мин!</p>
            </div>
            <div class="modal-body">
              <div class="form-alt">
                <form id="teamForm">
                  <input type="hidden" name="modal_team_person" id="modal_team_person">
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label for="modal_team_name">Ваше имя</label>
                        <input type="text" name="modal_team_name" id="modal_team_name" required>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                        <label for="modal_team_phone">Телефон</label>
                        <input class="input-phone" type="text" name="modal_team_phone" id="modal_team_phone" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="modal_team_message">Сообщение</label>
                        <textarea name="modal_team_message" id="modal_team_message" rows="4"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="form-footer">
                        <button class="btn btn-2" type="submit"><span>Отправить</span></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="modal fade fav-modal" id="favModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-header">
                        <div class="h2">Вакансия добавлена в избранное</div>
                    </div>
                    <div class="modal-body">
                        <div class="vac-tmb vac-tmb-alt">
                            <div class="vac-tmb-header">
                                <div class="h3">специалист по фитнесу (продавец-консультант)</div>
                            </div>
                            <div class="vac-tmb-footer">
                                <div class="vac-tmb-place">
                                    <p>Фирменный магазин, Москва</p>
                                </div>
                                <div class="vac-tmb-logo"><img src="images/logo-adidas.svg"></div>
                            </div>
                        </div>
                        <div class="fav-modal-controls">
                            <div class="row">
                                <div class="col"><a class="btn btn-2" href="#"><span>Перейти в избранное</span></a></div>
                                <div class="col">
                                    <div class="btn btn-5 btn-modal-remove" data-dismiss="modal" aria-label="Close"><span>Удалить</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <div class="modal fade form-modal callback-modal" id="callbackModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header">
              <div class="h2">Заказать звонок</div>
            </div>
            <div class="modal-body">
              <p>Оставьте свои данные и&nbsp;наш специалист свяжется с&nbsp;вами в&nbsp;течение 15&nbsp;минут</p>
              <div class="modal-form callback-form">
                <form>
                  <div class="form-group">
                    <label class="placeholder" for="callback_name">Ваше имя</label>
                    <input type="text" name="callback_name" id="callback_name" required>
                  </div>
                  <div class="form-group">
                    <label class="placeholder" for="callback_phone">+7 (___) ___-__-__</label>
                    <input class="input-phone" type="text" name="callback_phone" id="callback_phone" required>
                  </div>
                  <div class="form-footer">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <button class="btn btn-2 btn-small" type="submit"><span>Отправить</span></button>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-agree">
                          <p>Нажимая кнопку «Отправить», Вы даете свое согласие с&nbsp;<a href="#">политикой конфиденциальности</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade client-modal" id="clientModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body"></div>
          </div>
        </div>
      </div>
      <div class="modal fade client-modal" id="addressModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body"></div>
            <div id="map"></div>
          </div>
        </div>
      </div>
      <div class="modal fade success-modal" id="successModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header">
              <div class="h2"><span>Ваша заявка успешно принята!</span></div>
              <div class="text">
                <p>Перезвоним в течение 15 минут</p>
              </div>
            </div>
            <div class="modal-body">
              <div class="success-modal-button">
                <button class="btn btn-2" type="button" data-dismiss="modal" aria-label="Close">Закрыть</button>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?
//		Asset::getInstance()->addJs("/layout/js/jquery-3.3.1.min.js");
//		Asset::getInstance()->addJs("/layout/js/bootstrap/js/bootstrap.bundle.min.js");
//		Asset::getInstance()->addJs("/layout/js/bootstrap-select.min.js");
//		Asset::getInstance()->addJs("/layout/js/jquery.validate.min.js");
//		Asset::getInstance()->addJs("/layout/js/additional-methods.min.js");
//		Asset::getInstance()->addJs("/layout/js/jquery.maskedinput.min.js");
//		Asset::getInstance()->addJs("/layout/js/wNumb.min.js");
//		Asset::getInstance()->addJs("/layout/js/slick.min.js");
//		Asset::getInstance()->addJs("/layout/js/fancybox/jquery.fancybox.min.js");
//		Asset::getInstance()->addJs("/layout/js/bootstrap-fileinput/js/fileinput.min.js");
//		Asset::getInstance()->addJs("/layout/js/jquery.mousewheel.js");
//		Asset::getInstance()->addJs("/layout/js/jquery.mCustomScrollbar.concat.min.js");
//		Asset::getInstance()->addJs("/layout/js/moment-with-locales.js");
//		Asset::getInstance()->addJs("/layout/js/tempusdominus/tempusdominus-bootstrap-4.min.js");
//		Asset::getInstance()->addJs("/layout/js/greensock/TweenMax.min.js");
//		Asset::getInstance()->addJs("/layout/js/greensock/plugins/CSSRulePlugin.min.js");
//		Asset::getInstance()->addJs("/layout/js/greensock/plugins/ScrollToPlugin.min.js");
//		Asset::getInstance()->addJs("/layout/js/iscroll-probe.js");
//		Asset::getInstance()->addJs("/layout/js/scrollmagic/ScrollMagic.min.js");
//		Asset::getInstance()->addJs("/layout/js/scrollmagic/plugins/animation.gsap.min.js");
//		Asset::getInstance()->addJs("/layout/js/jquery-svg-to-inline.js");
//		Asset::getInstance()->addJs("//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js");
//		Asset::getInstance()->addJs("//api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=cefbc555-bed0-48f8-b6ad-23f808b12244");
//		Asset::getInstance()->addJs("/layout/js/main.js");
//		Asset::getInstance()->addJs("/layout/js/dev_main.js");
//		Asset::getInstance()->addJs("/layout/js/stores-map.js");
//		Asset::getInstance()->addJs("/layout/js/animations.js");
        ?>

        <script src="/layout/js/jquery-3.3.1.min.js"></script>
        <script src="/layout/js/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/layout/js/bootstrap-select.min.js"></script>
        <script src="/layout/js/jquery.validate.min.js"></script>
        <script src="/layout/js/additional-methods.min.js"></script>
        <script src="/layout/js/jquery.maskedinput.min.js"></script>
        <script src="/layout/js/wNumb.min.js"></script>
        <script src="/layout/js/slick.min.js"></script>
        <script src="/layout/js/fancybox/jquery.fancybox.min.js"></script>
        <script src="/layout/js/bootstrap-fileinput/js/fileinput.min.js"></script>
        <script src="/layout/js/jquery.mousewheel.js"></script>
        <script src="/layout/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="/layout/js/moment-with-locales.js"></script>
        <script src="/layout/js/tempusdominus/tempusdominus-bootstrap-4.min.js"></script>
        <script src="/layout/js/greensock/TweenMax.min.js"></script>
        <script src="/layout/js/greensock/plugins/CSSRulePlugin.min.js"></script>
        <script src="/layout/js/greensock/plugins/ScrollToPlugin.min.js"></script>
        <script src="/layout/js/iscroll-probe.js"></script>
        <script src="/layout/js/scrollmagic/ScrollMagic.min.js"></script>
        <script src="/layout/js/scrollmagic/plugins/animation.gsap.min.js"></script>
        <script src="/layout/js/jquery-svg-to-inline.js"></script>
        <script src="/layout/js/jquery.nicescroll.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>
        <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=cefbc555-bed0-48f8-b6ad-23f808b12244"></script>
        <script src="/layout/js/main.js"></script>
        <script src="/layout/js/dev_main.js"></script>
        <script src="/layout/js/stores-map.js"></script>
        <script src="/layout/js/animations.js"></script>


        <script id="sidebarTemplate" type="text/x-jquery-tmpl">
                {{each(i, geoObject) geoObjects}}
                    {{tmpl({
                        i: i,
                        geoObject: geoObject,
                        activeIndex: activeIndex
                    }) "#sidebarItemTemplate"}}
                {{/each}}
        
        </script>
        <!-- Шаблон элемента сайдбара. -->
        <script id="sidebarItemTemplate" type="text/x-jquery-tmpl">
                <li{{if i == activeIndex}} class="active"{{/if}}>
                    <a href="#">${geoObject.properties.get("clusterCaption")}</a>
                </li>
        
        </script>
        <!-- Шаблон основного содержимого. -->
        <script id="mainContentTemplate" type="text/x-jquery-tmpl">
        
                ${data.balloonContentBody}
        
        </script>
    </div>
  </body>
</html>