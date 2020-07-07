@extends('layouts.app')

@section('sidebar')
@include("layouts/partials.sidebar")
@endsection

@section('header')
@include("layouts/partials.header")
@endsection

@section('body')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(../assets/img/illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-0 text-uppercase">Add a Story</h3>
                <p class="mt-2">Add your beautiful stories here</p>
                <a class="btn btn-link pl-0 btn-sm"
                    href="/home"> <span
                        class="fas fa-arrow-left ml-1 fs--2"></span> Back to home</a>
            </div>
        </div>
    </div>
    @include('layouts.partials.alert')
</div>

<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Create Stories</h5>
    </div>
    <div class="card-body bg-light">
        <div class="row">
            <div class="col-12">
                <form method='POST' enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Story Type</label>
                        <input class="form-control" id="name" type="text" placeholder="Story Type" name='story_type' required>
                    </div>
                     <div class="form-group">
                        <label for="name">Author</label>
                        <input class="form-control" id="name" type="text" placeholder="Author" name='author' required>
                    </div>
                      <div class="form-group">
                        <label for="name">Story Title</label>
                        <input class="form-control" id="name" type="text" placeholder="Story Title" name='title' required>
                    </div>
        
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Compose Story</label>
                        <textarea class="form-control" rows="5" name='content' required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Add Picture</label>
                        <input class="form-control-file" name="picture_url" multiple type="file">
                    </div>
                     <div class="form-group">
                        <label for="exampleFormControlFile1">Add Audio</label>
                        <input class="form-control-file" name="audio_url" multiple type="file">
                    </div>
                     <div class="form-group">
                        <label for="exampleFormControlFile1">Add Video</label>
                        <input class="form-control-file" name="video_url" multiple type="file">
                    </div>
                    <button class="btn btn-primary mb-3" type="submit">Save</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('footer')
@include("layouts/partials.footer")
@endsection