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
                                   <a href="index-2.html">home</a> / <a href="our-team.html">our team</a> / john doe
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Area -->
       
        <!-- Start Team Details Area -->
        <section class="cleaning-content-block">
            <div class="container">
               <div class="expert-team">
                   <div class="row">
                       <div class="col-md-4 col-lg-3">
                            <div class="profile-box">
                                <img src="assets/img/team-1.jpg" alt="Profile Image">
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                       </div>

                       <div class="col-md-8 col-lg-9">
                           <div class="profile-details">
                               <h3>John Doe <span>Project Manager</span></h3>
                               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                               <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                           </div>
                       </div> 
                   </div>
               </div>
            </div>
        </section>
        <!-- End Team Details Area -->
        
        
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
