<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ridwan@artoasglobal.com;
    $email_subject = "Message from Careerlift Contact Page";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";s
        echo $error."<br /><br />";
        echo "Please fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name]') ||
        !isset($_POST['email']) ||
        !isset($_POST['message']) ||) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name= $_POST['name']; // required
    $email_from = $_POST['email]; // required
    $message = $_POST['message]; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$Message)) {
    $error_message .= 'YThe Message you entered do not appear to be valid.<br />';
  }
 
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# business: http://ogp.me/ns/business#">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="generator" content="1&amp;1 MyWebsite"/>
        
    <link rel="dns-prefetch" href="http://cdn.website-start.de/"/>
    <link rel="dns-prefetch" href="http://mod02.website-start.de/"/>
    <link rel="dns-prefetch" href="https://cms02.website-start.de/"/>
    <link rel="shortcut icon" href="../s/misc/favicon7f15.png?1513181743"/>
        <title>Careerlift Recruitments</title>
    <style type="text/css">@media screen and (max-device-width: 1024px) {.diyw a.switchViewWeb {display: inline !important;}}</style>
    <style type="text/css">@media screen and (min-device-width: 1024px) {
            .mediumScreenDisabled { display:block }
            .smallScreenDisabled { display:block }
        }
        @media screen and (max-device-width: 1024px) { .mediumScreenDisabled { display:none } }
        @media screen and (max-device-width: 568px) { .smallScreenDisabled { display:none } }
                @media screen and (min-width: 1024px) {
            .mobilepreview .mediumScreenDisabled { display:block }
            .mobilepreview .smallScreenDisabled { display:block }
        }
        @media screen and (max-width: 1024px) { .mobilepreview .mediumScreenDisabled { display:none } }
        @media screen and (max-width: 568px) { .mobilepreview .smallScreenDisabled { display:none } }</style>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>

<meta name="format-detection" content="telephone=no"/>
        <meta name="description" content="In order to contact Careerlift Recruitments."/>
            <meta name="robots" content="index,follow"/>
        <link href="../../cdn.website-start.de/templates/2061/style0a11.css?1516792235750" rel="stylesheet" type="text/css"/>
    <link href="../s/style/themingd41d.css?" rel="stylesheet" type="text/css"/>
    <link href="../../cdn.website-start.de/app/cdn/min/group/web0a11.css?1516792235750" rel="stylesheet" type="text/css"/>
<link href="http://cdn.website-start.de/app/cdn/min/moduleserver/css/en_GB/common,form,twitter,facebook,shoppingbasket?1516792235750" rel="stylesheet" type="text/css"/>
    <link href="../../cdn.website-start.de/app/cdn/min/group/mobilenavigation0a11.css?1516792235750" rel="stylesheet" type="text/css"/>
    <link href="https://cms02.website-start.de/app/logstate2-css.php?site=710072458&amp;t=1527675781" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
    /* <![CDATA[ */
var stagingMode = '';
    /* ]]> */
</script>
<script src="https://cms02.website-start.de/app/logstate-js.php?site=710072458&amp;t=1527675781"></script>

    <link href="../../cdn.website-start.de/templates/2061/print0a11.css?1516792235750" rel="stylesheet" media="print" type="text/css"/>
    <script type="text/javascript">
    /* <![CDATA[ */
    var systemurl = 'https://cms02.website-start.de/';
    var webPath = '../index.html';
    var proxyName = '';
    var webServerName = 'www.careerliftrecruitments.co.uk';
    var sslServerUrl = 'https://sslrelay.com/www.careerliftrecruitments.co.uk';
    var nonSslServerUrl = '../index.html';
    var webserverProtocol = 'http://';
    var nghScriptsUrlPrefix = '//mod02.website-start.de';
    var sessionNamespace = 'DIY_SB';
    var jimdoData = {
        cdnUrl:  '//cdn.website-start.de/',
        messages: {
            lightBox: {
    image : 'Image',
    of: 'of'
}

        },
        isTrial: 0,
        pageId: 1885676    };
    var script_basisID = "710072458";

    diy = window.diy || {};
    diy.web = diy.web || {};

        diy.web.jsBaseUrl = "http://cdn.website-start.de/s/build/";

    diy.context = diy.context || {};
    diy.context.type = diy.context.type || 'web';
    /* ]]> */
</script>

<script type="text/javascript" src="../../cdn.website-start.de/app/cdn/min/group/web0a11.js?1516792235750" crossorigin="anonymous"></script><script type="text/javascript" src="../../cdn.website-start.de/s/build/web.bundle0a11.js?1516792235750" crossorigin="anonymous"></script><script type="text/javascript" src="../../cdn.website-start.de/app/cdn/min/group/mobilenavigation0a11.js?1516792235750" crossorigin="anonymous"></script><script src="http://cdn.website-start.de/app/cdn/min/moduleserver/js/en_GB/common,form,twitter,facebook,shoppingbasket?1516792235750"></script>
<script type="text/javascript" src="https://cdn.website-start.de/proxy/apps/static/resource/dependencies/"></script><script type="text/javascript">
                    if (typeof require !== 'undefined') {
                        require.config({
                            waitSeconds : 10,
                            baseUrl : 'https://cdn.website-start.de/proxy/apps/static/js/'
                        });
                    }
                </script><script type="text/javascript">if (window.jQuery) {window.jQuery_1and1 = window.jQuery;}</script>

<style type="text/css">
/*<![CDATA[*/

.leftrow > a[href*="print"] {
    display: none;
}

/*]]>*/
</style>

<script type="text/javascript">if (window.jQuery_1and1) {window.jQuery = window.jQuery_1and1;}</script>
<script type="text/javascript" src="../../cdn.website-start.de/app/cdn/min/group/pfcsupport0a11.js?1516792235750" crossorigin="anonymous"></script>    <meta property="og:type" content="business.business"/>
    <meta property="og:url" content="http://www.careerliftrecruitments.co.uk/contact-us/"/>
    <meta property="og:title" content="Careerlift Recruitments"/>
            <meta property="og:description" content="In order to contact Careerlift Recruitments."/>
                <meta property="og:image" content="http://www.careerliftrecruitments.co.uk/s/img/emotionheader.jpg"/>
        <meta property="business:contact_data:country_name" content="United Kingdom"/>
    
    
    
    
    
    
    
    
</head>


<body class="body   cc-pagemode-default diyfeSidebarLeft" data-pageid="1885676" id="page-1885676">
    
    <div class="diyw">
        <div class="diyweb">
	<div class="diyfeMobileNav">
		
<nav id="diyfeMobileNav" class="diyfeCA diyfeCA2" role="navigation">
    <a title="Expand/collapse navigation">Expand/collapse navigation</a>
    <ul class="mainNav1"><li class=" hasSubNavigation"><a data-page-id="1885664" href="../index.html" class=" level_1"><span>Home</span></a></li><li class=" hasSubNavigation"><a data-page-id="1885665" href="../employees/index.html" class=" level_1"><span>Employees</span></a><span class="diyfeDropDownSubOpener">&nbsp;</span><div class="diyfeDropDownSubList diyfeCA diyfeCA3"><ul class="mainNav2"><li class=" hasSubNavigation"><a data-page-id="1885666" href="../employees/jobs/index.html" class=" level_2"><span>Jobs</span></a><span class="diyfeDropDownSubOpener">&nbsp;</span><div class="diyfeDropDownSubList diyfeCA diyfeCA3"><ul class="mainNav3"><li class=" hasSubNavigation"><a data-page-id="1885667" href="../employees/jobs/permanent/index.html" class=" level_3"><span>Permanent</span></a></li><li class=" hasSubNavigation"><a data-page-id="1885668" href="../employees/jobs/temporary/index.html" class=" level_3"><span>Temporary</span></a></li></ul></div></li></ul></div></li><li class=" hasSubNavigation"><a data-page-id="1885670" href="../employers/index.html" class=" level_1"><span>Employers</span></a><span class="diyfeDropDownSubOpener">&nbsp;</span><div class="diyfeDropDownSubList diyfeCA diyfeCA3"><ul class="mainNav2"><li class=" hasSubNavigation"><a data-page-id="1885671" href="../employers/submit-vacancy/index.html" class=" level_2"><span>Submit vacancy</span></a></li><li class=" hasSubNavigation"><a data-page-id="1885672" href="../employers/fees/index.html" class=" level_2"><span>Fees</span></a></li></ul></div></li><li class=" hasSubNavigation"><a data-page-id="1885673" href="../about-us/index.html" class=" level_1"><span>About us</span></a></li><li class="current hasSubNavigation"><a data-page-id="1885676" href="index.html" class="current level_1"><span>Contact us</span></a></li></ul></nav>
	</div>
	<div class="diywebEmotionHeader">
		<div class="diywebLiveArea">
			<div class="diywebMainGutter">
				<div class="diyfeGE">
					<div class="diywebGutter">
						
<style type="text/css" media="all">
.diyw div#emotion-header {
        max-width: 920px;
        max-height: 240px;
                background: #a0a0a0;
    }

