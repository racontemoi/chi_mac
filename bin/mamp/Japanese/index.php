<?php include_once '../php/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
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
						<h1>MAMPへようこそ!</h1>
						<h2>このページを見ているということは、MAMPのインストールが完了し、正常に動作しているということです。</h2>
					</div>
					<div class="cb"></div>
					<div class="frame">
						<h2>PHP</h2>
						<p>PHPの設定を知るには、<a href="../phpinfo.php">phpinfo</a>の出力内容を見てください。</p>
						<?php if (true == $b_webedition_exists): ?>
							<h2>webEdition</h2>
							<p>MAMP上へのwebEditionのインストールは成功しています。開始するには <a href="/webEdition/">ここ</a> をクリックしてください。webEditionにログインするにはユーザ名とパスワードに「<em>admin</em>」を使用してください。</p>
						<?php endif; ?>
						<h2>MySQL</h2>
						<p>MySQLデータベースは <a href="../phpmyadmin.php?lang=ja-utf-8">phpMyAdmin</a> を使って管理できます。</p>
						<p>スクリプトからMySQLサーバに接続するには、以下の設定を使用してください。</p>
						<table class="mysql">
							<tr>
								<th>ホスト</th>
								<td>localhost</td>
							</tr>
							<tr>
								<th>ポート</th>
								<td>3306</td>
							</tr>
							<tr>
								<th>ユーザ名</th>
								<td>root</td>
							</tr>
							<tr>
								<th>パスワード</th>
								<td>root</td>
							</tr>
						</table>
						<h3>例:</h3>
						<pre>$link = mysql_connect('localhost', 'root', 'root');</pre>
						<p>また、UNIXソケットを使用するには、以下の設定を使用してください。</p>
						<table class="mysql">
							<tr>
								<th>ソケット</th>
								<td>/Applications/MAMP/tmp/mysql/mysql.sock</td>
							</tr>
							<tr>
								<th>ユーザ名</th>
								<td>root</td>
							</tr>
							<tr>
								<th>パスワード</th>
								<td>root</td>
							</tr>
						</table>
						<h3>例:</h3>
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
						<p><br/><strong>それではお楽しみください。<br/>MAMP チーム</strong></p>
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