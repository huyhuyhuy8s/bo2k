<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 10:06:51
compiled from categorydataexport.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<link rel="stylesheet" href="assets/css/jquery.ibutton.min.css" />
<script src="assets/js/jquery.ibutton.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
$(document).ready(function (){
$('#exportCategoryIcon').click(function(){
$("#exportCategory").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Export Category</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="javascript:void(0);" class="export_icon"  id="exportCategoryIcon"></a></li>
</ul>
</div>
</div>
</div>
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Select Format</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<form name="export" method="post" action="?do=catexp&action=export" id="exportCategory">
<div class="bs-docs-example">
<div class="alert fade in">
<strong>Note:</strong> You can Export Category for the following format on your computer.
</div>
</div>
<div class="ibutton-group">
<div class="row-fluid">
<div class="span7">
<div class="span3"> <label>Excel</label><input type="radio" checked="checked" id="default" value="excel" name="export" class="sb_ch1 {labelOn: 'Excel', labelOff: 'OFF'}" /></div>
<div class="span3"><label>XML</label><input type="radio"  value="xml"  name="export" class="sb_ch1 {labelOn: 'XML', labelOff: 'OFF'}" /></div>
<div class="span3"><label>CSV</label><input type="radio"  value="csv"  name="export" class="sb_ch1 {labelOn: 'CSV', labelOff: 'OFF'}" /></div>
<div class="span3"><label>TSV</label><input type="radio"  value="tab"  name="export" class="sb_ch1 {labelOn: 'TSV', labelOff: 'OFF'}" /></div>
</div></div>
</div>
</form>
<script type="text/javascript">
$(document).ready(function (){
$(".ibutton-group").iButton({
})
})
// trigger the change event (to update the text)
.trigger("change");
</script>
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