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
            <div class="button ml-2 mt-2 text-left">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add New Video
                </button>
            </div>
            <div class="blog">
                <div class="row">
                    <?php
                        $query = "SELECT * FROM videos";

                        $exec = mysqli_query($conn, $query);

                        while( $fetch = mysqli_fetch_array($exec) ) {
                            $date = date_create($fetch['u_date']);
                    ?>
                	<div class="col col-sm-3">
                    	<div class="card">
                          <iframe src="<?php echo $fetch['u_videourl']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $fetch['u_title']; ?></h5>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="process/video_process.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <input type="text" name="video" class="form-control" placeholder="Enter Video Embed URL">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" name="addvideo">Add Video</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
    include_once("footer.php");
    }
?>