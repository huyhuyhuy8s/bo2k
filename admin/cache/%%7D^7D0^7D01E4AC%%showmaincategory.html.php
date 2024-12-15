<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 07:17:39
compiled from showmaincategory.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="js/bsn.AutoSuggest_2.1.3.js" charset="utf-8"></script>
<link rel="stylesheet" href="css/autosuggest_inquisitor.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">
$(function () {
$("select").chosen({allow_single_deselect:true});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Main Category List</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="?do=managecategory" class="add_icon1"  ></a></li>
<li><a href="javascript:submitform()" onclick="return confirm(\'Are you sure you want to delete this customer?\');"  class="delete_icon1" ></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['updatemiancatmsg']; ?>
<?php echo $this->_tpl_vars['deletemsg']; ?>
<div class="blocks" style="opacity: 1;">
<div class="clsListing clearfix">
<?php echo $this->_tpl_vars['showmaincat']; ?>
<?php echo $this->_tpl_vars['search']; ?>
</div></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript">
var options = {
script:"?do=showmain&action=autoc&json=true&limit=6&",
varname:"input",
json:true,
shownoresults:false,
maxresults:6,
callback: function (obj) { document.getElementById('testid').value = obj.id; }
};
var as_json = new bsn.AutoSuggest('catname', options);
var options_xml = {
script: function (input) { return "?do=showmain&action=autoc&input="+input+"&testid="+document.getElementById('testid').value; },
varname:"input"
};
var as_xml = new bsn.AutoSuggest('catname_xml', options_xml);
function checkall()
{
$( ".catagorydel" ).each(function() {
if(!$('.select_rows').attr('checked'))
{
$('.catagorydel').attr('checked',false);
}
else
{
$('.select_rows').attr('checked',true)
$('.catagorydel').attr('checked',true);
}
});
}
function submitform()
{
if($("input:checked").length== 0)
{
alert('Please select atleast one checkbox');
}
else
{
document.arfrm.action="?do=showmain&action=delete";
document.arfrm.submit();
}
}
</script>
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