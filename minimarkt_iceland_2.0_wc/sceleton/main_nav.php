<?php
    //Bereitstellen der Plugin-Informationen
    $pluginfo = $_SESSION['activeplugins'];
        //Generieren der html für Menü
        foreach($pluginfo as $name => $foldername) {
            if($_GET['plugin'] == $foldername){$act=" class='nav-link active' aria-current='page' ";}
                                                else {$act=" class='nav-link' ";}
            $men = $men."<li class='nav-item'>
                         <a".$act."  
                          href='?plugin=".$foldername."'>".$name."
                         </a></li>";
        }
?>
<!-- Start der Navigation -->
<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

    <!-- Logo -->
    <a class="navbar-brand" href="../htdocs/">
      <img src="../style/sys_pic/fav.png" alt="LANperformance" width="24" height="24">
    </a>
    
    <!-- Seitentitel -->
    <a class="navbar-brand" href="../htdocs/index.php"><?php echo $app_name; ?></a>

    <!-- Navbar Collapse-Funktion -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menüleiste -->
    <div class="collapse navbar-collapse" id="navbarNav">
        
        <!-- Menüeinträge -->
        <ul class="navbar-nav">
        <?php echo $men; ?>
        </ul>

        <!-- Rechtes User-Menü -->
        <ul class='nav navbar-nav'>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benutzerkonto
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?plugin=user&funktion=myaccount">Mein Account</a></li>
            <li><a class="dropdown-item" href="../htdocs/logout.php">Logout</a></li>
          </ul>
        </li>
        </ul>

        <!-- Schließen der Tags -->
    </div>
  </div>
</nav>