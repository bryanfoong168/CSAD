<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'database');
if (!$db) {
    die("Connection failed: ".mysqli_connect_error());
}

$video_id = "";
$likes = 0;
$comments = "";
$id = 0;
$update = false;

if (isset($_POST['save'])) {
    $video_id = $_POST['name'];
    $likes = $_POST['rate'];
    $comments = $_POST['comments'];
    $sql = "INSERT INTO videos (video_id, likes, comments) VALUES ('$video_id', '$likes', '$comments')";
    if (mysqli_query($db, $sql)) {
        $_SESSION['message'] = "Address Saved";
    } else {
        $_SESSION['message'] = "Address Save Failed!";
    }
    header("Location: videoGallery.php");
    exit();
}
if (isset($_GET['avg'])) {
    $video_id = $_POST['name'];
    $avg = mysqli_query($db, "SELECT ROUND(AVG(likes) ,0) AS 'Rounded Avg.' FROM videos WHERE video_id = 'Pzv_lUp3iOQ'");
    echo $avg;
}