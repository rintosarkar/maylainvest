<?php

require "../common/config.php";

if(isset($_POST['catid'])){
	$catId=$_POST['catid'];
	//echo $catId;
	if ($db->errno){
		printf("Unalbe to connect to the db. %s", $db->errno);
		exit();
	};
$returnString="";

	$subCatSelQuery="select * from dollar where usDollar='$catId'";
	//echo $subCatSelQuery;
	//exit;
	$result=$db->query($subCatSelQuery);
	//echo $db -> affected_rows;
	if($result->num_rows > 0){
		while (list($id, $usDollar, $dEn,$dFr,$dSp,$dDe,$dPo)=$result->fetch_row()){
			$returnString .= "<option value=" .$dDe.">".$dDe."</option>";
			
		}
	}
	else{
		$returnString .="<option value='-1'>Keine Unterkategorie verfügbar</option>";		
	}
	//else echo "ERROR: cannot delete record!!!";
	// printf("%d selected row is deleted. ID Number: %s", $db->affected_rows, $catDelete);
	$result->free();
	$db->close();
	echo $returnString;
}