.diyw div#emotion-header-title-bg {
    left: 0%;
    top: 20%;
    width: 100%;
    height: 21.19%;

    background-color: #ffffff;
    opacity: 0.50;
    filter: alpha(opacity = 50);
    }
.diyw img#emotion-header-logo {
    left: 1.00%;
    top: 0.00%;
    background: transparent;
                border: 1px solid #CCCCCC;
        padding: 0px;
                display: none;
    }

.diyw div#emotion-header strong#emotion-header-title {
    left: 5%;
    top: 20%;
    color: #666666;
        font: normal normal 45px/120% Helvetica, 'Helvetica Neue', 'Trebuchet MS', sans-serif;
}

.diyw div#emotion-no-bg-container{
    max-height: 240px;
}

.diyw div#emotion-no-bg-container .emotion-no-bg-height {
    margin-top: 26.09%;
}
</style>
<div id="emotion-header" data-action="loadView" data-params="active" data-imagescount="1">
            <img src="../s/img/emotionheader874f.jpg?1398254538.920px.240px" id="emotion-header-img" alt="Careerlift Recruitments"/>
            
        <div id="ehSlideshowPlaceholder">
            <div id="ehSlideShow">
                <div class="slide-container">
                                        <div style="background-color: #a0a0a0">
                            <img src="../s/img/emotionheader874f.jpg?1398254538.920px.240px" alt="Careerlift Recruitments"/>
                        </div>
                                    </div>
            </div>
        </div>


        <script type="text/javascript">
        //<![CDATA[
                diy.module.emotionHeader.slideShow.init({ slides: [{"url":"http:\/\/www.careerliftrecruitments.co.uk\/s\/img\/emotionheader.jpg?1398254538.920px.240px","image_alt":"Careerlift Recruitments","bgColor":"#a0a0a0"}] });
        //]]>
        </script>

    
            
        
            
                  	<div id="emotion-header-title-bg"></div>
    
            <strong id="emotion-header-title" style="text-align: left">Careerlift Recruitments</strong>
                    <div class="notranslate">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="emotion-header-title-svg" viewBox="0 0 920 240" preserveAspectRatio="xMinYMin meet"><text style="font-family:Helvetica, 'Helvetica Neue', 'Trebuchet MS', sans-serif;font-size:45px;font-style:normal;font-weight:normal;fill:#666666;line-height:1.2em;"><tspan x="0" style="text-anchor: start" dy="0.95em">Careerlift Recruitments</tspan></text></svg>
            </div>
            
    
    <script type="text/javascript">
    //<![CDATA[
    (function ($) {
        function enableSvgTitle() {
                        var titleSvg = $('svg#emotion-header-title-svg'),
                titleHtml = $('#emotion-header-title'),
                emoWidthAbs = 920,
                emoHeightAbs = 240,
                offsetParent,
                titlePosition,
                svgBoxWidth,
                svgBoxHeight;

                        if (titleSvg.length && titleHtml.length) {
                offsetParent = titleHtml.offsetParent();
                titlePosition = titleHtml.position();
                svgBoxWidth = titleHtml.width();
                svgBoxHeight = titleHtml.height();

                                titleSvg.get(0).setAttribute('viewBox', '0 0 ' + svgBoxWidth + ' ' + svgBoxHeight);
                titleSvg.css({
                   left: Math.roundTo(100 * titlePosition.left / offsetParent.width(), 3) + '%',
                   top: Math.roundTo(100 * titlePosition.top / offsetParent.height(), 3) + '%',
                   width: Math.roundTo(100 * svgBoxWidth / emoWidthAbs, 3) + '%',
                   height: Math.roundTo(100 * svgBoxHeight / emoHeightAbs, 3) + '%'
                });

                titleHtml.css('visibility','hidden');
                titleSvg.css('visibility','visible');
            }
        }

        
            var posFunc = function($, overrideSize) {
                var elems = [], containerWidth, containerHeight;
                                    elems.push({
                        selector: '#emotion-header-title',
                        overrideSize: true,
                        horPos: 99,
                        vertPos: 0                    });
                    lastTitleWidth = $('#emotion-header-title').width();
                                                elems.push({
                    selector: '#emotion-header-title-bg',
                    horPos: 0,
                    vertPos: 0                });
                                
                containerWidth = parseInt('920');
                containerHeight = parseInt('240');

                for (var i = 0; i < elems.length; ++i) {
                    var el = elems[i],
                        $el = $(el.selector),
                        pos = {
                            left: el.horPos,
                            top: el.vertPos
                        };
                    if (!$el.length) continue;
                    var anchorPos = $el.anchorPosition();
                    anchorPos.$container = $('#emotion-header');

                    if (overrideSize === true || el.overrideSize === true) {
                        anchorPos.setContainerSize(containerWidth, containerHeight);
                    } else {
                        anchorPos.setContainerSize(null, null);
                    }

                    var pxPos = anchorPos.fromAnchorPosition(pos),
                        pcPos = anchorPos.toPercentPosition(pxPos);

                    var elPos = {};
                    if (!isNaN(parseFloat(pcPos.top)) && isFinite(pcPos.top)) {
                        elPos.top = pcPos.top + '%';
                    }
                    if (!isNaN(parseFloat(pcPos.left)) && isFinite(pcPos.left)) {
                        elPos.left = pcPos.left + '%';
                    }
                    $el.css(elPos);
                }

                // switch to svg title
                enableSvgTitle();
            };

                        var $emotionImg = jQuery('#emotion-header-img');
            if ($emotionImg.length > 0) {
                // first position the element based on stored size
                posFunc(jQuery, true);

                // trigger reposition using the real size when the element is loaded
                var ehLoadEvTriggered = false;
                $emotionImg.one('load', function(){
                    posFunc(jQuery);
                    ehLoadEvTriggered = true;
                                        diy.module.emotionHeader.slideShow.start();
                                    }).each(function() {
                                        if(this.complete || typeof this.complete === 'undefined') {
                        jQuery(this).load();
                    }
                });

                                noLoadTriggeredTimeoutId = setTimeout(function() {
                    if (!ehLoadEvTriggered) {
                        posFunc(jQuery);
                    }
                    window.clearTimeout(noLoadTriggeredTimeoutId)
                }, 5000);//after 5 seconds
            } else {
                jQuery(function(){
                    posFunc(jQuery);
                });
            }

                        if (jQuery.isBrowser && jQuery.isBrowser.ie8) {
                var longTitleRepositionCalls = 0;
                longTitleRepositionInterval = setInterval(function() {
                    if (lastTitleWidth > 0 && lastTitleWidth != jQuery('#emotion-header-title').width()) {
                        posFunc(jQuery);
                    }
                    longTitleRepositionCalls++;
                    // try this for 5 seconds
                    if (longTitleRepositionCalls === 5) {
                        window.clearInterval(longTitleRepositionInterval);
                    }
                }, 1000);//each 1 second
            }

            }(jQuery));
    //]]>
    </script>

    </div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="diywebNav diywebNavMain diywebNav1 diywebNavHorizontal">
		<div class="diywebLiveArea">
			<div class="diywebMainGutter">
				<div class="diyfeGE diyfeCA diyfeCA2">
					<div class="diywebGutter">
						<div class="webnavigation"><ul id="mainNav1" class="mainNav1"><li class="navTopItemGroup_1"><a data-page-id="1885664" href="../index.html" class="level_1"><span>Home</span></a></li><li class="navTopItemGroup_2"><a data-page-id="1885665" href="../employees/index.html" class="level_1"><span>Employees</span></a></li><li class="navTopItemGroup_3"><a data-page-id="1885670" href="../employers/index.html" class="level_1"><span>Employers</span></a></li><li class="navTopItemGroup_4"><a data-page-id="1885673" href="../about-us/index.html" class="level_1"><span>About us</span></a></li><li class="navTopItemGroup_5"><a data-page-id="1885676" href="index.html" class="current level_1"><span>Contact us</span></a></li></ul></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="diywebContent">
		<div class="diywebLiveArea">
			<div class="diywebMainGutter">
				<div class="diyfeGridGroup diyfeCA diyfeCA1">
					<div class="diywebMain diyfeGE">
						<div class="diywebGutter">
							
        <div id="content_area">
        	<div id="content_start"></div>
        	
        
        <div id="matrix_1983237" class="sortable-matrix" data-matrixId="1983237"><div class="n module-type-header diyfeLiveArea "> <h1><span class="diyfeDecoration">Contact us</span></h1> </div><div class="n module-type-text diyfeLiveArea "> <p>If you want to ask us about our service, please contact us here:</p>
