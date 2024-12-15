<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:51:49
compiled from includes.html */ ?>
<script type="text/javascript">
function searchitem()
{
document.getElementById('searchtxt').value='';
}
</script>
<script type="text/javascript">
function searchSubmit()
{
var searchtext = document.getElementById('searchtxt').value;
if(searchtext=='')
{
document.getElementById('searchtxt').value='Search enter item name here ...';
}
if(searchtext!='Search enter item name here ...' && searchtext!='')
{
window.location = '<?php echo $_SESSION['base_url']; ?>
/index.php?do=search&search='+searchtext;
}
}
</script>
<script type="text/javascript">
function selectCurrency(id)
{
$.ajax({
type: "GET",
url: "<?php echo $_SESSION['base_url']; ?>
/index.php?do=changecurrency",
data: "id="+id,
success: function(result){
window.location.href=window.location.href;
}
});
}
</script>
<?php if ($_GET['do'] == 'addtocartfromproductdetail' || $_GET['do'] == 'addtocart' || $_GET['do'] == 'showcart'): ?>
<script type="text/javascript" language="javascript">
function callHome()
{
window.location= "<?php echo $_SESSION['base_url']; ?>
/index.php?do=indexpage";
}
function callRegister()
{
window.location= "<?php echo $_SESSION['base_url']; ?>
/index.php?do=showcart&action=showquickregistration";
}
function callContinue()
{
window.location= "<?php echo $_SESSION['base_url']; ?>
/index.php?do=showcart&action=getaddressdetails&chk=0";
}
</script>
<?php endif; ?>
<?php if ($_GET['do'] == 'orders' || $_GET['do'] == 'myorder'): ?>
<script type="text/javascript">
function changepagesize(optn,sel)
{
if(optn=='order')
window.location.href='<?php echo $_SESSION['base_url']; ?>
/index.php?do=myorder&totrec='+sel;
if(optn=='review')
window.location.href='<?php echo $_SESSION['base_url']; ?>
/index.php?do=orders&totrec='+sel;
if(optn=='digitorder')
window.location.href='<?php echo $_SESSION['base_url']; ?>
/index.php?do=digitdown&totrec='+sel;
}
function changeyear(option,val)
{
if(option=='order')
window.location.href='<?php echo $_SESSION['base_url']; ?>
/index.php?do=myorder&year='+val;
}
</script>
<?php endif; ?>
<?php if ($_GET['do'] == 'prodetail'): ?>
<script src="<?php echo $_SESSION['base_url']; ?>
/assets/js/jquery.jqzoom-core.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_SESSION['base_url']; ?>
/assets/css/jquery.jqzoom.css" type="text/css">
<link rel="stylesheet" href="<?php echo $_SESSION['base_url']; ?>
/assets/js/carousel-special.js" type="text/css">
<script type="text/javascript">
$(document).ready(function() {
$('.jqzoom').jqzoom({
zoomType: 'innerzoom',
preloadImages: false,
alwaysOn:false
});
});
function changeVariation(pid,vid)
{
document.location.hash='?do=prodetail&action=showprod&prodid='+pid+'&varid='+vid;
}
</script>
<script type="text/javascript">
var arr3=["account_id","details_id","divTier"];
function showAccnt(divid)
{
if(document.getElementById(divid).style.display=="none")
{
for(var i=0;i<arr3.length;i++)
{
document.getElementById(arr3[i]).style.display="none";
document.getElementById(arr3[i]+"1").className="acc_unselect";
}
viewAccnt(divid);
}
}
function viewAccnt(div_id)
{
$("#"+ div_id).fadeIn('slow');
document.getElementById(div_id+"1").className="acc_select";
}
</script>
<script type="text/javascript">
var globVal=0;
function fun(s)
{
globVal=0;
for (var i=1;i<=s;i++)
{
document.frm["img"+i].src="<?php echo $_SESSION['base_url']; ?>
/assets/img/star.png";
}
document.frm.hidRate.value=s;
}
function fun1(s)
{
if(globVal==0)
{
for (var i=1;i<=5;i++)
{
document.frm["img"+i].src="<?php echo $_SESSION['base_url']; ?>
/assets/img/star-gray.png";
}
document.frm.hidRate.value="";
}
}
function fun2(s)
{
globVal=1;
for (var i=1;i<=s;i++)
{
document.frm["img"+i].src="<?php echo $_SESSION['base_url']; ?>
/assets/img/star.png";
}
}
var presh = -1
function shuffle()
{
curr = Math.ceil(Math.random()*100);
document.getElementById('captcha').src="<?php echo $_SESSION['base_url']; ?>
/index.php?do=captcha&"+ (curr==presh ? Math.ceil(Math.random()*100) : curr);
presh = curr;
}
</script>
<?php if ($_SESSION['reviewResult'] != ''): ?>
<script type="text/javascript">
document.getElementById('details_id').style.display="block";
</script>
<?php endif; ?>
<?php endif; ?>
<?php if ($_GET['do'] == 'showcart'): ?>
<script type="text/javascript">
function viewMoreBillAddress()
{
document.getElementById('more_bill_addr').style.display="block";
document.getElementById('more_bill_addr_button').style.display="none";
}
</script>
<script type="text/javascript">
function viewMoreShipAddress()
{
document.getElementById('more_ship_addr').style.display="block";
document.getElementById('more_ship_addr_button').style.display="none";
}
</script>
<?php endif; ?>
<?php if ($_GET['do'] == 'prodetail'): ?>
<script>
function showGiftVoucher()
{
$.ajax({
type: "GET",
url: "<?php echo $_SESSION['base_url']; ?>
/index.php?do=voucher",
data: "prodid="+<?php echo $_GET['prodid']; ?>
,
success: function(result){
$("#giftvoucher").html(result);
}
});
}
</script>
<?php if ($_GET['vid'] == 1): ?>
<script>
$.ajax({
type: "GET",
url: "<?php echo $_SESSION['base_url']; ?>
/index.php?do=voucher",
data: "prodid="+<?php echo $_GET['prodid']; ?>
,
success: function(result){
$("#giftvoucher").html(result);
}
});
</script>
<?php endif; ?>
<?php endif; ?>
<?php if ($_GET['do'] == 'login' || $_GET['action'] == 'showquickregistration'): ?>
<script>
// document.domain = '<?php echo '<?php'; ?>
echo $_SERVER['HTTP_HOST']; <?php echo '?>'; ?>
';
jQuery(document).ready(function(){
var childWin;
jQuery('#openfb').click(function(){
childWin = fb_popup();
if (window.focus) {childWin.focus();}
});
jQuery('#opentw').click(function(){
childWin = tw_popup();
if (window.focus) {childWin.focus();}
});
jQuery('#opengp').click(function(){
childWin = gp_popup();
if (window.focus) {childWin.focus();}
});
});
function fb_popup()
{
t=(screen.height/2)-(420/2);
l=(screen.width/2)-(470/2);
return window.open('http://localhost.com/ajshop/zeuscart/classes/Lib/facebook/example.php','FACEBOOKLOGIN','status=0,toolbar=0,resizable=0,menubar=0,width=488,height=420,scrollbars=yes,top='+t+',left='+l);
}
function tw_popup()
{
t=(screen.height/2)-(420/2);
l=(screen.width/2)-(470/2);
return window.open('http://localhost.com/ajshop/zeuscart/classes/Lib/twitter/example1.php','TWITTERLOGIN','status=0,toolbar=0,resizable=0,menubar=0,width=488,height=420,scrollbars=yes,top='+t+',left='+l);
}
function gp_popup()
{
t=(screen.height/2)-(420/2);
l=(screen.width/2)-(470/2);
return window.open('http://localhost.com/ajshop/zeuscart/classes/Lib/google/examples/batch.php','GOOGLELOGIN','status=0,toolbar=0,resizable=0,menubar=0,width=488,height=420,scrollbars=yes,top='+t+',left='+l);
}
</script>
<?php endif; ?>
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