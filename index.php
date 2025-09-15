<!DOCTYPE html>
<html lang="en">
  <link rel="shortcut icon" href="public/discussfavicon.png" type="image/x-icon">

<head>
  <title>Discuss Project</title>
  <?php include('./client/commonFiles.php') ?>
</head>

<body>
  <?php
  session_start();
  include('./client/header.php');
  $isLoggedIn = isset($_SESSION['user']) && isset($_SESSION['user']['username']);
  // && !$_SESSION['user']['username']
  // && !$_SESSION['user']['username']
  if (isset($_GET['signup']) && !$isLoggedIn) {
    include('./client/signup.php');
  } else if (isset($_GET['login']) && !$isLoggedIn) {
    include('./client/login.php');
  } else if (isset($_GET['ask'])) {
    include('./client/ask.php');
  } else if (isset($_GET['q-id'])) {
    $qid = $_GET['q-id'];
    include('./client/questions-details.php');
  } else if (isset($_GET['c-id'])) {
    $cid = $_GET['c-id'];
    include('./client/questions.php');
  } else if (isset($_GET['u-id'])) {
    $uid = $_GET['u-id'];
    include('./client/questions.php');
  } else if (isset($_GET['latest'])) {
    include('./client/questions.php');
  }else if (isset($_GET['search'])) {
    $search = $_GET['search'];
    include('./client/questions.php');
  }else {
    include('./client/questions.php');
  }

  ?>


</body>

</html>