<p> </p>
<p>Careerlift Recruitments</p>
<p><br/>
<a href="http://tel+442082653197/" target="_blank">+44 (2082) 653197</a></p>
<p> </p>
<p>E-mail: <a href="mailto:info@careerliftrecruitments.co.uk" target="_blank">info@careerliftrecruitments.co.uk</a></p>
<p> </p>
<p>OR</p>
<p> </p>
<p>Fill our Contact form below.</p> </div><div class="n module-type-hr diyfeLiveArea "> <div style="padding: 0px 0px">
    <div class="hr"></div>
</div>
 </div><div class="n module-type-header diyfeLiveArea "> <!--<h2><span class="diyfeDecoration">To contact us:</span></h2>--> </div><div class="n module-type-remoteModule-form diyfeLiveArea ">             <div id="modul_13868272_content"><div id="NGH13868272__main">
<!--<div class="form-success">
    <h1>
        Your form message has been successfully sent.    </h1>
    <div class="form-success-text">
        You have entered the following data:    </div>
    <br/>
    <div class="form-success-content">

    </div>
</div>-->

<!--<div class="form-headline">
    <strong>Contact form</strong>
    <br/><br/>
</div>
-->
<!--<div class="form-errors">
    <div class="form-errors-title">
        Please correct your input in the following fields:    </div>
    <ul> </ul>
