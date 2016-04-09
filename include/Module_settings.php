<?php
require_once(getabspath("classes/cipherer.php"));




$tdataModule = array();
	$tdataModule[".truncateText"] = true;
	$tdataModule[".NumberOfChars"] = 80;
	$tdataModule[".ShortName"] = "Module";
	$tdataModule[".OwnerID"] = "";
	$tdataModule[".OriginalTable"] = "Module";

//	field labels
$fieldLabelsModule = array();
$fieldToolTipsModule = array();
$pageTitlesModule = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsModule["English"] = array();
	$fieldToolTipsModule["English"] = array();
	$pageTitlesModule["English"] = array();
	$fieldLabelsModule["English"]["Term"] = "Term";
	$fieldToolTipsModule["English"]["Term"] = "";
	$fieldLabelsModule["English"]["Section"] = "Section";
	$fieldToolTipsModule["English"]["Section"] = "";
	$fieldLabelsModule["English"]["cID"] = "C ID";
	$fieldToolTipsModule["English"]["cID"] = "";
	$fieldLabelsModule["English"]["Start_date"] = "Start Date";
	$fieldToolTipsModule["English"]["Start_date"] = "";
	$fieldLabelsModule["English"]["End_date"] = "End Date";
	$fieldToolTipsModule["English"]["End_date"] = "";
	if (count($fieldToolTipsModule["English"]))
		$tdataModule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsModule[""] = array();
	$fieldToolTipsModule[""] = array();
	$pageTitlesModule[""] = array();
	if (count($fieldToolTipsModule[""]))
		$tdataModule[".isUseToolTips"] = true;
}


	$tdataModule[".NCSearch"] = true;



$tdataModule[".shortTableName"] = "Module";
$tdataModule[".nSecOptions"] = 0;
$tdataModule[".recsPerRowList"] = 1;
$tdataModule[".recsPerRowPrint"] = 1;
$tdataModule[".mainTableOwnerID"] = "";
$tdataModule[".moveNext"] = 1;
$tdataModule[".entityType"] = 0;

$tdataModule[".strOriginalTableName"] = "Module";




$tdataModule[".showAddInPopup"] = false;

$tdataModule[".showEditInPopup"] = false;

