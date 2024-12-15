<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 14:09:48
compiled from countrywisetaxsettingsajax.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zeuscart Admin Control Panel
<?php echo $this->_tpl_vars['pagetitle']; ?>
</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrapSwitch.css">
<link href="assets/css/datepicker.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/chosen.css" />
<link rel="stylesheet" href="assets/css/custom.css" />
<script type="text/javascript" src="../js/ajax.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrap">
<div class="clsBody">
<?php echo $this->_tpl_vars['insmsg']; ?>
<form  name="sam" action="?do=taxsettings&action=updatetaxsettings" method="post">
<div id="selContent" class="clearfix">
<div class="container">
<div class="blocks" style="opacity: 1;">
<div class="clsListing clearfix">
<?php echo $this->_tpl_vars['taxsettings']; ?>
</div></div>  </div></div></div></div>
</form>
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