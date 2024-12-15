<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 07:19:03
compiled from categorymanagement.html */ ?>
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
<script type="text/javascript" language="javascript">
function callContent(value)
{
var url= "?do=managecategory&action=preview&id="+value;
ajax(url,'htmlPreview');
document.getElementById('prev').style.display='block';
}
$(document).ready(function (){
$('#saveSubcate').click(function(){
$("#addSubcateid").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Add Category</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li>
<a href="javascript:void(0);" class="save_icon"  id="saveSubcate"></a>	</li>
<li><a class="back_icon1" href="javascript:history.go(-1)"></a> </li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['insmsg']; ?>
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
<form  name="sam" action="?do=managecategory&action=add" method="post" id="addSubcateid" enctype="multipart/form-data" >
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Add Category</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<div class="row-fluid">
<div class="span12"><label>Category Name <font color="#FF0000">
*
</font></label>
<input type="text" name="categoryname" id="categoryname" value="<?php echo $this->_tpl_vars['val']['categoryname']; ?>
" class="span4" />
</div>
</div>
<div class="row-fluid">
<div class="span4"><label>Category Alias <font color="#FF0000">
*
</font></label>
<input type="text" name="category_alias" id="category_alias" value="<?php echo $this->_tpl_vars['val']['category_alias']; ?>
" class="span12" /></div><div class="span4"><font color="#FF0000"> (The category alias wil be used in SEF url. Use lower case letter and hyphens .No spaces and underscore are not allowed)</font>
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>Category Parent</label>
<?php echo $this->_tpl_vars['categoryparent']; ?>
</div></div>
<div class="row-fluid">
<div class="span12"><label>Category Description </label>
<textarea name="categorydesc"  cols="30" rows="4" class="span4"  id="catdesc" ></textarea>
</div>
</div>
<div class="row-fluid" style="display:none" id='landingContent'>
<div class="span12"><label>Select Landing Content  </label>
<div style="display:" id='contentContainer'>
<table width="100%" border="0">
<tr>
<td></td>
<td style="padding-left:50px"><?php echo $this->_tpl_vars['content']; ?>
</td>
<td width="95%"><a href="?do=contents" name="content" class="add_link" >Add Html Contents</a> </td>
</tr>
</table></div>
</div>
</div>
<div class="row-fluid" style="display:none" id='prev'>
<div class="span12"><label>Preview </label>
<div style="" id=''>
<table width="100%" border="0">
<tr>
<td style="padding-left:135px"> <span id='htmlPreview'></span></td>
</tr>
</table></div>
</div>
</div>
<div class="row-fluid" style="display:block" id='ImageContainer'>
<div class="span12"><label>Categroy Image  </label><div class="fileupload fileupload-new" data-provides="fileupload">
<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/noimage.gif" /></div>
<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
<div>
<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="caticon" id="caticon" /></span>
<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div>
</div>
</div>
</div>
<div class="row-fluid" style="display:none" id='attribContainer'>
<div class="span12"><label>
Category Special Attributes </label>
<?php echo $this->_tpl_vars['attrib']; ?>
</div>
</div>
<div class="row-fluid" >
<div class="span12"><label>Visibility Status </label>
<input type="checkbox" name="status" value="1" checked="checked">
</div>
</div>
</div></div></div></div></div>
</form>
<script type="text/javascript">
$(document).ready(function (){
$(":checkbox").iButton({
})
})
$(document).ready(function (){
$("#Attributecat").on('change', function() {
document.getElementById('attribContainer').style.display='block';
});
})
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script>
flv=0;
function callLanding()
{
//toggle ('landingContent', 'landingContent');
var cont = document.getElementById("landingContent");
if(flv == 0)
{
$(cont).slideDown(1000);
flv=1;
}
else
{
$(cont).slideUp(1000);
flv=0;
}
}
</script>
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