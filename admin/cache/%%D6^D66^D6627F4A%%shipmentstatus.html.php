<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:09:54
compiled from shipmentstatus.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript">
$(document).ready(function (){
$('#shipmentSave').click(function(){
$("#shipmentId").submit();
});
$('.accordion').each(function() {
$(this).find('.accordion-group').each(function(){
$(this).find('.accordion-toggle').prepend('<i class="icon-chevron-left"/>')
$(this).find('.accordion-body').filter('.in').prev('.accordion-heading').find('.accordion-toggle').addClass('acc-in').children('i').toggleClass('icon-chevron-left icon-chevron-down');
$(this).find('.accordion-body').on('show', function(option) {
$(this).find('.accordion-toggle').removeClass('acc-in');
$(option.target).prev('.accordion-heading').find('.accordion-toggle').addClass('acc-in').children('i').removeClass('icon-chevron-left').addClass('icon-chevron-down');
});
$(this).find('.accordion-body').on('hide', function(option) {
$(option.target).prev('.accordion-heading').find('.accordion-toggle').removeClass('acc-in').children('i').addClass('icon-chevron-left').removeClass('icon-chevron-down');
});
});
})
});
</script>
<style>
/* accordion  */
.accordion { border-bottom: 1px solid #e9e9e9 }
.accordion .accordion-group { margin: 0; border: none; border-radius: 0; }
.accordion .accordion-inner { border: none }
.accordion .accordion-heading a { background: #f7f7f7; color: #333; border-width: 1px 0 0; border-style: solid; border-color: #e9e9e9; overflow: hidden; }
.accordion .accordion-heading a:hover { text-decoration: none }
.accordion .accordion-heading a i { float: right; margin-top: 3px; margin-left: 10px; opacity: .3; }
.accordion .accordion-heading .label { vertical-align: 1px }
.accordion a.acc-in { background: none; border-top: 3px solid #368CA9; font-weight: 700; }
.accordion a.acc-in i { margin-top: 2px }
</style>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Shipping Methods</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="javascript:void(0);" class="update_icon"  id="shipmentSave"></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['shipmentMsg']; ?>
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
<form name="site" action="?do=showshipmenttracker&action=update" id="shipmentId" method="post" enctype="multipart/form-data">
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Shipping Methods</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<div class="w-box-content cnt_a">
<div class="row-fluid">
<div class="span12">
<div class="accordion" id="accordion1">
<?php echo $this->_tpl_vars['shippingtrackersetting']; ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div>
</form>
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