<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:34:45
compiled from adminActivity.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="script/ajax.js"></script>
<link href="css/calendar_styles.css" rel="stylesheet" type="text/css" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Admin Activity Report
</h2>
</div>
<div class="span3" >    <ul class="bttn_right">
<li><a href="#myModal" data-toggle="modal"  class="delete_icon1"  id="adminactivity"></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['message']; ?>
<!--   <tr>
<td colspan="3" align="right" style="padding-top:10px"><a href="#" class="add_link" onclick="if(confirm('Deleting the records will not be available anymore.Are you sure to delete the Admin Activity Records?')) window.location='?do=deleteActivity';">Delete Reports</a></td>
</tr> -->
<div class="blocks" style="opacity: 1;">
<div class="clsListing clearfix">
<?php echo $this->_tpl_vars['result']; ?>
</div></div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Alert</h3>
</div>
<div class="modal-body">
<p>Deleting the records will not be available anymore.Are you sure to delete the Admin Activity Records?</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<a href="?do=deleteActivity" class="btn btn-primary" >Save changes</a>
</div>
</div>
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