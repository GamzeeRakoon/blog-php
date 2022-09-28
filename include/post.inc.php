<?php

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $post = $_POST["post"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    createPost($title, $post, $conn, $stmt);
}
