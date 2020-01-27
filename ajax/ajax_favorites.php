<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (isset($_SESSION["LIST_FAVORITES"]))
{
	if ($_REQUEST["ID_FAVORITES"])
	{
		$flagFavorites = true;
		foreach ($_SESSION["LIST_FAVORITES"] as $item) {
			if ($item == $_REQUEST["ID_FAVORITES"]) {
				$flagFavorites = false;
			}
		}
		if ($flagFavorites) {
			$_SESSION["LIST_FAVORITES"][] = $_REQUEST["ID_FAVORITES"];
		}
	}
	
	if ($_REQUEST["ID_REMOVE"])
	{
		if(($key = array_search($_REQUEST["ID_REMOVE"],$_SESSION["LIST_FAVORITES"])) !== false)
		{
	    	unset($_SESSION["LIST_FAVORITES"][$key]);
		}
	}
} else {
	$_SESSION["LIST_FAVORITES"] = array();
	$_SESSION["LIST_FAVORITES"][] = $_REQUEST["ID_FAVORITES"];
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); ?>