<?php

    session_start();
    
    if($_SESSION['adminid']==""){
        header("location: index.php");
    }

    session_destroy();
    header("location: index.php");

?>