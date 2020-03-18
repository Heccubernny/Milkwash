
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
                                <h2>Checkout</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="index-2.html">home</a> / checkout
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Area -->
        
        <!-- Start checkout form area -->
        <section class="cleaning-content-block checkout-form-area">
            <div class="container">
                   <h3 class="page-header">Billing Information</h3> 
                    <form action="https://templates.envytheme.com/milkwash/default/checkout.html">
                        <div class="row"> 
                            <div class="col-lg-6">                            
                                <div class="form-group">
                                    <label>First name <sup>*</sup></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Company name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Address <sup>*</sup></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Postcode / ZIP</label>
                                    <input type="text" class="form-control" required>
                                </div>
        
                            </div>
                            <div class="col-lg-6"> 
                                <div class="form-group">
                                    <label>Last name <sup>*</sup></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Country <sup>*</sup></label>
                                    <select class="form-control">
                                        <option>Select a country…</option>
                                        <option>Australia</option>
                                        <option>USA</option>
                                        <option>UK</option>
                                        <option>Canada</option>
                                        <option>China</option>     
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Town / City <sup>*</sup></label>
                                    <input type="text" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Phone <sup>*</sup></label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row"> 
                            <div class="col-lg-12"> 
                                <div class="form-group">
                                    <label>Email Address <sup>*</sup></label>
                                    <input type="email" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Order Notes</label>
                                    <textarea class="form-control" rows="8" required></textarea>
                                </div>
                            </div>
                        </div>    
                        
                        <div class="row"> 
                            <div class="col-lg-12"> 
                                <h3 class="page-header">Your order</h3>
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Product A</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>Product B</td>
                                                <td>$30</td>
                                            </tr>
                                            <tr>
                                                <td>Product C</td>
                                                <td>$50</td>
                                            </tr>
                                            <tr>
                                                <td>Product D</td>
                                                <td>$30</td>
                                            </tr>
                                            <tr>
                                                <td>Product D</td>
                                                <td>$70</td>
                                            </tr>
                                            <tr>
                                                <td>Product E</td>
                                                <td>$100</td>
                                            </tr>
                                             <tr>
                                                <td>Total</td>
                                                <td>$300</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="form-group">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                            Paypal <img src="assets/img/paypal-img.png" alt="paypal" />
                                        </label>
                                    </div>
                                </div>
                              
                                <button type="submit" class="btn submit-btn">Proceed to PayPal</button>  
                            </div>
                        </div>  
                    </form>
                </div>
        </section>
        <!-- End checkout form area -->
        
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
