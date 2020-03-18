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

    <!-- if (user != new) {
          include "assets/php/header.php";

      } else {
    
         include "assets/php/notregheader.php";

      }-->
    

    <!-- Homepage Slider -->
        <div class="homepage-slides">
            <div class="single-slider-item slide-bg-1">
                <div class="d-table">
                    <div class="d-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h1>The <span>best</span> cleaning company in the country</h1>
                                    <p>We provide best solutions for a Clean Environment. If you need any help in cleaning or maintenance.</p>
                                    <a href="contact-us.php" class="cleaning-btn slide-btn">Request A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-slider-item slide-bg-2">
                <div class="d-table">
                    <div class="d-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1 text-center">
                                    <h1>Professional <span>Cleaning</span> Services Provider</h1>
                                    <p>We provide best solutions for a Clean Environment. If you need any help in cleaning or maintenance.</p>
                                    <a href="contact-us.php" class="cleaning-btn slide-btn">Request A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-slider-item slide-bg-3">
                <div class="d-table">
                    <div class="d-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1 text-center">
                                    <h1>Quality <span>Presentation</span> Customer Service are our true values</h1>
                                    <p>We provide best solutions for a Clean Environment. If you need any help in cleaning or maintenance.</p>
                                    <a href="contact-us.php" class="cleaning-btn slide-btn">Request A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Homepage Slider -->
       
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
 
        <!-- Start Services Area -->
        <section class="our-services gray-bg"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>Our Services</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="single-service-item-block">
                            <a href="single-service.php" class="single-service-image service-bg-1"></a>
                            <h3><a href="single-service.php">Apartment Cleaning</a></h3>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-service-item-block">
                            <a href="single-service.php" class="single-service-image service-bg-2"></a>
                            <h3><a href="single-service.php">Office Cleaning</a></h3>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-service-item-block">
                            <a href="single-service.php" class="single-service-image service-bg-3"></a>
                            <h3><a href="single-service.php">House Cleaning</a></h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-service-item-block">
                            <a href="single-service.php" class="single-service-image service-bg-4"></a>
                            <h3><a href="single-service.php">Car Washing</a></h3>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="single-service-item-block">
                            <a href="single-service.php" class="single-service-image service-bg-5"></a>
                            <h3><a href="single-service.php">Green Cleaning</a></h3>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="single-service-item-block">
                            <a href="single-service.php" class="single-service-image service-bg-6"></a>
                            <h3><a href="single-service.php">Maintenance Service</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->
        
        <!-- Start Why Choose Us Area -->
        <section class="why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>Why Choose Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui</p>
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

                    <div class="col-lg-6 col-xl-4 hidden-md"> 
                        <div class="service-team">
                            <img src="assets/img/service-team.jpg" alt="Service Man">
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
        
        <!-- Achivment Section -->
        <section class="cleaning-content-block achivment-section"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 col-lg-3 wow fadeInUp"> 
                        <div class="counter-box">
                            <i class="fa fa-calendar"></i>
                            <h3 class="counter-number">30</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s"> 
                        <div class="counter-box">
                            <i class="fa fa-user-plus"></i>
                            <h3 class="counter-number">1599</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s"> 
                        <div class="counter-box">
                            <i class="fa fa-users"></i>
                            <h3 class="counter-number">1299</h3>
                            <p>Our Employees</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s"> 
                        <div class="counter-box">
                            <i class="fa fa-trophy"></i>
                            <h3 class="counter-number">199</h3>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Achivment Section -->
        
        <!-- Start Latest Project Area -->
        <section class="latest-pjoject">
            <div class="container">
                <div class="row">
                   <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>Our Latest Project</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui porttitor. Curabitur eros sapien</p>
                       </div>
                   </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="single-project-item">
                           <img src="assets/img/project-bg-1.jpg" alt="project one">
                            <div class="about-title">
                                <h4>Apartment Cleaning</h4>
                            </div>
                            <div class="single-project-info">
                                <div class="mask-table">
                                    <div class="mask-table-cell">
                                        <h3>Apartment Cleaning</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa.</p>
                                        <a href="single-project.php" class="read-more-btn project-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-project-item">
                           <img src="assets/img/project-bg-2.jpg" alt="project two">
                            <div class="about-title">
                                <h4>Office Cleaning</h4>
                            </div>
                            <div class="single-project-info">
                                <div class="mask-table">
                                    <div class="mask-table-cell">
                                        <h3>Office Cleaning</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa.</p>
                                        <a href="single-project.php" class="read-more-btn project-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-project-item">
                           <img src="assets/img/project-bg-3.jpg" alt="project three">
                            <div class="about-title">
                                <h4>Apartment Cleaning</h4>
                            </div>
                            <div class="single-project-info">
                                <div class="mask-table">
                                    <div class="mask-table-cell">
                                        <h3>Apartment Cleaning</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa.</p>
                                        <a href="single-project.php" class="read-more-btn project-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-project-item">
                           <img src="assets/img/project-bg-4.jpg" alt="project four">
                            <div class="about-title">
                                <h4>House Cleaning</h4>
                            </div>
                            <div class="single-project-info">
                                <div class="mask-table">
                                    <div class="mask-table-cell">
                                        <h3>House Cleaning</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa.</p>
                                        <a href="single-project.php" class="read-more-btn project-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="single-project-item">
                           <img src="assets/img/project-bg-5.jpg" alt="project four">
                            <div class="about-title">
                                <h4>Renovation Service</h4>
                            </div>
                            <div class="single-project-info">
                                <div class="mask-table">
                                    <div class="mask-table-cell">
                                        <h3>Renovation Service</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa.</p>
                                        <a href="single-project.php" class="read-more-btn project-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="single-project-item">
                           <img src="assets/img/project-bg-6.jpg" alt="project four">
                            <div class="about-title">
                                <h4>Green Cleaning</h4>
                            </div>
                            <div class="single-project-info">
                                <div class="mask-table">
                                    <div class="mask-table-cell">
                                        <h3>Green Cleaning</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa.</p>
                                        <a href="single-project.php" class="read-more-btn project-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Latest Project Area -->
        
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
        
        <!-- Start Pricing Table Area -->
        <section class="cleaning-content-block price-table">
            <div class="container">
                <div class="row">
                   <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>Flexible Pricing</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui porttitor. Curabitur eros sapien</p>
                       </div>
                   </div>
                </div>
                
                <div class="row"> 
                    <div class="col-lg-4 col-md-4 wow fadeInUp"> 
                        <div class="single-price-table">
                            <h3>Basic Plan</h3>
                            <div class="amount-text">
                                <h2>$2000</h2>
                                <p>Per Day</p>
                            </div>
                            
                            <ul class="offer-list"> 
                                <li>Apartment Cleaning</li>
                                <li>Office Cleaning</li>
                                <li>House Cleaning</li>
                                <li>Car Washing</li>
                                <li>Green Cleaning</li>
                                <li>Maintenance Service</li>
                            </ul>
                            
                            <a onclick="sp()" class="select-plan" id="sep">Select Plan</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.4s"> 
                        <div class="single-price-table">
                            <h3>Standard Plan</h3>
                            <div class="amount-text">
                                <h2>$5000</h2>
                                <p>Per Day</p>
                            </div>
                            
                            <ul class="offer-list"> 
                                <li>Apartment Cleaning</li>
                                <li>Office Cleaning</li>
                                <li>House Cleaning</li>
                                <li>Car Washing</li>
                                <li>Green Cleaning</li>
                                <li>Maintenance Service</li>
                            </ul>
                            
                            <a href="#" class="select-plan">Select Plan</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.6s"> 
                        <div class="single-price-table">
                            <h3>Ultimate Plan</h3>
                            <div class="amount-text">
                                <h2>$9000</h2>
                                <p>Per Day</p>
                            </div>
                            
                            <ul class="offer-list"> 
                                <li>Apartment Cleaning</li>
                                <li>Office Cleaning</li>
                                <li>House Cleaning</li>
                                <li>Car Washing</li>
                                <li>Green Cleaning</li>
                                <li>Maintenance Service</li>
                            </ul>
                            
                            <a href="#" class="select-plan">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Table Area -->
        
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
               
                <div class="testimonial-slides">
                    <div class="testimonial-slide-item wow fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-item">
                                    <img src="assets/img/client-img.jpg" class="img-circle" alt="nick">
                                    <span class="qout-icon"><img src="assets/img/qoute.png" alt="qoute"></span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>John Doe</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-slide-item wow fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-item">
                                    <img src="assets/img/client-img.jpg" class="img-circle" alt="nick">
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
        
        <!-- Start Our Shop Area -->
        <section class="cleaning-content-block our-shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>Our Shop</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-slides">
                            <div class="single-item">
                                <div class="shop-item-block">
                                    <div class="shop-single-item shop-item-bg-1">
                                        <div class="shop-hover">
                                            <a title="Quick View" class="shop-btn" href="#"><i class="fa fa-eye"></i></a>
                                            <a title="View Details" class="shop-btn" href="#"><i class="fa fa-paper-plane"></i></a>
                                            <a title="Add to Wishlist" class="shop-btn" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3>Multipurpose Glove</h3>
                                    <span>$19.00</span>
                                    <a class="cart-btn" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            
                            <div class="single-item">
                                <div class="shop-item-block">
                                    <div class="shop-single-item shop-item-bg-2">
                                        <div class="shop-hover">
                                            <a title="Quick View" class="shop-btn" href="#"><i class="fa fa-eye"></i></a>
                                            <a title="View Details" class="shop-btn" href="#"><i class="fa fa-paper-plane"></i></a>
                                            <a title="Add to Wishlist" class="shop-btn" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3>Spruce 'n' Clean</h3>
                                    <span>$32.00</span>
                                    <a class="cart-btn" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            
                            <div class="single-item">
                                <div class="shop-item-block">
                                    <div class="shop-single-item shop-item-bg-3">
                                        <div class="shop-hover">
                                            <a title="Quick View" class="shop-btn" href="#"><i class="fa fa-eye"></i></a>
                                            <a title="View Details" class="shop-btn" href="#"><i class="fa fa-paper-plane"></i></a>
                                            <a title="Add to Wishlist" class="shop-btn" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3>Toilet Cleaner Brush</h3>
                                    <span>$75.00</span>
                                    <a class="cart-btn" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                            
                            <div class="single-item">
                                <div class="shop-item-block">
                                    <div class="shop-single-item shop-item-bg-4">
                                        <div class="shop-hover">
                                            <a title="Quick View" class="shop-btn" href="#"><i class="fa fa-eye"></i></a>
                                            <a title="View Details" class="shop-btn" href="#"><i class="fa fa-paper-plane"></i></a>
                                            <a title="Add to Wishlist" class="shop-btn" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3>Flash Multipurpose Surface</h3>
                                    <span>$25.99</span>
                                    <a class="cart-btn" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Shop Area -->
  
        <!-- Start Subcription Area -->
        <section class="cleaning-content-block subscription">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="0.2s">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <p>Get latest news in your inbox</p>
                        <h2>Subscribe now</h2>
                        <div class="subscribe-form">
                            <form action="formsubmit.php">
                                <input type="text" placeholder="Enter your email address" required>
                                <button type="submit">subscribe now</button>
                            </form>
                        </div>
                        <span><i class="fa fa-lock"></i> We never share your email with others</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Subcription Area -->
      
        <!-- Start Latest News Area -->
        <section class="latest-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>Our Latest News</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus lacus quis massa tempor, <br class="hidden-xs"/> nec accumsan dui porttitor. Curabitur eros sapien</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-6 wow fadeInUp">
                        <div class="blog-item blog-item-top">
                            <a href="single-post.php" class="single-blog-item">
                               <div class="boxed-preview-top blog-img-1"></div>
                               <div class="date">20, june</div>
                            </a>
                            <div class="blog-info">
                                <h2>blog title goes to here</h2>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> By admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item blog-item-top">
                            <a href="single-post.php" class="single-blog-item">
                               <div class="boxed-preview-top blog-img-2"></div>
                               <div class="date">20, june</div>
                            </a>
                            <div class="blog-info">
                                <h2>blog title goes to here</h2>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> By admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="space-30"></div>
                
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="blog-item wow fadeInUp">
                            <a href="single-post.php" class="single-boxed-item">
                                <div class="boxed-preview blog-img-3"></div>
                                <div class="date">20, june</div>
                            </a>
                            
                            <div class="blog-text no-padding mt-30">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> By admin</a></li>
                                </ul>
                                <h3>blog title goes to here</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="single-post.php" class="read-more-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                            <a href="single-post.php" class="single-boxed-item">
                                <div class="boxed-preview blog-img-4"></div>
                                <div class="date">20, june</div>
                            </a>
                            
                            <div class="blog-text no-padding mt-30">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> By admin</a></li>
                                </ul>
                                <h3>blog title goes to here</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="single-post.php" class="read-more-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
                            <a href="single-post.php" class="single-boxed-item">
                                <div class="boxed-preview blog-img-5"></div>
                                <div class="date">20, june</div>
                            </a>
                            
                            <div class="blog-text no-padding mt-30">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i> By admin</a></li>
                                </ul>
                                <h3>blog title goes to here</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="single-post.php" class="read-more-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Latest News Area -->

        <!-- Start scroll to top feature -->
        <a href="#" id="back-to-top" title="Back to Top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        <!-- End scroll to top feature -->


        
<?php include 'assets/php/footer.php'?>