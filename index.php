<?php

include "./server.php";

	if (isset($_POST['button'])) {
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$message = $_POST['message'];

	$sql = "INSERT INTO `foodbloging`.`contact1` (`name`, `mail`, `message`) VALUES ('$name', '$mail', '$message')";

	if ($con->query($sql) == true) {
		// echo "Successfull";
	}
	else {
		echo "error: $sql <br> $con->error";
	}
	// $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FOOD DELIVERY</title>

    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="assets/font/css/font-awesome.min.css" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/isotope-docs.css" media="screen">
    <link rel="stylesheet" href="assets/css/baguetteBox.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
    .slider {
        position: relative;
    }

    .slider__container {
        cursor: grab;
        display: flex;
        overflow: hidden;
        scroll-behavior: smooth;
    }

    .slider__container.dragging {
        scroll-behavior: auto;
        cursor: grabbing;
    }

    .slider__item {
        padding: 16px 8px;
        flex: 0 0 auto;
        width: calc(100% / 5);
    }

    .slider__container[data-step="4"] .slider__item {
        width: calc(100% / 4);
    }

    .slider__container[data-step="3"] .slider__item {
        width: calc(100% / 3);
    }

    .slider__container[data-step="2"] .slider__item {
        width: calc(100% / 2);
    }

    .slider__container[data-step="1"] .slider__item {
        width: calc(100% / 1);
    }

    @media screen and (max-width: 1024px) {

        .slider__item,
        .slider__container[data-step="4"] .slider__item {
            width: calc(100% / 3);
        }
    }

    @media screen and (max-width: 768px) {

        .slider__item,
        .slider__container[data-step="4"] .slider__item,
        .slider__container[data-step="3"] .slider__item {
            width: calc(100% / 2);
        }
    }

    @media screen and (max-width: 480px) {

        .slider__item,
        .slider__container[data-step="4"] .slider__item,
        .slider__container[data-step="3"] .slider__item,
        .slider__container[data-step="2"] .slider__item {
            width: calc(100% / 1);
        }
    }

    .slider__control {
        font-size: 16px;
        border: none;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        color: #000;
        background: #fff;
        cursor: pointer;
        opacity: 0.5;
        transition: all 0.3s;
    }

    .slider__control.prev {
        left: 16px;
    }

    .slider__control.next {
        right: 16px;
    }

    .slider__control:hover {
        opacity: 1;
        transform: translateY(-50%) scale(1.2);
    }

    .slider__item img {
        -webkit-user-drag: none;
        -khtml-user-drag: none;
        -moz-user-drag: none;
        -o-user-drag: none;
        user-select: none;
        border-radius: 100%;
    }

    #order25 {
        margin: 40px;
    }
    </style>


</head>

