<?php 
    $signup = true;
    $index = true;
    require_once "../templates/header.php";
    
?>
    
    <section>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                </div>
                <div class="col signup-2">
                    <div class="signup rounded-4">
                        <form action="../include/signup.inc.php" method="post" class="container text-center text-white">
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
                                <button class="btn btn-primary  " type="submit" name="submit">Sign Up</button>
                            </div>
                        </form>

                        <?php 
                            if (isset($_GET["error"])) {
                                if ($_GET['error'] == "emptyinput") {
                                    echo "<p class='errorMessage text-center'>*Please fill in all fields!</p>";

                                } else if ($_GET["error"] == "invaliduid") {
                                    echo "<p class='errorMessage text-center'>*Username is already taken.</p>";
    
                                } else if ($_GET["error"] == "stmtfailed") {
                                    echo "<p class='errorMessage text-center'>*Connection failed please try again.</p>";
    
                                } else if ($_GET["error"] == "invalidemail") {
                                    echo "<p class='errorMessage text-center'>*Please use a valid email.</p>";

                                } else if ($_GET["error"] == "nomatch") {
                                    echo "<p class='errorMessage text-center'>*Passwords did not match, please try again.</p>";
    
                                } else if ($_GET["error"] == "usernametaken") {
                                    echo "<p class='errorMessage text-center'>*This username is already taken please choose diffrent one.</p>";
    
                                } else if ($_GET["error"] == "none") {
                                    echo "<p class='successMessage text-center'>*You have successfully signed up!</p>";
                                }
                            }
                        ?>
                        
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