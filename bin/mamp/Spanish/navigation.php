<?php include_once '../php/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>MAMP</title>
		<link rel="stylesheet" type="text/css" href="../css/screen.css" />
		<script type="text/javascript" src="../js/prototype.js"></script>
		<script type="text/javascript" src="../js/functions.js"></script>
		<script type="text/javascript">new PeriodicalExecuter(setNavigationHighlight, 1);</script>
	</head>
	<body id="navigation">
		<ul>
			<li class="first" id="navigation[Start]"><a href="index.php?language=<?php echo $language; ?>" target="contentFrame">Inicio</a></li>
			<li id="navigation[phpInfo]"><a href="../phpinfo.php" target="contentFrame">phpInfo</a></li>
			<?php if(extension_loaded('apc')): ?>
				<li id="navigation[APC]"><a href="../apc.php?language=<?php echo $language; ?>" target="contentFrame">APC</a></li>
			<?php endif ?>
			<?php if(extension_loaded('eAccelerator')): ?>
				<li id="navigation[eAccelerator]"><a href="../eaccelerator.php?language=<?php echo $language; ?>" target="contentFrame">eAccelerator</a></li>
			<?php endif ?>
			<?php if(extension_loaded('XCache')): ?>
				<li id="navigation[XCache]"><a href="../xcache-admin/?language=<?php echo $language; ?>" target="contentFrame">XCache</a></li>
			<?php endif ?>
				<li id="navigation[phpMyAdmin]"><a href="../phpmyadmin.php?lang=es-iso-8859-1&amp;language=<?php echo $language; ?>" target="contentFrame">phpMyAdmin</a></li>
			<?php if(version_compare(PHP_VERSION, '5.0.0') > -1): ?>
				<li id="navigation[SQLiteManager]"><a href="/SQLiteManager/?language=<?php echo $language; ?>" target="contentFrame">SQLiteManager</a></li>
			<?php endif ?>
			<?php if (true == $b_webedition_exists): ?>
				<li id="navigation[webEdition]"><a href="/webEdition/" target="contentFrame">webEdition</a></li>
			<?php endif ?>
			<li id="navigation[FAQ]"><a href="faq.php?language=<?php echo $language; ?>" target="contentFrame">FAQ</a></li>
			<li class="last"><a href="http://www.mamp.info/en/mamp-pro/index.html" target="_blank">Try MAMP PRO</a></li>
		</ul>
		<div id="navigationPoweredBy">MAMP &amp; MAMP PRO powered by <a href="http://www.appsolute.de" target="_blank">appsolute GmbH</a>
	</body>
</html>