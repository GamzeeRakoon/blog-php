<?php
//include "../templates/Parsedown.php";
//echo $_GET["post"];
$query = "SELECT * FROM `posts`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

if ($result->num_rows > 0) 
{
    // OUTPUT DATA OF EACH ROW
    $exit = false;
    while($row = $result->fetch_assoc() and $exit == false)
    {
        $id = $row["postId"];
        $title = $row["postTitle"];
        $summary = $row["postSummary"];
        $date = $row["postDate"];
        $text = $row["postText"];


        if (isset($_GET["post"])) {
            $posting = $_GET["post"];
            if ($posting == $id) {
                blog($title, $text);
                $exit = true;
            }
        } else {
            posted($title, $summary, $date, $id);
        }
    }
}
