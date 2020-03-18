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
                                <h2>Our Team</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="index-2.html">home</a> / our team
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Area -->
    
        <!-- Start Team Area -->
        <section class="team-section">
            <div class="container">
                <div class="section-title">
                   <h2>Our Awesome Team</h2>
                </div>
                <div class="expert-team">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp">
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
                            <div class="team-profile">
                                <a href="profile-details.html">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
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
                            <div class="team-profile">
                                <a href="profile-details.html">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
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
                            <div class="team-profile">
                                <a href="profile-details.html">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
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
                            <div class="team-profile">
                                <a href="profile-details.html">View Profile</a>
                            </div>
                        </div>

                       <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
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
                            <div class="team-profile">
                                <a href="profile-details.html">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
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
                            <div class="team-profile">
                                <a href="profile-details.html">View Profile</a>
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="team-box-item">
                                <img src="assets/img/team-1.jpg" alt="" />
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
                            <div class="team-profile">
                                <a href="profile-details.html">View Profile</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-box-item">
                                <img src="assets/img/team-2.jpg" alt="" />
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
                            <div class="team-profile">
                                <a href="profile-details.html">View Profile</a>
                            </div>
                        </div>
                   </div>
               </div>
            </div>
        </section>
        <!-- End Team Area -->
        
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
