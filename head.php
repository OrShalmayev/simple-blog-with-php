<?php
require('./connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo WEBSITE_NAME ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
        <!-- Custom styles for this template -->
        <link href="<?php echo URLROOT; ?>cover.css" rel="stylesheet">
</head>
<body>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <!-- NAVBAR -->
    <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand"><?php echo WEBSITE_NAME; ?></h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link <?php echo $_SESSION['current_page']=='home' ? 'active': '' ?>" href="<?php echo URLROOT; ?>">Home</a>
        <!-- if not logged in -->
        <?php if(isLoggedIn() == false): ?>
            <a class="nav-link <?php echo $_SESSION['current_page']=='login' ? 'active': '' ?>" href="<?php echo URLROOT; ?>login.php">Login</a>
        <?php else: ?>
            <a class="nav-link" href="<?php echo URLROOT; ?>logout.php">Logout</a>
        <?php endif; ?>
      </nav>
    </div>
  </header>

  <?php include('./messages.php'); ?>
