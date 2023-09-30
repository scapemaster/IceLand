<!-- Abbilden der Menüleiste -->
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
    <!-- Titel und Collaps -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navigation ein-/ausblenden</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../htdocs/index.php">IceLand</a>
    </div>


    <!-- Start der Navigationseinträgesektion -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <!-- Module -->
        <ul class="nav navbar-nav">
            <!-- Folgend zwei Beispiellinks. Diese sollen später aus den hinzugefügten plugins (via DB)
                 selbst heraus erstellt werden. -->
                 
            <li class='active'><a href='#'>Aktiv</a></li>
            <li><a href='#'>Nicht aktiv</a></li>
        </ul>

    <!-- User-Menü -->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['uname'];?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="?plugin=user&function=myaccount">Mein Profil</a></li>
                    <li><a href="../htdocs/logout.php">Abmelden</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>