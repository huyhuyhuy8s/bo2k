<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:09:48
compiled from taxsettings.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<link rel="stylesheet" href="assets/css/jquery.ibutton.min.css" />
<script src="assets/js/jquery.ibutton.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<style>
/* bordered tabbable  */
.tabbable-bordered { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.tabbable-bordered > .nav-tabs { margin: 0; border: none; }
.tabbable-bordered > .tab-content { min-height: 400px; border-style: solid; border-color: #ddd; padding: 10px; border-width: 1px; -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.tabs-below.tabbable-bordered > .tab-content { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.tabs-left.tabbable-bordered > .tab-content { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.tabs-right.tabbable-bordered > .tab-content { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.tabbable-bordered .nav-tabs > li { margin-right: 2px; border-top: 2px solid transparent; }
.tabbable-bordered .nav-tabs > li > a { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; margin-right: 0; padding: 6px 10px; }
.tabbable-bordered .nav-tabs > li > a:hover { background: none; border-color: transparent; }
.tabbable-bordered .nav-tabs > li.active { border-top: 3px solid #368CA9; margin-top: 0; position: relative; }
.tabbable-bordered .nav-tabs > li.active > a { border-top: none; font-weight: 700; }
.tabbable-bordered .nav-tabs > li.active > a:hover { background: #fff; border-color: #ddd #ddd transparent; }
.tabs-below.tabbable-bordered .nav-tabs > li { border-top: none; border-bottom: 2px solid transparent; margin-top: -1px; }
.tabs-below.tabbable-bordered .nav-tabs > li.active { border-top: none; border-bottom: 3px solid #368CA9; margin-bottom: 0; position: relative; }
.tabs-below.tabbable-bordered .nav-tabs > li.active > a { border-bottom: none }
.tabs-below.tabbable-bordered .nav-tabs > li.active > a:hover { background: #fff; border-color: #ddd #ddd transparent; }
.tabs-left.tabbable-bordered .nav-tabs > li { margin-right: 0; border-left: 2px solid transparent; border-top: none; }
.tabs-left.tabbable-bordered .nav-tabs > li.active { border-top: none; border-left: 3px solid #368CA9; margin-top: 0; margin-right: -1px; position: relative; }
.tabs-left.tabbable-bordered .nav-tabs > li.active > a { border-top: 1px solid #ddd; border-left: 1px solid transparent; }
.tabs-left.tabbable-bordered .nav-tabs > li.active > a:hover { background: #fff; border-color: #ddd transparent #ddd; }
.tabs-right.tabbable-bordered .nav-tabs > li { margin-right: 0; border-right: 2px solid transparent; border-top: none; }
.tabs-right.tabbable-bordered .nav-tabs > li.active { border-top: none; border-right: 3px solid #368CA9; margin-top: 0; margin-left: -1px; position: relative; }
.tabs-right.tabbable-bordered .nav-tabs > li.active > a { border-top: 1px solid #ddd; border-right: 1px solid transparent; }
.tabs-right.tabbable-bordered .nav-tabs > li.active > a:hover { background: #fff; border-color: #ddd transparent #ddd; }
.tabs-right.tabbable-bordered .nav-tabs > li a, .tabs-left.tabbable-bordered .nav-tabs > li a { padding: 8px 10px }
</style>
<script type="text/javascript">
$(document).ready(function (){
$('#saveTaxicon').click(function(){
$("#saveTaxsettings").submit();
});
$("select").chosen({allow_single_deselect:true});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Tax Settings</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="javascript:void(0);" class="save_icon"  id="saveTaxicon"></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['insmsg']; ?>
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Tax Settings</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<form  name="sam" action="?do=taxsettings&action=updatetaxsettings" id="saveTaxsettings" method="post">
<?php echo $this->_tpl_vars['taxsettings']; ?>
</form>
</div>
</div>
</div>
</div></div>
<script type="text/javascript">
$(document).ready(function (){
$(":radio").iButton();
$('#taxtype2').live('click',function(){
alert('adf');
});
});
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<!-- onclick="document.getElementById(\'SingleTaxDiv\').style.display=\'none\'; document.getElementById(\'ifrmdiv\').style.display=\'block\';" '.(($arr[1]['status']==1) ? 'checked="checked"' : '' ).' -->
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