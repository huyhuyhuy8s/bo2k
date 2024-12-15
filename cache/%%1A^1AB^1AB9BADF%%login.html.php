<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:51:58
compiled from login.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<!-- body start here-->
<div class="container">
<ul class="breadcrumb">
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=index">Home</a> <span class="divider">/</span></li>
<li class="active"><?php   echo Core_CLanguage::_('MEMBER_LOGIN');  ?></li>
</ul>
<div class="row-fluid">
<div class="title_fnt">
<h1><?php   echo Core_CLanguage::_('MEMBER_LOGIN');  ?></h1>
</div>
<div class="row-fluid">
<div class="span6">
<form name="loginfrm" method="post" action="<?php echo $_SESSION['base_url']; ?>
/index.php?do=login&action=validatelogin" >
<div id="loginfrm">
<ul class="loginfourm">
<li><b><?php   echo Core_CLanguage::_('E-MAIL_ADDRESS');  ?></b></li>
<li><input type="text" name="txtemail" class="input-large" value="<?php echo $this->_tpl_vars['val']['txtemail']; ?>
"><br /><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['txtemail']; ?>
</font></li>
<li><b><?php   echo Core_CLanguage::_('PASSSWORD');  ?></b></li>
<li><input type="password" name="txtpass" class="input-large"><br /><font color="#FF0000">
<?php echo $this->_tpl_vars['msg']['txtpass']; ?>
</font></li>
<li><input type="checkbox" name="remlogin" value="on" > <?php   echo Core_CLanguage::_('REMEMBER_ME?');  ?></li>
<li><input type="submit" value="<?php   echo Core_CLanguage::_('LOGIN');  ?>" class="btn btn-danger"> </li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/forgotpassword.html"> <?php   echo Core_CLanguage::_('FORGOT_PASSWORD');  ?></a> <span><?php   echo Core_CLanguage::_('OR');  ?></span> <a href="<?php echo $_SESSION['base_url']; ?>
/faq.html" target="_blank"><?php   echo Core_CLanguage::_('NEED_HELP?');  ?></a> </li>
</ul>
</div>
</form>
</div>
<div class="span6">
<div class="followus_div">
<a href="#" id="openfb" class="facebook_btn"></a>
<a href="#" id="opentw" class="twitter_btn"></a>
<a href="#" id="opengp" class="google_btn"></a></div>
<p class="userlogin_fnt"><span><?php   echo Core_CLanguage::_('OR_LOG_IN_USING_YOUR_USERNAME_AND_PASSWORD');  ?></span></p>
<div id="signin_acc">
<ul class="signin-account">
<li> <h5><?php   echo Core_CLanguage::_('SIGN_UP_FOR_AN_ACCOUNT');  ?></h5></li>
<li> <p><?php   echo Core_CLanguage::_('REGISTRATION_IS_FAST_AND_FREE');  ?></p></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/register.html"><input type="button" value="<?php   echo Core_CLanguage::_('REGISTER_HERE');  ?>" class="btn btn-inverse"></a></li>
</ul>
<b><?php   echo Core_CLanguage::_('ACCOUNT_PROTECTION_TIPS');  ?></b>
<ul class="acctips">
<li><?php   echo Core_CLanguage::_('CHOSSE_A_STRONG_PASSWORD_AND_CHNAGE_IT_OFTEN.');  ?></li>
<li><?php   echo Core_CLanguage::_('AVOID_USING_THE_SAME_PASSWORD_FOR_OTHER_ACCOUNTS');  ?></li>
<li><?php   echo Core_CLanguage::_('CREATE_A_UNIQUE_PASSWORD_BY_USING_A_COMBINATION_OF_LETTRES_AND_NUMBERS_THAT_ARE_NOT_EASILY_GUESSED');  ?></li>
</ul>
</div>
</div>
</div>
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