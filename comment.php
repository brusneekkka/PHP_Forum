<?php
$db = mysqli_connect ("localhost","root","root","forum");

if(isset($_GET['comment']))
{
    if(isset($_GET['com']))
    {
        $post_id = $_GET['com'];
        $comment = $_GET['comment'];
        $id = 0;
        $sql = mysqli_query($db, "INSERT INTO forum_comments (id, post_id, mess, time) VALUES ('$id', '$post_id', '$comment', NOW())");
    }
}
header('Location: index.php');
exit();
?>