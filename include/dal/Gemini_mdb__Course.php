<?php
$dalTableCourse = array();
$dalTableCourse["cID"] = array("type"=>3,"varname"=>"cID");
$dalTableCourse["Name"] = array("type"=>202,"varname"=>"Name");
$dalTableCourse["SKU"] = array("type"=>3,"varname"=>"SKU");
$dalTableCourse["Price"] = array("type"=>6,"varname"=>"Price");
$dalTableCourse["Category"] = array("type"=>202,"varname"=>"Category");
	$dalTableCourse["cID"]["key"]=true;

$dal_info["Gemini_mdb__Course"] = &$dalTableCourse;
?>