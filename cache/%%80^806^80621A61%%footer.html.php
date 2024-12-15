<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:27:25
compiled from footer.html */ ?>
<!--Footer-->
<footer>
<div id="order_div">
<div class="container">
<div class="row-fluid">
<div class="span7"><h3><?php   echo Core_CLanguage::_('FREE_SHIPPING_ON_ORDERS_OVER');  ?> <span><?php echo $_SESSION['currencysetting']['selected_currency_settings']['currency_tocken']; ?>
<?php echo $this->_tpl_vars['footerconnect']['free_shipping_cost']; ?>
</span></h3></div>
<div class="span5">      <?php echo $this->_tpl_vars['newsletter']; ?>
<form name="newsletter" action="<?php echo $_SESSION['base_url']; ?>
/index.php?do=subnewsletter" method="post" class="form-inline" style="float:right">
<label class="checkbox">
<?php   echo Core_CLanguage::_('SIGN_UP_FOR_OUT_NEWSLETTER');  ?>
</label>
<input name="email" class="input-small"  type="text"  maxlength="100" value="<?php   echo Core_CLanguage::_('YOUR_EMAIL');  ?>" onblur="if(this.value=='') this.value='Your Email'" onfocus="this.value=''" />
<button type="submit" class="btn btn-danger"><?php   echo Core_CLanguage::_('SUBMIT');  ?></button>
</form></div>
</div></div>
</div>
<div class="ftr_cnt_area">
<div class="container">
<div class="row-fluid">
<div class="span2">
<h3><?php   echo Core_CLanguage::_('INFORMATION');  ?></h3>
<ul class="ftrlist">
<li><a href="<?php echo $_SESSION['base_url']; ?>
/aboutus.html"><?php   echo Core_CLanguage::_('ABOUT_US');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/policy.html"><?php   echo Core_CLanguage::_('PRIVACY_POLICY');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/terms.html"><?php   echo Core_CLanguage::_('TERMS_&_CONDITIONS');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/faq.html"><?php   echo Core_CLanguage::_('FAQ');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=morenews"><?php   echo Core_CLanguage::_('LATEST_NEWS');  ?></a></li>
</ul>
</div>
<div class="span3">
<h3><?php   echo Core_CLanguage::_('CUSTOMER_SERVICE');  ?></h3>
<ul class="ftrlist">
<li><a href="<?php echo $_SESSION['base_url']; ?>
/contact.html"><?php   echo Core_CLanguage::_('CONTACT_US');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/site.html"><?php   echo Core_CLanguage::_('SITE_MAP');  ?></a></li>
</ul>
</div>
<div class="span2">
<h3><?php   echo Core_CLanguage::_('MY_ACCOUNT');  ?></h3>
<ul class="ftrlist">
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=dashboard"><?php   echo Core_CLanguage::_('MY_ACCOUNT');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=wishlist"><?php   echo Core_CLanguage::_('WISH_LIST');  ?></a></li>
</ul>
</div>
<div class="span2">
<h3><?php   echo Core_CLanguage::_('EXTRAS');  ?></h3>
<ul class="ftrlist">
<li><a href="<?php echo $_SESSION['base_url']; ?>
/index.php?do=brands&schltr=All"><?php   echo Core_CLanguage::_('BRANDS');  ?></a></li>
<li><a href="<?php echo $_SESSION['base_url']; ?>
/giftproducts.html"><?php   echo Core_CLanguage::_('GIFT_VOUCHRES');  ?></a></li>
</ul>
</div>
<div class="span3">
<h3><?php   echo Core_CLanguage::_('CONNECT_WITH_US');  ?></h3>
<ul class="cntwithus">
<li><img src="<?php echo $_SESSION['base_url']; ?>
/assets/img/phone-icn.png" alt="phone"> <?php   echo Core_CLanguage::_('CALL_US');  ?> : <?php echo $this->_tpl_vars['footerconnect']['callus']; ?>
</li>
<li><img src="<?php echo $_SESSION['base_url']; ?>
/assets/img/mail-icn.png" alt="phone"><?php   echo Core_CLanguage::_('EMAIL');  ?> :<a href="mailto:<?php echo $this->_tpl_vars['footerconnect']['email']; ?>
" > <?php echo $this->_tpl_vars['footerconnect']['email']; ?>
</a></li>
<li><img src="<?php echo $_SESSION['base_url']; ?>
/assets/img/print-icn.png" alt="phone"> <?php   echo Core_CLanguage::_('FAX');  ?> :<?php echo $this->_tpl_vars['footerconnect']['fax']; ?>
</li>
<li><img src="<?php echo $_SESSION['base_url']; ?>
/assets/img/map-icn.png" alt="phone"> <?php   echo Core_CLanguage::_('LOCATION');  ?> : <?php echo $this->_tpl_vars['footerconnect']['location']; ?>
</li>
</ul>
</div>
</div>
</div>
</div>
<?php
$sql="SELECT * FROM live_chat_table   WHERE id='1' AND live_chat_status='0' ";
$obj=mysql_query($sql);
$fetch_icon=mysql_fetch_array($obj);
echo $fetch_icon['live_chat_script'];
?>
<div class="footer_inbx1" id="cpy_div">
<div class="container">
<div class="row-fluid">
<div class="span6"><p><?php echo $this->_tpl_vars['footerconnect']['footercontent']; ?>
</p></div>
<div class="span1"><!--<img src="assets/img/payment.png" alt="payment">--></div>
<div class="span5">
<?php echo $this->_tpl_vars['sociallink']; ?>
</div>
</div>
</div></br>
<?php echo $this->_tpl_vars['headerMainMenu']; ?>
</div>
</footer>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="<?php echo $_SESSION['base_url']; ?>
/assets/js/widgets.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/google-code-prettify/prettify.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/transition.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/alert.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/modal.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/dropdown.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/scrollspy.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/tab.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/tooltip.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/popover.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/button.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/collapse.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/carousel.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/typeahead.js"></script>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/application.js"></script>
<?php if ($_GET['do'] == '' || $_GET['do'] == 'index' || $_GET['do'] == 'logout'): ?>
<script type="text/javascript">
$('.search_icn').on("click",function () {
var productId = $(this).data('id');
$.ajax({
url:'<?php echo $_SESSION['base_url']; ?>
/index.php?do=prodetail&action=showpopupprod',
data: 'prodid='+productId,
type: 'GET',
success: function (resp) {
document.getElementById('popupproductdetails').innerHTML=resp;
}
});
});
</script>
<?php endif; ?>
</body>
</html>
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