<?php
include_once('./header.php');
?>
    <section id="u_slider">
    	<div class="slider home-slider">
        	<div class="site-heading">
                <h6>best industrial service provider</h6>
                <h2>industrial learnings</h2>
                <p>We provides always our best best industrial solution for our clients and always try to achieve our client’s trust and satisfaction.</p>
            </div>
        </div>
    </section>
    <section id="u_intro">
    	<div class="u_wrapper">
    	<div class="intro1">
        	<h2 class="heading">Get full range of<br>Premium Industrial<br>Services for your business</h2>
            <div class="intro1-1">
            	<div class="intro-1-img">
                	<img src="img/home2.png" alt="intro">
                </div>
                <div class="intro-1-para">
                	<p>The ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis em aperiam, eaque ipsa quae ab illo inventore </p>
                </div>
            </div>
            <div class="intro-2">
            	<p>The ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore
mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis,we he ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa e ab illo inventore veritatisqua</p>
            </div>
        </div>
        <div class="intro2">
        	<h2 class="heading">FEATURE EVENTS</h2>
            <div class="event">
            	<div class="event-img">
                	<img src="img/home1.png" alt="">
                </div>
                <div class="event-des">
                	<h4>LOREm ipsum dollar is emitta</h4>
                    <div class="author u-col">
                    	<i class="fas fa-user-circle"></i> Mathan
                    </div>
                    <div class="date u-col">
                    	<i class="far fa-calendar-alt"></i> June 26, 2018
                    </div>
                    <div class="event-para">
                    	<p>Amnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</p>
                    </div>
                    <div class="event-btn">
                    	<button class="u-btn">REGISTER HERE</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="u_parallax">
    	<div class="parallax">
        	<div class="parallax-in">
            	<p>The great aim of education is not knowledge, but action</p>
            </div>
        </div>
    </section>
    <section id="u_service">
    	<div class="u_wrapper">
    	<div class="services">
        	<div class="head">
            	<h2 class="heading">Our Service</h2>
                <p>The ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis, r sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae remsit voluptatem </p>
            </div>
            <div class="ser-sec">
            	<div class="ser ser1">
                	<div class="ser-in">
                    	<h3>Training</h3>
                        <img src="img/icon1.png" alt="">
                        <p>It’s a place engineers can rely on for Quality Training. We are committed to driving the right ...</p>
                        <button>Read More</button>
                    </div>
                </div>
                <div class="ser ser1">
                	<div class="ser-in">
                    	<h3>Other services</h3>
                        <img src="img/icon2.png" alt="">
                        <p>Presentation of theory is easy, but the development of a top performing professional is not. </p>
                        <button>Read More</button>
                    </div>
                </div>
                <div class="ser ser1">
                	<div class="ser-in">
                    	<h3>Seminars</h3>
                        <img src="img/icon3.png" alt="">
                        <p>Our participants come from wide range of engineering including Electrical, Electronics, </p>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="u_videos">
    	<div class="u_wrapper">
    	<div class="head">
            <h2 class="heading">Latest videos</h2>
            <p>The ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</p>
        </div>
        </div>
        <div class="videos">
                <?php
                    $query = "SELECT * FROM videos";

                    $exec = mysqli_query($conn, $query);

                    while( $fetch = mysqli_fetch_array($exec) ) {
                        $date = date_create($fetch['u_date']);
                ?>
                <div class="video">
                    <!-- <img src="img/vid1.png" alt=""> -->
                    <iframe width="100%" height="250px" src="<?php echo $fetch['u_videourl']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
            </div>
    </section>
<?php
include_once('./footer.php');
?>
