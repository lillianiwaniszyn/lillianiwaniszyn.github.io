<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCourse = array();
	$tdataCourse[".truncateText"] = true;
	$tdataCourse[".NumberOfChars"] = 80;
	$tdataCourse[".ShortName"] = "Course";
	$tdataCourse[".OwnerID"] = "";
	$tdataCourse[".OriginalTable"] = "Course";

//	field labels
$fieldLabelsCourse = array();
$fieldToolTipsCourse = array();
$pageTitlesCourse = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCourse["English"] = array();
	$fieldToolTipsCourse["English"] = array();
	$pageTitlesCourse["English"] = array();
	$fieldLabelsCourse["English"]["cID"] = "C ID";
	$fieldToolTipsCourse["English"]["cID"] = "";
	$fieldLabelsCourse["English"]["Name"] = "Name";
	$fieldToolTipsCourse["English"]["Name"] = "";
	$fieldLabelsCourse["English"]["SKU"] = "SKU";
	$fieldToolTipsCourse["English"]["SKU"] = "";
	$fieldLabelsCourse["English"]["Price"] = "Price";
	$fieldToolTipsCourse["English"]["Price"] = "";
	$fieldLabelsCourse["English"]["Category"] = "Category";
	$fieldToolTipsCourse["English"]["Category"] = "";
	if (count($fieldToolTipsCourse["English"]))
		$tdataCourse[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCourse[""] = array();
	$fieldToolTipsCourse[""] = array();
	$pageTitlesCourse[""] = array();
	if (count($fieldToolTipsCourse[""]))
		$tdataCourse[".isUseToolTips"] = true;
}


	$tdataCourse[".NCSearch"] = true;



$tdataCourse[".shortTableName"] = "Course";
$tdataCourse[".nSecOptions"] = 0;
$tdataCourse[".recsPerRowList"] = 1;
$tdataCourse[".recsPerRowPrint"] = 1;
$tdataCourse[".mainTableOwnerID"] = "";
$tdataCourse[".moveNext"] = 1;
$tdataCourse[".entityType"] = 0;

$tdataCourse[".strOriginalTableName"] = "Course";




$tdataCourse[".showAddInPopup"] = false;

$tdataCourse[".showEditInPopup"] = false;

