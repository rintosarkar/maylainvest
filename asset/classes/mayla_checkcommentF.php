<?php
include'../common/config.php';

if(isset($_POST['submitval'])){

$uname=$_POST['uname'];
$ucomment=$_POST['ucomment'];

//echo $uname;
//echo $ucomment;

if($uname==""){
	echo "Se il vous plaît fournir votre nom d'abord !!";
}elseif ($ucomment=="") {

	echo "Se il vous plaît fournir votre premier Suggestion !!";
}else{
	
	$to = "applications@maylainvest.com";
$subject = 'Suggestion';
$message = $uname."\r\n".$ucomment;
$headers = 'Frohellom: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$message ,$headers);
	echo "Merci d'envoyer votre suggestion.";
	};
	



// $com_insert_query="INSERT INTO `maylainvest`.`comment` (`uid`, `uname`, `ucomment`, `created`) VALUES (NULL, '$uname', '$ucomment', CURRENT_TIMESTAMP)";
// $result=$db->query($com_insert_query);
// if($result)
// {echo "Successfully Commenteed";}
// else{
// echo "W";}


};

?>