<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:48:46
compiled from addattributes.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<!--action="?do=catcreate&action=add"-->
<script type="text/javascript">
function selDeSel(a){
//var mark = a == 'sel' ? 'checked' : '';
var inputs = document.getElementsByName('chkattrib[]');
var checkboxes = [];
for (var i = 0; i < inputs.length; i++)
{
if (inputs[i].type == 'checkbox')
{
inputs[i].checked =true;
}
}
}
function selUnDeSel(a){
//var mark = a == 'sel' ? 'checked' : '';
var inputs = document.getElementsByName('chkattrib[]');
var checkboxes = [];
for (var i = 0; i < inputs.length; i++)
{
if (inputs[i].type == 'checkbox')
{
inputs[i].checked =false;
}
}
}
-->
$(document).ready(function (){
$('#saveAttribute').click(function(){
$("#saveAttributeForm").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Attributes</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li>
<a href="?do=attributes&action=add" class="add_icon1"  id="saveAttribute"></a> </li>
<li><a href="#myModal" data-toggle="modal"  class="delete_icon1"  id="attributeDelete"></a>
</li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['attribmsg']; ?>
<form action="?do=attributes&action=delete" method="post" id="deleteAttributeId">
<div class="blocks" style="opacity: 1;">
<div class="clsListing clearfix">
<?php echo $this->_tpl_vars['showattributes']; ?>
</div></div>
</form>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Alert</h3>
</div>
<div class="modal-body">
<p>Are you sure to delete the Attribute?</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<a href="javascript:void(0);" id="deleteAttribute" class="btn btn-primary" >Save changes</a>
</div>
</div>
<div id="deletealert" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Alert</h3>
</div>
<div class="modal-body">
<p>Please select one checkbox</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" language="javascript">
$(document).ready(function (){
$('#attributeDelete').click(function () {
var countvalue=$('input:checkbox:checked').length;
if(countvalue=='0')
{
$('#deletealert').modal('show');
return false;
}
else
{
return true;
}
});
$('#deleteAttribute').live('click',function(){
$('#deleteAttributeId').submit();
});
});
function toggleChecked(status) {
$(".chkbox").each( function() {
$(this).attr("checked",status);
})
}
function  callattribs(id)
{
if(confirm("Are you sure want to Delete?"))
{
window.location = "?do=attributes&action=delete&id="+id;
}
document.formmaincat.mainindex.value=id;
}
function edit(id)
{
window.location= "?do=addattributes&action=disp&id="+id;
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