<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_Tutor($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "Tutor";
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

	if( $detailtable == "Tutors_a" )
	{
		$keysAssoc["tID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("tID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("tID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("tID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Tutor","tID").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["tID"]));
	
	$xt->assign("tID_mastervalue", $viewControls->showDBValue("tID", $data, $keylink));
	$format = $settings->getViewFormat("tID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("tID")))
		$class = ' rnr-field-number';
		
	$xt->assign("tID_class", $class); // add class for field header as field value
	$xt->assign("cID_mastervalue", $viewControls->showDBValue("cID", $data, $keylink));
	$format = $settings->getViewFormat("cID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("cID")))
		$class = ' rnr-field-number';
		
	$xt->assign("cID_class", $class); // add class for field header as field value
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

	$layout = GetPageLayout("Tutor", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("Tutor", "masterprint"));
}

?>