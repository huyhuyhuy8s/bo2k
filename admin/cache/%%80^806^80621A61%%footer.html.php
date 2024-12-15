<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:49:35
compiled from footer.html */ ?>
</div>
</div>
</div>
</div>
<footer>
<div class="container">
<div class="row">
<div class="span5">
<div>Powered by <a href="http://www.zeuscart.com/" style="text-decoration:none;" target="_blank">ZeusCart</a></div>
</div>
<div class="span7">
<p align="right"> Supported By : <a href="http://www.ajsquare.com/" style="text-decoration:none;" target="_blank">AJ Square Inc</a>&nbsp;</p>
</div>
</div>
</div>
</footer>
</body></html>
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