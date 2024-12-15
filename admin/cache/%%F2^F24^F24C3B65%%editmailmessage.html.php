<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:38:46
compiled from editmailmessage.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<link rel="stylesheet" href="assets/css/jquery.ibutton.min.css" />
<script src="assets/js/jquery.ibutton.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
$(document).ready(function (){
$('#editDynamiccmsicon').click(function(){
$("#editDynamiccmsform").submit();
});
$(":checkbox").iButton();
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Edit Mail Settings</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="javascript:void(0);" class="update_icon"  id="editDynamiccmsicon"></a></li>
<li><a class="back_icon1" href="javascript:history.back()"></a></li>
</ul>
</div>
</div>
</div>
<?php if (count ( $this->_tpl_vars['msg'] ) > 0): ?>
<div class="alert alert-error">
<button data-dismiss="alert" class="close" type="button">×</button>
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
<form name="dynamiccms" id="editDynamiccmsform"   method="post" action="?do=mailmessages&action=edit&id=<?php echo $_GET['id']; ?>
" >
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Edit Mail Settings</h2>
<div class="toggle_container">
<div class="clsblock">
<?php echo $this->_tpl_vars['editmessage']; ?>
</div>
</div>
</div></div></form>
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