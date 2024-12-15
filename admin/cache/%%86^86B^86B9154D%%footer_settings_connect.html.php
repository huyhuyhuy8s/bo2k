<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:48:12
compiled from footer_settings_connect.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript">
$(document).ready(function (){
$('#updateFootericon').click(function(){
$("#updateFooter").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Footer Management</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="javascript:void(0);" class="update_icon"  id="updateFootericon"></a></li>
</ul>
</div>
</div>
</div>
<?php if ($_SESSION['successmsg'] != ''): ?>
<div class="alert alert-success">
<button data-dismiss="alert" class="close" type="button">×</button>
<?php echo $_SESSION['successmsg']; ?>
</div>
<?php endif; ?>
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
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Update Footer Management</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<form name="frm" action="?do=updatefootersettings&action=connect" method="post"  id="updateFooter">
<div class="row-fluid">
<div class="span6">
<label>
Free Shipping Cost <font color="red">*</font></label>
<input type="text" name="free_shipping_cost" cols="45" rows="4" class="span8" id="free_shipping_cost"  value="<?php echo $this->_tpl_vars['footerconnect']['free_shipping_cost']; ?>
" ></div></div>
<div class="row-fluid">
<div class="span6">
<label>
Call Us <font color="red">*</font></label>
<input type="text" name="callus" cols="45" rows="4" class="span8" id="callus"  value="<?php echo $this->_tpl_vars['footerconnect']['callus']; ?>
" ></div></div> <div class="row-fluid">
<div class="span6">
<label>
Email <font color="red">*</font>
</label>
<input type="text" name="email" cols="45" rows="4" class="span8" id="email" value="<?php echo $this->_tpl_vars['footerconnect']['email']; ?>
" ></div></div> <div class="row-fluid">
<div class="span6">
<label> Fax
</label>
<input type="text" name="fax" cols="45" rows="4" class="span8" id="fax"  value="<?php echo $this->_tpl_vars['footerconnect']['fax']; ?>
" ></div></div> <div class="row-fluid">
<div class="span6">
<label>Location <font color="red">*</font> </label>
<input type="text" name="location" cols="45" rows="4" class="span8" id="location"  value="<?php echo $this->_tpl_vars['footerconnect']['location']; ?>
"></div></div> <div class="row-fluid">
<div class="span6">
<label>Footer Content  <font color="red">*</font> </label>
<input type="text" name="footercontent" cols="45" rows="4" class="span8" id="footercontent"  value="<?php echo $this->_tpl_vars['footerconnect']['footercontent']; ?>
"></div></div>
</form>
</div>
</div>
</div>
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