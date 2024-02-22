<!DOCTYPE html>
<html>

<head>
    <title>Mega Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="h.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    /* body {
        line-height: 1.5;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        overflow-x: hidden;
    } */
    .back {
        background-color: #055194;
        color: white !important;
        padding: 15px 30px 15px 30px !important;
        border-radius: 4px;
    }

    * {
        margin: 0;
        box-sizing: border-box;
    }


    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .v-center {
        align-items: center;
        margin: 0px 40px 0px 40px;
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    a {
        text-decoration: none;
    }

    /* header */
    .header {
        display: block;
        width: 100%;
        position: relative;
        z-index: 99;
        padding: 10px;

    }

    .header .item-left {
        flex: 0 0 17%;
    }

    .header .logo a {
        font-size: 30px;
        color: #000000;
        font-weight: 700;
        text-decoration: none;
    }

    hr.hy8 {
        margin: 5px 5px 5px 0px;
    }

    /* .linnnn {
        border-bottom: 1px solid red;
    } */

    .header .item-center {
        flex: 0 0 66%;
        margin: 0px 0px 0px 10px !important;
    }



    .header .item-right {
        flex: 0 0 17%;
        display: flex;
        justify-content: flex-end;
    }

    .header .item-right a {
        text-decoration: none;
        font-size: 16px;
        color: #555555;
        display: inline-block;
        margin-left: 10px;
        transition: color 0.3s ease;
    }

    .header .menu>ul>li {
        display: inline-block;
        line-height: 50px;
        margin-left: 25px;
    }

    .header .menu>ul>li>a {
        font-size: 15px;
        font-weight: 500;
        color: #000000;
        position: relative;
        text-transform: capitalize;
        transition: color 0.3s ease;
    }

    .header .menu>ul>li .sub-menu {
        position: absolute;
        z-index: 500;
        background-color: #ffffff;
        box-shadow: -2px 2px 70px -25px rgba(0, 0, 0, 0.3);
        padding: 20px 30px;
        transition: all 0.5s ease;
        margin-top: 25px;
        opacity: 0;
        visibility: hidden;
    }

    @media(min-width: 992px) {
        .header .menu>ul>li.menu-item-has-children:hover .sub-menu {
            margin-top: 0;
            visibility: visible;
            opacity: 1;
        }


    }

    @media (max-width: 480px) {

        .header .item-left,
        .header .item-right {
            flex: 0px !important;
        }

        .back {
            background-color: white;
            color: black !important;
            padding: 0px 0px 0px 13px !important;
            border-radius: 4px;
        }
    }


    @media (max-width: 768px) {

        .header .item-left,
        .header .item-right {
            flex: 0px !important;
        }

        .back {
            background-color: white;
            color: black !important;
            padding: 0px 0px 0px 13px !important;
            border-radius: 4px;
        }
    }

    .header .menu>ul>li .sub-menu>ul>li {
        line-height: 1;
    }

    .header .menu>ul>li .sub-menu>ul>li>a {
        display: inline-block;
        padding: 10px 0;
        font-size: 15px;
        color: #555555;
        transition: color 0.3s ease;
        text-decoration: none;
        text-transform: capitalize;
    }

    .header .menu>ul>li .single-column-menu {
        min-width: 280px;
        max-width: 350px;
        margin: 25px 0px 0px 0px !important;
    }

    i.fa.fa-angle-down,
    i.fas.fa-angle-down {
        font-size: 10px;
        margin-left: 7px;
    }


    .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul>li {
        line-height: 1;
        display: block;
    }

    .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul>li>a {
        padding: 10px 0;
        display: inline-block;
        font-size: 15px;
        color: #555555;
        transition: color 0.3s ease;
    }

    .header .menu>ul>li .sub-menu.mega-menu {
        left: 50%;
        transform: translateX(-50%);
    }

    .header .menu>ul>li .sub-menu.mega-menu-column-4 {
        max-width: 1100px;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        padding: 20px 15px;
        margin: 25px 0px 0px 0px !important;
    }

    .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item {
        flex: 0 0 25%;
        padding: 0 15px;
    }

    .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item .title {
        font-size: 16px;
        color: #035d9b;
        font-weight: 500;
        line-height: 1;
        padding: 10px 0;
    }

    .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item.text-center .title {
        text-align: center;
    }

    a {
        text-decoration: none !important;
    }

    .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul>li>a:hover,
    .header .menu>ul>li .sub-menu>ul>li>a:hover,
    .header .item-right a:hover,
    .header .menu>ul>li:hover>a {
        color: #035d9b;
    }

    /* banner section */
    .banner-section {
        background-image: url('../img/banner.jpg');
        background-size: cover;
        background-position: center;
        height: 700px;
        width: 100%;
        display: block;
    }

    .mobile-menu-head,
    .mobile-menu-trigger {
        display: none;
    }

    /*responsive*/
    @media(max-width: 991px) {

        .header .item-center {
            order: 3;
            flex: 0 0 100%;
        }

        .header .item-left,
        .header .item-right {
            flex: 0 0 auto;
        }

        .v-center {
            justify-content: space-between;
        }

        .header .mobile-menu-trigger {
            display: flex;
            height: 30px;
            width: 30px;
            margin-left: 15px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
        }

        .header .mobile-menu-trigger span {
            display: block;
            height: 2px;
            background-color: #333333;
            width: 24px;
            position: relative;
        }

        .header .mobile-menu-trigger span:before,
        .header .mobile-menu-trigger span:after {
            content: '';
            position: absolute;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #333333;
        }

        .header .mobile-menu-trigger span:before {
            top: -6px;
        }

        .header .mobile-menu-trigger span:after {
            top: 6px;
        }

        .header .item-right {
            align-items: center;
        }

        .header .menu {
            position: fixed;
            width: 320px;
            background-color: #ffffff;
            left: 0;
            top: 0;
            height: 100%;
            overflow: hidden;
            transform: translate(-100%);
            transition: all 0.5s ease;
            z-index: 1099;
        }

        .header .menu.active {
            transform: translate(0%);
        }

        .header .menu>ul>li {
            line-height: 1;
            margin: 0;
            display: block;
        }

        .header .menu>ul>li>a {
            line-height: 50px;
            height: 50px;
            padding: 0 50px 0 15px;
            display: block;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .header .menu>ul>li>a i {
            position: absolute;
            height: 50px;
            width: 50px;
            top: 0;
            right: 0;
            text-align: center;
            line-height: 50px;
            transform: rotate(-90deg);
        }

        .header .menu .mobile-menu-head {
            display: flex;
            height: 50px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 501;
            position: sticky;
            background-color: #ffffff;
            top: 0;
        }

        .header .menu .mobile-menu-head .go-back {
            height: 50px;
            width: 50px;
            border-right: 1px solid rgba(0, 0, 0, 0.1);
            cursor: pointer;
            line-height: 50px;
            text-align: center;
            color: #000000;
            font-size: 16px;
            display: none;
        }

        .header .menu .mobile-menu-head.active .go-back {
            display: block;
        }

        .header .menu .mobile-menu-head .current-menu-title {
            font-size: 15px;
            font-weight: 500;
            color: #000000;
        }

        .header .menu .mobile-menu-head .mobile-menu-close {
            height: 50px;
            width: 50px;
            border-left: 1px solid rgba(0, 0, 0, 0.1);
            cursor: pointer;
            line-height: 50px;
            text-align: center;
            color: #000000;
            font-size: 25px;
        }

        .header .menu .menu-main {
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .header .menu>ul>li .sub-menu.mega-menu,
        .header .menu>ul>li .sub-menu {
            visibility: visible;
            opacity: 1;
            position: absolute;
            box-shadow: none;
            margin: 0;
            padding: 15px;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding-top: 65px;
            max-width: none;
            min-width: auto;
            display: none;
            transform: translateX(0%);
            overflow-y: auto;
        }

        .header .menu>ul>li .sub-menu.active {
            display: block;
        }

        @keyframes slideLeft {
            0% {
                opacity: 0;
                transform: translateX(100%);
            }

            100% {
                opacity: 1;
                transform: translateX(0%);
            }
        }

        @keyframes slideRight {
            0% {
                opacity: 1;
                transform: translateX(0%);
            }

            100% {
                opacity: 0;
                transform: translateX(100%);
            }
        }

        .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item img {
            margin-top: 0;
        }

        .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item.text-center .title {
            margin-bottom: 20px;
        }

        .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item.text-center:last-child .title {
            margin-bottom: 0px;
        }

        .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item {
            flex: 0 0 100%;
            padding: 0px;
        }

        .header .menu>ul>li .sub-menu>ul>li>a,
        .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul>li>a {
            display: block;
        }

        .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul {
            margin-bottom: 15px;
        }

        .menu-overlay {
            position: fixed;
            background-color: rgba(0, 0, 0, 0.5);
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1098;
            visibility: hidden;
            opacity: 0;
            transition: all 0.5s ease;
        }

        .menu-overlay.active {
            visibility: visible;
            opacity: 1;
        }
    }

    .clone1 {
        font-size: 15px;
        margin: 0px 0px 30px 0px;
    }

    .clone3 {
        color: black;
        margin: 0px 0px 0px 10px;

    }
    </style>
</head>

<body>
    <!-- header start -->
    <header class="header">
        <div class="">
            <div class="row v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a class="navbar-brand" href="index.php">

                            <img src="nippylogo.png" width="180" alt="" loading="lazy" />

                        </a>
                        <!-- <img src="nippylogo.png" width="180" alt="" loading="lazy" /> -->
                    </div>
                </div>
                <!-- menu start here -->
                <div class="header-item item-center">
                    <div class="menu-overlay"></div>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="menu-main">
                            <!-- <li>
                                <a href="index.php">Home</a>
                            </li> -->

                            <li class="menu-item-has-children">
                                <a href="#">Products <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    <div class="list-item">
                                        <h4 class="title mb-4">RENTALS AND LISTINGS</h4>
                                        <ul>
                                            <li><b class="RealEstate">Real
                                                    Estate</b><br>
                                                <img src="img5/zillow-clone.png" class="clone2 my-" />

                                                <a href="#" class="clone3">Zillow Clone</a>

                                            </li>
                                            <li> <img src="img5/Airbnb-clone.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Airbnb Clone</a>
                                            </li>
                                            <li><img src="img5/Fiverr-clone-online-freelance-marketplace.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Fiverr Clone</a>
                                            </li>
                                            <li><img src="img5/UpWork-clone-Freelance-marketplace.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">UpWork Clone </a>
                                            </li>

                                        </ul>
                                        <br> <br> <br>
                                        <h4 class="title mb- my-">NETWORK & OTT</h4>
                                        <ul>
                                            <li>
                                                <b class="RealEstate">Microbloggin</b><br>
                                                <img src="img5/pngtree-twitter-social-media-round-icon-png-image_6315985-1.png"
                                                    class="clone2 my-" />
                                                <a href="#" class="clone3">Twitter Clone </a>
                                            </li>
                                            <li> <img src="img5/Tiktok-clone-video-dubbing-platform.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">TikTok Clone</a>
                                            </li>
                                            <li><img src="img5/facebook-icon-free-png.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Facebook Clone</a>
                                            </li>
                                            <li>
                                                <b class="RealEstate">OTT</b><br><img src="img5/Netflix-icon.png"
                                                    class="clone2 my-" />
                                                <a href="#" class="clone3">Netflix Clone </a>
                                            </li>
                                            <li>
                                                <img src="img5/Threads-clone-logo.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Threads Clone</a>
                                            </li>

                                            <li>
                                                <img src="img5/Tinder-clone-dating-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Tinder Clone</a>
                                            </li>
                                            <li>
                                                <img src="img5/OnlyFans-clone-subscription-based-content-platform.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">OnlyFans Clone</a>
                                            </li>


                                        </ul>

                                    </div>
                                    <div class="list-item">
                                        <h4 class="title mb-4">MARKETPLACE</h4>
                                        <ul>
                                            <li><img src="img5/Amazon-clone.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Amazon Clone</a>
                                            </li>
                                            <li> <img src="img5/alibaba-logo.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Alibaba Clone</a>
                                            </li>
                                            <li><img src="img5/Pinduoduo-clone-third-party-e-commerce-app.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Pinduoduo
                                                    Clone</a>
                                            </li>
                                            <li>
                                                <img src="img5/Noon-clone-online-shopping-app.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Noon Clone </a>
                                            </li>
                                            <li>
                                                <b class="RealEstate">Home Services</b><br>
                                                <img src="img5/Taskrabbit-like-app.png" class="clone2 my-" />
                                                <a href="#" class="clone3">TaskRabbit </a>
                                            </li>

                                        </ul>

                                        <br>
                                        <h4 class="title mb- my-nk">SUPER & UBER</h4>
                                        <ul>
                                            <li>
                                                <b class="RealEstate">Bid Rides</b><br>
                                                <img src="img5/indriver-1.png" class="clone2 my-" />
                                                <a href="#" class="clone3">InDriver Clone</a>
                                            </li>
                                            <li> <img src="img5/gojek-app-clone.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Gojek Clone</a>
                                            </li>
                                            <li> <img src="img5/Uber-clone-taxi-booking.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Uber Clone</a>
                                            </li>
                                            <li>
                                                <img src="img5/Careem-clone-logo.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Careem Clone </a>
                                            </li>



                                        </ul>

                                    </div>
                                    <div class="list-item">
                                        <h4 class="title mb-2">CRYPTO & NFT</h4>
                                        <ul>
                                            <li>
                                                <b class="RealEstate">Crypto Exchange</b><br>
                                                <img src="img5/Binance_Logo-3-1.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Binance Clone </a>
                                            </li>
                                            <li>
                                                <img src="img5/pancakeswap-logo.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">PancakeSwap Clone</a>
                                            </li>
                                            <li><b class="RealEstate">swap</b><br>
                                                <img src="img5/uniswap.png" class="clone2 my-" />
                                                <a href="#" class="clone3">Uniswap Clone </a>
                                            </li>
                                            <li>
                                                <b class="RealEstate"> P2P
                                                    Exchange</b><br>
                                                <img src="img5/localcryptos-app-clone.png" class="clone2 my" />
                                                <a href="#" class="clone3">LocalCryptos Clone </a>
                                            </li>
                                            <li>
                                                <img src="img5/Opensea-clone-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Opensea Clone </a>
                                            </li>
                                            <li>
                                                <img src="img5/Rarible-Crypto-exchange-platform.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Rarible Clone </a>
                                            </li>
                                        </ul>

                                        <h4 class="title mb-4 my-2">FOOD DELIVERY</h4>
                                        <ul>
                                            <li>
                                                <img src="img5/UberEats-clone-food-delivery-app.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">UberEats Clone </a>
                                            </li>
                                            <li>
                                                <img src="img5/Build-app-like-Doordash.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">DoorDash</a>
                                            </li>
                                            <li>
                                                <img src="img5/zomato-like-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Zomato</a>
                                            </li>
                                            <li>
                                                <img src="img5/postmates-like-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Postmates </a>
                                            </li>
                                            <li>
                                                <img src="img5/instacart.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Instacart</a>
                                            </li>
                                            <li>
                                                <img src="img5/Rarible-Crypto-exchange-platform.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Rarible Clone </a>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title mb-4">GROCERY DELIVERY</h4>
                                        <ul>
                                            <li>
                                                <img src="img5/Glovo-clone-grocery-delivery-app.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Glovo Clone</a>
                                            </li>
                                            <li>
                                                <img src="img5/blinkit-like-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Blinkit</a>
                                            </li>
                                            <li>
                                                <img src="img5/zepto-like-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Zepto</a>
                                            </li>
                                            <li>
                                                <img src="img5/dunzo-like-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Dunzo </a>
                                            </li>
                                            <li>
                                                <img src="img5/Talabat.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Talabat </a>
                                            </li>
                                            <li>
                                                <img src="img5/grubmarket.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">GrubMarket </a>


                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Services<i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>

                                        <li class="linnnn"><a href="#">Shopify Development Services</a></li>
                                        <!-- <hr class="hy8"> -->
                                        <li class="linnnn">
                                            <a href="#">Metaverse App Development</a>
                                        </li>
                                        <li class="linnnn">
                                            <a href="#">Blockchain App Development</a>
                                        </li>
                                        <li class="linnnn"><a href="#">Mobile App Development</a></li>
                                        <li class="linnnn"><a href="#">iOS App Development</a>
                                        </li>
                                        <li class="linnnn"><a href="#">Android App Development</a></li>
                                        <li class="linnnn"><a href="#">Software Development</a>
                                        </li>
                                        <li class="linnnn"><a href="#">MVP App Development</a></li>
                                        <li class="linnnn"><a href="#">SaaS Development</a></li>
                                        <li class="linnnn"><a href="#">Flutter App Development</a></li>
                                        <li class="linnnn"><a href="#">IoT App Development</a></li>
                                        <li class="linnnn"><a href="#">Web App Development</a></li>
                                        <li class="linnnn"><a href="#">React Native App Development</a></li>
                                        <li class="linnnn"><a href="#">AR/VR App Development</a></li>
                                        <li class="linnnn"><a href="#">Cloud Services</a></li>
                                        <li class="linnnn"><a href="#">Product Management Services</a></li>
                                        <li class="linnnn"><a href="#">Artificial Intelligence And Machine Learning
                                                Development</a>
                                        </li>
                                        <li><a href="#">Full Cycle Product Development</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Industries <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li class="linnnn"><a href="#">Food Delivery App Development</a></li>
                                        <li class="linnnn"><a href="#">Grocery Delivery App Development</a></li>
                                        <li class="linnnn"><a href="#">M Commerce App Development</a></li>
                                        <li class="linnnn"><a href="#">M Learning App Development</a></li>
                                        <li class="linnnn"><a href="#"> Mental Health & Wellness App Development </a>
                                        </li>
                                        <li class="linnnn"><a href="#">Petcare App Development </a></li>
                                        <li class="linnnn"><a href="#"> E Scooter App Development</a></li>
                                        <li class="linnnn"><a href="#">Real Estate App Development </a></li>
                                        <li class="linnnn"><a href="#">FinTech App Development </a></li>
                                        <li><a href="#">Peer To Peer Lending App Development </a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#"> Company <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li><a href="about.php">About Us</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Cloning app available <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    <div class="list-item">
                                        <h4 class="title mb-4">RENTALS AND LISTINGS</h4>
                                        <ul>
                                            <li><b class="RealEstate">Real
                                                    Estate</b><br>
                                                <img src="img5/zillow-clone.png" class="clone2 my-" />

                                                <a href="#" class="clone3">Zillow Clone</a>

                                            </li>
                                            <li> <img src="img5/Airbnb-clone.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Airbnb Clone</a>
                                            </li>
                                            <li><img src="img5/Fiverr-clone-online-freelance-marketplace.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Fiverr Clone</a>
                                            </li>
                                            <li><img src="img5/UpWork-clone-Freelance-marketplace.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">UpWork Clone </a>
                                            </li>

                                        </ul>
                                        <br> <br> <br>
                                        <h4 class="title mb- my-">NETWORK & OTT</h4>
                                        <ul>
                                            <li>
                                                <b class="RealEstate">Microbloggin</b><br>
                                                <img src="img5/pngtree-twitter-social-media-round-icon-png-image_6315985-1.png"
                                                    class="clone2 my-" />
                                                <a href="#" class="clone3">Twitter Clone </a>
                                            </li>
                                            <li> <img src="img5/Tiktok-clone-video-dubbing-platform.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">TikTok Clone</a>
                                            </li>
                                            <li><img src="img5/facebook-icon-free-png.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Facebook Clone</a>
                                            </li>
                                            <li>
                                                <b class="RealEstate">OTT</b><br><img src="img5/Netflix-icon.png"
                                                    class="clone2 my-" />
                                                <a href="#" class="clone3">Netflix Clone </a>
                                            </li>
                                            <li>
                                                <img src="img5/Threads-clone-logo.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Threads Clone</a>
                                            </li>

                                            <li>
                                                <img src="img5/Tinder-clone-dating-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Tinder Clone</a>
                                            </li>
                                            <li>
                                                <img src="img5/OnlyFans-clone-subscription-based-content-platform.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">OnlyFans Clone</a>
                                            </li>


                                        </ul>

                                    </div>
                                    <div class="list-item">
                                        <h4 class="title mb-4">MARKETPLACE</h4>
                                        <ul>
                                            <li><img src="img5/Amazon-clone.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Amazon Clone</a>
                                            </li>
                                            <li> <img src="img5/alibaba-logo.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Alibaba Clone</a>
                                            </li>
                                            <li><img src="img5/Pinduoduo-clone-third-party-e-commerce-app.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Pinduoduo
                                                    Clone</a>
                                            </li>
                                            <li>
                                                <img src="img5/Noon-clone-online-shopping-app.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Noon Clone </a>
                                            </li>
                                            <li>
                                                <b class="RealEstate">Home Services</b><br>
                                                <img src="img5/Taskrabbit-like-app.png" class="clone2 my-" />
                                                <a href="#" class="clone3">TaskRabbit </a>
                                            </li>

                                        </ul>

                                        <br>
                                        <h4 class="title mb- my-nk">SUPER & UBER</h4>
                                        <ul>
                                            <li>
                                                <b class="RealEstate">Bid Rides</b><br>
                                                <img src="img5/indriver-1.png" class="clone2 my-" />
                                                <a href="#" class="clone3">InDriver Clone</a>
                                            </li>
                                            <li> <img src="img5/gojek-app-clone.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Gojek Clone</a>
                                            </li>
                                            <li> <img src="img5/Uber-clone-taxi-booking.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Uber Clone</a>
                                            </li>
                                            <li>
                                                <img src="img5/Careem-clone-logo.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Careem Clone </a>
                                            </li>



                                        </ul>

                                    </div>
                                    <div class="list-item">
                                        <h4 class="title mb-2">CRYPTO & NFT</h4>
                                        <ul>
                                            <li>
                                                <b class="RealEstate">Crypto Exchange</b><br>
                                                <img src="img5/Binance_Logo-3-1.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Binance Clone </a>
                                            </li>
                                            <li>
                                                <img src="img5/pancakeswap-logo.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">PancakeSwap Clone</a>
                                            </li>
                                            <li><b class="RealEstate">swap</b><br>
                                                <img src="img5/uniswap.png" class="clone2 my-" />
                                                <a href="#" class="clone3">Uniswap Clone </a>
                                            </li>
                                            <li>
                                                <b class="RealEstate"> P2P
                                                    Exchange</b><br>
                                                <img src="img5/localcryptos-app-clone.png" class="clone2 my" />
                                                <a href="#" class="clone3">LocalCryptos Clone </a>
                                            </li>
                                            <li>
                                                <img src="img5/Opensea-clone-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Opensea Clone </a>
                                            </li>
                                            <li>
                                                <img src="img5/Rarible-Crypto-exchange-platform.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Rarible Clone </a>
                                            </li>
                                        </ul>

                                        <h4 class="title mb-4 my-nk1">FOOD DELIVERY</h4>
                                        <ul>
                                            <li>
                                                <img src="img5/UberEats-clone-food-delivery-app.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">UberEats Clone </a>
                                            </li>
                                            <li>
                                                <img src="img5/Build-app-like-Doordash.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">DoorDash</a>
                                            </li>
                                            <li>
                                                <img src="img5/zomato-like-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Zomato</a>
                                            </li>
                                            <li>
                                                <img src="img5/postmates-like-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Postmates </a>
                                            </li>
                                            <li>
                                                <img src="img5/instacart.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Instacart</a>
                                            </li>
                                            <li>
                                                <img src="img5/Rarible-Crypto-exchange-platform.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Rarible Clone </a>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title mb-4">GROCERY DELIVERY</h4>
                                        <ul>
                                            <li>
                                                <img src="img5/Glovo-clone-grocery-delivery-app.png"
                                                    class="clone2 my-2" />
                                                <a href="#" class="clone3">Glovo Clone</a>
                                            </li>
                                            <li>
                                                <img src="img5/blinkit-like-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Blinkit</a>
                                            </li>
                                            <li>
                                                <img src="img5/zepto-like-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Zepto</a>
                                            </li>
                                            <li>
                                                <img src="img5/dunzo-like-app.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Dunzo </a>
                                            </li>
                                            <li>
                                                <img src="img5/Talabat.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">Talabat </a>
                                            </li>
                                            <li>
                                                <img src="img5/grubmarket.png" class="clone2 my-2" />
                                                <a href="#" class="clone3">GrubMarket </a>


                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="contactUs.php" class="back">Get In Touch
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- menu end here -->
                <div class="header-item item-right">


                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <script>
    const menu = document.querySelector(".menu");
    const menuMain = menu.querySelector(".menu-main");
    const goBack = menu.querySelector(".go-back");
    const menuTrigger = document.querySelector(".mobile-menu-trigger");
    const closeMenu = menu.querySelector(".mobile-menu-close");
    let subMenu;
    menuMain.addEventListener("click", (e) => {
        if (!menu.classList.contains("active")) {
            return;
        }
        if (e.target.closest(".menu-item-has-children")) {
            const hasChildren = e.target.closest(".menu-item-has-children");
            showSubMenu(hasChildren);
        }
    });
    goBack.addEventListener("click", () => {
        hideSubMenu();
    })
    menuTrigger.addEventListener("click", () => {
        toggleMenu();
    })
    closeMenu.addEventListener("click", () => {
        toggleMenu();
    })
    document.querySelector(".menu-overlay").addEventListener("click", () => {
        toggleMenu();
    })

    function toggleMenu() {
        menu.classList.toggle("active");
        document.querySelector(".menu-overlay").classList.toggle("active");
    }

    function showSubMenu(hasChildren) {
        subMenu = hasChildren.querySelector(".sub-menu");
        subMenu.classList.add("active");
        subMenu.style.animation = "slideLeft 0.5s ease forwards";
        const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
        menu.querySelector(".current-menu-title").innerHTML = menuTitle;
        menu.querySelector(".mobile-menu-head").classList.add("active");
    }

    function hideSubMenu() {
        subMenu.style.animation = "slideRight 0.5s ease forwards";
        setTimeout(() => {
            subMenu.classList.remove("active");
        }, 300);
        menu.querySelector(".current-menu-title").innerHTML = "";
        menu.querySelector(".mobile-menu-head").classList.remove("active");
    }

    window.onresize = function() {
        if (this.innerWidth > 991) {
            if (menu.classList.contains("active")) {
                toggleMenu();
            }

        }
    }
    </script>
</body>

</html>