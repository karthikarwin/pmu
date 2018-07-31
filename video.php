<?php
  include_once('./header.php');
?>
    <section id="u_slider">
    	<div class="blog-header  headerr">
            <div class="u_wrapper">
                <div class="breadcrump">
                    <h3>Training Videos</h3>
                    <p><a href="index.php">Home</a> / Training Videos</p>
                </div>
            </div>
        </div>
    </section>

    <div class="u_wrapper">
        <section id="page_title">
            <h2 class="heading">OUR VIDEOS</h2>
            <p>Our posts will be displayed here</p>
        </section>

        <section id="video_main">
            <div class="videos">
                <?php
                    $query = "SELECT * FROM videos";

                    $exec = mysqli_query($conn, $query);

                    while( $fetch = mysqli_fetch_array($exec) ) {
                        $date = date_create($fetch['u_date']);
                ?>
                <div class="video">
                    <!-- <img src="img/vid1.png" alt=""> -->
                    <iframe width="360" height="290" src="<?php echo $fetch['u_videourl']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <div class="layer">
                        <!-- <div class="play">
                            <img src="img/play.png" alt="">
                            <p>Watch Now</p>
                        </div> -->
                        <div class="vid-det">
                            <h5><?php echo $fetch['u_title']; ?></h5>
                            <span><?php echo date_format($date, 'M d, Y'); ?></span>
                        </div>
                    </div>
                </div>
                    <?php
                        }
                    ?>
                <!-- <div class="video">
                    <img src="img/vid2.png" alt="">
                    <div class="layer">
                        <div class="play">
                            <img src="img/play.png" alt="">
                            <p>Watch Now</p>
                        </div>
                        <div class="vid-det">
                            <h5>LATEST EPISODE</h5>
                            <span>March 18, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="video">
                    <img src="img/vid3.png" alt="">
                    <div class="layer">
                        <div class="play">
                            <img src="img/play.png" alt="">
                            <p>Watch Now</p>
                        </div>
                        <div class="vid-det">
                            <h5>LATEST EPISODE</h5>
                            <span>March 18, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="video">
                    <img src="img/vid1.png" alt="">
                    <div class="layer">
                        <div class="play">
                            <img src="img/play.png" alt="">
                            <p>Watch Now</p>
                        </div>
                        <div class="vid-det">
                            <h5>LATEST EPISODE</h5>
                            <span>March 18, 2018</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>

        <section id="video_side">
            <div class="video_side_in">
                <div class="search side_bar_sec">
                    <h3 class="blog_title">
                        search
                    </h3>
                    <input type="search" class="input">
                </div>

                <div class="archieves side_bar_sec">
                    <h3 class="blog_title">
                        archieves
                    </h3>
                    <ul class="archieve_list">
                        <li class="archieve_list_item">
                            2017
                        </li>
                        <li class="archieve_list_item">
                            2018
                        </li>
                    </ul>
                </div>

                <div class="recent_posts side_bar_sec">
                    <h3 class="blog_title">
                        recent posts
                    </h3>
                    <div class="blog">
                        <div class="blog-img">
                            <img src="img/vid1.png" alt="title">
                        </div>
                        <div class="blog-des">
                            <p>The ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                            <span>19 FEB, 2018</span>
                        </div>
                    </div>
                    <div class="blog">
                        <div class="blog-img">
                            <img src="img/vid1.png" alt="title">
                        </div>
                        <div class="blog-des">
                            <p>The ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                            <span>19 FEB, 2018</span>
                        </div>
                    </div>
                    <div class="blog">
                        <div class="blog-img">
                            <img src="img/vid1.png" alt="title">
                        </div>
                        <div class="blog-des">
                            <p>The ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                            <span>19 FEB, 2018</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="u_wrapper">
    	<div class="footer">
        	<div class="foot foot1">
            	<div class="foot-in">
                	<div class="foot-logo">
                        <img src="img/logo.png" alt="logo">
                    </div>
                    <p>The ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</p>
                </div>
            </div>
            <div class="foot foot2">
            	<div class="foot-in">
                    <h3>Navigation</h3>
                    <ul class="foot-menu">
                        <li>Home</li>
                        <li>About</li>
                        <li>Services</li>
                        <li>Projects</li>
                        <li>Pages</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
            <div class="foot foot3">
            	<div class="foot-in">
                    <h3>Recent Posts</h3>
                    <div class="blog">
                        <div class="blog-img">
                            <img src="img/vid1.png" alt="title">
                        </div>
                        <div class="blog-des">
                            <p>The ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                            <span>19 FEB, 2018</span>
                        </div>
                    </div>
                    <div class="blog">
                        <div class="blog-img">
                            <img src="img/vid1.png" alt="title">
                        </div>
                        <div class="blog-des">
                            <p>The ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                            <span>19 FEB, 2018</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot foot4">
            	<div class="foot-in">
                    <h3>Subscription</h3>
                    <p>Enter your email address to subscribe our weekly newsletter</p>
                    <input type="email">
                    <i class="fas fa-paper-plane"></i>
                    <div class="foot-soc-icons">
                        <ul class="soc_icons">
                            <li class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                            <li class="icon">
                                <i class="fab fa-twitter"></i>
                            </li>
                            <li class="icon">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                            <li class="icon">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                            <li class="icon">
                                <i class="fab fa-instagram"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
</body>
</html>