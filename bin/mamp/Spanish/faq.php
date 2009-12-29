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
					<div class="frame">
						<h1>FAQ</h1>
						<dl>
							<dt>&iquest;C&uacute;ales son las versiones de los programas instalados?</dt>
							<dd><ul><li>Apache 2.0.63</li><li>MySQL 5.1.37</li><li>PHP 4.4.9 &amp; 5.2.10</li><li>APC 3.0.19 &amp; APC 3.1.2</li><li>eAccelerator 0.9.5.3</li><li>XCache 1.2.2</li><li>phpMyAdmin 2.11.9.5 &amp; phpMyAdmin 3.2.0.1</li><li>Zend Optimizer 3.3.3</li><li>SQLiteManager 1.2.0</li><li>Freetype 2.3.9</li><li>t1lib 5.1.2</li><li>curl 7.19.5</li><li>jpeg 7</li><li>libpng-1.2.38</li><li>gd 2.0.34</li><li>libxml 2.7.3</li><li>libxslt 1.1.24</li><li>gettext 0.17</li><li>libidn 1.15</li><li>iconv 1.13</li><li>mcrypt 2.5.8</li><li>YAZ 3.0.47 &amp; PHP/YAZ 1.0.14</li></ul></dd>
							<dt>&iquest;C&oacute;mo puedo cambiar la password de la base de datos MySQL?</dt>
							<dd>Abre un terminal y escribe lo siguiente:<br /><br /><code>/Applications/MAMP/Library/bin/mysqladmin -u root -p password &lt;NUEVAPASSWORD&gt;</code><br /><br />En vez de <code style="left:0">&lt;NUEVAPASSWORD&gt;</code> utiliza la password que desees.<br />Luego, puedes necesitar cambiar la password para phpMyAdmin y otros script que corren bajo MAMP. Puedes cambiar la password para phpMyAdmin en el archivo /Applications/MAMP/bin/phpMyAdmin-X.X.X/config.inc.php</dd>
							<dt>&iquest;D&oacute;nde puedo cambiar los puertos para Apache y MySQL?</dt>
							<dd>Puedes cambiar los puertos en MAMP dentro de Preferencias:<br/><br/><img src="images/ports.gif" alt="" /></dd>
							<dt>¿Dónde debería poner mis páginas HTML y PHP?</dt>
							<dd>Por defecto, las páginas PHP y HTML debería ser copiadas en la carpeta htdocs que se encuentra en /Aplicaciones/MAMP. Esta carpeta se denomina &quot;DocumentRoot&quot;. Puedes cambiar la ruta para el &quot;DocumentRoot&quot;, en Preferencias del MAMP.:<br/><br/><img src="images/documentRoot.gif" alt="" /></dd>
							<dt>&iquest;Por qu&eacute; MAMP me pregunta por una password cuando lo inicio o detengo?</dt>
							<dd>Probablemente has elegido un puerto para Apache menor de 1024. Bajo sistemas Unix, como Mac OS X, debes tener permisos de root para arrancar servicios IP con puertos menores de 1024.</dd>
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