<?php
//<! DATABSE CONNECTION>//
#**********************************************************

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=lCC5NMMxGb','lCC5NMMxGb','hKGk1tUqOZ');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<---#MYSQL Server Connected Sucessfully#--->";

#*************************************************************

?>
