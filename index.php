<?php
$home = true;
$index = true;
$signup = false;
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
