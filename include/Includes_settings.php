<?php
require_once(getabspath("classes/cipherer.php"));




$tdataIncludes = array();
	$tdataIncludes[".truncateText"] = true;
	$tdataIncludes[".NumberOfChars"] = 80;
	$tdataIncludes[".ShortName"] = "Includes";
	$tdataIncludes[".OwnerID"] = "";
	$tdataIncludes[".OriginalTable"] = "Includes";

//	field labels
$fieldLabelsIncludes = array();
$fieldToolTipsIncludes = array();
$pageTitlesIncludes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsIncludes["English"] = array();
	$fieldToolTipsIncludes["English"] = array();
	$pageTitlesIncludes["English"] = array();
	$fieldLabelsIncludes["English"]["Term"] = "Term";
	$fieldToolTipsIncludes["English"]["Term"] = "";
	$fieldLabelsIncludes["English"]["cID"] = "C ID";
	$fieldToolTipsIncludes["English"]["cID"] = "";
	if (count($fieldToolTipsIncludes["English"]))
		$tdataIncludes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsIncludes[""] = array();
	$fieldToolTipsIncludes[""] = array();
	$pageTitlesIncludes[""] = array();
	if (count($fieldToolTipsIncludes[""]))
		$tdataIncludes[".isUseToolTips"] = true;
}


	$tdataIncludes[".NCSearch"] = true;



$tdataIncludes[".shortTableName"] = "Includes";
$tdataIncludes[".nSecOptions"] = 0;
$tdataIncludes[".recsPerRowList"] = 1;
$tdataIncludes[".recsPerRowPrint"] = 1;
$tdataIncludes[".mainTableOwnerID"] = "";
$tdataIncludes[".moveNext"] = 1;
$tdataIncludes[".entityType"] = 0;

$tdataIncludes[".strOriginalTableName"] = "Includes";




$tdataIncludes[".showAddInPopup"] = false;

$tdataIncludes[".showEditInPopup"] = false;

$tdataIncludes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataIncludes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataIncludes[".fieldsForRegister"] = array();

$tdataIncludes[".listAjax"] = false;

	$tdataIncludes[".audit"] = false;

	$tdataIncludes[".locking"] = false;

$tdataIncludes[".edit"] = true;
$tdataIncludes[".afterEditAction"] = 1;
$tdataIncludes[".closePopupAfterEdit"] = 1;
$tdataIncludes[".afterEditActionDetTable"] = "";

$tdataIncludes[".add"] = true;
$tdataIncludes[".afterAddAction"] = 1;
$tdataIncludes[".closePopupAfterAdd"] = 1;
$tdataIncludes[".afterAddActionDetTable"] = "";

$tdataIncludes[".list"] = true;

$tdataIncludes[".inlineEdit"] = true;
$tdataIncludes[".inlineAdd"] = true;
$tdataIncludes[".view"] = true;

$tdataIncludes[".import"] = true;

$tdataIncludes[".exportTo"] = true;

$tdataIncludes[".printFriendly"] = true;

$tdataIncludes[".delete"] = true;

