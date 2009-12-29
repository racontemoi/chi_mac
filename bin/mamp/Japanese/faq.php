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
					<div class="frame">
						<h1>FAQ</h1>
						<dl>
							<dt>MAMPに含まれるプログラムのバージョン</dt>
							<dd><ul><li>Apache 2.0.63</li><li>MySQL 5.1.37</li><li>PHP 4.4.9 &amp; 5.2.10</li><li>APC 3.0.19 &amp; APC 3.1.2</li><li>eAccelerator 0.9.5.3</li><li>XCache 1.2.2</li><li>phpMyAdmin 2.11.9.5 &amp; phpMyAdmin 3.2.0.1</li><li>Zend Optimizer 3.3.3</li><li>SQLiteManager 1.2.0</li><li>Freetype 2.3.9</li><li>t1lib 5.1.2</li><li>curl 7.19.5</li><li>jpeg 7</li><li>libpng-1.2.38</li><li>gd 2.0.34</li><li>libxml 2.7.3</li><li>libxslt 1.1.24</li><li>gettext 0.17</li><li>libidn 1.15</li><li>iconv 1.13</li><li>mcrypt 2.5.8</li><li>YAZ 3.0.47 &amp; PHP/YAZ 1.0.14</li></ul></dd>
							<dt>MySQLデータベースのパスワードを変更したい</dt>
							<dd>ターミナルを起動して以下のように入力します。<br /><br /><code>/Applications/MAMP/Library/bin/mysqladmin -u root -p password &lt;NEWPASSWORD&gt;</code><br /><br /><code style="left:0">&lt;NEWPASSWORD&gt;</code>には変更後のパスワードを入力してください。<br />変更後、MAMP上で動作しているphpMyAdminやその他のスクリプトのパスワードも変更しなければなりません。 phpMyAdminのパスワードは、 /Applications/MAMP/bin/phpMyAdmin-X.X.X/config.inc.php を書き換える事で変更できます。</dd>
							<dt>Apache や MySQL のポートを変更したい</dt>
							<dd>MAMPの使用するポートは、環境設定から変更できます。<br /><br /><img src="images/ports.gif" alt="" /></dd>
							<dt>HTML や PHP ファイルはどこに入れればいいか</dt>
							<dd>標準では、HTMLやPHPファイルは /Applications/MAMP/htdocs 内に入れる必要があります。このフォルダは &quot;Document Root&quot; と呼ばれます。MAMPの Document Root は、環境設定から変更できます。<br /><br /><img src="images/documentRoot.gif" alt="" /></dd>
							<dt>なぜMAMPは起動時や終了時にパスワードを要求するのか</dt>
							<dd>Apache の使用ポートを 1024 より小さい数字に設定していませんか？ Mac OS X の様な UNIX環境下では、1024より小さい番号のポートでIPサービスを開始するには root 権限が必要です。</dd>
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