$tdataCourse[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCourse[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCourse[".fieldsForRegister"] = array();

$tdataCourse[".listAjax"] = false;

	$tdataCourse[".audit"] = false;

	$tdataCourse[".locking"] = false;

$tdataCourse[".edit"] = true;
$tdataCourse[".afterEditAction"] = 1;
$tdataCourse[".closePopupAfterEdit"] = 1;
$tdataCourse[".afterEditActionDetTable"] = "";

$tdataCourse[".add"] = true;
$tdataCourse[".afterAddAction"] = 1;
$tdataCourse[".closePopupAfterAdd"] = 1;
$tdataCourse[".afterAddActionDetTable"] = "";

$tdataCourse[".list"] = true;

$tdataCourse[".inlineEdit"] = true;
$tdataCourse[".inlineAdd"] = true;
$tdataCourse[".view"] = true;

$tdataCourse[".import"] = true;

$tdataCourse[".exportTo"] = true;

$tdataCourse[".printFriendly"] = true;

$tdataCourse[".delete"] = true;

$tdataCourse[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataCourse[".searchSaving"] = false;
//

$tdataCourse[".showSearchPanel"] = true;
		$tdataCourse[".flexibleSearch"] = true;

if (isMobile())
	$tdataCourse[".isUseAjaxSuggest"] = false;
else
	$tdataCourse[".isUseAjaxSuggest"] = true;

$tdataCourse[".rowHighlite"] = true;



$tdataCourse[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCourse[".isUseTimeForSearch"] = false;





$tdataCourse[".allSearchFields"] = array();
$tdataCourse[".filterFields"] = array();
$tdataCourse[".requiredSearchFields"] = array();

$tdataCourse[".allSearchFields"][] = "cID";
	$tdataCourse[".allSearchFields"][] = "Name";
	$tdataCourse[".allSearchFields"][] = "SKU";
	$tdataCourse[".allSearchFields"][] = "Price";
	$tdataCourse[".allSearchFields"][] = "Category";
	

$tdataCourse[".googleLikeFields"] = array();
$tdataCourse[".googleLikeFields"][] = "cID";
$tdataCourse[".googleLikeFields"][] = "Name";
$tdataCourse[".googleLikeFields"][] = "SKU";
$tdataCourse[".googleLikeFields"][] = "Price";
$tdataCourse[".googleLikeFields"][] = "Category";


$tdataCourse[".advSearchFields"] = array();
$tdataCourse[".advSearchFields"][] = "cID";
$tdataCourse[".advSearchFields"][] = "Name";
$tdataCourse[".advSearchFields"][] = "SKU";
$tdataCourse[".advSearchFields"][] = "Price";
$tdataCourse[".advSearchFields"][] = "Category";

$tdataCourse[".tableType"] = "list";

$tdataCourse[".printerPageOrientation"] = 0;
$tdataCourse[".nPrinterPageScale"] = 100;

$tdataCourse[".nPrinterSplitRecords"] = 40;

$tdataCourse[".nPrinterPDFSplitRecords"] = 40;



$tdataCourse[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataCourse[".pageSize"] = 20;

$tdataCourse[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCourse[".strOrderBy"] = $tstrOrderBy;

$tdataCourse[".orderindexes"] = array();

$tdataCourse[".sqlHead"] = "SELECT cID,  	Name,  	SKU,  	Price,  	Category";
$tdataCourse[".sqlFrom"] = "FROM Course";
$tdataCourse[".sqlWhereExpr"] = "";
$tdataCourse[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCourse[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCourse[".arrGroupsPerPage"] = $arrGPP;

$tdataCourse[".highlightSearchResults"] = true;

$tableKeysCourse = array();
$tableKeysCourse[] = "cID";
$tdataCourse[".Keys"] = $tableKeysCourse;

$tdataCourse[".listFields"] = array();
$tdataCourse[".listFields"][] = "cID";
$tdataCourse[".listFields"][] = "Name";
$tdataCourse[".listFields"][] = "SKU";
$tdataCourse[".listFields"][] = "Price";
$tdataCourse[".listFields"][] = "Category";

$tdataCourse[".hideMobileList"] = array();


$tdataCourse[".viewFields"] = array();
$tdataCourse[".viewFields"][] = "cID";
$tdataCourse[".viewFields"][] = "Name";
$tdataCourse[".viewFields"][] = "SKU";
$tdataCourse[".viewFields"][] = "Price";
$tdataCourse[".viewFields"][] = "Category";

$tdataCourse[".addFields"] = array();
$tdataCourse[".addFields"][] = "Name";
$tdataCourse[".addFields"][] = "SKU";
$tdataCourse[".addFields"][] = "Price";
$tdataCourse[".addFields"][] = "Category";

$tdataCourse[".masterListFields"] = array();
$tdataCourse[".masterListFields"][] = "cID";
$tdataCourse[".masterListFields"][] = "Name";
$tdataCourse[".masterListFields"][] = "SKU";
$tdataCourse[".masterListFields"][] = "Price";
$tdataCourse[".masterListFields"][] = "Category";

$tdataCourse[".inlineAddFields"] = array();
$tdataCourse[".inlineAddFields"][] = "Name";
$tdataCourse[".inlineAddFields"][] = "SKU";
$tdataCourse[".inlineAddFields"][] = "Price";
$tdataCourse[".inlineAddFields"][] = "Category";

$tdataCourse[".editFields"] = array();
$tdataCourse[".editFields"][] = "Name";
$tdataCourse[".editFields"][] = "SKU";
$tdataCourse[".editFields"][] = "Price";
$tdataCourse[".editFields"][] = "Category";

$tdataCourse[".inlineEditFields"] = array();
$tdataCourse[".inlineEditFields"][] = "Name";
$tdataCourse[".inlineEditFields"][] = "SKU";
$tdataCourse[".inlineEditFields"][] = "Price";
$tdataCourse[".inlineEditFields"][] = "Category";

$tdataCourse[".exportFields"] = array();
$tdataCourse[".exportFields"][] = "cID";
$tdataCourse[".exportFields"][] = "Name";
$tdataCourse[".exportFields"][] = "SKU";
$tdataCourse[".exportFields"][] = "Price";
$tdataCourse[".exportFields"][] = "Category";

$tdataCourse[".importFields"] = array();
$tdataCourse[".importFields"][] = "cID";
$tdataCourse[".importFields"][] = "Name";
$tdataCourse[".importFields"][] = "SKU";
$tdataCourse[".importFields"][] = "Price";
$tdataCourse[".importFields"][] = "Category";

$tdataCourse[".printFields"] = array();
$tdataCourse[".printFields"][] = "cID";
$tdataCourse[".printFields"][] = "Name";
$tdataCourse[".printFields"][] = "SKU";
$tdataCourse[".printFields"][] = "Price";
$tdataCourse[".printFields"][] = "Category";

//	cID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cID";
	$fdata["GoodName"] = "cID";
	$fdata["ownerTable"] = "Course";
	$fdata["Label"] = GetFieldLabel("Course","cID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
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




	$tdataCourse["cID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "Course";
	$fdata["Label"] = GetFieldLabel("Course","Name");
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

		$fdata["strField"] = "Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
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




	$tdataCourse["Name"] = $fdata;
//	SKU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SKU";
	$fdata["GoodName"] = "SKU";
	$fdata["ownerTable"] = "Course";
	$fdata["Label"] = GetFieldLabel("Course","SKU");
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

		$fdata["strField"] = "SKU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SKU";

	
	
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




	$tdataCourse["SKU"] = $fdata;
//	Price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Price";
	$fdata["GoodName"] = "Price";
	$fdata["ownerTable"] = "Course";
	$fdata["Label"] = GetFieldLabel("Course","Price");
	$fdata["FieldType"] = 6;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Price";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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




	$tdataCourse["Price"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "Course";
	$fdata["Label"] = GetFieldLabel("Course","Category");
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

		$fdata["strField"] = "Category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Category";

	
	
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




	$tdataCourse["Category"] = $fdata;


$tables_data["Course"]=&$tdataCourse;
$field_labels["Course"] = &$fieldLabelsCourse;
$fieldToolTips["Course"] = &$fieldToolTipsCourse;
$page_titles["Course"] = &$pageTitlesCourse;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Course"] = array();
//	Is_enrolled
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Is_enrolled";
		$detailsParam["dOriginalTable"] = "Is_enrolled";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Is_enrolled";
	$detailsParam["dCaptionTable"] = GetTableCaption("Is_enrolled");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["Course"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Course"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Course"][$dIndex]["masterKeys"][]="cID";

				$detailsTablesData["Course"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Course"][$dIndex]["detailKeys"][]="cID";
//	Module
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Module";
		$detailsParam["dOriginalTable"] = "Module";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Module";
	$detailsParam["dCaptionTable"] = GetTableCaption("Module");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["Course"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Course"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Course"][$dIndex]["masterKeys"][]="cID";

				$detailsTablesData["Course"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Course"][$dIndex]["detailKeys"][]="cID";
//	Tutor
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Tutor";
		$detailsParam["dOriginalTable"] = "Tutor";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Tutor";
	$detailsParam["dCaptionTable"] = GetTableCaption("Tutor");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["Course"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Course"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Course"][$dIndex]["masterKeys"][]="cID";

				$detailsTablesData["Course"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Course"][$dIndex]["detailKeys"][]="cID";
//	Includes
	
	

		$dIndex = 3;
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
		
	$detailsTablesData["Course"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Course"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Course"][$dIndex]["masterKeys"][]="cID";

				$detailsTablesData["Course"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Course"][$dIndex]["detailKeys"][]="cID";
//	Tutors_a
	
	

		$dIndex = 4;
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
		
	$detailsTablesData["Course"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Course"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Course"][$dIndex]["masterKeys"][]="cID";

				$detailsTablesData["Course"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Course"][$dIndex]["detailKeys"][]="cID";

// tables which are master tables for current table (detail)
$masterTablesData["Course"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Course()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cID,  	Name,  	SKU,  	Price,  	Category";
$proto0["m_strFrom"] = "FROM Course";
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
	"m_strName" => "cID",
	"m_strTable" => "Course",
	"m_srcTableName" => "Course"
));

$proto5["m_sql"] = "cID";
$proto5["m_srcTableName"] = "Course";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "Course",
	"m_srcTableName" => "Course"
));

$proto7["m_sql"] = "Name";
$proto7["m_srcTableName"] = "Course";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "SKU",
	"m_strTable" => "Course",
	"m_srcTableName" => "Course"
));

$proto9["m_sql"] = "SKU";
$proto9["m_srcTableName"] = "Course";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Price",
	"m_strTable" => "Course",
	"m_srcTableName" => "Course"
));

$proto11["m_sql"] = "Price";
$proto11["m_srcTableName"] = "Course";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "Course",
	"m_srcTableName" => "Course"
));

$proto13["m_sql"] = "Category";
$proto13["m_srcTableName"] = "Course";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "Course";
$proto16["m_srcTableName"] = "Course";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "cID";
$proto16["m_columns"][] = "Name";
$proto16["m_columns"][] = "SKU";
$proto16["m_columns"][] = "Price";
$proto16["m_columns"][] = "Category";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "Course";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "Course";
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
$proto0["m_srcTableName"]="Course";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Course = createSqlQuery_Course();



					

$tdataCourse[".sqlquery"] = $queryData_Course;

$tableEvents["Course"] = new eventsBase;
$tdataCourse[".hasEvents"] = false;

?>