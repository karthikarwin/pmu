<?php
session_start();
    if(!isset( $_SESSION['user'] )) {
        header('Location: ./login.php');
        exit;
    } else {
        include_once('process/db.php');
	    include_once("header.php");
?>

<div class="main">
    <section id="recent-posts">
        <?php include_once('recent_posts.php'); ?>
    </section>
    
    <section id="menu">
        <?php include_once('menu.php'); ?>
    </section>
    
    <section id="main">
    	<div class="welcome">
            <h1>Welcome to Admin Panel</h1>
            <h3>UNIKERZ</h3>        
        </div>
    </section>
</div>	

<?php
    include_once("footer.php");
    }
?>