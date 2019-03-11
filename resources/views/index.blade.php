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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
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
    </nav>

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
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Product</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-6x">
                        <i class="fas fa-stack-1x fa-inverse"><a href="https://www.thaistoploss.com/index.php/course-work/item/847-straightonsarbitragefund"><img
                                    src="https://www.thaistoploss.com/media/k2/items/cache/320b783b13f6b591849dc82b8df81be8_XL.jpg"
                                    class="fas fa-stack-1x fa-inverse"></a></i>
                    </span>
                    <h4 class="service-heading">StraightonsArbitrageFund</h4>
                    <p class="text-muted" align="LEFT">กองทุนส่วนบุคคลโดยมีโบรกเกอร์เป็นตัวกลาง(Pamm) โดย
                        จะใช้ระบบทำกำไรแบบ Arbitrage ในตลาด Forex ซึ่งมีความเสี่ยงระดับกลาง
                        โดยเฉลี่ยอาจจะได้มากกว่าหรือน้อยกว่าแล้วแต่สภาวะตลาด โดยมีการแบ่งผลกำไร
                        กันระหว่างผู้บริหารกองทุนและผู้ลงทุนเป็นอัตราส่วน 30 70 เปิด รับนักลงทุนขั้นต่ำ 1000$ ขึ้นไป
                        แล้วจะเปิดรับทุกวันที่ 1-5 ของเดือน</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-6x">
                        <i class="fas fa-stack-1x fa-inverse"><a href="https://www.thaistoploss.com/index.php/analysis-2/item/1167-straighttons-e-fund"><img
                                    src="https://www.thaistoploss.com/media/k2/items/cache/3e04fb9a1a5c2d0e8729e590da1f436a_L.jpg"
                                    class="fas fa-stack-1x fa-inverse"></a></i>
                    </span>
                    <h4 class="service-heading">Straighttons E fund</h4>
                    <p class="text-muted" align="LEFT">Straighttons E fund เป็นการเทรด system trade แบบประยุกต์
                        เป็นการผสมระหว่างคนกับ EA กึ่งอัตโนมัติ โดยไม่ใช่ Martingale แบ่งผลกำไร
                        กันระหว่างผู้บริหารกองทุนและผู้ลงทุนเป็นอัตราส่วน 75 : 25 (แบ่งตามผลกำไร)
                        *กำไร Straighttons E Fund จะปันผลทันทีเมื่อกำไรครบ 10% ซึ่งใน 1 เดือนจะปันผลมากกว่าหรือน้อยกว่า
                        1 ครั้ง ขึ้นอยู่กับสภาวะการตลาดของแต่ละเดือน ลงทุนขั้นต่ำ 300$ </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-6x">
                        <i class="fas fa-stack-1x fa-inverse"><a href="https://www.thaistoploss.com/index.php/analysis-2/item/1013-straighttonsgoldfund"><img
                                    src="https://www.thaistoploss.com/media/k2/items/cache/d223ee4fdebdcd40ae2cd65f88141ed1_XL.jpg"
                                    class="fas fa-stack-1x fa-inverse"></a></i>
                    </span>
                    <h4 class="service-heading">StraighttonsGoldFund</h4>
                    <p class="text-muted" align="LEFT">ความเสี่ยงระดับการป้องกันความเสี่ยงโดยการ hedge
                        เงินปันผลกำไรจากทองคำทุกเดือนอย่างสม่ำเสมอ เปิดรับ 21-25 ของทุกเดือน
                        อย่าพลาดทำกำไรจากทองคำในช่วงราคาตกต่ำกับมืออาชีพ โดยมีการแบ่งผลกำไร
                        กันระหว่างผู้บริหารกองทุนและผู้ลงทุนเป็นอัตราส่วน 30 70 เปิด รับนักลงทุนขั้นต่ำ 1000$ ขึ้นไป
                        ผลงานจาก Signal ทองคำในห้องขุดทอง และ Uag signal เป็นตัวการันตี ห้ามพลาด </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-6x">
                        <i class="fas fa-stack-1x fa-inverse"><a href="https://www.thaistoploss.com/index.php/course-work/item/846-straightonseventfund"><img
                                    src="https://www.thaistoploss.com/media/k2/items/cache/24c01e452493eba0f9e741ef09a2d61a_XL.jpg"
                                    class="fas fa-stack-1x fa-inverse"></a></i>
                    </span>
                    <h4 class="service-heading">StraightonsEventFund</h4>
                    <p class="text-muted" align="LEFT">กองทุนส่วนบุคคลโดยมีโบรกเกอร์เป็นตัวกลาง(Pamm) โดย
                        จะใช้ระบบทำกำไรจาก Event และข่าว ในตลาด Forex ซึ่งมีความเสี่ยงระดับกลางค่อนสูง
                        โดยมีการแบ่งผลกำไร กันระหว่างผู้บริหารกองทุนและผู้ลงทุนเป็นอัตราส่วน 30 70
                        เปิด รับนักลงทุนขั้นต่ำ 1000$ ขึ้นไป แล้วจะเปิดรับทุกวันที่ 11-15 ของเดือน</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-6x">
                        <i class="fas fa-stack-1x fa-inverse"><a href="https://www.thaistoploss.com/index.php/analysis-2/item/1207-straighttons-core-arbitrage-fund"><img
                                    src="https://www.thaistoploss.com/media/k2/items/cache/0d77511af28edff9982f6b0b2eb7aca3_XL.jpg"
                                    class="fas fa-stack-1x fa-inverse"></a></i>
                    </span>
                    <h4 class="service-heading">StraighttonsCoreArbitrageFund</h4>
                    <p class="text-muted" align="LEFT"> กองทุนส่วนบุคคลโดยมีโบรกเกอร์เป็นตัวกลาง (Pamm) ซึ่งจะใช้กลยุทธ
                        Arbitrage เเบบดั้งเดิมและ Corelation Trade ในการเทรด ซึ่งจะมีข้อดีก็คือความเสี่ยงต่ำกว่า
                        เเละมีโอกาส Maximum Drawdown ต่ำกว่า เเละมีโอกาส
                        Order ว่างมากกว่า ของกอง StraighttonsArbitrageFund กองเดิมโดยมีการแบ่งผลกำไร
                        กันระหว่างผู้บริหารกองทุนและผู้ลงทุนเป็นอัตราส่วน 30 70 เปิด รับนักลงทุนขั้นต่ำ 1000$ ขึ้นไป
                        แล้วจะเปิดรับทุกวันที่ 11-15 ของเดือน</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Gallory</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Threads</h4>
                        <p class="text-muted">Illustration</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Explore</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Finish</h4>
                        <p class="text-muted">Identity</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Lines</h4>
                        <p class="text-muted">Branding</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Southwest</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Window</h4>
                        <p class="text-muted">Photography</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Window</h4>
                        <p class="text-muted">Photography</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Window</h4>
                        <p class="text-muted">Photography</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam,
                                        recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium
                                        consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <!--  <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>March 2011</h4>
                  <h4 class="subheading">An Agency is Born</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>December 2012</h4>
                  <h4 class="subheading">Transition to Full Service</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>July 2014</h4>
                  <h4 class="subheading">Phase Two Expansion</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="https://scontent.fhdy1-1.fna.fbcdn.net/v/t1.0-9/40029819_1905383899507513_4101845109442609152_n.jpg?_nc_cat=107&_nc_ht=scontent.fhdy1-1.fna&oh=984b5002375686e35ffaebfee9763f87&oe=5CE5A7CE"
                            alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="https://scontent.fhdy1-1.fna.fbcdn.net/v/t1.0-9/44375413_2132266546783958_8617541357583466496_n.jpg?_nc_cat=111&_nc_ht=scontent.fhdy1-1.fna&oh=edb4a732c6bfdb5af2d5f6000b8c8990&oe=5CDF47A0"
                            alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="https://scontent.fhdy1-1.fna.fbcdn.net/v/t1.0-9/51051947_2144316405657973_5268883445701935104_n.jpg?_nc_cat=105&_nc_ht=scontent.fhdy1-1.fna&oh=f9c444ff042037b3ae2c6d0781515d55&oe=5D1D6DA3"
                            alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                        laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                        required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                        required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                        required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required"
                                        data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2019</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

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
