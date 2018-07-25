<?php 
	$backDir = '';
	require_once($backDir.'config.php');
	$pageTitle = '';
?>
<?php include('includes/html_doctype.inc'); ?>
<?php include('includes/html_head.inc'); ?>
<div id="container">
<?php
for ($i = 1; $i <= 1888; $i ++) {
	$rand = substr(str_shuffle(str_repeat("123456789abcdef", 1)), 0, 6);
	echo '<a style="background: #'.$rand.'"></a>';
}

?>
</div>
<?php include('includes/html_end.inc'); ?>