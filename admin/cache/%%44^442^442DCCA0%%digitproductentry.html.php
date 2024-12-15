<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 07:20:44
compiled from digitproductentry.html */ ?>
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
function assignSubUnderCat(id)
{
if(id!='')
{
document.getElementById('subcatunder').value=id;
}
}
function assignSubCat(id)
{
if(id!='')
{
document.getElementById('subcat').value=id;
var url='?do=productentry&action=displaySubUnderCategory&id='+ id;
ajax(url,'subcatsunder');
var url1='?do=productentry&action=displayAttributes&id='+ id;
ajax(url1,'attributes');
}
}
function checkInputs()
{
if (document.getElementById('selcatgory').value=='')
{
alert("Please enter the mandatory fields In Category");
tabOpenvalidation('1');
return false;
}
else
{
if ((document.productreg.product_title.value=='') || (document.productreg.sku.value=='') || (document.productreg.digitalfile.value==''))
{
alert('Please enter the mandatory fields In General');
tabOpenvalidation('2');
return false;
}
else
{
if ((document.getElementById('ufile[0]').value==''))
{
alert('Please enter the mandatory fields In Images');
tabOpenvalidation('3');
return false;
}
else
{
if ((document.productreg.price.value=='')|| (document.productreg.msrp_org.value==''))
{
alert('Please enter the mandatory fields In Price');
tabOpenvalidation('5');
return false;
}
else if ( isNaN(document.productreg.price.value)|| isNaN(document.productreg.msrp_org.value))
{
alert('Invalid Inputs In Price');
tabOpenvalidation('5');
return false;
}
else if ((document.productreg.price.value=='0')|| (document.productreg.msrp.value=='0'))
{
alert('Enter the  Inputs In Price Greater than Zero');
tabOpenvalidation('5');
return false;
}
}
}
}
if (parseFloat(document.productreg.msrp_org.value)<parseFloat(document.productreg.price.value))
{
alert('Product MSRP Should Be Greater Than Product Price');
tabOpenvalidation('5');
return false;
}
return true;
}
/*Validation*/
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
newdiv.innerHTML = "<div class=\"row-fluid\"><div class=\"span12\"><label>Sub Product Image</label><div class=\"fileupload fileupload-new\" data-provides=\"fileupload\" style=\"width:350px;\"><div class=\"fileupload-new thumbnail\" style=\"width: 200px; height: 150px;\"><img src=\"assets/img/noimage.gif\" /></div><div class=\"fileupload-preview fileupload-exists thumbnail\" style=\"max-width: 200px; max-height: 150px; line-height: 20px;\"></div><div><span class=\"btn btn-file\"><span class=\"fileupload-new\">Select image</span><span class=\"fileupload-exists\">Change</span><input type=file name=ufile[] id=ufile[]></span><a href=\"#\" class=\"btn fileupload-exists\" data-dismiss=\"fileupload\">Remove</a></div></div>&nbsp;&nbsp;&nbsp;<a href=\"javascript:;\" onclick=\"removeEvent(\'"+divIdName+"\')\"><button class='btn btn-mini btn-danger' type='button'>Remove</button></a><br></div></div>";
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
//document.getElementById('Image58').src='images/tab_images/May_tab1_08.jpg';
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
var title=$('#title1').val();
var brand=$('#brand1').val();
var frommsrp=$('#frommsrp1').val();
var tomsrp=$('#tomsrp1').val();
var fromprice=$('#fromprice1').val();
var toprice=$('#toprice1').val();
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
len=document.productreg.chkSub.length;
if(len > 1)
{
for(i=0;i<len;i++)
{
if(document.productreg.chkMain.checked==true)
{
document.productreg.chkSub[i].checked=true;
}
else
{
document.productreg.chkSub[i].checked=false;
}
}
}
else
{
if(document.productreg.chkMain.checked==true)
{
document.productreg.chkSub.checked=true;
}
else
{
document.productreg.chkSub.checked=false;
}
}
}
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
newdiv.innerHTML = "<table width=\"100%\"><tr><td width=\"28%\"><INPUT NAME='quantity[]' ID='quantity[]'  type='text'  size='3' onblur=\"if (this.value!='') if (parseFloat(this.value)<=1) {  alert('Enter Quantity Greater Than 1');this.focus(); this.value=''; } \"/>&nbsp;	and above</td><td  width=\"28%\"><INPUT NAME='msrp[]' ID='msrp[0]'  type='text'  size='5' onblur=\"if (this.value!='') {if ((parseFloat(document.productreg.msrp_org.value) < parseFloat(this.value))||(parseFloat(this.value)<parseFloat(document.productreg.price.value))) {  alert('Tier Price Should Be Greater Then The Product Price And Less Than Product MSRP ');this.focus(); this.value=''; } }\" />&nbsp;<b>["+cursym+"]</b></td><td  width=\"28%\">&nbsp;<a href=\"javascript:;\" onclick=\"removeTier(\'"+divIdName+"\')\">Remove</a></td></tr></table>";
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
function tabOpen(hide,show)
{
$('#tab'+hide).removeClass('active');
$('#Image'+hide).removeClass('active');
$('#tab'+show).addClass('active');
$('#Image'+show).addClass('active');
}
function tabOpenvalidation(show)
{
for(i=1;i<=8;i++)
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
$('#saveProductId').click(function(){
$("#saveProductdetails").submit();
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
<div class="span9"><h2> ADD DIGITAL PRODUCTS
</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li>
<a href="javascript:void(0);" class="save_icon"  id="saveProductId"></a> </li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['message']; ?>
<form name="productreg" id="saveProductdetails" action="?do=digitproductentry&action=insert" method="post" enctype="multipart/form-data" onsubmit="return checkInputs();">
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
<li id="Image5" class=""><a href="#tab5" id="Image56" data-toggle="tab">Price</a></li>
<li id="Image7"  class=""><a href="#tab7" id="Image60" data-toggle="tab">Meta Information</a></li>
</ul>
<span id="tabs_det" style="display:none"></span>
<div class="tab-content">
<div class="tab-pane active swMain" id="tab1">
<div class="row-fluid">
<div class="span12"><label>Select Category <font color="#FF0000">*</font></label>
<?php echo $this->_tpl_vars['dropcategory']; ?>
<div id="dct" style="left: 50px; top: 50px;"></div><div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['selcatgory']; ?>
</div>	</div>	</div>
<!--<div class="row-fluid">
<div class="span12"><label>
Select Sub Category <font color="#FF0000">*</font></label>
<div ID="subcats" align="left"><select name="selsubcatgory" style="width:148px"><option value="0">-Select-</option></select>
<div id="dct1" style="left: 50px; top: 50px;"></div><div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['subcat']; ?>
</div></div>
</div>	</div>-->
<!--<div class="row-fluid">
<div class="span12"><label>Select Sub Under SubCategory <font color="#FF0000">*</font></label>
<div ID="subcatsunder" align="left"><select name="selsubundercatgory" style="width:148px"><option value="0">-Select-</option></select>
<div id="dct2" style="left: 50px; top: 50px;"></div><div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['subcatunder']; ?>
</div></div></div></div>-->
<!-- </tr>
<tr>
<td colspan="2" align="center"><input type="button" name="category" class="all_bttn" value="Continue" onClick="clk('Image52','images/tab_images/general_1.jpg',5)"/></td>
</tr>
</table></td>
</tr>
</table> -->
<div class="actionBar"><a href="javascript:void(0);" onclick="tabOpen('1','2');" class="btn buttonNext" >Next</a></div>
</div>
<!-- general -->
<div class="tab-pane swMain" id="tab2">
<div class="row-fluid">
<div class="span12"><label>Product Name <font color="#FF0000">*</font></label>
<input name="product_title" id="product_title" value="<?php echo $this->_tpl_vars['val']['product_title']; ?>
"  type="text" size="50" />
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>Product Alias </label>
<input name="product_alias" id="product_alias" value="<?php echo $this->_tpl_vars['val']['product_title']; ?>
"   type="text" size="50" onblur="productalias(this.value);"/>&nbsp;<div style="color:#FF0000" id="checkalias"></div>
</div>
</div>
<div class="row-fluid"><div class="span12"><label>Upload File<font color="#FF0000">*</font></label>
<INPUT VALUE="0" ID="theValue" TYPE="hidden">
<div class="fileupload fileupload-new" data-provides="fileupload" style="width:350px;">
<div class="fileupload-new thumbnail" style="width: 365px; height: 20px;"></div>
<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 350px; max-height: 20px; line-height: 20px;"></div>
<div>
<span class="btn btn-file"><span class="fileupload-new">Select </span><span class="fileupload-exists">Change</span><input type="file" name="digitalfile" id="digitalfile" /></span>
<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div></div>
<div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['digitalfile']; ?>
</div>
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>Product Description </label>
<textarea name="desc" class="ckeditor" id="desc" cols="120" rows="30" >
<?php echo $this->_tpl_vars['val']['desc']; ?>
</textarea></div>
</div>
<div class="row-fluid">
<div class="span12"><label>SKU <font color="#FF0000">*</font></label>
<div id="sku"><input name="sku" id="sku" type="text" value="<?php echo $this->_tpl_vars['val']['sku']; ?>
"/>
<div id="dsku" style="left: 50px; top: 50px;"></div><div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['sku']; ?>
</div>
</div></div></div>
<div class="row-fluid">
<div class="span12"><label> Product Tags </label>
<INPUT NAME="tag"  type="text" ID="tag" VALUE="<?php echo $this->_tpl_vars['val']['tag']; ?>
" />
<code><font size="-2">(Ex: tag1, tag2,etc..)</font></code><div valign="top">
<div id="dptag" style="left: 50px; top: 50px;"></div></div>
</div> </div>
<div class="row-fluid">
<div class="span12"><label>Introduction Date </label>
<INPUT  type="text" ID="intro_date" NAME="intro_date" VALUE="<?php echo $this->_tpl_vars['val']['intro_date']; ?>
"  />
<div id="dindt" style="left: 50px; top: 50px;"></div></div>
</div>
<div id="dcse" style="position:fixed"></div><div id="divcsekey" style="display:none">
<div class="row-fluid">
<div class="span12"><label>CSE Keyword</label><input type="text" id="csekeyid" name="csekeyid" value="<?php echo $this->_tpl_vars['val']['csekeyid']; ?>
" /></div>
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>Is Featured</label>
<INPUT NAME="is_feautured" class="checkButton" TYPE="checkbox" <?php echo $this->_tpl_vars['val']['is_feautured']; ?>
/>
<p style="margin-top:-20px;margin-left:90px;"><code>(Enable if the product is Featured product)</code></p>
</div>
</div>
<div class="row-fluid">
<div class="span12"><label>Is New Product</label>
<INPUT NAME="is__product_status" TYPE="radio" <?php echo $this->_tpl_vars['val']['is_new_product']; ?>
value='1'/>
<p style="margin-top:-20px;margin-left:90px;">  <code> (Enable if the product is new product)</code></p></div></div>
<div class="row-fluid">
<div class="span12"><label>Is Discount Product</label>
<INPUT NAME="is__product_status" TYPE="radio" <?php echo $this->_tpl_vars['val'][$this->_tpl_vars['is_discount_product']]; ?>
value='2'/>
<p style="margin-top:-20px;margin-left:90px;"> <code> (Enable if the product is discount  product)</code></p></div></div>
<div class="row-fluid">
<div class="span12"><label>Visibility at Store Front </label>
<INPUT NAME="status" class="checkButton" TYPE="checkbox" checked="checked" />
<p style="margin-top:-20px;margin-left:90px;"> <code>(Check if you want to show the product at Store Front)</code></p>
<div id="dstrfrnt" style=" position:fixed"></div> </div>
</div>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('2','1');" class="btn buttonNext" >Back</a>
<a href="javascript:void(0);" onclick="tabOpen('2','3');" class="btn buttonNext" >Next</a></div>
</div>
<!-- general End -->
<!-- Images  -->
<div class="tab-pane swMain" id="tab3">
<div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['ufile_value']; ?>
</div>
<div class="row-fluid"><div class="span12"><label>Main Product Image <font color="#FF0000">*</font></label>
<INPUT VALUE="0" ID="theValue" TYPE="hidden">
<div class="fileupload fileupload-new" data-provides="fileupload" style="width:350px;">
<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/noimage.gif" /></div>
<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
<div>
<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="ufile[0]" id="ufile[0]"  /></span>
<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div></div>&nbsp;<A HREF="javascript:;" onClick="addEvent();"><button class="btn btn-mini btn-primary" type="button">Add Multiple Images</button></A>
<div style="color:#FF0000">
<?php echo $this->_tpl_vars['msg']['ufile']; ?>
</div>
</div>
</div>
<div class="row-fluid"><div class="span12"><label>
<DIV ID="myDiv"></DIV></label>
<A HREF="javascript:;" onClick="addEvent();"></A></div>
</div>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('3','2');" class="btn buttonNext" >Back</a>
<a href="javascript:void(0);" onclick="tabOpen('3','5');" class="btn buttonNext" >Next</a></div>
</div>
<!-- Images end -->
<!-- Attributes  -->
<!-- Attributes end -->
<!-- price  -->
<div class="tab-pane swMain" id="tab5">
<div class="row-fluid"><div class="span12"><label>
Purchase Price <font color="#FF0000">*</font> </label>
<input name="price" type="text" id="price" value="<?php echo $this->_tpl_vars['val']['price']; ?>
"    maxlength="16" > &nbsp;<b>[<?php echo $this->_tpl_vars['currencycode']; ?>
]</b>
<div id="dprice" style="left: 50px; top: 50px;"></div></div></div>
<div class="row-fluid"><div class="span12"><label>	Product MSRP <font color="#FF0000">*</font> </label>
<INPUT NAME="msrp_org" TYPE="text" ID="msrp" MAXLENGTH="16" VALUE="<?php echo $this->_tpl_vars['val']['msrp_org']; ?>
" />&nbsp;<b>[<?php echo $this->_tpl_vars['currencycode']; ?>
]</b>
<div id="dmsrp" style="left: 50px; top: 50px;font-weight:normal"></div>
</div></div>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('5','3');" class="btn buttonNext" >Back</a>
<a href="javascript:void(0);" onclick="tabOpen('5','7');" class="btn buttonNext" >Next</a></div>
</div>
<!-- price end -->
<!-- meta  -->
<div class="tab-pane swMain" id="tab7">
<div class="row-fluid"><div class="span12"><label>Meta Keywords </label>
<textarea style="width: 279px; height: 159px;" id="meta_keywords" name="meta_kerwords"><?php echo $this->_tpl_vars['val']['meta_keywords']; ?>
</textarea>
<div id="dmeteaky" style="left: 50px; top: 50px;"></div></div>
</div>
<div class="row-fluid"><div class="span12"><label>Meta Description </label>
<TD align="left">	<textarea style="width: 279px; height: 159px;" id="meta_desc" name="meta_desc"><?php echo $this->_tpl_vars['val']['meta_desc']; ?>
</textarea>
<div id="dmetadesc" style="left: 50px; top: 50px;"></div>
</div>
</div>
<div class="actionBar">
<a href="javascript:void(0);" onclick="tabOpen('7','5');" class="btn buttonNext" >Back</a>
</div>
<!-- meta  end -->
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