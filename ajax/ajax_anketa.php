<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$name= $_POST["PROPERTY"][177][0] . " " . $_POST["PROPERTY"][176][0];
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



pr($_POST);
//pr($_FILES);

$el = new CIBlockElement;

$arLoadProductArray = Array(
	"MODIFIED_BY"    => $GLOBALS['USER']->GetID(), // элемент изменен текущим пользователем
	"IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
	"IBLOCK_ID"      => 55,
	"PROPERTY_VALUES"=> $_POST["PROPERTY"],
	"NAME"           => $name,
	"ACTIVE"         => "Y",            // активен
);

if($PRODUCT_ID = $el->Add($arLoadProductArray))
	echo "New ID: ".$PRODUCT_ID;
else
	echo "Error: ".$el->LAST_ERROR;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); ?>