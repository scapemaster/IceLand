<?php session_start();
    include_once '../config.php';
    if(!isset($_SESSION['uid'])) {header('Location: ./login.php');}
    //--Hier stand mal die Rollen-Authentifizierung--
?>

<!doctype html>
<html lang="de">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title><?php echo $app_name;?></title>

    <!-- Styles -->
    <!-- Bootstrap Section. Do not edit this. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- aditional CSS. Insert all aditional CSS below this. -->
    <link rel="stylesheet" href="../style/css/main-incl.css">
  </head>



  

  <body>
    <main>
    <!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -Headder- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <?php include '../sceleton/main_nav.php'; ?>


    <!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -Anzeige des Inhalt- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <?php
            //Plugindex aufrufen
            if(isset($_GET['plugin'])) {
              $path_plugin = '../plugin/'.$_GET['plugin'].'/plugindex.php';
              include $path_plugin;
            }
            else {include '../version.html';}
            ?>

    </main>

    <!--    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -Footer- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <?php include "../sceleton/footer.php"; ?>
  </body>
</html>