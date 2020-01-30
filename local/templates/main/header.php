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
    <link rel="icon" href="/favicon.ico">
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
	  Asset::getInstance()->addCss("/layout/css/animations.css");
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
      <div id="md-indicator"></div>
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
                <div class="navbar-trigger"><span></span><span></span><span></span></div>
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
	  
	  