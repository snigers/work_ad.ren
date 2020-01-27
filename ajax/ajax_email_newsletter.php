<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('subscribe');

$arResult = array();
global $USER;
	
	// запрос всех рубрик
$rub = CRubric::GetList(
	array("LID" => "ASC", "SORT" => "ASC", "NAME" => "ASC"),
	array("ACTIVE" => "Y", "LID" => LANG)
);
$arRubIDS = array();
while ($arRub = $rub->Fetch()) {
	$arRubIDS[] = $arRub['ID'];
}
	
	// формируем массив с полями для создания подписки
$arFields = Array(
	"USER_ID" => ($USER->IsAuthorized() ? $USER->GetID() : false),
	"FORMAT" => "html",
	"EMAIL" => $_REQUEST['email'],
	"ACTIVE" => "Y",
	"RUB_ID" => $arRubIDS,
	"SEND_CONFIRM" => 'Y'
);


$subscr = new CSubscription;
	
	// создаем подписку
$ID = $subscr->Add($arFields);
if ($ID > 0) {
	$arResult['status'] = 'ok';
} else {
	$arResult['status'] = 'error';
	$arResult['msg'] = str_replace("<br>", "", $subscr->LAST_ERROR);
}



pr($_REQUEST);











require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); ?>