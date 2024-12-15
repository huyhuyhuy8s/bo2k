<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:08:58
compiled from skin.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="assets/js/bootstrap-fileupload.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css">
<script type="text/javascript">
$(document).ready(function (){
$('#updateSiteskinicon').click(function(){
$("#updateSiteskin").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Add Skin</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="javascript:void(0);" class="save_icon"   id="updateSiteskinicon"></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['addmsg']; ?>
<form name="fm" method="post" action="?do=skin&action=add" id="updateSiteskin" enctype="multipart/form-data">
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Add Skins</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<div class="row-fluid">
<div class="span12"><label>Skin Name <font color="red">*</font> </label>
<input type="text" name="skinname" class="txt_box250" value="<?php echo $this->_tpl_vars['skinname']; ?>
"/>
</div></div>
<div class="row-fluid">
<div class="span5">Theme Zip File <font color="red">*</font>
<div class="fileupload fileupload-new" data-provides="fileupload">
<div class="fileupload-new thumbnail" style="width:155px; height: 20px;"></div>
<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
<div>
<span class="btn btn-file"><span class="fileupload-new">Select</span><span class="fileupload-exists">Change</span><input type="file" name="zip_file" id="zip_file" value="<?php echo '<?'; ?>
echo $_POST['zip_file']; <?php echo '?>'; ?>
"/></span>
<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div>
</div>
</div>  <div class="span5"><p>
<font color="red">( Important : Please upload the zip folder name  is same as  which we enter the skin name  in above text box inside the folder having style sheet  name is menu.css else the user side style will be corrupted)</font></p></div>
</div>
<div class="row-fluid">
<div class="span12">
List Of Available Skins
<?php echo $this->_tpl_vars['showskin']; ?>
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