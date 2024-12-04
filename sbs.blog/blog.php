<?php
require 'includes/connect.php';
$row;
if(isset($_GET['b_code']) && $_GET['b_code'] != ''){
  $id = $_GET['b_code'];
  $query = "select * from blogs where id = " . $id;
  $result = mysqli_query($conn, $query);
  $row = $result->fetch_assoc();
  if($row < 1){
    echo "<h1>404 Page not found</h1>";
    exit();
  }
}
else {
  echo "<h1>404 Page not found</h1>";
  exit();
}
?>

<!DOCTYPE html>
<html class="v2 js" dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:b="http://www.google.com/2005/gml/b" xmlns:data="http://www.google.com/2005/gml/data" xmlns:expr="http://www.google.com/2005/gml/expr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/3416767676-css_bundle_v2.css" rel="stylesheet" type="text/css">
<!-- Blog page title -->
<title>
Step by Step Visas | <?= $row['title']; ?>
</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<script type="text/javascript">
//<![CDATA[
var curl = window.location.href;if (curl.indexOf('m=1') != -1) {curl = curl.replace('m=1', 'm=0');window.location.href = curl;}
//]]>
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!--*********** SEO SETTINGS BY TEMPLATESILK **********-->
<meta content="en_US" property="og:locale">
<meta content="Step by Step Visas" name="author">
<!--*********** Facebook Graph ************-->
<meta content="<?= $row['title'] ?>" property="og:title">
<meta content="" property="og:url">
<meta content="article" property="og:type">
<meta content="Step By Step Visas Blog" property="og:site_name">
<meta content="" property="og:image">
<meta content="Facebook App ID here" property="fb:app_id">
<meta content="Facebook Admins ID here" property="fb:admins">
<!--************ Twitter card *************-->

<meta content="blogger" name="generator">
<link href="http://sbsv.test/assets/web/img/fav.png" rel="icon" type="image/x-icon">
<link href="http://newsnatorbloggertheme.blogspot.com/2018/08/a-new-protesting-story-reveals-new.html" rel="canonical">
<link rel="alternate" type="application/atom+xml" title="Newsnator - Atom" href="https://newsnatorbloggertheme.blogspot.com/feeds/posts/default">
<link rel="alternate" type="application/rss+xml" title="Newsnator - RSS" href="https://newsnatorbloggertheme.blogspot.com/feeds/posts/default?alt=rss">
<link rel="service.post" type="application/atom+xml" title="Newsnator - Atom" href="https://www.blogger.com/feeds/8301813360242143088/posts/default">

