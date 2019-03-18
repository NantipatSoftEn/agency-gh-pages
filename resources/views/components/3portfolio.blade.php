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
                    <!--  <iframe src="{{$item->link}}" class="card-img-top "></iframe> -->
                    <img src="{{asset($item->img)}}" class="card-img-top ">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->content}}</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gallery-{{$item->id}}">Large
                            modal</button>


                    </div>
                </div>
                {{-- <a href="{{asset('/edit-album-detail/'.$item->id)}}" class="btn btn-warning  btn-sm">Edit</a>
                <a href="{{asset('/edit-album/'.$item->id)}}" class="btn btn-info  btn-sm">Upload Img</a>
                <a href="#!delete" onclick="confirmDelete('Are you sure to delete ?', '{{ url('album-del', $item->id )}}', 'delete');"
                    class="btn btn-danger btn-sm">Delete</a> --}}
            </div>

            @endforeach
        </div>


    </div>
</section>
