<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_get_document_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<?php wp_head();?>

</head>

<body <?php body_class() ?>>

    <header>
        <div class="top-line" >
            <div class="content-width" data-aos="fade-down"  data-aos-delay="500" data-aos-duration="1000">
                <div class="logo-wrap">
                    <a href="index.html">
                        <img src="img/logo.svg" alt="">
                    </a>
                </div>
                <nav class="top-menu">
                    <ul class="menu">
                        <li>
                            <a href="construction.html">Sectors</a>
                            <ul class="sub-menu">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Culinary</a></li>
                                <li><a href="#">Moulding</a></li>
                                <li><a href="#">Products</a></li>
                            </ul>
                        </li>

                        <li><a href="materials.html">Materials</a></li>
                        <li><a href="about.html">About</a></li>

                    </ul>
                </nav>
                <div class="btn-wrap">
                    <a href="contact.html" class="btn-black">Contact us</a>
                </div>
                <div class="open-menu">
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="menu-responsive" id="menu-responsive" style="display: none">
        <div class="top">
            <div class="close-menu">
                <a href="#"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="wrap">
            <div class="logo-wrap">
                <a href="index.html">
                    <img src="img/logo.svg" alt="">
                </a>
            </div>
            <nav class="mob-menu-wrap">
                <ul class="mob-menu">
                    <li class="">
                        <a href="construction.html">Sectors</a>
                        <ul class="sub-menu">
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Culinary</a></li>
                            <li><a href="#">Moulding</a></li>
                            <li><a href="#">Products</a></li>
                        </ul>
                    </li>

                    <li><a href="materials.html">Materials</a></li>
                    <li><a href="about.html">About</a></li>

                </ul>

                <div class="btn-wrap">
                    <a href="#" class="btn-head">Contact</a>
                </div>
            </nav>
        </div>
    </div>

    <main>