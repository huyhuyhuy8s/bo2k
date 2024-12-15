<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:30:28
compiled from customergroup.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="js/bsn.AutoSuggest_2.1.3.js" charset="utf-8"></script>
<link rel="stylesheet" href="css/autosuggest_inquisitor.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">
$(function(){
$("select").chosen({allow_single_deselect:true});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Customer Group Management</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a  class="add_icon1" href="?do=custgroup&action=add"></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['adminregmsg']; ?>
<?php echo $this->_tpl_vars['editmsg']; ?>
</td>
<?php echo $this->_tpl_vars['cutomergroup']; ?>
<?php echo $this->_tpl_vars['searchuser']; ?>
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