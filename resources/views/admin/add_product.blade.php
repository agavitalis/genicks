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
                        <input class="form-control" type="text" placeholder="Product/Service Name" name='product_name'>
                    </div>
                    <div class="form-group">
                        <label for="name">Product Status</label>
                        <select  class="form-control"  name="product_status" id="product_status">
                            <option value="sale">For Sale</option>
                            <option value="sale">For Rent</option>
                            <option value="sale">For Lease</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="about-product">About Product/Service</label>
                        <textarea class="form-control" id="about-product" rows="3"
                            name='product_description'></textarea>
                    </div>

                    <div class="form-group">
                        <label for="sample-picture">Product Sample Picture<small>(545 x 350)</small></label>
                        <input class="form-control-file" id="sample-picture" type="file" name='product_picture'>
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