<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 09:21:37
compiled from editproduct.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="../js/ajax.js"></script>
<link rel="stylesheet" href="assets/css/jquery.ibutton.min.css" />
<script src="assets/js/jquery.ibutton.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-fileupload.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css">
<script type="text/javascript" language="javascript">
$(function(){
$('#intro_date').datepicker();
});
function showProducts(subcatid)
{
if(subcatid!='')
{
var url ="?do=productreg&action=showproducts&name=" + subcatid;
ajax(url, 'productlist');
}
}
function showSubCat(id)
{
if(id!='')
{
var url='?do=productentry&action=displaySubCategory&id='+ id;
ajax(url,'subcats');
}
}
function assignSubCat(id)
{
if(id!='')
{
document.getElementById('subcat').value=id;
var url='?do=productentry&action=displayAttributes&id='+ id;
ajax(url,'attributes');
var url1='?do=productentry&action=displaySubUnderCategory&id='+ id;
ajax(url1,'subcatsunder');
}
}
function productalias(val)
{
var prodid='<?php echo $_GET['prodid']; ?>
';
if(val!='')
{
$.ajax({
url:'?do=manageproducts&action=productalias',
data: 'alias='+val+'&prodid='+prodid,
type: 'GET',
success: function (resp) {
if(resp ==1)
{
document.getElementById('checkalias').innerHTML="<code >Product alias already exists</code>";
}
else
{
document.getElementById('uniquesku').innerHTML="";
}
}
});
}
}
function checksku(val)
{
var prodid='<?php echo $_GET['prodid']; ?>
';
if(val!='')
{
$.ajax({
url:'?do=manageproducts&action=productsku',
data: 'sku='+val+'&prodid='+prodid,
type: 'GET',
success: function (resp) {
if(resp ==1)
{
document.getElementById('uniquesku').innerHTML="<code >Product sku already exists</code>";
}
else
{
document.getElementById('uniquesku').innerHTML="";
}
}
});
}
}
</script>
<script language="javascript">
function addEvent()
{
var ni = document.getElementById('myDiv');
var numi = document.getElementById('theValue');
var num = (document.getElementById("theValue").value -1)+ 2;
if(num < 5)
{
numi.value = num;
var divIdName = "my"+num+"Div";
var newdiv = document.createElement('div');
newdiv.setAttribute("id",divIdName);
//alert(num);
newdiv.innerHTML = "<table border='0' cellspacing='3' cellpadding='3' width='100%'><tr><td width='31%'>Sub Product Image</td><td><input type=file name=ufile[] id=ufile[]>&nbsp;&nbsp;&nbsp;<a href=\"javascript:;\" onclick=\"removeEvent(\'"+divIdName+"\')\">Remove</a><br></td></tr></table>";
ni.appendChild(newdiv);
}
}
function cseshow()
{
if(document.getElementById('cse_enabled').checked==true)
document.getElementById('divcsekey').style.display = 'block';
else if(document.getElementById('cse_enabled').checked==false)
document.getElementById('divcsekey').style.display = 'none';
}
function removeEvent(divNum)
{
var d = document.getElementById('myDiv');
var olddiv = document.getElementById(divNum);
var num=(document.getElementById("theValue").value -1);
document.getElementById("theValue").value=num;
d.removeChild(olddiv);
}
function clk(id,source,no)
{
document.getElementById('tabs_det').innerHTML=no;
document.getElementById('Image51').src='images/tab_images/category.jpg';
document.getElementById('Image52').src='images/tab_images/general.jpg';
document.getElementById('Image54').src='images/tab_images/images.jpg';
document.getElementById('Image55').src='images/tab_images/attributes.jpg';
document.getElementById('Image56').src='images/tab_images/price.jpg';
document.getElementById('Image57').src='images/tab_images/inventory.jpg';
document.getElementById('Image58').src='images/tab_images/variation.jpg';
//document.getElementById('Image59').src='images/tab_images/May_tab1_09.jpg';
document.getElementById('Image60').src='images/tab_images/meta.jpg';
document.getElementById('Image61').src='images/tab_images/related.jpg';
document.getElementById(id).src=source;
for(i=1;i<=13;i++)
{
tg='tab'+i;
if(i==no)
document.getElementById(tg).style.display='block';
else
document.getElementById(tg).style.display='none';
}
}
function searchProducts(view)
{
var title=document.getElementById('title1').value;
var brand=document.getElementById('brand1').value;
var frommsrp=document.getElementById('frommsrp1').value;
var tomsrp=document.getElementById('tomsrp1').value;
var fromprice=document.getElementById('fromprice1').value;
var toprice=document.getElementById('toprice1').value;
/*	alert(title);
alert(brand);
alert(frommsrp);
alert(tomsrp);
alert(fromprice);
alert(toprice);
*/
var url ="?do=productentry&action=search&title="+title+"&brand="+brand+"&frommsrp="+frommsrp+"&tomsrp="+tomsrp+"&fromprice="+fromprice+"&toprice="+toprice+"&view="+view;
ajax(url, 'search');
}
function chkall()
{
len=document.productupdate.chkSub.length;
//alert(len);
if(len > 1)
{
for(i=0;i<len;i++)
{
if(document.productupdate.chkMain.checked==true)
{
document.productupdate.chkSub[i].checked=true;
}
else
{
document.productupdate.chkSub[i].checked=false;
}
}
}
else
{
if(document.productupdate.chkMain.checked==true)
{
document.productupdate.chkSub.checked=true;
}
else
{
document.productupdate.chkSub.checked=false;
}
}
}
/*function addTier()
{
var ni = document.getElementById('myTier');
var numi = document.getElementById('msrp1');
var num = (document.getElementById("msrp1").value -1)+ 2;
if(num < 5)
{
numi.value = num;
var divIdName = "my"+num+"Tier";
var newdiv = document.createElement('div');
newdiv.setAttribute("id",divIdName);
//alert(num);
newdiv.innerHTML = "<table border='0' width='100%'><tr><td width='42%'><INPUT NAME='quantity[]' ID='quantity[]'  type='text'  size='3' />&nbsp;	and above</td><td width='31%'><INPUT NAME='msrp[]' ID='msrp[0]'  type='text'  size='5' />&nbsp;<b>[USD]</b></td><td >&nbsp;<a href=\"javascript:;\" onclick=\"removeTier(\'"+divIdName+"\')\">Remove</a></td></tr><table>";
ni.appendChild(newdiv);
}
}
function removeTier(divNum)
{
var d = document.getElementById('myTier');
var olddiv = document.getElementById(divNum);
var num=(document.getElementById("msrp1").value -1);
document.getElementById("msrp1").value=num;
d.removeChild(olddiv);
}*/
function addTier(cursym)
{
var ni = document.getElementById('myTier');
var numi = document.getElementById('msrp1');
var num = (document.getElementById("msrp1").value -1)+ 2;
if(num < 5)
{
numi.value = num;
var divIdName = "my"+num+"Tier";
var newdiv = document.createElement('div');
newdiv.setAttribute("id",divIdName);
//alert(num);
newdiv.innerHTML = "<table border='0' width='100%'><tr><td width='42%'><INPUT NAME='quantity[]' ID='quantity[]'  type='text'  size='3' onblur=\"if (this.value!='') if (parseFloat(this.value)<=1) {  alert('Enter Quantity Greater Than 1');this.focus(); this.value=''; } \"/>&nbsp;	and above</td><td width='31%'><INPUT NAME='msrp[]' ID='msrp[0]'  type='text'  size='5' onblur=\"if (this.value!='') {if ((parseFloat(document.productreg.msrp_org.value) < parseFloat(this.value))||(parseFloat(this.value)<parseFloat(document.productreg.price.value))) {  alert('Tier Price Should Be Greater Then The Product Price And Less Than Product MSRP ');this.focus(); this.value=''; } }\" />&nbsp;<b>["+cursym+"]</b></td><td >&nbsp;<a href=\"javascript:;\" onclick=\"removeTier(\'"+divIdName+"\')\">Remove</a></td></tr><table>";
ni.appendChild(newdiv);
}
}
function removeTier(divNum)
{
var d = document.getElementById('myTier');
var olddiv = document.getElementById(divNum);
var num=(document.getElementById("msrp1").value -1);
document.getElementById("msrp1").value=num;
d.removeChild(olddiv);
}
function checkInputs()
{
if(document.getElementById('selcatgory').value=='')
{
alert("Please enter the mandatory fields In Category");
tabOpenvalidation('1');
return false;
}
else
{
if ((document.productupdate.product_title.value=='') || (document.productupdate.sku.value=='') || (document.productupdate.txtweight.value==''))
{
alert('Please enter the mandatory fields In General');
tabOpenvalidation('2');
return false;
}
else
{
if(!$('#uniquesku').is(':empty'))
{
alert('Please enter the unique sku');
tabOpenvalidation('2');
return false;
}
alias=$('#checkalias').html();
if(!$('#checkalias').is(':empty'))
{
alert('Please enter the product alias');
tabOpenvalidation('2');
return false;
}
if(isNaN(document.productupdate.txtweight.value))
{
alert('Invalid Inputs In Weight');
tabOpenvalidation('2');
return false;
}
else
{
if ((document.productupdate.price.value=='')|| (document.productupdate.msrp.value=='')  )
{
alert('Please enter the mandatory fields In Price');
tabOpenvalidation('5');
return false;
}
else
{
if ( isNaN(document.productupdate.price.value)|| isNaN(document.productupdate.msrp.value))
{
alert('Invalid Inputs In Price');
tabOpenvalidation('5');
return false;
}
else if ((document.productupdate.price.value=='0')|| (document.productupdate.msrp.value=='0'))
{
alert('Enter the  Inputs In Price Greater than Zero');
tabOpenvalidation('5');
return false;
}
// 					for(i=1;i<=5;i++)
// 					{
//
// 						if(document.getElementById("my"+i+"Tier"))
// 						{
//
// 						if(document.getElementById("quantityfrom"+i).value==''||document.getElementById("quantityto"+i).value==''||document.getElementById("msrp"+i).value=='')
// 							{
// 							alert('Please enter the mandatory fields In Price'+i);
// 							clk('Image55','images/tab_images/tab_price_hov.gif',8);
// 							return false;
// 							}else
// 							{
// 								if (isNaN(document.getElementById("quantityfrom"+i).value)|| isNaN(document.getElementById("quantityto"+i).value)||isNaN(document.getElementById("msrp"+i).value))
// 									{
// 										alert('Quantity From,Quantity To,MSRP Per Unit 	 should be allowed numeric only.');
// 										clk('Image55','images/tab_images/tab_price_hov.gif.gif',8);
// 										return false;
// 									}
//
// 							}
// 						}
// 					}
if (parseFloat(document.productupdate.msrp.value)<parseFloat(document.productupdate.price.value))
{
alert('Product MSRP Should Be Greater Than Product Price');
tabOpenvalidation('5');
return false;
}
else
{
if(document.productupdate.soh.value=='')
{
alert('Please Enter the Stock on Hand Quantity');
tabOpenvalidation('6');
return false;
}
if (isNaN(document.productupdate.soh.value))
{
alert('Invalid Inputs In Inventory');
tabOpenvalidation('6');
return false;
}
if (isNaN(document.productupdate.rol.value))
{
alert('Invalid Inputs In Inventory');
tabOpenvalidation('6');
return false;
}
for(i=1;i<=5;i++)
{
//alert("varianname"+i);
if(document.getElementById("varianname"+i))
{
if(document.getElementById("varianname"+i).value==''||document.getElementById("prsku"+i).value==''||document.getElementById("prprice"+i).value==''||document.getElementById("prmsrp"+i).value==''||document.getElementById("prsoh"+i).value==''||document.getElementById("prrol"+i).value=='')
{
alert('Please enter the mandatory fields In Variation'+i);
tabOpenvalidation('7');
return false;
}else
{
if (isNaN(document.getElementById("prprice"+i).value)|| isNaN(document.getElementById("prmsrp"+i).value)||isNaN(document.getElementById("prsoh"+i).value)|| isNaN(document.getElementById("prrol"+i).value) || isNaN(document.getElementById("prshipcost"+i).value))
{
alert('Price,MSRP,SOH,Shipping Cost and ROL should be allowed numeric only.');
tabOpenvalidation('7');
return false;
}
if (parseFloat(document.getElementById("prprice"+i).value)<0|| parseFloat(document.getElementById("prmsrp"+i).value)<0||parseFloat(document.getElementById("prsoh"+i).value)<0|| parseFloat(document.getElementById("prrol"+i).value)<0 || parseFloat(document.getElementById("prshipcost"+i).value)<0)
{
alert('Price,MSRP,SOH,Shipping Cost and ROL should be greater than 0.');
tabOpenvalidation('7');
return false;
}
if (parseFloat(document.getElementById("prmsrp"+i).value)<parseFloat(document.getElementById("prprice"+i).value))
{
alert('Product MSRP Should Be Greater than Product Price');
tabOpenvalidation('7');
return false;
}
if(document.getElementById("prwidth"+i).value!='')
{
if(isNaN(document.getElementById("prwidth"+i).value)||parseFloat(document.getElementById("prwidth"+i).value)<0)
{
alert('Invalid inputs in width');
tabOpenvalidation('7');
return false;
}
}
if(document.getElementById("prheight"+i).value!='')
{
if(isNaN(document.getElementById("prheight"+i).value)||parseFloat(document.getElementById("prheight"+i).value)<0)
{
alert('Invalid inputs in height');
tabOpenvalidation('7');
return false;
}
}
if(document.getElementById("prdepth"+i).value!='')
{
if(isNaN(document.getElementById("prdepth"+i).value)||parseFloat(document.getElementById("prdepth"+i).value)<0)
{
alert('Invalid inputs in depth');
tabOpenvalidation('7');
return false;
}
}
if(document.getElementById("prweight"+i).value!='')
{
if(isNaN(document.getElementById("prweight"+i).value)||parseFloat(document.getElementById("prweight"+i).value)<0)
{
alert('Invalid inputs in weight');
tabOpenvalidation('7');
return false;
}
}
if(document.getElementById("prshipcost"+i).value!='')
{
if(isNaN(document.getElementById("prshipcost"+i).value)||parseFloat(document.getElementById("prshipcost"+i).value)<0)
{
alert('Invalid inputs in shipping cost');
tabOpenvalidation('7');
return false;
}
}
}
}
}
}
}
}
}
}
return true;
}
function tabOpen(hide,show)
{
$('#tab'+hide).removeClass('active');
$('#Image'+hide).removeClass('active');
$('#tab'+show).addClass('active');
$('#Image'+show).addClass('active');
}
function tabOpenvalidation(show)
{
for(i=1;i<=9;i++)
{
if(i==show)
{
$('#tab'+show).addClass('active');
$('#Image'+show).addClass('active');
}
else{
$('#tab'+i).removeClass('active');
$('#Image'+i).removeClass('active');
}
}
}
$(document).ready(function (){
$('#editProductdetailsIcon').click(function(){
$("#editProductdetails").submit();
});
});
function productalias(val)
{
if(val!='')
{
var url='?do=productentry&action=productalias&alias='+ val;
ajax(url,'checkalias');
}
}
function addVariation()
{
ni=document.getElementById('productVariationDiv');
var num = 5;
for(i=1;i<=num;i++)
{
if(!document.getElementById("productVariationDiv"+i))
{
num=i;
var newdiv = document.createElement('div');
newdiv.setAttribute("id","productVariationDiv"+i);
var divIdName ="productVariationDiv"+i;
if(i%2==0)
{
var tablecl="   class='alert_row2' onmouseover=\"mouse_event(this, 'listrow_bg');\" onmouseout=\"mouse_event(this, 'alert_row2');\" ";
}
else
{
var tablecl="   class='alert_row1' onmouseover=\"mouse_event(this, 'listrow_bg');\" onmouseout=\"mouse_event(this, 'alert_row1');\" ";
}
newdiv.innerHTML = "<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'><tr "+tablecl+" ><td width='15%' ><input id='varianname"+i+"' name='varianname[]' type='text' class='span12'/></td><td width='5%'><input id='prsku"+i+"' name='prsku[]' type='text' class='span12' /></td><td width='5%'><input id='prprice"+i+"' name='prprice[]' type='text'  class='span12'/></td><td width='5%' ><input id='prmsrp"+i+"' name='prmsrp[]' type='text' class='span12'/></td><td width='15%' ><input id='prvarimage"+i+"' name='prvarimage[]' type='file'   size='3' style='width: 173px ! important;'/></td><td width='5%'  ><img src='../images/noimage.jpg' width='35' height='35'></td><td width='20%'><input id='prwidth"+i+"' name='prwidth[]' type='text' class=\"variation_date\"/><input id='prheight"+i+"' name='prheight[]' type='text' class=\"variation_date\"/><input id='prdepth"+i+"' name='prdepth[]' type='text'  class=\"variation_date\"/></td><td width='5%' ><input id='prweight"+i+"' name='prweight[]' type='text' class='span12'/></td><td  width='10%' ><input id='prshipcost"+i+"' name='prshipcost[]' type='text' class='span12'/></td><td  width='5%' ><input id='prsoh"+i+"' name='prsoh[]' type='text' class='span12' /></td><td width='5%' ><input id='prrol"+i+"' name='prrol[]' type='text' class='span12' /></td><td width='5%'  ><a href=\"javascript:;\"  onclick=\"removeVariation(\'"+divIdName+"\')\"><i class='icon-remove'></i></a></td></tr></table>";
ni.appendChild(newdiv);
}
}
}
function removeVariation(rdiv)
{
ni=document.getElementById('productVariationDiv');
var olddiv = document.getElementById(rdiv)
ni.removeChild(olddiv);
}
</script>
<style>
/* bordered tabbable  */
.tabbable-bordered { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.tabbable-bordered > .nav-tabs { margin: 0; border: none; }
.tabbable-bordered > .tab-content { height: auto; border-style: solid; border-color: #ddd; padding: 10px; border-width: 1px; -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.tabs-below.tabbable-bordered > .tab-content { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.tabs-left.tabbable-bordered > .tab-content { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.tabs-right.tabbable-bordered > .tab-content { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
.tabbable-bordered .nav-tabs > li { margin-right: 2px; border-top: 2px solid transparent; }
.tabbable-bordered .nav-tabs > li > a { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; margin-right: 0; padding: 6px 10px; }
.tabbable-bordered .nav-tabs > li > a:hover { background: none; border-color: transparent; }
.tabbable-bordered .nav-tabs > li.active { border-top: 3px solid #368CA9; margin-top: 0; position: relative; }
.tabbable-bordered .nav-tabs > li.active > a { border-top: none; font-weight: 700; }
.tabbable-bordered .nav-tabs > li.active > a:hover { background: #fff; border-color: #ddd #ddd transparent; }
.tabs-below.tabbable-bordered .nav-tabs > li { border-top: none; border-bottom: 2px solid transparent; margin-top: -1px; }
.tabs-below.tabbable-bordered .nav-tabs > li.active { border-top: none; border-bottom: 3px solid #368CA9; margin-bottom: 0; position: relative; }
.tabs-below.tabbable-bordered .nav-tabs > li.active > a { border-bottom: none }
.tabs-below.tabbable-bordered .nav-tabs > li.active > a:hover { background: #fff; border-color: #ddd #ddd transparent; }
.tabs-left.tabbable-bordered .nav-tabs > li { margin-right: 0; border-left: 2px solid transparent; border-top: none; }
.tabs-left.tabbable-bordered .nav-tabs > li.active { border-top: none; border-left: 3px solid #368CA9; margin-top: 0; margin-right: -1px; position: relative; }
.tabs-left.tabbable-bordered .nav-tabs > li.active > a { border-top: 1px solid #ddd; border-left: 1px solid transparent; }
.tabs-left.tabbable-bordered .nav-tabs > li.active > a:hover { background: #fff; border-color: #ddd transparent #ddd; }
.tabs-right.tabbable-bordered .nav-tabs > li { margin-right: 0; border-right: 2px solid transparent; border-top: none; }
.tabs-right.tabbable-bordered .nav-tabs > li.active { border-top: none; border-right: 3px solid #368CA9; margin-top: 0; margin-left: -1px; position: relative; }
.tabs-right.tabbable-bordered .nav-tabs > li.active > a { border-top: 1px solid #ddd; border-right: 1px solid transparent; }
.tabs-right.tabbable-bordered .nav-tabs > li.active > a:hover { background: #fff; border-color: #ddd transparent #ddd; }
.tabs-right.tabbable-bordered .nav-tabs > li a, .tabs-left.tabbable-bordered .nav-tabs > li a { padding: 8px 10px }
.swMain div.actionBar{display:block;clear:both;border:1px solid #ddd;background-color:#f5f5f5;min-height:30px;text-align:right;margin:20px 0 0;padding:10px;-webkit-box-shadow: inset 0 1px 0 #fff;-moz-box-shadow: inset 0 1px 0 #fff;-ms-box-shadow: inset 0 1px 0 #fff;box-shadow: inset 0 1px 0 #fff}
.swMain div.actionBar .btn + .btn {margin-right:10px}
.swMain div.actionBar .buttonFinish {margin-left:10px}
</style>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2> EDIT PRODUCT
</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li>
<a href="javascript:void(0);" class="update_icon"  id="editProductdetailsIcon"></a> </li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['updateproduct']; ?>
<form name="productupdate" id="editProductdetails" action="?do=manageproducts&action=updateprod&prodid=<?php echo $this->_tpl_vars['id']; ?>
" method="post" enctype="multipart/form-data" onsubmit="return checkInputs()">
<input type="hidden" name="subcat" id="subcat"  />
<div class="row-fluid">
<div class="span9">&nbsp;</div>
<div class="span3">    <ul class="bttn_right">
<li>
<font color="#FF0000">*</font> Mandatory Inputs  </li>
</ul></div></div>
<div class="row-fluid">
<div class="span12">
<div class="tabbable tabbable-bordered">
<ul class="nav nav-tabs">
<li id="Image1" class="active"><a href="#tab1" id="Image51" data-toggle="tab">Category</a></li>
<li id="Image2"  class=""><a href="#tab2" id="Image52" data-toggle="tab">General</a></li>
<li id="Image3"  class=""><a href="#tab3" id="Image54" data-toggle="tab">Images</a></li>
<li id="Image4" class=""><a href="#tab4" id="Image55" data-toggle="tab">Attributes</a></li>
<li id="Image5" class=""><a href="#tab5" id="Image56" data-toggle="tab">Price</a></li>
<li id="Image6" class=""><a href="#tab6" id="Image57" data-toggle="tab">Inventory</a></li>
<li id="Image7" class=""><a href="#tab7" id="Image58" data-toggle="tab">Variation</a></li>
<li id="Image8"  class=""><a href="#tab8" id="Image60" data-toggle="tab">Meta Information</a></li>
<li id="Image9" class=""><a href="#tab9" id="Image61" data-toggle="tab">Related Products</a></li>
</ul>
<span id="tabs_det" style="display:none"></span>
<div class="tab-content">
<div class="tab-pane swMain active" id="tab1">
<div class="row-fluid">
<div class="span12"><label>Select  Category <font color="#FF0000">*</font></label>
<?php echo $this->_tpl_vars['dropcategory']; ?>
<div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['selcatgory']; ?>
</div>         </div>         </div>
<!--<div class="row-fluid">
<div class="span12"><label>   Select Sub Category <font color="#FF0000">*</font></label>
<div ID="subcats"><?php echo $this->_tpl_vars['editSubCategory']; ?>
</div>
<div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['subcat']; ?>
</div>     </div>     </div>-->
<!--<div class="row-fluid">
<div class="span12"><label>   Select Sub Under SubCategory <font color="#FF0000">*</font></label>
<div ID="subcatsunder"><?php echo $this->_tpl_vars['editSubUnderCategory']; ?>
</div>
<div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['subcatunder']; ?>
</div>
</div></div>-->
<div class="actionBar"><a href="javascript:void(0);" onclick="tabOpen('1','2');" class="btn buttonNext" >Next</a></div>
</div>
<!-- category end -->
<!-- general  -->
<div class="tab-pane swMain" id="tab2">
<div class="row-fluid">
<div class="span12"><label>  Product Name <font color="#FF0000">*</font></label>
<input name="product_title" id="product_title"
value="<?php echo $this->_tpl_vars['product_title']; ?>
"  type="text" size="50" />
<div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['product_title']; ?>
</div></div>
</div>
<div class="row-fluid">
<div class="span12"><label>Product Alias </label>
<input name="product_alias" id="product_alias" value="<?php echo $this->_tpl_vars['product_alias']; ?>
"   type="text" size="50" onblur="productalias(this.value);" onkeyup="productalias(this.value);"/>&nbsp;<span id="checkalias"></span>
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>  Product Description </label>
<textarea name="desc" id="desc" class="ckeditor" rows="20"  cols="80"><?php echo $this->_tpl_vars['description']; ?>
</textarea></div>
</div>
<div class="row-fluid">
<div class="span12"><label> SKU <font color="#FF0000">*</font></label>
<input name="sku" id="sku" type="text" value="<?php echo $this->_tpl_vars['sku']; ?>
" onblur="checksku(this.value);" onkeyup="checksku(this.value);"/>&nbsp;<span id="uniquesku"></span>
<div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['sku']; ?>
</div></div>
</div>
<div class="row-fluid">
<div class="span12"><label>Brand</label>
<div id="select" name="select" style="visibility:visible; padding-left:0px; display:block"><?php echo $this->_tpl_vars['dispbrand']; ?>
</div><div id="select_new" name="select_new" style="visibility:hidden; padding-left:0px; display:none"><input type="text" name="new_brand"  /></div><div id="select1" name="select1" style="visibility:visible; display:block"><a href="javascript:change();">    <p style="margin-top:-31px;margin-left:167px;">   <button class="btn btn-mini btn-primary"  type="button">Others</button></p></a></div><div id="select_new1" name="select_new1" style="visibility:hidden; display:none"><a href="javascript:change1();">    <p style="margin-top:-31px;margin-left:167px;">  <button class="btn btn-mini btn-primary"  type="button">Others</button></p></a></div>
<div id="dbnd" style="left: 50px; top: 50px;"></div></div>
</div>
<div class="row-fluid">
<div class="span12"><label> Model</label>
<input name="model" id="model"  type="text" value="<?php echo $this->_tpl_vars['model']; ?>
" /></div>
</div>
<div class="row-fluid">
<div class="span12"><label> Weight <font color="#FF0000">*</font></label>
<input name="txtweight" id="txtweight"  type="text" value="<?php echo $this->_tpl_vars['txtweight']; ?>
" />(lbs) <div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['txtweight']; ?>
</div></div>
</div>
<div class="row-fluid">
<div class="span12"><label> Dimension</label>
<table>
<tr>
<td class="content_form" valign="top">Width</td>
<td class="content_form" valign="top">Height</td>
<td class="content_form" valign="top">Depth</td>
</tr>
<tr>
<td><input name="txtwidth" type="text" id="txtwidth" value="<?php echo $this->_tpl_vars['txtwidth']; ?>
" size="4" /><div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['txtwidth']; ?>
</div></td>
<td><input name="txtheight" id="txtheight"  type="text" value="<?php echo $this->_tpl_vars['txtheight']; ?>
" size="4"/><div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['txtheight']; ?>
</div></td>
<td><input name="txtdepth" id="txtdepth"  type="text" value="<?php echo $this->_tpl_vars['txtdepth']; ?>
" size="4"/> <code>(inches)</code><div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['txtdepth']; ?>
</div></td>
</tr>
</table>
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>  Product Tags </label>
<INPUT NAME="tag"  type="text" ID="tag" VALUE="<?php echo $this->_tpl_vars['tag']; ?>
" SIZE="80"/>
<code><font size="-2">(Ex: tag1, tag2,etc..)</font></code></div>
</div>
<div class="row-fluid">
<div class="span12"><label> Introduction Date </label>
<INPUT  type="text" ID="intro_date" NAME="intro_date" VALUE="<?php echo $this->_tpl_vars['intro_date']; ?>
"  />
</div>
</div>
<!--<div class="row-fluid">
<div class="span12"><label>
Is CSE Enabled</label>
<INPUT NAME="cse_enabled" TYPE="checkbox" class="checkButton" ID="cse_enabled" onclick="cseshow()"  <?php echo $this->_tpl_vars['cse_enabled']; ?>
/>(Check if the product is eligible for price comparison)
<div id="divcsekey" style="display:none" >CSE Keyword&nbsp;:&nbsp;<input type="text" id="csekeyid" name="csekeyid" value="<?php echo $this->_tpl_vars['csekeyid']; ?>
" /></div>
</div>
</div>-->
<div class="row-fluid">
<div class="span12"><label>Is Featured</label>
<INPUT NAME="is_feautured" class="checkButton" TYPE="checkbox" <?php echo $this->_tpl_vars['is_featured']; ?>
/>
<p style="margin-top:-20px;margin-left:90px;"><code>(Enable if the product is Featured product)</code></p>
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>Is New Product</label>
<INPUT NAME="is__product_status" checked="checked" TYPE="radio" <?php echo $this->_tpl_vars['is_new_product']; ?>
value='1'/>
<p style="margin-top:-20px;margin-left:90px;">  <code> (Enable if the product is new product)</code></p>
Is Discount Product<INPUT NAME="is__product_status" TYPE="radio" <?php echo $this->_tpl_vars['is_discount_product']; ?>
value='2'/>
<p style="margin-top:-20px;margin-left:90px;"> <code> (Enable if the product is discount  product)</code></p></div>
</div>
<div class="row-fluid">
<div class="span12"><label>Visibility at Store Front </label>
<INPUT NAME="status" class="checkButton" TYPE="checkbox" <?php echo $this->_tpl_vars['status']; ?>
/>
<p style="margin-top:-20px;margin-left:90px;"> <code>(Check if you want to show the product at Store Front)</code></p></div>
</div>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('2','1');" class="btn buttonNext" >Back</a>
<a href="javascript:void(0);" onclick="tabOpen('2','3');" class="btn buttonNext" >Next</a></div>
</div>
<!-- general end -->
<!-- images -->
<div class="tab-pane swMain" id="tab3">
<?php echo $this->_tpl_vars['editMainImage']; ?>
<?php echo $this->_tpl_vars['editImage']; ?>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('3','2');" class="btn buttonNext" >Back</a>
<a href="javascript:void(0);" onclick="tabOpen('3','4');" class="btn buttonNext" >Next</a></div>
</div>
<!-- images end -->
<!-- attibutes  -->
<div class="tab-pane swMain" id="tab4">
<?php echo $this->_tpl_vars['editAttributes']; ?>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('4','3');" class="btn buttonNext" >Back</a>
<a href="javascript:void(0);" onclick="tabOpen('4','5');" class="btn buttonNext" >Next</a></div>
</div>
<!-- attibutes end -->
<!-- price  -->
<div class="tab-pane swMain" id="tab5">
<div class="row-fluid">
<div class="span12"><label>Purchase Price <font color="#FF0000">*</font> </label>
<INPUT NAME="price" TYPE="text" ID="price" VALUE="<?php echo $this->_tpl_vars['price']; ?>
" MAXLENGTH="16" />&nbsp;<b>[<?php echo $this->_tpl_vars['currencycode']; ?>
]</b>
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>Product MSRP <font color="#FF0000">*</font> </label>
<INPUT NAME="msrp_org" TYPE="text" ID="msrp" MAXLENGTH="16" VALUE="<?php echo $this->_tpl_vars['msrp_org']; ?>
" />&nbsp;<b>[<?php echo $this->_tpl_vars['currencycode']; ?>
]</b>
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>Tier Price </label></div></div>
<div class="row-fluid"><div class="span12">
<div class="blocks" style="opacity: 1;">
<div class="clsListing clearfix"><div class="span5">
<table cellspacing="0" cellpadding="0" border="0"  class="table table-striped table-bordered  table-hover">
<thead class="green_bg">
<tr>
<th width="40%">Quantity</th>
<th width="30%">MSRP Per Unit</th>
</tr>
</thead><tbody>
<?php echo $this->_tpl_vars['editTierPrice']; ?>
</tbody>
</table></div>
</div>
</div></div>
</div>
<div class="row-fluid">
<div class="span12"><label>Product Shipping Cost</label>
<INPUT NAME="shipcost" ID="shipcost"  type="text" VALUE="<?php echo $this->_tpl_vars['shipcost']; ?>
"  />&nbsp;<b>[<?php echo $this->_tpl_vars['currencycode']; ?>
]</b> <DIV STYLE="color:#FF0000"><?php echo $this->_tpl_vars['msg']['shipcost']; ?>
</DIV> </div></div>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('5','4');" class="btn buttonNext" >Back</a>
<a href="javascript:void(0);" onclick="tabOpen('5','6');" class="btn buttonNext" >Next</a></div>
</div>
<!-- price end -->
<!-- inventory  -->
<div class="tab-pane swMain" id="tab6">
<div class="row-fluid">
<div class="span12"><label>Re-Order Level Quantity </label>
<INPUT NAME="rol"  type="text" ID="rol" SIZE="10" MAXLENGTH="5" VALUE="<?php echo $this->_tpl_vars['rol']; ?>
" /><DIV STYLE="color:#FF0000"><?php echo $this->_tpl_vars['msg']['rol']; ?>
</DIV></div></div>
<div class="row-fluid">
<div class="span12"><label>Stock on Hand Quantity </label>
<INPUT NAME="soh"  type="text" ID="soh" SIZE="10" VALUE="<?php echo $this->_tpl_vars['soh']; ?>
" MAXLENGTH="5"/><DIV STYLE="color:#FF0000"><?php echo $this->_tpl_vars['msg']['soh']; ?>
</DIV></div></div>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('6','5');" class="btn buttonNext" >Back</a>
<a href="javascript:void(0);" onclick="tabOpen('6','7');" class="btn buttonNext" >Next</a></div>
</div>
<!-- inventory end -->
<!-- Variation start -->
<div class="tab-pane swMain" id="tab7">
<div class="row-fluid"><div class="span12"><label>
Product Variation</label></div></div>
<div class="row-fluid">
<div class="span12">
<div class="blocks" style="opacity: 1;">
<div class="clsListing clearfix"><div><a href="javascript:void(0);" class="add_icon1"   onClick="addVariation();"/><INPUT VALUE="-1" ID="msrp1" TYPE="hidden"></a></div>
<?php echo $this->_tpl_vars['editVarition']; ?>
</div></div>
</div>
</div>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('7','6');" class="btn buttonNext" >Back</a>
<a href="javascript:void(0);" onclick="tabOpen('7','8');" class="btn buttonNext" >Next</a></div>
</div>
<!-- Variation end -->
<!-- meta info -->
<div class="tab-pane swMain" id="tab8">
<div class="row-fluid">
<div class="span12"><label>Meta Keywords </label>
<textarea style="width: 279px; height: 159px;" id="meta_keywords" name="meta_kerwords"><?php echo $this->_tpl_vars['meta_keywords']; ?>
</textarea>
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>Meta Description </label><textarea style="width: 279px; height: 159px;" id="meta_desc" name="meta_desc"><?php echo $this->_tpl_vars['meta_desc']; ?>
</textarea>
</div>
</div>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('8','7');" class="btn buttonNext" >Back</a>
<a href="javascript:void(0);" onclick="tabOpen('8','9');" class="btn buttonNext" >Next</a></div>
</div>
<!-- meta info end -->
<!-- related info  -->
<div class="tab-pane swMain" id="tab9">
<?php echo $this->_tpl_vars['editRelated']; ?>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('9','8');" class="btn buttonNext" >Back</a>
</div>
</div>
<!-- last -->
</div>
</div>
</div>
</div>
</form>
<script language="javascript" type="text/javascript">
function change()
{
document.getElementById("select").style.visibility="hidden";
document.getElementById("select").style.display="none";
document.getElementById("select1").style.visibility="hidden";
document.getElementById("select1").style.display="none";
document.getElementById("select_new").style.visibility="visible";
document.getElementById("select_new").style.display="block";
document.getElementById("select_new1").style.visibility="visible";
document.getElementById("select_new1").style.display="block";
}
function change1()
{
document.getElementById("select").style.visibility="visible";
document.getElementById("select").style.display="block";
document.getElementById("select1").style.visibility="visible";
document.getElementById("select1").style.display="block";
document.getElementById("select_new").style.visibility="hidden";
document.getElementById("select_new").style.display="none";
document.getElementById("select_new1").style.visibility="hidden";
document.getElementById("select_new1").style.display="none";
}
$(document).ready(function (){
$(".checkButton").iButton(function(){
});
$(":radio").iButton(function(){
});
$("input[name='cse_enabled']").change(function(){
if (!$('#cse_enabledid').is(':checked')) {
$('#divcsekey').css('display','none');
}
else
{
$('#divcsekey').css('display','block');
}
});
});
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<!--</body>
</html>-->
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