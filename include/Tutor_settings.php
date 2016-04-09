<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTutor = array();
	$tdataTutor[".truncateText"] = true;
	$tdataTutor[".NumberOfChars"] = 80;
	$tdataTutor[".ShortName"] = "Tutor";
	$tdataTutor[".OwnerID"] = "";
	$tdataTutor[".OriginalTable"] = "Tutor";

//	field labels
$fieldLabelsTutor = array();
$fieldToolTipsTutor = array();
$pageTitlesTutor = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTutor["English"] = array();
	$fieldToolTipsTutor["English"] = array();
	$pageTitlesTutor["English"] = array();
	$fieldLabelsTutor["English"]["tID"] = "T ID";
	$fieldToolTipsTutor["English"]["tID"] = "";
	$fieldLabelsTutor["English"]["cID"] = "C ID";
	$fieldToolTipsTutor["English"]["cID"] = "";
	$fieldLabelsTutor["English"]["fName"] = "F Name";
	$fieldToolTipsTutor["English"]["fName"] = "";
	$fieldLabelsTutor["English"]["mInit"] = "M Init";
	$fieldToolTipsTutor["English"]["mInit"] = "";
	$fieldLabelsTutor["English"]["lName"] = "L Name";
	$fieldToolTipsTutor["English"]["lName"] = "";
	if (count($fieldToolTipsTutor["English"]))
		$tdataTutor[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTutor[""] = array();
	$fieldToolTipsTutor[""] = array();
	$pageTitlesTutor[""] = array();
	if (count($fieldToolTipsTutor[""]))
		$tdataTutor[".isUseToolTips"] = true;
}


	$tdataTutor[".NCSearch"] = true;



$tdataTutor[".shortTableName"] = "Tutor";
$tdataTutor[".nSecOptions"] = 0;
$tdataTutor[".recsPerRowList"] = 1;
$tdataTutor[".recsPerRowPrint"] = 1;
$tdataTutor[".mainTableOwnerID"] = "";
$tdataTutor[".moveNext"] = 1;
$tdataTutor[".entityType"] = 0;

$tdataTutor[".strOriginalTableName"] = "Tutor";




$tdataTutor[".showAddInPopup"] = false;

$tdataTutor[".showEditInPopup"] = false;

