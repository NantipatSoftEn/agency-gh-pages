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
                <h2 class="section-heading text-uppercase">Edit article</h2>
                <form class="" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">URL</label>
                        <input type="text" class="form-control" name="url" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea class="form-control"  name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
