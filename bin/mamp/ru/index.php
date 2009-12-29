<?php include_once '../php/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
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
						<h1>Добро пожаловать в MAMP</h1>
						<h2>Перед Вами видна данная страница,<br/>что означает успешную инсталляцию MAMP!</h2>
					</div>
					<div class="cb"></div>
					<div class="frame">
						<h2>PHP</h2>
						<p>Для просмотра конфигурации PHP можно <a href="../phpinfo.php">воспользоваться</a> phpinfo.</p>
						<h2>eAccelerator</h2>
						<p><a href="../eaccelerator.php">Здесь</a> предоставляется доступ к управлению eAccelerator.</p>
						<?php if (true == $b_webedition_exists): ?>
							<h2>webEdition</h2>
							<p>Инсталляция webEdition под MAMP успешно завершена. Для запуска системы нажмите <a href="/webEdition/">здесь</a>. Для входа в систему webEdition нужно воспользоваться логином <em>admin</em> и паролем <em>admin</em>.</p>
						<?php endif; ?>
						<h2>MySQL</h2>
						<p>Управлять базой данных MySQL можно с помощью <a href="../phpmyadmin.php?lang=ru-utf-8">phpMyAdmin</a>.</p>
						<p>Для доступа к серверу MySQL посредством собственных скриптов, нужно воспользоваться следующим параметром связи:</p>
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
								<th>пользователь</th>
								<td>root</td>
							</tr>
							<tr>
								<th>пароль</th>
								<td>root</td>
							</tr>
						</table>
						<h3>Пример:</h3>
						<pre>$link = mysql_connect('localhost', 'root', 'root');</pre>
						<p>Альтернативано можно создать соединение посредством UNIX Socket:</p>
						<table class="mysql">
							<tr>
								<th>Socket</th>
								<td>/Applications/MAMP/tmp/mysql/mysql.sock</td>
							</tr>
							<tr>
								<th>пользователь</th>
								<td>root</td>
							</tr>
							<tr>
								<th>пароль</th>
								<td>root</td>
							</tr>
						</table>
						<h3>пример:</h3>
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
						<p><br/><strong>Мы желаем Вам успехов в работе MAMP,<br/>Ваш коллектив MAMP</strong></p>
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