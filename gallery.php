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
                                <h2>Gallery</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="index-2.html">home</a> / gallery
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Area -->
        
        <!-- Start Gallery Area -->
        <section class="gallery-section">
            <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="shorting-menu">
                           <button type="button" data-filter="all">All Project</button>
                            <button type="button" data-filter=".category-a">Appartment</button>
                           <button type="button" data-filter=".category-b">Office</button>
                            <button type="button" data-filter=".category-c">House</button>
                            <button type="button" data-filter=".category-d">Maintenance</button>
                       </div>
                   </div>
               </div>
                <div class="row shorting">
                    <div class="col-lg-4 col-md-6 mix category-a category-d">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-1.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-1.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-b">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-2.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-2.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-c category-d">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-3.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-3.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-d category-c">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-4.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-4.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-a">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-5.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-5.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-b category-d">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-6.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-6.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-c category-d">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-7.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-7.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-d category-a">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-8.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-8.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-a">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-9.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-9.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Gallery Area -->
        
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
