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
                                <h2>House Service</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="#">home</a> / <a href="services.html">service</a> / House service
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Area -->
        
        <!-- Start Main Content Area -->
        <section class="cleaning-content-block gray-bg">
            <div class="container">
                <div class="row">
                    <!-- Blog Main-content area -->
                    <div class="col-lg-8">
                        <div class="post-details-area">
                            <div class="blog-slides">
                                <div class="single-blog-slide">
                                    <a class="lightbox-gallery" href="assets/img/blog-item-3.jpg"><img src="assets/img/blog-item-3.jpg" alt="Image"></a>
                                </div>

                                <div class="single-blog-slide">
                                    <a class="lightbox-gallery" href="assets/img/blog-item-2.jpg"><img src="assets/img/blog-item-2.jpg" alt="Image"> </a>
                                </div>

                                <div class="single-blog-slide">
                                    <a class="lightbox-gallery" href="assets/img/blog-item-1.jpg"><img src="assets/img/blog-item-1.jpg" alt="Image"></a>
                                </div>
                            </div>
                            
                            <div class="post-description">
                                <h2>House Service</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                <blockquote>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                <blockquote>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                            </div>
                        </div> 
                    </div>
                    <!-- End Blog Main-content area -->
                    
                    <!-- Blog Right Sidebar -->
                    <div class="col-lg-4">
                        <div class="blog-serch-form sm-mt-30">
                            <input type="text" placeholder="Search here.....">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        
                        <div class="widget recent_posts">
                            <h3 class="widget-title">Service Categories</h3>
                            <ul>
                                <li>
                                    <a href="apartment-service.html">Apartment Cleaning</a>
                                </li>
                                <li>
                                    <a href="office-service.html">Office Cleaning</a>
                                </li>
                                <li>
                                    <a href="house-service.html">House Cleaning</a>
                                </li>
                                <li>
                                    <a href="car-service.html">Car Washing</a>
                                </li>
                                <li>
                                    <a href="maintenance-service.html">Maintenance Service</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="tag_widget tag_list">
                            <h3 class="widget-title">Tags</h3>
                            <ul>
                                <li>
                                    <a href="#">Apartment</a>
                                </li>
                                <li>
                                    <a href="#">Office</a>
                                </li>
                                <li>
                                    <a href="#">House</a>
                                </li>
                                <li>
                                    <a href="#">Car Washing</a>
                                </li>
                                <li>
                                    <a href="#">Green</a>
                                </li>
                                <li>
                                    <a href="#">Maintenance</a>
                                </li>
                                <li>
                                    <a href="#">Window Washing</a>
                                </li>
                                <li>
                                    <a href="#">Maid Service</a>
                                </li>
                                <li>
                                    <a href="#">Apartment Cleaning</a>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Qoute Form -->
                        <div class="qoute-title-area">
                            <h3>Lets Talk About The Project</h3>
                        </div>
                        <div class="qoute-form-area">
                            <form id="contatc_form" method="POST" action="https://templates.envytheme.com/demo/milk-wash/assets/include/sendmail.php" name="myform">
                                <p>
                                    <label>Name</label>
                                    <input type="text" name="name" id="contact_name" placeholder="Type your name" required>
                                </p>
                                <p>
                                    <label>Email</label>
                                    <input type="email" name="email" id="contact_email" placeholder="Type your email" required>
                                </p>
                                <p> 
                                    <label for="subject">Subject</label>
                                    <input type="text" name="sub" id="contact_subject" placeholder="Subject*" required restrict="A-Z\a-z\0-9">
                                </p>
                                <p>
                                    <label>Phone</label>
                                    <input type="text" name="phone" id="contact_phone" placeholder="Type your phone" required restrict="A-Z\a-z\0-9">
                                </p>
                                <p>
                                    <label>Message</label>
                                    <textarea name="message" id="contact_message" placeholder="Type your message" required restrict="A-Z\a-z\0-9"></textarea>
                                </p>
                                <p> 
                                    <div id="contact_send_status"></div>
                                </p>
                                <input type="submit" value="Get A free quote">
                            </form>
                        </div> <!-- End Qoute Form -->
                    </div> 
                    <!-- Blog Right Sidebar -->
                </div>
            </div>
        </section>
        <!-- End Main Content Area -->
        
        <!-- Achivment Section -->
        <section class="cleaning-content-block achivment-section"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 col-lg-3"> 
                        <div class="counter-box wow fadeInUp">
                            <i class="fa fa-calendar"></i>
                            <h3 class="counter-number">29</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3"> 
                        <div class="counter-box wow fadeInUp" data-wow-delay="0.2s">
                            <i class="fa fa-user-plus"></i>
                            <h3 class="counter-number">1599</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3"> 
                        <div class="counter-box wow fadeInUp" data-wow-delay="0.4s">
                            <i class="fa fa-users"></i>
                            <h3 class="counter-number">1299</h3>
                            <p>Our Employees</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3"> 
                        <div class="counter-box wow fadeInUp" data-wow-delay="0.6s">
                            <i class="fa fa-trophy"></i>
                            <h3 class="counter-number">199</h3>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Achivment Section -->
        
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
 
        <!-- Start Testimonials Area -->
        <section class="cleaning-content-block testimonial">
            <div class="container">
               <div class="section-title">
                   <h2>Our Valueable Client Says</h2>
               </div>
               
                <div class="testimonial-slides wow fadeInUp">
                    <div class="testimonial-slide-item">
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
                    
                    <div class="testimonial-slide-item">
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
        
        <!-- Subscribe Section -->
        <section class="subscribe-section"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-lg-12"> 
                        <div class="subscribe-form">
                            <form action="https://templates.envytheme.com/milkwash/default/index.html">
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
