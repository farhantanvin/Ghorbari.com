<?php
session_start();     //session destory here
session_destroy();
echo "<script>document.location='home.php';</script>";
?>
