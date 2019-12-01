<?php
session_start();
include '../data/home_data_access.php';




delete_post_by_postID($_GET['id']);

echo "<script>document.location='delete_post.php';</script>";






?>