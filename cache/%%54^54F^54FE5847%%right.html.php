<?php 
 ob_start(); ?><?php /* Smarty version 2.6.19, created on 2024-10-09 20:51:49
compiled from right.html */ ?>
<!--<div class="span3"><span class="hidden-phone"><div id="block_div">
<h2>Categories</h2>
<div class="left_menu">
<?php echo $this->_tpl_vars['categorytree']; ?>
<div class="expand-collapse">
<a rel="tree" class="nicetree_expand" href="javascript:;">Exapand All</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a rel="tree" class="nicetree_collapse" href="javascript:;">Collapse All</a>
</div>
</div>
</div>
</span>
</div>-->
<div class="span3">
<div id="block_div"><h2><?php   echo Core_CLanguage::_('CATEGORIES');  ?></h2>
<!--<div id="side">
<ul class="accordion">
<li><a href="sev.html">Item 1</a>
<ul class="innermenu">
<li><a href="sev.html">Sub 1.1</a>
<ul class="innermenu">
<li><a href="sev.html">Sub 1.1.1</a>
<ul class="innermenu">
<li><a href="sev.html">Link 1</a></li>
<li><a href="sev.html">Link 2</a></li>
</ul>
</li>
<li><a href="sev.html">Sub 1.1.2</a>
<ul class="innermenu">
<li><a href="sev.html">Link 3</a></li>
<li><a href="sev.html">Link 4</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="sev.html">Sub 1.2</a>
<ul class="innermenu">
<li><a href="sev.html">Link 5</a></li>
<li><a href="sev.html">Link 6</a></li>
</ul>
</li>
</ul>
</li>
<li>Item 2
<ul class="innermenu">
<li>Sub 2.1
<ul class="innermenu">
<li><a href="sev.html">Link 7</a>
</li>
<li><a href="sev.html">Link 8</a></li>
</ul>
</li>
<li>Sub 2.2
<ul class="innermenu">
<li><a href="sev.html">Link 9</a></li>
</ul>
</li>
</ul>
</li>
<li>Item 3
<ul class="innermenu">
<li><a href="sev.html">Link 10</a></li>
<li><a href="sev.html">Link 11</a></li>
</ul>
</li>
</ul>
</div>-->
<?php echo $this->_tpl_vars['categorytree']; ?>
</div>
<?php echo $this->_tpl_vars['relatedproduct']; ?>
</div>
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