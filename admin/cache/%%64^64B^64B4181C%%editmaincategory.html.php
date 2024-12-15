<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 09:44:56
compiled from editmaincategory.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<link rel="stylesheet" href="assets/css/jquery.ibutton.min.css" />
<script src="assets/js/jquery.ibutton.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-fileupload.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css">
<script type="text/javascript">
$(document).ready(function (){
$('#updateCategory').click(function(){
$("#updateCategoryform").submit();
});
});
</script>
<script type="text/javascript" language="javascript">
function callContent(value)
{
//var x= document.getElementById("allcont");
//alert(x.selectedIndex);
//alert('hi');
//alert(dropdownValue);
var url= "?do=managecategory&action=preview&id="+value;
ajax(url,'htmlPreview');
}
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Edit Main Category</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="javascript:void(0);" class="update_icon" id="updateCategory"  ></a></li>
<li><a href="javascript:history.back()" class="back_icon1" onclick=""></a></li>
</ul>
</div>
</div>
</div>
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
<h2 class="box_head green_bg">Update Main Category</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<?php echo $this->_tpl_vars['editmaincat']; ?>
<!--<div class="row-fluid">
<div class="span12">
<label>Select Landing Content</label>
<?php echo $this->_tpl_vars['content']; ?>
<a href="?do=contents" name="content" >Add new Html Contents</a></div></div>-->
<!--<div class="row-fluid">
<div class="span12">  Preview :
<div id='htmlPreview'></div>
</div></div>-->
</div>
</div>
</form>
</div>
</div>
</div>
</div></div>
<script type="text/javascript">
$(document).ready(function (){
$(":checkbox").iButton({
})
})
// trigger the change event (to update the text)
.trigger("change");
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