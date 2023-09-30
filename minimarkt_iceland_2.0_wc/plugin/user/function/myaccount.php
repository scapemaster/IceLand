<!-- Funktionsüberrschrift -->
<span class='functiontitle'>Meine Benutzerdaten</span>

<!-- Funktionsinhalt -->
<?php
    //Aktuelle Daten holen um Sie im Formular ausgeben zu könnne.
    $get_getmydata = 'SELECT uname, email, password FROM user WHERE uid = '.$_SESSION['uid'];
    $res = mysqli_query($db_con, $get_getmydata);
    while($ds = mysqli_fetch_assoc($res)) {
        foreach($ds as $key => $val) {
            $current_data[$key] = $val;
        }
    }
?>

<form action='#' method='post'>
    <div class='form-group'>
    <label for="uname">Benutzername</label>
    <input class="form-control" type="text" id='uname' value='<?php echo $current_data['uname']; ?>' disabled readonly>
    </div>
    <div class="form-group">
        <label for="email">Email Adresse</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value= <?php echo $current_data['email'];?> >
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" value='********'>
    </div>
    <button type="submit" class="btn btn-primary">Speichern</button>
</form>