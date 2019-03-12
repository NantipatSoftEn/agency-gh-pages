@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

@endsection

@section('content')
<section id="services">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading text-uppercase">Form Album</h2>

                <form action="{{url('/form-album')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="file" form-control-file name="picture_up[]" multiple>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">URL youtube</label>
                        <input type="text" class="form-control" name="title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea class="form-control" name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection



@section('js')
<script src="js/dropzone.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery-1.10.2.min.js"></script>
@endsection
