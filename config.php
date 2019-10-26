<?php
//<! DATABSE CONNECTION>//
#**********************************************************

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=hellophp','SANAT','sanat');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "<---#MYSQL Server Connected Sucessfully#--->";

#*************************************************************
//for limit data

$page_limit = 02;


/* Google App Client Id */
define('CLIENT_ID', '1084657666117-3medceetil2to16s7ucpinteiplcm9pt.apps.googleusercontent.com');

/* Google App Client Secret */
define('CLIENT_SECRET', 'jcNljACnp8OLiHCpVoIo1smC');

/* Google App Redirect Url */
define('CLIENT_REDIRECT_URL', 'http://localhost/PHPGoogle/gauth.php');

?>