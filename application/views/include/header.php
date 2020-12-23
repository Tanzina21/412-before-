<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Healthy Tips</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Poly Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="<?=base_url()?>asset/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="<?=base_url()?>asset/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="<?=base_url()?>asset/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="<?=base_url()?>asset///fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <!-- banner -->
    <div class="banner" id="home">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">

                <h1>
                    <a class="navbar-brand text-white" href="<?=base_url()?>">
                        Healthy Tips 
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item  mr-3">
                            <a class="nav-link text-white" href="<?=base_url()?>">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 <?php if($this->uri->segment(2)=='about'){ echo 'class="active"'; } ?>">
                            <a class="nav-link text-white text-capitalize" href="<?=base_url()?>welcome/about">about</a>
                        </li>
                        <li class="nav-item  mr-3 <?php if($this->uri->segment(2)=='services'){ echo 'class="active"'; } ?>">
                            <a class="nav-link text-white text-capitalize" href="<?=base_url()?>welcome/signup">Sign In/Sign Up</a>
                        </li>
                        <li class="nav-item dropdown mr-3 ">
                            <a class="nav-link dropdown-toggle  text-white text-capitalize" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='fitness'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/fitness">Fitnesss</a>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='depression'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/depression">Depression</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='pregnancy'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/pregnancy">Pregnancy Care</a>
                                <a class="dropdown-item <?php if($this->uri->segment(2)=='skincare'){ echo 'class="active"'; } ?>" href="<?=base_url()?>welcome/skincare">Skin Care</a>
                            </div>
                        </li>
						
                        <li class="nav-item <?php if($this->uri->segment(2)=='contact'){ echo 'class="active"'; } ?>">
                            <a class="nav-link  text-white text-capitalize" href="<?=base_url()?>welcome/contact">contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- //header -->
        <div class="container">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="slider-info">
                                <span class="active">Providing Solution </span>
                                <h3>Skin Care</h3>
                                <a class="btn btn-primary mt-3" href="<?=base_url()?>welcome/services" role="button">View Details</a>
								 
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <span class="">Providing Solution </span>
                                <h3>Pregnancy Care</h3>
                                <a class="btn btn-primary mt-3" href="<?=base_url()?>welcome/services" role="button">View Details</a>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <span class="">Providing Solution </span>
                                <h3>Depression</h3>
                                <a class="btn btn-primary mt-3" href="<?=base_url()?>welcome/services" role="button">View Details</a>
                            </div>
                        </li>
						<li>
                            <div class="slider-info">
                                <span class="">Providing Solution </span>
                                <h3>Fitnesss</h3>
                                <a class="btn btn-primary mt-3" href="<?=base_url()?>welcome/services" role="button">View Details</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //banner -->
    <!-- section-2 -->
    <div class="section-2">
        <div class="container-fluid">
            <div class="row slide">
                <div class="col-lg-4 triple-sec">
                    <h5 class="text-dark">special services</h5>
                    <ul class="list-group mt-3">
                        <li class="list-group-item border-0">
                            <i class="fas fa-heartbeat mr-3"></i>Cras justo odio</li>
                        <li class="list-group-item border-0">
                            <i class="fas fa-user-md mr-3"></i>Dapibus ac facilisis in</li>
                        <li class="list-group-item border-0">
                            <i class="fas fa-pills mr-3"></i>Morbi leo risus</li>
                        <li class="list-group-item border-0">
                            <i class="fas fa-thermometer mr-3"></i>
                            Porta ac consectetur ac</li>
                        <li class="list-group-item border-0">
                            <i class="fas fa-ambulance mr-3"></i>Vestibulum at eros</li>
                    </ul>
                </div>
                <div class="col-lg-4  triple-sec">
                    <h5>Apointment Schedule</h5>
                    <ul class="list-unstyled">
                        <li class="clearfix py-3">
                            <span class="float-left">Saturday - Wednesday </span>
                            <div class="value float-right"> 9Am - 10Am </div>
                        </li>
                        <li class="clearfix border-top border-bottom my-3 py-3">
                            <span class="float-left"> Thursday </span>
                            <div class="value float-right"> 9.30Am- 10.30Am </div>
                        </li>
                        <li class="clearfix py-3">
                            <span class="float-left"> Friday </span>
                            <div class="value float-right">10Am -10.30Am </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 triple-sec">
                    <h5 class="text-black">critical care expertise</h5>
                    <p class="pt-4">ulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                        aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec,
                        egestas non nisi. Donec rutrum congue leo eget malesuada.</p>
                    <br>
                    <p>ulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                        aliquet elit, eget tincidunt nibh pulvinar a.</p>
                </div>
            </div>
        </div>
    </div>