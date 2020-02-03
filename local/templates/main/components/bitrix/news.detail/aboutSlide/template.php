<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>


	<div class="page-body page-body-about" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
		<div class="about-wrapper">
			<div class="about-wrapper-inner">
				<div class="about-section full-width-block">
					<div class="row row-zero">
						<div class="col-12 col-md-7 col-xl-8 bgc-red">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="about-section-content">
										<div class="row">
											<div class="col-12 col-xl-8 offset-xl-2">
												
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_ONE_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
												<div class="about-hr"></div>
											</div>
											<div class="col-12 col-xl-10 offset-xl-1">
												<div class="h2"><?=$arResult["PROPERTIES"]["NAME_ONE_SLIDE"]["~VALUE"]?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="about-column-item">
									<div class="dasslers-wrapper">
										<div class="dasslers-img hidden-xs">
											<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["IMG_ONE_SLIDE"]["VALUE"], Array("width" => 600, "height" => 379), BX_RESIZE_IMAGE_EXACT);?>
											<img src="<?=$img["src"]?>"/>
										</div>
										<div class="row dasslers-names hidden-xs">
											<div class="col-4 text-right"><?=$arResult["PROPERTIES"]["FOUNDER"]["~VALUE"][0]["TEXT"]?></div>
											<div class="col-3 offset-4 offset-lg-5 text-left"><?=$arResult["PROPERTIES"]["FOUNDER"]["~VALUE"][1]["TEXT"]?>
											</div>
										</div>
									</div>
								</div>
							</div>
						
						</div>
						<div class="col-12 col-md-5 col-xl-4 bgc-blue">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									
									<div class="about-section-content">
										<div class="first-boots-text">
											<div class="row">
												<div class="col-xl-10 offset-xl-1">
													<div class="about-sub-ttl">
														<?=$arResult["PROPERTIES"]["DESCRIPTION_TWO_SLIDE"]["~VALUE"]["TEXT"]?>
													</div>
													<div class="about-hr"></div>
													
													<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_TWO_SLIDE"]["~VALUE"]?></div>
												</div>
											</div>
											<div class="first-boots">
												<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["IMG_TWO_SLIDE"]["VALUE"], Array("width" => 500, "height" => 231), BX_RESIZE_IMAGE_EXACT);?>
												<img src="<?=$img["src"]?>" alt=""/>
											</div>
										</div>
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-section full-width-block">
					<div class="row row-zero">
						<div class="col-12 col-md-7 col-xl-8 bgc-grey bgp-dassler-v-halate">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="row">
										<div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 fabric-title">
											<div class="about-section-content">
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_THREE_SLIDE"]["~VALUE"]?></div>
												<div class="about-hr"></div>
												<?=$arResult["PROPERTIES"]["DESCRIPTION_THREE_SLIDE"]["~VALUE"]["TEXT"]?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-5 col-xl-4 bgc-green">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									
									<div class="about-section-content">
										<div class="row">
											<div class="col-xl-10 offset-xl-1">
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_FOUR_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
												
												<div class="about-hr"></div>
												
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_FOUR_SLIDE"]["~VALUE"]?></div>
											</div>
										</div>
										<div class="second-boots">
											<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["IMG_FOUR_SLIDE"]["VALUE"], Array("width" => 500, "height" => 249), BX_RESIZE_IMAGE_EXACT);?>
											<img src="<?=$img["src"]?>"/>
										</div>
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-section full-width-block">
					<div class="row row-zero row-full-width half-height">
						<div class="col-12 col-md-5 col-xl-4 bgc-blue bgp-dassler-s-butsami">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="row">
										<div class="col-xl-10 offset-xl-1">
											<div class="about-section-content">
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_FIVE_SLIDE"]["~VALUE"]?></div>
												<div class="about-hr"></div>
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_FIVE_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-7 col-xl-8 bgc-green bgp-emblema">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="row">
										<div class="col-xl-8 offset-xl-2">
											<div class="about-section-content">
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_SIX_SLIDE"]["~VALUE"]?></div>
												<div class="about-hr"></div>
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_SIX_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row row-zero row-full-width half-height">
						<div class="col-12 col-md-7 col-xl-8 bgc-grey bgp-rasstavanie">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="row">
										<div class="col-xl-8 offset-xl-2">
											<div class="about-section-content">
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_SEVEN_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
												<div class="about-hr"></div>
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_SEVEN_SLIDE"]["~VALUE"]?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-5 col-xl-4 bgc-red">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="row">
										<div class="col-xl-10 offset-xl-1">
											<div class="about-section-content">
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_EIGHT_SLIDE"]["~VALUE"]?></div>
												<div class="about-hr"></div>
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_EIGHT_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-section full-width-block">
					<div class="row row-zero">
						<div class="col-12 col-md-5 col-xl-4 bgc-grey">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="about-section-content">
										<div class="row">
											<div class="col-xl-10 offset-xl-1">
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_NINE_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
												<div class="about-hr"></div>
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_NINE_SLIDE"]["~VALUE"]?></div>
											</div>
										</div>
										<div class="ball-img">
											<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["IMG_NINE_SLIDE"]["VALUE"], Array("width" => 500, "height" => 402), BX_RESIZE_IMAGE_EXACT);?>
											<img src="<?=$img["src"]?>"/></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-7 col-xl-8 full-height bgc-red bgp-kurtka">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="kurtka-text vertical-centered-block">
										<div class="row">
											<div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
												<div class="about-section-content">
													<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_TEN_SLIDE"]["~VALUE"]?></div>
													<div class="about-hr"></div>
													<div class="about-sub-ttl">
														<?=$arResult["PROPERTIES"]["DESCRIPTION_TEN_SLIDE"]["~VALUE"]["TEXT"]?></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-section full-width-block">
					<div class="row row-zero">
						<div class="col-12 col-md-5 col-xl-4 bgc-blue">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="about-section-content">
										<div class="row">
											<div class="col-xl-10 offset-xl-1">
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_ELEVEN_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
												<div class="about-hr"></div>
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_ELEVEN_SLIDE"]["~VALUE"]?></div>
											</div>
										</div>
										<div class="futbolka-img">
											<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["IMG_ELEVEN_SLIDE"]["VALUE"], Array("width" => 500, "height" => 579), BX_RESIZE_IMAGE_EXACT);?>
											<img src="<?=$img["src"]?>" alt=""/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-7 col-xl-8 bgc-grey bgp-kachok">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="row">
										<div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
											<div class="about-section-content">
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_TWELVE_SLIDE"]["~VALUE"]?></div>
												<div class="about-hr"></div>
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_TWELVE_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-section one-third-width-block">
					<div class="row row-zero half-height">
						<div class="col-12 bgc-green bgp-kubok">
							
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="about-section-content">
										<div class="row">
											<div class="col-xl-10 offset-xl-1">
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_THIRTEEN_SLIDE"]["~VALUE"]?></div>
												<div class="about-hr"></div>
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_THIRTEEN_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
											</div>
										</div>
									</div>
								
								</div>
							
							</div>
						</div>
					</div>
					<div class="row row-zero half-height">
						<div class="col-12 bgc-blue bgp-jumper">
							<div class="about-column about-column-space-between">
								<div class="about-column-item about-column-item-grow about-column-item-v-centered">
									<div class="about-section-content">
										<div class="row">
											<div class="col-xl-10 offset-xl-1">
												<div class="h2 h2-year"><?=$arResult["PROPERTIES"]["NAME_FOURTEEN_SLIDE"]["~VALUE"]?></div>
												<div class="about-hr"></div>
												<div class="about-sub-ttl">
													<?=$arResult["PROPERTIES"]["DESCRIPTION_FOURTEEN_SLIDE"]["~VALUE"]["TEXT"]?>
												</div>
											</div>
										</div>
									</div>
								
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>