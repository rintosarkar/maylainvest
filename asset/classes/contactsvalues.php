<?php

if(isset($_POST['submitval'])){
$mailto=$_POST['mailto'];
$username=$_POST['username'];
$useremail=$_POST['useremail'];
$userphone=$_POST['userphone'];
$usersubject=$_POST['usersubject'];
$usermessage=$_POST['usermessage'];

if($username==""){
	echo "Please provide User Name first!";
}
elseif ($useremail=="") {
	echo "Please provide User Email first!";
}

elseif ($usersubject=="") {
	echo "Please provide User Subject first!";
}
elseif ($usermessage=="") {
	echo "Please provide User Message first!";
}

else
{


$to = $mailto;
$subject = $usersubject;
$message = $username."\r\n".$useremail."\r\n".$userphone."\r\n".$usersubject."\r\n".$usermessage;
$headers = 'Fromhello: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$message ,$headers);
	echo "Your message has been sent successfully. We will come shortly";

	//echo $mailto . $username . $userphone . $usersubject .$usermessage;
}


}
?>