<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:36:16
compiled from googleadsense.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript">
$(document).ready(function (){
$('#addSensebutton').click(function(){
$("#addSense").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Google AdSense Settings
</h2>
</div>
<div class="span3" >    <ul class="bttn_right">
<li><a href="javascript:void(0);"  class="update_icon"  id="addSensebutton"></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['gadsensemsg']; ?>
<div class="row-fluid">
<div class="span12"><h2 class="box_head green_bg">Google AdSense Tracking Script</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<div class="row-fluid">
<div class="span6">
<img  style="float:right;" src="https://www.google.com/adsense/static/en_US/images/logo_main.gif" width="150" height="58"/> </div>
<div class="span12">
<?php echo $this->_tpl_vars['gadsense']; ?>
</div></div>
<div class="bs-docs-example">
<div class="alert fade in">
<strong>Note:</strong> Please Enter Only The Following Banner Sizes Banner (468 X 60) Half Banner (234 X 60).
</div>
</div>
</div></div></div></div></div>
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