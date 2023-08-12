<?php 
 session_start();
 session_destroy();
 echo "<script>alert('You successfully sign out');window.location.href='index.php';</script>";

 ?>