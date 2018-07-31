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
            <div class="contact-form">
              <div class="responsee">
                <?php
                if (isset($_SESSION['success'])) {
                  echo "<span class='alert alert-success'>".$_SESSION['success']."</span";
                  unset($_SESSION['success']);
                } elseif(isset($_SESSION['error'])) {
                  echo "<span class='alert alert-danger'>".$_SESSION['error']."</span";
                  unset($_SESSION['error']);
                }
                ?>
              </div>
            <?php
                $query = "SELECT * FROM contact";

                $exec = mysqli_query($conn, $query);

                while( $fetch = mysqli_fetch_array($exec) ) {
            ?>
              <form action="process/contact_process.php" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile #1 :</label>
                    <input type="text" name="mobile1" value="<?php echo $fetch['u_mob1']; ?>" class="form-control" placeholder="Mobile #1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile #2 :</label>
                    <input type="text" name="mobile2" value="<?php echo $fetch['u_mob2']; ?>" class="form-control" placeholder="Mobile #2">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">LandLine #1</label>
                      <input type="text" name="ll1" value="<?php echo $fetch['u_ll1']; ?>" class="form-control" placeholder="Landlines #1">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Landline #2</label>
                      <input type="text" name="ll2" value="<?php echo $fetch['u_ll2']; ?>" class="form-control" placeholder="Landline #2">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Email #1</label>
                      <input type="text" name="email1" value="<?php echo $fetch['u_email1']; ?>" class="form-control" placeholder="Email #1">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Email #2</label>
                      <input type="text" name="email2" value="<?php echo $fetch['u_email2']; ?>" class="form-control" placeholder="Email #2">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <textarea class="form-control" name="address" rows="3" placeholder="Address"><?php echo $fetch['u_address']; ?></textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Facebook :</label>
                      <input type="text" name="fb" value="<?php echo $fetch['u_fb']; ?>" class="form-control" placeholder="Facebook">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Twitter</label>
                      <input type="text" name="tw" value="<?php echo $fetch['u_tw']; ?>" class="form-control" placeholder="Twitter">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Linked In</label>
                      <input type="text" name="linked" value="<?php echo $fetch['u_li']; ?>" class="form-control" placeholder="Linked In">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Google Plus</label>
                      <input type="text" name="gp" value="<?php echo $fetch['u_gp']; ?>" class="form-control" placeholder="Google Plus">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Instagram</label>
                      <input type="text" name="insta" value="<?php echo $fetch['u_ins']; ?>" class="form-control" placeholder="Instagram">
                  </div>
                  <button type="submit" class="btn btn-primary" name="update">Update</button>
              </form>
              <?php
              }
              ?>
            </div>
        </div>
    </section>
</div>	

<?php
    include_once("footer.php");
    }
?>