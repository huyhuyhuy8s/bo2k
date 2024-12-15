<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:36:03
compiled from createpromocodes.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="js/calendar/calendar.js"></script>
<script type="text/javascript" src="js/calendar/calendar-setup.js"></script>
<script type="text/javascript" src="js/calendar/calendar-en.js"></script>
<script type="text/javascript">
$(function () {
$("select").chosen({allow_single_deselect:true});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Coupon Codes Management</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a class="add_icon1" href="?do=createpromotionalcodes"><!-- Create Coupon --> </a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['insertmsg']; ?>
<?php echo $this->_tpl_vars['display']; ?>
<?php echo $this->_tpl_vars['displaysearch']; ?>
<?php echo $this->_tpl_vars['displayusers']; ?>
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