</div>

<div class="form-error-send error">
    <div class="form-errors-title">
        Error while sending the form.  Please try again later.    </div>
</div>-->

<div style="background-color:#ffcc99;">
<div><h1>Thank you for contacting <strong>Career Lift Recruitments</strong>. We will be in touch with you very soon.</h1></div>
</div>
</div>
</div><script>/* <![CDATA[ */var __NGHModuleInstanceData13868272 = __NGHModuleInstanceData13868272 || {};__NGHModuleInstanceData13868272.server = 'http://mod02.website-start.de/';__NGHModuleInstanceData13868272.data_web = {};var m = mm[13868272] = new Form(13868272,116649,'form');if (m.initView_main != null) m.initView_main();/* ]]> */</script>
         </div></div>
        
        
        </div>
						</div>
					</div>
					<div class="diywebSecondary diyfeGE diyfeCA diyfeCA3">
						<div class="diywebNav diywebNav23 diywebHideOnSmall">
							<div class="diyfeGE">
								<div class="diywebGutter">
									<div class="webnavigation"></div>
								</div>
							</div>
						</div>
						<div class="diywebSidebar">
							<div class="diyfeGE">
								<div class="diywebGutter">
									<div id="matrix_1983223" class="sortable-matrix" data-matrixId="1983223"><div class="n module-type-header diyfeLiveArea "> <h2><span class="diyfeDecoration">Contact us</span></h2> </div><div class="n module-type-text diyfeLiveArea "> <p><strong>Careerlift Recruitments</strong></p>
