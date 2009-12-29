<?php include_once '../php/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
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
						<h1>Benvenuto in MAMP</h1>
						<h2>Se visualizzi questa pagina significa che MAMP è installato correttamente e funzionante sul tuo MAC OS X!</h2>
					</div>
					<div class="cb"></div>
					<div class="frame">
						<h2>PHP</h2>
						<p>Per vedere la configurazione di PHP puoi visualizzare <a href="../phpinfo.php">phpinfo</a>.</p>
						<?php if (true == $b_webedition_exists): ?>
							<h2>webEdition</h2>
							<p>You have successfully installed webEdition on your MAMP. To start it click <a href="/webEdition/">here</a>. To login in webEdition use <em>admin</em> as username and <em>admin</em> as password.</p>
						<?php endif; ?>
						<h2>MySQL</h2>
						<p>Il database MySQL può essere amministrato e gestito attraverso <a href="../phpmyadmin.php?lang=it-iso-8859-1">phpMyAdmin</a>.</p>
						<p>Per connetterti al database MySQL vengono riportati qui sotto i parametri di connessione:</p>
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
						<h3>Esempio:</h3>
						<pre>$link = mysql_connect('localhost', 'root', 'root');</pre>
						<p>o puoi connetterti usanto il socket UNIX:</p>
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
						<h3>Esempio:</h3>
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
						<p><br/><strong>Buona fortuna e divertiti,<br/>Il Tuo MAMP-Team</strong></p>
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