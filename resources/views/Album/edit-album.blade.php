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
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading text-uppercase">Edit Album</h2>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" name="picture" id="">
                </div>
            </div>
        </div>
        <div class="row">
                @foreach ($picture as $item)
                <div class="col-md-4">
                <img src="{{$item->path}}" alt="" class="img-thumbnail">
                </div>
                @endforeach
            </div>
</section>
@endsection
