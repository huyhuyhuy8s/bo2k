<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 07:15:19
compiled from Adminpaymentgateway.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript">
$(document).ready(function (){
$('#paymentSave').click(function(){
$("#paymentId").submit();
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
<div class="span9"><h2>Payment Gateways Management</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="javascript:void(0);" class="save_icon"  id="paymentSave"></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['updatepaymentmessage']; ?>
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Update Payment Settings</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<?php echo $this->_tpl_vars['adminpaymentgateways']; ?>
</div>
</div>
</div>
</div></div>
<!-- <div class="w-box-content cnt_a">
<div class="row-fluid">
<div class="span6">
<div class="accordion" id="accordion1">
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
Collapsible Group Item #1
</a>
</div>
<div id="collapseOne1" class="accordion-body collapse">
<div class="accordion-inner">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
</div>
</div>
</div>
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
Collapsible Group Item #2
</a>
</div>
<div id="collapseTwo1" class="accordion-body collapse">
<div class="accordion-inner">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
</div>
</div>
</div>
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
Collapsible Group Item #3
</a>
</div>
<div id="collapseThree1" class="accordion-body collapse">
<div class="accordion-inner">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
</div>
</div>
</div>
</div>
</div> -->
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