<p><br/>
E-mail: <a href="mailto:info@careerliftrecruitments.co.uk" target="_blank">info@careerliftrecruitments.co.uk</a></p>
<p> </p>
<p>or use our <a href="index.html">contact form.</a></p> </div><div class="n module-type-hr diyfeLiveArea "> <div style="padding: 0px 0px">
    <div class="hr"></div>
</div>
 </div><div class="n module-type-remoteModule-twitter diyfeLiveArea ">             <div id="modul_13868183_content"><div id="NGH13868183_main">


    <div class="twitter-container">
                <div class="twitter-tweet-button">
        <p class="tweet-button-text">Tweet this page</p>
        <a href="http://www.twitter.com/share" data-url="http://www.careerliftrecruitments.co.uk/contact-us/" class="twitter-share-button" data-count="none" data-lang="en">Tweet</a>
    </div>
        </div>
</div>
</div><script>/* <![CDATA[ */var __NGHModuleInstanceData13868183 = __NGHModuleInstanceData13868183 || {};__NGHModuleInstanceData13868183.server = 'http://mod02.website-start.de/';__NGHModuleInstanceData13868183.data_web = {};var m = mm[13868183] = new Twitter(13868183,26462,'twitter');if (m.initView_main != null) m.initView_main();/* ]]> */</script>
         </div><div class="n module-type-remoteModule-facebook diyfeLiveArea ">             <div id="modul_13868184_content"><div id="NGH13868184_main">
    <div class="facebook-content">
        <a class="fb-share button" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.careerliftrecruitments.co.uk%2Fcontact-us%2F">
    <img src="../proxy/static/mod/facebook/files/img/facebook-share-icon.png"/> Share</a>    </div>
