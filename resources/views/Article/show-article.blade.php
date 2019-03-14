@extends('layouts.index')
@section('content')
<section id="services">
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Product</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div> --}}
        <h2 class="section-heading text-uppercase">Show article</h2>
        <div class="row">
            @foreach ($article as $item)
            <div class="col-md-4">
                <div class="card" style=" margin-bottom: 25px;">
                    <img class="card-img-top" src="{{asset($item->path_pic)}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{$item->content}}</p>
                        <a href="{{asset('/edit-article/'.$item->id)}}" class="btn btn-info  btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger  btn-sm">delect</button>

                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>
@endsection
