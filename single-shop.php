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
                                <h2>Product</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="index-2.html">home</a> / single product
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
                    <div class="col-lg-5 col-md-5">
                        <div class="row product-img">
                            <div class="col-md-12">
                                <div class="gallery-box">
                                    <a class="lightbox-gallery" href="assets/img/product-img.png">
                                        <img src="assets/img/product-img.png" alt="Shop">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-box">
                                    <a class="lightbox-gallery" href="assets/img/product-img.png"><img src="assets/img/product-img.png" alt="Shop"></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                               <div class="gallery-box">
                                    <a class="lightbox-gallery" href="assets/img/product-img.png"><img src="assets/img/product-img.png" alt="Shop"></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-box">
                                    <a class="lightbox-gallery" href="assets/img/product-img.png"><img src="assets/img/product-img.png" alt="Shop"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-7">
                        <div class="product-box-area">
                            <h3>Toilet Cleaner Brush</h3>
                            <div class="product-price">
                                <h3>$75.00</h3>
                            </div>
                            <div class="product-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla soluta consequuntur repellendus ducimus deleniti accusamus quo, ratione similique sint!</p>
                            </div>
                            <div class="product-cart">
                               <div class="quantity">
                                    <form action="https://templates.envytheme.com/milkwash/default/shop.html">
                                        <label>Quantity:</label> 
                                        <div class="quantity-inner"> 
                                            <input step="1" min="1" name="quantity" value="1" title="Qty" class="input-text" size="4" max="" type="number"> 
                                        </div>
                                        <button type="submit" class="add-to-cart">add to cart</button>
                                    </form> 
                               </div>
                            </div>
                            <div class="wishlist-wrap">
                                <a href="#" class="product-wrap-btn"><span><i class="fa fa-heart"></i></span> Add to wishlist</a>
                            </div>
                            <div class="product-details">
                                <div class="item-wrapper">
                                    <label>SKU</label> <span>: N/A</span>
                                </div>
                                <div class="item-wrapper">
                                    <label>Availability</label> <span>: In Stock</span>
                                </div>
                                <div class="item-wrapper">
                                    <label>Category</label> <span>: Panting</span>
                                </div>
                                <div class="item-wrapper">
                                    <label>Tag</label> <a href="#">: Featured</a>
                                </div>
                            </div>
                            <div class="product-share-area">
                                <ul class="list-inline">
                                    <li><i class="ion-android-share-alt"></i> Share:</li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="space-45"></div>
                
                <div class="product-details-area">
                    <div class="row">
                        <div class="col-md-3 col-lg-2 col-xl-2">
                            <!-- required for floating -->
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-left">
                                <li class="nav-item">
                                    <a class="nav-link active"href="#description" data-toggle="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#information" data-toggle="tab">Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#reviews" data-toggle="tab">Reviews (0)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 col-lg-10 col-xl-10">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                    <h3>Description</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab laboriosam soluta reiciendis voluptate eveniet, dignissimos quisquam a, qui inventore sint vitae quis illo at quas, sapiente alias porro! Voluptate, tempore.</p>
                                    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab laboriosam soluta reiciendis voluptate eveniet, dignissimos quisquam a, qui inventore sint vitae quis illo at quas, sapiente alias porro! Voluptate, tempore. Ab laboriosam soluta reiciendis voluptate eveniet, dignissimos quisquam a, qui inventore sint vitae quis illo at quas, sapiente alias porro! Voluptate, tempore.</p>
                                </div>
                                <div class="tab-pane" id="information">
                                    <h3>Information</h3>
                                    <div class="product-details">
                                       <div class="item-wrapper">
                                           <label>Color</label> <span>: Green</span>
                                       </div>
                                       <div class="item-wrapper">
                                           <label>Size</label> <span>Small, Medium, Big</span>
                                       </div>
                                   </div>
                                </div>
                                
                                <div class="tab-pane" id="reviews">
                                    <div class="product-reviews">
                                        <h3>Reviews</h3>
                                        <h4>Hay flowerpot saucer huset</h4>
                                         
                                        <ul class="list-inline rating">
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        </ul>
                                         
                                        <div class="review-form">
                                            <form action="https://templates.envytheme.com/milkwash/default/shop.html">
                                                <div class="form-group">
                                                    <label for="review">Write Your Review</label>
                                                    <textarea name="review" id="review" rows="3" required></textarea>
                                                </div>
                                                <div class="form-group">   
                                                    <label for="name">Your Name</label>
                                                    <input type="text" for="name" required>
                                                </div>
                                                <div class="form-group">   
                                                    <label for="Email">Email</label>
                                                    <input type="email" for="email" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="sbmt-btn" value="Submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Content Area -->
        
        <!-- Start Related Products Area -->
        <section class="cleaning-content-block our-shop gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Related Products</h2>
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
                                    <span>$25.00</span>
                                    <a class="cart-btn" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Related Products Area -->
        
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