<body>
    <!-- =============== Preloader =============== -->
    <div id="preloader">
        <div id="loading">
            <img width="256" height="32" src="assets/img/loading-cylon-red.svg">
        </div>
    </div>
    <!-- =============== nav =============== -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#"><img src="./pictuer/logo copy.png" alt="Logo"> -->
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="./index.php#home">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="./index.php#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="./index.php#Services">Services</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="./index.php#Gallery">Gallery</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="./index.php#contact">Contact</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="./menu.html">Order</a>
                        </li>
                    </ul>
                </div>
                <!-- =============== navbar-collapse =============== -->

            </div>
        </div>
        <!-- =============== container-fluid =============== -->
    </nav>
    <!-- =============== header =============== -->
    <header id="home" class="header">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">

                <div id="owl-demo" class="owl-carousel header1">
                    <div>
                        <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                            <h2 class="wow bounceIn animated" data-wow-delay=".40s">Delicious <span>Delights</span></h2>
                            <h3 class="wow bounceIn animated" data-wow-delay=".50s">Exploring the World of Culinary
                                Delicacies </h3>
                            <p class="wow bounceIn animated" data-wow-delay=".60s">Get Ready to Satisfy Your Cravings -
                                Order Now!</p>
                            <p>
                            <div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i
                                    class="hbtn"></i> <a href="./order.php"><span>Order Place</span></i></a>
                            </div>
                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                            <h2 class="wow bounceIn animated" data-wow-delay=".40s">Savor the <span>Flavor</span>
                            </h2>
                            <h3 class="wow bounceIn animated" data-wow-delay=".50s">Where Every Bite is a Celebration of
                                Taste</h3>
                            <p class="wow bounceIn animated" data-wow-delay=".60s">Order Now and Indulge in a
                                Gastronomic Delight!</p>
                            <p>
                            <div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i
                                    class="hbtn"></i> <a href="./order.php"><span>Order Place</span></i></a>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- =============== container end =============== -->
    </header>
    <!-- =============== About =============== -->
    <section id="about" class="">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInDown animated" data-wow-delay=".5s">
                    <h2>About Us</h2>
                    <p>Food is any substance consumed to provide nutritional support for an organism. Food is usually of
                        plant, animal or fungal origin, and contains essential nutrients, such as carbohydrates, fats,
                        proteins, vitamins, or minerals. The substance is ingested by an organism and assimilated by the
                        organism's cells to provide energy, maintain life, or stimulate growth. Different species of
                        animals have different feeding behaviours that satisfy the needs of their unique metabolisms,
                        often evolved to fill a specific ecological niche within specific geographical contexts.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".5s">
                    <img src="assets/img/about.jpg" width = "800px" height = "400px"/>
                </div>
            </div>
        </div>
        <!-- =============== container end =============== -->
    </section>
    <!-- =============== Services =============== -->
    <section id="Services" class="">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft animated" data-wow-delay=".5s">
                    <img src="assets/img/services.jpeg" class="img-left" width = "900px" height = "500px"/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".5s">
                    <h2>Services</h2>
                    <p>The foodservice or catering industry includes the businesses,
                        institutions, and companies which prepare meals outside the home. It includes restaurants,
                        school and hospital cafeterias, catering operations, and many other formats.</p>
                    <p>Suppliers to foodservice operators are foodservice distributors, who provide small wares and
                        foods. Some companies manufacture products in both consumer and food service
                        versions. The consumer version usually comes in individual-sized packages with elaborate label
                        design for retail sale. The foodservice version is packaged in a much larger industrial size and
                        often lacks the colorful label designs of the consumer version.</p>
                </div>
            </div>
        </div>
        <!-- =============== container end =============== -->
    </section>

    <section id="blog" class="">
        <!-- =============== Brand container =============== -->
        <div class="container">
            <div class="row">
                <div class="title">
                    <h1>Top brands for you</h1>
                </div>
                <section class="slider">
                    <button class="slider__control prev"><i class="fa fa-angle-left"
                            style="font-size:26px"></i></button>
                    <button class="slider__control next"><i class="fa fa-angle-right"
                            style="font-size:26px"></i></button>
                    <div class="slider__container" data-multislide="true" data-step="4">
                        <div class="slider__item">
                            <img src="./assets/img/Burger.avif" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/Gupta.avif" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/kfc.avif" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/Kwality.avif" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/Pizza.avif" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/wow.avif" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/madonals.jpg" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/monginis.webp" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/mioamore.png" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/domisose.png" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/Balaram.avif" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/Subway.avif" alt="" width="150px">
                        </div>
                        <div class="slider__item">
                            <img src="./assets/img/arselan.png" alt="" width="150px">
                        </div>

                    </div>
                </section>
            </div>
        </div>
        <!-- =============== Brand container end =============== -->
    </section>
    <!-- =============== Top Rating Food container =============== -->
    <section id="order25">
        <div class="title">
            <h1>Place Order</h1>
        </div>
        <section class="slider">
            <button class="slider__control prev"><i class="fa fa-angle-left" style="font-size:26px"></i></button>
            <button class="slider__control next"><i class="fa fa-angle-right" style="font-size:26px"></i></button>
            <div class="slider__container" data-multislide="true" data-step="4">
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/kachuri.avif" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/pizza1.avif" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/sandwich.avif" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/cake.avif" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/biriyani.avif" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/dosa.avif" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/paratha.avif" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/burger1.avif" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/thali.avif" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/idli.avif" alt="" width="200"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/chiken.webp" alt="" width="200"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/roll.avif" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/noodles.jpg" alt="" width="200px" height="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/momo.webp" alt="" width="200px"></a>
                </div>
                <div class="slider__item">
                    <a href="./order.php"><img src="./assets/img/pakoda.jpg" alt="" width="200px"></a>
                </div>
            </div>
        </section>
    </section>
    <!-- =============== Top Rating Food container end =============== -->
    <section class="counter">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2>We are Awesome, Check Some Interesting Facts</h2>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".1s">
                    <i class="fa fa-clock-o size"></i>
                    <h2>522</h2>
                    <span>Home Delivery 24X7</span>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".2s">
                    <i class="fa fa-coffee size"></i>
                    <h2>888</h2>
                    <span>Food Quality 100%</span>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".3s">
                    <i class="fa fa-trophy size"></i>
                    <h2>11</h2>
                    <span>Awards Won</span>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".4s">
                    <i class="fa fa-code size"></i>
                    <h2>55566</h2>
                    <span>Bloger Prize</span>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".5s">
                    <i class="fa fa-globe size"></i>
                    <h2>133</h2>
                    <span>Any Time Any Where</span>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay=".6s">
                    <i class="fa fa-rocket size"></i>
                    <h2>77</h2>
                    <span>Food Replacement</span>
                </div>
            </div>
        </div>
        <!-- =============== container end =============== -->
    </section>

    <!-- =============== Gallery =============== -->
    <section id="Gallery" class="wow flipInX animated" data-wow-delay=".5s">
        <div class="title">
            <h1>Food Menu</h1>
            <p>Our Special Types Food List and all types food are avaiable</p>
        </div>
        <div class="big-demo go-wide" data-js-module="filtering-demo">
            <div class="container">
                <div class="row">
                    <div class="filter-button-group button-group js-radio-button-group">
                        <button class="button is-checked" data-filter="*">show all</button>
                        <button class="button" data-filter=".webdesign">Chinese Food</button>
                        <button class="button" data-filter=".ecommerce">Italian Food</button>
                        <button class="button" data-filter=".cms">Indian Food</button>
                        <button class="button" data-filter=".logo">Japanese Food</button>
                    </div>
                </div>
            </div>
            <div class="grid baguetteBoxThree gallery">
                <div class="element-item transition webdesign " data-category="post-transition">
                    <a href="assets/img/chinesfood1.jpg">
                        <img src="assets/img/chinesfood1.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Kung Pao Chicken</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition ecommerce " data-category="post-transition">
                    <a href="assets/img/italian.jpg">
                        <img src="assets/img/italian.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Pizza Margherita</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition webdesign " data-category="post-transition">
                    <a href="assets/img/chinesfood2.jpg">
                        <img src="assets/img/chinesfood2.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Chow Mein</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item transition ecommerce " data-category="post-transition">
                    <a href="assets/img/italian3.jpg">
                        <img src="assets/img/italian3.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Spaghetti Carbonara </h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition logo " data-category="post-transition">
                    <a href="assets/img/japaniss3.jpg">
                        <img src="assets/img/japaniss3.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Ramen </h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition cms " data-category="post-transition">
                    <a href="assets/img/indian1.jpg">
                        <img src="assets/img/indian1.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Bengali Thali</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition logo " data-category="post-transition">
                    <a href="assets/img/japaniss2.jpg">
                        <img src="assets/img/japaniss2.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Yakitori</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item transition cms " data-category="post-transition">
                    <a href="assets/img/indian2.jpg">
                        <img src="assets/img/indian2.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Naan</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition ecommerce " data-category="post-transition">
                    <a href="assets/img/italian1.jpg">
                        <img src="assets/img/italian1.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Lasagna</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition webdesign " data-category="post-transition">
                    <a href="assets/img/chinesfood3.jpg">
                        <img src="assets/img/chinesfood3.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Dumplings</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition logo " data-category="post-transition">
                    <a href="assets/img/japanis1.jpg">
                        <img src="assets/img/japanis1.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Sushi</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item transition cms " data-category="post-transition">
                    <a href="assets/img/indian3.jpg">
                        <img src="assets/img/indian3.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Butter Chicken</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition webdesign " data-category="post-transition">
                    <a href="assets/img/chinesfood4.jpg">
                        <img src="assets/img/chinesfood4.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Scallion Pancakes</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition ecommerce " data-category="post-transition">
                    <a href="assets/img/italiann2.jpg">
                        <img src="assets/img/italiann2.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Ravioli</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition cms " data-category="post-transition">
                    <a href="assets/img/indian4.webp">
                        <img src="assets/img/indian4.webp" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Palak Paneer</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
                <div class="element-item post-transition logo " data-category="post-transition">
                    <a href="assets/img/japanis4.jpg">
                        <img src="assets/img/japanis4.jpg" width="300px" height="300px" />
                        <div class="hover-img">
                            <h2>Tempura</h2>
                            <i class="fa fa-camera camera"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>






    <section id="contact">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="title">
                    <h1>Contact</h1>
                    <p>Any Kinds of Query you can Contact by this Contact Form</p>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated" data-wow-delay=".1s">

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="ajax-hidden">
                            <div class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
                                <label for="c_name" class="sr-only">Name</label>
                                <input type="text" placeholder="Name" name="name" class="form-control" id="name"
                                    required="">
                            </div>

                            <div data-wow-delay=".1s"
                                class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
                                <label for="c_email" class="sr-only">Email</label>
                                <input type="email" placeholder="E-mail" name="mail" class="form-control" id="email"
                                    pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"
                                    placeholder="e.g. info@envato.com" required="">
                            </div>

                            <div data-wow-delay=".2s"
                                class="col-xs-12 col-sm-12 col-md-12 form-group wow fadeInUp animated">
                                <textarea placeholder="Message" rows="7" name="message" id="description"
                                    class="form-control" required=""></textarea>
                            </div>

                            <button data-wow-delay=".3s" class="btn btn-sm btn-block wow fadeInUp animated"
                                type="submit" name="button">Send Message</button>
                        </div>
                        <div class="ajax-response"></div>
                    </form>

                </div>
            </div>
        </div><!-- =============== container end =============== -->
    </section>
    <!-- Footer -->
    <footer id="footer">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">

                    <ul class="social-links">
                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/priti.paul.14811692/"
                                target="blank" style="visibility: visible; animation-name: fadeInUp;"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a data-wow-delay=".1s" class="wow fadeInUp animated"
                                href="https://www.instagram.com/paulpriti877/" target="blank"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i
                                    class="fa fa-instagram"></i></a></li>
                        <li><a data-wow-delay=".2s" class="wow fadeInUp animated"
                                href="https://www.linkedin.com/in/priti-paul-3aa930200/" target="blank"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a data-wow-delay=".4s" class="wow fadeInUp animated" href="https://github.com/pritipaul"
                                target="blank"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><i
                                    class="fa fa-github"></i></a></li>
                        <li><a data-wow-delay=".5s" class="wow fadeInUp animated" href="index.html#"
                                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><i
                                    class="fa fa-envelope"></i></a></li>
                    </ul>

                    <p class="copyright">
                        &copy; 2023 Be. Created By <a href=""> Priti Paul</a>
                    </p>

                </div>
                <div data-wow-delay=".6s" class="col-xs-12 col-sm-6 col-md-6 wow bounceIn  animated"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">

                    <section class="widget widget_text" id="text-15">
                        <h3 class="widget-title">Kolkata, West Bangal</h3>
                        <div class="textwidget">700135, North 24 pgs, Rajarhat Newtown,<br>
                            <p>Tel: 01 234-56786<br>
                                Mobile: 01 234-56786<br>
                                E-mail: <a href="#">pritipaul135@gmail.com</a></p>
                        </div>
                    </section>

                </div>
            </div>
        </div><!-- =============== container end =============== -->
    </footer>
    <!-- =============== jQuery =============== -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/isotope-docs.min.js"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.fittext.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <!-- =============== owl carousel =============== -->
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <!-- Isotope does NOT require jQuery. But it does make things easier -->

    <script src="assets/js/baguetteBox.js" async></script>
    <script src="assets/js/plugins.js" async></script>

    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="assets/js/creative.js"> </script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>

    <script>
    $(document).ready(function() {

        var nice = $("html").niceScroll(); // The document page (body)

        $("#div1").html($("#div1").html() + ' ' + nice.version);

        $("#boxscroll").niceScroll({
            cursorborder: "",
            cursorcolor: "#00F",
            boxzoom: true
        }); // First scrollable DIV

        $("#boxscroll2").niceScroll("#contentscroll2", {
            cursorcolor: "#F00",
            cursoropacitymax: 0.7,
            boxzoom: true,
            touchbehavior: true
        }); // Second scrollable DIV
        $("#boxframe").niceScroll("#boxscroll3", {
            cursorcolor: "#0F0",
            cursoropacitymax: 0.7,
            boxzoom: true,
            touchbehavior: true
        }); // This is an IFrame (iPad compatible)

        $("#boxscroll4").niceScroll("#boxscroll4 .wrapper", {
            boxzoom: true
        }); // hw acceleration enabled when using wrapper

    });
    </script>
    <script>
    window.onload = function() {
        if (typeof oldIE === 'undefined' && Object.keys)
            hljs.initHighlighting();

        baguetteBox.run('.baguetteBoxOne');
        baguetteBox.run('.baguetteBoxTwo');
        baguetteBox.run('.baguetteBoxThree', {
            animation: 'fadeIn'
        });
        baguetteBox.run('.baguetteBoxFour', {
            buttons: false
        });
        baguetteBox.run('.baguetteBoxFive', {
            captions: function(element) {
                return element.getElementsByTagName('img')[0].alt;
            }
        });
    };
    </script>


    <script>
    const sliders = [...document.querySelectorAll(".slider__container")];
    const sliderControlPrev = [
        ...document.querySelectorAll(".slider__control.prev")
    ];
    const sliderControlNext = [
        ...document.querySelectorAll(".slider__control.next")
    ];

    sliders.forEach((slider, i) => {
        let isDragStart = false,
            isDragging = false,
            isSlide = false,
            prevPageX,
            prevScrollLeft,
            positionDiff;

        const sliderItem = slider.querySelector(".slider__item");
        var isMultislide = slider.dataset.multislide === "true";

        sliderControlPrev[i].addEventListener("click", () => {
            if (isSlide) return;
            isSlide = true;
            let slideWidth = isMultislide ? slider.clientWidth : sliderItem.clientWidth;
            slider.scrollLeft += -slideWidth;
            setTimeout(function() {
                isSlide = false;
            }, 700);
        });

        sliderControlNext[i].addEventListener("click", () => {
            if (isSlide) return;
            isSlide = true;
            let slideWidth = isMultislide ? slider.clientWidth : sliderItem.clientWidth;
            slider.scrollLeft += slideWidth;
            setTimeout(function() {
                isSlide = false;
            }, 700);
        });

        function autoSlide() {
            if (
                slider.scrollLeft - (slider.scrollWidth - slider.clientWidth) > -1 ||
                slider.scrollLeft <= 0
            )
                return;
            positionDiff = Math.abs(positionDiff);
            let slideWidth = isMultislide ? slider.clientWidth : sliderItem.clientWidth;
            let valDifference = slideWidth - positionDiff;
            if (slider.scrollLeft > prevScrollLeft) {
                return (slider.scrollLeft +=
                    positionDiff > slideWidth / 5 ? valDifference : -positionDiff);
            }
            slider.scrollLeft -=
                positionDiff > slideWidth / 5 ? valDifference : -positionDiff;
        }

        function dragStart(e) {
            if (isSlide) return;
            isSlide = true;
            isDragStart = true;
            prevPageX = e.pageX || e.touches[0].pageX;
            prevScrollLeft = slider.scrollLeft;
            setTimeout(function() {
                isSlide = false;
            }, 700);
        }

        function dragging(e) {
            if (!isDragStart) return;
            e.preventDefault();
            isDragging = true;
            slider.classList.add("dragging");
            positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
            slider.scrollLeft = prevScrollLeft - positionDiff;
        }

        function dragStop() {
            isDragStart = false;
            slider.classList.remove("dragging");
            if (!isDragging) return;
            isDragging = false;
            autoSlide();
        }

        addEventListener("resize", autoSlide);
        slider.addEventListener("mousedown", dragStart);
        slider.addEventListener("touchstart", dragStart);
        slider.addEventListener("mousemove", dragging);
        slider.addEventListener("touchmove", dragging);
        slider.addEventListener("mouseup", dragStop);
        slider.addEventListener("touchend", dragStop);
        slider.addEventListener("mouseleave", dragStop);
    });
    </script>
</body>

</html>