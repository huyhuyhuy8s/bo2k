<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:51:49
compiled from listtheproduct.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<!-- body start here-->
<div class="container">
<ul class="breadcrumb">
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=index"><?php   echo Core_CLanguage::_('HOME');  ?></a> <span class="divider">/</span></li>
<!--
<li><a href="<?php echo $_SESSION['base_url']; ?>
/<?php echo $this->_tpl_vars['totcategory'][0]; ?>
.html"><?php echo $this->_tpl_vars['totcategory'][0]; ?>
</a> <span class="divider">/</span></li>
<li > <a href="<?php echo $_SESSION['base_url']; ?>
/<?php echo $this->_tpl_vars['totcategory'][0]; ?>
/<?php echo $this->_tpl_vars['totcategory'][1]; ?>
.html"><?php echo $this->_tpl_vars['totcategory'][1]; ?>
</a> <span class="divider">/</span></li>
<li><?php echo $this->_tpl_vars['totcategory'][2]; ?>
</li>-->
<?php echo $this->_tpl_vars['categorybreadcrumb']; ?>
</ul>
<div class="row-fluid">
<span class="visible-desktop">
<div class="span9">
<div class="title_fnt">
<h1><?php echo $this->_tpl_vars['title']; ?>
</h1><span class="pull-right"><a href="<?php echo $_SESSION['base_url']; ?>
/grid/<?php echo $_GET['cat']; ?>
.html" class="grid_icn"></a> <a href="<?php echo $_SESSION['base_url']; ?>
/<?php echo $_GET['cat']; ?>
.html" class="listview_icn"></a></span>
</div>
<div class="clear"></div>
<?php echo $this->_tpl_vars['viewproducts']; ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
</span>
<span class="hidden-desktop">
<div class="span12">
<div class="title_fnt">
<h1><?php echo $_GET['cat']; ?>
</h1><span class="pull-right"><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=viewproducts&action=grid&cat=<?php echo $_GET['cat']; ?>
&subcat=<?php echo $_GET['subcat']; ?>
&subundercat=<?php echo $_GET['subundercat']; ?>
" class="grid_icn"></a> <a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=viewproducts&cat=<?php echo $_GET['cat']; ?>
&subcat=<?php echo $_GET['subcat']; ?>
&subundercat=<?php echo $_GET['subundercat']; ?>
" class="listview_icn"></a></span>
</div>
<div class="clear"></div>
<?php echo $this->_tpl_vars['viewproducts']; ?>
</div>
</span>
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