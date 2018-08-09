<?php
  include_once('./header.php');
?>
<section id="u_slider">
    <div class="blog-header  headerr">
        <div class="u_wrapper">
            <div class="breadcrump">
                <h3>Blog</h3>
                <p><a href="index.php">Home</a> / Blog</p>
            </div>
        </div>
    </div>
</section>

<div class="u_wrapper">
    <section id="page_title">
        <h2 class="heading">UPCOMING EVENTS</h2>
        <p>Our posts will be displayed here</p>
    </section>

    <section id="blog_main">
        <div class="blog_in">
            <?php
                $query = "SELECT * FROM posts";

                $exec = mysqli_query($conn, $query);
                while( $fetch = mysqli_fetch_array($exec) ) {
                    $date = date_create($fetch['u_date']);
            ?>
            <div class="blog_card">
                <div class="blog_img">
                    <img src="u_admin/<?php echo $fetch['u_img']; ?>" alt="blog">
                    <div class="date">
                        <h6><?php echo date_format($date, 'd'); ?></h6>
                        <p style="text-transform: uppercase;"><?php echo date_format($date, 'M'); ?></p>
                    </div>
                </div>
                <div class="blog_des">
                    <h4 class="blog_title"><?php echo $fetch['u_title']; ?></h4>
                    <p class="blog_des_p"><?php echo $fetch['u_description']; ?></p>
                    
                    <div class="event-btn">
                        <button class="u-btn">REGISTER HERE</button>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
            <div class="view_more">
                <button class="view_more_btn">VIEW MORE</button>
            </div>
        </div>
    </section>

    <section id="blog_side">
        <div class="blog_side_in">
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

    <section id="completed-events">
        <section id="page_title">
            <h2 class="heading">UPCOMING EVENTS</h2>
            <p>Our posts will be displayed here</p>
        </section>
        <div class="row">
            <div class="col col-sm-4">
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
                            <button class="u-btn">VIEW MORE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-4">
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
                            <button class="u-btn">VIEW MORE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-4">
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
                            <button class="u-btn">VIEW MORE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-sm-4">
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
                            <button class="u-btn">VIEW MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include_once('./footer.php');
?>