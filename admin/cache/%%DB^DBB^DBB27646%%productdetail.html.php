<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 08:12:26
compiled from productdetail.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript">
$(document).ready(function (){
$('#siteMotoupdate').click(function(){
$("#siteMotoForm").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Product Detail </h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a id="userupdate" class="update_icon" href="?do=manageproducts&action=editprod&prodid=<?php echo $_GET['prodid']; ?>
"></a></li>
<li><a class="back_icon1" href="javascript:history.go(-1)"></a></li>
</ul>
</div>
</div>
</div>
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Product Detail</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<?php echo $this->_tpl_vars['product']; ?>
</div>
</div>
</div>
</div></div>
<script type="text/javascript" language="javascript">
function  callid(id)
{
window.location= "?do=aprodetail&action=showprod&prodid="+id;
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