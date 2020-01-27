<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?//pr($arResult["ITEMS"])?>

<div class="news-controls">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="news-categories">
                <select class="select-categories news-categories-select">
                    <option value="1">Все публикации</option>
                    <?foreach ($arResult["ALL_TAGS"] as $key => $arItem):?>
                        <option value="<?=$key + 2?>"><?=$arItem?></option>
                    <?endforeach;?>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 offset-lg-4">
            <div class="controls-search-form">
                <form>
                    <div class="form-group" id="news_search_form">
                        <div class="form-field">
                            <input type="text" name="vac_search" id="vac_search" placeholder="Найти публикацию" required>
                        </div>
                        <div class="form-button">
                            <button type="submit"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="news-list">
	<div class="row row-alt">
        <?$const = 0;?>
        <?$flag = true;?>
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
<!--			--><?//var_dump($const)?>
			<?if (($const) == 0 && ($key + 1) == 1):?>
				<div class="col-12 col-md-6 col-lg-8" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 746, "height" => 570), BX_RESIZE_IMAGE_EXACT);?>
					<div class="news-tmb news-tmb-big"><a class="news-tmb-pic" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$img["src"]?>"></a>
						<div class="news-tmb-descr">
							<ul class="news-tmb-tags">
                                <?foreach ($arItem["TAGS"] as $arTag):?>
								    <li><a class="btn_tags" href=""><?=$arTag?></a></li>
                                <?endforeach;?>
							</ul>
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<div class="h3"><?=$arItem["NAME"]?></div>
								<div class="div news-tmb-date"><?=$arItem["PROPERTIES"]["PUBLICATION_DATE"]["VALUE"]?></div>
                            </a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="subscribe-form-wrapper">
						<div class="h3">Подписывайся на&nbsp;рассылку</div>
						<div class="subscribe-form-text">
							<p>Получай интересные статьи о&nbsp;спорте, мотивации, работе сразу на&nbsp;почту</p>
						</div>
						<div class="subscribe-form">
							<form id="newsletter_sub">
								<div class="form-group">
									<label for="subscribe_email">Ваша почта</label>
									<input type="email" name="subscribe_email" id="subscribe_email" placeholder=" " required>
								</div>
								<div class="form-footer">
									<button class="btn btn-1" type="submit">Подписаться</button>
								</div>
								<div class="form-agree">
									<p>Подписываясь, вы&nbsp;соглашаетесь с&nbsp;нашим <a href="#">пользовательским соглашением</a></p>
								</div>
							</form>
						</div>
						<div class="h4">Читай нас в&nbsp;соцсетях</div>
						<div class="soclinks">
                            <a class="soclink" href="#">
                                <img class="svg-inline" src="/layout/images/ico-vk.svg">
                            </a>
                            <a class="soclink" href="#">
                                <img class="svg-inline" src="/layout/images/ico-fb.svg">
                            </a>
                            <a class="soclink" href="#">
                                <img class="svg-inline" src="/layout/images/ico-instagram.svg">
                            </a>
                        </div>
					</div>
				</div>
			<?else:?>
				<?if ($const == 8):?>
					<?$const = 1;?>
				<?endif;?>
				<?if ($const == 7):?>
					<div class="col-12" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 1074, "height" => 540), BX_RESIZE_IMAGE_EXACT);?>
						<div class="news-tmb news-tmb-alt"><a class="news-tmb-pic" href="<?=$arItem["DETAIL_PAGE_URL"]?>" style="background-image:url(<?=$img["src"]?>);"></a>
							<div class="news-tmb-descr">
								<ul class="news-tmb-tags">
									<?foreach ($arItem["TAGS"] as $arTag):?>
                                        <li><a class="btn_tags" href=""><?=$arTag?></a></li>
									<?endforeach;?>
								</ul>
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
									<div class="h3"><?=$arItem["NAME"]?></div>
									<div class="div news-tmb-date"><?=$arItem["PROPERTIES"]["PUBLICATION_DATE"]["VALUE"]?></div>
                                </a>
							</div>
						</div>
					</div>
				<?else:?>
					<div class="col-12 col-md-6 col-lg-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 366, "height" => 210), BX_RESIZE_IMAGE_EXACT);?>
						<div class="news-tmb"><a class="news-tmb-pic" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$img["src"]?>"></a>
							<div class="news-tmb-descr">
								<ul class="news-tmb-tags">
									<?foreach ($arItem["TAGS"] as $arTag):?>
                                        <li><a class="btn_tags" href=""><?=$arTag?></a></li>
									<?endforeach;?>
								</ul>
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
									<div class="h3"><?=$arItem["NAME"]?></div>
									<div class="div news-tmb-date"><?=$arItem["PROPERTIES"]["PUBLICATION_DATE"]["VALUE"]?></div>
								</a>
							</div>
						</div>
					</div>
				<?endif;?>
			<?endif;?>
			<?$const++?>
		<?endforeach;?>
	
	</div>
</div>
<div class="list-controls list-controls-bottom list-controls-bottom-alt">
	<div class="list-controls-l">
		<div class="page-nav">
			<div class="modern-page-navigation"><span class="modern-page-title">Страницы:</span>
				<? echo $arResult["NAV_STRING"]?>
			</div>
		</div>
	</div>
	<div class="list-controls-r">
		<div class="show-num">
			<div class="show-num-ttl">Показать по</div>
			<div class="show-num-buttons">
				<div class="show-num-buttons-item">
					<button class="active">14</button>
				</div>
				<div class="show-num-buttons-item">
					<button>28</button>
				</div>
				<div class="show-num-buttons-item">
					<button>42</button>
				</div>
			</div>
		</div>
	</div>
</div>