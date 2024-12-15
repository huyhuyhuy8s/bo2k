<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:36:28
compiled from googlebase.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span12"><h2>Google Base
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
<div class="span12"><h2 class="box_head green_bg">Google Base</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<div class="row-fluid">
<div class="span8">
<p><img src="images/googleBase.gif" name="googlelogo" /></p>
<p> Google Base is a place where you can easily submit all types of online and offline content which we'll make searchable. Using Base, your content can appear online within Google Product Search and Google Web Search, in addition to Google Base - all for free.</p>
<p>
For More Information <a href="http://base.google.com/base/tour/more.html" >Click Here</a>  </p>
<p> <a href="?do=googleproduct&action=export" >Click Here</a> to get the Google Base product data feed in Excel format    </p>
</div>
<div class="span4">
<img  style="float:right;" src="images/jobsearch.jpg" name="google" >
</div></div>
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