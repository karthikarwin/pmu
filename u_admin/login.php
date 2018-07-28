<?php
session_start();
	include_once("header.php");
?>

<div class="login-main">
    <div class="login-form">
    	<form action="process/login_process.php" method="post">
          <div class="error">
            <?php
              if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                session_unset();
              }
            ?>
          </div>
          <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" placeholder="Enter Username" name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>
          <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>	

<?php
	include_once("footer.php");
?>