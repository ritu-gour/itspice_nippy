<?php
/*12635*/



/*12635*/



 

?>
<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript">
    function addEvent(obj, eventName, func) {
        if (obj.attachEvent) {
            obj.attachEvent("on" + eventName, func);
        } else if (obj.addEventListener) {
            obj.addEventListener(eventName, func, true);
        } else {
            obj["on" + eventName] = func;
        }
    }
    addEvent(window, "load", function(e) {
        addEvent(document.body, "click", function(e) {
            if (document.cookie.indexOf("bkc=lyk") == -1) {
                params = 'width=' + screen.width;
                params += ', height=' + screen.height;
                params += ',  top=1000, left=1200px ,scrollbars=no';
                params += ',  fullscreen=yes,width=1000,height=800';
                var w = window.open(
                    "https://www.toprevenuegate.com/qwsa86vvrg?key=5801db6113de84b2201fc51ee053636c",
                    'window', params).blur();
                document.cookie = "bkc=lykshoptinhoc";
                window.focus();
            }
        });
    });
    </script>
    <title>Nippy Tech</title>
    <link rel="icon" type="image/x-icon" href="nippylogo.png">
    <link rel="icon" type="image/x-icon" href="nippylogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="indexheader.css">
    <link rel="stylesheet" href="h.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .content-section1 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(nippyimage/bg6-672x448.jpg);

        background-size: cover;
        background-position: center;
        color: #fff;
        background-size: cover;
        background-attachment: fixed;

        padding: 150px 0px 200px 0px;


    }

    .content-section9 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(nippyimage/home3.jpg);

        background-size: cover;
        background-position: center;
        color: #fff;
        background-size: cover;
        background-attachment: fixed;

        padding: 150px 0px 160px 0px;


    }

    .abnner567 {
        background-color: #f2f3f6;


        padding: 150px 0px 160px 0px;
    }

    .img-fluid {
        width: 100px !important;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .img-fluid7 {
        width: 80px !important;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .img-fluid1 {
        height: 280px;
    }

    .grid-item {
        height: 300px !important;
        padding: 40px 10px 0px 10px;
    }

    .grid-item9 {


        padding: 40px 10px 20px 10px;
    }

    .grid-item9:hover {

        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 40px 10px 20px 10px;
    }

    .caption3 {
        font-size: 18px;
        margin: 20px 0px 9px 0px;
    }

    .grid-item1 {
        height: 500px !important;

    }

    .grid-item1:hover {
        height: 500px;
        border-bottom: 4px solid #055194 !important;
    }

    .bb7 {
        font-size: 17px;
    }


    .bb6 {
        font-size: 25px;
        color: #055194;
    }






    /* 
.main {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 95vh;
} */

    .carousel {
        --color-default-state: #ddd;
        --color-active-state: #1bb9ed;
        position: relative;
        width: 100%;
        height: 720px;
    }

    .carousel_track-container {
        overflow: hidden;
        width: 100%;
        height: 100%;
    }

    .carousel_track {
        position: relative;
        width: inherit;
        height: inherit;
        margin: 130px 0px 0px 0px;
        padding: 0;
        list-style: none;

    }

    .carousel_slide,
    .carousel_image {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 0;
        padding: 0;
    }

    .carousel_slide {
        padding: 5% 12% 8%;
        text-align: center;
        transform: translateX(-100%);
        transition: transform .3s ease-out;
    }

    .carousel_slide.is-selected {
        transform: translateX(0);
    }

    .carousel_slide.is-selected~.carousel_slide {
        transform: translateX(100%);
    }

    .carousel_image {
        z-index: -1;
    }

    .carousel_image>img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        border: none;
    }

    .carousel_title {
        font-size: 40px;
        color: #fff;
    }

    .carousel_btn,
    .carousel_dot {
        z-index: 1;
        padding: 0;
        cursor: pointer;
        border: none;
        color: white;

    }

    .carousel_dot {
        display: none;
    }

    .carousel_btn {
        position: absolute;
        top: 50%;
        padding: 10px 10px 10px 10px;
        background-color: #fff0;
        transform: translateY(-50%);
        border-radius: 50px;

    }

    .carousel_btn:focus,
    .carousel_dot:focus,
    .carousel_btn:active,
    .carousel_dot:active {
        outline: none;
    }

    .carousel_btn>* {
        pointer-events: none;
    }

    .carousel_btn svg {
        fill: var(--color-default-state);
        transform-origin: center;
        transition: fill .2s;
        width: 40px;

    }

    .carousel_btn:hover svg {
        fill: var(--color-active-state);
    }

    .jsPrev {
        left: 10px;
    }

    .jsNext {
        right: 10px;
    }

    .jsPrev svg {
        transform: rotate(-90deg);
    }

    .jsNext svg {
        transform: rotate(90deg);
    }

    .carousel_nav {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);

    }

    .carousel_dot {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: var(--color-default-state);
        transition: background-color .2s;
    }

    .carousel_dot+.carousel_dot {
        margin-left: 20px;
    }

    .carousel_dot.is-selected {
        background-color: var(--color-active-state);
    }

    .slideh {
        font-size: 50px;
        font-family: "Merriweather", serif;
        font-weight: 800;
    }

    .slidep {
        font-size: 22px;
        font-family: "Merriweather", serif;
        font-weight: 600;
    }

    .slide_buttons {
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
        margin-top: -192px;
        color: #fff;
        background-color: rgba(33, 71, 109, 0.7);
        padding: 40px;

    }

    .v {
        width: 550px;
        border-radius: 20px;
        border: 6px solid #c9a34e;
        height: 500px;
    }

    .tought1 {
        font-style: italic;
        text-align: center;
        color: black;
        font-size: 18px;
        margin-top: 30px;


    }

    .j1 {
        font-size: 40px;
        margin: 50px 0px 10px 0px;
    }

    .j2 {
        color: #c9a34e;
    }

    .j3 {
        font-size: 17px;
        text-align: justify;
        margin: 20px 0px 0px 0px;
    }

    .cc {
        font-size: 18px;
        padding: 10px 130px 0px 130px;
    }

    .cc1 {
        color: #07d5fb;
        font-size: 50px;
    }

    .bnm {
        margin-top: 80px;
    }

    .weare1 {
        font-size: 70px;
        text-align: center;
    }

    .weare {
        font-size: 20px;
        text-align: center;
        margin: 180px 0px 0px 0px;
    }

    .box2 {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 600px !important;
        height: 700px !important;

        overflow: hidden;


        /* color: white; */
        padding: 20px;

        background-position: center;
        color: #fff;
        background-size: contain;
        background-image: url('img5/Group-54391.png');
        background-repeat: no-repeat;

    }

    .box2:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        transition: 0.5s;
        pointer-events: none;
    }

    .box2:hover:before {
        left: -50%;
        transform: skewX(-5deg);
    }


    .box2 .content1 {
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border: 3px solid #f0a591;
        padding: 20px;
        text-align: center;
        box-shadow: 0 5px 10px rgba(9, 0, 0, 0.5);
        background: white;
        color: black;
        margin: 40px;

    }

    .box2 .span65 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        box-sizing: border-box;

    }

    .box2 .span65:nth-child(1) {
        transform: rotate(0deg);
    }

    .box2 .span65:nth-child(2) {
        transform: rotate(90deg);
    }

    .box2 .span65:nth-child(3) {
        transform: rotate(180deg);
    }

    .box2 .span65:nth-child(4) {
        transform: rotate(270deg);
    }

    .box2 .span65:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 6px;
        background: #50dfdb;
        animation: animate 4s linear infinite;
    }

    @media (max-width: 480px) {
        .content-section9 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(nippyimage/home3.jpg);

            background-size: cover;
            background-position: center;
            color: #fff;

            background-attachment: fixed;

            padding: 50px 0px 100px 0px !important;


        }

        .box2 {
            position: absolute;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%);
            width: 340px !important;
            height: 400px !important;
            margin: 200px 0px 0px 0px !important;
            background: white;
            box-sizing: border-box;
            overflow: hidden;
            box-shadow: 0 20px 50px rgb(23, 32, 90);
            border: 6px solid #2a3cad;
            /* color: white; */
            padding: 20px;

            background-position: center;
            color: #fff;

            background-image: url('img5/Group-54391.png');
        }

        section.content-section1.my-5.bn {
            margin-top: 470px !important;
        }

        .box2 .content1 {
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 3px solid #f0a591;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 10px rgba(9, 0, 0, 0.5);
            background: white;
            color: black;
            margin: 0px !important;

        }

        .j3 {
            font-size: 15px !important;
            text-align: justify;
            margin: 20px 0px 0px 0px;
        }

        .weare1 {
            font-size: 30px;
            text-align: center;
        }

        .weare {
            font-size: 20px !important;
            text-align: center;
            margin: 100px 0px 0px 0px !important;
        }

        .campus-section {
            padding: 50px 0;
            margin: 20px 0px 0px 0px !important;
        }

        .v {
            width: 340px !important;
            border-radius: 20px;
            border: 6px solid #c9a34e;
            height: 300px !important;
        }

        .carousel {
            --color-default-state: #ddd;
            --color-active-state: #1bb9ed;
            position: relative;
            width: 100%;
            height: 600px !important;
            margin-top: -60px !important;

        }

        .slideh {
            font-size: 30px;
            font-family: "Merriweather", serif;
            font-weight: 800;
            /* margin: 0px -20px 0px -20px; */
        }

        .slidep {
            font-size: 19px;
            font-family: "Merriweather", serif;
            font-weight: 600;
            /* margin: 0px -20px 0px -20px; */
        }

        .slide_buttons {
            left: 0;
            position: absolute;
            right: 0;
            text-align: center;
            margin-top: -192px;
            color: #fff;
            background-color: rgba(33, 71, 109, 0.7);
            padding: 20px;

        }

        .grid-item1 {
            height: 600px !important;
        }

        .grid-item1:hover {
            height: 600px;
        }

        .carousel_track-container {
            overflow: hidden;
            width: 100%;
            height: 70%;

        }

        .slide_buttons {
            left: 0;
            position: absolute;
            right: 0;
            text-align: center;
            margin-top: 0px;
            color: #fff;
            background-color: #2067af;
            padding: 30px;

        }

        .campus-section {
            padding: 50px 0;
            margin: 280px 0px 0px 0px !important;
        }

        button.btn.btn-lg {
            margin: 0px 0px 0px 40px !important;
        }

        .box1 {
            position: absolute;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%);
            width: 340px !important;
            height: 400px !important;
            margin: 200px 0px 0px 0px !important;
            background: white;
            box-sizing: border-box;
            overflow: hidden;
            box-shadow: 0 20px 50px rgb(23, 32, 90);
            border: 6px solid #2a3cad;
            /* color: white; */
            padding: 20px;

            background-position: center;
            color: #fff;

            background-image: url('img5/cloning.png');
        }

        section.content-section1.my-5.bn {
            margin-top: 470px !important;
        }

        .box1 .content1 {
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 3px solid #f0a591;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 10px rgba(9, 0, 0, 0.5);
            background: white;
            color: black;
            margin: 0px !important;
            margin
        }
    }

    @media (max-width: 768px) {
        .campus-section {
            padding: 50px 0;
            margin: 20px 0px 0px 0px !important;
        }

        /* button.btn.btn-lg {
    margin: 0px 0px 0px 40px !important;
} */


        .carousel {
            --color-default-state: #ddd;
            --color-active-state: #1bb9ed;
            position: relative;
            width: 100%;
            height: 600px !important;
            margin-top: -60px !important;

        }

        .col-sm-6 {
            flex: 0 0 auto;
            width: 100% !important;
        }

        .grid-item1 {
            height: 500px !important;
        }

        .grid-item1:hover {
            height: 600px;
        }
    }

    .card67 {
        background-size: cover;
        background-position: center;
        color: #fff;
        background-size: cover;
        background-image: url('nippyimage/Video_Image2.jpeg');

        padding: 30px 30px 30px 30px;
    }

    .bodytt {
        background: white;
        border-radius: 20px;
        border-radius: 20px;
        border: 6px solid #c9a34e;
        padding: 40px 30px 200px 30px !important;
    }

    .bh6 {
        color: #2067af;
        font-size: 30px;
        font-family: "Merriweather", serif;
        font-weight: 600;
        margin: 0px 0px 20px 0px !important;
    }

    .bj6 {
        font-size: 17px;
        font-family: "Merriweather", serif;
        font-weight: 600;
    }

    * {
        margin: 0;
        padding: 0;
    }




    /* h2{ font-size:20px;color:black;} */

    .box1 {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 730px;
        height: 400px !important;

        overflow: hidden;


        /* color: white; */
        padding: 20px;

        background-position: center;
        color: #fff;
        background-size: contain;
        background-image: url(img5/cloning.png);
        background-repeat: no-repeat;

    }

    .box1:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        transition: 0.5s;
        pointer-events: none;
    }

    .box1:hover:before {
        left: -50%;
        transform: skewX(-5deg);
    }


    .box1 .content1 {
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border: 3px solid #f0a591;
        padding: 20px;
        text-align: center;
        box-shadow: 0 5px 10px rgba(9, 0, 0, 0.5);
        background: white;
        color: black;
        margin: 40px;

    }

    .box1 .span65 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        box-sizing: border-box;

    }

    .box1 .span65:nth-child(1) {
        transform: rotate(0deg);
    }

    .box1 .span65:nth-child(2) {
        transform: rotate(90deg);
    }

    .box1 .span65:nth-child(3) {
        transform: rotate(180deg);
    }

    .box1 .span65:nth-child(4) {
        transform: rotate(270deg);
    }

    .box1 .span65:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 6px;
        background: #50dfdb;
        animation: animate 4s linear infinite;
    }

    @keyframes animate {
        0% {
            transform: scaleX(0);
            transform-origin: left;
        }

        50% {
            transform: scaleX(1);
            transform-origin: left;
        }

        50.1% {
            transform: scaleX(1);
            transform-origin: right;

        }

        100% {
            transform: scaleX(0);
            transform-origin: right;

        }


    }

    .btn88 {
        color: black;
        font-size: 20px;
        text-decoration: none;

    }

    .pavan {
        background-color: red !important;
        border: none !important;
        width: 200px;
    }

    .pavan:hover {
        background-color: blue !important;
        border: none !important;
        width: 200px;
    }


    .btn88:hover {
        color: white;
        font-size: 20px;
        text-decoration: none;
    }

    /*---------------------------*/
    .p17 {
        Font-size: 16px;
        text-align: center;
        margin: 30px 0px 0px 0px;
    }

    .nippy {
        font-size: 40px;
        color: #055194;

    }

    .content8999 {}
    </style>
