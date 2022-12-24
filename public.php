<?php
$db = mysqli_connect ("localhost","root","root","forum");

if(empty($_POST))
{
    header('Location: index.php');
    exit();
}

$result = $_POST['note'];
if(empty($result) or $result == null)
{
    header('Location: index.php?msg=Поле должно быть заполнено');
    exit();
}

$result2 = mysqli_query ($db,"INSERT INTO `forum_posts`(`mess`, `likes`, `dislikes`, `time`) VALUES ('$result','0', '0',NOW())");

header('Location: index.php');
exit();
?>