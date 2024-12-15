<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:49:58
compiled from Subadminmanagement.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<style>
/**
* @author GeekTantra
* @date 20 September 2009
*/
input, select {
border: 1px solid #888;
background: #ffffff;
padding: 3px 4px;
color: #222;
margin: 0px 5px 0px 0px;
border-radius: 7px;
-moz-border-radius: 7px;
}
input:focus, select:focus {
outline: none;
}
.InputGroup {
display: inline-block;
padding: 3px 4px;
border: 1px solid #FFF;
border-radius: 7px;
-moz-border-radius: 7px;
}
.ErrorField {
border-color: #D00;
color: #D00;
background: #FFFFFE;
}
span.ValidationErrors {
display: inline-block;
font-size: 12px;
color: #D00;
padding-left: 10px;
font-style: italic;
}
</style>
<script src="assets/js/jquery.validate.js"></script>
<link rel="stylesheet" href="assets/css/jquery.ibutton.min.css" />
<script src="assets/js/jquery.ibutton.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
jQuery(function(){
jQuery("#subAdminnameId").validate({
expression: "if (VAL.match(/^[a-zA-Z]*$/) && VAL)  return true; else return false;",
message: "Sub Admin Name -Please enter the Character Only!"
});
jQuery("#subAdminpassId").validate({
expression: "if (VAL) return true; else return false;",
message: "Sub Admin Password - Required field can't be blank!"
});
jQuery("#subAdminemailId").validate({
expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
message: "Sub Admin Email - Should be a valid Email id!"
});
});
/* ]]> */
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Sub Admin Management</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="#addNewuser" data-toggle="modal" class="add_icon1"  id="adminactivity"></a></li>
<li><a href="#myModal" data-toggle="modal"  class="delete_icon1"  id="subAdmindelete"></a>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['updateMsg']; ?>
<?php echo $this->_tpl_vars['deleteMsg']; ?>
<?php echo $this->_tpl_vars['insertMsg']; ?>
<div class="blocks" style="opacity: 1;">
<div class="clsListing clearfix">
<?php echo $this->_tpl_vars['subadmin']; ?>
</div></div>
<?php echo $this->_tpl_vars['msg']['subadminname']; ?>
<?php echo $this->_tpl_vars['msg']['subadminpassword']; ?>
<?php echo $this->_tpl_vars['msg']['subadminemail']; ?>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Alert</h3>
</div>
<div class="modal-body">
<p>Are you sure to delete the Subadmin?</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<a href="javascript:void(0);" id="deletesubAdmin" class="btn btn-primary" >Save changes</a>
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
<!-- Add New user -->
<div id="addNewuser" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Add Sub Admin</h3>
</div>
<div class="modal-body">
<form action="?do=subadminmgt&action=insert" method="post" id="addUser">
<div class="row-fluid">
<div class="span12"><label>Sub Admin Name</label><input id="subAdminnameId" type="text" name="subadminname" value="" class="span8" /><span id="error" style="color:#FF00;">User Name Already exit!</span></div></div>
<div class="row-fluid">
<div class="span12"><label>Sub Admin Password</label><input id="subAdminpassId" type="text" name="subadminpassword" value="" class="span8"/></div></div>
<div class="row-fluid">
<div class="span12"><label>Sub Admin E-mail</label><input id="subAdminemailId" type="text" name="subadminemail" value="" class="span8"/></div></div> <div class="row-fluid">
<div class="span12"><label>Status</label><input type="checkbox" checked="checked"  id="default" name="subadminstatus" class="sb_ch1 {labelOn: 'Excel', labelOff: 'OFF'}" /></div></div>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<input type="submit" name="sub" id="submitID" value="Save" class="btn btn-primary">
</div>
</form>
</div>
<!-- End User -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script>
function insertSubadmin()
{
document.frmadmin.method="post";
document.frmadmin.action="?do=subadminmgt&action=insert";
document.frmadmin.submit();
}
$(document).ready(function (){
$('#subAdmindelete').click(function () {
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
$('#deletesubAdmin').live('click',function(){
$('#deleteSubadminForm').submit();
});
$('#error').hide();
$("#submitID").click(function(){
var subadminname1=$("#subAdminnameId").val();
var subadminpass1=$("#subAdminpassId").val();
var subadminemail1=$("#subAdminemailId").val();
var subadmincheck1=$("#default").val();
$.post('?do=subadminmgt&action=insert',{subadminname:subadminname1,subadminpassword:subadminpass1,subadminemail:subadminemail1,subadminstatus:subadmincheck1},function (data){
});
});
$("#subAdminnameId").keyup(function(){
var subadminname1=$("#subAdminnameId").val();
$.post('?do=checksubadmname',{subadminname:subadminname1},function (data){
if(data=='1')
{
$("#submitID").attr('disabled','disabled');
$('#error').show().css('color','#FF0000');
return false;
}
else
{
$('#error').hide();
$("#submitID").removeAttr('disabled');
return true;
}
});
});
$("#subAdminnameId").blur(function(){
var subadminname1=$("#subAdminnameId").val();
$.post('?do=checksubadmname',{subadminname:subadminname1},function (data){
if(data=='1')
{
$("#submitID").attr('disabled','disabled');
$('#error').show().css('color','#FF0000');
return false;
}
else
{
$('#error').hide();
$("#submitID").removeAttr('disabled');
return true;
}
});
});
});
function toggleChecked(status) {
$(".chkbox").each( function() {
$(this).attr("checked",status);
})
}
$(document).ready(function (){
$(".sb_ch1").iButton();
})
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