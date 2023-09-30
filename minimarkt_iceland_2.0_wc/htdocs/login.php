<?php session_start();
      include "../config.php";

      //Weiterleitung wenn Login bereits besteht
      if(isset($_SESSION['uid'])) {
        //Weiterleitung zur Startseite
        header('Location: ../htdocs/index.php');
      }
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
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- aditional CSS -->
    <link rel="stylesheet" href="../style/css/main-incl.css">

    <style>
      body {
        background-image: url('../style/sys_pic/login_background.png');
        background-size: 100% auto;}
    </style>
  </head>


  <?php
  if(isset($_POST['login'])) {
    // Benutzerdaten abfragen
    $login = strtolower($_POST['uname']);
    $sql_get_uid = "SELECT uid, password, uname FROM user WHERE uname = '".$login."'";
    $res = mysqli_query($db_con, $sql_get_uid);
    while($ds = mysqli_fetch_assoc($res)) {
      if(password_verify($_POST['password'], $ds['password'])) {
        //Verify-Daten in SESSION schreiben
        $_SESSION['uid']    = $ds['uid'];
        $_SESSION['uname']  = $ds['uname'];

        //Bereitstellen der Plugin-Informationen
        $sql_getplugins = "SELECT name, foldername FROM plugin WHERE active = 1";
        $res = mysqli_query($db_con, $sql_getplugins);
        while($ds = mysqli_fetch_assoc($res)) {
          $activeplugins[$ds['name']] = $ds['foldername'];
        }
        $_SESSION['activeplugins'] = $activeplugins;
      }
    }
    
    // Weiterleitung nach erfolgter Anmeldung.
    header('Location: ../htdocs/index.php');
  }
  ?>



<body>
    <div class="container">
      <div class='text-center'>
        <img src="../style/sys_pic/app_banner.png" class="rounded" alt="Keine Verbindung..?">
      </div>

        <form class="form-signin" method='POST' action='#'>
          <h2 class="form-signin-heading" style='color: grey;'>Bitte melde dich an</h2>
          
          <label for="eingabefelduname" class="sr-only">Benutzername</label>
          <input type="text" name='uname' id="eingabefelduname" class="form-control" placeholder="Benutzername" required autofocus>
          
          <label for="eingabefeldPasswort" class="sr-only">Passwort</label>
          <input type="password" name='password' id="eingabefeldPasswort" class="form-control" placeholder="Passwort" required>
          <button class="btn btn-lg btn-primary btn-block form-signin" name='login' type="submit">Anmelden</button>
        </form>
    </div> <!-- /container -->

  </div>
</div>

<!-- Footer -->
  <?php include "../sceleton/footer.php"; ?>
  </body>
</html>