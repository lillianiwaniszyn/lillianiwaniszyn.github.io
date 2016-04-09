<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_Module($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "Module";
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

	if( $detailtable == "Includes" )
	{
		$keysAssoc["Term"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("Term", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("Term", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("Term", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Module","Term").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["Term"]));
	$keylink.= "&key2=".runner_htmlspecialchars(rawurlencode(@$data["cID"]));
	
	$xt->assign("Term_mastervalue", $viewControls->showDBValue("Term", $data, $keylink));
	$format = $settings->getViewFormat("Term");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Term")))
		$class = ' rnr-field-number';
		
	$xt->assign("Term_class", $class); // add class for field header as field value
	$xt->assign("Section_mastervalue", $viewControls->showDBValue("Section", $data, $keylink));
	$format = $settings->getViewFormat("Section");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Section")))
		$class = ' rnr-field-number';
		
	$xt->assign("Section_class", $class); // add class for field header as field value
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
	$xt->assign("Start_date_mastervalue", $viewControls->showDBValue("Start_date", $data, $keylink));
	$format = $settings->getViewFormat("Start_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Start_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("Start_date_class", $class); // add class for field header as field value
	$xt->assign("End_date_mastervalue", $viewControls->showDBValue("End_date", $data, $keylink));
	$format = $settings->getViewFormat("End_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("End_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("End_date_class", $class); // add class for field header as field value

	$layout = GetPageLayout("Module", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("Module", "masterprint"));
}

?>