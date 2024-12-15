<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-12-15 10:06:23
compiled from sitemap.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<div class="container">
<ul class="breadcrumb">
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=index"><?php   echo Core_CLanguage::_('HOME');  ?></a> <span class="divider">/</span></li>
<li class="active"> <?php   echo Core_CLanguage::_('SITE_MAP');  ?> </li>
</ul>
<?php echo $this->_tpl_vars['sitemap']; ?>
</div>
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