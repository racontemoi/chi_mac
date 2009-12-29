<?php
	if (version_compare(PHP_VERSION, '5.0.0', '<')) {
		header('Location: /phpMyAdminForPHP4/'.(!empty($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : ''));
	} else {
		header('Location: /phpMyAdminForPHP5/'.(!empty($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : ''));
	}
?>