$tdataModule[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataModule[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataModule[".fieldsForRegister"] = array();

$tdataModule[".listAjax"] = false;

	$tdataModule[".audit"] = false;

	$tdataModule[".locking"] = false;

$tdataModule[".edit"] = true;
$tdataModule[".afterEditAction"] = 1;
$tdataModule[".closePopupAfterEdit"] = 1;
$tdataModule[".afterEditActionDetTable"] = "";

$tdataModule[".add"] = true;
$tdataModule[".afterAddAction"] = 1;
$tdataModule[".closePopupAfterAdd"] = 1;
$tdataModule[".afterAddActionDetTable"] = "";

$tdataModule[".list"] = true;

$tdataModule[".inlineEdit"] = true;
$tdataModule[".inlineAdd"] = true;
$tdataModule[".view"] = true;

$tdataModule[".import"] = true;

$tdataModule[".exportTo"] = true;

$tdataModule[".printFriendly"] = true;

$tdataModule[".delete"] = true;

$tdataModule[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataModule[".searchSaving"] = false;
//

$tdataModule[".showSearchPanel"] = true;
		$tdataModule[".flexibleSearch"] = true;

if (isMobile())
	$tdataModule[".isUseAjaxSuggest"] = false;
else
	$tdataModule[".isUseAjaxSuggest"] = true;

$tdataModule[".rowHighlite"] = true;



$tdataModule[".addPageEvents"] = false;

// use timepicker for search panel
$tdataModule[".isUseTimeForSearch"] = false;





$tdataModule[".allSearchFields"] = array();
$tdataModule[".filterFields"] = array();
$tdataModule[".requiredSearchFields"] = array();

$tdataModule[".allSearchFields"][] = "Term";
	$tdataModule[".allSearchFields"][] = "Section";
	$tdataModule[".allSearchFields"][] = "cID";
	$tdataModule[".allSearchFields"][] = "Start_date";
	$tdataModule[".allSearchFields"][] = "End_date";
	

$tdataModule[".googleLikeFields"] = array();
$tdataModule[".googleLikeFields"][] = "Term";
$tdataModule[".googleLikeFields"][] = "Section";
$tdataModule[".googleLikeFields"][] = "cID";
$tdataModule[".googleLikeFields"][] = "Start_date";
$tdataModule[".googleLikeFields"][] = "End_date";


$tdataModule[".advSearchFields"] = array();
$tdataModule[".advSearchFields"][] = "Term";
$tdataModule[".advSearchFields"][] = "Section";
$tdataModule[".advSearchFields"][] = "cID";
$tdataModule[".advSearchFields"][] = "Start_date";
$tdataModule[".advSearchFields"][] = "End_date";

$tdataModule[".tableType"] = "list";

$tdataModule[".printerPageOrientation"] = 0;
$tdataModule[".nPrinterPageScale"] = 100;

$tdataModule[".nPrinterSplitRecords"] = 40;

$tdataModule[".nPrinterPDFSplitRecords"] = 40;



$tdataModule[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataModule[".pageSize"] = 20;

$tdataModule[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataModule[".strOrderBy"] = $tstrOrderBy;

$tdataModule[".orderindexes"] = array();

$tdataModule[".sqlHead"] = "SELECT Term,  	[Section],  	cID,  	Start_date,  	End_date";
$tdataModule[".sqlFrom"] = "FROM [Module]";
$tdataModule[".sqlWhereExpr"] = "";
$tdataModule[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataModule[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataModule[".arrGroupsPerPage"] = $arrGPP;

$tdataModule[".highlightSearchResults"] = true;

$tableKeysModule = array();
$tableKeysModule[] = "Term";
$tableKeysModule[] = "cID";
$tdataModule[".Keys"] = $tableKeysModule;

$tdataModule[".listFields"] = array();
$tdataModule[".listFields"][] = "Term";
$tdataModule[".listFields"][] = "Section";
$tdataModule[".listFields"][] = "cID";
$tdataModule[".listFields"][] = "Start_date";
$tdataModule[".listFields"][] = "End_date";

$tdataModule[".hideMobileList"] = array();


$tdataModule[".viewFields"] = array();
$tdataModule[".viewFields"][] = "Term";
$tdataModule[".viewFields"][] = "Section";
$tdataModule[".viewFields"][] = "cID";
$tdataModule[".viewFields"][] = "Start_date";
$tdataModule[".viewFields"][] = "End_date";

$tdataModule[".addFields"] = array();
$tdataModule[".addFields"][] = "Term";
$tdataModule[".addFields"][] = "Section";
$tdataModule[".addFields"][] = "cID";
$tdataModule[".addFields"][] = "Start_date";
$tdataModule[".addFields"][] = "End_date";

$tdataModule[".masterListFields"] = array();
$tdataModule[".masterListFields"][] = "Term";
$tdataModule[".masterListFields"][] = "Section";
$tdataModule[".masterListFields"][] = "cID";
$tdataModule[".masterListFields"][] = "Start_date";
$tdataModule[".masterListFields"][] = "End_date";

$tdataModule[".inlineAddFields"] = array();
$tdataModule[".inlineAddFields"][] = "Term";
$tdataModule[".inlineAddFields"][] = "Section";
$tdataModule[".inlineAddFields"][] = "cID";
$tdataModule[".inlineAddFields"][] = "Start_date";
$tdataModule[".inlineAddFields"][] = "End_date";

$tdataModule[".editFields"] = array();
$tdataModule[".editFields"][] = "Term";
$tdataModule[".editFields"][] = "Section";
$tdataModule[".editFields"][] = "cID";
$tdataModule[".editFields"][] = "Start_date";
$tdataModule[".editFields"][] = "End_date";

$tdataModule[".inlineEditFields"] = array();
$tdataModule[".inlineEditFields"][] = "Term";
$tdataModule[".inlineEditFields"][] = "Section";
$tdataModule[".inlineEditFields"][] = "cID";
$tdataModule[".inlineEditFields"][] = "Start_date";
$tdataModule[".inlineEditFields"][] = "End_date";

$tdataModule[".exportFields"] = array();
$tdataModule[".exportFields"][] = "Term";
$tdataModule[".exportFields"][] = "Section";
$tdataModule[".exportFields"][] = "cID";
$tdataModule[".exportFields"][] = "Start_date";
$tdataModule[".exportFields"][] = "End_date";

$tdataModule[".importFields"] = array();
$tdataModule[".importFields"][] = "Term";
$tdataModule[".importFields"][] = "Section";
$tdataModule[".importFields"][] = "cID";
$tdataModule[".importFields"][] = "Start_date";
$tdataModule[".importFields"][] = "End_date";

$tdataModule[".printFields"] = array();
$tdataModule[".printFields"][] = "Term";
$tdataModule[".printFields"][] = "Section";
$tdataModule[".printFields"][] = "cID";
$tdataModule[".printFields"][] = "Start_date";
$tdataModule[".printFields"][] = "End_date";

//	Term
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Term";
	$fdata["GoodName"] = "Term";
	$fdata["ownerTable"] = "Module";
	$fdata["Label"] = GetFieldLabel("Module","Term");
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

		$fdata["strField"] = "Term";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Term";

	
	
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




	$tdataModule["Term"] = $fdata;
//	Section
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Section";
	$fdata["GoodName"] = "Section";
	$fdata["ownerTable"] = "Module";
	$fdata["Label"] = GetFieldLabel("Module","Section");
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

		$fdata["strField"] = "Section";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[Section]";

	
	
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




	$tdataModule["Section"] = $fdata;
//	cID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cID";
	$fdata["GoodName"] = "cID";
	$fdata["ownerTable"] = "Module";
	$fdata["Label"] = GetFieldLabel("Module","cID");
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




	$tdataModule["cID"] = $fdata;
//	Start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Start_date";
	$fdata["GoodName"] = "Start_date";
	$fdata["ownerTable"] = "Module";
	$fdata["Label"] = GetFieldLabel("Module","Start_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Start_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Start_date";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataModule["Start_date"] = $fdata;
//	End_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "End_date";
	$fdata["GoodName"] = "End_date";
	$fdata["ownerTable"] = "Module";
	$fdata["Label"] = GetFieldLabel("Module","End_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "End_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "End_date";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataModule["End_date"] = $fdata;


$tables_data["Module"]=&$tdataModule;
$field_labels["Module"] = &$fieldLabelsModule;
$fieldToolTips["Module"] = &$fieldToolTipsModule;
$page_titles["Module"] = &$pageTitlesModule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Module"] = array();
//	Includes
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Includes";
		$detailsParam["dOriginalTable"] = "Includes";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Includes";
	$detailsParam["dCaptionTable"] = GetTableCaption("Includes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["Module"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Module"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Module"][$dIndex]["masterKeys"][]="Term";

				$detailsTablesData["Module"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Module"][$dIndex]["detailKeys"][]="Term";

// tables which are master tables for current table (detail)
$masterTablesData["Module"] = array();


	
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
					$masterTablesData["Module"][0] = $masterParams;
				$masterTablesData["Module"][0]["masterKeys"] = array();
	$masterTablesData["Module"][0]["masterKeys"][]="cID";
				$masterTablesData["Module"][0]["detailKeys"] = array();
	$masterTablesData["Module"][0]["detailKeys"][]="cID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Module()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Term,  	[Section],  	cID,  	Start_date,  	End_date";
$proto0["m_strFrom"] = "FROM [Module]";
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
	"m_strName" => "Term",
	"m_strTable" => "Module",
	"m_srcTableName" => "Module"
));

$proto5["m_sql"] = "Term";
$proto5["m_srcTableName"] = "Module";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Section",
	"m_strTable" => "Module",
	"m_srcTableName" => "Module"
));

$proto7["m_sql"] = "[Section]";
$proto7["m_srcTableName"] = "Module";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cID",
	"m_strTable" => "Module",
	"m_srcTableName" => "Module"
));

$proto9["m_sql"] = "cID";
$proto9["m_srcTableName"] = "Module";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Start_date",
	"m_strTable" => "Module",
	"m_srcTableName" => "Module"
));

$proto11["m_sql"] = "Start_date";
$proto11["m_srcTableName"] = "Module";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "End_date",
	"m_strTable" => "Module",
	"m_srcTableName" => "Module"
));

$proto13["m_sql"] = "End_date";
$proto13["m_srcTableName"] = "Module";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "Module";
$proto16["m_srcTableName"] = "Module";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "Term";
$proto16["m_columns"][] = "Section";
$proto16["m_columns"][] = "cID";
$proto16["m_columns"][] = "Start_date";
$proto16["m_columns"][] = "End_date";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "[Module]";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "Module";
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
$proto0["m_srcTableName"]="Module";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Module = createSqlQuery_Module();



					

$tdataModule[".sqlquery"] = $queryData_Module;

$tableEvents["Module"] = new eventsBase;
$tdataModule[".hasEvents"] = false;

?>