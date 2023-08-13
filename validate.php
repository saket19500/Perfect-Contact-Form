<?php
$valid=$fnameErr=$pNumberErr=$emailErr=$subErr=$msgErr='';
$set_name=$set_phoneNumber=$set_email=$set_subject=$set_message='';  
extract($_POST);
if(isset($_POST['submit']))
{
    $validName="/^[a-zA-Z ]*$/";
   $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
   $validPhonenumber="/^[0-9]*$/";
   if(empty($name)){
    $fnameErr="Name is Required"; 
 }
 else if (!preg_match($validName,$name)) {
    $fnameErr="Digits are not allowed";
 }else{
    $fnameErr=true;
}
if(empty($phoneNumber)){
    $fnameErr="First Name is Required"; 
 }
 else if (!preg_match($validPhonenumber,$phoneNumber)) {
    $pNumberErr="Only digits are allowed";
 }
 else if (strlen ($phoneNumber) != 10) {  
   $pNumberErr = "Phone no must contain 10 digits.";
 }
 else{
    $pNumberErr=true;
 }
 if(empty($email)){
    $emailErr="Email is Required"; 
  }
  else if (!preg_match($validEmail,$email)) {
    $emailErr="Invalid Email Address";
  }
  else{
    $emailErr=true;
  }
  if(empty($subject)){
    $subErr="Subject is Required"; 
 }
 if(empty($message)){
    $msgErr="Message is Required"; 
 }
 if($fnameErr==1 && $pNumberErr==1 && $emailErr==1 && $subErr==1 && $msgErr==1)
{
   $valid="All fields are validated successfully";
$name= legal_input($name);
$phoneNumber=legal_input($phoneNumber);
$email=legal_input($email);
$subject=legal_input($subject);
$message=legal_input($message);
}
else {
   $set_name=$name;
   $set_phoneNumber=$phoneNumber;
   $set_email=$email;
   $set_subject=$subject;
   $set_message=$message;
}
}
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
?>