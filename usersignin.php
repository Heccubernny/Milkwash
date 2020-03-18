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

<body>
    
    <section class="admin-in">
        <div class="container">
            <div class="admin-con">
                <div class="a-title">
                    <h2><span class="r-obj"></span>Login in with your credientials</h2>

                </div>
                <form action="" class="signin-form">
                    <div class="a-form">
                        <label for="username">Username/Email</label>
                        <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter your username or email">
                    </div>
                    <div class="a-form">
                        <label for="password">Password</label>
                        <input type="password" name="pword" id="pword" class="form-control" placeholder="Enter your password">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Signup</button>

                    <a href="#" class="return-store">or Return to Store</a>
                </form>
            </div>
        </div>
    </section>
    
</body>
<br>
<br>

<?php
include "assets/php/footer.php";
?>