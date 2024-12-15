<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 13:53:52
compiled from homepagebanner.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script type="text/javascript" src="assets/js/bootstrap-fileupload.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css">
<script type="text/javascript">
$(document).ready(function (){
$('#homePagesave').click(function(){
$("#homePageform").submit();
});
$('.thumbtoggle').hide();
$('#thumb').dblclick(function (){
$('.thumbtoggle').slideToggle();
});
$('.navigationclass').hide();
$('#navigation').dblclick(function (){
$('.navigationclass').slideToggle();
});
$('.slideshowclass').show();
$('#slideshow').dblclick(function (){
$('.slideshowclass').slideToggle();
});
$("select").chosen({allow_single_deselect:true});
});
</script>
<script type="text/javascript" language="javascript">
function checkInputs()
{
var n = $(".slidebanner").size();
var k=n+1;
for(i=1;i<k;i++)
{
if(($('#slide_title'+i).val()=='') && ($('#slide_content_image'+i).val()==''))
{
alert('Please enter title in slider'+i);
return false;
}
else
{
if(($('#slide_content'+i).val()=='') && ($('#slide_content_image'+i).val()==''))
{
alert('Please upload slide content in slider'+i);
return false;
}
else
{
if($('#slide_content'+i).val()!='')
{
var fileName = $('#slide_content'+i).val();
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(!(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" ))
{
alert('Upload Gif or Jpg images onlyin slider'+i);
return false;
}
}
if($('#slide_caption'+i).val()=='')
{
alert('Please enter slide caption in slider'+i);
return false;
}
else
{
if($('#slide_url'+i).val()=='')
{
alert('Please enter slide url in slider'+i);
return false;
}
if($('#slide_url'+i).val()!='')
{
var url=$('#slide_url'+i).val();
var valid = /^(ftp|http|https):\/\/[^ "]+$/.test(url);
if (!valid) {
alert('Please provide valid url is valid in slider'+i);
return false;
}
}
}
}
}
}
return true;
}
</script>
<div class="menu_new clsBtm_20">
<div class="row-fluid">
<div class="span9"><h2>Home Page Slider</h2>
</div>
<div class="span3" >
<ul class="bttn_right">
<li><a href="javascript:void(0);" class="add_icon1" onclick="addHomePageBanner();" ></a></li>
<li><a href="javascript:void(0);" class="save_icon" id="homePagesave" ></a></li>
</ul>
</div>
</div>
</div>
<?php echo $_SESSION['bannermsg']; ?>
<form name="site" action="?do=banner&action=update" method="post" id="homePageform" enctype="multipart/form-data"  onsubmit="return checkInputs();">
<div class="row-fluid">
<div class="span8">
<?php echo $this->_tpl_vars['banner']; ?>
</div></div>
<div class="span4">
<?php echo $this->_tpl_vars['slide_parameter']; ?>
</div>  </div>
<input type="hidden" name="totalcount" id="totalcount">
<!-- <?php echo $this->_tpl_vars['slide_parameter']; ?>
-->
</form> </td>
</tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script>
function addHomePageBanner()
{
ni=document.getElementById('homepageBannerDiv1');
var num = 100;
for(i=2;i<=num;i++)
{
if(!document.getElementById("homepageBannerDiv"+i))
{
num=i;
var newdiv = document.createElement('div');
newdiv.setAttribute("id","homepageBannerDiv"+i,"width","100%");
var tableIdName ="homepageBannerDiv"+i;
document.getElementById('totalcount').value=i;
if(i%2==0)
{
var tablecl="   class='alert_row2' onmouseover=\"mouse_event(this, 'listrow_bg');\" onmouseout=\"mouse_event(this, 'alert_row2');\" ";
}
else
{
var tablecl="   class='alert_row1' onmouseover=\"mouse_event(this, 'listrow_bg');\" onmouseout=\"mouse_event(this, 'alert_row1');\" ";
}
newdiv.innerHTML = "<div class=row-fluid><div class='span12'><h2 class='box_head green_bg'>Slider"+num+" <div style='float:right;'><a href=\javascript:void(0);\ class=clsBigBtn  onclick=\"removeHomePageBanner(\'"+tableIdName+"\')\" \>Remove</a></div></h2><div class=toggle_container><div class=clsblock><div class='clearfix'><div class='row-fluid'><div class='span6'><label></label></div></div><div class=row-fluid><div class='span6'><label>Title:</label><input  type='text' name='slide_title[]' id='slide_title"+i+"' style='width: 381px;'  class='slidebanner'/></div></div><div class=row-fluid><div class=span6><label>Content: </label><input type='file' name='slide_content[]'  id='slide_content"+i+"' ></div></div><div class=row-fluid><div class=span6><label>Caption: </label><textarea style='width: 381px; height: 94px;' id='slide_caption"+i+"' name='slide_caption[]'></textarea><input type='hidden' name='theValue[]' id='theValue"+i+"' value='"+i+"'></div></div><div class=row-fluid><div class=span6><label>Url:</label><input  type='text' name='slide_url[]' id='slide_url"+i+"' style='width: 381px;'/></div></div></div></div></div><input type='hidden' name='slide_content_image[]' id='slide_content_image"+i+"' value=''><br/>";
ni.appendChild(newdiv);
}
}
}
function removeHomePageBanner(rdiv)
{
ni=document.getElementById('homepageBannerDiv1');
var olddiv = document.getElementById(rdiv)
ni.removeChild(olddiv);
}
function removeHomePageBannerInner(rdiv,uid)
{
ni=document.getElementById('homepageBannerDiv1');
var olddiv = document.getElementById(rdiv)
if(uid!='')
{
window.location="?do=banner&action=delete&id="+uid;
}
}
function selecttimerparam(val,typ)
{
if(typ=="pie")
{
document.getElementById("pie_diameter_value").style.display="none";
}
if(typ=="bar")
{
document.getElementById("timer_bar_value").style.display="none";
}
if(val=="pie")
{
document.getElementById("pie_diameter").style.display="block";
document.getElementById("timer_bar").style.display="none";
}
else if(val=="bar")
{
document.getElementById("timer_bar").style.display="block";
document.getElementById("pie_diameter").style.display="none";
}
else if(val=='none')
{
document.getElementById('timer_bar').style.display='none';
document.getElementById('pie_diameter').style.display='none';
}
}
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