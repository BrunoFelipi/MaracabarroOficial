<?php
    include '../conexao.php';
    session_start();
    $_SESSION['token'] = null;
    session_destroy();
?>
