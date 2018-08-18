<?php
    session_start();
    $_SESSION = array("usuario");
    session_destroy();
    header("Location: index.php?p=inicio");
