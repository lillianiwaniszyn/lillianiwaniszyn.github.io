<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTutors_a = array();
	$tdataTutors_a[".truncateText"] = true;
	$tdataTutors_a[".NumberOfChars"] = 80;
	$tdataTutors_a[".ShortName"] = "Tutors_a";
	$tdataTutors_a[".OwnerID"] = "";
	$tdataTutors_a[".OriginalTable"] = "Tutors_a";

//	field labels
$fieldLabelsTutors_a = array();
$fieldToolTipsTutors_a = array();
$pageTitlesTutors_a = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTutors_a["English"] = array();
	$fieldToolTipsTutors_a["English"] = array();
	$pageTitlesTutors_a["English"] = array();
	$fieldLabelsTutors_a["English"]["tID"] = "T ID";
	$fieldToolTipsTutors_a["English"]["tID"] = "";
	$fieldLabelsTutors_a["English"]["cID"] = "C ID";
	$fieldToolTipsTutors_a["English"]["cID"] = "";
	if (count($fieldToolTipsTutors_a["English"]))
		$tdataTutors_a[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTutors_a[""] = array();
	$fieldToolTipsTutors_a[""] = array();
	$pageTitlesTutors_a[""] = array();
	if (count($fieldToolTipsTutors_a[""]))
		$tdataTutors_a[".isUseToolTips"] = true;
}


	$tdataTutors_a[".NCSearch"] = true;



$tdataTutors_a[".shortTableName"] = "Tutors_a";
$tdataTutors_a[".nSecOptions"] = 0;
$tdataTutors_a[".recsPerRowList"] = 1;
$tdataTutors_a[".recsPerRowPrint"] = 1;
$tdataTutors_a[".mainTableOwnerID"] = "";
$tdataTutors_a[".moveNext"] = 1;
$tdataTutors_a[".entityType"] = 0;

$tdataTutors_a[".strOriginalTableName"] = "Tutors_a";




$tdataTutors_a[".showAddInPopup"] = false;

$tdataTutors_a[".showEditInPopup"] = false;

