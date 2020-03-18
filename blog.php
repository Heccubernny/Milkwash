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
                                <h2>Blog</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="index-2.html">home</a> / blog
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Area -->
        
        <!-- Start Main Content Area -->
        <section class="cleaning-content-block blog-area gray-bg">
            <div class="container">
                <div class="row">
                    <!-- Blog Main-content area -->
                    <div class="col-lg-8 col-md-7">
                        <div class="row">
                            <!-- Single Blog Item-->
                            <div class="col-lg-12">
                                <!-- Blog Item -->
                                <div class="blog-item wow fadeInUp">
                                    <a href="single-post.html" class="single-boxed-item mb-20">
                                        <img src="assets/img/blog-item-1.jpg" alt="Blog Image">
                                        <div class="date">20, june</div>
                                    </a>
                                    <div class="blog-text">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i> By admin</a></li>
                                        </ul>
                                        <h3>blog title goes to here</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum...</p>
                                    </div>
                                    <div class="post-share-area">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <a href="single-post.html" class="read-more-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                            
                                            <div class="col-lg-7 text-right">
                                                <ul class="list-inline">
                                                    <li><i class="ion-android-share-alt"></i> Share:</li>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Blog Item -->
                            </div> <!-- End Single Blog Item-->
                            
                            <!-- Single Blog Item-->
                            <div class="col-lg-12">
                                <!-- Blog Item -->
                                <div class="blog-item wow fadeInUp">
                                    <a href="single-post.html" class="single-boxed-item mb-20">
                                        <img src="assets/img/blog-item-2.jpg" alt="Blog Image">
                                        <div class="date">20, june</div>
                                    </a>
                                    
                                    <div class="blog-text">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i> By admin</a></li>
                                        </ul>
                                        <h3>blog title goes to here</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum...</p>
                                    </div>
                                    
                                    <div class="post-share-area">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <a href="single-post.html" class="read-more-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                            
                                            <div class="col-lg-7 text-right">
                                                <ul class="list-inline">
                                                    <li><i class="ion-android-share-alt"></i> Share:</li>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Blog Item -->
                            </div> <!-- End Single Blog Item-->
                            
                            <!-- Single Blog Item-->
                            <div class="col-lg-12">
                                <!-- Blog Item -->
                                <div class="blog-item wow fadeInUp">
                                    <a href="single-post.html" class="single-boxed-item mb-20">
                                        <img src="assets/img/blog-item-4.jpg" alt="Blog Image">
                                        <div class="date">20, june</div>
                                    </a>
                                    
                                    <div class="blog-text">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
                                            <li><a href="#"><i class="fa fa-user"></i> By admin</a></li>
                                        </ul>
                                        <h3>blog title goes to here</h3>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum...</p>
                                    </div>
                                    
                                    <div class="post-share-area">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <a href="single-post.html" class="read-more-btn">Read More <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                            
                                            <div class="col-lg-7 text-right">
                                                <ul class="list-inline">
                                                    <li><i class="ion-android-share-alt"></i> Share:</li>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                               </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Blog Item -->
                            </div> <!-- End Single Blog Item-->   
                        </div>
                        
                        <div class="row">
                            <!-- Pagination -->
                            <div class="col-lg-12 text-center">
                                <ul class="pagination pagination-box">
                                    <li class="disabled">
                                        <a href="#" aria-label="Previous">
                                            <i class="fa fa-angle-double-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> <!-- End Pagination -->
                        </div>
                    </div>
                    <!-- End Blog Main-content area -->
                    
                    <!-- Blog Right Sidebar -->
                    <div class="col-lg-4 col-md-5">
                        <div class="blog-serch-form">
                            <input type="text" placeholder="Search here.....">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="widget recent_posts">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="single-post.html">Blog title goes to here <span>24 May, 2017</span></a>
                                </li>
                                <li>
                                    <a href="single-post.html">Blog title goes to here <span>24 May, 2017</span></a>
                                </li>
                                <li>
                                    <a href="single-post.html">Blog title goes to here <span>24 May, 2017</span></a>
                                </li>
                                <li>
                                    <a href="single-post.html">Blog title goes to here <span>24 May, 2017</span></a>
                                </li>
                                <li>
                                    <a href="single-post.html">Blog title goes to here <span>24 May, 2017</span></a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="widget recent_posts">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="#">Apartment Cleaning</a>
                                </li>
                                <li>
                                    <a href="#">Office Cleaning</a>
                                </li>
                                <li>
                                    <a href="#">House Cleaning</a>
                                </li>
                                <li>
                                    <a href="#">Car Washing</a>
                                </li>
                                <li>
                                    <a href="#">Maintenance Service</a>
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
                    </div> 
                    <!-- Blog Right Sidebar --> 
                </div>
            </div>
        </section>
        <!-- End Main Content Area -->
      
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