<link rel="alternate" type="application/atom+xml" title="Newsnator - Atom" href="https://newsnatorbloggertheme.blogspot.com/feeds/4867340620984877934/comments/default">
<!--[if IE]><script type="text/javascript" src="https://www.blogger.com/static/v1/jsbin/376796862-ieretrofit.js"></script>
<![endif]-->
<link href="./assets/img/toranto.jpg" rel="image_src">
<meta content="" property="og:url">
<meta content="<?= $row['title']; ?>" property="og:title">
<meta content="<?= strip_tags($row['text']); ?>" property="og:description">
<meta content="" property="og:image">
<!--[if IE]> <script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
<style id="page-skin-1" type="text/css"><!--
/*
-----------------------------------------------
/////////////////////////////////////////////////////////
//                                                     //
//  Theme Name :   	  Newsnator
//  Company :  		  Step by Step Visas
//  URL:       		  http://www.templatesilk.com/
//  Version:   		  Free Version - 4.1
//  Contact:
//                                                     //
/////////////////////////////////////////////////////////
----------------------------------------------- */
/*=====================================
= Variable definitions
=====================================*/
<Variable name="body.background" description="Body Background" type="background"
color="#ffffff" default="$(color) none repeat scroll top left"/>
<Variable name="keycolor" description="Main Color" type="color" default="#05034d"/>
<Variable name="startSide" description="Start side in blog language" type="automatic" default="left" hideEditor="true" />
<Variable name="endSide" description="End side in blog language" type="automatic" default="right" hideEditor="true" />
<Group description="Theme Color" selector="body">
<Variable name="drop.color" description="Theme Color" type="color" default="#05034d"/>
</Group>
<Group description="Body" selector="body">
<Variable name="body.background.color" description="Body Background Color" type="color" default="#fff" />
<Variable name="body.text.color" description="Body Text Color" type="color" default="#333" />
</Group>
<Group description="Links Color" selector="body">
<Variable name="link.color" description="Link Color" type="color" default="#333333"/>
<Variable name="link.hover.color" description="Hover Color" type="color" default="#357ae8"/>
</Group>
<Group description="News Headline" selector=".top-bar">
<Variable name="date.color" description="Date Color" type="color" default="#6A6A6A"/>
<Variable name="heading.color" description="Heading Color" type="color" default="#333"/>
</Group>
<Group description="Header" selector="#header-wrapper">
<Variable name="header.background" description="Background color" type="color" default="#ffffff"/>
<Variable name="header.color" description="Text color" type="color" default="#05034d"/>
</Group>
<Group description="Main Menu" selector=".navigation">
<Variable name="nav.background" description="Background color" type="color" default="transparent"/>
<Variable name="nav.sticky" description="Sticky Background color" type="color" default="#333"/>
<Variable name="nav.home.bg" description="Home button Background" type="color" default="#fff"/>
<Variable name="menu.font" description="Font" type="font" default="normal normal 19px 'Titillium Web',sans-serif"/>
<Variable name="menu.color" description="Text color" type="color" default="#fff"/>
</Group>
/*=====================================
= Custom Styles
=====================================*/
.section{margin:0;}
body{overflow-x:hidden;background:#ffffff none repeat scroll top left;color:#000000;background-attachment: fixed;background-size:cover;margin:0;text-align:center;}
body,h1,h2,h3,h4,h5,a,p,span,#search-box,.subscribe-box-address,.subscribe-box-submit{font-family:'Titillium Web',sans-serif!important;}
:before,:after{font-family:FontAwesome;}
*{-webkit-transition:all 0.3s ease;-moz-transition:all 0.3s ease;-o-transition:all 0.3s ease;transition:all 0.3s ease;}
.section{margin:0;}
a:link,a:visited{color:#333333;text-decoration:none;}
a:hover{color:#357ae8;}
a img{border-width:0;max-width:100%;}
.admin-panel{display:none;}
/*=====================================
= Fonts
=====================================*/
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:400;src:local('Titillium Web Regular'),local(TitilliumWeb-Regular),url(https://fonts.gstatic.com/s/titilliumweb/v6/NaPecZTIAOhVxoMyOr9n_E7fdM3mDbRS.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:400;src:local('Titillium Web Regular'),local(TitilliumWeb-Regular),url(https://fonts.gstatic.com/s/titilliumweb/v6/NaPecZTIAOhVxoMyOr9n_E7fdMPmDQ.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:700;src:local('Titillium Web Bold'),local(TitilliumWeb-Bold),url(https://fonts.gstatic.com/s/titilliumweb/v6/NaPDcZTIAOhVxoMyOr9n_E7ffHjDGIVzY4SY.woff2) format("woff2");unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}
@font-face{font-family:'Titillium Web';font-style:normal;font-weight:700;src:local('Titillium Web Bold'),local(TitilliumWeb-Bold),url(https://fonts.gstatic.com/s/titilliumweb/v6/NaPDcZTIAOhVxoMyOr9n_E7ffHjDGItzYw.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
/*=====================================
= Shortcode Styles
=====================================*/
.sc-tab ul.tabset.tabs li a.active{border-bottom:1px solid #05034d;border-top:3px solid #05034d;padding:8px 10px 10px 10px;background:#05034d;color:#fff;border-left:1px solid #05034d;border-right:1px solid #05034d;}
.sc-tab ul.tabset.tabs li a:hover{background:#05034d;color:white;border-color:#05034d;}
.sc-tab ul.tabset.tabs{margin:0;padding:0;list-style:none;}
.sc-tab ul.tabset.tabs li{float:left;margin:0 4px 0 0;border-right:1px solid #EEE;}
.sc-tab ul.tabset.tabs li a{color:#666;text-decoration:none;font-size:14px;}
.sc-tab .tab-box{clear:both;position:relative;z-index:9;top:3px;}
.sc-tab .tab_content{display:none;border:1px solid #EEE;padding:1em;border-bottom:3px solid #05034d;box-shadow:2px 4px 6px #EEE;font-size:14px;}
.sc-tab ul.tabset.tabs li a{padding:10px;display:block;border:1px solid #EEE;background:#fbfbfb;position:relative;z-index:9;}
.sc-accordion > h3 .anchor{padding:3px 7px;color:#05034d;margin:0 8px 0 0;}
.sc-accordion > h3 a{text-decoration:none;font:normal 16px oswald;color:#333!important;border-bottom:1px solid #eee;display:block;padding:0 0 0.6em 0;}
.sc-accordion .trigger{border-bottom:1px solid #DDD;padding:0 0 0.5em 0;margin:0 0 0.5em 0;display:none;font-size:14px;}
.sc-accordion > h3.toggle{margin:0 0 0.5em;}
.sc-accordion > h3 a.active{border:none;padding:0;}
.sc-accordion > h3 a.active .anchor,.sc-accordion > h3 a.active{color:#05034d;}
.sc-accordion > h3 a:hover{color:#05034d;}
a.sc-button{color:#fff!important;background-color:#05034d;border-radius:2px;padding:8px 15px;text-transform:capitalize;text-decoration:none;}
.sc-notification{color:#fff;line-height:1.4em;margin:10px 0 1em;padding:.7em 1.2em;font-size:15px;opacity:0.83;}
.sc-notification .headline{font-size:17px;padding-bottom:10px;}
.sc-notification.sc-warning{background-color:#ff9800;}
.sc-notification.sc-alert{background-color:#f44336;}
.sc-success.sc-notification{background-color:#4CAF50;}
.sc-info.sc-notification{background-color:#673AB7;}
.sc-update.sc-notification{background-color:#2196F3;}
.sc-info.sc-notification div.headline::before{position:relative;content:'\f05a';font-size:20px;padding-right:10px;}
.sc-update.sc-notification div.headline::before{position:relative;content:'\f0a1';font-size:20px;padding-right:10px;}
.sc-alert.sc-notification div.headline::before{position:relative;content:'\f06a';font-size:20px;padding-right:10px;}
.sc-success.sc-notification div.headline::before{position:relative;content:'\f058';font-size:20px;padding-right:10px;}
.sc-warning.sc-notification div.headline::before{position:relative;content:'\f071';font-size:20px;padding-right:10px;}
/*=====================================
= Normalize
=====================================*/
button,hr,input{overflow:visible;}
audio,canvas,progress,video{display:inline-block;}
progress,sub,sup{vertical-align:baseline;}
html{font-family:sans-serif;line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}
menu,article,aside,details,footer,header,nav,section{display:block;}
h1{font-size:2em;margin:.67em 0;}
figcaption,figure,main{display:block;}
figure{margin:1em 40px;}
hr{box-sizing:content-box;height:0;}
code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
a:active,a:hover{outline-width:0;}
abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted;}
b,strong{font-weight:bolder;}
dfn{font-style:italic;}
mark{background-color:#ff0;color:#000;}
small{font-size:80%;}
sub,sup{font-size:75%;line-height:0;position:relative;}
sub{bottom:-.25em;}
sup{top:-.5em;}
audio:not([controls]){display:none;height:0;}
img{border-style:none;}
svg:not(:root){overflow:hidden;}
button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;}
button,input{;}
button,select{text-transform:none;}
[type=submit],[type=reset],button,html [type=button]{-webkit-appearance:button;}
[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0;}
[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px;}
fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em;}
legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal;}
progress{;}
textarea{overflow:auto;}
[type=checkbox],[type=radio]{box-sizing:border-box;padding:0;}
[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto;}
[type=search]{-webkit-appearance:textfield;outline-offset:-2px;}
[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none;}
::-webkit-file-upload-button{-webkit-appearance:button;font:inherit;}
summary{display:list-item;}
[hidden],template{display:none;}
/*=====================================
= News Headline
=====================================*/
.top-bar{border-bottom:1px solid #eee;width:100%;float:left;}
.news-label span,.news .Label h2{display:none;}
.news-title h2{margin:0;display:inline-block;float:left;position:relative;margin-right:25px;color:#fff;font-size:15px;line-height:12px;font-weight:normal;text-transform:capitalize;padding:17px 17px 17px 19px;letter-spacing:1px;background:#05034d;}
.news-title h2 i{font-size:17px;}
.news-title h2:after{content:'';position:absolute;width:42px;height:75px;background-color:#05034d;transform:rotate(35deg);-webkit-transform:rotate(35deg);-moz-transform:rotate(35deg);-o-transform:rotate(35deg);top:-28px;z-index:-1;}
.news{height:50px;overflow:hidden;width:65%;float:left;}
.news ul{position:relative;transition:none;padding:0;max-width:100%;}
.news li{list-style:none;display:block;padding:0;height:50px;}
.news .recent-date{font-size:12px;padding:0 15px;line-height:50px;height:50px;color:#6A6A6A;float:left;}
.news .recent-title{font-size:15px;height:50px;line-height:50px;overflow:hidden;text-align:left;}
.news .recent-title a{color:#333333;overflow:hidden;height:50px;float:left;text-overflow:ellipsis;white-space:nowrap;width:100%;}
/*=====================================
= Search Box
=====================================*/
.search-box-wrapper{float:right;width:32%;}
.search-box-wrapper:before{display:block;content:"";position:absolute;width:1px;height:51px;background-color:#eee;transform:skewX(-20deg);-webkit-transform:skewX(-35deg);-moz-transform:skewX(-35deg);-o-transform:skewX(-35deg);-ms-transform:skewX(-35deg);margin-left:-20px;}
#search-box{background-color:transparent;border:0 none;padding:16px 0;width:86%;color:#444;outline:none;float:left;}
input:-webkit-autofill,textarea:-webkit-autofill,select:-webkit-autofill{background-color:transparent!important;}
#search-btn{border:0 none;color:#fff;padding:17px 0 15px 0;cursor:pointer;background-color:#05034d;outline:none;float:right;width:14%;text-align:left;transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-moz-transition:all 0.5s ease;-o-transition:all 0.5s ease;}
#search-btn:before{content:'';position:absolute;width:50px;height:215px;background-color:#05034d;transform:rotate(35deg);-webkit-transform:rotate(35deg);-moz-transform:rotate(35deg);-ms-transform:rotate(35deg);-o-transform:rotate(35deg);top:-110px;z-index:-1;float:left;transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-moz-transition:all 0.5s ease;-o-transition:all 0.5s ease;}
.search-box-wrapper input:not(:placeholder-shown) + #search-btn{background-color:#444;}
.search-box-wrapper input:not(:placeholder-shown) + #search-btn:before{background-color:#444;}
/*=====================================
= Mobile Search
=====================================*/
#xoai6-search{display:none;}
.search-toggle::before{position:absolute;right:0;height:50px;width:50px;padding-right:5px;line-height:50px;text-align:center;display:inline-block;font-size:18px;background:#fff;color:#444;z-index:9999999;content:"\f002";}
.search-toggle.active::before{content:"\f00d";}
.search-input:focus{outline:none;}
#xoai6-search .search-box{position:absolute;left:0;height:50px;opacity:0;background:#fff;transition:all 0.2s ease;-webkit-transition:all 0.2s ease;-moz-transition:all 0.2s ease;-o-transition:all 0.2s ease;}
#xoai6-search .search-box .search-input{border:0;width:0;height:100%;background-color:transparent;transition:none;}
#xoai6-search.show .search-box .search-input{width:100%;padding-left:20px;}
#xoai6-search .search-box .search-toggle{width:14px;height:14px;padding:0;position:absolute;left:5px;top:50%;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);}
#xoai6-search.show .search-box{width:100%;opacity:1;}
/*=====================================
= Header
=====================================*/
#header-wrapper{background-color:#ffffff;width:100%;float:left;}
.header .widget{margin:0;padding:0;vertical-align:middle;display:table-cell;}
#header{text-align:left;color:#333;float:left;width:50%;height:140px;display:table;}
#header-inner{background-position:center;margin-left:auto;margin-right:auto;height:68px;}
#header h1{margin:0;padding:6px 10px;font-size:36px;font-weight:bold;border:solid 3px #05034d;color:#05034d;border-radius:1px;display:inline-block;border-left-width:6px;}
#header a{color:#05034d;text-decoration:none;}
#header .description{margin:0 5px 5px;padding:0 20px 15px;text-transform:uppercase;letter-spacing:.2em;line-height:1.4em;font:normal normal 78% 'Trebuchet MS',Trebuchet,Arial,Verdana,Sans-serif;color:#999;}
#header img{margin-left:auto;margin-right:auto;}
/*=====================================
= Ad Section
=====================================*/
.ad-section{height:140px;width:50%;float:right;}
.ad-section img{max-width:100%;padding:0;max-height:80px;}
.ad-section .title{display:none;}
.ad-section .widget{line-height:0;margin:0;display:table;height:100%;float:right;}
.ad-section .widget .widget-content{display:table-cell;vertical-align:middle;}
.footer-ad{width:100%;height:120px;}
.footer-ad .widget .widget-content{padding:0 10px;}
.ad-section .widget{margin:auto;float:none;}
.footer-ad img{max-height:120px;}
/*=====================================
= Navigation Bar
=====================================*/
body.sticky-header .menu li ul li a:hover{background-color:#333333;}
body.sticky-header .transparent-navigation{background-color:#333333;}
body.sticky-header li.home-child a i,body.sticky-header .menu li ul li a{color:#333333;}
body.sticky-header .menu li ul li a:hover{color:#fff;}
.navigation{float:left;width:100%;text-align:left;background:#05034d;position:sticky;position:-webkit-sticky;top:0;z-index:10;}
.transparent-navigation{background:transparent;display:inline-block;float:left;width:100%;}
li.home-child a{padding:10px!important;background-color:transparent!important;}
li.home-child a i{color:#05034d;background-color:#ffffff;border-radius:100%;width:45px;height:45px;line-height:45px;text-align:center;}
ul#sub-menu a:after{display:none;}
li.hasub a:after{content:"\f078";margin-left:7px;font-size:14px;}
#nav{display:inline-block;}
.menu{padding:0 50px;}
.menu .section{margin:0;float:left;}
.menu .widget{margin:0;}
#headyer{padding:0 100px;}
.menu li{display:inline-block;padding:0;}
.menu li a{text-decoration:none;padding:13px 12px;display:inline-block;color:#ffffff;font:normal normal 19px 'Titillium Web',sans-serif!important;text-transform:capitalize;line-height:40px!important;}
.menu li a:hover,.menu li:hover>a{background-color:rgba(0,0,0,0.05);padding:13px 20px;}
.hasub{cursor:pointer;}
.menu li ul{opacity:0;visibility:hidden;position:absolute;z-index:3;max-width:170px;width:100%;background-color:#fff;box-shadow:0 0 10px 0 rgba(0,0,0,0.15  );-webkit-transform:translate(0,20px);transform:translate(0,20px);}
.menu li:hover ul{opacity:1;visibility:visible;-webkit-transform:translate(0,0);transform:translate(0,0);}
.menu li ul li{display:block;}
.menu li ul li a{text-transform:none;letter-spacing:0;font-size:15px!important;font-weight:400;color:#05034d;text-align:left;padding:5px 12px!important;width:100%;background-color:#fff;}
.menu li ul li a:hover{color:#fff;background-color:#05034d;}
.menu .widget ul,.top-menu .widget ul{padding:0;}
#nav ul,#nav li ul li{float:none;z-index:9999;}
.menu li ul li:last-child a{border-bottom:0;}
.menu li:hover ul ul{transform:translateY(30px);-webkit-transform:translateY(30px);-moz-transform:translateY(30px);-o-transform:translateY(30px);-ms-transform:translateY(30px);transition:all .3s ease;-webkit-transition:all .3s ease;-moz-transition:all 1s ease;-o-transition:all 1s ease;opacity:0;visibility:hidden;}
.menu li ul li:hover ul{transform:translateY(0px);-webkit-transform:translateY(0px);-moz-transform:translateY(0px);-o-transform:translateY(0px);-ms-transform:translateY(0px);opacity:1;visibility:visible;}
.menu li ul ul{top:0;}
#nav ul:after{bottom:100%;left:20%;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none;border-color:rgba(255,255,255,0);border-bottom-color:#fff;border-width:6px;margin-left:-6px;}
/*=====================================
= Mobile Navigation
=====================================*/
.selectnav option:nth-child(1){display:none;}
.selectnav{display:none;}
select.selectnav{color:#333;padding-left:55px;border:0;cursor:pointer;width:300px;height:55px;float:left;line-height:40px;border-radius:0;outline:none;text-transform:capitalize;}
select{-webkit-appearance:none!important;-moz-appearance:none!important;appearance:none!important;}
#selectnav1{background:url(//4.bp.blogspot.com/-ofu_Vkl5Jdc/W2zQXKWB2QI/AAAAAAAADwk/KauhAD84-GExlHSVCNsVrHFISvWbOj6PgCK4BGAYYCw/s400/menu.png) no-repeat;margin-top:10px;}
/*=====================================
= Social Icons
=====================================*/
.top-social{float:right;}
.top-social ul{padding:0;}
.top-social li{display:inline-block;padding:0;}
.top-social li a{width:30px;height:66px;line-height:66px!important;display:block;margin:0;color:#ffffff;padding:0!important;text-align:center;background-color:transparent!important;}
.top-social li a:hover{color:rgba(255,255,255,0.82);}
.top-social a i{font-size:18px;float:none!important;}
/*=====================================
= Read More
=====================================*/
.readmore{display:inline-block;margin-left:40px;}
.readmore a{display:block;background-color:transparent;color:#fff;border:solid 1px #fff;padding:10px 12px;border-radius:2px;font-size:19px;}
.readmore i{margin-left:6px;}
/*=====================================
= Page Navigation
=====================================*/
#blog-pager{text-align:center;overflow:visible;float:left;width:100%;margin-top:20px!important;display:block;line-height:3.7;}
#blog-pager,.feed-links{display:none;}
#blog-pager-newer-link,#blog-pager-older-link{float:none!important;}
.blog-pager-older-link,.blog-pager-newer-link{border-radius:2px;padding:10px 15px;display:inline;color:#333!important;border:solid 2px #333;font-weight:bold;font-size:20px;margin:0 5px;}
.blog-pager i{transition:none;font-size:18px;margin-left:2px;}
.blog-pager-older-link:hover,.blog-pager-newer-link:hover{border-color:#05034d;color:#05034d!important;}
/*=====================================
= Main Container
=====================================*/
#outer-wrapper{max-width:1200px;margin:0 auto;text-align:left;display:inline-block;margin-top:50px;padding:0;}
#main-wrapper{width:66%;padding:0;float:left;word-wrap:break-word;overflow:hidden;}
#rsidebar-wrapper{margin-right:0.5%;}
#rsidebar-wrapper img{max-width:100%;}
.sidebar .HTML .widget-content{text-align:center;}
#main-wrapper{margin-left:0.5%;}
/*=====================================
= Right Sidebar
=====================================*/
#rsidebar-wrapper{width:30%;float:right;word-wrap:break-word;overflow:hidden;display:inline-block;}
.sidebar{margin:0 0 10px 0;font-size:13px;color:#374142;}
.sidebar a{text-decoration:none;color:#374142;}
.sidebar a:hover{text-decoration:none;color:#05034d;}
.sidebar h2{letter-spacing:1px;background:#fff;font-weight:bold;color:#555;padding:15px 0;font-size:20px;text-transform:capitalize;text-align:left;margin:2px;position:relative;line-height:.75em;white-space:nowrap;width:100%;display:inline-block;}
.sidebar h2:after{overflow:hidden;width:100%;height:2px;background:#555;content:" ";vertical-align:middle;margin-left:.75em;display:inline-block;}
.sidebar ul{list-style-type:none;list-style:none;margin:0;padding:0 20px!important;}
.sidebar ul li{padding:0 0 9px 0;margin:0 0 8px 0;}
.sidebar .widget{margin:0;padding:0;color:#374142;font-size:15px;overflow:hidden;}
.sidebar .widget-content{padding:20px 0;float:left;width:100%;}
#___person_0,#___plus_0{display:block!important;margin:auto!important;}
#google_translate_element{float:left;width:100%;padding:20px 0;}
.PlusBadge{padding-bottom:30px!important;}
.Attribution a{color:#05034d;}
/*=====================================
=  Featured Post
=====================================*/
.post-summary{background-color:#000;padding:0!important;margin:20px 0;display:grid;}
.post-summary h3{padding:0 25px!important;}
.post-summary h3 a{color:#fff!important;height:65px;overflow:hidden;float:left;}
.post-summary h3{float:left;white-space:normal;font-size:23px;padding:0;margin:0;position:absolute;z-index:9;color:#fff;background-color:transparent;height:65px;font-weight:normal;overflow:hidden;line-height:1.364;bottom:140px;}
.FeaturedPost img{max-width:100%;height:400px;opacity:0.7;}
.post-summary p{position:absolute;bottom:30px;color:#fff;line-height:1.600;font-size:18px;padding:15px 25px;display:inline-block;margin:0;z-index:9;overflow:hidden;height:75px;}
/*=====================================
= Sidebar Image Widget
=====================================*/
.sidebar .Image{padding:20px 0;}
.sidebar .Image h2{float:left;white-space:normal;font-size:23px;padding:0;margin:0;position:absolute;z-index:9;color:#fff;background-color:transparent;height:65px;font-weight:normal;overflow:hidden;line-height:1.364;bottom:155px;}
.sidebar .Image h2:before{content:'x';float:left;margin-left:6px;height:65px;opacity:0;}
.sidebar .Image h2:after{content:'x';float:right;margin-right:6px;height:65px;width:auto;margin-left:0;overflow:visible;display:block;background-color:transparent;opacity:0;}
.sidebar .Image .widget-content{padding:0;background-color:#000;}
.sidebar .Image img{max-width:100%;height:350px;opacity:0.7;margin-bottom:-5px;}
.sidebar .Image .caption{position:absolute;bottom:50px;color:#fff;line-height:1.600;font-size:18px;padding:15px 25px;display:inline-block;margin:0;z-index:9;height:75px;overflow:hidden;}
/*=====================================
= Subscribe
=====================================*/
.FollowByEmail .widget-content{background:#ffffff;box-shadow:0 1px 3px 0 rgba(0,0,0,.1);border:1px solid #eee;border-radius:2px;padding:30px;width:auto;margin:20px 0;}
#footer-widgets .FollowByEmail .widget-content{box-shadow:none;border:0;margin:56px 0;padding:0;}
.FollowByEmail td{width:100%;float:left;box-sizing:border-box;}
.FollowByEmail .follow-by-email-inner .follow-by-email-submit{margin-left:0;width:100%;border-radius:0;height:40px;font-size:11px;color:#fff;background-color:#05034d;text-transform:uppercase;letter-spacing:1px;outline:none;}
#footer-widgets .FollowByEmail .follow-by-email-inner .follow-by-email-submit{border-radius:2px;height:50px;font-size:14px;}
.FollowByEmail .follow-by-email-inner .follow-by-email-submit:hover{background-color:#333;}
.FollowByEmail .follow-by-email-inner .follow-by-email-address{padding-left:10px;height:40px;border:1px solid #F5F5F5;margin-bottom:5px;box-sizing:border-box;font-size:12px;outline:none;}
#footer-widgets .FollowByEmail .follow-by-email-inner .follow-by-email-address{height:50px;margin-bottom:15px;font-size:15px;}
.FollowByEmail .follow-by-email-inner .follow-by-email-address:focus{border:1px solid #F5F5F5;}
#footer-widgets .FollowByEmail .widget-content:before{content:"\f0e0";display:block;padding:0 2px;letter-spacing:-.04em;font-size:50px;border-radius:100%;width:100px;margin:auto;line-height:100px;color:#fff;background-color:#05034d;font-weight:normal;text-align:center;}
#footer-widgets .FollowByEmail .widget-content .follow-by-email-inner:before{margin:25px auto;max-width:300px;}
.FollowByEmail .widget-content .follow-by-email-inner:before{content:"Subscribe to our mailing list to get the new updates!";display:block;font-family:'Titillium Web',sans-serif!important;padding:0 2px;letter-spacing:-.04em;font-size:23px;line-height:1.2;color:#333;margin-bottom:15px;font-weight:600;text-align:center;direction:ltr;}
/*=====================================
= Search Blog
=====================================*/
input.gsc-input{padding:15px 10px;border:1px solid #ddd;width:100%;outline:none;}
input.gsc-search-button{color:#fff;border:0;background-color:#05034d;padding:16px 15px;outline:none;cursor:pointer;}
/*=====================================
= Contact Form
=====================================*/
.contact-form-widget{width:250px;max-width:100%;margin:0 auto;padding:20px;}
.contact-form-name,.contact-form-email,.contact-form-email-message{width:90%;max-width:100%;}
.contact-form-button-submit{border:none!important;background:#05034d;color:#fff;width:89%;cursor:pointer;height:35px;text-transform:uppercase;}
.contact-form-email:focus,.contact-form-name:focus,.contact-form-email-message:focus{border:1px solid #333!important;box-shadow:none!important;}
.contact-form-button-submit:hover{background-color:#333!important;background-image:none!important;}
/*=====================================
= Popular Post
=====================================*/
.sidebar .PopularPosts ul li:nth-child(1){font-weight:700;list-style:none!important;overflow:hidden;padding:0!important;position:relative;border:0;height:380px;margin-bottom:25px;background-color:#000;}
.sidebar .PopularPosts ul li:nth-child(1) .item-thumbnail{margin:0;width:100%;height:100%;}
.sidebar .PopularPosts ul li:nth-child(1) .item-content{margin:0;}
.sidebar .PopularPosts ul li:nth-child(1) img{display:block;float:left;padding:0;width:100%;height:380px;border-radius:0;opacity:0.7;}
.sidebar .PopularPosts ul li:nth-child(1) .item-title{bottom:175px;position:absolute;width:100%;margin:0;height:65px;}
.sidebar .PopularPosts ul li:nth-child(1) .item-title a{background:transparent;display:block;font-size:23px;padding:0 25px;color:#fff;font-weight:normal;line-height:1.364;height:65px;overflow:hidden;}
.sidebar .PopularPosts ul li:nth-child(1) .item-title:before{display:none;}
.sidebar .PopularPosts ul li:nth-child(1) .item-snippet{position:absolute;bottom:30px;color:#fff;line-height:1.600;font-size:18px;padding:15px 25px;display:inline-block;margin:0;z-index:9;float:left;left:0;font-weight:normal;}
.PopularPosts ul{float:left;display:block;padding:0!important;width:100%;}
.PopularPosts ul li{position:relative;height:100px;display:block;margin:0;padding:0!important;}
.PopularPosts ul li a{color:#444;display:table-cell;text-decoration:none;text-transform:capitalize;background-color:transparent;white-space:normal;vertical-align:middle;font-size:15px;line-height:20px;}
.PopularPosts .item-thumbnail{margin:0;width:100px;height:90px;display:inline-table;}
.PopularPosts ul li img{display:block;padding:0;width:100%;height:90px;border-radius:2px;}
.PopularPosts .item-content{box-shadow:0 1px 3px 0 rgba(0,0,0,.1);margin-right:5px;}
.PopularPosts .item-title{height:90px;display:table;overflow:visible;bottom:0;left:0;right:0;padding-bottom:0;position:relative;opacity:1;transform:none;background-color:transparent;}
.PopularPosts .item-title a{padding:0 10px;}
.PopularPosts .item-title{margin-right:5px;margin-top:5px;}
.PopularPosts .item-title:before{content:"";float:left;margin-left:-10px;margin-top:30px;width:0;height:0;border-right:15px solid #ffffff;border-top:15px solid transparent;border-bottom:15px solid transparent;}
.item-snippet{display:none;}
.widget .widget-item-control a img{display:none;}
/*=====================================
= Labels
=====================================*/
.label-size-1,.label-size-2,.label-size-3,.label-size-4,.label-size-5{font-size:100%;filter:alpha(100);opacity:10;}
.cloud-label-widget-content{text-align:left;margin:0;}
.label-size{display:block;float:left;margin:3px;font-size:17px;}
.label-size a,.label-size span{text-transform:capitalize;display:inline-block;color:#fff!important;padding:7px 15px;background-color:#05034d;border-radius:1px;}
.label-size a:hover,.label-size span:hover{background-color:#333;}
.label-count{white-space:nowrap;padding-right:3px;margin-left:-5px;border-left:solid 2px #eee!important;}
.label-size{line-height:1.4;}
.list-label-widget-content{text-align:left;margin:0;}
.list-label-widget-content ul li{margin:5px 0;list-style:none;padding:0!important;overflow:hidden;position:relative;}
.list-label-widget-content ul{padding:0!important;}
.list-label-widget-content ul li a:before{content:"\f01c";display:inline-block;line-height:1;margin-right:10px;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;-webkit-transition:all 0.5s;-moz-transition:all 0.5s;-o-transition:all 0.5s;transition:all 0.5s;border-radius:100%;width:30px;height:30px;color:#05034d;line-height:30px;text-align:center;background-color:#fff;}
.list-label-widget-content ul li a{display:block;padding:9px 20px;font-size:18px;color:#fff!important;text-transform:capitalize;background-color:#05034d;}
.list-label-widget-content ul li span{display:none;}
/*=====================================
= Status Msg
=====================================*/
.status-msg-border{display:none;}
.status-msg-body{position:relative;padding:0;}
.status-msg-wrap{font-size:120%;margin-bottom:30px;margin-top:0;border-left:solid 5px #333;padding:15px;background-color:#fff;box-shadow:0 3px 5px 0 rgba(0,1,1,.1);}
.status-msg-wrap a{display:none;}
.tr_bq{padding:10px;background-color:#444;color:#fff;border-left:solid 8px #05034d;}
/*=====================================
= Post
=====================================*/
h2{margin:1.5em 0 .75em;font:normal normal 78% 'Trebuchet MS',Trebuchet,Arial,Verdana,Sans-serif;line-height:1.4em;text-transform:uppercase;letter-spacing:.2em;color:#999;}
h2.date-header{margin:1.5em 0 .5em;}
.post{margin:.5em 0 1.5em;padding-bottom:1.5em;}
.post h3{margin:.25em 0 0;padding:0 0 4px;font-size:140%;font-weight:normal;line-height:1.4em;color:#c60;}
.post h3 a,.post h3 a:visited,.post h3 strong{display:block;text-decoration:none;color:#c60;font-weight:normal;}
.post h3 strong,.post h3 a:hover{color:#fff;}
.post-body{margin:0 0 .75em;line-height:1.6em;}
.post-body blockquote{line-height:1.3em;}
.post-footer{margin:0;color:#999;text-transform:uppercase;letter-spacing:.1em;font:normal normal 78% 'Trebuchet MS',Trebuchet,Arial,Verdana,Sans-serif;line-height:1.4em;}
.comment-link{margin-left:.6em;}
.post img,table.tr-caption-container{height:auto;width:90%;}
.tr-caption-container img{border:none;padding:0;}
.post blockquote{margin:1em 20px;}
.post blockquote p{margin:.75em 0;}
.widget.Blog .post-outer{border-bottom:0!important;padding-bottom:0!important;}
h2.date-header{margin:1.5em 0 .5em;display:none;}
.post{padding:0;}
.widget.Blog .post-outer{border-bottom:0!important;padding-bottom:0!important;}
.post-title{font-weight:normal;text-align:left;color:#2a3a4a;line-height:1.2;display:inline-block;padding:0 10px;font-size:40px;margin:10px 0;}
.post-title a,.post-title a:visited,.post-title strong{color:#fff;}
.post:first-child{margin-top:0;}
.post-body{padding:0;font-size:19px;color:#444;line-height:35px;margin:0;}
.comment-link{margin-left:.6em;}
.post-body img{max-width:100%;width:auto;height:auto;}
.post-anime{float:left;position:relative;overflow:hidden;background-color:#000;width:100%;}
.post-anime img{display:block;width:100%;height:450px;}
.main .widget{border-bottom:1px dotted #ccc;margin:0;padding:0;}
.main .Blog{border-bottom-width:0;}
.post h3{font-size:35px;margin-bottom:10px;margin-top:10px;color:#333333;}
.post h4{color:#333333;font-weight:900;font-size:30px;margin-top:10px;margin-bottom:10px;}
.postmeta-primary{float:left;padding:10px;}
.postmeta_author a{color:#fff;}
.postmeta_author img{height:30px;width:30px;border-radius:100%;}
.postmeta_author,.postmeta_clock,.postmeta_comment,.postmeta_label{text-transform:capitalize;color:#555;text-decoration:none;padding-right:24px;float:left;}
.author_name i,.meta_date i,.meta_comment i,.meta_label i{margin-right:3px;color:#555;}
.postmeta-primary a{color:#333;}
.postmeta-primary a:hover{color:#05034d;}
.recentmore:hover i{transform:translateX(5px);-webkit-transform:translateX(5px);-moz-transform:translateX(5px);-o-transform:translateX(5px);-ms-transform:translateX(5px);}
.turbo-box{background:#ffffff;padding-bottom:20px;}
/*=====================================
= Comment Style
=====================================*/
#comments h4{float:left;margin:0!important;width:100%;background:#444;color:#fff!important;padding:14px 0!important;font-size:24px!important;text-align:left;text-transform:capitalize;font-weight:normal;}
#comment-post-message{padding:14px 0!important;font-size:24px!important;text-align:center;text-transform:capitalize;font-weight:normal;float:right;width:50%;margin-top:-61px!important;background-color:#444;color:#fff!important;border-left:solid 1px #fff;}
#comments h4:before{content:"\f0e6";margin-right:10px;margin-left:50px;}
#comment-post-message:before{content:"\f044";margin-right:10px;}
.comments{margin:0;}
.comments .comments-content{margin-top:50px;margin-bottom:0;float:left;width:100%;}
#comments-block{margin:1em 0 1.5em;line-height:1.6em;}
#comments-block .comment-author{margin:.5em 0;}
#comments-block .comment-body{margin:.25em 0 0;}
#comments-block .comment-footer{margin:-.25em 0 2em;line-height:1.4em;text-transform:uppercase;letter-spacing:.1em;}
#comments-block .comment-body p{margin:0 0 .75em;}
.deleted-comment{font-style:italic;color:gray;}
.comments .comment-block{background:#fff;color:#555;position:relative;margin-top:0;margin-left:0;padding:25px;padding-left:50px;box-shadow:0 1px 3px 0 rgba(0,0,0,.1);margin-bottom:-5px;}
.thread-count{margin:20px 0;padding:7px 15px;position:relative;display:inline-block;text-align:center;font-size:19px;width:100%;}
.comments .thread-toggle{display:block;}
.thread-count:before{content:"\f112";color:#05034d;margin-right:8px;font-size:18px;}
.comments .thread-toggle .thread-arrow{display:none;}
.comment-content{line-height:24px;padding-bottom:20px;font-size:17px;}
.comments .comment .comment-actions a{color:#333;text-decoration:none!important;border:solid 2px #333;padding:4px 16px;margin-left:0!important;font-weight:bold;border-radius:2px;}
.comments .comments-content .comment-header,.comments .comments-content .comment-content{margin-left:0!important;text-align:left;}
span.blog-admin,span.pid-1388964873{display:none!important;}
.loadmore{text-align:center;display:block;max-width:160px;margin:0 auto;overflow:hidden;}
.loadmore a,.loadmore span{background-color:#05034d;color:#fff;padding:10px 30px;display:block;}
.comments .avatar-image-container{width:60px;height:60px;max-height:60px;margin:-25px 0 0 -25px;padding:0;float:left;z-index:9;position:relative;border-radius:100%;}
.comments .avatar-image-container img{overflow:hidden;width:60px;height:60px;max-width:60px;border:0!important;border-radius:100%;}
.comments .comment-thread.inline-thread{background:none;}
.comments .comments-content .comment-thread{padding:0;}
.comments .continue{display:none;}
.comments .comments-content .datetime a{float:right;font-size:12px;background-color:transparent;color:#555;position:relative;}
.comments .comments-content .user a{font-size:20px;font-style:normal;color:#555;}
.comments .comments-content .datetime a:hover{color:#777;text-decoration:none;}
.comments .comments-content .comment:first-child{padding-top:0;}
.comments .comments-content .comment{margin-bottom:0;padding:20px 30px;}
.comments .continue a{padding:0;}
.comments .comments-content .icon.blog-author{background-image:none;margin:0 0 0 8px;}
.comments .comments-content .icon.blog-author:after{content:"\f058";color:#555;font-size:17px;}
.comments a{color:#05034d;}
i.fa-pencil-square-o{background-color:#05034d;color:#fff;padding:10px 15px;margin:30px 15px;font-size:19px;}
/*=====================================
= Social Share
=====================================*/
.gooye-facebook,.gooye-google,.gooye-pinterest,.gooye-twitter,.gooye-linkedin,.gooye-open-button,.gooye-comment-button{background:transparent;font-size:20px;border-radius:100%;width:50px;height:50px;position:absolute;top:20px;color:#555!important;border:solid 2px #555;text-align:center;line-height:50px;-webkit-transition:-webkit-transform ease-out 200ms;transition:-webkit-transform ease-out 200ms;transition:transform ease-out 200ms;transition:transform ease-out 200ms;-webkit-transform ease-out 200ms;}
.gooye-comment-count{-webkit-transform:translate3d(60px,0,0);transform:translate3d(60px,0,0);}
.gooye-facebook,.gooye-google,.gooye-pinterest,.gooye-twitter,.gooye-linkedin,.gooye-open-button{-webkit-transform:translate3d(120px,0,0);transform:translate3d(120px,0,0);}
.gooye-open{display:none;}
.gooye{position:absolute;z-index:9;}
.gooye-open-button{z-index:2;-webkit-transition-timing-function:cubic-bezier(0.175,0.885,0.32,1.275);transition-timing-function:cubic-bezier(0.175,0.885,0.32,1.275);-webkit-transition-duration:400ms;transition-duration:400ms;cursor:pointer;}
.gooye-open:checked + .gooye-open-button{-webkit-transition-timing-function:linear;transition-timing-function:linear;-webkit-transition-duration:200ms;transition-duration:200ms;}
.gooye-facebook,.gooye-google,.gooye-pinterest,.gooye-twitter,.gooye-linkedin{-webkit-transition-duration:180ms;transition-duration:180ms;opacity:0;transition:all 0.4s ease;}
.gooye-open:checked ~ .gooye-facebook{-webkit-transition-timing-function:cubic-bezier(0.165,0.84,0.44,1);transition-timing-function:cubic-bezier(0.165,0.84,0.44,1);-webkit-transition-duration:170ms;transition-duration:170ms;-webkit-transform:translate3d(180px,0,0);transform:translate3d(180px,0,0);opacity:1;}
.gooye-open:checked ~ .gooye-google{-webkit-transition-timing-function:cubic-bezier(0.165,0.84,0.44,1);transition-timing-function:cubic-bezier(0.165,0.84,0.44,1);-webkit-transition-duration:250ms;transition-duration:250ms;-webkit-transform:translate3d(240px,0,0);transform:translate3d(240px,0,0);opacity:1;}
.gooye-open:checked ~ .gooye-twitter{-webkit-transition-timing-function:cubic-bezier(0.165,0.84,0.44,1);transition-timing-function:cubic-bezier(0.165,0.84,0.44,1);-webkit-transition-duration:330ms;transition-duration:330ms;-webkit-transform:translate3d(300px,0,0);transform:translate3d(300px,0,0);opacity:1;}
.gooye-open:checked ~ .gooye-linkedin{-webkit-transition-timing-function:cubic-bezier(0.165,0.84,0.44,1);transition-timing-function:cubic-bezier(0.165,0.84,0.44,1);-webkit-transition-duration:410ms;transition-duration:410ms;-webkit-transform:translate3d(360px,0,0);transform:translate3d(360px,0,0);opacity:1;}
.gooye-open:checked ~ .gooye-pinterest{-webkit-transition-timing-function:cubic-bezier(0.165,0.84,0.44,1);transition-timing-function:cubic-bezier(0.165,0.84,0.44,1);-webkit-transition-duration:490ms;transition-duration:490ms;-webkit-transform:translate3d(420px,0,0);transform:translate3d(420px,0,0);opacity:1;}
/*=====================================
= About Author
=====================================*/
.about_admin{float:left;margin-top:110px;}
.about_admin-bg{background-image:url(https://2.bp.blogspot.com/-WM4siHOJbUE/WOULKBO-fhI/AAAAAAAAB5Y/bldAzGfNXJgeIBQsiwClbfwfc24cqQBOgCLcB/s1600/sub-bg.jpg);background-attachment:fixed;background-size:cover;padding:65px 65px;margin-left:0px;}
.admin_pic{text-align:center;display:inline-block;float:left;padding:64px 0;margin-right:40px;}
.about_admin img{height:160px;border-radius:100%;float:left;margin:0;width:160px;}
.admin_name{color:#fff!important;font-size:24px;margin:0 0 10px;display:block;}
.admin_info{padding-right:25px;font-size:16px;color:#fff;margin:0;height:115px;overflow:hidden;}
/*=====================================
= Related Post
=====================================*/
.like-title{padding:9px 0!important;font-size:27px!important;text-align:center;margin:0!important;margin-bottom:0!important;font-weight:bold!important;color:#444!important;position:relative;white-space:nowrap;width:100%;overflow:hidden;text-transform:capitalize;letter-spacing:0;}
.like-title:before{content:"\f087";margin-right:10px;border:solid 2px #444;color:#444;border-radius:100%;width:45px;height:45px;line-height:45px;text-align:center;display:inline-block;font-weight:normal;font-size:25px;}
.like-title:after{overflow:hidden;width:100%;height:2px;background:#555;content:" ";vertical-align:middle;margin-left:.75em;display:inline-block;}
#linked-posts{float:left;width:100%;margin:30px 0;}
#linked-posts ul{margin-top:15px;display:inline-block;padding:0;list-style-type:none;}
.linked-posts-list li{background-color:#fff;width:50%;float:left;position:relative;margin:8px 0;padding:0;}
#linked-posts a{color:#696868;text-decoration:none;display:block;margin:10px;box-shadow:0 1px 3px 0 rgba(0,0,0,.1);}
#linked-posts ul li p{margin-bottom:0;display:block;position:absolute;width:auto;bottom:0;margin:auto;}
#linked-posts .related_img{height:100%;margin-bottom:0;width:100%;object-fit:fill;background:none;border:0;border-radius:0;padding:0;margin:0;transition:all 1.5s ease;opacity:0.7;}
.linked-title{padding:27px 20px;font-size:19px;display:block;text-align:left;line-height:22px;color:#fff;}
.linked-thumb{float:left;height:250px;width:100%;background-color:#000;overflow:hidden;}
.linked-posts-list li:hover img{-webkit-filter:brightness(120%) hue-rotate(45deg);filter:brightness(120%) hue-rotate(45deg);}
/*=====================================
= Footer Widgets
=====================================*/
.footer-widget-box{float:left;}
#footer-widgets .footer-widget-box-first{width:36.66%;}
#footer-widgets .footer-widget-box-middle{width:30%;}
#footer-widgets .footer-widget-box-last{width:33.33%;}
#footer-widgets .footer-widget-box-first .widget-container{padding:0;}
#footer-widgets .widget-container{color:transparent;margin:0;padding:0 0 0 40px;}
#footer-widgets h2,#footer-widgets .PopularPosts ul li{display:none;}
#footer-widgets .widget ul{list-style-type:none;list-style:none;margin:0;padding:0;}
#footer-widgets .widget ul li{padding:0 0 9px 0;margin:-4px 0 8px 0;}
#footer-widgets-containerback{margin:auto;padding:0 15px;}
.footersec{text-align:left;color:#333;font-size:13px;line-height:18px;}
.footersec .widget{margin-bottom:20px;}
#footer-widgets-container{background:#fff;float:none;width:100%;padding:40px 0;max-width:1350px;margin:auto;display:inline-block;}
#footer-widgets .PopularPosts ul li:nth-child(1),#footer-widgets .PopularPosts ul li:nth-child(2),#footer-widgets .PopularPosts ul li:nth-child(3),#footer-widgets .PopularPosts ul li:nth-child(4){display:block!important;}
/*=====================================
= Back To Top
=====================================*/
.back-to-top{cursor:pointer;float:right;display:none;color:#444!important;font-size:22px;width:50px;height:50px;line-height:50px;z-index:9;text-align:center;margin-right:30px}
/*=====================================
= Media Responsive
=====================================*/
@media screen and (max-width:1200px) {
#main-wrapper{width:65%;}
#rsidebar-wrapper{width:30%;}
.search-box-wrapper{width:26%;}
}
@media screen and (max-width:1100px) {
#footer-widgets-container{max-width:800px;}
#footer-widgets .footer-widget-box-first{width:100%!important;}
#footer-widgets .footer-widget-box{width:50%;}
#footer-widgets .footer-widget-box-middle .widget-container{padding:0;}
}
@media screen and (max-width:1024px) {
#header{text-align:center;width:100%;height:auto;padding-top:30px;}
.ad-section{width:100%;height:auto;padding:30px 0;}
.ad-section .widget{float:none;margin:auto;}
#nav{display:none;}
.selectnav{display:block;}
li.home-child{float:left;margin-right:10px;}
#outer-wrapper{width:95%;margin-top:40px;}
#main-wrapper{width:100%;margin-left:0;}
#rsidebar-wrapper{width:100%;float:none;margin-top:40px;margin-right:0;}
.sidebar .popular-posts ul li{max-width:50%!important;float:left;margin:0;}
.sidebar .PopularPosts .item-content{display:block;margin:5px;}
.sidebar .PopularPosts .item-title{margin:0 5px;}
.sidebar .PopularPosts ul li:nth-child(2){font-weight:700;list-style:none!important;overflow:hidden;padding:0!important;position:relative;border:0;height:380px;margin-bottom:25px;}
.sidebar .PopularPosts ul li:nth-child(2) .item-thumbnail{margin:0;width:100%;height:100%;}
.sidebar .PopularPosts ul li:nth-child(1){background-color:transparent!important;}
.sidebar .PopularPosts ul li:nth-child(1) .item-content{margin-right:5px!important;}
.sidebar .PopularPosts ul li:nth-child(2) .item-content{margin-left:5px!important;}
.sidebar .PopularPosts ul li:nth-child(2) .item-content,.sidebar .PopularPosts ul li:nth-child(1) .item-content{margin:0;background-color:#000;display:inline-block;}
.sidebar .PopularPosts ul li:nth-child(2) img{display:block;float:left;padding:0;width:100%;height:380px;border-radius:0;opacity:0.7;}
.sidebar .PopularPosts ul li:nth-child(2) .item-title{bottom:175px;position:absolute;width:100%;margin:0;height:65px;}
.sidebar .PopularPosts ul li:nth-child(2) .item-title a{background:transparent;display:block;font-size:23px;padding:0 25px;color:#fff;font-weight:normal;line-height:1.364;height:65px;overflow:hidden;}
.sidebar .PopularPosts ul li:nth-child(2) .item-title:before{display:none;}
.sidebar .PopularPosts ul li:nth-child(2) .item-snippet{position:absolute;bottom:30px;color:#fff;line-height:1.600;font-size:18px;padding:15px 25px;display:inline-block;margin:0;z-index:9;float:left;left:0;font-weight:normal;}
}
@media screen and (max-width:900px) {
.news .recent-title{padding-right:15px;}
#xoai6-search{display:block;}
.search-box-wrapper{display:none;}
.news{width:85%;}
#headyer,.menu{padding:0 50px;}
.about_admin img{float:none;}
.about_admin-bg{padding:0 0;display:inline-block;margin-left:0;}
.admin_rank{text-align:center;}
.admin_pic{padding:0;margin-right:0;width:100%;margin-bottom:-70px;}
.admin_name{padding:10px 0;text-align:center;margin:auto;width:100%;float:left;margin-top:70px;}
.about_admin p{padding:0 30px 50px 30px;text-align:center;float:left;overflow:visible;height:auto;}
}
@media screen and (max-width:800px) {
select.selectnav{padding-left:20px;width:200px;}
#outer-wrapper{margin-top:30px;}
.news-title:before{content:"\f115";margin:0 10px 0 25px;display:inline-block;float:left;color:#333;font-size:20px;padding:11px 0;}
.news-title h2:after,.news-title h2,.news .recent-date,.comments .comments-content .datetime a{display:none;}
.comments .avatar-image-container{float:none;margin:0 auto -25px auto;}
}
@media screen and (max-width:640px) {
.linked-posts-list li{width:100%;}
.sidebar .popular-posts ul li{max-width:100%!important;width:100%;}
.sidebar .PopularPosts ul li:nth-child(1),.sidebar .PopularPosts ul li:nth-child(2){margin-bottom:15px!important;}
#footer-widgets .FollowByEmail .widget-content{margin:20px 0 0 0;}
#footer-widgets .footer-widget-box{width:100%;}
#footer-widgets .widget-container{padding:0;}
#outer-wrapper{margin-top:20px;}
.home-share li{margin:8px 2px;}
.home-share li a{width:67px;height:57px;line-height:57px;}
#headyer{padding:0 10px;}
.menu{padding:0 20px;}
select.selectnav{width:auto;}
.popular-posts ul li{max-width:100%!important;}
.post-title{font-size:30px;}
.comments .comment-block{padding:20px!important;}
.comments .comments-content .comment-header,.comments .comments-content .comment-content{margin-left:0!important;display:inline-block;margin-top:12px;}
.comments .avatar-image-container{margin:16px 15px 10px 20px;}
.comments .comment .comment-actions a{margin-left:0!important;}
#comment-post-message{text-align:left;width:100%;margin-top:0!important;border-top:solid 1px #fff;border-left:0;}
#comment-post-message:before{margin-left:50px;}
.gooye-facebook,.gooye-google,.gooye-pinterest,.gooye-twitter,.gooye-linkedin,.gooye-open-button{-webkit-transform:translate3d(98px,0,0);transform:translate3d(98px,0,0);}
.gooye-facebook,.gooye-google,.gooye-pinterest,.gooye-twitter,.gooye-linkedin,.gooye-open-button,.gooye-comment-button{width:40px;height:40px;line-height:40px;}
.gooye-comment-count{-webkit-transform:translate3d(49px,0,0);transform:translate3d(49px,0,0);}
.gooye-open-button{-webkit-transform:translate3d(98px,0,0);transform:translate3d(98px,0,0);}
.gooye-open:checked ~ .gooye-facebook{-webkit-transform:translate3d(147px,0,0);transform:translate3d(147px,0,0);}
.gooye-open:checked ~ .gooye-google{-webkit-transform:translate3d(196px,0,0);transform:translate3d(196px,0,0);}
.gooye-open:checked ~ .gooye-twitter{-webkit-transform:translate3d(245px,0,0);transform:translate3d(245px,0,0);}
.gooye-open:checked ~ .gooye-linkedin{-webkit-transform:translate3d(294px,0,0);transform:translate3d(294px,0,0);}
.gooye-open:checked ~ .gooye-pinterest{-webkit-transform:translate3d(343px,0,0);transform:translate3d(343px,0,0);}
}
@media screen and (max-width:440px) {
.back-to-top {display:none!important;}
#comment-post-message,#comments h4{font-size:20px!important;}
.about_admin p{padding:0 15px 50px 15px;}
.about_admin img{height:140px;width:140px;}
.gooye-open-button{-webkit-transform:translate3d(0px,0,0);transform:translate3d(0px,0,0);}
.gooye-open:checked ~ .gooye-facebook{-webkit-transform:translate3d(52px,0,0);transform:translate3d(52px,0,0);}
.gooye-open:checked ~ .gooye-google{-webkit-transform:translate3d(104px,0,0);transform:translate3d(104px,0,0);}
.gooye-open:checked ~ .gooye-twitter{-webkit-transform:translate3d(156px,0,0);transform:translate3d(156px,0,0);}
.gooye-open:checked ~ .gooye-linkedin{-webkit-transform:translate3d(208px,0,0);transform:translate3d(208px,0,0);}
.gooye-open:checked ~ .gooye-pinterest{-webkit-transform:translate3d(260px,0,0);transform:translate3d(260px,0,0);}
.gooye-facebook,.gooye-google,.gooye-pinterest,.gooye-twitter,.gooye-linkedin,.gooye-open-button{-webkit-transform:translate3d(0px,0,0);transform:translate3d(0px,0,0);}
.post-summary h3{font-size:22px!important;}
.top-social a i{font-size:19px;}
.menu{padding:0 10px;}
li.home-child{margin-right:0!important;}
select.selectnav{padding-left:0;}
.gooye-comment-count,.gooye-comment-button,.like-title:after{display:none;}
.gooye-facebook,.gooye-google,.gooye-pinterest,.gooye-twitter,.gooye-linkedin,.gooye-open-button,.gooye-comment-button{width:43px;height:43px;line-height:43px;}
}
@media screen and (max-width:355px) {
.like-title:before{display:none;}
.linked-thumb{height:220px;}
.FeaturedPost img{height:300px;}
.top-social li a{width:23px;}
.sidebar .PopularPosts ul li:nth-child(1) .item-title,.sidebar .PopularPosts ul li:nth-child(2) .item-title{bottom:25px!important;height:auto!important;}
.sidebar .PopularPosts ul li:nth-child(1) .item-title a,.sidebar .PopularPosts ul li:nth-child(2) .item-title a{font-size:17px!important;max-height:70px!important;height:auto!important;}
.sidebar .PopularPosts ul li:nth-child(1),.sidebar .PopularPosts ul li:nth-child(2),.sidebar .PopularPosts ul li:nth-child(1) img,.sidebar .PopularPosts ul li:nth-child(2) img{height:280px;}
.PopularPosts ul li{height:auto;}
.PopularPosts .item-content{display:inline-block!important;}
.PopularPosts ul li:nth-child(1) .item-snippet,.PopularPosts ul li:nth-child(2) .item-snippet,.PopularPosts .item-title:before{display:none!important;}
.PopularPosts .item-thumbnail,.PopularPosts ul li img{width:100%;height:180px;}
.gooye-open:checked ~ .gooye-facebook{-webkit-transform:translate3d(45px,0,0);transform:translate3d(45px,0,0);}
.gooye-open:checked ~ .gooye-google{-webkit-transform:translate3d(90px,0,0);transform:translate3d(90px,0,0);}
.gooye-open:checked ~ .gooye-twitter{-webkit-transform:translate3d(135px,0,0);transform:translate3d(135px,0,0);}
.gooye-open:checked ~ .gooye-linkedin{-webkit-transform:translate3d(180px,0,0);transform:translate3d(180px,0,0);}
.gooye-open:checked ~ .gooye-pinterest{-webkit-transform:translate3d(225px,0,0);transform:translate3d(225px,0,0);}
}

</style>
<style id="template-skin-1" type="text/css">
/*=====================================
= Layout Styles
=====================================*/
body#layout{width:950px;}
body#layout ul{list-style-type:none;list-style:none;}
body#layout ul li{list-style-type:none;list-style:none;}
body#layout #header-wrapper{display:inline-block;width:100%;}
body#layout .header,body#layout .ad-section{float:left;width:49%;margin-bottom:10px!important;margin-top:10px!important;}
body#layout .menu-sec{float:left;width:49%;}
body#layout .top-social{float:right;width:49%;}
body#layout .top-bar,body#layout .theme-options{display:inline-block!important;float:left;width:100%;margin-bottom:15px;}
body#layout .theme-options{margin-bottom:25px;}
body#layout .silk-panel.section h4{color:#fff;font-weight:normal;letter-spacing:0;}
body#layout .silk-panel.section{background-color:#555;}
body#layout .silk-panel .locked-widget .widget-content{border-left:0;}
body#layout .silk-panel .widget-content.visibility div.layout-title,body#layout .silk-panel .widget-content.visibility div.layout-widget-description{margin:0;}
body#layout .header,body#layout .top-menu{margin-right:7px!important;}
body#layout .top-social,body#layout .ad-section{margin-left:7px!important;}
body#layout .menu{float:right;width:100%;margin-bottom:10px!important;margin-top:10px!important;}
body#layout #outer-wrapper{overflow:visible;width:950px;padding:0;margin-top:0;margin-bottom:0;}
body#layout #main-wrapper{float:left;width:58%;padding:0;margin-top:15px!important;}
body#layout i,body#layout .header-section,body#layout #footer,body#layout nav{display:none;}
body#layout i.fa-user{display:inline-block;}
body#layout .visibility .editlink.icon{background-image:none!important;}
body#layout .add-icon,body#layout .visibility .layout-widget-state,body#layout .visibility .editlink.icon{height:auto!important;width:auto!important;}
body#layout .widget-content a{font-size:17px!important;border:solid 2px #555;padding:0 19px!important;text-decoration:none;color:#555!important;line-height:2!important;top:auto!important;border-radius:2px;}
body#layout .widget-content a:hover{border:solid 2px #05034d;color:#05034d!important;}
body#layout #rsidebar-wrapper{float:right;width:40%;margin-top:15px!important;}
body#layout div.section{margin:0;padding:0;position:relative;}
body#layout .add_widget{border:none!important;background-color:#fff;}
body#layout .locked-widget .widget-content{border-top:7px solid transparent;border-left:7px solid #555;border-right:7px solid transparent;border-bottom:7px solid transparent;background-color:#fff;margin-bottom:-10px;}
body#layout #footer-widgets-container{display:inline-block;float:left;width:100%;margin-bottom:20px;}
body#layout .footer-ad{width:99.80%;margin-bottom:0!important;margin-top:20px!important;margin-left:0!important;}
body#layout .footer-widget-box{width:33.33%;float:left;}
body#layout #footer-widgets .widget-container{padding:0;margin:0;}
body#layout .clearfix{margin-top:25px;}
body#layout .section-columns{margin:0;}
body#layout .widget-content{line-height:32px;margin-bottom:-10px;margin-top:16px;box-shadow:none!important;}
body#layout .section h4{margin:15px 0 0;padding:0 15px;text-transform:capitalize;letter-spacing:1px;font-size:17px;}
body#layout .draggable-widget .widget-wrap2{background-color:#555!important;}
body#layout .admin-panel{display:inline-block;border-top:7px solid transparent;border-left:7px solid #555;border-right:7px solid #555;border-bottom:7px solid transparent;background:#fff;color:#333;width:98.5%;padding:20px 0;margin-top:35px;float:left;position:relative;font-family:sans-serif;letter-spacing:1px;margin-bottom:35px;font-size:23px;}
body#layout .admin-panel:after{content:'TemplateSilk Admin Panel';margin-left:5px;}
body#layout #layout-logo{background:url(https://3.bp.blogspot.com/-HKc2vekkiH8/V3Dw-2ANLWI/AAAAAAAAJSg/qLyZ5f-B21Ycxv4w_H9ZERC9tuANYmLnACLcB/s320/TemplateSilk-3rdlogo.png) no-repeat;height:94px!important;width:132px;float:right!important;display:block;overflow:hidden;margin-right:50px;margin-top:-90px;}
</style>

<script src="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/jquery.min.js.download" type="text/javascript"></script>

<script src="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/jquery.min.js.download" type="text/javascript"></script>

<link rel="stylesheet" href="assets/css/blog.min.css">
<link href="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/authorization.css" media="all" onload="if(media!=&#39;all&#39;)media=&#39;all&#39;" rel="stylesheet"><noscript><link href='https://www.blogger.com/dyn-css/authorization.css?targetBlogID=8301813360242143088&amp;zx=d7a822d1-a7ad-41f3-8c68-33e55caec168' rel='stylesheet'/></noscript>

</head>
<body class="index" itemscope="" itemtype="http://schema.org/BlogPosting" data-new-gr-c-s-check-loaded="14.988.0" data-gr-ext-installed="">
<div id="layout-logo"></div>
<div class="admin-panel"><i class="fa fa-user"></i></div>
<!-- Theme Options -->
<div class="theme-options" style="display:none">
<div class="silk-panel section" id="silk-panel" name="Theme Options"><div class="widget LinkList" data-version="2" id="LinkList70">

          <style type="text/css">


          </style>

</div></div>
</div>
<div id="ts-globe">
<!-- Globe [START] -->
<?php
	require 'includes/header.php';
?>
<!-- Navigation Bar [end] -->

<!-- Content Wrapper -->
<div id="outer-wrapper">
<div id="main-wrapper">
<div class="main section" id="main" name="Blog Posts"><div class="widget Blog" data-version="1" id="Blog1">
<div class="blog-posts hfeed">
<!--Can't find substitution for tag [defaultAdStart]-->
<div class="post-outer">
<div class="wrapfullpost">
<div class="post hentry">
<meta itemtype="https://schema.org/WebPage" itemid="https://newsnatorbloggertheme.blogspot.com/2018/08/a-new-protesting-story-reveals-new.html" itemprop="mainEntityOfPage" itemscope="">
<div itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<img src="./assets/img/toranto.jpg" style="display:none;">
<meta content="https://1.bp.blogspot.com/-F0k4070iZPg/W28JvufkgAI/AAAAAAAABHA/btRBddAMrE4cnybAYvMbab8MtRoAgui0QCLcBGAs/s640/7-4.jpg" itemprop="url">
<meta content="800" itemprop="width">
<meta content="800" itemprop="height">
</div>
<div class="turbo-box">
<a name="4867340620984877934"></a>
<div class="xoai6-overlay">
<div class="overlay-child-a">
</div>
<div class="overlay-child-b">
</div>
</div>
<div class="post-header-line-1"></div>
<div class="post-body entry-content" id="post-body-4867340620984877934" itemprop="articleBody">
  <h1 class="post-title entry-title">
  <?= $row['title']; ?>
  </h1>
  <div class="postmeta-primary">
    <div class="postmeta_author">
        <span class="author_name" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><span itemprop="name"><i class="fa fa-user-o"></i>
        <a href="#">Admin</a></span></span>
    </div>
    <div class="postmeta_clock">
      <span class="meta_date" itemprop="datePublished dateModified"><i class="fa fa-calendar-o"></i>
        <?= $row['date']; ?></span>
    </div>
    <div class="postmeta_label">
      <span class="meta_label"><i class="fa fa-folder-open-o"></i>
      <a href="index.php" rel="tag">Immigration</a></span>
    </div>
  </div>
  <div class="post-text">
    <div class="separator" style="clear: both; text-align: center;">
      <a href="../assets/web/img/blogs/<?= $row['pic']; ?>" imageanchor="1" style="margin-left: 1em; margin-right: 1em;">
        <img border="0" data-original-height="610" data-original-width="1600" height="244" src="../assets/web/img/blogs/<?= $row['pic']; ?>" width="640"></a>
    </div>
      <?= $row['text']; ?> <br>
  </div>
  <div style="clear: both;"></div>
</div>
</div>
<div class="gooye">
<span class="gooye-comment-button"><i class="fa fa-comments-o"></i></span>
<span class="gooye-comment-button gooye-comment-count">></span>
<input class="gooye-open" href="#" id="gooye-open" name="gooye-open" type="checkbox">
<!--label class="gooye-open-button" for="gooye-open">
<i class="fa fa-share-alt"></i>
</label>
<a class="gooye-facebook" href="http://www.facebook.com/sharer.php?u=https://newsnatorbloggertheme.blogspot.com/2018/08/a-new-protesting-story-reveals-new.html&amp;title=A%20New%20Protesting%20Story%20Reveals%20a%20New%20Business%20Plan" onclick="window.open(this.href, &#39;windowName&#39;, &#39;width=550, height=600, left=24, top=24, scrollbars, resizable&#39;); return false;" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a>
<a class="gooye-google" href="whatsapp://send?text=A New Protesting Story Reveals a New Business Plan &gt;&gt; https://newsnatorbloggertheme.blogspot.com/2018/08/a-new-protesting-story-reveals-new.html" rel="nofollow" target="_blank"><i class="fa fa-whatsapp"></i></a>
<a class="gooye-twitter" href="http://twitter.com/share?url=https://newsnatorbloggertheme.blogspot.com/2018/08/a-new-protesting-story-reveals-new.html&amp;title=A%20New%20Protesting%20Story%20Reveals%20a%20New%20Business%20Plan" onclick="window.open(this.href, &#39;windowName&#39;, &#39;width=550, height=600, left=24, top=24, scrollbars, resizable&#39;); return false;" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a>
<a class="gooye-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://newsnatorbloggertheme.blogspot.com/2018/08/a-new-protesting-story-reveals-new.html" onclick="window.open(this.href, &#39;windowName&#39;, &#39;width=550, height=600, left=24, top=24, scrollbars, resizable&#39;); return false;" rel="nofollow"><i class="fa fa-linkedin"></i></a>
<a class="gooye-pinterest" href="http://pinterest.com/pin/create/button/?url=https://newsnatorbloggertheme.blogspot.com/2018/08/a-new-protesting-story-reveals-new.html&amp;media=https://1.bp.blogspot.com/-F0k4070iZPg/W28JvufkgAI/AAAAAAAABHA/btRBddAMrE4cnybAYvMbab8MtRoAgui0QCLcBGAs/s72-c/7-4.jpg&amp;description=%20%20Today%20news%20about%20the%20falling%20economy%20of%20the%20European%C2%A0Union%C2%A0is%20going%20to%20be%20a%20headache%20for%20wall%20street%20wolfs%20who%20want%20to%20tick%20tack%20their%20inv..." onclick="window.open(this.href, &#39;windowName&#39;, &#39;width=550, height=600, left=24, top=24, scrollbars, resizable&#39;); return false;" rel="nofollow"><i class="fa fa-pinterest"></i></a-->
</div>
<div class="about_admin">
<!--div class="admin_pic">
<a href="http://sbsv.test/"><img alt="Step By Step Visas" src="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/ts-image.png"></a>
</div-->
<div class="about_admin-bg">
<a class="admin_name" href="http://sbsv.test/">About Author</a>
<p class="admin_info">Step by Step Visas is an immigration service company in Toronto, Canada. Directed and owned by Christian Levi a Regulated Canadian Immigration Consultant, a member of the Immigration Consultants of Canada Regulatory Authority (ICCRC).</p>
</div>
</div>
<div id="linked-posts">
<script src="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/news" type="text/javascript"></script>
<script src="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/politics" type="text/javascript"></script>
<script type="text/javascript">
var findcurrentposturl="https://newsnatorbloggertheme.blogspot.com/2018/08/a-new-protesting-story-reveals-new.html";
var maxpost=4;
var titleofrelatedpost="You may also like";
removeDuplicate_thumbs();
printRelatedLabel_thumbs();
</script>
<h3 class="like-title">Recent Posts</h3>
<ul class="linked-posts-list">
  <?php
    $sql = "SELECT * FROM blogs where id != ". $_GET['b_code'] ." ORDER BY id DESC LIMIT 2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) { ?>
        <li><a href="blog.php?b_code=<?= $row['id']; ?>">
          <span class="linked-thumb">
            <img class="related_img" src="../assets/web/img/blogs/<?= $row['pic']; ?>">
          </span>
          <p><span class="linked-title"><?= substr(strip_tags($row['title']),0,50) . '...'; ?></span></p></a>
        </li>
      <?php }
    } else {
      echo "Nothing right now.";
    }
?>
</ul>
</div>
<div class="post-footer">
<div class="post-footer-line post-footer-line-"></div>
<div class="post-footer-line post-footer-line-2"></div>
<div class="post-footer-line post-footer-line-3">
</div></div>
</div>
</div>
<div class="blog-pager" id="blog-pager">
<span id="blog-pager-older-link">
<a class="blog-pager-older-link" href="https://newsnatorbloggertheme.blogspot.com/2018/08/green-sea-penguins-seeing-rare-national.html" id="Blog1_blog-pager-older-link" title="Older Post">Next <i class="fa fa-arrow-right"></i></a>
</span>
</div>
<div class="clear"></div>
<div class="comments" id="comments">
<a name="comments"></a>
<h4>
comments:

</h4>
<div class="comments-content">
<script async="async" src="https://newsnatorbloggertheme.blogspot.com/2018/08/a-new-protesting-story-reveals-new.html" type="text/javascript"></script>
<script type="text/javascript">
    (function() {
      var items = null;
      var msgs = null;
      var config = {};

// <![CDATA[
      var cursor = null;
      if (items && items.length > 0) {
        cursor = parseInt(items[items.length - 1].timestamp) + 1;
      }

      var bodyFromEntry = function(entry) {
        if (entry.gd$extendedProperty) {
          for (var k in entry.gd$extendedProperty) {
            if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
              return '<span class="deleted-comment">' + entry.content.$t + '</span>';
            }
          }
        }
        return entry.content.$t;
      }

      var parse = function(data) {
        cursor = null;
        var comments = [];
        if (data && data.feed && data.feed.entry) {
          for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
            var comment = {};
            // comment ID, parsed out of the original id format
            var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
            comment.id = id ? id[2] : null;
            comment.body = bodyFromEntry(entry);
            comment.timestamp = Date.parse(entry.published.$t) + '';
            if (entry.author && entry.author.constructor === Array) {
              var auth = entry.author[0];
              if (auth) {
                comment.author = {
                  name: (auth.name ? auth.name.$t : undefined),
                  profileUrl: (auth.uri ? auth.uri.$t : undefined),
                  avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                };
              }
            }
            if (entry.link) {
              if (entry.link[2]) {
                comment.link = comment.permalink = entry.link[2].href;
              }
              if (entry.link[3]) {
                var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                if (pid && pid[1]) {
                  comment.parentId = pid[1];
                }
              }
            }
            comment.deleteclass = 'item-control blog-admin';
            if (entry.gd$extendedProperty) {
              for (var k in entry.gd$extendedProperty) {
                if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                  comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                }
              }
            }
            comments.push(comment);
          }
        }
        return comments;
      };

      var paginator = function(callback) {
        if (hasMore()) {
          var url = config.feed + '?alt=json&v=2&orderby=published&reverse=false&max-results=50';
          if (cursor) {
            url += '&published-min=' + new Date(cursor).toISOString();
          }
          window.bloggercomments = function(data) {
            var parsed = parse(data);
            cursor = parsed.length < 50 ? null
                : parseInt(parsed[parsed.length - 1].timestamp) + 1
            callback(parsed);
            window.bloggercomments = null;
          }
          url += '&callback=bloggercomments';
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = url;
          document.getElementsByTagName('head')[0].appendChild(script);
        }
      };
      var hasMore = function() {
        return !!cursor;
      };
      var getMeta = function(key, comment) {
        if ('iswriter' == key) {
          var matches = !!comment.author
              && comment.author.name == config.authorName
              && comment.author.profileUrl == config.authorUrl;
          return matches ? 'true' : '';
        } else if ('deletelink' == key) {
          return config.baseUri + '/delete-comment.g?blogID='
               + config.blogId + '&postID=' + comment.id;
        } else if ('deleteclass' == key) {
          return comment.deleteclass;
        }
        return '';
      };

      var replybox = null;
      var replyUrlParts = null;
      var replyParent = undefined;

      var onReply = function(commentId, domId) {
        if (replybox == null) {
          // lazily cache replybox, and adjust to suit this style:
          replybox = document.getElementById('comment-editor');
          if (replybox != null) {
            replybox.height = '250px';
            replybox.style.display = 'block';
            replyUrlParts = replybox.src.split('#');
          }
        }
        if (replybox && (commentId !== replyParent)) {
          document.getElementById(domId).insertBefore(replybox, null);
          replybox.src = replyUrlParts[0]
              + (commentId ? '&parentID=' + commentId : '')
              + '#' + replyUrlParts[1];
          replyParent = commentId;
        }
      };

      var hash = (window.location.hash || '#').substring(1);
      var startThread, targetComment;
      if (/^comment-form_/.test(hash)) {
        startThread = hash.substring('comment-form_'.length);
      } else if (/^c[0-9]+$/.test(hash)) {
        targetComment = hash.substring(1);
      }

      // Configure commenting API:
      var configJso = {
        'maxDepth': config.maxThreadDepth
      };
      var provider = {
        'id': config.postId,
        'data': items,
        'loadNext': paginator,
        'hasMore': hasMore,
        'getMeta': getMeta,
        'onReply': onReply,
        'rendered': true,
        'initComment': targetComment,
        'initReplyThread': startThread,
        'config': configJso,
        'messages': msgs
      };

      var render = function() {
        if (window.goog && window.goog.comments) {
          var holder = document.getElementById('comment-holder');
          window.goog.comments.render(holder, provider);
        }
      };

      // render now, or queue to render when library loads:
      if (window.goog && window.goog.comments) {
        render();
      } else {
        window.goog = window.goog || {};
        window.goog.comments = window.goog.comments || {};
        window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
        window.goog.comments.loadQueue.push(render);
      }
    })();
// ]]>
  </script>
<div id="comment-holder">
<div class="comment-thread toplevel-thread">
  <ol id="top-ra">
    <?php
    $sql = "SELECT * FROM comments where bid = " . $_GET['b_code'];
  	$result = $conn->query($sql);

  	if ($result->num_rows > 0) {
  		// output data of each row
  		while($row = $result->fetch_assoc()) { ?>
  <li class="comment" id="c8549863463351711277">
      <div class="avatar-image-container">
          <img src="assets/img/comment_avator.jpg" alt="" width="740" height="740" />
      </div>
      <div class="comment-block">
          <div class="comment-header">
              <cite class="user"> <a href="#" rel="nofollow"><?= $row['email']; ?></a></cite>
              <span class="icon user"></span>
              <span class="datetime secondary-text">
                  <a rel="nofollow" href="#"><?= $row['date']; ?></a>
              </span>
          </div>
          <p class="comment-content">
              <a href="#" rel="nofollow"><?= $row['text']; ?></a>
          </p>

      </div>

  </li>
<?php }
} else {
echo "";
}
?>
  </ol>
  <div class="follow-by-email-inner">
    <iframe src="includes/comment.php?b_code=<?= $_GET['b_code']?>" style="width: 100%;height: 323px;border: 0;overflow: hidden;"></iframe>
  </div>

</div>
</div>
</div>
<p class="comment-footer">
</p><div class="comment-form">
<a name="comment-form"></a>
<p>
</p>
<a href="https://www.blogger.com/comment-iframe.g?blogID=8301813360242143088&amp;postID=4867340620984877934&amp;blogspotRpcToken=2265852" id="comment-editor-src"></a>

<!--Can't find substitution for tag [post.friendConnectJs]-->
<script src="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/3858658042-comment_from_post_iframe.js.download" type="text/javascript"></script>
<script type="text/javascript">
      BLOG_CMT_createIframe('https://www.blogger.com/rpc_relay.html', '0');
    </script>
</div>
<p></p>
<div id="backlinks-container">
<div id="Blog1_backlinks-container">
</div>
</div>
</div>
</div>
<!--Can't find substitution for tag [adEnd]-->
</div>
<div class="post-feeds">
<div class="feed-links">
Subscribe to:
<a class="feed-link" href="https://newsnatorbloggertheme.blogspot.com/feeds/4867340620984877934/comments/default" target="_blank" type="application/atom+xml">Post Comments (Atom)</a>
</div>
</div>
</div></div>
</div>
<div id="rsidebar-wrapper" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
<div class="sidebar section" id="sidebar"><div class="widget PopularPosts" data-version="1" id="PopularPosts1">
<h2>Popular Posts</h2>
<div class="widget-content popular-posts">
<ul>
  <?php
  $sql = "SELECT * FROM blogs ORDER BY RAND() LIMIT 5";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <li>
      <div class="item-content">
      <div class="item-thumbnail">
      <a href="blog.php?b_code=<?= $row['id']; ?>">
      <img alt="" border="0" src="../assets/web/img/blogs/<?= $row['pic']; ?>">
      </a>
      </div>
      <div class="item-title">
        <a href="blog.php?b_code=<?= $row['id']; ?>"><?= $row['title']; ?></a></div>
      <div class="item-snippet"><?= substr(strip_tags($row['text']),0,100) . '...'; ?></div>
      </div>
      <div style="clear: both;"></div>
      </li>
    <?php }
  } else {
    echo "Nothing right now.";
  }
   ?>
</ul>
<div class="clear"></div>

<div class="clear"></div>
</div>
</div><div class="widget FollowByEmail" data-version="1" id="FollowByEmail1">
<h2 class="title">Follow by Email</h2>
<div class="widget-content">
<div class="follow-by-email-inner">
<form action="includes/add_sub.php" method="post" >
<table width="100%">
<tbody><tr>
<td>
<input class="follow-by-email-address" name="email" placeholder="Email address..." type="email" required>
</td>
<td width="64px">
<input class="follow-by-email-submit" type="submit" name="submit" value="Submit">
</td>
</tr>
</tbody></table>
<input name="uri" type="hidden" value="Newsnator">
<input name="loc" type="hidden" value="en_US">
</form>
</div>
</div>
<span class="item-control blog-admin">
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://www.blogger.com/rearrange?blogID=8301813360242143088&amp;widgetType=FollowByEmail&amp;widgetId=FollowByEmail1&amp;action=editWidget&amp;sectionId=sidebar" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;FollowByEmail1&quot;));" rel="nofollow" target="configFollowByEmail1" title="Edit">
<img alt="" height="18" src="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</span>
</div><div class="widget Label" data-version="1" id="Label1">
<h2>Categories</h2>
<div class="widget-content list-label-widget-content">
<ul>
<li>
<a dir="ltr" href="index.php">Immigration</a>
<span dir="ltr">(2)</span>
</li>
</ul>
<div class="clear"></div>
<span class="widget-item-control">
<span class="item-control blog-admin">
<a class="quickedit" href="https://www.blogger.com/rearrange?blogID=8301813360242143088&amp;widgetType=Label&amp;widgetId=Label1&amp;action=editWidget&amp;sectionId=sidebar" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;Label1&quot;));" rel="nofollow" target="configLabel1" title="Edit">
<img alt="" height="18" src="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/icon18_wrench_allbkg.png" width="18">
</a>
</span>
</span>
<div class="clear"></div>
</div>
</div></div>
</div>
</div>
<div class="ad-section footer-ad section" id="footer-ad" name="Footer Ad"><div class="widget HTML" data-version="1" id="HTML123">
<div class="clear"></div>

<div class="clear"></div>
</div></div>

<!-- Footer Widgets -->

</div>


<!-- Footer [start] -->
<?php
	require 'includes/footer.php';
?>
<!-- Footer [end] -->

<script asyne="" src="./Newsnator_files/shortcode.js.download"></script>

<script type="text/javascript" src="./Newsnator_files/2195516358-widgets.js.download"></script>



<script type="text/javascript" src="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/2566653647-widgets.js.download"></script>


<link type="text/css" rel="stylesheet" href="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/368954415-lightbox_bundle.css"><script type="text/javascript" src="./A New Protesting Story Reveals a New Business Plan _ Newsnator_files/3411022713-lbx.js.download"></script>
</body>
</html>
