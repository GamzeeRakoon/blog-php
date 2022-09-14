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
            <div class="col">
                <div>
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
                        <div class="col align-self-center pee">
                            <a  href="signup.php">
                                <button class="btn btn-primary">Sign Up</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>


        <!-- <div>
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
            <div class="col align-self-center pee">
                <a  href="signup.php">
                    <button class="btn btn-primary">Sign Up</button>
                </a>
            </div>
            </div>
        </div> -->
    </section>

    <?php 

if (isset($_GET["error"])) {
    if ($_GET['error'] == "emptyinput") {
        echo "<p class='errorMessage text-center'>Please fill in all fields!</p>";

    } else if ($_GET["error"] == "wronglogin") {
        echo "<p class='errorMessage text-center'>Incorrect login information.</p>";
    
    }
}
?>

<?php 
require "../templates/footer.php"
?>