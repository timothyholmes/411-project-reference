<?php
  session_start();

  if(!isset($_SESSION['username'])){
    header('Location: login_mysql.php');
    exit;
  }
?>

<link rel="stylesheet" href="../style/global.css" type="text/css">

<div class="add-wrap">
  <p>You should only see this if you\'ve logged in</p>
</div>
