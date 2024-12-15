<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:27:25
compiled from index.html */ ?>
<!doctype html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<?php echo $this->_tpl_vars['pagetitle']; ?>
<!-- Le styles -->
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/style.css" rel="stylesheet">
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/responsive.css" rel="stylesheet">
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/docs.css" rel="stylesheet">
<?php if ($this->_tpl_vars['skinname'] == 'default'): ?>
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/menu.css" rel="stylesheet" type="text/css" />
<?php else: ?>
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/<?php echo $this->_tpl_vars['skinname']; ?>
/<?php echo $this->_tpl_vars['skinname']; ?>
/css/menu.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/jquery.min.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/jquery.cycle.all.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $_SESSION['base_url']; ?>
/assets/js/jquery-hover-effect.js"></script>
<script type="text/javascript">
//Image Hover
jQuery(function() {
jQuery('ul.da-thumbs > li').hoverdir();
});
</script>
<!--banner-->
<link rel='stylesheet' id='camera-css'  href='<?php echo $_SESSION['base_url']; ?>
/assets/css/camera.css' type='text/css' media='all'>
<script type='text/javascript' src='<?php echo $_SESSION['base_url']; ?>
/assets/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='<?php echo $_SESSION['base_url']; ?>
/assets/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='<?php echo $_SESSION['base_url']; ?>
/assets/js/camera.min.js'></script>
<script>
jQuery(function(){
jQuery('#camera_wrap_1').camera({
height:  ' <?php echo $this->_tpl_vars['slideshowparameter']->slideshowheight; ?>
',
alignment: '<?php echo $this->_tpl_vars['slideshowparameter']->imagealignment; ?>
',
autoAdvance : <?php echo $this->_tpl_vars['slideshowparameter']->autoAdvance; ?>
,
pagination: <?php echo $this->_tpl_vars['slideshowparameter']->pagination; ?>
,
easing: '<?php echo $this->_tpl_vars['slideshowparameter']->easingeffect; ?>
',
navigation:<?php echo $this->_tpl_vars['slideshowparameter']->navigationbuttons; ?>
,
navigationHover:<?php echo $this->_tpl_vars['slideshowparameter']->shownavigation; ?>
,
slicedCols:<?php echo $this->_tpl_vars['slideshowparameter']->slicedcolumns; ?>
,
slicedRows:<?php echo $this->_tpl_vars['slideshowparameter']->slicedrows; ?>
,
slidingtime:<?php echo $this->_tpl_vars['slideshowparameter']->slidingtime; ?>
,
fx: '<?php echo $this->_tpl_vars['slideshowparameter']->transactioneffect; ?>
',
transPeriod:<?php echo $this->_tpl_vars['slideshowparameter']->slidingeffecttime; ?>
,
playPause:<?php echo $this->_tpl_vars['slideshowparameter']->pausebutton; ?>
,
pauseOnClick:<?php echo $this->_tpl_vars['slideshowparameter']->pauseonclick; ?>
,
loader:'<?php echo $this->_tpl_vars['slideshowparameter']->timertype; ?>
',
loaderColor: '<?php echo $this->_tpl_vars['slideshowparameter']->timercolor; ?>
',
loaderBgColor: '<?php echo $this->_tpl_vars['slideshowparameter']->timerbgcolor; ?>
',
pieDiameter:<?php echo $this->_tpl_vars['slideshowparameter']->piediameter; ?>
,
piePosition:'<?php echo $this->_tpl_vars['slideshowparameter']->pieposition; ?>
',
barDirection:'<?php echo $this->_tpl_vars['slideshowparameter']->timerbardirections; ?>
',
barPosition:'<?php echo $this->_tpl_vars['slideshowparameter']->timerbarposition; ?>
',
thumbnails: <?php echo $this->_tpl_vars['slideshowparameter']->thumbnails; ?>
});
});
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['base_url']; ?>
/assets/css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['base_url']; ?>
/assets/css/gallery.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['base_url']; ?>
/assets/themes/default/css/gallery-btn.css" />
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script>
function searchitem()
{
document.getElementById('searchtxt').value='';
}
</script>
<script type="text/javascript">
function searchSubmit()
{
var searchtext = document.getElementById('searchtxt').value;
if(searchtext=='')
{
document.getElementById('searchtxt').value='Search enter item name here ...';
}
if(searchtext!='Search enter item name here ...' && searchtext!='')
{
window.location = '<?php echo $_SESSION['base_url']; ?>
/index.php?do=search&search='+searchtext;
}
}
</script>
<script type="text/javascript">
function selectCurrency(id)
{
$.ajax({
type: "GET",
url: "<?php echo $_SESSION['base_url']; ?>
/index.php?do=changecurrency",
data: "id="+id,
success: function(result){
window.location.href=window.location.href;
}
});
}
</script>
</head>
<body >
<header>
<?php echo $this->_tpl_vars['install_error']; ?>
<div id="header">
<div id="top_menu">
<div class="container">
<div class="row-fluid">
<span class="visible-desktop">
<div class="span6">
<ul class="topmenu">
<li style="padding-left:0;"><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=dashboard"><?php   echo Core_CLanguage::_('MY_ACCOUNT');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=wishlist"><?php   echo Core_CLanguage::_('MY_WISHLIST');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=showcart"><?php   echo Core_CLanguage::_('MY_CART');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=showcart"><?php   echo Core_CLanguage::_('CHECKOUT');  ?></a></li>
<li><?php echo $this->_tpl_vars['loginStatus']['logout']; ?>
</li>
</ul>
</div>
<div class="span5">
<ul class="topmenu">
<li><a ><?php echo $this->_tpl_vars['currentDate']; ?>
</a></li>
<li><a ><?php echo $this->_tpl_vars['loginStatus']['username']; ?>
</a></li>
</ul>
</div>
<div class="span1"><?php echo $this->_tpl_vars['currencysettings']; ?>
</div>
</span>
<span class="hidden-desktop">
<div class="row-fluid">
<div class="span12">
<ul class="tabletmenu">
<li style="padding-left:10;"><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=dashboard"><?php   echo Core_CLanguage::_('MY_ACCOUNT');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=wishlist"><?php   echo Core_CLanguage::_('MY_WISHLIST');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=showcart"><?php   echo Core_CLanguage::_('MY_CART');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=showcart"><?php   echo Core_CLanguage::_('CHECKOUT');  ?></a></li>
<li><?php echo $this->_tpl_vars['loginStatus']['logout']; ?>
</li>
<li><a ><?php echo $this->_tpl_vars['currentDate']; ?>
</a></li>
<li><a ><?php echo $this->_tpl_vars['loginStatus']['username']; ?>
</a></li>
<li></li><?php echo $this->_tpl_vars['currencysettings']; ?>
</li></ul></div></div>
</span>
</div>
</div>
</div>
<div class="container">
<!--logo-->
<div id="logo_div">
<div class="row-fluid">
<span class="hidden-tablet">
<div class="span5"><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=index"><img src="<?php echo $_SESSION['base_url']; ?>
/<?php echo $this->_tpl_vars['sitelogo']; ?>
" alt="ZeusCart"></a></div>
<div class="span4">
<div class="input-append" style=" margin-top: 30px;">
<input style="width:170px; height:18px; overflow:hidden;"  name="search"  type="text" id="searchtxt" value="<?php if ($this->_tpl_vars['searchsession'] != ''): ?><?php echo $this->_tpl_vars['searchsession']; ?>
<?php else: ?><?php   echo Core_CLanguage::_('SEARCH_ENTER_ITEM_NAME_HERE');  ?> ... <?php endif; ?>" onclick="searchitem();">&nbsp;<button class="btn" type="button" onclick="searchSubmit();" value="Search"><i class="icon-zoom-in"></i> <?php   echo Core_CLanguage::_('SEARCH');  ?></button>
</div></div>
<div class="span3" style=" margin-top: 30px;"><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=showcart"><div id="shopping_cart"><i><?php   echo Core_CLanguage::_('SHOPPING_CART');  ?> - <?php echo $this->_tpl_vars['cartcount']; ?>
&nbsp;<?php   echo Core_CLanguage::_('ITEMS');  ?></i></div></a>
</div>
</span>
<span class="visible-tablet">
<div class="row-fluid">
<div class="span4"><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=index"><img src="<?php echo $this->_tpl_vars['sitelogo']; ?>
" alt="ZeusCart"></a></div>
<div class="span8">
</div>
</div>
<div class="row-fluid">
<div class="span6">
<div class="input-append">
<input style="width:170px; height:18px; overflow:hidden;"  name="search"  type="text" id="searchtxt" value="<?php if ($this->_tpl_vars['searchsession'] != ''): ?><?php echo $this->_tpl_vars['searchsession']; ?>
<?php else: ?><?php   echo Core_CLanguage::_('SEARCH_ENTER_ITEM_NAME_HERE');  ?> ... <?php endif; ?>" onclick="searchitem();">&nbsp;<button class="btn" type="button" onclick="searchSubmit();" value="Search"><i class="icon-zoom-in"></i>  <?php   echo Core_CLanguage::_('SEARCH');  ?></button>
</div></div>
<div class="span6"><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=showcart"><div id="shopping_cart"><i><?php   echo Core_CLanguage::_('SHOPPING_CART');  ?> - <?php echo $this->_tpl_vars['cartcount']; ?>
&nbsp;<?php   echo Core_CLanguage::_('ITEMS');  ?></i></div></a>
</div>
</div>
</span>
</div>
</div>
<!--menu-->
<div class="row-fluid">
<span class="hidden-desktop">
<div class="navbar">
<div class="navbar-inner">
<div class="container">
<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#" class="brand">SHOP</a>
<div class="nav-collapse collapse">
<ul class="nav">
<?php echo $this->_tpl_vars['headermenuhidden']; ?>
</ul>
</div>
</div>
</div>
</div>
</span>
<span class="visible-desktop">
<!-- Mega Menu / Start
================================================== -->
<div class="menu style-1">
<ul class="menu">
<li class="select"><a href="?do=index"><?php   echo Core_CLanguage::_('HOME');  ?></a></li>
<?php echo $this->_tpl_vars['headermenu']; ?>
</ul>
</div>
<?php echo $this->_tpl_vars['loginStatus']['CustomHeader']; ?>
<!-- Mega Menu / End
================================================== -->
</span>
</div>
<!--banner-->
<div class="row-fluid">
<div class="fluid_container">
<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
<?php echo $this->_tpl_vars['slideshow']; ?>
</div><!-- #camera_wrap_1 -->
</div>
</div>
</div>
</div>
</header>
<!-- body start here-->
<div class="container">
<span class="visible-desktop"><div class="title_fnt">
<h1><?php   echo Core_CLanguage::_('FEATURED_PRODUCTS');  ?></h1><a href="javascript:void(0)" class="left_arrow"></a> <a href="javascript:void(0)"  class="right_arrow"></a>
</div><div class="row-fluid">
<div class="freshdesignweb">
<?php echo $this->_tpl_vars['allfeaturedproducts']; ?>
</div>
</div></span>
<span class="visible-desktop"><div class="title_fnt">
<h1><?php   echo Core_CLanguage::_('NEW_ARRIVALS');  ?></h1><a href="javascript:void(0)" class="newproductlarrow" id="newproductlarrow"></a> <a href="javascript:void(0)"  class="newproductrarrow" id="newproductrarrow"></a>
</div><div class="row-fluid">
<div class="freshdesignweb">
<?php echo $this->_tpl_vars['newarrivalproducts']; ?>
</div>
</div></span>
<span class="hidden-desktop"><div class="title_fnt">
<h1><?php   echo Core_CLanguage::_('FEATURED_PRODUCTS');  ?></h1><a href="javascript:void(0)" class="left_arrow"></a> <a href="javascript:void(0)"  class="right_arrow"></a>
</div><div class="row-fluid">
<div class="freshdesignweb">
<?php echo $this->_tpl_vars['allfeaturedproductshidden']; ?>
</div>
</div></span>
<div class="title_fnt">
<h1><?php   echo Core_CLanguage::_('PRODUCTS');  ?></h1>
</div>
<?php echo $this->_tpl_vars['newproducts']; ?>
<div id="welcome_div">
<div class="row-fluid">
<div class="span12">
<?php echo $this->_tpl_vars['homepagecontent']; ?>
<div class="clear"></div>
</div>
</div>
</div>
<div class="row-fluid" id="ad_banner">
<?php if ($this->_tpl_vars['homepageads'][0]['home_page_ads_logo'] != ''): ?>
<div class="span6"><a target="_blank" href="<?php echo $this->_tpl_vars['homepageads'][0]['home_page_ads_url']; ?>
"><img src="<?php echo $_SESSION['base_url']; ?>
/<?php echo $this->_tpl_vars['homepageads'][0]['home_page_ads_logo']; ?>
" alt="<?php echo $this->_tpl_vars['homepageads'][0]['home_page_ads_title']; ?>
"></a></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['homepageads'][1]['home_page_ads_logo'] != ''): ?>
<div class="span6"><a target="_blank" href="<?php echo $this->_tpl_vars['homepageads'][1]['home_page_ads_url']; ?>
"><img src="<?php echo $_SESSION['base_url']; ?>
/<?php echo $this->_tpl_vars['homepageads'][1]['home_page_ads_logo']; ?>
"  alt="<?php echo $this->_tpl_vars['homepageads'][1]['home_page_ads_title']; ?>
"></a></div>
<?php endif; ?>
</div>
</div>
<div id="uploadReferenceDocuments" class="modal hide fade" style="display: none;">
<div class="modal-header">
<div id="popupproductdetails"></div>
</div>
</div>
<!-- /container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
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