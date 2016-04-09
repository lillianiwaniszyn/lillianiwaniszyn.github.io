<?php
require_once(getabspath("classes/cipherer.php"));




$tdataStudent = array();
	$tdataStudent[".truncateText"] = true;
	$tdataStudent[".NumberOfChars"] = 80;
	$tdataStudent[".ShortName"] = "Student";
	$tdataStudent[".OwnerID"] = "";
	$tdataStudent[".OriginalTable"] = "Student";

//	field labels
$fieldLabelsStudent = array();
$fieldToolTipsStudent = array();
$pageTitlesStudent = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsStudent["English"] = array();
	$fieldToolTipsStudent["English"] = array();
	$pageTitlesStudent["English"] = array();
	$fieldLabelsStudent["English"]["sID"] = "S ID";
	$fieldToolTipsStudent["English"]["sID"] = "";
	$fieldLabelsStudent["English"]["bDay"] = "B Day";
	$fieldToolTipsStudent["English"]["bDay"] = "";
	$fieldLabelsStudent["English"]["Gender"] = "Gender";
	$fieldToolTipsStudent["English"]["Gender"] = "";
	$fieldLabelsStudent["English"]["reg_date"] = "Reg Date";
	$fieldToolTipsStudent["English"]["reg_date"] = "";
	$fieldLabelsStudent["English"]["Country"] = "Country";
	$fieldToolTipsStudent["English"]["Country"] = "";
	$fieldLabelsStudent["English"]["fName"] = "F Name";
	$fieldToolTipsStudent["English"]["fName"] = "";
	$fieldLabelsStudent["English"]["mInit"] = "M Init";
	$fieldToolTipsStudent["English"]["mInit"] = "";
	$fieldLabelsStudent["English"]["lName"] = "L Name";
	$fieldToolTipsStudent["English"]["lName"] = "";
	$fieldLabelsStudent["English"]["eMail"] = "E Mail";
	$fieldToolTipsStudent["English"]["eMail"] = "";
	if (count($fieldToolTipsStudent["English"]))
		$tdataStudent[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsStudent[""] = array();
	$fieldToolTipsStudent[""] = array();
	$pageTitlesStudent[""] = array();
	$fieldLabelsStudent[""]["sID"] = "S ID";
	$fieldToolTipsStudent[""]["sID"] = "";
	$fieldLabelsStudent[""]["bDay"] = "B Day";
	$fieldToolTipsStudent[""]["bDay"] = "";
	$fieldLabelsStudent[""]["Gender"] = "Gender";
	$fieldToolTipsStudent[""]["Gender"] = "";
	$fieldLabelsStudent[""]["reg_date"] = "Reg Date";
	$fieldToolTipsStudent[""]["reg_date"] = "";
	$fieldLabelsStudent[""]["Country"] = "Country";
	$fieldToolTipsStudent[""]["Country"] = "";
	$fieldLabelsStudent[""]["fName"] = "F Name";
	$fieldToolTipsStudent[""]["fName"] = "";
	$fieldLabelsStudent[""]["mInit"] = "M Init";
	$fieldToolTipsStudent[""]["mInit"] = "";
	$fieldLabelsStudent[""]["lName"] = "L Name";
	$fieldToolTipsStudent[""]["lName"] = "";
	$fieldLabelsStudent[""]["eMail"] = "E Mail";
	$fieldToolTipsStudent[""]["eMail"] = "";
	if (count($fieldToolTipsStudent[""]))
		$tdataStudent[".isUseToolTips"] = true;
}


	$tdataStudent[".NCSearch"] = true;



$tdataStudent[".shortTableName"] = "Student";
$tdataStudent[".nSecOptions"] = 0;
$tdataStudent[".recsPerRowList"] = 1;
$tdataStudent[".recsPerRowPrint"] = 1;
$tdataStudent[".mainTableOwnerID"] = "";
$tdataStudent[".moveNext"] = 1;
$tdataStudent[".entityType"] = 0;

$tdataStudent[".strOriginalTableName"] = "Student";




$tdataStudent[".showAddInPopup"] = false;

$tdataStudent[".showEditInPopup"] = false;

