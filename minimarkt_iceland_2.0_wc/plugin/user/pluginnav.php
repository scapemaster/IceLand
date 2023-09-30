<?php
    //Beschreibe hier die Funktionen welche das Plugin besitzen soll. Ändere die Liste wie folgt:
    // $fl['Name der Funktions-.php-Datei ohne Dateiendung'] = 'Ausdruck des Menüeintrags';
    $fl['adduser']   = 'Hinzufügen';
    $fl['upduser']   = 'Ändern';

    //Hier wird der html-Text des Menüs generiert.
    $menu = "<ul class='nav nav-tabs pluginnav'>";
    foreach($fl as $file => $name) {
        //Anpassen der Optionen abhängig ob aktiv oder inaktiv.
        if($_GET['function'] == $file) {$active_class   = " class='nav-link active' aria-current='page' ";
                                        } 
            else {$active_class   = " class='nav-link' ";}
        $menu = $menu.  "<li class='nav-item'>
                            <a".$active_class."href='?plugin=".$_GET['plugin']."&function=".$file."'>".$name."
                            </a>
                         </li>";
    }
    $menu = $menu."</ul>";

    //Ausgabe des Menüs
    echo $menu;
?>