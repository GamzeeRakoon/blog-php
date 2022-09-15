<?php
$home = false;
$signup = true;
require "../templates/header.php";
?>

    <section>
        <div class="container text-center center-profile">
            <div class="row profile-insides rounded-4">
                <div class="col">
                </div>
                <div class="col">
                    <ul class="row align-items-center list-user" style="height: 350px;">
                        <li >
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                                <input type="text" class="form-control" placeholder="<?php echo $_SESSION["useruid"];?>"aria-describedby="inputGroup-sizing-default" readonly>
                            </div>
                        </li>
                        <li>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                                <input type="text" class="form-control" placeholder="<?php echo $_SESSION["useremail"];?>"aria-describedby="inputGroup-sizing-default" readonly>
                            </div>
                        </li>
                        <li>
                        <a href="../include/logout.inc.php">
                            <button class="btn btn-primary testes">Logout</button>
                        </a> 
                        </li>
                    </ul>   
                </div>
                <div class="col picture-down">
                    <div class="card" style="width: 18rem;">
                            <img src="../img/white image.png" class="card-img-top" alt="...">
                    </div class="pee">
                        <a >
                            <button class="btn btn-primary testes">upload</button>
                        </a> 
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </section>





<!-- <div class="container text-center position-absolute top-50 start-50 translate-middle">
  <div class="row">
    <div class="col-2">
    </div>
    <div class="col-8 text-white profile-insides rounded-4 text-start input-group">
        <div class="col">
            <ul class="list-user position-absolute top-50 start-0 translate-middle-y size">
                <li >
                    <span class="input-group-text" id="inputGroup-sizing-lg">Username</span>
                    <input class="" type="text" name="name" placeholder="Full Name" readonly/>
                </li>
                <li>
                <br>
                </li>
                <li>
                    <span class="input-group-text" id="inputGroup-sizing-lg">Email</span>
                    <input class="" type="text" name="name" placeholder="Full Name" readonly/>
                </li>
            </ul>   
        </div>
        <div class="col">
            <div class="pfp-icon">
                
            </div>
        </div>
    </div>
    <div class="col-2">
    </div>
  </div>
</div> -->

<?php 
require_once "../templates/header.php";
?>