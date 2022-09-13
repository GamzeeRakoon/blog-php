<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamzee's blog</title>

    <link rel="stylesheet" href="http://localhost/blog/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="body">
    <header class="nav-color py-3 fs-3">
        <nav class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-white custom-nav active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.nikirakoon.nl/index.html" class="nav-link text-white custom-nav">Portfolio</a>
                    </li>
                </ul>
                <div class="text-end">
                    <a href="http://localhost/blog/design/accounts/login.php" class="nav-link text-white custom-nav ">Login/Register</a>
                </div>
            </div>
        </nav>
    </header>
    
    <section>
        <div class="signup">
            <form action="http://localhost/blog/include/signup.inc.php" method="post" class="container text-center text-white">
                <h1>sign up</h1>
                <div class="col align-self-center pee">
                    <input class="" type="text" name="name" placeholder="Full Name" />
                </div>
                <div class="col align-self-center pee">
                    <input class="" type="text" name="email" placeholder="Email" />
                </div>
                <div class="col align-self-center pee">
                    <input class="" type="text" name="uid" placeholder="Username" />
                </div>
                <div class="col align-self-center pee">
                    <input class="" type="password" name="pwd" placeholder="Password" />
                </div>
                <div class="col align-self-center pee">
                    <input class="" type="password" name="pwdrepeat" placeholder="Repeat password" />
                </div>
                <div class="col align-self-center pee">
                    <button class="" type="submit" name="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </section>

    <?php 

    if (isset($_GET["error"])) {
        if ($_GET['error'] == "emptyinput") {
            echo "<p class='errorMessage text-center'>Please fill in all fields!</p>";

        } else if ($_GET["error"] == "invaliduid") {
            echo "<p class='errorMessage text-center'>Username is already taken.</p>";
        
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p class='errorMessage text-center'>Connection failed please try again.</p>";
        
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p class='errorMessage text-center'>Please use a valid email.</p>";

        } else if ($_GET["error"] == "nomatch") {
            echo "<p class='errorMessage text-center'>Passwords did not match, please try again.</p>";
        
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p class='errorMessage text-center'>This username is already taken please choose diffrent one.</p>";
        
        } else if ($_GET["error"] == "none") {
            echo "<p class='successMessage text-center'>You have successfully signed up!</p>";
        }
    }
    ?>

</body>
</html>