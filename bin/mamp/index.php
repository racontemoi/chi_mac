<?php
	include_once 'php/functions.php';

	$port = '3306';
	$link = @mysql_connect(':/Applications/MAMP/tmp/mysql/mysql.sock', 'root', 'root');

	if (!$link) {
		exit('Error: Could not connect to MySQL server!');
	}
	mysql_close($link);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>MAMP</title>
	</head>
	<frameset rows="39,*" frameborder="no" border="0" framespacing="0">
		<frame src="<?php echo $language; ?>/navigation.php?language=<?php print $language; ?>" name="navigationFrame" id="navigationFrame" scrolling="No" noresize="noresize" />
		<frame src="<?php echo $language; ?>/index.php?language=<?php print $language; ?>" name="contentFrame" id="contentFrame" />
	</frameset>
</html>