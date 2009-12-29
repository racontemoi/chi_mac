<?php include_once '../php/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
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
							<dt>Quelles sont les versions des programmes inclus ?</dt>
							<dd><ul><li>Apache 2.0.63</li><li>MySQL 5.1.37</li><li>PHP 4.4.9 &amp; 5.2.10</li><li>APC 3.0.19 &amp; APC 3.1.2</li><li>eAccelerator 0.9.5.3</li><li>XCache 1.2.2</li><li>phpMyAdmin 2.11.9.5 &amp; phpMyAdmin 3.2.0.1</li><li>Zend Optimizer 3.3.3</li><li>SQLiteManager 1.2.0</li><li>Freetype 2.3.9</li><li>t1lib 5.1.2</li><li>curl 7.19.5</li><li>jpeg 7</li><li>libpng-1.2.38</li><li>gd 2.0.34</li><li>libxml 2.7.3</li><li>libxslt 1.1.24</li><li>gettext 0.17</li><li>libidn 1.15</li><li>iconv 1.13</li><li>mcrypt 2.5.8</li><li>YAZ 3.0.47 &amp; PHP/YAZ 1.0.14</li></ul></dd>
							<dt>Comment puis-je changer le mot de passe de la base de données MySQL?</dt>
							<dd>Ouvrez le Terminal et saisissez :<br /><br /><code>/Applications/MAMP/Library/bin/mysqladmin -u root -p password &lt;NEWPASSWORD&gt;</code><br /><br />Au lieu de <code style="left:0">&lt;NEWPASSWORD&gt;</code> utilisez le nouveau mot de passe à affecter.<br />Après cela, vous devez aussi redéfinir le mot de passe MySQL pour phpMyAdmin et les autres scripts qui fonctionnent sous MAMP. Pour phpMyAdmin, vous devez éditer le fichier /Applications/MAMP/bin/phpMyAdmin-X.X.X/config.inc.php</dd>
							<dt>Où puis-je changer les ports pour Apache et MySQL?</dt>
							<dd>Vous pouvez changer les ports dans le programme MAMP en affichant les Préférences:<br/><br/><img src="images/ports.gif" alt=""/></dd>
							<dt>Where should I put my HTML and PHP pages?</dt>
							<dd>By default, PHP and HTML Pages should be copied into the htdocs folder which is located under /Applications/MAMP. This folder is called &quot;Document Root&quot;. You can change the path for the Document Root in the MAMP program under Preferences:<br/><br/><img src="images/documentRoot.gif" alt="" /></dd>
							<dt>Pourquoi est-ce que MAMP me demande un mot de passe au lancement et à la fermeture ?</dt>
							<dd>Vous avez probablement défini le port d'Apache à une valeur inférieure à 1024. Dans un système Unix, comme Mac OS X, vous devez posséder les droits d'administrateur (root) pour lancer des services IP dont les numéros de ports sont inférieurs à 1024.</dd>
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