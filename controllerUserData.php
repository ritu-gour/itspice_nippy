<?php 
session_start();
require "comm/connection.php";
$email = "";
$mobile = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $userid = rand(1, 100);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    if(empty($name))
    {
      $name_error = " *Please enter the Name";
      $error=1;
    }
    else if(!preg_match("/^[a-zA-Z ]*$/", $name))
    {
      $name_error = "*Only letters are allowed";
      $error=1;
    }
    $email_check = "SELECT * FROM usertable WHERE name = '$name'";
   $res = mysqli_query($con, $email_check);
          if(!preg_match("/^[a-zA-Z ]*$/", $name)){
            $errors['name'] = "Only letters are allowed";
          }
          


          
        if(empty($email))
        {
          $email_error = "*Please enter Email";
          $error=1;
        }
        
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
          $email_error = "*Invalid Email Format";
          $error=1;
        }
        if(empty($mobile))
        {
        $mobile_error = "*Please enter Mobile";
          $error=1;
        }
        $email_check = "SELECT * FROM usertable WHERE name = '$mobile'";
        $res = mysqli_query($con, $email_check);
               if(empty($mobile)){
                 $errors['mobile'] = "Please enter the Feild";
               }
        if(empty($password))
          {
            $password_error = "*Please enter Password";
            $error=1;
          }
          $email_check = "SELECT * FROM usertable WHERE name = '$name'";
          $res = mysqli_query($con, $email_check);
                 if(!preg_match("/^[a-zA-Z ]*$/", $name)){
                   $errors['name'] = "Only letters are allowed";
                 }
          if(empty($cpassword))
          {
            $cpassword_error = "*Please enter Confirm password";
            $error=1;
          }
          
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM usertable WHERE mobile = '$mobile'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['mobile'] = "mobile that you have entered is already exist!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0 ){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = 0;
        $status = "verified";
        $insert_data = "INSERT INTO usertable (userid, name, mobile, email, password, code, status)
                        values('$userid','$name','$mobile', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            // $subject = "Email Verification Code";
            // $message = "Your verification code is $code";
            // $sender = "From:gourritu48@gmail.com";
            // if(mail($email, $subject, $message, $sender)){
            //     $info = "We've sent a verification code to your email - $email";
            //     $_SESSION['info'] = $info;
            //     $_SESSION['email'] = $email;
            //     $_SESSION['password'] = $password;
            //     // header('location: user-otp.php');
            //     header('location: login.php');
            //     exit();
            // }
            // else{
            //     $errors['otp-error'] = "Failed while sending code!";
            // }
            header('location: login.php');
        }
       
        else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
    //if user click verification code submit button
    // if(isset($_POST['check'])){
    //     $_SESSION['info'] = "";
    //     $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    //     $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
    //     $code_res = mysqli_query($con, $check_code);
    //     if(mysqli_num_rows($code_res) > 0){
    //         $fetch_data = mysqli_fetch_assoc($code_res);
    //         $fetch_code = $fetch_data['code'];
    //         $email = $fetch_data['email'];
    //         $id = $fetch_data['id'];
    //         $name = $fetch_data['name'];
    //         $userid = $fetch_data['userid'];
    //         $image =  $fetch_data['image'];
    //         $code = 0;
    //         $status = 'verified';
    //         $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
    //         $update_res = mysqli_query($con, $update_otp);
    //         if($update_res){
    //             $_SESSION['mobile'] = $mobile;
    //             $_SESSION['email'] = $email;
    //             $_SESSION['name'] = $name;
    //             $_SESSION['id'] = $id;
    //             $_SESSION['userid'] = $userid;
    //             $_SESSION['image']=$image;
    //             header('location: dashboard.php');
    //             exit();
    //         }else{
    //             $errors['otp-error'] = "Failed while updating code!";
    //         }
    //     }else{
    //         $errors['otp-error'] = "You've entered incorrect code!";
    //     }
    // }

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            $fetch_id = $fetch['id'];
            $fetch_name = $fetch['name'];
            $fetch_userid=$fetch['userid'];
            $fetch_image=$fetch['image'];
           
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;

                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                  $_SESSION['id'] = $fetch_id;
                  $_SESSION['name'] = $fetch_name;
                  $_SESSION['userid'] = $fetch_userid;
                  $_SESSION['image'] = $fetch_image;
                  
                    header('location: dashboard.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: login.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

































    

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: gourritu48@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE usertable SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login.php');
    }
?>