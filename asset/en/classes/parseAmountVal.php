<?php

require "../../common/config.php";

if(isset($_POST['amountVal'])){
	$amountVal=$_POST['amountVal'];
	echo $amountVal;
	if ($db->errno){
		printf("Unalbe to connect to the db. %s", $db->errno);
		exit();
	};
$returnString="";

	$subCatSelQuery="select * from dollar where usDollar='$amountVal'";
	//echo $subCatSelQuery;
	//exit;
	$result=$db->query($subCatSelQuery);
	//echo $db -> affected_rows;
	if($result->num_rows > 0){
		while (list($id, $usDollar, $dEn,$dFr,$dSp,$dDe,$dPo)=$result->fetch_row()){
			$returnString .= "<option value=" .$dEn.">".$dEn."</option>";
			
		}
	}
	else{
		$returnString .="<option value='-1'>No subcategory available</option>";		
	}
	//else echo "ERROR: cannot delete record!!!";
	// printf("%d selected row is deleted. ID Number: %s", $db->affected_rows, $catDelete);
	$result->free();
	$db->close();
	echo $returnString;
}