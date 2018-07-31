<?php
// session_start();
include_once("process/db.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<title>UnikerZ Admin</title>
<link rel="stylesheet" href="css/unikerz.css">
</head>

<body>
	<header>
    	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="#">Unikerz Admin</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="form-inline logout" id="navbarNavDropdown">
          <?php
            if(isset($_SESSION['user'])) {
              echo '<button class="btn btn-outline-light"><a href="logout.php">Logout</a></button>';
            }
          ?>
          </div>
        </nav>
    </header>
