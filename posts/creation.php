<?php
$posts = true;
$index = true;
require "../templates/header.php";
include '../templates/Parsedown.php';
?>


<div class="col signup-2">
                    <div class="">
                        <form action="../include/post.inc.php" method="post" class="container text-center text-white">
                            <div class="col align-self-center pee">
                                <input class="" type="text" name="title" placeholder="Post Name" />
                            </div>
                            <div class="col align-self-center pee">
                                <textarea class="post-area" name="post" cols="50" rows="20"></textarea>
                            </div>
                            <div class="col align-self-center pee">
                                <button class="btn btn-primary  " type="submit" name="submit">Post</button>
                            </div>
                        </form>

                        <?php
                        $Parsedwon = new Parsedown();
                        
                        echo $Parsedwon->line('hello _parsedown_!')

                        ?>

<?php 
require "../templates/footer.php";
?>