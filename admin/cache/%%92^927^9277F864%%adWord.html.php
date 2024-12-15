<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:36:22
compiled from adWord.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span12"><h2>Google Adword
</h2>
</div>
<!-- <div class="span3" >    <ul class="bttn_right">
<li><a href="javascript:void(0);"  class="update_icon"  id="addSensebutton"></a></li>
</ul>
</div> -->
</div>
</div>
<?php echo $this->_tpl_vars['excel']; ?>
<div class="row-fluid">
<div class="span12"><h2 class="box_head green_bg">Google Adword</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<div class="row-fluid">
<div class="span6">
<img  style="float:right;" src="images/google_adword.gif" name="googlelogo" /></div>
</div>
<div class="row-fluid">
<div class="span8">
<img  style="float:right;" src="images/adwordSamp.gif" name="google" >
</div></div>
<div class="bs-docs-example">
<div class="alert fade in">
No matter what your budget, you can display your Ads on Google and our advertising network. Pay only if people click your Ads. <a href="?do=adword&action=export" >Click Here</a> to get the Google AdWord Campaign data feed in Excel format.
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