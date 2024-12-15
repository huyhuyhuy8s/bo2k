<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:33:47
compiled from newssubscribedusers.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Newsletter Subscription List</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
</ul>
</div>
</div>
</div>
<form name="frmcontent" method="post" enctype="multipart/form-data">
<div class="blocks" style="opacity: 1;">
<div class="clsListing clearfix">
<?php echo $this->_tpl_vars['showusers']; ?>
</div>
</div>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" language="javascript">
function  deletenews(id)
{
if(confirm("Are you sure want to Delete?"))
{
window.location = "?do=newsletter&action=delete&id="+id;
}
document.formmaincat.mainindex.value=id;
}
function view(id)
{
window.location= "?do=newsletter&action=disp&id="+id;
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