$tdataStudent[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataStudent[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataStudent[".fieldsForRegister"] = array();

$tdataStudent[".listAjax"] = false;

	$tdataStudent[".audit"] = false;

	$tdataStudent[".locking"] = false;

$tdataStudent[".edit"] = true;
$tdataStudent[".afterEditAction"] = 1;
$tdataStudent[".closePopupAfterEdit"] = 1;
$tdataStudent[".afterEditActionDetTable"] = "";

$tdataStudent[".add"] = true;
$tdataStudent[".afterAddAction"] = 1;
$tdataStudent[".closePopupAfterAdd"] = 1;
$tdataStudent[".afterAddActionDetTable"] = "";

$tdataStudent[".list"] = true;

$tdataStudent[".view"] = true;




$tdataStudent[".delete"] = true;

$tdataStudent[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataStudent[".searchSaving"] = false;
//

$tdataStudent[".showSearchPanel"] = true;
		$tdataStudent[".flexibleSearch"] = true;

if (isMobile())
	$tdataStudent[".isUseAjaxSuggest"] = false;
else
	$tdataStudent[".isUseAjaxSuggest"] = true;

$tdataStudent[".rowHighlite"] = true;



$tdataStudent[".addPageEvents"] = false;

// use timepicker for search panel
$tdataStudent[".isUseTimeForSearch"] = false;





$tdataStudent[".allSearchFields"] = array();
$tdataStudent[".filterFields"] = array();
$tdataStudent[".requiredSearchFields"] = array();

$tdataStudent[".allSearchFields"][] = "sID";
	$tdataStudent[".allSearchFields"][] = "bDay";
	$tdataStudent[".allSearchFields"][] = "Gender";
	$tdataStudent[".allSearchFields"][] = "reg_date";
	$tdataStudent[".allSearchFields"][] = "Country";
	$tdataStudent[".allSearchFields"][] = "fName";
	$tdataStudent[".allSearchFields"][] = "mInit";
	$tdataStudent[".allSearchFields"][] = "lName";
	$tdataStudent[".allSearchFields"][] = "eMail";
	

$tdataStudent[".googleLikeFields"] = array();
$tdataStudent[".googleLikeFields"][] = "sID";
$tdataStudent[".googleLikeFields"][] = "bDay";
$tdataStudent[".googleLikeFields"][] = "Gender";
$tdataStudent[".googleLikeFields"][] = "reg_date";
$tdataStudent[".googleLikeFields"][] = "Country";
$tdataStudent[".googleLikeFields"][] = "fName";
$tdataStudent[".googleLikeFields"][] = "mInit";
$tdataStudent[".googleLikeFields"][] = "lName";
$tdataStudent[".googleLikeFields"][] = "eMail";


$tdataStudent[".advSearchFields"] = array();
$tdataStudent[".advSearchFields"][] = "sID";
$tdataStudent[".advSearchFields"][] = "bDay";
$tdataStudent[".advSearchFields"][] = "Gender";
$tdataStudent[".advSearchFields"][] = "reg_date";
$tdataStudent[".advSearchFields"][] = "Country";
$tdataStudent[".advSearchFields"][] = "fName";
$tdataStudent[".advSearchFields"][] = "mInit";
$tdataStudent[".advSearchFields"][] = "lName";
$tdataStudent[".advSearchFields"][] = "eMail";

$tdataStudent[".tableType"] = "list";

$tdataStudent[".printerPageOrientation"] = 0;
$tdataStudent[".nPrinterPageScale"] = 100;

$tdataStudent[".nPrinterSplitRecords"] = 40;

$tdataStudent[".nPrinterPDFSplitRecords"] = 40;



$tdataStudent[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataStudent[".pageSize"] = 20;

$tdataStudent[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataStudent[".strOrderBy"] = $tstrOrderBy;

$tdataStudent[".orderindexes"] = array();

$tdataStudent[".sqlHead"] = "SELECT sID,  	bDay,  	Gender,  	reg_date,  	Country,  	fName,  	mInit,  	lName,  	eMail";
$tdataStudent[".sqlFrom"] = "FROM Student";
$tdataStudent[".sqlWhereExpr"] = "";
$tdataStudent[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataStudent[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataStudent[".arrGroupsPerPage"] = $arrGPP;

$tdataStudent[".highlightSearchResults"] = true;

$tableKeysStudent = array();
$tableKeysStudent[] = "sID";
$tdataStudent[".Keys"] = $tableKeysStudent;

$tdataStudent[".listFields"] = array();
$tdataStudent[".listFields"][] = "sID";
$tdataStudent[".listFields"][] = "bDay";
$tdataStudent[".listFields"][] = "Gender";
$tdataStudent[".listFields"][] = "reg_date";
$tdataStudent[".listFields"][] = "Country";
$tdataStudent[".listFields"][] = "fName";
$tdataStudent[".listFields"][] = "mInit";
$tdataStudent[".listFields"][] = "lName";
$tdataStudent[".listFields"][] = "eMail";

$tdataStudent[".hideMobileList"] = array();


$tdataStudent[".viewFields"] = array();
$tdataStudent[".viewFields"][] = "sID";
$tdataStudent[".viewFields"][] = "bDay";
$tdataStudent[".viewFields"][] = "Gender";
$tdataStudent[".viewFields"][] = "reg_date";
$tdataStudent[".viewFields"][] = "Country";
$tdataStudent[".viewFields"][] = "fName";
$tdataStudent[".viewFields"][] = "mInit";
$tdataStudent[".viewFields"][] = "lName";
$tdataStudent[".viewFields"][] = "eMail";

$tdataStudent[".addFields"] = array();
$tdataStudent[".addFields"][] = "bDay";
$tdataStudent[".addFields"][] = "Gender";
$tdataStudent[".addFields"][] = "reg_date";
$tdataStudent[".addFields"][] = "Country";
$tdataStudent[".addFields"][] = "fName";
$tdataStudent[".addFields"][] = "mInit";
$tdataStudent[".addFields"][] = "lName";
$tdataStudent[".addFields"][] = "eMail";

$tdataStudent[".masterListFields"] = array();
$tdataStudent[".masterListFields"][] = "sID";
$tdataStudent[".masterListFields"][] = "bDay";
$tdataStudent[".masterListFields"][] = "Gender";
$tdataStudent[".masterListFields"][] = "reg_date";
$tdataStudent[".masterListFields"][] = "Country";
$tdataStudent[".masterListFields"][] = "fName";
$tdataStudent[".masterListFields"][] = "mInit";
$tdataStudent[".masterListFields"][] = "lName";
$tdataStudent[".masterListFields"][] = "eMail";

$tdataStudent[".inlineAddFields"] = array();

$tdataStudent[".editFields"] = array();
$tdataStudent[".editFields"][] = "bDay";
$tdataStudent[".editFields"][] = "Gender";
$tdataStudent[".editFields"][] = "reg_date";
$tdataStudent[".editFields"][] = "Country";
$tdataStudent[".editFields"][] = "fName";
$tdataStudent[".editFields"][] = "mInit";
$tdataStudent[".editFields"][] = "lName";
$tdataStudent[".editFields"][] = "eMail";

$tdataStudent[".inlineEditFields"] = array();

$tdataStudent[".exportFields"] = array();

$tdataStudent[".importFields"] = array();

$tdataStudent[".printFields"] = array();

//	sID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sID";
	$fdata["GoodName"] = "sID";
	$fdata["ownerTable"] = "Student";
	$fdata["Label"] = GetFieldLabel("Student","sID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sID";

	
	
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




	$tdataStudent["sID"] = $fdata;
//	bDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "bDay";
	$fdata["GoodName"] = "bDay";
	$fdata["ownerTable"] = "Student";
	$fdata["Label"] = GetFieldLabel("Student","bDay");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "bDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bDay";

	
	
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




	$tdataStudent["bDay"] = $fdata;
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "Student";
	$fdata["Label"] = GetFieldLabel("Student","Gender");
	$fdata["FieldType"] = 202;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gender";

	
	
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




	$tdataStudent["Gender"] = $fdata;
//	reg_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "reg_date";
	$fdata["GoodName"] = "reg_date";
	$fdata["ownerTable"] = "Student";
	$fdata["Label"] = GetFieldLabel("Student","reg_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "reg_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reg_date";

	
	
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




	$tdataStudent["reg_date"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "Student";
	$fdata["Label"] = GetFieldLabel("Student","Country");
	$fdata["FieldType"] = 202;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Country";

	
	
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




	$tdataStudent["Country"] = $fdata;
//	fName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fName";
	$fdata["GoodName"] = "fName";
	$fdata["ownerTable"] = "Student";
	$fdata["Label"] = GetFieldLabel("Student","fName");
	$fdata["FieldType"] = 202;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataStudent["fName"] = $fdata;
//	mInit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mInit";
	$fdata["GoodName"] = "mInit";
	$fdata["ownerTable"] = "Student";
	$fdata["Label"] = GetFieldLabel("Student","mInit");
	$fdata["FieldType"] = 202;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataStudent["mInit"] = $fdata;
//	lName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lName";
	$fdata["GoodName"] = "lName";
	$fdata["ownerTable"] = "Student";
	$fdata["Label"] = GetFieldLabel("Student","lName");
	$fdata["FieldType"] = 202;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataStudent["lName"] = $fdata;
//	eMail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "eMail";
	$fdata["GoodName"] = "eMail";
	$fdata["ownerTable"] = "Student";
	$fdata["Label"] = GetFieldLabel("Student","eMail");
	$fdata["FieldType"] = 202;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "eMail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eMail";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

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




	$tdataStudent["eMail"] = $fdata;


$tables_data["Student"]=&$tdataStudent;
$field_labels["Student"] = &$fieldLabelsStudent;
$fieldToolTips["Student"] = &$fieldToolTipsStudent;
$page_titles["Student"] = &$pageTitlesStudent;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Student"] = array();
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
		
	$detailsTablesData["Student"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Student"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Student"][$dIndex]["masterKeys"][]="sID";

				$detailsTablesData["Student"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Student"][$dIndex]["detailKeys"][]="uID";

// tables which are master tables for current table (detail)
$masterTablesData["Student"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Student()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sID,  	bDay,  	Gender,  	reg_date,  	Country,  	fName,  	mInit,  	lName,  	eMail";
$proto0["m_strFrom"] = "FROM Student";
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
	"m_strName" => "sID",
	"m_strTable" => "Student",
	"m_srcTableName" => "Student"
));

$proto5["m_sql"] = "sID";
$proto5["m_srcTableName"] = "Student";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "bDay",
	"m_strTable" => "Student",
	"m_srcTableName" => "Student"
));

$proto7["m_sql"] = "bDay";
$proto7["m_srcTableName"] = "Student";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "Student",
	"m_srcTableName" => "Student"
));

$proto9["m_sql"] = "Gender";
$proto9["m_srcTableName"] = "Student";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "reg_date",
	"m_strTable" => "Student",
	"m_srcTableName" => "Student"
));

$proto11["m_sql"] = "reg_date";
$proto11["m_srcTableName"] = "Student";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Country",
	"m_strTable" => "Student",
	"m_srcTableName" => "Student"
));

$proto13["m_sql"] = "Country";
$proto13["m_srcTableName"] = "Student";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "fName",
	"m_strTable" => "Student",
	"m_srcTableName" => "Student"
));

