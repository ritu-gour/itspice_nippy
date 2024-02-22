<?php require_once "controllerUserData.php";
 
//  use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>

<head>

    <title>Nippy Tech</title>
    <link rel="icon" type="image/x-icon" href="nippylogo.png">
    <link rel="icon" type="image/x-icon" href="nippylogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="indexheader.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!--Get your own code at fontawesome.com-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
    .content-section1 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(nippyimage/Business-Meeting.png);
        background-repeat: no-repeat;

        /* background-position: 100px 5px; */
        color: #fff;
        background-size: cover;
        background-attachment: fixed;


        padding: 150px 0px 0px 0px;

    }

    .cc4 {
        padding: 110px 0px 200px 0px;
        font-size: 50px;
    }





    .icon1 {
        background: #1d64a9;
        color: white;
        padding: 14px 17px 14px 17px;
        font-size: 25px;
        border-radius: 50%;
    }

    .icon2 {
        background: #1d64a9;
        color: white;
        padding: 14px 15px 14px 15px;
        font-size: 25px;
        border-radius: 50%;
    }

    .icon3 {
        background: #1d64a9;
        color: white;
        padding: 14px 15px 14px 15px;
        font-size: 25px;
        border-radius: 50%;
    }

    .cs {
        color: #1d64a9;
    }

    .cd,
    .cd1 {
        font-size: 18px;
        color: black;
        text-decoration: none !important;
    }

    .block {
        display: block;
        width: 100%;
        border: none;
        background-color: #00356b;
        padding: 10px 28px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        border-radius: 20px;
    }

    .control11 {
        border-radius: 20px;
    }

    .card111 {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 30px 50px 100px 50px;
        border-radius: 20px;

    }

    .bbb {
        margin: 0px 0px 50px 0px;
        color: #1d64a9;
    }

    .mapouter {
        position: relative;
        text-align: right;
        width: 100%;
        height: 300px;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        width: 100%;
        height: 300px;
    }

    .gmap_iframe {
        height: 300px !important;
    }

    .map99 {
        width: 100%;
        height: 300px;
    }

    @media (max-width: 480px) {



        .content-section1 {

            padding: 150px 0px 10px 0px !important;
        }

        .cc4 {
            font-size: 30px !important;
            padding: 90px 0px 150px 0px !important;
        }

        .cd,
        .cd1 {
            font-size: 15px;
            color: black;
            text-decoration: none !important;
        }

        .map99 {
            width: 100% !important;
            height: 300px;
        }

        .card111 {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 30px 10px 100px 10px;
            border-radius: 20px;
            margin-top: 30px;
        }

        .signupimag {
            width: 100% !important;
        }
    }

    .iconuser {
        font-size: 70px;
        margin: -90px 0px 10px 0px;
    }

    @media (max-width: 768px) {

        /* .content-section1 {

        padding: 230px 0px 100px 0px !important;
    } */
        .iconuser {
            font-size: 50px !important;
            margin: -90px 0px 10px 0px;
        }

        .col-sm-6 {
            flex: 0 0 auto;
            width: 100% !important;
        }

        .map99 {
            width: 100% !important;
            height: 300px;
        }

        .card111 {

            margin-top: 30px;
        }
    }
    </style>
</head>

<body>
    <?php include 'header.php' ?>

    <!-- <section class="content-section1">

        <div class="container">
            <h2 class="text-center cc4">Sign Up</h2>
        </div>
    </section> -->





    <br><br> <br><br>

    <div class="container my-5">

        <div class="row">

            <div class="col-sm-6 my-5">
                <img src="nippyimage/signup1.jpg" class="signupimag" />
            </div>
            <div class="col-sm-6">
                <div class="card111">
                    <br><br>

                    <h3 class="text-center bbb"> <i class="fa-solid fa-user iconuser"></i><br>Sign Up</h3>
                    <?php
                    if(count($errors) == 1){
                        ?>
                    <div class="alert alert-danger text-center">
                        <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                    </div>
                    <?php
                    }elseif(count($errors) > 1){
                        ?>
                    <div class="alert alert-danger">
                        <?php
                            foreach($errors as $showerror){
                                ?>
                        <li><?php echo $showerror; ?></li>
                        <?php
                            }
                            ?>
                    </div>
                    <?php
                    }
                    ?>
                    <form action="" method="POST">
                        <!-- <?php echo $msg1; ?> -->
                        <div class="mb-4">

                            <input class="form-control control11" type="text" name="name" placeholder="Your Name" maxlength="20"
                                value="<?php if(isset($name)){ echo $name; }?>" />
                            <span class="text-danger"><?php if(!empty($name_error)){ echo $name_error; } ?></span>

                        </div>
                        <div class="mb-4">

                            <input
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                type="number" maxlength="10" class="form-control control11" name="mobile"
                                placeholder="Mobile Number" value="<?php if(isset($mobile)){ echo $mobile; }?>" />
                            <span class="text-danger"><?php if(!empty($mobile_error)){ echo $mobile_error; } ?></span>

                        </div>
                        <div class="mb-4">

                            <input class="form-control control11" type="email" maxlength="20" name="email" placeholder="Email Address"
                                value="<?php if(isset($email)){ echo $email; }?>" />
                            <span class="text-danger"><?php if(!empty($email_error)){ echo $email_error; } ?></span>

                        </div>
                        <div class="mb-4">

                            <input class="form-control control11" type="password" name="password" placeholder="Password"
                                value="<?php if(isset($password)){ echo $password; }?>" />
                            <span
                                class="text-danger"><?php if(!empty($password_error)){ echo $password_error; } ?></span>

                        </div>
                        <div class="mb-4">

                            <input class="form-control control11" type="password" name="cpassword"
                                placeholder="Confirm password"
                                value="<?php if(isset($cpassword)){ echo $cpassword; }?>" />
                            <span
                                class="text-danger"><?php if(!empty($cpassword_error)){ echo $cpassword_error; } ?></span>
                        </div>

                        <br>
                        <button type="submit" class="block" name="signup">Submit</button>
                        <div class="link login-link text-center">Already a member? <a href="login.php">Login
                                here</a>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <div class="col-sm-3"></div>
    <?php include 'footer.php' ?>