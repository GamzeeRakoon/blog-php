<?php
//ini_set('error_reporting', E_ALL);
//ini_set( 'display_errors', 1 );
$home = true;
$index = true;
$signup = false;
$posts = null;
//include "../templates/Parsedown.php";
require "./templates/header.php";
require "./include/dbh.inc.php";
require "./include/functions.inc.php";


?>

<section>
    <main>
        <div class="container text-center">
            <div class="row">
                <div class="col">

                </div>
                <div class="col-7 signup-2">
                    <?php
                        require "./templates/templatePost.php";

                        if (isset($_GET["post"])) {
                            include "./include/loadComment.inc.php";
                            echo
                            "    
                                </div>
                            </div>
                            ";
                        }
                    ?>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </main>
</section>

<?php
require "./templates/footer.php";
