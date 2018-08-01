<?php
  include_once('./header.php');
?>
    <section id="u_slider">
    	<div class="blog-header  headerr">
            <div class="u_wrapper">
                <div class="breadcrump">
                    <h3>Contact Us</h3>
                    <p><a href="index.php">Home</a> / Contact Us</p>
                </div>
            </div>
        </div>
    </section>

    <div class="u_wrapper">
        <section id="page_title">
            <h2 class="conthead heading">We’re ready, Let’s talk.</h2>
            <p>Contact us to find out more or how we can help you better.</p>
        </section>

        <section id="formAddress">
            <div class="contForm">
                <form action="contact.php">
                    <div class="formrow">
                        <input id="name" name="name" type="text" required>
                        <label for="name">Your Name</label>
                    </div>
                    <div class="formrow">
                        <input id="email" name="email" type="email" required>
                        <label for="email">Email address</label>
                    </div>
                    <div class="formrow">
                        <input id="mobile" name="mobile" type="text" required>
                        <label for="mobile">mobile</label>
                    </div>
                    <div class="formrow">
                        <textarea id="message" name="message" rows="6" required></textarea>
                        <label for="message">Message</label>
                    </div>
                    <div class="formrow text-right">
                        <button class="u-btn">send</button>
                    </div>
                </form>
            </div>
            <div class="address">
                <div class="address1">
                    <div class="addressicon">
                        <img src="img/location.png" alt="Location">
                    </div>
                    <div class="addresspara">
                        <p>
                            No : 34/1 cross street,<br>
                            mudali stree, addambakkam<br>
                            chennai -600034.
                        </p>
                    </div>
                </div>
                <div class="address1">
                    <div class="addressicon">
                        <img src="img/contect.png" alt="Contact">
                    </div>
                    <div class="addresspara">
                        <p>
                            +91 98406 07659<br>
                            +91 73737 46111<br>
                            +91 044 58482821
                        </p>
                    </div>
                </div>
                <div class="address1">
                    <div class="addressicon">
                        <img src="img/mail.png" alt="Mail">
                    </div>
                    <div class="addresspara">
                        <p>
                            support@unikerz.org<br>
                            support@unikerz.org
                        </p>
                    </div>
                </div>
                <div class="soci-icons">
                    <h6>FOLLOW US</h6>
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
        </section>
    </div>
    
    <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6789726708885!2d80.19692541419023!3d12.992373117938962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52673bf96345bf%3A0x7fa3f00ecc3021c!2sUnikerz+technologies+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1531647945249" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <section id="pillars">
        <div class="u_wrapper">
            <h4 class="blog_title">
                the pillars of unikerz
            </h4>
            <p>When we first get to know you, we’ll immediately begin analyzing your website. We want to know everything we can about it.remsteren were fifdt paget to krenow tou,  todsng somerls krin </p>
        </div>
        <div class="logos">
            <div class="pillarlogo aac">
                <img src="img/pillar1.png" alt="">
            </div>
            <div class="pillarlogo math">
                <img src="img/pillar2.png" alt="">
            </div>
            <div class="pillarlogo vinayak">
                <img src="img/pillar3.png" alt="">
            </div>
        </div>
    </section>  
<?php
include_once('./footer.php');
?>