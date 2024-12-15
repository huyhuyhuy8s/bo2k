<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 09:57:54
compiled from addtocart.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<!-- body start here-->
<div class="container">
<ul class="breadcrumb">
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=index"><?php   echo Core_CLanguage::_('HOME');  ?></a> <span class="divider">/</span></li>
<li class="active"><?php   echo Core_CLanguage::_('SHOW_CART');  ?></li>
</ul>
<?php echo $_SESSION['update_msg']; ?>
<div class="row-fluid">
<div class="span12">
<div class="title_fnt">
<?php if ($_GET['action'] == '' || $_GET['action'] == 'add'): ?>
<h1><?php   echo Core_CLanguage::_('SHOW_CART');  ?> </h1>
<?php else: ?>
<h1><?php   echo Core_CLanguage::_('CHECK_OUT');  ?></h1>
<?php endif; ?>
</div>
<?php echo $this->_tpl_vars['showcart']; ?>
</div>
</div>
</div>
<!-- /container -->
<script>
function checkInputs()
{
$( "#default_ship_cost" ).hide();
var ship_type=$('#shipment_id').val();
if(ship_type=='0')
{
selectshipping='<?php   echo Core_CLanguage::_('PLEASE_SELECT_THE_SHIPPING_METHOD');  ?>';
alert(selectshipping);
return false;
}
else
{
if(ship_type=='2')
{
if(document.getElementById('shipdurid').value=='' || document.getElementById('shipdurid').value=='0')
{
selectshippingduration='<?php   echo Core_CLanguage::_('PLEASE_SELECT_THE_SHIPPING_DURATION');  ?>';
alert(selectshippingduration);
return false;
}
}
}
return true;
}
function selectShippingType(id)
{
$( "#duration_ups" ).hide();
$( "#ship_cost").hide();
$( "#default_ship_cost" ).hide();
if(id=='1')
{
$( "#default_ship_cost" ).show();
}
if(id=='2')
{
document.getElementById("shipdurid").value = "0";
$( "#duration_ups" ).show();
}
}
function shipDuration(ship_dur_id,zip,weight)
{
if(ship_dur_id!='0')
{
$.ajax({
url:'<?php echo $_SESSION['base_url']; ?>
/index.php?do=showcart&action=calculateshipcost',
data: 'ship_dur_id='+ship_dur_id+'&zip='+zip+'&weight='+weight,
type: 'GET',
success: function (resp) {
document.getElementById('var_ship').innerHTML=resp;
document.getElementById('shipping_cost').value=resp;
$( "#default_ship_cost" ).hide();
$( "#ship_cost").show();
}
});
}
else
{
$( "#ship_cost").hide();
selectshippingduration='<?php   echo Core_CLanguage::_('PLEASE_SELECT_THE_SHIPPING_DURATION');  ?>';
alert(selectshippingduration);
}
}
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