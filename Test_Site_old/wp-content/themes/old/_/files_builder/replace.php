<?php
$code = file_get_contents('./files.bkp');
$json = json_decode($code,true);

function replaceTree($search="", $replace="", $array=false, $keys_too=false)
{
	if (!is_array($array)) {
		// Regular replace
		if (!is_string($array)) {
			return $array;
		}
		return str_replace($search, $replace, $array);
	}

	$newArr = array();
	foreach ($array as $k=>$v) {
		// Replace keys as well?
		$add_key = $k;
		if ($keys_too) {
			$add_key = str_replace($search, $replace, $k);
		}

		// Recurse
		$newArr[$add_key] = replaceTree($search, $replace, $v, $keys_too);
	}
	return $newArr;
}

$folder = ''; //USE THIS VARIABLE TO BUILD THE CORRECT PATH

$json = replaceTree('https://cms.heartandpaw.com/uploads/',$folder.'/uploads/', $json);
$json = replaceTree('https://cms.heartandpaw.com/thumbnail/',$folder.'/thumbnail/', $json);

//echo(json_encode($json));
file_put_contents('../files', json_encode($json));
echo ('file built in ../files');