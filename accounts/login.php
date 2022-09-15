<?php 
    $signup = true;
    $index = true;
    require_once "../templates/header.php"
?>    
    <section>
    <div class="container text-center text-white">
        <div class="row">
            <div class="col">
            </div>
            <div class="col login-2">
                <div class="login rounded-4">
                    <form action="../include/login.inc.php" method="post" class="container text-center text-white" >
                        <h1>Login</h1>
                        <div class="col align-self-center pee">
                            <input class="" type="text" name="uid" placeholder="Username/Email" />
                        </div>
                        <div class="col align-self-center pee">
                            <input class="" type="password" name="pwd" placeholder="Password" />
                        </div>
                        <div class="col align-self-center pee">
                            <button class="btn btn-primary" type="submit" name="submit">Login</button>
                        </div>
                    </form>
                    <div class="container text-center text-white" >
                        <div class="col align-self-center">
                            <a  href="signup.php">
                                <button class="btn btn-primary testes">Sign Up</button>
                            </a>
                        </div>

                        <?php 

                            if (isset($_GET["error"])) {
                                if ($_GET['error'] == "emptyinput") {
                                    echo "<p class='errorMessage text-center pee'>*Please fill in all fields!</p>";

                                } else if ($_GET["error"] == "wronglogin") {
                                    echo "<p class='errorMessage text-center pee'>*Incorrect login information.</p>";
    
                                } else if ($_GET["error"] == "none") {
                                    echo "<p class='successMessage pee text-center'>*You have successfully signed up!</p>";
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    </section>

<?php 
require "../templates/footer.php"
?>