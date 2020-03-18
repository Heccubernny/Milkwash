<?php
include("session.php");
if (!isset($_GET['id'])) {
    $query = "SELECT * FROM admin WHERE username = '".$login_session."'";
} else {
    $query = "SELECT * FROM admin WHERE username = '". $_GET['username']."'";
}

$data = mysqli_query($conn, $query);

if(mysqli_num_rows($data) == 1){
    $row = mysqli_fetch_array($data);
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $username = $row['username'];
    $password = $row['password'];
    $re_password = $row['re_password'];
    $image = $row['image'];
    $created_at = $row['created_at'];
    $login_at = $row['login_at'];
    $logout_at = $row['logout_at'];

$error = '';
$message = '';

if(isset($_POST['set_password'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $re_password = mysqli_real_escape_string($conn, $_POST['re_password']);
    
    $password_query = "UPDATE admin SET password = md5('$password') WHERE username = '$username'";
    
    if($password == $re_password){
        
        $save_password = mysqli_query($conn, $password_query);
        print '<script type="text/javascript">alert("Password have been successfully saved");</script>';
    }else{
        $error = "Password does not match each other";
    }
}

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $query = "SELECT id FROM admin WHERE username = '$username' AND password = md5('$password')";
    
    $result = mysqli_query($conn, $query);
    $rower = mysqli_fetch_array($result, MYSQLI_ASSOC);

    // $admin_rank = $rower['rank'];

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['username'] = $username;
        
        header("location: dashboard/index.html");
    } else {
        $error = "Your Password is Invalid";
    }
}

// if(isset($_POST['set_twitter'])){
//     $username = mysqli_real_escape_string($connection, $_POST['username']);
//     $twitter = mysqli_real_escape_string($connection, $_POST['twitter']);
    
//     $query = "UPDATE admin SET twitter = '$twitter' WHERE username = '$username'";
    

//     if(mysqli_query($connection, $query)) {
//         print '<script type="text/javascript">alert("Twitter Set successful");</script>';
//     } else {
//         $error = "Twitter link fail to update";
//     }
// }
    
// if(isset($_POST['set_description'])){
//     $username = mysqli_real_escape_string($connection, $_POST['username']);
//     $description = mysqli_real_escape_string($connection, $_POST['description']);
    
//     $query = "UPDATE admin SET description = '$description' WHERE username = '$username'";
    

//     if(mysqli_query($connection, $query)) {
//         print '<script type="text/javascript">alert("Description Set successful");</script>';
//     } else {
//         $error = "Description fail to update";
//     }
// }

if(isset($_POST['set_email'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $query = "UPDATE admin SET email = '$email' WHERE username = '$username'";
    

    if(mysqli_query($conn, $query)) {
        print '<script type="text/javascript">alert("Email Set successful");</script>';
    } else {
        $error = "Email fail to update";
    }
}
    
// if(isset($_POST['set_facebook'])){
//     $username = mysqli_real_escape_string($connection, $_POST['username']);
//     $facebook = mysqli_real_escape_string($connection, $_POST['facebook']);
    
//     $query = "UPDATE admin SET facebook = '$facebook' WHERE username = '$username'";
    

//     if(mysqli_query($connection, $query)) {
//         print '<script type="text/javascript">alert("Facebook link Set successful");</script>';
//     } else {
//         $error = "Facebook link fail to update";
//     }
// }

if(isset($_POST['set_image'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $imageFileType_image = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    $admin_image = "admin/uploads/admin/images/".$username.'.'.$imageFileType_image;
    
     $moving_admin_image = "../admin/uploads/admin/images/".$username.'.'.$imageFileType_image;
    
    if(file_exists($admin_image)) {
        print '<script type="text/javascript">alert("Sorry, Image name already exist, pls rename the file otherwise choose another file");</script>';
    }elseif($imageFileType_image != "jpg"){
         print '<script type="text/javascript">alert(" Only jpg files allowed");</script>';
    }elseif(!empty($admin_image)) {         
        $query_admin_image = "UPDATE admin SET image = '$admin_image' WHERE username = '$username'";
        $move_admin_image = move_uploaded_file($_FILES["image"]["tmp_name"], $moving_admin_image); 
        if(mysqli_query($connection, $query_admin_image)){
            print '<script type="text/javascript">alert("Image upload successful");</script>';
            header("location: admin_check.php");
        }else{
            print '<script type="text/javascript">alert("Image upload failed");</script>';                    
        }
    }
}

?>

