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
        <div class="u_wrapper">
            <div id="tr-ins">
                <button class="tabb">FRESHER</button>
                <button class="tabb">PROFESSIONAL</button>

                <div class="fresher">
                    <ol>
                        <li>Basic Science & Engineering used in industries</li>
                        <li>Tools used in INDUSTRIAL AUTOMAMTION</li>
                            <ul>
                                <li>PLC</li>
                                <li>SCADA</li>
                                <li>HMI</li>
                                <li>MCC/PLC/Control Panel design</li>
                            </ul>
                        <li>Field Instrumentation</li>
                            <ul>
                                <li>Selection</li>
                                <li>Calibration</li>
                                <li>Scaling</li>
                                <li>Mounting</li>
                            </ul>
                    </ol>

                    <div class="method">
                        <h2>2. TEACHING METHODOLOGY</h2>
                        <p>We designed the course based on the research conducted by us in Industries, what employers expect from Engineers. Our staffs are well experienced in Projects & Maintenance in Engineering Industries for two decades. So students not only get to know in INDUSTRIAL AUTOMATION but also they get knowledge of experience. Our course are findly blended with perfect theory & practical where we not only teach programming but also we explain engineering principle that are explained in a virtual practical. 
                        Our specialties are, We will not restrict students to the quantities of PLC based on the fees & all our PLC’s are upto the current trend where students do not feel that this is only our course but also they feel it as a job experience. Also we tied up with Industrial Automation Solution Providers in the market where our student will get the working experience by involving in their projects.</p>
                    </div>

                    <div class="detailed">
                        <h2>DETAILED SYLLABUS</h2>
                        <p>BASIC ELECTRICALS</p>
                        <ol>
                            <li>CURRENT</li>
                            <li>VOLTAGE</li>
                            <li>POWER</li>
                            <li>POWER FACTOR</li>
                            <li>PHASE DIFFERENCE</li>
                        </ol>
                        <p>LOAD</p>
                        <ol>
                            <li>RESISTOR</li>
                            <li>CAPACITOR</li>
                        </ol>
                        <p>LAB</p>
                        <ul>
                            <li>MULTIMETER MEASUREMENT</li>
                            <li>CONNECTION OF SIMPLE CIRCUITS</li>
                            <li>MEASUREMENT OF CURRENT THROUGH AMMETER</li>
                        </ul>

                        <p>OBJECTIVE</p>
                        <ul>
                            <li>Understanding the basics of electrical</li>
                            <li>Understanding the types of electrical loads</li>
                            <li>Understanding the energy consumption in industries</li>
                        </ul>

                        <h2>MACHINES</h2>
                        <ul>
                            <li>STATIC</li>
                            <li>DYNAMIC</li>
                        </ul>

                        <ol>
                            <li>TRANSFORMER</li>
                                <ul>
                                    <li>WORKING PRINCIPLE</li>
                                    <li>STEP UP & DOWN</li>
                                    <li>KVAR</li>
                                    <li>ISOLATION TRANSFORMER CT</li>
                                </ul>
                            <li>GENERATOR</li>
                                <ul>
                                    <li>PRINCIPLE</li>
                                    <li>FARADAY'S LAW</li>
                                    <li>GENERATION AND TRANSMISSION</li>
                                    <li>AC CURRENT</li>
                                    <li>DC CURRENT</li>
                                </ul>
                            <li>MOTOR</li>
                                <ul>
                                    <li>PRINCIPLE OF MOTOR</li>
                                    <li>WORKING OF MOTOR</li>
                                    <li>TYPES OF MOTOR</li>
                                    <li>INDUCTION MOTOR SYNCHRONOUS MOTOR</li>
                                    <li>DC CURRENT</li>
                                </ul>
                        </ol>
                    </div>
                </div>
            </div>

            <div id="tr-form">
                <div class="tr-form">
                    <h2 class="text-center">FORM FOR COURSE ENQUIRY</h2>
                    <p class="btn_who">
                        <label for="student">STUDENT</label>
                        <input type="radio" name="occupation" id="student">
                    </p>
                    <p class="btn_who">
                        <label for="professional">WORKING PROFESSIONAL</label>
                        <input type="radio" name="occupation" id="professional">
                    </p>

                    <form action="registration.php" method="post" id="register-form">
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
                        <div class="btnn">
                            <button class="submit" type="submit">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
<?php   
    include_once('./footer.php');
?>
