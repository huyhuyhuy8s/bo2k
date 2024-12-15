<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 10:06:59
compiled from catbulkupload.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="assets/js/bootstrap-fileupload.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css">
<script type="text/javascript">
$(document).ready(function (){
$('#updateCategoryId').click(function(){
$("#updateCategoryBulk").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Category Bulk Upload</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li>
<a href="javascript:void(0);" class="update_icon"  id="updateCategoryId" ></a> </li>
</li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['createpagemsg']; ?>
<?php echo $this->_tpl_vars['deletepage']; ?>
<?php echo $this->_tpl_vars['messages']; ?>
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Category Bulk Upload</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<form name="fm" method="post" action="?do=catbulkupload&action=upload" enctype="multipart/form-data" id="updateCategoryBulk">
<div class="row-fluid">
<div class="span12">
<label>Category TSV File</label>
<div class="fileupload fileupload-new" data-provides="fileupload">
<div class="fileupload-new thumbnail" style="width: 200px; height: 25px;"></div>
<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
<div>
<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="category_file" id="category_file"/></span>
<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div>
</div>
<span class="errmsg"><strong></strong></span></div></div>
<div class="row-fluid">
<div class="span12">  <label>  Sample Category TSV File</label>
<a href="?do=catbulkupload&action=download"><img src="images/ico_bulk_doc.png" name="getdoc" id="getdoc" alt="Click Here" border="0"/></a>&nbsp;
<div id="dbulkup2" style="left: 50px; top: 50px;"></div></div></div>
</form>
</div>
</div>
</div>
</div></div><br/>
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg"> Note : To Upload The Category TSV File</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<ol>
<li>1. Click on the Sample images TSV file to download the zip</li>
<li>2. Extract the zip file.</li>
<li>3. There are two tsv files in the zip archive.</li>
<li>4. Don't Modify Or Delete The First Line Of Category TSV File</li>
<li>5. Modify The Dummy Category Details From The Second Line Of Category TSV File</li>
<li>6. Append The Category Details In The Given Format</li>
<li>7. Enter the Category Ids Correctly Given in the Category Details TSV File</li>
<li>8. Enter the Type of Category Correctly as Parent or Child (lower case only) in the Category TSV File</li>
<li>9. Enter the Category_Parent_Id as Zero(0) for Main Category in the Category TSV File</li>
</ol>
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