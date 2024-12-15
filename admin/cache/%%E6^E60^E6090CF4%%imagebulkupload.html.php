<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:48:54
compiled from imagebulkupload.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="assets/js/bootstrap-fileupload.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css">
<script type="text/javascript">
$(document).ready(function (){
$('#updateImageBulkId').click(function(){
$("#updateImageBulk").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Images Bulk Upload</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li>
<a href="javascript:void(0);" class="update_icon"  id="updateImageBulkId" ></a> </li>
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
<h2 class="box_head green_bg">Images Bulk Upload</h2>
<div class="toggle_container">
<div class="clsblock">
<form name="fm" method="post" action="?do=bulkupload&action=imagesbulkupload" id="updateImageBulk" enctype="multipart/form-data">
<div class="row-fluid">
<div class="span12">
<label>
Images TSV File</label>
<div class="fileupload fileupload-new" data-provides="fileupload">
<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/noimage.gif" /></div>
<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
<div>
<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>   <input type="file" name="image_file" id="image_file" value=""/></span>
<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div>
</div>
<div id="dbulkup1" style=" position:fixed"></div></div></div>
<div class="row-fluid">
<div class="span12">
<label> Sample Images TSV File</div>
<a href="?do=bulkupload&action=downloadimagessample"><img src="images/ico_bulk_doc.png" name="getdoc" id="getdoc" alt="Click Here" border="0"/></a>
<div id="dbulkup2" style="left: 50px; top: 50px;"></div></div></div>
</form>
</div>
</div>
</div>
<br/>
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg"> Note : To Upload The Images TSV File</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<ol>
<li>1. 1. Click on the Sample images TSV file to download the zip</li>
<li>2. Extract the zip file.</li>
<li>3. There are two tsv files in the zip archive.</li>
<li>4. Open the productid.tsv in a spreadsheet application (Ex: Excel) to get the product reference. ie to which product I need to upload the images.</li>
<li>5. Open the images.tsv in a spreadsheet application </li>
<li>6. Don't Modify Or Delete The First Line Of Images TSV File</li>
<li>7. Delete the Dummy Image Details From The Second Line Of Images TSV File</li>
<li>8. Now copy all of your images into single folder.</li>
<li>9. Put a Unique name for the folder.</li>
<li>10. Then upload the folder to your online http://www.yourdomainname.com/images/,  through any one of the FTP application.</li>
<li>11. Then fill up the images.tsv file as follows</li>
<li>12. Enter the <b>Product Ids In the First Column</b> . Refer the  Product Id TSV File</li>
<li>13. Enter the <b>Image Url Inside
<!--uploadedbulkimages Folder-->
In the Second Column</b> Correctly (images/UploadedImageFolderName/imagefilename)</li>
<li>14. Enter the <b>Image Type Flag In the Third Column <font color="#000066">( main For Main Image in the detail page &amp; sub ForSub Images in the more images link)</font></b> Correctly </li>
<li>15. Finally upload the images.tsv file with data. This will merge the products and images. Remember that mentioning thd product id in the images.tsv file is vital.</li>
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