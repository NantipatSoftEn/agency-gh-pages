<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        font-family: Arial;
        margin: 0;
    }

    * {
        box-sizing: border-box;
    }

    img {
        vertical-align: middle;
    }

    /* Position the image container (needed to position the left and right arrows) */
    .container {
        position: relative;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Container for image text */
    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Six columns side by side */
    .column {
        float: left;
        width: 16.66%;
    }

    /* Add a transparency effect for thumnbail images */
    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

</style>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Straightton Pacifig</title>

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Straightton Pacifig</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Gallory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    @include('components.1navbar')
    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Straightton Pacifig</div>
                <div class="intro-heading text-uppercase">Yon can take profit anywhere</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    @include('components.2services')

    <!-- Portfolio Grid -->


    <!-- About -->
    @include('components.4about')

    <!-- Team -->
    @include('components.5team')

    <!-- Clients -->
    @include('components.6client')

    <!-- Contact -->
    @include('components.7contact')

    <!-- Footer -->
    @include('components.8footer')

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <iframe width="700" height="500" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                </iframe>


                                <h2 style="text-align:center">Slideshow Gallery</h2>

                                <div class="container">
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 6</div>
                                        <img src="img_woods_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">2 / 6</div>
                                        <img src="img_5terre_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">3 / 6</div>
                                        <img src="img_mountains_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">4 / 6</div>
                                        <img src="img_lights_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">5 / 6</div>
                                        <img src="img_nature_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">6 / 6</div>
                                        <img src="img_snow_wide.jpg" style="width:100%">
                                    </div>

                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)"
                                                alt="The Woods">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)"
                                                alt="Cinque Terre">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)"
                                                alt="Mountains and fjords">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)"
                                                alt="Northern Lights">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)"
                                                alt="Nature and sunrise">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)"
                                                alt="Snowy Mountains">
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("demo");
                  var captionText = document.getElementById("caption");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                  captionText.innerHTML = dots[slideIndex-1].alt;
                }
                </script>

                                <p>meeeewewwwwwwwooooomto</p>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 style="text-align:center">Slideshow Gallery</h2>

                                <div class="container">
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 6</div>
                                        <img src="img_woods_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">2 / 6</div>
                                        <img src="img_5terre_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">3 / 6</div>
                                        <img src="img_mountains_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">4 / 6</div>
                                        <img src="img_lights_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">5 / 6</div>
                                        <img src="img_nature_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">6 / 6</div>
                                        <img src="img_snow_wide.jpg" style="width:100%">
                                    </div>

                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)"
                                                alt="The Woods">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)"
                                                alt="Cinque Terre">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)"
                                                alt="Mountains and fjords">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)"
                                                alt="Northern Lights">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)"
                                                alt="Nature and sunrise">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)"
                                                alt="Snowy Mountains">
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("demo");
                  var captionText = document.getElementById("caption");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                  captionText.innerHTML = dots[slideIndex-1].alt;
                }
                </script>


                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 style="text-align:center">Slideshow Gallery</h2>

                                <div class="container">
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 6</div>
                                        <img src="img_woods_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">2 / 6</div>
                                        <img src="img_5terre_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">3 / 6</div>
                                        <img src="img_mountains_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">4 / 6</div>
                                        <img src="img_lights_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">5 / 6</div>
                                        <img src="img_nature_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">6 / 6</div>
                                        <img src="img_snow_wide.jpg" style="width:100%">
                                    </div>

                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)"
                                                alt="The Woods">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)"
                                                alt="Cinque Terre">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)"
                                                alt="Mountains and fjords">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)"
                                                alt="Northern Lights">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)"
                                                alt="Nature and sunrise">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)"
                                                alt="Snowy Mountains">
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("demo");
                  var captionText = document.getElementById("caption");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                  captionText.innerHTML = dots[slideIndex-1].alt;
                }
                </script>


                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 style="text-align:center">Slideshow Gallery</h2>

                                <div class="container">
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 6</div>
                                        <img src="img_woods_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">2 / 6</div>
                                        <img src="img_5terre_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">3 / 6</div>
                                        <img src="img_mountains_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">4 / 6</div>
                                        <img src="img_lights_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">5 / 6</div>
                                        <img src="img_nature_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">6 / 6</div>
                                        <img src="img_snow_wide.jpg" style="width:100%">
                                    </div>

                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)"
                                                alt="The Woods">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)"
                                                alt="Cinque Terre">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)"
                                                alt="Mountains and fjords">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)"
                                                alt="Northern Lights">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)"
                                                alt="Nature and sunrise">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)"
                                                alt="Snowy Mountains">
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("demo");
                  var captionText = document.getElementById("caption");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                  captionText.innerHTML = dots[slideIndex-1].alt;
                }
                </script>


                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 style="text-align:center">Slideshow Gallery</h2>

                                <div class="container">
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 6</div>
                                        <img src="img_woods_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">2 / 6</div>
                                        <img src="img_5terre_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">3 / 6</div>
                                        <img src="img_mountains_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">4 / 6</div>
                                        <img src="img_lights_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">5 / 6</div>
                                        <img src="img_nature_wide.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">6 / 6</div>
                                        <img src="img_snow_wide.jpg" style="width:100%">
                                    </div>

                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)"
                                                alt="The Woods">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)"
                                                alt="Cinque Terre">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)"
                                                alt="Mountains and fjords">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)"
                                                alt="Northern Lights">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)"
                                                alt="Nature and sunrise">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)"
                                                alt="Snowy Mountains">
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }

                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("demo");
                  var captionText = document.getElementById("caption");
                  if (n > slides.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";
                  dots[slideIndex-1].className += " active";
                  captionText.innerHTML = dots[slideIndex-1].alt;
                }
                </script>


                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="lib/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

</body>



</html>
