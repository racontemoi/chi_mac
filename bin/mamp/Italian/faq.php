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
					<div class="frame">
						<h1>FAQ</h1>
						<dl>
							<dt>Quali versioni dei programmi inclusi sono installate?</dt>
							<dd><ul><li>Apache 2.0.63</li><li>MySQL 5.1.37</li><li>PHP 4.4.9 &amp; 5.2.10</li><li>APC 3.0.19 &amp; APC 3.1.2</li><li>eAccelerator 0.9.5.3</li><li>XCache 1.2.2</li><li>phpMyAdmin 2.11.9.5 &amp; phpMyAdmin 3.2.0.1</li><li>Zend Optimizer 3.3.3</li><li>SQLiteManager 1.2.0</li><li>Freetype 2.3.9</li><li>t1lib 5.1.2</li><li>curl 7.19.5</li><li>jpeg 7</li><li>libpng-1.2.38</li><li>gd 2.0.34</li><li>libxml 2.7.3</li><li>libxslt 1.1.24</li><li>gettext 0.17</li><li>libidn 1.15</li><li>iconv 1.13</li><li>mcrypt 2.5.8</li><li>YAZ 3.0.47 &amp; PHP/YAZ 1.0.14</li></ul></dd>
							<dt>Come posso cambiare la parola d'accesso per la base di dati di MySQL?</dt>
							<dd>Aprire il terminale e scrivere quanto segue a macchina:<br /><br /><code>/Applications/MAMP/Library/bin/mysqladmin -u root -p password &lt;NEWPASSWORD&gt;</code><br /><br />Anzich&eacute; <code style="left:0">&lt;NEWPASSWORD&gt;</code> usare la nuova password d'accesso che si desidera.<br />In seguito si deve cambiare la password d'accesso per phpMyAdmin ed altri scripts che stanno funzionando sotto MAMP. Puoi cambiare la password d'accesso per phpMyAdmin nella file /Applications/MAMP/bin/phpMyAdmin-X.X.X/config.inc.php</dd>
							<dt>Dove posso cambiare le porte di comunicazione per Apache e MySQL?</dt>
							<dd>Puoi cambiare le porte di comunicazione sotto le preferenze:<br /><br /><img src="images/ports.gif" alt="" /></dd>
							<dt>Dove devo mettere le mie pagine HTML e PHP?</dt>
							<dd>Di default, le pagine  HTML e PHP devono essere copiate nella cartella htdocs situata in /Applications/MAMP. Questa cartella &egrave; chiamata &quot;Document Root&quot;. Puoi cambiare la path della Document Root in MAMP sotto le preferenze:<br /><br /><img src="images/documentRoot.gif" alt="" /></dd>
							<dt>Perch&egrave; MAMP mi chiede una password d'accesso quando si avvia o si arresta?</dt>
							<dd>Probabilmente hai regolato le porte di comunicazione di Apache inferiori alla 1024. Sotto un sistema UNIX, come Mac OS X, devi avere le porte al di sotto della 1024.</dd>
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