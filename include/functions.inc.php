<?php
ini_set('error_reporting', E_ALL);
ini_set( 'display_errors', 1 );

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result = null;
    
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
} 

function invalidUid($username) {
    $result = null;
    
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
} 

function invalidEmail($email) {
    $result = null;
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
} 

function pwdMatch($pwd, $pwdRepeat) {
    $result = null;
    
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
} 

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM `users` WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../design/accounts/signup.php?error=stmtfailed");
        exit();  
    } 

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO `users` (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../design/accounts/signup.php?error=stmtfailed");
        exit();  
    } 

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../accounts/login.php?error=none");
    exit(); 
}

function emptyInputLogin($username, $pwd) {
    $result = null;
    
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
} 

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../accounts/login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../accounts/login.php?error=nomatch");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["useremail"] = $uidExists["usersEmail"];
        header("location: ../index.php");
        exit();
    }
}

function createPost($title, $post, $summary, $conn) {
        $date = date("Y/m/d");
        $sql = "INSERT INTO `posts` (postTitle, postText, postSummary, postDate) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../design/accounts/signup.php?error=stmtfailed");
            exit();  
        } 
    
        mysqli_stmt_bind_param($stmt, "ssss", $title, $post, $summary, $date);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../posts/creation.php?error=none");
        exit(); 
}

function posted($title, $summary, $date, $id) {
    echo 
    "
        <div>
            <a class='post-block' href='index.php?post=$id'>
                <div class='text-start blog-post rounded-4 text-white'>
                    <h1 class='post-title'>$title</h1>
                    <p>$date</p>
                    <p class='fs-4'>$summary</p>
                </div>
            </a>    
        </div>
    ";
}

function blog($title, $text1) {
     echo
        "    <div>
                <h1  class='p blog-title'>$title</h1>
                <p class='text-white text-start blog-text'>".nl2br($text1)."</p>
            </div>
        ";
}

function fetchCommentAmount($conn, $postedId) {
    $sql = $conn->query("SELECT commentId FROM comments WHERE postId = $postedId");
    $numComments = $sql->num_rows;
    return $numComments;
}

function createComment($conn, $comment, $currentUser, $postId) {
    $date = date("Y/m/d");
    $sql = "INSERT INTO `comments` (commentUser, commentDate, commentText, postId) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=fail");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssss", $currentUser, $date, $comment, $postId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?post=$postId");
    exit();
}

function loadComments($user, $date, $comment) {
    echo
    "
            <div class='comments'>
                <div class='user'>$user <span class='time'>$date</span></div>
                <div class='userComment'>$comment</div>
            </div>
    
    ";
}

function drawComments($numComments, $postedId) {

    echo
    "
                            <div class='text-start margin-replies'>
                                <div>
                                    <form action='./include/comment.inc.php' method='post'>
                                        <textarea name='comment' class='form-control input-text' placeholder='comment' rows='4' cols='10'></textarea>
                                        <input type='hidden' name='post' value='$postedId'>
                                        <button class='btn-primary btn' name='submit' type='submit'>add Comment</button>
                                    </form>
                                </div>
                                <div class='userComments text-start'>
                                    <h1 class='text-white'><b>$numComments Comments</b></h1>
                                
    ";
}

//function fetchAllComments()
//{
//    $sql = $conn->query("SELECT name, comment, comments.createdON FROM comments INNER JOIN users ON comments.userID = users.id");
//    s
//}

