<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<main>
<!--    --><?//pr($arResult)?>
    <div class="page-header">
        <div class="row">
            <div class="col-6">
				<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["LEFT_PICTURE_HEADER"]["VALUE"], Array("width" => 951, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
                <div class="page-header-bg" style="background-image: url(<?=$img["src"]?>)"></div>
            </div>
            <div class="col-6">
				<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["RIGHT_PICTURE_HEADER"]["VALUE"], Array("width" => 951, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
                <div class="page-header-bg" style="background-image: url(<?=$img["src"]?>)"></div>
            </div>
        </div>
    </div>
    <div class="page-body page-body-black">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="page-sidebar"></div>
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
                        <div class="page-title">
                            <h1><?=$arResult["PROPERTIES"]["TITLE_DETAIL"]["VALUE"]?></h1>
                        </div>
                        <div class="page-content">
							<?=$arResult["PROPERTIES"]["DESCRIPTION"]["~VALUE"]["TEXT"]?>
                            <div class="block-wide">
                                <div class="blockquote-alt-wrapper">
                                    <div class="blockquote-alt-pics">
                                        <div class="row">
                                            <?foreach($arResult["PROPERTIES"]["IMG_QUOTE"]["VALUE"] as $arItem):?>
												<?$img = CFile::ResizeImageGet($arItem, Array("width" => 650, "height" => 500), BX_RESIZE_IMAGE_EXACT);?>
                                                <div class="col-6"><img src="<?=$img["src"]?>"></div>
                                            <?endforeach;?>
                                        </div>
                                    </div>
                                    <blockquote class="blockquote-alt blockquote-alt-alt">
                                        <div class="blockquote-alt-content">
                                            <div class="blockquote-alt-text">
                                                <p><?=$arResult["PROPERTIES"]["QUOTE_COMPANY"]["~VALUE"]?></p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
							<?=$arResult["PROPERTIES"]["TEXT_ABOUT"]["~VALUE"]["TEXT"]?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>