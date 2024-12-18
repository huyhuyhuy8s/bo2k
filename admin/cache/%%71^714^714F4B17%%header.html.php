<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:49:35
compiled from header.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zeuscart Admin Control Panel
<?php echo $this->_tpl_vars['pagetitle']; ?>
</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrapSwitch.css">
<link href="assets/css/datepicker.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/chosen.css" />
<link rel="stylesheet" href="assets/css/custom.css" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() {
var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() {
var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_findObj(n, d) {
var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() {
var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dataTables.js"></script>
<script src="assets/js/bootstrap.dataTables.js"></script>
<script src="assets/js/ckeditor.js"></script>
<script src="assets/js/jquery.flot.js"></script>
<script src="assets/js/jquery.flot.resize.js"></script>
<script src="assets/js/jquery.flot.pie.js"></script>
<script src="assets/js/jquery.flot.orderBars.js"></script>
<script src="assets/js/jquery.flot.tooltip.js"></script>
<script src="assets/js/jquery.flot.time.js"></script>
<script src="assets/js/bootstrapSwitch.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/chosen.jquery.js" type="text/javascript"></script>
</head>
<body>
<div id="wrap">
<div class="clsBody">
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a class="brand" href="?do=adminlogin&action=validatelogin"></a>
<div class="nav-collapse collapse">
<ul class="nav">
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Orders <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="?do=disporders">Order List</a></li>
<!--<li><a href="?do=orderstatus">Order status Management</a></li>-->
<li><a href="?do=userorder">Create Order</a></li>
<li><a href="?do=orexp">Export Order</a></li>
</ul>
</li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customers <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="?do=adminreg">View Customers</a></li>
<li><a href="?do=addUserAccount">Create Customer</a></li>
<li><a href="?do=custgroup">Customer Group Management</a></li>
<li><a href="?do=custreport">Export Customer</a></li>
</ul>
</li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catalog <b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products </a>
<ul class="dropdown-menu">
<li><a href="?do=manageproducts">View Products</a></li>
<li><a href="?do=selectfeatured">Featured Products</a></li>
<li><a href="?do=adminproductreview">Product Reviews</a></li>
<li><a href="?do=productinventory">Inventory</a></li>
<li><a href="?do=bulkupload">Products Bulk Upload</a></li>
<li><a href="?do=bulkupload&action=displayimagesbulkupload">Images Bulk Upload</a></li>
<li><a href="?do=prodexp">Export Product</a></li>
</ul>
</li>
<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Attributes </a>
<ul class="dropdown-menu">
<li><a href="?do=attributes">Attribute</a></li>
<li><a href="?do=attributevalues">Attribute Value </a></li>
</ul>
</li>
<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories </a>
<ul class="dropdown-menu">
<li><a href="?do=showmain">Category</a></li>
<li><a href="?do=catexp">Category Export </a></li>
<li><a href="?do=catbulkupload">Category Bulk Upload </a></li>
</ul>
</li>
</ul>
</li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Site Settings </a>
<ul class="dropdown-menu">
<li><a href="?do=site">Site Settings</a></li>
<li><a href="?do=selectskin">Site Skin</a></li>
<li><a href="?do=banner">Home Page Banner</a></li>
</ul>
</li>
<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Footer Settings </a>
<ul class="dropdown-menu">
<li><a href="?do=footersettings&action=connect">Footer Management </a></li>
</ul>
</li>
<li><a href="?do=mailmessages">Mail Settings</a></li>
<li><a href="?do=sociallink">Social Link Settings</a></li>
<li><a href="?do=adminpayment">
<!--View-->
Payment Settings</a></li>
<li><a href="?do=taxsettings">
<!--View-->
Tax Settings</a></li>
<li><a href="?do=showcurrencylist">
<!--View-->
Currency Settings</a></li>
<li><a href="?do=showshipmenttracker">
<!--View-->
Shipping Methods</a></li>
<!--<li><a href="?do=cse">CSE Settings</a></li>-->
<li><a href="?do=livechat">Live Chat Settings</a></li>
</ul>
</li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coupons <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="?do=createpromotionalcodes&action=listcoupons">Coupons</a></li>
<li><a href="?do=gadsense">Google AdSense Code</a></li>
<li><a href="?do=adword">Google AdWord Campaign</a></li>
<li><a href="?do=googleproduct">Google Base Data Feed </a></li>
</ul>
</li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">SubAdmins <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="?do=subadminmgt">Sub Admin Management</a></li>
</ul>
</li>
<!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Business Intelligence <b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Orders </a>
<ul class="dropdown-menu">
<li><a href="?do=showchart&id=4">Pending Orders</a></li>
<li><a href="?do=showchart&id=5">Processing Orders</a></li>
<li><a href="?do=showchart&id=6">Awaiting Payment</a></li>
<li><a href="?do=showchart&id=1">Completed Orders</a></li>
<li><a href="?do=showchart&id=7">Quantity Break Down</a></li>
</ul>
</li>
<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products </a>
<ul class="dropdown-menu">
<li><a href="?do=showchart&id=9">Products Sold <br />
(By Units)</a></li>
<li><a href="?do=showchart&id=10">Products Sold <br />
(By Revenue)</a></li>
<li><a href="?do=showchart&id=8">Best Selling Products</a></li>
</ul>
</li>
<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customers </a>
<ul class="dropdown-menu">
<li><a href="?do=showchart&id=2">New Customers</a></li>
<li><a href="?do=showchart&id=11">Customers<br />
(By Location)</a></li>
<li><a href="?do=showchart&id=12">Customers Seniority</a></li>
</ul>
</li>
</ul>
</li>-->
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">CMS <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="?do=dynamiccms&action=show">Create Dynamic page</a></li>
<!-- <li><a href="?do=createpage">Custom Pages List</a></li> -->
<li><a href="?do=terms">Terms & Conditions</a></li>
<li><a href="?do=adminprivacypolicy">Privacy Policy</a></li>
<li><a href="?do=faq">FAQs</a></li>
<!--  <li><a href="?do=showcontents">Html Contents</a></li>-->
<li><a href="?do=aboutus">About Us</a></li>
</ul>
</li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others <b class="caret"></b></a>
<ul class="dropdown-menu">
<!-- <li><a href="?do=menus">Menus</a></li>-->
<!--  <li><a href="?do=homepageads">Home Page Ads</a></li>
<li> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home Page Settings</a>
<ul class="dropdown-submenu">
<li><a href="?do=dynamiccms&action=show">About Us</a></li>
<li><a href="?do=terms">Shipping </a></li>
</ul>
</li>
-->
<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home Page Settings</a>
<ul class="dropdown-menu">
<li><a href="?do=homepageads">Home Page Ads</a></li>
<li><a href="?do=homepage&action=content">Home Page Content</a></li>
</ul>
</li>
<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">News Letter </a>
<ul class="dropdown-menu">
<li><a href="?do=newsletter&action=show">View</a></li>
<li><a href="?do=newsletter&action=subscrib">Subscribed Users</a></li>
</ul>
</li>
<li><a href="?do=news&action=show">News Management</a></li>
<li><a href="?do=mostsearchedkeywords">Most Searched Keywords</a></li>
<li><a href="?do=bestsellingproducts">Best Selling Products</a></li>
<li><a href="?do=activity">Admin Activity Report</a></li>
<li><a href="?do=admactexp">Admin Activity Export</a></li>
<li><a href="?do=siteinfo">Server Information</a></li>
</ul>
</li>
</ul>
</div>
<!--/.nav-collapse -->
</div>
</div>
</div>
<header>
<div class="container">
<div class="row">
<div class="span6">
<div class="logo"><a href="?do=adminlogin&amp;action=validatelogin"><img src="images/logo.gif" alt="Zeuscart Logo" width="200" height="77" border="0" title="Admin Home" /></a></div>
</div>
<div class="span6">
<div class="clsuser">
<div class="user-info">
<p align="right">Welcome, <strong>
<?php echo $this->_tpl_vars['username']; ?>
</strong>
<?php echo $this->_tpl_vars['currentDate']; ?>
</p>
<ul>
<li><a href="?do=adminprofile" class="top_links">Admin Profile</a></li>
<li>.</li>
<li><a href="?do=sitemap" class="top_links">Admin Map</a></li>
<li>.</li>
<li><a href="../" class="top_links" target="_blank">Storefront</a></li>
<li>.</li>
<!-- <li><a href="../manuals/index.html" class="top_links">Help</a></li>-->
<!-- <li>.</li>-->
<li><a href="?do=adminlogout" class="top_links">Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</header>
<div id="selContent" class="clearfix">
<div class="container">
<?php 
   $op=explode("\n", ob_get_contents());
   ob_clean();
    foreach($op as $p)		
	{
		if(trim($p)!="")
			echo trim($p)."\n"; 
		ob_flush();
	}
?>