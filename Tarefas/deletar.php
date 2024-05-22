<?php
session_start();

if (isset($_GET['id']) && isset($_SESSION['tarefas'][$_GET['id']])) {
    unset($_SESSION['tarefas'][$_GET['id']]);
}

header('Location: ../index.php');
exit;