$tdataTutor[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTutor[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTutor[".fieldsForRegister"] = array();

$tdataTutor[".listAjax"] = false;

	$tdataTutor[".audit"] = false;

	$tdataTutor[".locking"] = false;

$tdataTutor[".edit"] = true;
$tdataTutor[".afterEditAction"] = 1;
$tdataTutor[".closePopupAfterEdit"] = 1;
$tdataTutor[".afterEditActionDetTable"] = "";

$tdataTutor[".add"] = true;
$tdataTutor[".afterAddAction"] = 1;
$tdataTutor[".closePopupAfterAdd"] = 1;
$tdataTutor[".afterAddActionDetTable"] = "";

$tdataTutor[".list"] = true;

$tdataTutor[".inlineEdit"] = true;
$tdataTutor[".inlineAdd"] = true;
$tdataTutor[".view"] = true;

$tdataTutor[".import"] = true;

$tdataTutor[".exportTo"] = true;

$tdataTutor[".printFriendly"] = true;

$tdataTutor[".delete"] = true;

$tdataTutor[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTutor[".searchSaving"] = false;
//

$tdataTutor[".showSearchPanel"] = true;
		$tdataTutor[".flexibleSearch"] = true;

if (isMobile())
	$tdataTutor[".isUseAjaxSuggest"] = false;
else
	$tdataTutor[".isUseAjaxSuggest"] = true;

$tdataTutor[".rowHighlite"] = true;



$tdataTutor[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTutor[".isUseTimeForSearch"] = false;





$tdataTutor[".allSearchFields"] = array();
$tdataTutor[".filterFields"] = array();
$tdataTutor[".requiredSearchFields"] = array();

$tdataTutor[".allSearchFields"][] = "tID";
	$tdataTutor[".allSearchFields"][] = "cID";
	$tdataTutor[".allSearchFields"][] = "fName";
	$tdataTutor[".allSearchFields"][] = "mInit";
	$tdataTutor[".allSearchFields"][] = "lName";
	

$tdataTutor[".googleLikeFields"] = array();
$tdataTutor[".googleLikeFields"][] = "tID";
$tdataTutor[".googleLikeFields"][] = "cID";
$tdataTutor[".googleLikeFields"][] = "fName";
$tdataTutor[".googleLikeFields"][] = "mInit";
$tdataTutor[".googleLikeFields"][] = "lName";


$tdataTutor[".advSearchFields"] = array();
$tdataTutor[".advSearchFields"][] = "tID";
$tdataTutor[".advSearchFields"][] = "cID";
$tdataTutor[".advSearchFields"][] = "fName";
$tdataTutor[".advSearchFields"][] = "mInit";
$tdataTutor[".advSearchFields"][] = "lName";

$tdataTutor[".tableType"] = "list";

$tdataTutor[".printerPageOrientation"] = 0;
$tdataTutor[".nPrinterPageScale"] = 100;

$tdataTutor[".nPrinterSplitRecords"] = 40;

$tdataTutor[".nPrinterPDFSplitRecords"] = 40;



$tdataTutor[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataTutor[".pageSize"] = 20;

$tdataTutor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTutor[".strOrderBy"] = $tstrOrderBy;

$tdataTutor[".orderindexes"] = array();

$tdataTutor[".sqlHead"] = "SELECT tID,  	cID,  	fName,  	mInit,  	lName";
$tdataTutor[".sqlFrom"] = "FROM Tutor";
$tdataTutor[".sqlWhereExpr"] = "";
$tdataTutor[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTutor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTutor[".arrGroupsPerPage"] = $arrGPP;

$tdataTutor[".highlightSearchResults"] = true;

$tableKeysTutor = array();
$tableKeysTutor[] = "tID";
$tdataTutor[".Keys"] = $tableKeysTutor;

$tdataTutor[".listFields"] = array();
$tdataTutor[".listFields"][] = "tID";
$tdataTutor[".listFields"][] = "cID";
$tdataTutor[".listFields"][] = "fName";
$tdataTutor[".listFields"][] = "mInit";
$tdataTutor[".listFields"][] = "lName";

$tdataTutor[".hideMobileList"] = array();


$tdataTutor[".viewFields"] = array();
$tdataTutor[".viewFields"][] = "tID";
$tdataTutor[".viewFields"][] = "cID";
$tdataTutor[".viewFields"][] = "fName";
$tdataTutor[".viewFields"][] = "mInit";
$tdataTutor[".viewFields"][] = "lName";

$tdataTutor[".addFields"] = array();
$tdataTutor[".addFields"][] = "cID";
$tdataTutor[".addFields"][] = "fName";
$tdataTutor[".addFields"][] = "mInit";
$tdataTutor[".addFields"][] = "lName";

$tdataTutor[".masterListFields"] = array();
$tdataTutor[".masterListFields"][] = "tID";
$tdataTutor[".masterListFields"][] = "cID";
$tdataTutor[".masterListFields"][] = "fName";
$tdataTutor[".masterListFields"][] = "mInit";
$tdataTutor[".masterListFields"][] = "lName";

$tdataTutor[".inlineAddFields"] = array();
$tdataTutor[".inlineAddFields"][] = "cID";
$tdataTutor[".inlineAddFields"][] = "fName";
$tdataTutor[".inlineAddFields"][] = "mInit";
$tdataTutor[".inlineAddFields"][] = "lName";

$tdataTutor[".editFields"] = array();
$tdataTutor[".editFields"][] = "cID";
$tdataTutor[".editFields"][] = "fName";
$tdataTutor[".editFields"][] = "mInit";
$tdataTutor[".editFields"][] = "lName";

$tdataTutor[".inlineEditFields"] = array();
$tdataTutor[".inlineEditFields"][] = "cID";
$tdataTutor[".inlineEditFields"][] = "fName";
$tdataTutor[".inlineEditFields"][] = "mInit";
$tdataTutor[".inlineEditFields"][] = "lName";

$tdataTutor[".exportFields"] = array();
$tdataTutor[".exportFields"][] = "tID";
$tdataTutor[".exportFields"][] = "cID";
$tdataTutor[".exportFields"][] = "fName";
$tdataTutor[".exportFields"][] = "mInit";
$tdataTutor[".exportFields"][] = "lName";

$tdataTutor[".importFields"] = array();
$tdataTutor[".importFields"][] = "tID";
$tdataTutor[".importFields"][] = "cID";
$tdataTutor[".importFields"][] = "fName";
$tdataTutor[".importFields"][] = "mInit";
$tdataTutor[".importFields"][] = "lName";

$tdataTutor[".printFields"] = array();
$tdataTutor[".printFields"][] = "tID";
$tdataTutor[".printFields"][] = "cID";
$tdataTutor[".printFields"][] = "fName";
$tdataTutor[".printFields"][] = "mInit";
$tdataTutor[".printFields"][] = "lName";

//	tID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tID";
	$fdata["GoodName"] = "tID";
	$fdata["ownerTable"] = "Tutor";
	$fdata["Label"] = GetFieldLabel("Tutor","tID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataTutor["tID"] = $fdata;
//	cID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cID";
	$fdata["GoodName"] = "cID";
	$fdata["ownerTable"] = "Tutor";
	$fdata["Label"] = GetFieldLabel("Tutor","cID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataTutor["cID"] = $fdata;
//	fName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fName";
	$fdata["GoodName"] = "fName";
	$fdata["ownerTable"] = "Tutor";
	$fdata["Label"] = GetFieldLabel("Tutor","fName");
	$fdata["FieldType"] = 202;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fName";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataTutor["fName"] = $fdata;
//	mInit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mInit";
	$fdata["GoodName"] = "mInit";
	$fdata["ownerTable"] = "Tutor";
	$fdata["Label"] = GetFieldLabel("Tutor","mInit");
	$fdata["FieldType"] = 202;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mInit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mInit";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataTutor["mInit"] = $fdata;
//	lName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "lName";
	$fdata["GoodName"] = "lName";
	$fdata["ownerTable"] = "Tutor";
	$fdata["Label"] = GetFieldLabel("Tutor","lName");
	$fdata["FieldType"] = 202;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lName";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataTutor["lName"] = $fdata;


$tables_data["Tutor"]=&$tdataTutor;
$field_labels["Tutor"] = &$fieldLabelsTutor;
$fieldToolTips["Tutor"] = &$fieldToolTipsTutor;
$page_titles["Tutor"] = &$pageTitlesTutor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Tutor"] = array();
//	Tutors_a
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Tutors_a";
		$detailsParam["dOriginalTable"] = "Tutors_a";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Tutors_a";
	$detailsParam["dCaptionTable"] = GetTableCaption("Tutors_a");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["Tutor"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Tutor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Tutor"][$dIndex]["masterKeys"][]="tID";

				$detailsTablesData["Tutor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Tutor"][$dIndex]["detailKeys"][]="tID";

// tables which are master tables for current table (detail)
$masterTablesData["Tutor"] = array();


	
				$strOriginalDetailsTable="Course";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Course";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Course";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Tutor"][0] = $masterParams;
				$masterTablesData["Tutor"][0]["masterKeys"] = array();
	$masterTablesData["Tutor"][0]["masterKeys"][]="cID";
				$masterTablesData["Tutor"][0]["detailKeys"] = array();
	$masterTablesData["Tutor"][0]["detailKeys"][]="cID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Tutor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tID,  	cID,  	fName,  	mInit,  	lName";
$proto0["m_strFrom"] = "FROM Tutor";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "tID",
	"m_strTable" => "Tutor",
	"m_srcTableName" => "Tutor"
));

$proto5["m_sql"] = "tID";
$proto5["m_srcTableName"] = "Tutor";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cID",
	"m_strTable" => "Tutor",
	"m_srcTableName" => "Tutor"
));

$proto7["m_sql"] = "cID";
$proto7["m_srcTableName"] = "Tutor";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fName",
	"m_strTable" => "Tutor",
	"m_srcTableName" => "Tutor"
));

$proto9["m_sql"] = "fName";
$proto9["m_srcTableName"] = "Tutor";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "mInit",
	"m_strTable" => "Tutor",
	"m_srcTableName" => "Tutor"
));

$proto11["m_sql"] = "mInit";
$proto11["m_srcTableName"] = "Tutor";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "lName",
	"m_strTable" => "Tutor",
	"m_srcTableName" => "Tutor"
));

$proto13["m_sql"] = "lName";
$proto13["m_srcTableName"] = "Tutor";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "Tutor";
$proto16["m_srcTableName"] = "Tutor";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "tID";
$proto16["m_columns"][] = "cID";
$proto16["m_columns"][] = "fName";
$proto16["m_columns"][] = "mInit";
$proto16["m_columns"][] = "lName";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "Tutor";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "Tutor";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Tutor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Tutor = createSqlQuery_Tutor();



					

$tdataTutor[".sqlquery"] = $queryData_Tutor;

$tableEvents["Tutor"] = new eventsBase;
$tdataTutor[".hasEvents"] = false;

?>