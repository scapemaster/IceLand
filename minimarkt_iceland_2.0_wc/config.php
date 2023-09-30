<?php 
/*
Das hier ist das IceLand Framework Version 2.0.
*/
// Datenbank Verbindung
$db_host = 'localhost';
$db_user = 'mima';
$db_pwd  = 'Yttrium02!';
$db_name = 'mima';

$db_con  = mysqli_connect($db_host, $db_user, $db_pwd, $db_name);


// Website Stamm-URL
$rooturl = "http://gmork/minimarkt/htdocs/";

// App Name
$app_name = "minimarkt";

// Favicon einbinden
echo "<link rel='icon' type='image/png' href='../style/sys_pic/fav.png'>";
?>