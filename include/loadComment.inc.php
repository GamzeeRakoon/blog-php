<?php
$postedId = $_GET["post"];


$numComments = fetchCommentAmount($conn, $postedId);

drawComments($numComments, $postedId);

$query = "SELECT * FROM comments WHERE postId = $postedId";

$result = $conn->query($query);

if ($result->num_rows > 0)
{
    // OUTPUT DATA OF EACH ROW
    $exit = false;
    while($row = $result->fetch_assoc() and $exit == false)
    {
        $id = $row["commentId"];
        $user = $row["commentUser"];
        $date = $row["commentDate"];
        $comment = $row["commentText"];

            loadComments($user, $date, $comment);
    }
} else {
    return $exit = true;
}