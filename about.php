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
                                <h2>About</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="index-2.php">home</a> / about
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Area -->
        
        <!-- Start Working Info Area -->
        <div class="working-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-working-info wow fadeInUp">
                            <i class="fa fa-clock-o"></i>
                            <h3>Opening Hours</h3>
                            <p>Monday - Friday <br /> <span>08.00 am - 10.00 pm</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-working-info wow fadeInUp" data-wow-delay="0.4s">
                            <i class="fa fa-phone"></i>
                            <h3>Any Questions?</h3>
                            <p>Call Us Now <br /> <span>+324-5442-415</span></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="single-working-info wow fadeInUp" data-wow-delay="0.8s">
                            <i class="fa fa-home"></i>
                            <h3>Visit Us</h3>
                            <p>Need Cleaning <br /> <span>210-2750 Quadra Street Victoria, Canada</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Working Info Area -->
        
        <!-- Start About Us Area -->
        <section class="cleaning-content-block about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="who-we-info">
                            <div class="single-info">
                                <i class="fa fa-users"></i>
                                <h4>Professional Staffs</h4>
                                <p>Lorem ipsum dolor sit amet, esse aliquid liberavisse eos ea.</p>
                            </div>
                   
                            <div class="single-info">
                                <i class="fa fa-bath"></i>
                                <h4>First Class Service</h4>
                                <p>Lorem ipsum dolor sit amet, esse aliquid liberavisse eos ea.</p>
                            </div>
                    
                            <div class="single-info">
                                <i class="fa fa-shield"></i>
                                <h4>Verified and Secure</h4>
                                <p>Lorem ipsum dolor sit amet, esse aliquid liberavisse eos ea.</p>
                            </div>
                     
                            <div class="single-info">
                                <i class="fa fa-cogs"></i>
                                <h4>Quality Cleaning Tools</h4>
                                <p>Lorem ipsum dolor sit amet, esse aliquid liberavisse eos ea.</p>
                            </div>
                            
                            <ul class="list-inline">
                                <li><img src="assets/img/check.png" alt="check"> Creativity</li>
                                <li><img src="assets/img/check.png" alt="check"> Experience</li>
                                <li><img src="assets/img/check.png" alt="check"> Teamwork</li>
                                <li><img src="assets/img/check.png" alt="check"> Result</li>
                            </ul>
                        </div> 
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="promo-video">
                            <div class="promo-video-block promo-video-bg">
                                <a href="https://vimeo.com/43250124" class="promo-play-btn popup-vimeo">
                                   <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start About Us Area -->
  
        <div class="home-separator"></div>
        
        <!-- Start Why Choose Us Area -->
        <section class="why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>Why Choose Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                    </div>
                </div>
                
                <div class="row"> 
                    <div class="col-lg-6 col-xl-4"> 
                        <div class="choose-reasons">
                            <i class="fa fa-star"></i>
                            <h4>We provide best solutions for a Clean Environment.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                        
                        <div class="choose-reasons">
                            <i class="fa fa-users"></i>
                            <h4>We Provide Qualified and Expert</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                    </div>
                    <div class="col-lg-4 hidden-md"> 
                        <div class="service-team">
                            <img src="assets/img/service-man.jpg" alt="Service Man">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4"> 
                        <div class="choose-reasons">
                            <i class="fa fa-wrench"></i>
                            <h4>Mordant Technology and Tools We Use</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                        
                        <div class="choose-reasons">
                            <i class="fa fa-life-ring"></i>
                            <h4>Quick Response and 24/7 Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
        <!-- End Why Choose Us Area -->   
        
        <!-- Start Testimonials Area -->
        <section class="cleaning-content-block testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>Our Valueable Client Says</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                    </div>
                </div>
               
                <div class="testimonial-slides wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-slide-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-item">
                                    <img src="assets/img/profile-img-1.jpg" class="img-circle" alt="nick">
                                    <span class="qout-icon"><img src="assets/img/qoute.png" alt="qoute"></span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>John Doe</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-slide-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-item">
                                    <img src="assets/img/profile-img-2.jpg" class="img-circle" alt="nick">
                                    <span class="qout-icon"><img src="assets/img/qoute.png" alt="qoute"></span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>John Doe</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Area -->
        
        <!-- Start Team Area -->
        <section class="cleaning-content-block our-team gray-bg">
            <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>Meet Our Awesome Team</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                    </div>
                </div>
               
                <div class="team-slides">
                    <div class="team-slide-item">
                        <div class="team-box-item">
                            <img src="assets/img/team-1.jpg" alt="" />
                            <div class="member-info">
                                <h3>Kristiana</h3>
                                <span>- Founder</span>
                            </div>
                            <div class="social-media">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-slide-item">
                        <div class="team-box-item">
                            <img src="assets/img/team-2.jpg" alt="" />
                            <div class="member-info">
                                <h3>Williamson</h3>
                                <span>- Team Member</span>
                            </div>
                            <div class="social-media">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-slide-item">
                        <div class="team-box-item">
                            <img src="assets/img/team-3.jpg" alt="" />
                            <div class="member-info">
                                <h3>Miranda joy</h3>
                                <span>- Team Member</span>
                            </div>
                            <div class="social-media">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-slide-item">
                        <div class="team-box-item">
                            <img src="assets/img/team-4.jpg" alt="" />
                            <div class="member-info">
                                <h3>Lauren Cox</h3>
                                <span>- Team Member</span>
                            </div>
                            <div class="social-media">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-slide-item">
                        <div class="team-box-item">
                            <img src="assets/img/team-5.jpg" alt="" />
                            <div class="member-info">
                                <h3>Jessie Barnett</h3>
                                <span>- Team Member</span>
                            </div>
                            <div class="social-media">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-slide-item">
                        <div class="team-box-item">
                            <img src="assets/img/team-6.jpg" alt="" />
                            <div class="member-info">
                                <h3>Team Member</h3>
                                <span>- Lauren Cox</span>
                            </div>
                            <div class="social-media">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Area -->
        
        <!-- Our Clients Area -->
        <section class="cleaning-content-block testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>our valueable clients</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                    </div>
                </div>
               
                <div class="client-slides">
                    <div class="client-single-slide">
                       <div class="client-logo">
                            <img src="assets/img/client-logo-1.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                         <img src="assets/img/client-logo-2.jpg" alt="Image">
                        </div> 
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                        <img src="assets/img/client-logo-3.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                        <img src="assets/img/client-logo-4.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                        <img src="assets/img/client-logo-5.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                        <img src="assets/img/client-logo-6.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                        <img src="assets/img/client-logo-1.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                        <img src="assets/img/client-logo-2.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                        <img src="assets/img/client-logo-3.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                        <img src="assets/img/client-logo-4.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                        <img src="assets/img/client-logo-5.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="client-single-slide">
                       <div class="client-logo">
                        <img src="assets/img/client-logo-6.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- End Our Clients Area -->
        
        <!-- Subscribe Section -->
        <section class="subscribe-section"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-lg-12"> 
                        <div class="subscribe-form">
                            <form action="https://templates.envytheme.com/milkwash/default/index.php">
                                <input type="text" placeholder="Enter your email address" required>
                                <button type="submit">subscribe now!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscribe Section -->
        
        <!-- Start scroll to top feature -->
        <a href="#" id="back-to-top" title="Back to Top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        <!-- End scroll to top feature -->
        
        
        
<?php
include "assets/php/footer.php";
?>
