<?php
$index = true;
$signup = true;
require "../templates/header.php";
?>

<div class="container text-center position-absolute top-50 start-50 translate-middle">
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
</div>

<?php 
require_once "../templates/header.php";
?>