</div>
</div><script>/* <![CDATA[ */var __NGHModuleInstanceData13868184 = __NGHModuleInstanceData13868184 || {};__NGHModuleInstanceData13868184.server = 'http://mod02.website-start.de/';__NGHModuleInstanceData13868184.data_web = {};var m = mm[13868184] = new Facebook(13868184,90462,'facebook');if (m.initView_main != null) m.initView_main();/* ]]> */</script>
         </div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="diywebFooter">
		<div class="diywebLiveArea">
			<div class="diywebMainGutter">
				<div class="diyfeGE diywebPull diyfeCA diyfeCA4">
					<div class="diywebGutter">
						<div id="contentfooter">
    <div class="leftrow">
                        <a rel="nofollow" href="javascript:window.print();">
                    <img class="inline" height="14" width="18" src="../../cdn.website-start.de/s/img/cc/printer.gif" alt="Print"/>
                    Print                </a> <span class="footer-separator">|</span>
                <a href="../sitemap/index.html">Sitemap</a>
                        <br/> © Careerlift Recruitments
            </div>
    <script type="text/javascript">
        window.diy.ux.Captcha.locales = {
            generateNewCode: 'Generate new code',
            enterCode: 'Please enter the code'
        };
        window.diy.ux.Cap2.locales = {
            generateNewCode: 'Generate new code',
            enterCode: 'Please enter the code'
        };
    </script>
    <div class="rightrow">
                <p><a class="diyw switchViewWeb" href="javascript:switchView('desktop');">Web View</a><a class="diyw switchViewMobile" href="javascript:switchView('mobile');">Mobile View</a></p>
                <span class="loggedin">
            <a rel="nofollow" id="logout" href="https://cms02.website-start.de/app/cms/logout.php">Logout</a> <span class="footer-separator">|</span>
            <a rel="nofollow" id="edit" href="https://cms02.website-start.de/app/710072458/1885676/">Edit page</a>
        </span>
    </div>
</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>    </div>

    
            <script type="text/javascript">
            /* <![CDATA[ */
            if (perfBar) {
                function trackPerformanceAfterOnload() {
                    setTimeout(function () {
                        perfBar.init({
                                websiteId: 710072458,
                                pageId: 1885676,
                                mode: 'visit',
                                type: 'page',
                                lazy: false,
                                url: 'https://cdn.website-start.de/app/performance/tracking/submit',
                                webcacheTimestamp: 1521145244                            }
                        );
                        perfBar.send();
                    }, 1000);

                }

                if (window.addEventListener)
                    window.addEventListener("load", trackPerformanceAfterOnload, false);
                else if (window.attachEvent)
                    window.attachEvent("onload", trackPerformanceAfterOnload);
            }
            /* ]]> */
        </script>
    </body>
<?php
 
}
?>