<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Gallory</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($gallery as $item)
            <div class="col-md-4">
                <div class="card" style=" margin-bottom: 25px;">
                    <img src="{{asset($item->img)}}" class="card-img-top ">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->content}}</p>
                        {{-- <a href="{{asset('/edit-album-detail/'.$item->id)}}" class="btn btn-warning  btn-sm">Edit</a>
                        <a href="{{asset('/edit-album/'.$item->id)}}" class="btn btn-info  btn-sm">Upload Img</a>
                        <a href="#!delete" onclick="confirmDelete('Are you sure to delete ?', '{{ url('album-del', $item->id )}}', 'delete');"
                            class="btn btn-danger btn-sm">Delete</a> --}}

                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>

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
