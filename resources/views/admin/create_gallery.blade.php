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
                <h3 class="mb-0">Add to Gallary </h3>
                <p class="mt-2">Add your beautiful pitures here</p><a class="btn btn-link pl-0 btn-sm"
                    href="/" target="_blank"> Back to home<span
                        class="fas fa-chevron-right ml-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    @include('layouts.partials.alert')
</div>
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Create Gallary</h5>
    </div>
    <div class="card-body bg-light">
        <div class="row">
            <div class="col-12">
                <form method='POST' enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="name">Picture Title</label>
                        <input class="form-control" id="name" type="text" placeholder="Picture Title" name="title">
                    </div>
        
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Brief Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Tag to a theme</label>
                        <select class="form-control" name="theme" >
                            <option value="">Select a Theme</option>
                            @foreach($themes as $theme)
                                <option value="{{$theme->id}}">{{$theme->theme_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="picture">Select Picture to add</label>
                        <input class="form-control-file" type="file" name="picture">
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