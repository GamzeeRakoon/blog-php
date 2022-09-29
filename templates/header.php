<?php 
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamzee's blog</title>

    <link rel="stylesheet" href="http://localhost/blog-php/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="body">
    <header class="nav-color py-3 fs-3">
        <nav class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li class="nav-item">
                        <?php 
                            if (($signup === true || $index === true) && $home === true) {
                                echo "<a href='./index.php' class='nav-link text-white active custom-nav'>Home</a>";
                            } else if ($signup === true || $index === true) {
                                echo "<a href='../index.php' class='nav-link text-white custom-nav'>Home</a>";
                            } else if ($posts === true){
                                echo "<a href='index.php' class='nav-link text-white custom-nav'>Home</a>";
                            } else {
                                echo "<a href='index.php' class='nav-link text-white active custom-nav'>Home</a>";
                            } 
                        ?>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.nikirakoon.nl/index.html" class="nav-link text-white custom-nav">Portfolio</a>
                    </li>
                </ul>
                <div class="text-end">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li class="nav-item">
                        <?php 
                            if ($signup === true && isset($_SESSION["useruid"])) {
                                echo "<a href='user.php' class='nav-link text-white active custom-nav '>Account</a>";
                            } else if ($signup === true) {
                                echo "<a href='login.php' class='nav-link text-white custom-nav active'>Login/Register</a>";
                            } else if ($index === true && $home === true && isset($_SESSION["useruid"])) {
                                echo "<a href='./accounts/user.php' class='nav-link text-white custom-nav'>Account</a>"; 
                            } else if ($index === true && isset($_SESSION["useruid"])) {
                                echo "<a href='../accounts/user.php' class='nav-link text-white custom-nav'>Account</a>";
                            } else {
                                echo "<a href='./accounts/login.php' class='nav-link text-white custom-nav'>Login/Register</a>";
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php
                                if ($posts === true && $_SESSION["userid"] === 1) {
                                    echo "<a href='creation.php' class='nav-link text-white active custom-nav '>Post</a>";
                                } else if ($_SESSION["userid"] === 1 && $signup === true) {
                                    echo "<a href='../posts/creation.php' class='nav-link text-white custom-nav '>Post</a>";
                                } else if ($_SESSION["userid"] === 1) {
                                    echo "<a href='./posts/creation.php' class='nav-link text-white custom-nav '>Post</a>";
                                } 
                            ?>
                        </li>
                    </ul>


                </div>
            </div>

        </nav>
    </header>
