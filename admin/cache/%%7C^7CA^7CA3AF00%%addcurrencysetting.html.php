<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:18:38
compiled from addcurrencysetting.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="../js/ajax.js"></script>
<link rel="stylesheet" href="assets/css/jquery.ibutton.min.css" />
<script src="assets/js/jquery.ibutton.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-fileupload.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css">
<script type="text/javascript">
$(document).ready(function (){
$('#currencyUpdateButton').click(function(){
$('.currId').submit();
});
$('#currencyAddButton').click(function(){
$('#addCurrencyId').submit();
});
$("select").chosen({allow_single_deselect:true});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Currency Settings</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<?php if ($_GET['do'] == 'showaddcurrency'): ?>
<li>
<a href="javascript:void(0);"  class="save_icon"  id="currencyAddButton"></a> </li>
<li><a href="javascript:history.back()" class="back_icon1" onclick=""></a></li>
<?php else: ?>
<li>
<a href="javascript:void(0);"  class="update_icon"  id="currencyUpdateButton"></a> </li>
<li><a href="javascript:history.back()" class="back_icon1" onclick=""></a></li>
<?php endif; ?>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['insmsg']; ?>
<?php if (count ( $this->_tpl_vars['msg'] ) > 0): ?>
<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">×</button>
<?php $_from = $this->_tpl_vars['msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['err'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['err']['total'] > 0):
foreach ($_from as $this->_tpl_vars['err']):
$this->_foreach['err']['iteration']++;
?>
<?php echo $this->_tpl_vars['err']; ?>
<br>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>
<?php echo $this->_tpl_vars['currencysettings']; ?>
<script>
$(document).ready(function (){
$(":checkbox").iButton(function(){
});
});
</script>
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