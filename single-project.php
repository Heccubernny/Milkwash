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
                                <h2>Single Project</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="index-2.html">home</a> / <a href="projects.html">project</a> / Single Project
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
                    <!-- Blog Main-content area -->
                    <div class="col-lg-12">
                        <div class="post-details-area">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="blog-slides">
                                        <div class="single-blog-slide">
                                            <a class="lightbox-gallery" href="assets/img/sp-slider-1.jpg"><img src="assets/img/sp-slider-1.jpg" alt="Image"></a>
                                        </div>

                                        <div class="single-blog-slide">
                                            <a class="lightbox-gallery" href="assets/img/sp-slider-2.jpg"><img src="assets/img/sp-slider-2.jpg" alt="Image"></a>
                                        </div>

                                        <div class="single-blog-slide">
                                            <a class="lightbox-gallery" href="assets/img/sp-slider-3.jpg"><img src="assets/img/sp-slider-3.jpg" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="single-blog-slide mt-30">
                                        <a class="lightbox-gallery" href="assets/img/blog-item-1.jpg"> <img src="assets/img/blog-item-1.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-blog-slide mt-30">
                                        <a class="lightbox-gallery" href="assets/img/blog-item-2.jpg"><img src="assets/img/blog-item-2.jpg" alt="Image"></a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-blog-slide mt-30">
                                        <a class="lightbox-gallery" href="assets/img/blog-item-3.jpg"><img src="assets/img/blog-item-3.jpg" alt="Image"></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="project-details-content">
                                <div class="row">
                                    <div class="col-lg-8"> 
                                        <div class="project-text-area">
                                            <h3>Project Description</h3>
                                            
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                            
                                            <ul> 
                                                <li><i class="fa fa-check"></i> We were very responsive for the client.</li>
                                                <li><i class="fa fa-check"></i> Provide expert team for this office.</li>
                                                <li><i class="fa fa-check"></i> 100% client satisfied.</li>
                                                <li><i class="fa fa-check"></i> Professional and Qualified worker.</li>
                                                <li><i class="fa fa-check"></i> It was 8 hours working time in a day.</li>
                                                <li><i class="fa fa-check"></i> Our Project Manager also meet and discuss with them.</li>
                                                <li><i class="fa fa-check"></i> We work extra time at every Sunday.</li>
                                            </ul>
                                            
                                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                            
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        </div>
                                        
                                        <nav aria-label="...">
                                            <ul class="pager">
                                                <li class="previous">
                                                    <a href="#">
                                                        Previous
                                                    </a>
                                                </li>
                                                <li class="next">
                                                    <a href="#">
                                                        Next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    
                                    <div class="col-lg-4"> 
                                        <div class="project-info">
                                            <h3>Project Information</h3>
                                            
                                            <div class="info-text">
                                                <ul> 
                                                    <li><strong>Assign</strong> : 12 September 2017</li>
                                                    <li><strong>Clients</strong> : John Doe</li>
                                                    <li><strong>Location</strong> : 210-2750 Quadra Street Victoria, Canada</li>
                                                    <li><strong>Operator</strong> : Todd Hockney</li>
                                                    <li><strong>Duration</strong> : 1 Month</li>
                                                    <li><strong>Value</strong> : $4, 555</li>
                                                    <li><strong>Status</strong> : Complete</li>
                                                    <li class="feedback"><strong>Feedback</strong> : Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <br><br> Thank you <br> <b>Michael McManus ( CEO of Genic )</b></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- End Blog Main-content area -->
                </div>
            </div>
        </section>
        <!-- End Main Content Area -->
        
        <!-- Achivment Section -->
        <section class="cleaning-content-block achivment-section"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 col-lg-3"> 
                        <div class="counter-box">
                            <i class="fa fa-calendar"></i>
                            <h3 class="counter-number">29</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3"> 
                        <div class="counter-box">
                            <i class="fa fa-user-plus"></i>
                            <h3 class="counter-number">1599</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3"> 
                        <div class="counter-box">
                            <i class="fa fa-users"></i>
                            <h3 class="counter-number">1299</h3>
                            <p>Our Employees</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3"> 
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
        
        <!-- Start scroll to top feature -->
        <a href="#" id="back-to-top" title="Back to Top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        <!-- End scroll to top feature -->
  

<?php
include "assets/php/footer.php";
?>
