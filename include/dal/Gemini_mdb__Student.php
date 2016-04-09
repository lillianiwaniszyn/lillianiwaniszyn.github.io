<?php
$dalTableStudent = array();
$dalTableStudent["sID"] = array("type"=>3,"varname"=>"sID");
$dalTableStudent["bDay"] = array("type"=>7,"varname"=>"bDay");
$dalTableStudent["Gender"] = array("type"=>202,"varname"=>"Gender");
$dalTableStudent["reg_date"] = array("type"=>7,"varname"=>"reg_date");
$dalTableStudent["Country"] = array("type"=>202,"varname"=>"Country");
$dalTableStudent["fName"] = array("type"=>202,"varname"=>"fName");
$dalTableStudent["mInit"] = array("type"=>202,"varname"=>"mInit");
$dalTableStudent["lName"] = array("type"=>202,"varname"=>"lName");
$dalTableStudent["eMail"] = array("type"=>202,"varname"=>"eMail");
	$dalTableStudent["sID"]["key"]=true;

$dal_info["Gemini_mdb__Student"] = &$dalTableStudent;
?>