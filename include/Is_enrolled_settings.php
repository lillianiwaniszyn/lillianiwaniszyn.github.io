<?php
require_once(getabspath("classes/cipherer.php"));




$tdataIs_enrolled = array();
	$tdataIs_enrolled[".truncateText"] = true;
	$tdataIs_enrolled[".NumberOfChars"] = 80;
	$tdataIs_enrolled[".ShortName"] = "Is_enrolled";
	$tdataIs_enrolled[".OwnerID"] = "";
	$tdataIs_enrolled[".OriginalTable"] = "Is_enrolled";

//	field labels
$fieldLabelsIs_enrolled = array();
$fieldToolTipsIs_enrolled = array();
$pageTitlesIs_enrolled = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsIs_enrolled["English"] = array();
	$fieldToolTipsIs_enrolled["English"] = array();
	$pageTitlesIs_enrolled["English"] = array();
	$fieldLabelsIs_enrolled["English"]["uID"] = "U ID";
	$fieldToolTipsIs_enrolled["English"]["uID"] = "";
	$fieldLabelsIs_enrolled["English"]["cID"] = "C ID";
	$fieldToolTipsIs_enrolled["English"]["cID"] = "";
	$fieldLabelsIs_enrolled["English"]["Mark"] = "Mark";
	$fieldToolTipsIs_enrolled["English"]["Mark"] = "";
	if (count($fieldToolTipsIs_enrolled["English"]))
		$tdataIs_enrolled[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsIs_enrolled[""] = array();
	$fieldToolTipsIs_enrolled[""] = array();
	$pageTitlesIs_enrolled[""] = array();
	if (count($fieldToolTipsIs_enrolled[""]))
		$tdataIs_enrolled[".isUseToolTips"] = true;
}


	$tdataIs_enrolled[".NCSearch"] = true;



$tdataIs_enrolled[".shortTableName"] = "Is_enrolled";
$tdataIs_enrolled[".nSecOptions"] = 0;
$tdataIs_enrolled[".recsPerRowList"] = 1;
$tdataIs_enrolled[".recsPerRowPrint"] = 1;
$tdataIs_enrolled[".mainTableOwnerID"] = "";
$tdataIs_enrolled[".moveNext"] = 1;
$tdataIs_enrolled[".entityType"] = 0;

$tdataIs_enrolled[".strOriginalTableName"] = "Is_enrolled";




$tdataIs_enrolled[".showAddInPopup"] = false;

$tdataIs_enrolled[".showEditInPopup"] = false;

