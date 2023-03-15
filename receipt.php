<?php
    session_start();
    echo $_SESSION['err'];
    echo "<p> ".$_SESSION['state']." </p>"

?>