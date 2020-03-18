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
                                <h2>404 Not Found</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="index-2.php">home</a> / error
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Area -->
        
        
        <!-- Start Main Content Area -->
        <section class="error-section text-center">
            <div class="container">
               <div class="row"> 
                    <div class="col-lg-12"> 
                        <h1>404 Error</h1>
                        <h3>Page Not Found</h3>
                        <p class="return">The page you are looking for does not exist. We’re sorry but we can’t seem to find the page you requested.</p>
                        <a class="qout-btn green-btn" href="index-2.php"><i class="fa fa-arrow-circle-left"></i> Go back HOME Page</a>
                    </div>
                </div> 
            </div>
        </section>
        <!-- End Main Content Area -->
        
        <!-- Start scroll to top feature -->
        <a href="#" id="back-to-top" title="Back to Top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        <!-- End scroll to top feature -->
        

<?php
include "assets/php/footer.php";
?>
