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
                <h3 class="mb-0">Create a theme </h3>
                <p class="mt-2">Add your beautiful themes here</p><a class="btn btn-link pl-0 btn-sm"
                    href="/" target="_blank"> Back to home<span
                        class="fas fa-chevron-right ml-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    @include('layouts.partials.alert')
</div>
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Create Theme</h5>
    </div>
    <div class="card-body bg-light">
        <div class="row">
            <div class="col-12">
               
                <form method='POST' enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="name">Theme Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Theme Name" name='name'>
                    </div>
        
                    <div class="form-group">
                        <label for="description">Theme Description</label>
                        <textarea class="form-control" id="" rows="3" name="description"> A Short Description Here</textarea>
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