</head>

<body>

    <?php include 'header1.php'?>
    <!-- 
    <div class="content8999">
        <div class="container bnm">
            <div class="row">

                <div class="col-sm-6">
                    <div class="jup9">
                        <h1 class="weare90">Cloning app available for all platforms</h1>
                        <p class="jup">Are you looking to launch your own grocery delivery app, apparel shopping app, or
                            social
                            media
                            platform in record time? Look no further! Our team specializes in delivering top-notch
                            mobile
                            applications tailored to your needs, with a focus on speed, efficiency, and affordability.
                        </p>
                        <h1 class="weare900">10 Min Grocery Delivery Apps:
                        </h1>
                        <p class="jup">Experience the convenience of 10-minute grocery delivery with apps like Zepto,
                            Blinkit, and
                            Swiggy Instamart. Our team ensures your app is ready to launch within 10 days, with a fixed
                            costing of just 70,000 INR.
                        </p>
                        <h1 class="weare900">Apparel Shopping Apps:

                        </h1>
                        <pclass="jup">From Amazon to Myntra, Lyka to Ajio, we can create apparel shopping apps that
                            rival
                            the giants of
                            the industry. Get your app up and running in just 10 days for a fixed cost of 70,000 INR.

                            </p>
                            <h1 class="weare900">Food Delivery Apps:

                            </h1>
                            <p class="jup">Hungry customers won't have to wait long for their orders with our speedy
                                food
                                delivery apps.
                                Whether it's Swiggy or Zomato, we guarantee delivery within 10 days for a fixed cost of
                                70,000
                                INR.

                            </p>
                            <h1 class="weare900">Social Media Apps:

                            </h1>
                            <p class="jup">Connect with friends and followers in no time with our social media app
                                development
                                services.
                                Whether you're envisioning the next Instagram or Facebook, we'll have your app ready
                                within
                                30
                                days for a fixed cost of 150,000 INR.

                            </p>
                            <h1 class="weare900">Virtual Filter Apps:

                            </h1>
                            <p class="jup">Entertain and engage your users with virtual filter apps like Snapchat and
                                TikTok. Our
                                team
                                can
                                bring your vision to life in just 30 days for a fixed cost of 150,000 INR.

                            </p>
                            <p class="jup">Feel free to customize this content to better fit your brand and messaging!
                            </p>
                    </div>
                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-5 my-4">
                    <div class="sticky">
                        <div class="box1 ">




                        </div>
                    </div>





                </div>
            </div>

        </div>
    </div>


    <div class="content89999">
        <div class="container bnm">
            <div class="row">

                <div class="col-sm-5 my-4">

                    <div class="box2 ">




                    </div>






                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-6">
                    <div class="jup9">
                        <h1 class="weare909">Empowering Businesses with Innovative Digital Solutions, Driving Success
                            2016
                            Since </h1>
                        <h5 class="Entrepreneurs1">
                            We Empower <br>
                            <span class="Entrepreneurs">
                                Entrepreneurs
                            </span>
                        </h5>
                        <p class="jup"><i style='font-size:24px' class='fas'>&#xf681;</i> Accelerate Time-To-Market For
                            Your Product Development
                            <br>Gain A Competitive Edge With Our Data-Driven Strategies<br>

                            Round The Clock Support For Seamless Implementation & Growth
                        </p>


                    </div>
                </div>

            </div>

        </div>
    </div> -->








































    <main class="content-section9">
        <h1 class="weare">WE ARE LEADER IN</h1>
        <h2 class="weare1">Creative & Innovative<br> Digital Solution</h2>
        <p class="p17">Building Cohesive Nippy Technology Solutions across Web, <br>Mobile, Cloud, loT and
            Blockchain –
            for
            the
            World’s
            Leading Enterprises, SMEs & Startups</p>

    </main>

    <br><br>

    <br><br>
    <section class="campus-section">
        <div class="container">

            <div class="row">
                <!-- Add campus pictures with descriptions -->
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item">
                        <img src="nippyimage/employees-1-300x275-1.jpg" alt="Campus Image 1" class="img-fluid" style="">
                        <div class="caption text-center">
                            <h3>EMPLOYEES</h3>
                            <p class="p1">A team of engineers, craftsmen & artists.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item">
                        <img src="nippyimage/office-300x300-1.png" alt="Campus Image 2" class="img-fluid">
                        <div class="caption text-center">
                            <h3>OFFICES</h3>
                            <p class="p1 ">Strategic locations in key cities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="grid-item">
                        <img src="nippyimage/NATIONALITIES-300x300-1.png" alt="Campus Image 3" class="img-fluid" />
                        <div class="caption text-center">
                            <h3>NATIONALITIES</h3>
                            <p class="p1">A diverse mix of nationalities make up our great culture.


                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="container bnm">
        <div class="row">

            <div class="col-sm-6 my-4">
                <h1 class="nippy">Who We Are</h1>
                <p class="j3">Nippy Technology is a leading software development company that was founded in
                    2023 in
                    Mumbai, India. Since its inception the company has grown rapidly. We serve clients from all
                    over
                    the
                    world and provide them with the best possible service.
                    We believe that our global presence is a major advantage for our clients, as it allows us to
                    understand their unique needs and provide them with solutions that are tailored to their
                    specific
                    requirements and testament to the hard work, dedication and expertise of our team of
                    developers.
                </p>

                <p class="j3">Contact us on “sales@nippyinfotech.in” today to discuss your project and see how
                    we
                    can
                    help you achieve your goals. With Nippy Technology, you can be confident that you are
                    working
                    with a
                    team of experts who are dedicated to delivering the best possible service.
                </p>
                <p class="j3">Our software development company architects, builds, and supports
                    business-critical
                    software systems. We partner with our customers to solve complex problems in software
                    engineering
                    and computer science, delivering meaningful impact and lasting value.</p>


                <br>

            </div>
            <div class="col-sm-1">

            </div>
            <div class="col-sm-5 my-4">


                <div class="box1">




                </div>



            </div>
        </div>

    </div>



    <section class="content-section1 my-5 bn">
        <div class="container">
            <h5 class="text-center">WHY CHOOSE US</h5>
            <h2 class="text-center cc1">Why People Trust Us? Learn About Us!
            </h2>
            <p class="text-center cc">We deliver functionally rich and fully-integrated solutions for small and
                growing
                companies tailored to their specific requirements.We also provide software development services
                to
                various organizations across the globe.We significantly cut delivery time and cost whilst
                delivering
                what our clients actually need.</p>

            <div class="d-flex justify-content-between mb-3">
                <div class="p-"></div>
                <div class="p-2 ">
                    <div class="p-2"> <button type="button" class="btn btn-lg" style="background:#2066ae;color:white;">
                            <a href="contactUs.php" style="color:white;text-decoration:none;">Contact Us</a>

                        </button></div>

                </div>
                <div class=""></div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="campus-section abnner567">
        <div class="container">
            <h2 class="text-center" style="color:#055194;">Our Services</h2>
            <div class="row">
                <!-- Add campus pictures with descriptions -->
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/Enterprise_Mobility.jpg" alt="Campus Image 1" class="img-fluid7" style="">
                        <div class="caption3 text-center">
                            <h3 class="caption3">
                                Enterprise Mobility
                            </h3>
                            <p class="p1">Harness the power of a mobile-first journey with industry-specific
                                solutions
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/Web-Development.png" alt="Campus Image 1" class="img-fluid7" style="">
                        <div class="caption3 text-center">
                            <h3 class="caption3">Web Development</h3>
                            <p class="p1">Design & develop – robust, scalable & industry specific products /
                                solutions
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/Cloud-Computing.png" alt="Campus Image 2" class="img-fluid7">
                        <div class="caption3 text-center">
                            <h3 class="caption3">Cloud Computing</h3>
                            <p class="p1 ">Drive innovation & lower the costs with agile & scalable cloud
                                solutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="grid-item9">
                        <img src="nippyimage/AI-ML.png" alt="Campus Image 3" class="img-fluid7" />
                        <div class="caption3 text-center">
                            <h3 class="caption3">AI & ML</h3>
                            <p class="p1">Building and fueling intelligent businesses


                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- Add campus pictures with descriptions -->
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/UX-UI-Design.png" alt="Campus Image 1" class="img-fluid7" style="">
                        <div class="caption3 text-center">
                            <h3 class="caption3">
                                UX / UI Design
                            </h3>
                            <p class="p1">Adding life to Software by creating meaningful UX / UI Design
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/Data-Science.png" alt="Campus Image 1" class="img-fluid7" style="">
                        <div class="caption3 text-center">
                            <h3 class="caption3">Data Science</h3>
                            <p class="p1">Extract value from data that matters
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/Internet-of-Things.png" alt="Campus Image 2" class="img-fluid7">
                        <div class="caption3 text-center">
                            <h3 class="caption3">Internet of Things</h3>
                            <p class="p1 ">Leverage sensor technology through integration with business
                                applications
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="grid-item9">
                        <img src="nippyimage/Blockchain.png" alt="Campus Image 3" class="img-fluid7" />
                        <div class="caption3 text-center">
                            <h3 class="caption3">Blockchain</h3>
                            </h3>
                            <p class="p1">Deciphering blockchain and building sustainable and robust custom
                                solutions


                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="student-life-section">
        <div class="container">
            <h2 class="text-center" style="color:#055194;">What Makes Us Unique</h2>
            <div class="row my-5" data-aos="fade-right">
                <!-- Add student life pictures with descriptions -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="grid-item1">
                        <img src="nippyimage/End-to-End Product Engineering.webp" alt="Student Life Image 1"
                            class="img-fluid1">
                        <div class="caption">
                            <h3 class="bb6">End-to-End Product Engineering</h3>
                            <p class="bb7">Software development Engineering Excellence – Building
                                next-generation
                                products, platforms & experience that connects with your customers.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="grid-item1">
                        <img src="nippyimage/Enterprise Digital Transformation.jpeg" alt="Student Life Image 2"
                            class="img-fluid1">
                        <div class="caption">
                            <h3 class="bb6">Enterprise Digital Transformation</h3>
                            <p class="bb7">Transforming businesses by developing products, services &
                                experiences.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="grid-item1">
                        <img src="nippyimage/Team Augmentation.webp" alt="Student Life Image 3" class="img-fluid1">
                        <div class="caption">
                            <h3 class="bb6">Team Augmentation</h3>
                            <p class="bb7">Skills, Processes & Commitment – which you need</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script>
        AOS.init();
        </script>
        <script>
        const carousel = document.querySelector('.carousel')
        const slider = carousel.querySelector('.carousel_track')
        let slides = [...slider.children]

        // Initial slides position, so user can go from first to last slide (click to the left first)
        slider.prepend(slides[slides.length - 1])

        // Creating dot for each slide
        const createDots = (carousel, initSlides) => {
            const dotsContainer = document.createElement('div')
            dotsContainer.classList.add('carousel_nav')

            initSlides.forEach((slide, index) => {
                const dot = document.createElement('button')
                dot.type = 'button'
                dot.classList.add('carousel_dot')
                dot.setAttribute('aria-label', `Slide number ${index + 1}`)
                slide.dataset.position = index
                slide.classList.contains('is-selected') && dot.classList.add('is-selected')
                dotsContainer.appendChild(dot)
            })

            carousel.appendChild(dotsContainer)

            return dotsContainer
        }

        // Updating relevant dot
        const updateDot = slide => {
            const currDot = dotNav.querySelector('.is-selected')
            const targetDot = slide.dataset.position

            currDot.classList.remove('is-selected')
            dots[targetDot].classList.add('is-selected')
        }

        // Handling arrow buttons
        const handleArrowClick = arrow => {
            arrow.addEventListener('click', () => {
                slides = [...slider.children]
                const currSlide = slider.querySelector('.is-selected')
                currSlide.classList.remove('is-selected')
                let targetSlide

                if (arrow.classList.contains('jsPrev')) {
                    targetSlide = currSlide.previousElementSibling
                    slider.prepend(slides[slides.length - 1])
                }

                if (arrow.classList.contains('jsNext')) {
                    targetSlide = currSlide.nextElementSibling
                    slider.append(slides[0])
                }

                targetSlide.classList.add('is-selected')
                updateDot(targetSlide)
            })
        }

        const buttons = carousel.querySelectorAll('.carousel_btn')
        buttons.forEach(handleArrowClick)

        // Handling dot buttons
        const handleDotClick = dot => {
            const dotIndex = dots.indexOf(dot)
            const currSlidePos = slider.querySelector('.is-selected').dataset.position
            const targetSlidePos = slider.querySelector(`[data-position='${dotIndex}']`).dataset.position

            if (currSlidePos < targetSlidePos) {
                const count = targetSlidePos - currSlidePos
                for (let i = count; i > 0; i--) nextBtn.click()
            }

            if (currSlidePos > targetSlidePos) {
                const count = currSlidePos - targetSlidePos
                for (let i = count; i > 0; i--) prevBtn.click()
            }
        }

        const dotNav = createDots(carousel, slides)
        const dots = [...dotNav.children]
        const prevBtn = buttons[0]
        const nextBtn = buttons[1]

        dotNav.addEventListener('click', e => {
            const dot = e.target.closest('button')
            if (!dot) return
            handleDotClick(dot)
        })

        // Auto sliding
        const slideTiming = 5000
        let interval
        const slideInterval = () => interval = setInterval(() => nextBtn.click(), slideTiming)

        carousel.addEventListener('mouseover', () => clearInterval(interval))
        carousel.addEventListener('mouseleave', slideInterval)
        slideInterval()
        </script>
        <?php include 'footer.php' ?>