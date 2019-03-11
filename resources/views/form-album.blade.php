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
                <form action="/upload-target" class="dropzone files-container"></form>
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
