<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_Student($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "Student";
	$xt->eventsObject = getEventObject($tName);
	
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["pageType"] = PAGE_PRINT;
	$mParams["tName"] = $tName;
	$masterPage = new PrintPage($mParams);
	
	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT, $masterPage);
	
	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "Is_enrolled" )
	{
		$keysAssoc["sID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("sID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("sID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("sID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Student","sID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}
	
	if( !$where )
		return;
	
	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["sID"]));
	
	$xt->assign("sID_mastervalue", $viewControls->showDBValue("sID", $data, $keylink));
	$format = $settings->getViewFormat("sID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("sID")))
		$class = ' rnr-field-number';
		
	$xt->assign("sID_class", $class); // add class for field header as field value
	$xt->assign("bDay_mastervalue", $viewControls->showDBValue("bDay", $data, $keylink));
	$format = $settings->getViewFormat("bDay");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("bDay")))
		$class = ' rnr-field-number';
		
	$xt->assign("bDay_class", $class); // add class for field header as field value
	$xt->assign("Gender_mastervalue", $viewControls->showDBValue("Gender", $data, $keylink));
	$format = $settings->getViewFormat("Gender");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Gender")))
		$class = ' rnr-field-number';
		
	$xt->assign("Gender_class", $class); // add class for field header as field value
	$xt->assign("reg_date_mastervalue", $viewControls->showDBValue("reg_date", $data, $keylink));
	$format = $settings->getViewFormat("reg_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("reg_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("reg_date_class", $class); // add class for field header as field value
	$xt->assign("Country_mastervalue", $viewControls->showDBValue("Country", $data, $keylink));
	$format = $settings->getViewFormat("Country");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Country")))
		$class = ' rnr-field-number';
		
	$xt->assign("Country_class", $class); // add class for field header as field value
	$xt->assign("fName_mastervalue", $viewControls->showDBValue("fName", $data, $keylink));
	$format = $settings->getViewFormat("fName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("fName")))
		$class = ' rnr-field-number';
		
	$xt->assign("fName_class", $class); // add class for field header as field value
	$xt->assign("mInit_mastervalue", $viewControls->showDBValue("mInit", $data, $keylink));
	$format = $settings->getViewFormat("mInit");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("mInit")))
		$class = ' rnr-field-number';
		
	$xt->assign("mInit_class", $class); // add class for field header as field value
	$xt->assign("lName_mastervalue", $viewControls->showDBValue("lName", $data, $keylink));
	$format = $settings->getViewFormat("lName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("lName")))
		$class = ' rnr-field-number';
		
	$xt->assign("lName_class", $class); // add class for field header as field value
	$xt->assign("eMail_mastervalue", $viewControls->showDBValue("eMail", $data, $keylink));
	$format = $settings->getViewFormat("eMail");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("eMail")))
		$class = ' rnr-field-number';
		
	$xt->assign("eMail_class", $class); // add class for field header as field value

	$layout = GetPageLayout("Student", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("Student", "masterprint"));
}

?>