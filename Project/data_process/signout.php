<?php
use data_process\User;
session_start();
require_once "../includes/db_connect.php";

require_once "../includes/constant.php";


// Sign Out
if (isset($_SESSION["control"])) {

    unset($_SESSION["control"]);
    session_destroy($_SESSION["control"]);

    header("Location: ../");
    exit();
}
?>