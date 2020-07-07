@extends('layouts.app')

@section('sidebar')
@include("layouts/partials.sidebar")
@endsection

@section('header')
@include("layouts/partials.header")
@endsection

@section('body')
<div class="card mb-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-auto mb-2 mb-sm-0">
            <h6 class="mb-0">Showing 1 - 10 of {{$pagination->total()}} Stories</h6>
            </div>
            <div class="col-sm-auto">
                <form class="d-inline-block mr-3">
                    <div class="input-group input-group-sm d-flex align-items-center"><small class="mr-1">Sort by:
                        </small><select class="custom-select" aria-label="Bulk actions">
                            <option selected="">Best Match</option>
                            <option value="Refund">Newest</option>
                            <option value="Delete">Price</option>
                        </select></div>
                </form><a class="text-600" href="product-grid.html" data-toggle="tooltip" data-placement="top"
                    title="Product Grid"><span class="fas fa-th"></span></a>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    
        
    @foreach($stories_complete as $story)
    <div class="card-body p-0 overflow-hidden">
        <div class="row no-gutters">
            <div class="col-12 p-3">
                <div class="p-1">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="position-relative h-sm-100"><a class="d-block h-100"
                                    href="product-details.html"><img
                                        class="img-fluid fit-cover w-sm-100 h-sm-100 rounded absolute-sm-centered"
                                        src="../assets/img/products/2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h5 class="mt-3 mt-sm-0"><a class="text-dark fs-0 fs-lg-1 text-uppercase"
                                    href="/show/{{$story['story']->id}}"> {{$story['story']->title}}</a></h5>
                                    <p class="fs--1 mb-2 mb-md-3"><a class="text-500" href="#!">Description</a>
                                    </p>
                                    <p>

                                        @if (strlen($story['story']->content) > 200) 
                                            {{ substr($story['story']->content, 0, 200) . "..." }}
                                        @else 
                                            {{ $story['story']->content }}
                                        @endif
                                        
                                        {{-- {{$story['story']->content}} --}}
                                    </p>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-between flex-column">
                                    <div>
                                        <h4 class="fs--1 fs-md-2 text-info mb-0">{{$story['story']->author}}</h4>
                                        <h5 class="fs--1 text-500 mb-0 mt-1">{{$story['story']->created_at}}</h5>

                                        <div class="d-none d-lg-block">
                                            <p class="fs--1 mb-1">Likes: <strong>{{$story['story']->like}}</strong></p>
                                            {{-- <p class="fs--1 mb-1">Visibilty: <strong class="text-success">Yes</strong> --}}
                                            </p>
                                            
                                        </div>
                                    </div>
                                    <div>
                                    
                                        <a class="btn btn-sm btn-info d-lg-block mt-2 " href="/show/{{$story['story']->id}}">
                                            <span class="fas fa-eye"></span><span
                                                class="ml-2 d-none d-md-inline-block">Read more</span>
                                        </a>
                                    <a class="btn btn-sm btn-primary d-lg-block mt-2" href="/edit/{{$story['story']->id}}">
                                            <span class="fas fa-edit"> </span><span
                                                class="ml-2 d-none d-md-inline-block">Edit story</span>
                                    </a>
                                    <form action="{{ url('/delete', ['id' => $story['story']->id]) }}" method="post">
                                        <button type="submit" style="color: white" class="btn btn-danger btn-sm btn-outline-secondary d-lg-block mt-2">
                                            <span class="fas fa-trash"></span>
                                            {{-- Delete story --}}
                                            <span class="ml-2 d-none d-md-inline-block">Delete story</span>
                                        </button>
                                                {{-- <input type="submit" value="Delete" class="btn btn-sm btn-outline-secondary border-300 d-lg-block mt-2 mt-md-3 mr-2 mr-lg-0"/> --}}
                                        <input type="hidden" name="_method" value="delete" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
    @endforeach



    <div class="card-footer border-top d-flex justify-content-center">
        {{$pagination->links()}}
        {{-- <div>
            <button class="btn btn-falcon-default btn-sm mr-1 mr-sm-2" type="button" disabled data-toggle="tooltip"
                data-placement="top" title="Prev"><span class="fas fa-chevron-left"></span>
            </button>
            <a class="btn btn-sm btn-falcon-default text-primary mr-2" href="#!">1</a>
            <a class="btn btn-sm btn-falcon-default mr-2" href="#!">2</a>
            <a class="btn btn-sm btn-falcon-default mr-2" href="#!">
                <span class="fas fa-ellipsis-h"></span>
            </a>
            <a class="btn btn-sm btn-falcon-default mr-2" href="#!">35</a>
            <button class="btn btn-falcon-default btn-sm" type="button" data-toggle="tooltip" data-placement="top" title="Next"><span class="fas fa-chevron-right"></span></button>
        </div> --}}
    </div>
</div>
@endsection


@section('footer')
@include("layouts/partials.footer")
@endsection