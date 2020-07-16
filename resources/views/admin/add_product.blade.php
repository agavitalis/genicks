@extends('layouts.app_admin')

@section('sidebar')
@include("layouts/partials.admin.sidebar")
@endsection

@section('header')
@include("layouts/partials.admin.header")
@endsection

@section('body')
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"
        style="background-image:url(../assets/img/illustrations/corner-4.png);"></div>
    <!--/.bg-holder-->
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-0">Add a Product</h3>
                <a class="btn btn-link pl-0 btn-sm" href="/" target="_blank"> Back to home<span
                        class="fas fa-chevron-right ml-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    @include('layouts.partials.admin.alert')
</div>
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Create Product</h5>
    </div>
    <div class="card-body bg-light">
        <div class="row">
            <div class="col-12">
                <form method='POST' enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Product A Name</label>
                        <input class="form-control" type="text" placeholder="Archieve Name" name='product_name'>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Old Price</label>
                                <input class="form-control" type="text" placeholder="Old Price" name='old_price'>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Actual Price</label>
                                <input class="form-control" type="text" placeholder="Actual Price" name='price'>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">About Product</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name='about_product'></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Product Sample Picture</label>
                        <input class="form-control-file" id="exampleFormControlFile1" type="file" name='picture'>
                    </div>

                    <button class="btn btn-primary mb-3" type="submit">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('footer')
@include("layouts/partials.admin.footer")
@endsection