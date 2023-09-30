<?php
    //Beschreibe hier die Funktionen welche das Plugin besitzen soll. Ändere die Liste wie folgt:
    // $fl['Name der Funktions-.php-Datei ohne Dateiendung'] = 'Ausdruck des Menüeintrags';
    $fl['myaccount'] = 'Meine Benutzerdaten';
    $fl['#']         = 'Beispiel Punkt (wird nie aktiv)';

    //Hier wird der html-Text des Menüs generiert.
    $menu = "<nav><ul class='nav nav-tabs'>";
    foreach($fl as $file => $name) {
        //Anpassen der Optionen abhängig ob aktiv oder inaktiv.
        if($_GET['function'] == $file) {$active_class   = " class='nav-link active' ";
                                        $aria_c         = " aria-current='page' ";
                                        } else {$active_class   = " class='nav-link' ";
                                                $aria_c         = ' ';
                                            }
        $menu = $menu.  "<li class='nav-item'>
                            <a".$active_class.$aria_c." 
                            href='?plugin=".$_GET['plugin']."&function=".$file."'>".$name."
                            </a>
                         </li>";
    }
    $menu = $menu."</ul></nav>";

    //Ausgabe des Menüs
    echo $menu;
?>
