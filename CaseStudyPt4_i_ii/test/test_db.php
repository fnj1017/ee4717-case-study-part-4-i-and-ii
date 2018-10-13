PHP & MySQL Code:
<?php
echo 'ok<br />';
mysqli_connect ("localhost", "root", "", "java-jam-coffee") or die(mysql_error());
echo "Connected to MySQL<br />";
?>
