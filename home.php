<?php 
    session_start();
    if (!isset($_SESSION['signinOK'])) {
        header('Location: ./index.php');
    }
?>
