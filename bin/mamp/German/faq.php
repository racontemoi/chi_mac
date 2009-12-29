<?php
	include_once '../php/functions.php';
	$language = (isset($_REQUEST['language']) && $_REQUEST['language']) ? $_REQUEST['language'] : 'English';
?>
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
					<div class="frame">
						<h1>FAQ</h1>
						<dl>
							<dt>Welche Versionen der enthaltenen Programme sind installiert?</dt>
							<dd><ul><li>Apache 2.0.63</li><li>MySQL 5.1.37</li><li>PHP 4.4.9 &amp; 5.2.10</li><li>APC 3.0.19 &amp; APC 3.1.2</li><li>eAccelerator 0.9.5.3</li><li>XCache 1.2.2</li><li>phpMyAdmin 2.11.9.5 &amp; phpMyAdmin 3.2.0.1</li><li>Zend Optimizer 3.3.3</li><li>SQLiteManager 1.2.0</li><li>Freetype 2.3.9</li><li>t1lib 5.1.2</li><li>curl 7.19.5</li><li>jpeg 7</li><li>libpng-1.2.38</li><li>gd 2.0.34</li><li>libxml 2.7.3</li><li>libxslt 1.1.24</li><li>gettext 0.17</li><li>libidn 1.15</li><li>iconv 1.13</li><li>mcrypt 2.5.8</li><li>YAZ 3.0.47 &amp; PHP/YAZ 1.0.14</li></ul></dd>
							<dt>Wie kann ich das Kennwort für die MySQL Datenbank ändern?</dt>
							<dd>Öffnem Sie das Terminal und schreiben folgendes:<br/><br/><code>/Applications/MAMP/Library/bin/mysqladmin -u root -p password &lt;NEUESKENNWORT&gt;</code><br/><br/>Anstelle von <code style="left: 0pt;">&lt;NEUESKENNWORT&gt;</code> müssen Sie das gewünschte Kennwort benutzen.<br/>Bedenken Sie aber, dass dannach auch das Kennwort für phpMyAdmin und andere Skripte, welche unter MAMP laufen, geändert werden muss. Das Kennwort für phpMyAdmin kann in der Datei /Applications/MAMP/bin/phpMyAdmin-X.X.X/config.inc.php geändert werden.</dd>
							<dt>Wo kann ich die Ports für Apache and MySQL ändern?</dt>
							<dd>Sie können die Ports im MAMP Programm unter Einstellungen ändern:<br/><br/><img src="images/ports.gif" alt="" /></dd>
							<dt>Wo soll ich meine PHP- und HTML-Seiten abspeichern?</dt>
							<dd>In der Standardeinstellung sollten PHP- und HTML-Seiten in den htdocs Ordner, welcher sich im Orner /Programme/MAMP befindet, kopiert werden. Dieser Ordner wird auch &quot;Document Root&quot; genannt. Den Pfad für den Dokument Root können Sie jederzeit im MAMP Programm unter Einstellungen ändern:<br/><br/><img src="images/documentRoot.gif" alt="" /></dd>
							<dt>Warum werde ich nach meinem Kennwort gefragt, wenn MAMP gestartet oder beendet wird?</dt>
							<dd>Sie haben wahrscheinlich den Apache Port kleiner als 1024 eingestellt. Bei einem Unix System, wie Mac OS X, benötigen Sie root Rechte um IP Dienste mit Ports kleiner als 1024 zu starten.</dd>
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