$tdataIncludes[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataIncludes[".searchSaving"] = false;
//

$tdataIncludes[".showSearchPanel"] = true;
		$tdataIncludes[".flexibleSearch"] = true;

if (isMobile())
	$tdataIncludes[".isUseAjaxSuggest"] = false;
else
	$tdataIncludes[".isUseAjaxSuggest"] = true;

$tdataIncludes[".rowHighlite"] = true;



$tdataIncludes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataIncludes[".isUseTimeForSearch"] = false;





$tdataIncludes[".allSearchFields"] = array();
$tdataIncludes[".filterFields"] = array();
$tdataIncludes[".requiredSearchFields"] = array();

$tdataIncludes[".allSearchFields"][] = "Term";
	$tdataIncludes[".allSearchFields"][] = "cID";
	

$tdataIncludes[".googleLikeFields"] = array();
$tdataIncludes[".googleLikeFields"][] = "Term";
$tdataIncludes[".googleLikeFields"][] = "cID";


$tdataIncludes[".advSearchFields"] = array();
$tdataIncludes[".advSearchFields"][] = "Term";
$tdataIncludes[".advSearchFields"][] = "cID";

$tdataIncludes[".tableType"] = "list";

$tdataIncludes[".printerPageOrientation"] = 0;
$tdataIncludes[".nPrinterPageScale"] = 100;

$tdataIncludes[".nPrinterSplitRecords"] = 40;

$tdataIncludes[".nPrinterPDFSplitRecords"] = 40;



$tdataIncludes[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataIncludes[".pageSize"] = 20;

$tdataIncludes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataIncludes[".strOrderBy"] = $tstrOrderBy;

$tdataIncludes[".orderindexes"] = array();

$tdataIncludes[".sqlHead"] = "SELECT Term,  	cID";
$tdataIncludes[".sqlFrom"] = "FROM Includes";
$tdataIncludes[".sqlWhereExpr"] = "";
$tdataIncludes[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataIncludes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataIncludes[".arrGroupsPerPage"] = $arrGPP;

$tdataIncludes[".highlightSearchResults"] = true;

$tableKeysIncludes = array();
$tableKeysIncludes[] = "cID";
$tdataIncludes[".Keys"] = $tableKeysIncludes;

$tdataIncludes[".listFields"] = array();
$tdataIncludes[".listFields"][] = "Term";
$tdataIncludes[".listFields"][] = "cID";

$tdataIncludes[".hideMobileList"] = array();


$tdataIncludes[".viewFields"] = array();
$tdataIncludes[".viewFields"][] = "Term";
$tdataIncludes[".viewFields"][] = "cID";

$tdataIncludes[".addFields"] = array();
$tdataIncludes[".addFields"][] = "Term";
$tdataIncludes[".addFields"][] = "cID";

$tdataIncludes[".masterListFields"] = array();
$tdataIncludes[".masterListFields"][] = "Term";
$tdataIncludes[".masterListFields"][] = "cID";

$tdataIncludes[".inlineAddFields"] = array();
$tdataIncludes[".inlineAddFields"][] = "Term";
$tdataIncludes[".inlineAddFields"][] = "cID";

$tdataIncludes[".editFields"] = array();
$tdataIncludes[".editFields"][] = "Term";
$tdataIncludes[".editFields"][] = "cID";

$tdataIncludes[".inlineEditFields"] = array();
$tdataIncludes[".inlineEditFields"][] = "Term";
$tdataIncludes[".inlineEditFields"][] = "cID";

$tdataIncludes[".exportFields"] = array();
$tdataIncludes[".exportFields"][] = "Term";
$tdataIncludes[".exportFields"][] = "cID";

$tdataIncludes[".importFields"] = array();
$tdataIncludes[".importFields"][] = "Term";
$tdataIncludes[".importFields"][] = "cID";

$tdataIncludes[".printFields"] = array();
$tdataIncludes[".printFields"][] = "Term";
$tdataIncludes[".printFields"][] = "cID";

//	Term
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Term";
	$fdata["GoodName"] = "Term";
	$fdata["ownerTable"] = "Includes";
	$fdata["Label"] = GetFieldLabel("Includes","Term");
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




	$tdataIncludes["Term"] = $fdata;
//	cID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cID";
	$fdata["GoodName"] = "cID";
	$fdata["ownerTable"] = "Includes";
	$fdata["Label"] = GetFieldLabel("Includes","cID");
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




	$tdataIncludes["cID"] = $fdata;


$tables_data["Includes"]=&$tdataIncludes;
$field_labels["Includes"] = &$fieldLabelsIncludes;
$fieldToolTips["Includes"] = &$fieldToolTipsIncludes;
$page_titles["Includes"] = &$pageTitlesIncludes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Includes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Includes"] = array();


	
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
					$masterTablesData["Includes"][0] = $masterParams;
				$masterTablesData["Includes"][0]["masterKeys"] = array();
	$masterTablesData["Includes"][0]["masterKeys"][]="cID";
				$masterTablesData["Includes"][0]["detailKeys"] = array();
	$masterTablesData["Includes"][0]["detailKeys"][]="cID";
		
	
				$strOriginalDetailsTable="Module";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Module";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Module";
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
					$masterTablesData["Includes"][1] = $masterParams;
				$masterTablesData["Includes"][1]["masterKeys"] = array();
	$masterTablesData["Includes"][1]["masterKeys"][]="Term";
				$masterTablesData["Includes"][1]["detailKeys"] = array();
	$masterTablesData["Includes"][1]["detailKeys"][]="Term";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Includes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Term,  	cID";
$proto0["m_strFrom"] = "FROM Includes";
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
	"m_strTable" => "Includes",
	"m_srcTableName" => "Includes"
));

$proto5["m_sql"] = "Term";
$proto5["m_srcTableName"] = "Includes";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cID",
	"m_strTable" => "Includes",
	"m_srcTableName" => "Includes"
));

$proto7["m_sql"] = "cID";
$proto7["m_srcTableName"] = "Includes";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "Includes";
$proto10["m_srcTableName"] = "Includes";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Term";
$proto10["m_columns"][] = "cID";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "Includes";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "Includes";
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
$proto0["m_srcTableName"]="Includes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Includes = createSqlQuery_Includes();



		

$tdataIncludes[".sqlquery"] = $queryData_Includes;

$tableEvents["Includes"] = new eventsBase;
$tdataIncludes[".hasEvents"] = false;

?>