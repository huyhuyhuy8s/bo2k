<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 07:14:50
compiled from selectfeatureditems.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript">
var xmlHttp;
function LoadSubcategory(id,divid)
{
if(id!='')
{
url = "?do=selectfeatured&action=showsubcat&id="+id;
ajax(url,divid);
}
}
function showProducts(subcatid)
{
$.ajax({
url:'?do=selectfeatured&action=showproducts',
data: 'id='+subcatid,
type: 'GET',
success: function (resp) {
document.getElementById('productlist').innerHTML=resp;
}
});
}
$(document).ready(function (){
$('#updateFeaturedproductIcon').click(function(){
$("#updateFeaturedproduct").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span6"><h2>Select Featured Products
</h2>
</div><div class="span5"><ul class="bttn_right"><li>  <?php echo $this->_tpl_vars['maincategory']; ?>
</li></div>
<div class="span1" >
<ul class="bttn_right">
<li>
<a href="javascript:void(0);" class="update_icon"  id="updateFeaturedproductIcon"></a> </li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['msg']; ?>
<form name="frmcat" action="?do=selectfeatured&action=updateProducts" method="post" id="updateFeaturedproduct">
<!--<div class="row-fluid">
<div class="span7" >
Category
<select name="cbocat" id="cbocat" class="combo_box2"
onClick=	"LoadSubcategory(this.value,'subCategory');">
<option value="">Select </option>
<?php echo $this->_tpl_vars['maincategory']; ?>
</select>
<?php echo $this->_tpl_vars['maincategory']; ?>
</ul>
</div>
</div>-->
<span id="productlist"><?php echo $this->_tpl_vars['product']; ?>
</span>
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