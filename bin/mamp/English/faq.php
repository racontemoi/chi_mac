<?php include_once '../php/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>MAMP</title>
		<link rel="stylesheet" type="text/css" href="../css/screen.css" />
	</head>
	<body>
		<div id="contentWrap">
			<div id="content">
				<div class="column1">
					<div class="frame">
						<h1>FAQ</h1>
						<dl>
							<dt>Which versions of the included programs are installed?</dt>
							<dd><ul><li>Apache 2.0.63</li><li>MySQL 5.1.37</li><li>PHP 4.4.9 &amp; 5.2.10</li><li>APC 3.0.19 &amp; APC 3.1.2</li><li>eAccelerator 0.9.5.3</li><li>XCache 1.2.2</li><li>phpMyAdmin 2.11.9.5 &amp; phpMyAdmin 3.2.0.1</li><li>Zend Optimizer 3.3.3</li><li>SQLiteManager 1.2.0</li><li>Freetype 2.3.9</li><li>t1lib 5.1.2</li><li>curl 7.19.5</li><li>jpeg 7</li><li>libpng-1.2.38</li><li>gd 2.0.34</li><li>libxml 2.7.3</li><li>libxslt 1.1.24</li><li>gettext 0.17</li><li>libidn 1.15</li><li>iconv 1.13</li><li>mcrypt 2.5.8</li><li>YAZ 3.0.47 &amp; PHP/YAZ 1.0.14</li></ul></dd>
							<dt>How can I change the password for the MySQL database?</dt>
							<dd>Open the terminal and type the following:<br /><br /><code>/Applications/MAMP/Library/bin/mysqladmin -u root -p password &lt;NEWPASSWORD&gt;</code><br /><br />Instead of <code style="left:0">&lt;NEWPASSWORD&gt;</code> use the new password you want.<br />Afterwards, you also need to change the password for phpMyAdmin and other scripts which are running under MAMP. You can change the password for phpMyAdmin in the file /Applications/MAMP/bin/phpMyAdmin-X.X.X/config.inc.php</dd>
							<dt>Where can I change the ports for Apache and MySQL?</dt>
							<dd>You can change the ports in the MAMP program under Preferences:<br /><br /><img src="images/ports.gif" alt="" /></dd>
							<dt>Where should I put my HTML and PHP pages?</dt>
							<dd>By default, PHP and HTML Pages should be copied into the htdocs folder which is located under /Applications/MAMP. This folder is called &quot;Document Root&quot;. You can change the path for the Document Root in the MAMP program under Preferences:<br /><br /><img src="images/documentRoot.gif" alt="" /></dd>
							<dt>Why does MAMP ask me for a password when starting or stopping?</dt>
							<dd>You probably have set the Apache port smaller than 1024. Under a Unix system, like Mac OS X, you must have root permissions to start IP services with ports smaller than 1024.</dd>
						</dl>
					</div>
				</div>
				<div class="column2">
					<?php
						echo show_content($language, 'ad', 1);
						echo '<h2>Updates</h2>';
						echo show_content($language, 'news', 2);
						echo '<h2>News</h2>';
						echo show_content($language, 'news', 1);
					?>
				</div>
				<div class="cb"></div>
			</div>
		</div>
	</body>
</html>