<?php
session_start();
    include 'assets/admin/config.php';
    $alert = NULL;
    $settings = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM settings WHERE id='1"));
    $ads = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM settings WHERE id='1"));        
?>
<?php
include "assets/php/header.php";
?>

        <!-- Banner Area -->
        <div class="cleaning-mini-banner">
            <div class="d-table">
                <div class="d-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Contact</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="index-2.html">home</a> / contact
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Area -->
        
        <!-- Start Main Content Area -->
        <section class="cleaning-content-block">
            <div class="container">
               <div class="row">
                   <div class="col-lg-4 col-md-5">
                       <div class="address-area">
                           <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>Phone</h3>
                                    <p>+324-5442-415</p>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h3>Address</h3>
                                    <p>2750 Quadra Street Victoria, Canada.</p>	
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h3>E-mail</h3>
                                    <p>support@milkwash.com</p>	
                                </li>
                                <li>
                                    <h3>Follow Us</h3>
                                    <ul class="contact-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>		
                            </ul>
                       </div>
                   </div>
                   <div class="col-lg-8 col-md-7">
                       <div class="contact-form-area">
                            <div class="contact-info text-center">
                               <h2>Lets Talk About The Project</h2>
                               <p>We are always ready to listen you first</p>
                            </div>
                            
                            <form id="contatc_form" method="POST" action="https://templates.envytheme.com/demo/milk-wash/assets/include/sendmail.php" name="myform">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="contact_name" placeholder="Name*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="contact_email" placeholder="E-mail*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="sub" id="contact_subject" placeholder="Subject*" required restrict="A-Z\a-z\0-9">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="contact_phone" placeholder="Phone*" required restrict="A-Z\a-z\0-9">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-18">
                                    <textarea name="message" id="contact_message" name="message" rows="6" placeholder="Message*" required restrict="A-Z\a-z\0-9"></textarea>
                                </div>

                                <div class="text-center">
                                    <div id="contact_send_status"></div>
                                    <input type="submit" class="sbmt-btn" value="Get in touch">
                                </div>
                            </form>
                       </div>
                   </div>
               </div>
            </div>
        </section>
        <!-- End Main Content Area -->
        
        <!-- Google Map Area -->
        <div id="map"></div>
        <!-- Google Map Area -->
        
        <!-- Start scroll to top feature -->
        <a href="#" id="back-to-top" title="Back to Top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        <!-- End scroll to top feature -->
    
<?php
include "assets/php/footer.php";
?>
