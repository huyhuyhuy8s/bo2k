<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:32:55
compiled from privacypolicy.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript">
$(document).ready(function (){
$('#privacybutton').click(function(){
$("#privacyid").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Privacy Policy
</h2>
</div>
<div class="span3" >    <ul class="bttn_right">
<li><a href="javascript:void(0);"  class="update_icon"  id="privacybutton"></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['updateprivacymsg']; ?>
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Content </h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<form name="formcontents" id="privacyid" action="?do=adminprivacypolicy&action=updateprivacy"  method="post" enctype="multipart/form-data">
<textarea name="privacypolicy"  class="ckeditor" id="privacypolicy" cols="85" rows="20"><?php echo $this->_tpl_vars['privacypolicy']; ?>
</textarea><br/>
<!-- 	<input type="submit" name="submit" id="sub" value="Update Privacy Policy" class="clsBigBtn" /> -->
</form>
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