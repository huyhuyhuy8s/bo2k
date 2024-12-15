<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 12:09:25
compiled from homepageads.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Show Home Pade Ads </h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="?do=homepageads&action=show" class="add_icon1"  id="adminactivity"></a></li>
<li><a href="#myModal" data-toggle="modal"  class="delete_icon1"  id="homePageaddelete"></a>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['deleteMsg']; ?>
<?php echo $this->_tpl_vars['updateMsg']; ?>
<?php echo $this->_tpl_vars['saveMsg']; ?>
<?php echo $this->_tpl_vars['adminregmsg']; ?>
<div class="blocks" style="opacity: 1;">
<div class="clsListing clearfix">
<form action="?do=homepageads&action=delete" method="post" id="homePagedelete">
<?php echo $this->_tpl_vars['homepageads']; ?>
</form>
</div></div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Alert</h3>
</div>
<div class="modal-body">
<p>Are you sure to delete the Homepage Ads?</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<a href="javascript:void(0);" id="deleteHomepageads" class="btn btn-primary" >Save changes</a>
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
<script type="text/javascript">
$(document).ready(function (){
$('#homePageaddelete').click(function () {
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
$('#deleteHomepageads').live('click',function(){
$('#homePagedelete').submit();
});
});
function toggleChecked(status) {
$(".chkbox").each( function() {
$(this).attr("checked",status);
})
}
</script>
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