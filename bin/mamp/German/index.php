<?php include_once '../php/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
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
						<h1>Willkommen bei MAMP</h1>
						<h2>Wenn Sie diese Seite sehen können,<br/>wurde bei Ihnen MAMP korrekt installiert!</h2>
					</div>
					<div class="cb"></div>
					<div class="frame">
						<h2>PHP</h2>
						<p>Um die PHP Konfiguration zu sehen können Sie <a href="../phpinfo.php">phpinfo</a> benutzen.</p>
						<?php if (true == $b_webedition_exists): ?>
							<h2>webEdition</h2>
							<p>Sie haben erfolgreich webEdition auf MAMP installiert. Um es zu starten klicken Sie <a href="/webEdition/">hier</a>. Um sich in webEdition einzuloggen benutzen Sie <em>admin</em> als Benutzername und <em>admin</em> als Kennwort.</p>
						<?php endif; ?>
						<h2>MySQL</h2>
						<p>Die MySQL Datenbank können Sie mit <a href="../phpmyadmin.php?lang=de-iso-8859-1">phpMyAdmin</a> administrieren.</p>
						<p>Um auf den MySQL Server von Ihren eigenen Scripten zuzugreifen müssen Sie folgende Verbindungsparameter benutzen:</p>
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
								<th>Benutzer</th>
								<td>root</td>
							</tr>
							<tr>
								<th>Kennwort</th>
								<td>root</td>
							</tr>
						</table>
						<h3>Beispiel:</h3>
						<pre>$link = mysql_connect('localhost', 'root', 'root');</pre>
						<p>oder Sie können eine Verbindung per UNIX Socket herstellen:</p>
						<table class="mysql">
							<tr>
								<th>Socket</th>
								<td>/Applications/MAMP/tmp/mysql/mysql.sock</td>
							</tr>
							<tr>
								<th>Benutzer</th>
								<td>root</td>
							</tr>
							<tr>
								<th>Kennwort</th>
								<td>root</td>
							</tr>
						</table>
						<h3>Beispiel:</h3>
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
						MAMP und MAMP PRO werden entwicklet und vertrieben durch die <a href="http://www.appsolute.de" target="_blank">appsolute GmbH</a>.<br /><br />
						<img src="../images/4logos.png" alt="Mac, Apache, MySQL, PHP"/>
					</div>
						<p><br/><strong>Viel Spaß mit MAMP wünscht Ihnen,<br/>Ihr MAMP-Team</strong></p>
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