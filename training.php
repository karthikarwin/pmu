<?php
  include_once('./header.php');
?>
    <section id="u_slider">
    	<div class="blog-header  headerr">
        	<div class="u_wrapper">
                <div class="breadcrump">
                    <h3>Training</h3>
                    <p><a href="index.php">Home</a> / Training</p>
                </div>
            </div>
        </div>
    </section>

    <section id="training">
        <div id="tr-ins">

        </div>

        <div id="tr-form">
            <div class="tr-form">
                <h2>FORM FOR COURSE ENQUIRY</h2>
                <p>
                    STUDENT
                    <button type="radio"></button>
                </p>
                <p>
                    WORKING PROFESSIONAL
                    <button type="radio"></button>
                </p>

                <form action="registration.php" method="post">
                    <input type="text" placeholder="NAME" name="name">
                    <input type="text" placeholder="COLLEGE NAME" name="clg_name">
                    <input type="text" placeholder="MAIL ID" name="mail">
                    <input type="text" placeholder="CONTACT NO" name="contact">
                    <select name="degree" id="deree">
                        <option value="1">B TECH</option>
                        <option value="2">ENGINEERING</option>
                        <option value="3">DEE</option>
                    </select>
                    <select name="know" id="know">
                        <option value="1">COLLEGE</option>
                        <option value="2">WEBSITE</option>
                        <option value="3">FRIEND</option>
                    </select>
                    <button type="submit">SEND</button>
                </form>
            </div>
        </div>
    </section>

    
<?php   
    include_once('./footer.php');
?>
