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
                <h3 class="mb-0">Add an archieve</h3>
                <p class="mt-2">Add Some archieves</p><a class="btn btn-link pl-0 btn-sm"
                    href="/" target="_blank"> Back to home<span
                        class="fas fa-chevron-right ml-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    @include('layouts.partials.alert')
</div>
<div class="card mb-3">
    <div class="card-header">
        <h5 class="mb-0">Create Archive</h5>
    </div>
    <div class="card-body bg-light">
        <div class="row">
            <div class="col-12">
                <form method='POST' enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="name">Archieve Name</label>
                        <input class="form-control" id="name" type="text" placeholder="Archieve Name" name='archive_name'>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Age</label>
                                <input class="form-control" id="name" type="text" placeholder="Age" name='age'>
                            </div>
                            <div class="form-group">
                                <label for="name">State</label>
                                <input class="form-control" id="name" type="text" placeholder="State" name='state'>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Marital Status</label>
                                <input class="form-control" id="name" type="text" placeholder="Marital Status" name='marital_status'>
                            </div>
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input class="form-control" id="name" type="text" placeholder="Title" name='title'>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Category</label>
                        <input class="form-control" id="name" type="text" placeholder="Category" name='category'>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Pre War Occupation</label>
                                <input class="form-control" id="pre_war_occupation" type="text" placeholder="Pre War Occupation" name='pre_war_occupation'>
                            </div>
                            <div class="form-group">
                                <label for="name">Status</label>
                                <input class="form-control" id="name" type="text" placeholder="Status" name='status'>
                            </div>
                            <div class="form-group">
                                <label for="name">Year Of Death</label>
                                <input class="form-control" id="name" type="text" placeholder="Year Of Death" name='year_of_death'>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Post War Occupation</label>
                                <input class="form-control" id="name" type="text" placeholder="Post War Occupation" name='post_war_occupation'>
                            </div>
                            <div class="form-group">
                                <label for="name">Current Location</label>
                                <input class="form-control" id="name" type="text" placeholder="current_location" name='current_location'>
                            </div>
                            <div class="form-group">
                                <label for="name">Cause Of Death</label>
                                <input class="form-control" id="name" type="text" placeholder="cause of death" name='cause_of_death'>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Spouse</label>
                        <input class="form-control" id="name" type="text" placeholder="Spouse" name='spouse'>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Children</label>
                                <input class="form-control" id="name" type="text" placeholder="children" name='children'>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Relatives</label>
                                <input class="form-control" id="name" type="text" placeholder="Relatives" name='relatives'>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Archieve Content</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='content'></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Select a Cover Picture</label>
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
@include("layouts/partials.footer")
@endsection