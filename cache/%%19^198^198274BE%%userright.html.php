<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:33:53
compiled from userright.html */ ?>
<?php if ($_GET['do'] != 'faq'): ?>
<div class="span9">
<?php else: ?>
<div class="span12">
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['userRight']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
</div>
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