$tdataIs_enrolled[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataIs_enrolled[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataIs_enrolled[".fieldsForRegister"] = array();

$tdataIs_enrolled[".listAjax"] = false;

	$tdataIs_enrolled[".audit"] = false;

	$tdataIs_enrolled[".locking"] = false;

$tdataIs_enrolled[".edit"] = true;
$tdataIs_enrolled[".afterEditAction"] = 1;
$tdataIs_enrolled[".closePopupAfterEdit"] = 1;
$tdataIs_enrolled[".afterEditActionDetTable"] = "";

$tdataIs_enrolled[".add"] = true;
$tdataIs_enrolled[".afterAddAction"] = 1;
$tdataIs_enrolled[".closePopupAfterAdd"] = 1;
$tdataIs_enrolled[".afterAddActionDetTable"] = "";

$tdataIs_enrolled[".list"] = true;

$tdataIs_enrolled[".view"] = true;




$tdataIs_enrolled[".delete"] = true;

$tdataIs_enrolled[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataIs_enrolled[".searchSaving"] = false;
//

$tdataIs_enrolled[".showSearchPanel"] = true;
		$tdataIs_enrolled[".flexibleSearch"] = true;

if (isMobile())
	$tdataIs_enrolled[".isUseAjaxSuggest"] = false;
else
	$tdataIs_enrolled[".isUseAjaxSuggest"] = true;

$tdataIs_enrolled[".rowHighlite"] = true;



$tdataIs_enrolled[".addPageEvents"] = false;

// use timepicker for search panel
$tdataIs_enrolled[".isUseTimeForSearch"] = false;





$tdataIs_enrolled[".allSearchFields"] = array();
$tdataIs_enrolled[".filterFields"] = array();
$tdataIs_enrolled[".requiredSearchFields"] = array();

$tdataIs_enrolled[".allSearchFields"][] = "uID";
	$tdataIs_enrolled[".allSearchFields"][] = "cID";
	$tdataIs_enrolled[".allSearchFields"][] = "Mark";
	

$tdataIs_enrolled[".googleLikeFields"] = array();
$tdataIs_enrolled[".googleLikeFields"][] = "uID";
$tdataIs_enrolled[".googleLikeFields"][] = "cID";
$tdataIs_enrolled[".googleLikeFields"][] = "Mark";


$tdataIs_enrolled[".advSearchFields"] = array();
$tdataIs_enrolled[".advSearchFields"][] = "uID";
$tdataIs_enrolled[".advSearchFields"][] = "cID";
$tdataIs_enrolled[".advSearchFields"][] = "Mark";

$tdataIs_enrolled[".tableType"] = "list";

$tdataIs_enrolled[".printerPageOrientation"] = 0;
$tdataIs_enrolled[".nPrinterPageScale"] = 100;

$tdataIs_enrolled[".nPrinterSplitRecords"] = 40;

$tdataIs_enrolled[".nPrinterPDFSplitRecords"] = 40;



$tdataIs_enrolled[".geocodingEnabled"] = false;










// view page pdf
$tdataIs_enrolled[".isViewPagePDF"] = true;
$tdataIs_enrolled[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataIs_enrolled[".isPrinterPagePDF"] = true;
$tdataIs_enrolled[".nPrinterPagePDFScale"] = 100;


$tdataIs_enrolled[".pageSize"] = 20;

$tdataIs_enrolled[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataIs_enrolled[".strOrderBy"] = $tstrOrderBy;

$tdataIs_enrolled[".orderindexes"] = array();

$tdataIs_enrolled[".sqlHead"] = "SELECT [uID],  	cID,  	Mark";
$tdataIs_enrolled[".sqlFrom"] = "FROM Is_enrolled";
$tdataIs_enrolled[".sqlWhereExpr"] = "";
$tdataIs_enrolled[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataIs_enrolled[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataIs_enrolled[".arrGroupsPerPage"] = $arrGPP;

$tdataIs_enrolled[".highlightSearchResults"] = true;

$tableKeysIs_enrolled = array();
$tableKeysIs_enrolled[] = "uID";
$tdataIs_enrolled[".Keys"] = $tableKeysIs_enrolled;

$tdataIs_enrolled[".listFields"] = array();
$tdataIs_enrolled[".listFields"][] = "uID";
$tdataIs_enrolled[".listFields"][] = "cID";
$tdataIs_enrolled[".listFields"][] = "Mark";

$tdataIs_enrolled[".hideMobileList"] = array();


$tdataIs_enrolled[".viewFields"] = array();
$tdataIs_enrolled[".viewFields"][] = "uID";
$tdataIs_enrolled[".viewFields"][] = "cID";
$tdataIs_enrolled[".viewFields"][] = "Mark";

$tdataIs_enrolled[".addFields"] = array();
$tdataIs_enrolled[".addFields"][] = "uID";
$tdataIs_enrolled[".addFields"][] = "cID";
$tdataIs_enrolled[".addFields"][] = "Mark";

$tdataIs_enrolled[".masterListFields"] = array();
$tdataIs_enrolled[".masterListFields"][] = "uID";
$tdataIs_enrolled[".masterListFields"][] = "cID";
$tdataIs_enrolled[".masterListFields"][] = "Mark";

$tdataIs_enrolled[".inlineAddFields"] = array();

$tdataIs_enrolled[".editFields"] = array();
$tdataIs_enrolled[".editFields"][] = "uID";
$tdataIs_enrolled[".editFields"][] = "cID";
$tdataIs_enrolled[".editFields"][] = "Mark";

$tdataIs_enrolled[".inlineEditFields"] = array();

$tdataIs_enrolled[".exportFields"] = array();

$tdataIs_enrolled[".importFields"] = array();

$tdataIs_enrolled[".printFields"] = array();

//	uID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "uID";
	$fdata["GoodName"] = "uID";
	$fdata["ownerTable"] = "Is_enrolled";
	$fdata["Label"] = GetFieldLabel("Is_enrolled","uID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "uID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "[uID]";

	
	
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




	$tdataIs_enrolled["uID"] = $fdata;
//	cID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cID";
	$fdata["GoodName"] = "cID";
	$fdata["ownerTable"] = "Is_enrolled";
	$fdata["Label"] = GetFieldLabel("Is_enrolled","cID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataIs_enrolled["cID"] = $fdata;
//	Mark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Mark";
	$fdata["GoodName"] = "Mark";
	$fdata["ownerTable"] = "Is_enrolled";
	$fdata["Label"] = GetFieldLabel("Is_enrolled","Mark");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Mark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mark";

	
	
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




	$tdataIs_enrolled["Mark"] = $fdata;


$tables_data["Is_enrolled"]=&$tdataIs_enrolled;
$field_labels["Is_enrolled"] = &$fieldLabelsIs_enrolled;
$fieldToolTips["Is_enrolled"] = &$fieldToolTipsIs_enrolled;
$page_titles["Is_enrolled"] = &$pageTitlesIs_enrolled;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Is_enrolled"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Is_enrolled"] = array();


	
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
					$masterTablesData["Is_enrolled"][0] = $masterParams;
				$masterTablesData["Is_enrolled"][0]["masterKeys"] = array();
	$masterTablesData["Is_enrolled"][0]["masterKeys"][]="cID";
				$masterTablesData["Is_enrolled"][0]["detailKeys"] = array();
	$masterTablesData["Is_enrolled"][0]["detailKeys"][]="cID";
		
	
				$strOriginalDetailsTable="Student";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Student";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Student";
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
					$masterTablesData["Is_enrolled"][1] = $masterParams;
				$masterTablesData["Is_enrolled"][1]["masterKeys"] = array();
	$masterTablesData["Is_enrolled"][1]["masterKeys"][]="sID";
				$masterTablesData["Is_enrolled"][1]["detailKeys"] = array();
	$masterTablesData["Is_enrolled"][1]["detailKeys"][]="uID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Is_enrolled()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "[uID],  	cID,  	Mark";
$proto0["m_strFrom"] = "FROM Is_enrolled";
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
	"m_strName" => "uID",
	"m_strTable" => "Is_enrolled",
	"m_srcTableName" => "Is_enrolled"
));

$proto5["m_sql"] = "[uID]";
$proto5["m_srcTableName"] = "Is_enrolled";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cID",
	"m_strTable" => "Is_enrolled",
	"m_srcTableName" => "Is_enrolled"
));

$proto7["m_sql"] = "cID";
$proto7["m_srcTableName"] = "Is_enrolled";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Mark",
	"m_strTable" => "Is_enrolled",
	"m_srcTableName" => "Is_enrolled"
));

$proto9["m_sql"] = "Mark";
$proto9["m_srcTableName"] = "Is_enrolled";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "Is_enrolled";
$proto12["m_srcTableName"] = "Is_enrolled";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "uID";
$proto12["m_columns"][] = "cID";
$proto12["m_columns"][] = "Mark";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "Is_enrolled";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "Is_enrolled";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Is_enrolled";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Is_enrolled = createSqlQuery_Is_enrolled();



			

$tdataIs_enrolled[".sqlquery"] = $queryData_Is_enrolled;

$tableEvents["Is_enrolled"] = new eventsBase;
$tdataIs_enrolled[".hasEvents"] = false;

?>