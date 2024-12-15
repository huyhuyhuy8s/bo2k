<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:49:35
compiled from index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
?>
<script src="assets/js/jquery.flot.js"></script>
<script src="assets/js/jquery.flot.resize.js"></script>
<script src="assets/js/jquery.flot.pie.js"></script>
<script src="assets/js/jquery.flot.orderBars.js"></script>
<script src="assets/js/jquery.flot.tooltip.js"></script>
<script src="assets/js/jquery.flot.time.js"></script>
<style>
.demo-placeholder {
font-size: 14px;
height: 200px;
line-height: 14px;
width: 98% !important;
overflow:hidden;
}
#tooltip{
background:#333 !important;
color:#FFF !important;
font-size:11px !important;
}
.demo-container{
padding:10px 0 15px 15px;
}
#flot-tooltip {
font-size: 12px;
font-family: Arial, sans-serif;
position: absolute;
display: none;
border: 2px solid;
padding: 2px;
background-color: #FFF;
opacity: 0.8;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
-khtml-border-radius: 5px;
border-radius: 5px;
}
#placeholder1 .legend table{
right: 16px;
top: 26px;
background:#FFF;
}
</style>
<div class="row-fluid show-grid clsBtm_20">
<div class="span8">
<h2 class="box_head gray_bg">Analytics</span></h2>
<div class="block" style="opacity: 1;">
<!--<ul class="nav nav-tabs" id="myTab">
<li class="active"><a href="#users">Users</a></li>
<li><a href="#sales">Sales</a></li>
</ul>-->
<div class="tab-content">
<div class="tab-pane active" id="users">
<div class="toggle_container">
<div class="" style="opacity: 1;">
<div class="clearfix">
<div class="demo-container">
<div id="placeholder" class="demo-placeholder"></div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="sales">
<div class="toggle_container">
<div class="" style="opacity: 1;">
<div class="clearfix">
<div class="demo-container">
<div id="placeholder1" class="demo-placeholder"> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="span4">
<h2 class="box_head green_bg">Latest Users</span></h2>
<div class="toggle_container">
<div class="block" style="opacity: 1;">
<div class="clearfix">
<!-- <ul class="stats">
<li class="odd last"><span><?php echo $this->_tpl_vars['lowstock']; ?>
</span>No of Product in Low Stock</li>
</ul> -->
<?php echo $this->_tpl_vars['latestcustomers']; ?>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
$(function() {
var data = [
{
label: "Users",
color:"#208BBD",
data: [<?php echo $this->_tpl_vars['users_chart']; ?>
]
},
];
var plot = $.plot("#placeholder", data, {
series: {
lines: {
show: true
},
points: {
show: true
}
},
grid: {
hoverable: true,
clickable: true
}
});
function showTooltip(x, y, contents) {
$("<div id='tooltip'>" + contents + "</div>").css({
position: "absolute",
display: "none",
top: y + 5,
left: x + 5,
border: "1px solid #fdd",
padding: "2px",
"background-color": "#fee",
opacity: 0.80
}).appendTo("body").fadeIn(200);
}
var previousPoint = null;
$("#placeholder").bind("plothover", function (event, pos, item) {
if ($("#enablePosition:checked").length > 0) {
var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";
$("#hoverdata").text(str);
}
//if ($("#enableTooltip:checked").length > 0) {
if (item) {
if (previousPoint != item.dataIndex) {
previousPoint = item.dataIndex;
$("#tooltip").remove();
var x = item.datapoint[0].toFixed(2),
y = item.datapoint[1].toFixed(2);
showTooltip(item.pageX, item.pageY,
item.series.label + " of " + x + " = " + y);
}
} else {
$("#tooltip").remove();
previousPoint = null;
}
//}
});
$('#myTab a').click(function (e) {
e.preventDefault();
$(this).tab('show');
})
});
</script>
<script>
$(function() {
var d1_1 = [
[1325376000000, 120],
[1328054400000, 70],
[1330560000000, 100],
[1333238400000, 60],
[1335830400000, 35],
[1335830400000, 50],
[1335830400000, 35],
[1335830400000, 50]
];
var data1 = [
{
label: "Product 1",
data: d1_1,
bars: {
show: true,
barWidth: 12*24*60*60*300,
fill: true,
lineWidth: 1,
order: 1,
fillColor:  "#208BBD"
},
color: "#208BBD"
}
];
$.plot($("#placeholder1"), data1, {
xaxis: {
min: (new Date(2011, 11, 15)).getTime(),
max: (new Date(2012, 04, 18)).getTime(),
mode: "time",
timeformat: "%b",
tickSize: [1, "month"],
monthNames: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
tickLength: 0, // hide gridlines
axisLabel: 'Month',
axisLabelUseCanvas: true,
axisLabelFontSizePixels: 12,
axisLabelFontFamily: 'Arial, Helvetica, Tahoma, sans-serif',
axisLabelPadding: 5
},
yaxis: {
axisLabel: 'Value',
axisLabelUseCanvas: true,
axisLabelFontSizePixels: 12,
axisLabelFontFamily: 'Verdana, Arial, Helvetica, Tahoma, sans-serif',
axisLabelPadding:5
},
grid: {
hoverable: true,
clickable: false,
borderWidth: 1
},
legend: {
labelBoxBorderColor: "none",
position: "right"
},
series: {
shadowSize: 1
}
});
function showTooltip(x, y, contents, z) {
$('<div id="flot-tooltip">' + contents + '</div>').css({
top: y + 5,
left: x + 5,
'border-color': z,
}).appendTo("body").show();
}
function getMonthName(newTimestamp) {
var d = new Date(newTimestamp);
var numericMonth = d.getMonth();
var monthArray = ["1", "2", "3", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
var alphaMonth = monthArray[numericMonth];
return alphaMonth;
}
$("#placeholder1").bind("plothover", function (event, pos, item) {
if (item) {
if (previousPoint != item.datapoint) {
previousPoint = item.datapoint;
$("#flot-tooltip").remove();
var originalPoint;
if (item.datapoint[0] == item.series.data[0][3]) {
originalPoint = item.series.data[0][0];
} else if (item.datapoint[0] == item.series.data[1][3]){
originalPoint = item.series.data[1][0];
} else if (item.datapoint[0] == item.series.data[2][3]){
originalPoint = item.series.data[2][0];
} else if (item.datapoint[0] == item.series.data[3][3]){
originalPoint = item.series.data[3][0];
} else if (item.datapoint[0] == item.series.data[4][3]){
originalPoint = item.series.data[4][0];
}
var x = getMonthName(originalPoint);
y = item.datapoint[1];
z = item.series.color;
showTooltip(item.pageX, item.pageY,
"<b>" + item.series.label + "</b><br /> " + x + " = " + y + "",
z);
}
} else {
$("#flot-tooltip").remove();
previousPoint = null;
}
});
});
</script>
<!--
<div class="row-fluid show-grid clsBtm_20">
<div class="span4">
<h2 class="box_head blue_bg">CUSTOMERS</span></h2>
<div class="toggle_container">
<div class="block" style="opacity: 1;">
<div class="clearfix">
<ul class="stats">
<li class="odd"><span><?php echo $this->_tpl_vars['currentmonthuser']; ?>
</span>Current Month</li>
<li class="even"><span><?php echo $this->_tpl_vars['previousmonthuser']; ?>
</span>Previous Month</li>
<li class="odd last"><span><?php echo $this->_tpl_vars['totalusers']; ?>
</span>Total Customers</li>
</ul>
</div>
</div>
</div>
</div>
<div class="span4">
<h2 class="box_head green_bg">SALES</span></h2>
<div class="toggle_container">
<div class="block" style="opacity: 1;">
<div class="clearfix">
<ul class="stats">
<li class="odd"><span><?php echo $this->_tpl_vars['currency_type']; ?>
&nbsp;<?php echo $this->_tpl_vars['currentmonthincome']; ?>
</span>
Current Month</li>
<li class="even"><span><?php echo $this->_tpl_vars['currency_type']; ?>
&nbsp;<?php echo $this->_tpl_vars['previousmonthincome']; ?>
</span>
Previous Month</li>
<li class="odd last"><span><?php echo $this->_tpl_vars['currency_type']; ?>
&nbsp;<?php echo $this->_tpl_vars['totalincome']; ?>
</span>
Total Sales</li>
</ul>
</div>
</div>
</div>
</div>
<div class="span4">
<h2 class="box_head orange_bg">PRODUCTS</span></h2>
<div class="toggle_container">
<div class="block" style="opacity: 1;">
<div class="clearfix">
<ul class="stats">
<li class="odd"><span><?php echo $this->_tpl_vars['enabledproducts']; ?>
</span>Enabled</li>
<li class="even"><span><?php echo $this->_tpl_vars['disabledproducts']; ?>
</span>Disabled</li>
<li class="odd last"><span><?php echo $this->_tpl_vars['totalproducts']; ?>
</span>Total Products</li>
</ul>
</div>
</div>
</div>
</div>
</div>
-->
<div class="row-fluid show-grid clsBtm_20">
<div class="span4">
<h2 class="box_head blue_bg">Site Statistics</span></h2>
<div class="toggle_container">
<div class="block" style="opacity: 1;">
<div class="clearfix">
<ul class="stats">
<li class="odd"><span><?php echo $this->_tpl_vars['monthlyorders']; ?>
</span>Current Month</li>
<li class="even"><span><?php echo $this->_tpl_vars['previousmonthorders']; ?>
</span>Previous Month</li>
<li class="odd"><span><?php echo $this->_tpl_vars['pendingorders']; ?>
</span>Pending Orders</li>
<li class="even"><span><?php echo $this->_tpl_vars['processingorders']; ?>
</span>Processing Orders</li>
<li class="odd"><span><?php echo $this->_tpl_vars['deliveredorders']; ?>
</span>Delivered Orders</li>
<li class="even last"><span><?php echo $this->_tpl_vars['totalorders']; ?>
</span>Total Orders</li>
</ul>
</div>
</div>
</div>
</div>
<div class="span8">
<h2 class="box_head gray_bg">Latest Orders</span></h2>
<div class="toggle_container">
<div class="block" style="opacity: 1;">
<div class="clearfix">
<?php echo $this->_tpl_vars['latestorders']; ?>
<!-- <li class="odd">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet nisl nec nunc sollicitudin bibendum. Pellentesque orci</li>
<li class="even">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet nisl nec nunc </li>
<li class="odd">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet nisl nec nunc sollicitudin bibendum. Pellentesque orci</li>
<li class="even">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet nisl nec nunc sollicitudin bibendum. Pellentesque orci</li>
<li class="odd">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet nisl nec nunc sollicitudin bibendum. Pellentesque orci</li>
<li class="even last">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet nisl nec nunc </li> -->
</div>
</div>
</div>
</div>
</div>
<!-- <div class="row-fluid show-grid clsBtm_20">
<?php echo $this->_tpl_vars['latestorders']; ?>
<?php echo $this->_tpl_vars['latestcustomers']; ?>
</div> -->
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