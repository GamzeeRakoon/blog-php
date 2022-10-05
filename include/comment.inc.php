<?php

session_start();

if (isset($_POST["submit"])) {

    $postid = $_POST["post"];
    $comment = $_POST["comment"];
    $currentUser = $_SESSION["useruid"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (!is_string($currentUser)) {
        header("location: ../index.php?error=notlogged");
        exit();
    }

    createComment($conn, $comment, $currentUser, $postid);

} else {
    header("location: ../index.php");
    exit();
}