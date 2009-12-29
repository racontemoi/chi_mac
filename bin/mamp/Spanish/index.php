<?php include_once '../php/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
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
						<h1>Bienvenido a MAMP</h1>
						<h2>Si puedes ver esta p&aacute;gina, MAMP esta instalado en tu Mac y todo esta funcionando!</h2>
					</div>
					<div class="cb"></div>
					<div class="frame">
						<h2>PHP</h2>
						<p>Para ver la configuracion de PHP, puedes ver la salida de <a href="../phpinfo.php">phpinfo</a>.</p>
						<?php if (true == $b_webedition_exists): ?>
							<h2>webEdition</h2>
							<p>Has instalado correctamente webEdition en tu MAMP. Para iniciarlo pincha <a href="/webEdition/">aqu&iacute;</a>. Para hacer login en webEdition usa <em>admin</em> como username y <em>admin</em> como password.</p>
						<?php endif; ?>
						<h2>MySQL</h2>
						<p>La base de datos MySQL puede ser administrada con <a href="../phpmyadmin.php?lang=es-iso-8859-1">phpMyAdmin</a>.</p>
						<p>Para conectar al servidor de MySQL desde tus scripts usa los siguientes parametros de conexi&oacute;n:</p>
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
						<h3>Ejemplo:</h3>
						<pre>$link = mysql_connect('localhost', 'root', 'root');</pre>
						<p>o puedes conectar usando un socket de UNIX:</p>
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
						<h3>Ejemplo:</h3>
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
						<p><br/><strong>Divi&eacute;rtete y disfruta,<br/>El equipo de MAMP</strong></p>
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