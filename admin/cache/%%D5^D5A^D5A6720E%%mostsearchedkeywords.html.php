<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:33:58
compiled from mostsearchedkeywords.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span12"><h2>Most Searched Keywords
</h2>
</div>
</div>
</div>
<!--&nbsp;<img src="images/help.gif" onmouseover="ShowHelp('dmsk', 'Most Searched Keywords', 'Most searched keyword in your site')" onmouseout="HideHelp('dmsk');">
<div id="dmsk" style="left: 50px; top: 50px;"></div>-->
<div class="blocks" style="opacity: 1;">
<div class="clsListing clearfix">
<?php echo $this->_tpl_vars['showcontent']; ?>
</div></div>
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