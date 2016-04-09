<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_Course($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "Course";
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
		$keysAssoc["cID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("cID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("cID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("cID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Course","cID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Module" )
	{
		$keysAssoc["cID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("cID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("cID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("cID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Course","cID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Tutor" )
	{
		$keysAssoc["cID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("cID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("cID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("cID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Course","cID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Includes" )
	{
		$keysAssoc["cID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("cID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("cID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("cID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Course","cID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "Tutors_a" )
	{
		$keysAssoc["cID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("cID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("cID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("cID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("Course","cID").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["cID"]));
	
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
	$xt->assign("Name_mastervalue", $viewControls->showDBValue("Name", $data, $keylink));
	$format = $settings->getViewFormat("Name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Name")))
		$class = ' rnr-field-number';
		
	$xt->assign("Name_class", $class); // add class for field header as field value
	$xt->assign("SKU_mastervalue", $viewControls->showDBValue("SKU", $data, $keylink));
	$format = $settings->getViewFormat("SKU");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("SKU")))
		$class = ' rnr-field-number';
		
	$xt->assign("SKU_class", $class); // add class for field header as field value
	$xt->assign("Price_mastervalue", $viewControls->showDBValue("Price", $data, $keylink));
	$format = $settings->getViewFormat("Price");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Price")))
		$class = ' rnr-field-number';
		
	$xt->assign("Price_class", $class); // add class for field header as field value
	$xt->assign("Category_mastervalue", $viewControls->showDBValue("Category", $data, $keylink));
	$format = $settings->getViewFormat("Category");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Category")))
		$class = ' rnr-field-number';
		
	$xt->assign("Category_class", $class); // add class for field header as field value

	$layout = GetPageLayout("Course", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("Course", "masterprint"));
}

?>