$proto15["m_sql"] = "fName";
$proto15["m_srcTableName"] = "Student";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "mInit",
	"m_strTable" => "Student",
	"m_srcTableName" => "Student"
));

$proto17["m_sql"] = "mInit";
$proto17["m_srcTableName"] = "Student";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "lName",
	"m_strTable" => "Student",
	"m_srcTableName" => "Student"
));

$proto19["m_sql"] = "lName";
$proto19["m_srcTableName"] = "Student";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "eMail",
	"m_strTable" => "Student",
	"m_srcTableName" => "Student"
));

$proto21["m_sql"] = "eMail";
$proto21["m_srcTableName"] = "Student";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "Student";
$proto24["m_srcTableName"] = "Student";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "sID";
$proto24["m_columns"][] = "bDay";
$proto24["m_columns"][] = "Gender";
$proto24["m_columns"][] = "reg_date";
$proto24["m_columns"][] = "Country";
$proto24["m_columns"][] = "fName";
$proto24["m_columns"][] = "mInit";
$proto24["m_columns"][] = "lName";
$proto24["m_columns"][] = "eMail";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "Student";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "Student";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Student";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Student = createSqlQuery_Student();



									

$tdataStudent[".sqlquery"] = $queryData_Student;

$tableEvents["Student"] = new eventsBase;
$tdataStudent[".hasEvents"] = false;

?>