<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 12:09:58
compiled from selectskin.html */ ?>
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
$('#updateSkinicon').click(function(){
$("#updateSkinname").submit();
});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2> Available Site Skin
</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li>
<a href="?do=skin" class="add_icon1"  id="saveProductId"></a> </li>
<li>
<a href="javascript:void(0);" class="update_icon"  id="updateSkinicon"></a> </li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['updatemsg']; ?>
<form name="fm" method="post" id="updateSkinname" action="?do=selectskin&action=update" enctype="multipart/form-data">
<div class="row-fluid">
<div class="span12">
<h2 class="box_head green_bg">Select Site Skin</h2>
<div class="toggle_container">
<div class="clsblock">
<div class="clearfix">
<div class="row-fluid">
<div class="span12">Current Site Skin : <span class="label label-info"><?php echo $this->_tpl_vars['currentskin']; ?>
</span></div></div>
<div class="row-fluid">
<div class="span12">List of Available Skins</div> </div>
<div class="row-fluid">
<div class="span12">
<div class="ibutton-group">
<div class="row-fluid">
<div class="span7">
<?php echo $this->_tpl_vars['showskin']; ?>
</div>    </div> </div>    </div>
</div>
</div>
</div>
</div>
</div></div>
</form>
<script type="text/javascript">
$(document).ready(function (){
$(":radio").iButton(function(){
});   });
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