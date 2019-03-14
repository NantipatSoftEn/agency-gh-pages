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
                    <h2 class="section-heading text-uppercase">Form article</h2>
                    <!-- with ins -->
                <form class="" action="{{url('/article-ins')}}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="">
                    </div>
                 
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea class="form-control"  name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- with update -->
                  <form class="" action="{{url('/article-upd')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="article_id" value="3">
                    <input type="hidden" name="path_pic" value="C:\Users\stura\Desktop\agency-gh-pages\public\article\1552494022.jpg">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <!-- with delete -->
                 <form action="{{url('/article-del')}}"  method="POST"  enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="picture_id" >
                    <input type="hidden" name="picture_del" >
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
