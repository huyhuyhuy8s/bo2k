<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 15:32:12
compiled from sitemap.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<style>
.content_list_bdr tr td{  border-collapse:collapse; padding-left:5px;}
.maplinks{border-collapse:collapse;}
.maplinks a{ background:url(assets/img/images.png) 3px center no-repeat; padding-left:10px; font-size:12px; font-weight:normal;}
.admin_map td{ color:#2ea1e7!important; font-weight:bold; font-size:14px; background:url(assets/img/border.jpg) left bottom no-repeat; margin:0 10px; height: 26px;
padding-left: 0!important;}
.brd_none{ background:none!important;}
.admin_map td a{ color:#2ea1e7!important; font-weight:bold; font-size:14px;}
.maphead{color:#2ea1e7; font-weight:bold; }
.maplinks{ font-weight:bold;}
.content_title{font-weight: bold;
font-size: 16px;}
</style>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td  class="content_title" align="left" > ADMIN MAP</td>
</tr><tr><td>
<br/><table width="100%" align="center" height="861" border="0" cellpadding="0" cellspacing="0"  class="content_list_bdr">
<tr>
<td width="26" height="35">&nbsp;</td>
<td width="182" height="35" align="left"><a href="?do=adminlogin&action=validatelogin" style="text-decoration:none; color:#009900" class="maphead">Admin Home</a></td>
<td width="176" height="35"  class="maphead"><p class="maphead" style="text-decoration:none; color:#009900" >Catalog</p></td>
<td width="200" height="35" class="maphead" ><p class="maphead" style="text-decoration:none; color:#009900" >Customers</p></td>
<td width="163" height="35" class="maphead"><p class="maphead" style="text-decoration:none; color:#009900" >Orders</p></td>
<td width="171" height="35" class="maphead"><p class="maphead" style="text-decoration:none; color:#009900" >SubAdmins</p></td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks" >&nbsp;</td>
<td class="maplinks">Products</td>
<td class="maplinks"><a href="?do=adminreg" style="text-decoration:none">&nbsp;View Customers</a></td>
<td class="maplinks"><a href="?do=disporders" style="text-decoration:none">&nbsp;Order List</a></td>
<td class="maplinks"><a href="?do=subadminmgt" style="text-decoration:none">Sub Admin Management</a></td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=manageproducts" style="text-decoration:none">&nbsp;&nbsp;View Products</a></td>
<td class="maplinks"><a href="?do=addUserAccount" style="text-decoration:none">&nbsp;Create Customer</a></td>
<td class="maplinks"><a href="?do=userorder" style="text-decoration:none">&nbsp;Create Order</a></td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=selectfeatured" style="text-decoration:none">&nbsp;&nbsp;Featured Products</a></td>
<td class="maplinks"><a href="?do=custgroup" style="text-decoration:none">&nbsp;Group Management</a></td>
<td class="maplinks"><a href="?do=orexp" style="text-decoration:none">&nbsp;Export Order</a></td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=adminproductreview" style="text-decoration:none">&nbsp;&nbsp;Product Reviews</a></td>
<td class="maplinks"><a href="?do=custreport" style="text-decoration:none">Export Customer</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=productinventory" style="text-decoration:none">&nbsp;&nbsp;Inventory</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=bulkupload" style="text-decoration:none">&nbsp;&nbsp;Products Bulk Upload</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=bulkupload&action=displayimagesbulkupload" style="text-decoration:none">&nbsp;&nbsp;Images Bulk Upload</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=prodexp" style="text-decoration:none">&nbsp;&nbsp;Export Product</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">Attributes</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=attributes" style="text-decoration:none">&nbsp;&nbsp;Attribute</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=attributevalues" style="text-decoration:none">&nbsp;&nbsp;Attribute Value</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">Categories</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=showmain" style="text-decoration:none">&nbsp;&nbsp;Category</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=catexp" style="text-decoration:none">&nbsp;&nbsp;Category Export</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks"><a href="?do=catbulkupload" style="text-decoration:none">&nbsp;&nbsp;Category Bulk Upload</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr class="maphead">
<td height="34">&nbsp;</td>
<td class="maphead"><p class="maphead" style="text-decoration:none; color:#009900" >Settings</p></td>
<td class="maphead"><p class="maphead" style="text-decoration:none; color:#009900" >Coupons</p></td>
<td class="maphead"><p class="maphead" style="text-decoration:none; color:#009900" >CMS</p></td>
<!-- <td class="maphead">Business Intelligence</td>-->
<td class="maphead"><p class="maphead" style="text-decoration:none; color:#009900" >Others</p></td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;Site Settings</td>
<td class="maplinks"><a  href="?do=createpromotionalcodes&action=listcoupons" style="text-decoration:none">&nbsp;Coupons</a></td>
<!--<td class="maplinks"> <a href="?do=createpage" style="text-decoration:none">Custom Pages List</a></td>-->
<!-- <td class="maplinks">Store Status</td>-->
<td class="maplinks"><a href="?do=dynamiccms&action=show" style="text-decoration:none">&nbsp;Create Dynamic Page</a></td>
<td class="maplinks"><a href="?do=homepageads" style="text-decoration:none">&nbsp;Home Page Ads</a></td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;&nbsp;<a href="?do=site" style="text-decoration:none">&nbsp;Site Settings</a></td>
<td class="maplinks">News Letter</td>
<td class="maplinks"> <a href="?do=terms" style="text-decoration:none">&nbsp;Terms & Conditions</a></td>
<td class="maplinks"><a href="?do=mostsearchedkeywords" style="text-decoration:none">&nbsp;Searched Keywords </a></td>
<!--<td class="maplinks"><a href="?do=bestsellingproducts" style="text-decoration:none">Best Selling Products</a></td>-->
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;&nbsp;<a href="?do=selectskin" style="text-decoration:none">&nbsp;Site Skin</a></td>
<td class="maplinks"> &nbsp;&nbsp;<a href="?do=adminprivacypolicy" style="text-decoration:none">&nbsp;View</a></td>
<td class="maplinks"><a href="?do=adminprivacypolicy" style="text-decoration:none">&nbsp;Privacy Policy</a></td>
<td class="maplinks"><a href="?do=activity" style="text-decoration:none">&nbsp;Admin Activity Report</a></td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;&nbsp;<a href="?do=banner" style="text-decoration:none">&nbsp;Home Page Banner</a></td>
<td class="maplinks">&nbsp;&nbsp;<a href="?do=newsletter&action=subscrib" style="text-decoration:none">&nbsp;Subscribed Users</a></td>
<td class="maplinks"> <a href="?do=faq" style="text-decoration:none">&nbsp;FAQs</a></td>
<td class="maplinks"><a href="?do=admactexp" style="text-decoration:none">&nbsp;Admin Activity Export</a></td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">Footer Settings</td>
<td class="maplinks"> <a  href="?do=gadsense" style="text-decoration:none">&nbsp;Google AdSense Code</a></td>
<td class="maplinks"><a href="?do=aboutus" style="text-decoration:none">&nbsp;About Us</a></td>
<td class="maplinks"><a href="?do=siteinfo" style="text-decoration:none">Server Information</a></td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;&nbsp; <a  href="?do=footersettings&action=connect" style="text-decoration:none">&nbsp;Footer Management</a></td>
<td class="maplinks"><a  href="?do=adword" style="text-decoration:none">&nbsp;Google AdWord</a></td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks"><a href="?do=mailmessages" style="text-decoration:none">&nbsp;Mail Settings</a></td>
<td class="maplinks"><a href="?do=googleproduct" style="text-decoration:none">&nbsp;Google Base Data Feed</a></td>
<td class="maplinks">&nbsp;</td>
<!--<td class="maplinks">&nbsp;&nbsp;<a href="?do=showchart&id=6" style="text-decoration:none">Awaiting Payment</a></td>-->
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks"><a  href="?do=sociallink" style="text-decoration:none">&nbsp;Social Link Settings</a></td>
<!--<td class="maplinks"><a  href="?do=googleproduct" style="text-decoration:none">Google Base Data Feed</a></td>-->
<td class="maplinks">&nbsp;</td>
<!--<td class="maplinks">&nbsp;&nbsp;<a href="?do=showchart&id=7" style="text-decoration:none">Quantity Break Down</a></td>-->
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks"><a  href="?do=adminpayment" style="text-decoration:none">&nbsp;Payment Settings</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<!--<td class="maplinks">Product Status </td>-->
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks"><a href="?do=taxsettings" style="text-decoration:none">&nbsp;Tax Settings</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<!--<td class="maplinks">&nbsp;&nbsp;<a href="?do=showchart&id=9" style="text-decoration:none">Products Sold(By Units)</a></td>-->
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks"><a href="?do=showcurrencylist" style="text-decoration:none">&nbsp;Currency Settings</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<!--<td class="maplinks">&nbsp;&nbsp;<a href="?do=showchart&id=10" style="text-decoration:none">Products Sold(By Revenue)</a></td>-->
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks"><a href="?do=livechat" style="text-decoration:none">&nbsp;Live Chat</a></td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<!--<td class="maplinks">Customer Status</td>-->
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<!--<td class="maplinks"><a href="?do=cse" style="text-decoration:none">CSE Settings</a></td>-->
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<!--<td class="maplinks">&nbsp;&nbsp;<a href="?do=showchart&id=2" style="text-decoration:none">New Customers</a></td>-->
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<!--<td class="maplinks">&nbsp;&nbsp;<a href="?do=showchart&id=11" style="text-decoration:none">Customers(By Location)</a></td>-->
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<!--<td class="maplinks">&nbsp;&nbsp;<a href="?do=showchart&id=12" style="text-decoration:none">Customers Seniority</a></td>-->
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
<tr>
<td height="21">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
<td class="maplinks">&nbsp;</td>
</tr>
</table></td></tr></table></div>
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