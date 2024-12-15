<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-10 07:14:50
compiled from left.html */ ?>
<tr>
<td colspan="2" align="right" valign="top">
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