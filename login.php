<?php

    session_start();

    if(isset($_POST['submitLogin'])) {
        $_SESSION['id'] = 3;
        header("Location: index.php");
    }