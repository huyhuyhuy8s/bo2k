<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:11:22
compiled from userWishlist.html */ ?>
<script language="javascript">
function showDiv()
{
var obj=document.getElementById('divWishSend');
if(obj.style.display=='none')
{
obj.style.display='block';
document.getElementById('hidWishStat').value=1;
}
else
{
obj.style.display='none';
document.getElementById('hidWishStat').value=0;
}
}
</script>
<?php echo $this->_tpl_vars['rows']; ?>
<div class="span8">
<form name="frmWishSend" action="<?php echo $_SESSION['base_url']; ?>
/index.php?do=wishlist&action=send" method="post" class="form-inline">
<a onclick="showDiv()" href="#"><span class="label label-success"><?php   echo Core_CLanguage::_('SEND_TO_FRIEND');  ?></span></a>
<div id="divWishSend" style="display:block;" >
<input type="hidden" name="hidWishStat" id="hidWishStat" value="">
<label class="checkbox">
<?php   echo Core_CLanguage::_('ENTER_EMAIL_ID');  ?>
</label>
<input type="text" name="txtEmail" class="input-large" value="<?php echo $this->_tpl_vars['val']['txtEmail']; ?>
" />
<button class="btn btn-danger" type="submit"><?php   echo Core_CLanguage::_('SUBMIT');  ?></button><br/><font color="#FF0000"><?php echo $this->_tpl_vars['msg']['txtEmail']; ?>
</font>
</div>
</form></div>
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