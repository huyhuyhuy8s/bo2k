<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-12-15 15:52:52
compiled from signup.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<!-- body start here-->
<div class="container">
<ul class="breadcrumb">
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=index"><?php   echo Core_CLanguage::_('HOME');  ?></a> <span class="divider">/</span></li>
<li class="active"> <?php   echo Core_CLanguage::_('REGISTER');  ?> </li>
</ul>
<?php echo $this->_tpl_vars['account']; ?>
<div class="row-fluid">
<div class="title_fnt">
<h1><?php   echo Core_CLanguage::_('REGISTER');  ?> </h1>
</div>
<form class="form-horizontal" name="register_form" action="<?php echo $_SESSION['base_url']; ?>
/index.php?do=userregistration&action=addreg" method="POST">
<fieldset>
<div class="control-group">
<div class="controls">
<p class="info_fnt">
<?php   echo Core_CLanguage::_('FIELDS_MARKED_WITH_AN');  ?> <span class="red_fnt">*</span> <?php   echo Core_CLanguage::_('ARE_REQUIRED');  ?>
</p>
</div>
</div><h4><?php   echo Core_CLanguage::_('YOUR_PERSONAL_DETAILS');  ?> </h4>
<div>&nbsp;</div>
<div class="control-group">
<label for="input01" class="control-label"><?php   echo Core_CLanguage::_('DISPLAY_NAME');  ?>  <span class="red_fnt">*</span></label>
<div class="controls">
<input type="text" id="txtdisname" name="txtdisname" class="input-xlarge" value="<?php echo $this->_tpl_vars['val']['txtdisname']; ?>
"><br /><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['txtdisname']; ?>
</font>
</div>
</div>
<div class="control-group">
<label for="input01" class="control-label"><?php   echo Core_CLanguage::_('FIRST_NAME');  ?> <span class="red_fnt">*</span></label>
<div class="controls">
<input type="text" id="txtfname" name="txtfname" value="<?php echo $this->_tpl_vars['val']['txtfname']; ?>
" class="input-xlarge"><br /><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['txtfname']; ?>
</font>
</div>
</div>
<div class="control-group">
<label for="input01" class="control-label"><?php   echo Core_CLanguage::_('LAST_NAME');  ?> <span class="red_fnt">*</span></label>
<div class="controls">
<input type="text" id="txtlname" name="txtlname" value="<?php echo $this->_tpl_vars['val']['txtlname']; ?>
" class="input-xlarge"><br /><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['txtlname']; ?>
</font>
</div>
</div>
<div class="control-group">
<label for="input01" class="control-label"><?php   echo Core_CLanguage::_('EMAIL_ADDRESS');  ?> <span class="red_fnt">*</span></label>
<div class="controls">
<input type="text" id="txtemail" name="txtemail" value="<?php echo $this->_tpl_vars['val']['txtemail']; ?>
" class="input-xlarge">
<br /><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['txtemail']; ?>
</font>
</div>
</div>
<h4><?php   echo Core_CLanguage::_('YOUR_PASSWORD');  ?> </h4>
<div>&nbsp;</div>
<div class="control-group">
<label for="input01" class="control-label"><?php   echo Core_CLanguage::_('PASSSWORD');  ?>  <span class="red_fnt">*</span></label>
<div class="controls">
<input type="password" id="txtpwd" name="txtpwd" value="<?php echo $this->_tpl_vars['val']['txtpwd']; ?>
" class="input-xlarge"> <br /><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['txtpwd']; ?>
</font>
</div>
</div>
<div class="control-group">
<label for="input01" class="control-label"><?php   echo Core_CLanguage::_('CONFIRM_PASSWORD');  ?> <span class="red_fnt">*</span></label>
<div class="controls">
<input type="password" id="txtrepwd" name="txtrepwd" value="<?php echo $this->_tpl_vars['val']['txtrepwd']; ?>
" class="input-xlarge"><br /><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['txtrepwd']; ?>
</font>
</div>
</div>
<h4><?php   echo Core_CLanguage::_('YOUR_ADDRESS');  ?></h4>
<div>&nbsp;</div>
<div class="control-group">
<label for="input01" class="control-label"><?php   echo Core_CLanguage::_('ADDRESS');  ?>  <span class="red_fnt">*</span> </label>
<div class="controls">
<div id="txtHint"><input type="text" name="txtaddr" id="txtaddr" class="input-xlarge" value="<?php echo $this->_tpl_vars['val']['txtaddr']; ?>
"><br /><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['txtaddr']; ?>
</font></div>
</div>
</div>
<div class="control-group">
<label for="input01" class="control-label"><?php   echo Core_CLanguage::_('CITY');  ?>  <span class="red_fnt">*</span> </label>
<div class="controls">
<input type="text" name="txtcity" id="txtcity" class="input-xlarge" value="<?php echo $this->_tpl_vars['val']['txtcity']; ?>
"><br /><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['txtcity']; ?>
</font>
</div>
</div>
<div class="control-group">
<label for="textarea" class="control-label"><?php   echo Core_CLanguage::_('STATE/PROVINCE');  ?>  <span class="red_fnt">*</span></label>
<div class="controls">
<input type="text" name="txtState" id="txtState" value="<?php echo $this->_tpl_vars['val']['txtState']; ?>
" class="input-xlarge"><br><font color="#FF0000"><?php echo $this->_tpl_vars['msg']['txtState']; ?>
</font>
</div>
</div>
<div class="control-group">
<label for="textarea" class="control-label"><?php   echo Core_CLanguage::_('ZIP/POSTAL_CODE');  ?> <span class="red_fnt">*</span> </label>
<div class="controls">
<input type="text" name="txtzipcode" id="txtzipcode" value="<?php echo $this->_tpl_vars['val']['txtzipcode']; ?>
" class="input-xlarge"><br><font color="#FF0000"><?php echo $this->_tpl_vars['msg']['txtzipcode']; ?>
</font>
</div>
</div>
<div class="control-group">
<label for="input01" class="control-label"><?php   echo Core_CLanguage::_('COUNTRY');  ?>   <span class="red_fnt">*</span></label>
<div class="controls">
<?php echo $this->_tpl_vars['val']['selCountry']; ?>
</div>
</div>
<h4><?php   echo Core_CLanguage::_('NEWSLETTER');  ?> </h4>
<div>&nbsp;</div>
<div class="control-group">
<label for="input01" class="control-label"> <?php   echo Core_CLanguage::_('SUBCRIBE');  ?> </label>
<div class="controls">
<label class="radio inline">
<input type="radio" id="chknewsletter" value="1" name="chknewsletter"  <?php if ($this->_tpl_vars['val']['chknewsletter'] == 1): ?> checked<?php endif; ?> > <?php   echo Core_CLanguage::_('YES');  ?>
</label>
<label class="radio inline">
<input type="radio" id="chknewsletter" value="0" name="chknewsletter"  <?php if ($this->_tpl_vars['val']['chknewsletter'] == 0): ?> checked<?php endif; ?>> <?php   echo Core_CLanguage::_('NO');  ?>
</label>
</div>
</div>
<div class="control-group">
<div class="controls">
<label class="checkbox inline">
<input type="checkbox" align="absmiddle" name="chkterms" id="checkbox" value="1"> <?php   echo Core_CLanguage::_('I_ACCEPT_THE');  ?>  <a href="?do=termsandcondition" target="_blank"><?php   echo Core_CLanguage::_('USER_AGREEMENT');  ?>  </a><?php   echo Core_CLanguage::_('AND');  ?>  <a href="?do=privacypolicy" target="_blank"><?php   echo Core_CLanguage::_('PRIVACY_POLICY');  ?> </a><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['chkterms']; ?>
</font></label>
</div>
</div>
<div class="form-actions">
<button class="btn btn-large btn-primary" type="submit"><?php   echo Core_CLanguage::_('SUBMIT');  ?> </button>
</div>
</fieldset>
</form>
</div>
</div>
<!-- /container -->
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