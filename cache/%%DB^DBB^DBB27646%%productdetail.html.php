<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 07:52:05
compiled from productdetail.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<!-- body start here-->
<div class="container">
<ul class="breadcrumb">
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php"><?php   echo Core_CLanguage::_('HOME');  ?></a> <span class="divider">/</span></li>
<li><?php   echo Core_CLanguage::_('PRODUCT_DETAIL');  ?></li>
</ul>
<div class="row-fluid">
<div class="span9">
<?php echo $_SESSION['reviewResultSuccess']; ?>
<?php echo $_SESSION['quantitymsg']; ?>
<?php echo $this->_tpl_vars['product']; ?>
<?php echo $this->_tpl_vars['attributes']; ?>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
</div>
</div>
<!-- /container -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<?php if ($_SESSION['reviewResult'] != ''): ?>
<script>
document.getElementById('details_id').style.display='block';
</script>
<?php endif; ?>
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