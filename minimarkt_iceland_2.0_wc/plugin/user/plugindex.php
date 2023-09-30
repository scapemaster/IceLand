<?php
    include 'pluginnav.php';
    $path2func = '../plugin/'.$_GET['plugin'].'/function/';


                //Startseite angeben oder Code bearbeiten :-)
    if(!isset($_GET['function'])) {$content2show = $path2func.'myaccount.php';}
                //Alle restlichen Seiten werden hiermit gewählt.
    else {$content2show = $path2func.$_GET['function'].'.php';}
                //Hier werden die Seiteninhalte angezeigt.
    include $content2show;
?>