<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:51:49
compiled from header.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php echo $this->_tpl_vars['pagetitle']; ?>
<!-- Le styles -->
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/style.css" rel="stylesheet">
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/responsive.css" rel="stylesheet">
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/docs.css" rel="stylesheet">
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<?php if ($this->_tpl_vars['skinname'] == 'default'): ?>
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/menu.css" rel="stylesheet" type="text/css" />
<?php else: ?>
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/<?php echo $this->_tpl_vars['skinname']; ?>
/<?php echo $this->_tpl_vars['skinname']; ?>
/css/menu.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/table.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/jquery.min.js"></script>
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/listview.css" rel="stylesheet" type="text/css" >
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/jquery.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/mobilyselect.js" type="text/javascript"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/init.js" type="text/javascript"></script>
<!-- gallery-->
<link href="<?php echo $_SESSION['base_url']; ?>
/assets/css/grid.css" rel="stylesheet" type="text/css" >
<script type="text/javascript" src="<?php echo $_SESSION['base_url']; ?>
/assets/js/zoominfo.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/jquery-tree.js" ></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['base_url']; ?>
/assets/css/tree.css" >
<script type="text/javascript">
$(document).ready(function() {
$("#tree").niceTree();
});
</script>
<link href="<?php echo $_SESSION['base_url']; ?>
/dropmenu/css/down-menu.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo $_SESSION['base_url']; ?>
/dropmenu/js/nestaccording.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
$("html").addClass("js");
$(function() {
$("#side").accordion({
event: "hover",
interval: 400,
initShow : "#current"
});
$("#main").accordion({
obj: "div",
wrapper: "div",
el: ".h",
head: "h4",
next: "div",
initShow : "div.outer:first",
event : "hover",
collapsible : false
});
$("html").removeClass("js");
});
//--><!]]>
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
</head>
<body>
<header>
<div id="header"><!--<div align="center" style="background-color:#c9c282; border:1px solid #c9c282; color:#ffffff">
Dear colleague this is demo site.so any order placed here is not pertinent.</div>-->
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
<div class="input-append"  style=" margin-top: 30px;">
<input style="width:170px; height:18px; overflow:hidden;"  name="search"  type="text" id="searchtxt" value="<?php if ($this->_tpl_vars['searchsession'] != ''): ?><?php echo $this->_tpl_vars['searchsession']; ?>
<?php else: ?><?php   echo Core_CLanguage::_('SEARCH_ENTER_ITEM_NAME_HERE');  ?>... <?php endif; ?>" onclick="searchitem();">&nbsp;<button class="btn" type="button" onclick="searchSubmit();" value="Search"><i class="icon-zoom-in"></i> <?php   echo Core_CLanguage::_('SEARCH');  ?></button>
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
<?php else: ?><?php   echo Core_CLanguage::_('SEARCH_ENTER_ITEM_NAME_HERE');  ?>... <?php endif; ?>" onclick="searchitem();">&nbsp;<button class="btn" type="button" onclick="searchSubmit();" value="Search"><i class="icon-zoom-in"></i> <?php   echo Core_CLanguage::_('SEARCH');  ?></button>
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
<a href="<?php echo $_SESSION['base_url']; ?>
/index.php" class="brand">SHOP</a>
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
<li class="select"><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=index"><?php   echo Core_CLanguage::_('HOME');  ?></a></li>
<?php echo $this->_tpl_vars['headermenu']; ?>
</ul>
</div>
<!-- Mega Menu / End
================================================== -->
</span>
</div>
</div>
</div>
</header>
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