<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
    <link rel="icon" href="favicon.ico">
      <?

      Asset::getInstance()->addCss("/layout/js/bootstrap/css/bootstrap.css");
      Asset::getInstance()->addCss("/layout/css/bootstrap-select.min.css");
      Asset::getInstance()->addCss("/layout/css/slick.css");
      Asset::getInstance()->addCss("/layout/js/fancybox/jquery.fancybox.min.css");
      Asset::getInstance()->addCss("/layout/css/jquery.mCustomScrollbar.min.css");
      Asset::getInstance()->addCss("/layout/js/bootstrap-fileinput/css/fileinput.min.css");
      Asset::getInstance()->addCss("/layout/js/bootstrap-fileinput/css/fileinput-rtl.min.css");
      Asset::getInstance()->addCss("/layout/js/tempusdominus/tempusdominus-bootstrap-4.min.css");
      Asset::getInstance()->addCss("/layout/css/fontawesome/css/fontawesome.css");
      Asset::getInstance()->addCss("/layout/js/rangeslider/rangeslider.css");
      Asset::getInstance()->addCss("/layout/js/datatables/datatables.min.css");
	  Asset::getInstance()->addCss("/layout/css/main.css");
	  Asset::getInstance()->addCss("/layout/css/responsive.css");
      ?>
<!--    <link rel="stylesheet" href="/layout/js/bootstrap/css/bootstrap.css">-->
<!--    <link rel="stylesheet" href="/layout/css/bootstrap-select.min.css">-->
<!--    <link rel="stylesheet" href="/layout/css/slick.css">-->
<!--    <link rel="stylesheet" href="/layout/js/fancybox/jquery.fancybox.min.css">-->
<!--    <link rel="stylesheet" href="/layout/css/jquery.mCustomScrollbar.min.css">-->
<!--    <link rel="stylesheet" href="/layout/js/bootstrap-fileinput/css/fileinput.min.css">-->
<!--    <link rel="stylesheet" href="/layout/js/bootstrap-fileinput/css/fileinput-rtl.min.css">-->
<!--    <link rel="stylesheet" href="/layout/js/tempusdominus/tempusdominus-bootstrap-4.min.css">-->
<!--    <link rel="stylesheet" href="/layout/css/fontawesome/css/fontawesome.css">-->
<!--    <link rel="stylesheet" href="/layout/js/rangeslider/rangeslider.css">-->
<!--    <link rel="stylesheet" href="/layout/js/datatables/datatables.min.css">-->
<!--    <link rel="stylesheet" href="/layout/css/main.css">-->
<!--    <link rel="stylesheet" href="/layout/css/responsive.css">-->
  </head>
  <body>
  <?$APPLICATION->ShowPanel();?>
    <div class="over-wrapper">
      <div id="mobile-indicator"></div>
      <div id="sm-indicator"></div>
      <header>
        <div class="header-content">
          <div class="row">
            <div class="header-l">
              <div class="header-logo">
                  <a href="/">
					  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/header/logo.php"));?>
                  </a>
              </div>
            </div>
            <div class="header-m">
              <div class="navbar-wrapper">
                <div class="navbar-wrapper-inner">
					<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"topMenu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "topSubMenu",
		"COMPONENT_TEMPLATE" => "topMenu",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	),
	false
);?>
                  
<!--                  <ul class="nav navbar-nav">-->
<!--                    <li class="has-submenu"><a href="#"><span>Магазины</span></a></li>-->
<!--                    <li class="has-submenu"><a href="#"><span>Офис</span></a>-->
<!--                      <div class="submenu">-->
<!--                        <div class="submenu-inner">-->
<!--                          <div class="row">-->
<!--                            <div class="submenu-descr">-->
<!--                              <ul class="submenu-list">-->
<!--                                <li><a href="#">the base fitness</a></li>-->
<!--                                <li><a href="#">Маркетинг adidas</a></li>-->
<!--                                <li><a href="#">Маркетинг reebok</a></li>-->
<!--                                <li><a href="#">Дизайн и строительство</a></li>-->
<!--                                <li><a href="#">Юридический отдел</a></li>-->
<!--                                <li><a href="#">финансовый отдел</a></li>-->
<!--                                <li><a href="#">логистика</a></li>-->
<!--                                <li><a href="#">it-отдел</a></li>-->
<!--                                <li><a href="#">управление персоналом</a></li>-->
<!--                                <li><a href="#">отдел закупок</a></li>-->
<!--                                <li><a href="#">коммерческий отдел</a></li>-->
<!--                                <li><a href="#">поддержка фирменных магазинов</a></li>-->
<!--                                <li><a href="#">Электронная торговля</a></li>-->
<!--                              </ul>-->
<!--                            </div>-->
<!--                            <div class="submenu-pic" style="background-image: url(files/submenu-office-bg.jpg)"><img src="/layout/files/submenu-office-pic.jpg"></div>-->
<!--                          </div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </li>-->
<!--                    <li><a href="#"><span>Центр дистрибуции</span></a></li>-->
<!--                    <li class="has-submenu"><a href="#"><span>Обучение и&nbsp;развитие</span></a></li>-->
<!--                    <li><a href="#"><span>О&nbsp;компании</span></a></li>-->
<!--                    <li class="has-submenu"><a href="#"><span>Бренды</span></a></li>-->
<!--                    <li><a href="#"><span>Контакты</span></a></li>-->
<!--                  </ul>-->
                  
                  
                </div>
              </div>
            </div>
            <div class="header-r">
              <div class="header-fav">
                  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/header/btnHeaderFav.php"));?>
              </div>
              <div class="header-button">
				  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/header/btnHeaderJobOpen.php"));?>
              </div>
            </div>
          </div>
        </div>
      </header>
	  
	  