<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:29:58
compiled from signup.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript">
$(document).ready(function (){
$('#termsbutton').click(function(){
$("#termsid").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Customer Account
</h2>
</div>
<div class="span3" >    <ul class="bttn_right">
<li><a href="javascript:void(0);"  class="save_icon"  id="termsbutton"></a></li>
<li><a href="javascript:history.go(-1)" class="back_icon1"></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['updatetermsmsg']; ?>
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
<h2 class="box_head green_bg">Customer Information </h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<form name="formcontents" action="?do=addUserAccount&action=addreg" id="termsid" method="post" >
<div class="row-fluid">
<div class="span6">
<label> Display Name <font color="red">*</font></label><input name="txtdisname" type="text" class="span8" value="<?php echo $this->_tpl_vars['val']['txtdisname']; ?>
" /></div></div>   <div class="row-fluid">
<div class="span6">
<label>First Name <font color="red">*</font></label>
<input name="txtfname" type="text" class="span8" value="<?php echo $this->_tpl_vars['val']['txtfname']; ?>
"/></div></div>   <div class="row-fluid">
<div class="span6">
<label>Last Name <font color="red">*</font></label>
<input name="txtlname" type="text" class="span8" value="<?php echo $this->_tpl_vars['val']['txtlname']; ?>
"/> </div></div>   <div class="row-fluid">
<div class="span6">
<label>Email Address <font color="red">*</font></label>
<input name="txtemail" type="text" class="span8" value="<?php echo $this->_tpl_vars['val']['txtemail']; ?>
"/> </div></div>   <div class="row-fluid">
<div class="span6">
<label>Password <font color="red">*</font></label>
<input name="txtpwd" type="password" class="span8" value="<?php echo $this->_tpl_vars['val']['txtpwd']; ?>
"/></div></div>   <div class="row-fluid">
<div class="span6">
<label>Confirm Password <font color="red">*</font></label>
<input name="txtrepwd" type="password" class="span8" value="<?php echo $this->_tpl_vars['val']['txtrepwd']; ?>
"/>
</div></div>   <div class="row-fluid">
<div class="span6">
<label>Address <font color="red">*</font></label>
<input name="txtaddr" type="text" class="span8" value="<?php echo $this->_tpl_vars['val']['txtaddr']; ?>
"/></div></div>   <div class="row-fluid">
<div class="span6">
<label>City <font color="red">*</font></label>
<input name="txtcity" type="text" class="span8" id="textfield8" value="<?php echo $this->_tpl_vars['val']['txtcity']; ?>
" /></div></div>   <div class="row-fluid">
<div class="span6">
<label>State/Province <font color="red">*</font></label>
<input name="txtState" type="text" class="span8" id="textfield8" value="<?php echo $this->_tpl_vars['val']['txtState']; ?>
"/></div></div>   <div class="row-fluid">
<div class="span6">
<label>Zip/Postal Code <font color="red">*</font></label>
<input name="txtzipcode" type="text" class="span8" id="textfield82" value="<?php echo $this->_tpl_vars['val']['txtzipcode']; ?>
" /></div></div>   <div class="row-fluid">
<div class="span6">
<label>Country <font color="red">*</font></label>
<?php echo $this->_tpl_vars['val']['selCountry']; ?>
</div>
</div><div class="row-fluid">
<div class="span6">
<label>Group </label>
<?php echo $this->_tpl_vars['group']['selGroup']; ?>
</div>
</div></form>
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