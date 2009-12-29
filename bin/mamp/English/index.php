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
					<div class="headerLeft">
						<img src="../images/mamp-logo.png" alt="MAMP" />
					</div>
					<div class="headerRight">
						<h1>Welcome to MAMP</h1>
						<h2>If you can see this page, MAMP is installed<br/>on your Mac and everything is working!</h2>
					</div>
					<div class="cb"></div>
					<div class="frame">
						<h2>PHP</h2>
						<p>To see the PHP configuration, you can watch the output of <a href="../phpinfo.php">phpinfo</a>.</p>
						<?php if (true == $b_webedition_exists): ?>
							<h2>webEdition</h2>
							<p>You have successfully installed webEdition on your MAMP. To start it click <a href="/webEdition/">here</a>. To login in webEdition use <em>admin</em> as user name and <em>admin</em> as password.</p>
						<?php endif; ?>
						<h2>MySQL</h2>
						<p>The MySQL Database can be administrated with <a href="../phpmyadmin.php?lang=en-iso-8859-1">phpMyAdmin</a>.</p>
						<p>To connect to the MySQL Server from your own scripts use the following connection parameters:</p>
						<table class="mysql">
							<tr>
								<th>Host</th>
								<td>localhost</td>
							</tr>
							<tr>
								<th>Port</th>
								<td>3306</td>
							</tr>
							<tr>
								<th>User</th>
								<td>root</td>
							</tr>
							<tr>
								<th>Password</th>
								<td>root</td>
							</tr>
						</table>
						<h3>Example:</h3>
						<pre>$link = mysql_connect('localhost, 'root', 'root');</pre>
						<p>or you can connect using an UNIX Socket:</p>
						<table class="mysql">
							<tr>
								<th>Socket</th>
								<td>/Applications/MAMP/tmp/mysql/mysql.sock</td>
							</tr>
							<tr>
								<th>User</th>
								<td>root</td>
							</tr>
							<tr>
								<th>Password</th>
								<td>root</td>
							</tr>
						</table>
						<h3>Example:</h3>
						<pre>
$link = mysql_connect(
  ':/Applications/MAMP/tmp/mysql/mysql.sock',
  'root',
  'root'
);
</pre>
					</div>
					<br />
					<div class="frame">
						<a href="http://www.appsolute.de" target="_blank"><img src="../images/appsolute-logo.png" alt="appsolute GmbH"/></a><br />
						MAMP and MAMP PRO is developed and distributed by <a href="http://www.appsolute.de" target="_blank">appsolute GmbH</a>.<br /><br />
						<img src="../images/4logos.png" alt="Mac, Apache, MySQL, PHP"/>
					</div>
						<p><br/><strong>Have fun and enjoy,<br/>Your MAMP-Team</strong></p>
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