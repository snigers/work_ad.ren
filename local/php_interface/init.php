<?



function pr($arr)
{
	echo '<pre>' . print_r($arr, true) . '</pre><br/>';
}

function getSortVacancies($sortName) {
	$res = array();
	if ($sortName)
	{
		$res["sort_by"] = "PROPERTY_PUBLICATION_DATA";
		if ($_REQUEST["sort_num"] == "1")
		{
			$res["sort_by"] = "ID";
			$res["sort_order"] = "ASC";
		}
		if ($_REQUEST["sort_num"] == "2")
		{
			$res["sort_order"] = "ASC";
		}
		if ($_REQUEST["sort_num"] == "3")
		{
			$res["sort_order"] = "DESC";
		}
	} else {
		$res["sort_by"] = "ID";
		$res["sort_order"] = "ASC";
	}
	return $res;
}

function getFiltersSTR($array = "") {
	$res = "";
	if ($array != "")
	{
		$count = count($array) - 1;
		$count_flag = 0;
		foreach ($array as $key => $arItem)
		{
			if ($count == $count_flag)
			{
				if ($arItem != "")
				{
					$res .= $key . "=" . $arItem;
				} else {
					$res .= $key . "=NON";
				}
			} else {
				if ($arItem != "")
				{
					$res .= $key . "=" . $arItem . "&";
				} else {
					$res .= $key . "=NON" . "&";
				}
			}
			$count_flag++;
		}
	}
	return $res;
}

?>