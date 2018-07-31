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
                Add New Post
                </button>
            </div>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="process/blog_process.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="body" rows="5" placeholder="Enter Content"></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="img" class="form-control" placeholder="Enter Title" accept="image/*">
            </div>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" name="addpost">Add Post</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
    include_once("footer.php");
    }
?>