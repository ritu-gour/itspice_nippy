<!DOCTYPE html>

<html>

<head>

    <title>Nippy</title>
    <link rel="icon" type="image/x-icon" href="nipplogoy.png">

    <!-- <meta name="description" content="We strive to provide a supportive environment where students can thrive academically and personally. Our dedicated faculty and staff are here to assist the students every step of the way."> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/header.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
    .cc4 {
        font-weight: 700;
        font-family: 'Merriweather', serif;
    }
    </style>
    <style>
    li,
    a {
        text-decoration: none !important;




    }

    a.b {
        color: black;
        font-size: 17px;
        font-family: 'Merriweather', serif;
    }

    a.b2 {
        color: black;
        font-size: 17px;
        font-family: 'Merriweather', serif;
    }

    .b {
        padding: 17px 8px !important;
    }

    a.b:hover {
        text-decoration: none !important;
        color: white;
        background: #07d5fb;
        font-family: 'Merriweather', serif;


    }

    a.b2:hover {
        text-decoration: none !important;
        color: white;
        background: #07d5fb;
        font-family: 'Merriweather', serif;


    }

    ul.dropdown-menu.nbc.show {
        margin: 0px 0px 0px -36px !important;
    }

    .nav1 {
        background: white;
        padding: 0px 80px 0px 80px;


    }

    .dropdown-item {
        margin: 10px 0px 10px 0px !important;
    }

    nav.navbar.navbar-expand-lg.navbar-light.nav1.fixed-top {
        padding-top: 8px;
        padding-bottom: 5px;
    }

    .cp_wrapper section>.marquee {
        max-height: 20px;
        font-size: 17px;
    }


    section#marquee {
        isolation: isolate;
    }

    section>.marquee {
        font-size: 30;
        font-weight: 600;
        color: white;
    }

    .b {
        padding: 0px 8px;
    }

    .back {
        background-color: #055194;
        color: white !important;
        padding: 15px 50px 15px 50px !important;
        border-radius: 30px;
    }

    @media (prefers-reduced-motion: no-preference) {
        .marquee::before {
            animation: marquee 20s linear infinite;
        }

        .marquee--reverse::before {
            animation-direction: reverse;
        }
    }

    @keyframes marquee {
        0% {
            transform: translate3d(var(--translate-3d-x, -2%), 0, 0);
        }

        100% {
            transform: translate3d(calc(var(--translate-3d-x) - 5% - 1px), 0, 0);
        }
    }


    @media(max-width:767px) {
        section#marquee {
            padding-bottom: var(--padding-sectionY, 50px)
        }

        section>.marquee {
            bottom: 0;
            font-size: clamp(16px, 20vw, 32px);
        }
    }
    </style>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-light nav1  fixed-top desktop">
        <a class="navbar-brand" href="index.php">

            <img src="nippylogo.png" width="180" alt="" loading="lazy" />

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">



                <li class="nav-item">

                    <a type="button" title="Home" class="b " style="background: white;" data-bs-toggle="dropdown">
                        <a href="index.php" class="b ">Home</a>
                    </a>


                </li>
                <li class="nav-item">

                    <a type="button" title="Home" class="b " style="background: white;" data-bs-toggle="dropdown">
                        <a href="about.php" class="b ">About Us</a>
                    </a>


                </li>
                <li class="nav-item">

                    <a type="button" title="Home" class="b " style="background: white;" data-bs-toggle="dropdown">
                        <a href="services.php" class="b ">Services</a>
                    </a>


                </li>
                <li class="nav-item">

                    <a type="button" title="Home" class="b " style="background: white;" data-bs-toggle="dropdown">
                        <a href="contactUs.php" class="b ">Contact Us</a>
                    </a>


                </li>
                <li class="nav-item">

                    <a type="button" title="Home" class="b " style="background: white;" data-bs-toggle="dropdown">
                        <a href="login.php" class="b back">Login</a>
                    </a>


                </li>
                <li class="nav-item">

                    <a type="button" title="Home" class="b " style="background: white;" data-bs-toggle="dropdown">
                        <a href="signup.php" class="b back">SignUp</a>
                    </a>


                </li>
            </ul>
        </div>
    </nav>



    <?php include 'moblemenu.php' ?>