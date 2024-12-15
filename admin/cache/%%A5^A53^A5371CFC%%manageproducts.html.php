<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:49:55
compiled from manageproducts.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="js/bsn.AutoSuggest_2.1.3.js" charset="utf-8"></script>
<link rel="stylesheet" href="css/autosuggest_inquisitor.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">
var xmlHttp;
function LoadSubcategory(id,divid)
{
if(id!='')
{
url = "?do=addcrossproduct&action=showsubcat&id="+id;
ajax(url,divid);
}
}
function showProducts(subcatid)
{
url ="?do=addcrossproduct&action=showproducts&id=" + subcatid;
ajax(url, 'productlist');
}
function callAjax()
{
//alert('d');
//var obj = actb(document.getElementById('tb'),custom2);
var word=document.getElementById('tb').value;
url ="?do=manageproducts&action=gettitle&word=" + word;
var cust=ajax(url, 'titlescheck');
//var obj = actb(document.getElementById('tb'),customarray)
}
$(function () {
$('#fromdate').datepicker();
$('#todate').datepicker();
});
</script>
<script type="text/javascript">
$(function(){
$("select").chosen({allow_single_deselect:true});
});
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Product List</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li title="Add to physical product"><a href="?do=productentry"  ><img src="assets/img/icons/product.png" style="width:20px"><br><font color="#ff">Add</font></a></li>
<li title="Add to digital product"><a href="?do=digitproductentry"  ><img src="assets/img/icons/digitalproduct.png" style="width:20px"><br><font color="#ff">Add</font></a></li>
<li title="Add to gift product"><a href="?do=giftproductentry"  ><img src="assets/img/icons/gift.png" style="width:20px"><br><font color="#ff">Add</font></a></li>
</ul>
</div>
</div>
</div>
<?php echo $this->_tpl_vars['updateproduct']; ?>
<?php echo $this->_tpl_vars['editmsg']; ?>
</td>
<?php echo $this->_tpl_vars['allproducts']; ?>
<?php echo $this->_tpl_vars['searchproduct']; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script>
function call(custom2)
{
//var obj = actb(document.getElementById('tb'),custom2);
document.getElementById('tb').value=custom2;
document.getElementById('titlescheck').style.display='none';
}
//setTimeout(function(){obj.actb_keywords = custom2;},10000);
</script>
<script type="text/javascript">
var options = {
script:"?do=manageproducts&action=autoc&json=true&limit=6&",
varname:"input",
json:true,
shownoresults:false,
maxresults:6,
callback: function (obj) { document.getElementById('testid').value = obj.id; }
};
var as_json = new bsn.AutoSuggest('title', options);
var options_xml = {
script: function (input) { return "?do=manageproducts&action=autoc&input="+input+"&testid="+document.getElementById('testid').value; },
varname:"input"
};
var as_xml = new bsn.AutoSuggest('title_xml', options_xml);
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