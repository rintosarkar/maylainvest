<?php
$to = "applications@maylainvest.com";
$fromEmail = "abc@gmail.com";
$fromName = "Manirul";
$subject = "bangladesh";
$message = "Bangladesh";


 
/* GET File Variables */
$tmpName = $_FILES['attachment']['tmp_name'];
$fileType = $_FILES['attachment']['type'];
$fileName = $_FILES['attachment']['name'];
 
/* Start of headers */
$headers = "From: $fromName";
 
if (file_exists($tmpName)) {
  /* Reading file ('rb' = read binary)  */
  $file = fopen($tmpName,'rb');
  $data = fread($file,filesize($tmpName));
  fclose($file);
 
  /* a boundary string */
  $randomVal = md5(time());
  $mimeBoundary = "==Multipart_Boundary_x{$randomVal}x";
 
  /* Header for File Attachment */
  $headers .= "\nMIME-Version: 1.0\n";
  $headers .= "Content-Type: multipart/mixed;\n" ;
  $headers .= " boundary=\"{$mimeBoundary}\"";
 
  /* Multipart Boundary above message */
  $message = "This is a multi-part message in MIME format.\n\n" .
  "--{$mimeBoundary}\n" .
  "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
  "Content-Transfer-Encoding: 7bit\n\n" .
  $message . "\n\n";
 
  /* Encoding file data */
  $data = chunk_split(base64_encode($data));
 
  /* Adding attchment-file to message*/
  $message .= "--{$mimeBoundary}\n" .
  "Content-Type: {$fileType};\n" .
  " name=\"{$fileName}\"\n" .
  "Content-Transfer-Encoding: base64\n\n" .
  $data . "\n\n" .
  "--{$mimeBoundary}--\n";
}
 
 echo $message;
$flgchk = mail ("$to", "$subject", "$message", "$headers");
 
if($flgchk){
  echo "A email has been sent to: $to";
 }
else{
  echo "Error in Email sending";
}
?>
