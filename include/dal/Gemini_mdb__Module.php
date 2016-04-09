<?php
$dalTableModule = array();
$dalTableModule["Term"] = array("type"=>202,"varname"=>"Term");
$dalTableModule["Section"] = array("type"=>3,"varname"=>"Section");
$dalTableModule["cID"] = array("type"=>3,"varname"=>"cID");
$dalTableModule["Start_date"] = array("type"=>7,"varname"=>"Start_date");
$dalTableModule["End_date"] = array("type"=>7,"varname"=>"End_date");
	$dalTableModule["Term"]["key"]=true;
	$dalTableModule["cID"]["key"]=true;

$dal_info["Gemini_mdb__Module"] = &$dalTableModule;
?>