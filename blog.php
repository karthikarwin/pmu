<?php
  session_start();
  include_once('u_admin/process/db.php');
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
<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<title>UnikerZ</title>
<link rel="stylesheet" href="css/unikerz.css">
</head>

<body>
	<header>
        <div class="header1">
            <div class="u_wrapper">
                <div class="u_header_left">
                  <p>Turning big ideas into great products</p>
                  <p><i class="fas fa-envelope"></i> unikerz@gmail.com</p>
                    <p><i class="fas fa-phone"></i> +91 7200 214 742</p>
                </div>
                <div class="u_header_right">
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
        <div class="header2">
            <div class="u_wrapper">
            	<div class="logo">
                	<img src="img/logo.png" alt="UnikerZ">
                </div>
            </div>
        </div>
        <div class="header3">
        	<div class="u_wrapper">
            	<div class="u_main_menu">
                	<ul class="main-menu">
                    	<li class="menu-item">
                        	<a href="index.php">HOME</a>	
                        </li>
                        <li class="menu-item">
                        	<a href="about.php">about us</a>	
                        </li>
                        <li class="menu-item">
                        	<a href="training.php">training</a>	
                        </li>
                        <li class="menu-item">
                        	<a href="index.php">other services</a>	
                        </li>
                        <li class="menu-item">
                        	<a href="blog.php">blog</a>	
                        </li>
                        <li class="menu-item">
                        	<a href="index.php">events & gallery</a>	
                        </li>
                        <li class="menu-item">
                        	<a href="video.php">training videos</a>	
                        </li>
                        <li class="menu-item">
                        	<a href="contact.php">contact us</a>	
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
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
            <h2 class="heading">WELCOME TO OUR BLOG</h2>
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
                        <a href="#" class="link">Read More >>> </a>
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