$tdataTutors_a[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTutors_a[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTutors_a[".fieldsForRegister"] = array();

$tdataTutors_a[".listAjax"] = false;

	$tdataTutors_a[".audit"] = false;

	$tdataTutors_a[".locking"] = false;

$tdataTutors_a[".edit"] = true;
$tdataTutors_a[".afterEditAction"] = 1;
$tdataTutors_a[".closePopupAfterEdit"] = 1;
$tdataTutors_a[".afterEditActionDetTable"] = "";

$tdataTutors_a[".add"] = true;
$tdataTutors_a[".afterAddAction"] = 1;
$tdataTutors_a[".closePopupAfterAdd"] = 1;
$tdataTutors_a[".afterAddActionDetTable"] = "";

$tdataTutors_a[".list"] = true;

$tdataTutors_a[".inlineEdit"] = true;
$tdataTutors_a[".inlineAdd"] = true;
$tdataTutors_a[".view"] = true;

$tdataTutors_a[".import"] = true;

$tdataTutors_a[".exportTo"] = true;

$tdataTutors_a[".printFriendly"] = true;

$tdataTutors_a[".delete"] = true;

$tdataTutors_a[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataTutors_a[".searchSaving"] = false;
//

$tdataTutors_a[".showSearchPanel"] = true;
		$tdataTutors_a[".flexibleSearch"] = true;

if (isMobile())
	$tdataTutors_a[".isUseAjaxSuggest"] = false;
else
	$tdataTutors_a[".isUseAjaxSuggest"] = true;

$tdataTutors_a[".rowHighlite"] = true;



$tdataTutors_a[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTutors_a[".isUseTimeForSearch"] = false;





$tdataTutors_a[".allSearchFields"] = array();
$tdataTutors_a[".filterFields"] = array();
$tdataTutors_a[".requiredSearchFields"] = array();

$tdataTutors_a[".allSearchFields"][] = "tID";
	$tdataTutors_a[".allSearchFields"][] = "cID";
	

$tdataTutors_a[".googleLikeFields"] = array();
$tdataTutors_a[".googleLikeFields"][] = "tID";
$tdataTutors_a[".googleLikeFields"][] = "cID";


$tdataTutors_a[".advSearchFields"] = array();
$tdataTutors_a[".advSearchFields"][] = "tID";
$tdataTutors_a[".advSearchFields"][] = "cID";

$tdataTutors_a[".tableType"] = "list";

$tdataTutors_a[".printerPageOrientation"] = 0;
$tdataTutors_a[".nPrinterPageScale"] = 100;

$tdataTutors_a[".nPrinterSplitRecords"] = 40;

$tdataTutors_a[".nPrinterPDFSplitRecords"] = 40;



$tdataTutors_a[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataTutors_a[".pageSize"] = 20;

$tdataTutors_a[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTutors_a[".strOrderBy"] = $tstrOrderBy;

$tdataTutors_a[".orderindexes"] = array();

$tdataTutors_a[".sqlHead"] = "SELECT tID,  	cID";
$tdataTutors_a[".sqlFrom"] = "FROM Tutors_a";
$tdataTutors_a[".sqlWhereExpr"] = "";
$tdataTutors_a[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTutors_a[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTutors_a[".arrGroupsPerPage"] = $arrGPP;

$tdataTutors_a[".highlightSearchResults"] = true;

$tableKeysTutors_a = array();
$tableKeysTutors_a[] = "tID";
$tdataTutors_a[".Keys"] = $tableKeysTutors_a;

$tdataTutors_a[".listFields"] = array();
$tdataTutors_a[".listFields"][] = "tID";
$tdataTutors_a[".listFields"][] = "cID";

$tdataTutors_a[".hideMobileList"] = array();


$tdataTutors_a[".viewFields"] = array();
$tdataTutors_a[".viewFields"][] = "tID";
$tdataTutors_a[".viewFields"][] = "cID";

$tdataTutors_a[".addFields"] = array();
$tdataTutors_a[".addFields"][] = "tID";
$tdataTutors_a[".addFields"][] = "cID";

$tdataTutors_a[".masterListFields"] = array();
$tdataTutors_a[".masterListFields"][] = "tID";
$tdataTutors_a[".masterListFields"][] = "cID";

$tdataTutors_a[".inlineAddFields"] = array();
$tdataTutors_a[".inlineAddFields"][] = "tID";
$tdataTutors_a[".inlineAddFields"][] = "cID";

$tdataTutors_a[".editFields"] = array();
$tdataTutors_a[".editFields"][] = "tID";
$tdataTutors_a[".editFields"][] = "cID";

$tdataTutors_a[".inlineEditFields"] = array();
$tdataTutors_a[".inlineEditFields"][] = "tID";
$tdataTutors_a[".inlineEditFields"][] = "cID";

$tdataTutors_a[".exportFields"] = array();
$tdataTutors_a[".exportFields"][] = "tID";
$tdataTutors_a[".exportFields"][] = "cID";

$tdataTutors_a[".importFields"] = array();
$tdataTutors_a[".importFields"][] = "tID";
$tdataTutors_a[".importFields"][] = "cID";

$tdataTutors_a[".printFields"] = array();
$tdataTutors_a[".printFields"][] = "tID";
$tdataTutors_a[".printFields"][] = "cID";

//	tID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tID";
	$fdata["GoodName"] = "tID";
	$fdata["ownerTable"] = "Tutors_a";
	$fdata["Label"] = GetFieldLabel("Tutors_a","tID");
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




	$tdataTutors_a["tID"] = $fdata;
//	cID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cID";
	$fdata["GoodName"] = "cID";
	$fdata["ownerTable"] = "Tutors_a";
	$fdata["Label"] = GetFieldLabel("Tutors_a","cID");
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




	$tdataTutors_a["cID"] = $fdata;


$tables_data["Tutors_a"]=&$tdataTutors_a;
$field_labels["Tutors_a"] = &$fieldLabelsTutors_a;
$fieldToolTips["Tutors_a"] = &$fieldToolTipsTutors_a;
$page_titles["Tutors_a"] = &$pageTitlesTutors_a;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Tutors_a"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Tutors_a"] = array();


	
				$strOriginalDetailsTable="Tutor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Tutor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Tutor";
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
					$masterTablesData["Tutors_a"][0] = $masterParams;
				$masterTablesData["Tutors_a"][0]["masterKeys"] = array();
	$masterTablesData["Tutors_a"][0]["masterKeys"][]="tID";
				$masterTablesData["Tutors_a"][0]["detailKeys"] = array();
	$masterTablesData["Tutors_a"][0]["detailKeys"][]="tID";
		
	
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
					$masterTablesData["Tutors_a"][1] = $masterParams;
				$masterTablesData["Tutors_a"][1]["masterKeys"] = array();
	$masterTablesData["Tutors_a"][1]["masterKeys"][]="cID";
				$masterTablesData["Tutors_a"][1]["detailKeys"] = array();
	$masterTablesData["Tutors_a"][1]["detailKeys"][]="cID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Tutors_a()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tID,  	cID";
$proto0["m_strFrom"] = "FROM Tutors_a";
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
	"m_strTable" => "Tutors_a",
	"m_srcTableName" => "Tutors_a"
));

$proto5["m_sql"] = "tID";
$proto5["m_srcTableName"] = "Tutors_a";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cID",
	"m_strTable" => "Tutors_a",
	"m_srcTableName" => "Tutors_a"
));

$proto7["m_sql"] = "cID";
$proto7["m_srcTableName"] = "Tutors_a";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "Tutors_a";
$proto10["m_srcTableName"] = "Tutors_a";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "tID";
$proto10["m_columns"][] = "cID";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "Tutors_a";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "Tutors_a";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Tutors_a";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Tutors_a = createSqlQuery_Tutors_a();



		

$tdataTutors_a[".sqlquery"] = $queryData_Tutors_a;

$tableEvents["Tutors_a"] = new eventsBase;
$tdataTutors_a[".hasEvents"] = false;

?>