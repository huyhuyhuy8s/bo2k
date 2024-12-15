<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:51:22
compiled from edithomepageads.html */ ?>
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
$('#updateHomepagead').click(function(){
$("#editHomepagead").submit();
});
$(":checkbox").iButton();
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Edit Home Page Ads</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="javascript:void(0);" class="update_icon"  id="updateHomepagead"></a></li>
<li><a href="javascript:history.back()" class="back_icon1" onclick=""></a></li>
</ul>
</div>
</div>
</div>
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
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Edit Home Page Ads</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<form name="reg" id="editHomepagead" method="post" action="?do=homepageads&action=update&id=<?php echo $_GET['id']; ?>
" enctype="multipart/form-data">
<div class="row-fluid">
<div class="span6">
<label>
Title<font color="red">*</font></label>
<input name="home_page_ads_title" type="text" class="span8" value="<?php echo $this->_tpl_vars['val']['home_page_ads_title']; ?>
"/></div>   <div class="span6"><div style="float:right;"><font color="red">*</font> Required Fields</div></div></div>
<div class="row-fluid">
<div class="span6">
<label>
Logo <font color="red">*</font></label>
<div class="fileupload fileupload-new" data-provides="fileupload"  style="width:350px;">
<input type="hidden" name="home_page_ads_logo" value="<?php echo $this->_tpl_vars['val']['home_page_ads_logo']; ?>
">
<div class="fileupload-new thumbnail" style="width: 250px; height: 50px;"><img src="../<?php echo $this->_tpl_vars['val']['home_page_ads_logo']; ?>
" style="width:250%"/></div>
<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
<div>
<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="home_page_ads_logo" /></span>
<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div>
</div></div></div>
<div class="row-fluid">
<div class="span6">
<label>Url<font color="red">*</font></label>
<input name="home_page_ads_url" type="text" class="span8" value="<?php echo $this->_tpl_vars['val']['home_page_ads_url']; ?>
"/> </div></div>
<div class="row-fluid">
<div class="span6">
<label>Status</label>
<input type="checkbox"  id="default" value="1" name="status" class="sb_ch1 {labelOn: 'Excel', labelOff: 'OFF'}"   <?php if ($this->_tpl_vars['val']['status'] == '1'): ?> checked="checked"<?php endif; ?>/>
</div></div>
</form>
</div>
</div>
</div>
</div></div>
<!--Body Part Ends-->
<!--Footer-->
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