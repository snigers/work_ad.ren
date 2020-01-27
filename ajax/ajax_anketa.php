<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$name = $_POST["PROPERTY"][177][0] . " " . $_POST["PROPERTY"][176][0];
$section = $_POST["PROPERTY"][173];
$IBLOCK_ID = 55;

$_POST["PROPERTY"][193][0] = $_FILES["PROPERTY_FILE_193_0"];

$city = getListCity();
$language = getListLang();
//pr($city);

foreach($city as $arCity)
{
	if ($arCity["ID"] == $_POST["PROPERTY"][175][0]["VALUE"][0])
	{
		$_POST["PROPERTY"][175][0]["VALUE"] = $arCity["UF_XML_ID"];
	}
}
foreach($language as $arLanguage)
{
	if ($arLanguage["ID"] == $_POST["PROPERTY"][187][0]["VALUE"][0])
	{
		$_POST["PROPERTY"][187][0]["VALUE"] = $arLanguage["UF_XML_ID"];
	}

	foreach ($_POST["PROPERTY"][188] as $key => $arItem)
	{
		if ($arLanguage["ID"] == $arItem["VALUE"][0])
		{
			$_POST["PROPERTY"][188][$key]["VALUE"] = $arLanguage["UF_XML_ID"];
		}

	}

}
$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID"=>$IBLOCK_ID, "CODE"=>"SECTION"));
while($enum_fields = $property_enums->GetNext())
{
	if ($_POST["PROPERTY"][173] == $enum_fields["VALUE"])
	{
		$_POST["PROPERTY"][173] = $enum_fields["ID"];
	}
}


//==============================
// Получаем ID вакансии
$arSelect = Array("ID", "IBLOCK_ID");
$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "NAME" => $_POST["PROPERTY"][174]);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()){
	$arFields = $ob->GetFields();
	$_POST["PROPERTY"][174] = $arFields["ID"];
}


//==============================



//pr($_POST);
//echo "Y";
//pr($_FILES);

$el = new CIBlockElement;

$arLoadProductArray = Array(
	"MODIFIED_BY"    => $GLOBALS['USER']->GetID(), // элемент изменен текущим пользователем
	"IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
	"IBLOCK_ID"      => $IBLOCK_ID,
	"PROPERTY_VALUES"=> $_POST["PROPERTY"],
	"NAME"           => $name,
	"ACTIVE"         => "Y",            // активен
);

if($PRODUCT_ID = $el->Add($arLoadProductArray))
	echo "New ID: ".$PRODUCT_ID;
else
	echo "Error: ".$el->LAST_ERROR;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); ?>