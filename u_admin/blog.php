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
    	<div class="container-fluid">
            <div class="blog">
                <div class="row">
                    <?php
                        $query = "SELECT * FROM posts";

                        $exec = mysqli_query($conn, $query);

                        while( $fetch = mysqli_fetch_array($exec) ) {
                            $date = date_create($fetch['u_date']);
                    ?>
                	<div class="col col-sm-3">
                    	<div class="card">
                          <img class="card-img-top" src="<?php echo $fetch['u_img']; ?>" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $fetch['u_title']; ?></h5>
                            <p class="card-text"><?php echo $fetch['u_description']; ?></p>
                            <p><i><?php echo date_format($date, 'd-m-Y'); ?></i></p>
                          </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>       
            </div>
        </div>
    </section>
</div>	

<?php
    include_once("footer.php");
    }
?>