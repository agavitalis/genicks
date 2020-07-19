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
                <h3 class="mb-0">Manage Quote Requests</h3>
                <a class="btn btn-link pl-0 btn-sm" href="/" target="_blank"> Back to home<span
                        class="fas fa-chevron-right ml-1 fs--2"></span></a>
            </div>
        </div>
    </div>
    @include('layouts.partials.admin.alert')
</div>
<div class="card mb-3">
    <div class="card-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Quote Request List</h5>
            </div>
            <div class="col-8 col-sm-auto ml-auto text-right pl-0">
                <div class="d-none" id="orders-actions">
                    <div class="input-group input-group-sm"><select class="custom-select cus" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Refund</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                        </select><button class="btn btn-falcon-default btn-sm ml-2" type="button">Apply</button></div>
                </div>
                <div id="dashboard-actions"><button class="btn btn-falcon-default btn-sm" type="button"><span
                            class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span
                            class="d-none d-sm-inline-block ml-1">New</span></button><button
                        class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter"
                            data-fa-transform="shrink-3 down-2"></span><span
                            class="d-none d-sm-inline-block ml-1">Filter</span></button><button
                        class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt"
                            data-fa-transform="shrink-3 down-2"></span><span
                            class="d-none d-sm-inline-block ml-1">Export</span></button></div>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="falcon-data-table">
            <table class="table table-sm mb-0 table-striped table-dashboard fs--1 data-table border-bottom border-200"
                data-options='{"searching":false,"responsive":false,"info":false,"lengthChange":false,"sWrapper":"falcon-data-table-wrapper","dom":"<&#39;row mx-1&#39;<&#39;col-sm-12 col-md-6&#39;l><&#39;col-sm-12 col-md-6&#39;f>><&#39;table-responsive&#39;tr><&#39;row no-gutters px-1 py-3 align-items-center justify-content-center&#39;<&#39;col-auto&#39;p>>","language":{"paginate":{"next":"<span class=\"fas fa-chevron-right\"></span>","previous":"<span class=\"fas fa-chevron-left\"></span>"}}}'>
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="align-middle no-sort">
                            <div class="custom-control custom-checkbox"><input
                                    class="custom-control-input checkbox-bulk-select"
                                    id="checkbox-bulk-purchases-select" type="checkbox" data-checkbox-body="#orders"
                                    data-checkbox-actions="#orders-actions"
                                    data-checkbox-replaced-element="#dashboard-actions"><label
                                    class="custom-control-label" for="checkbox-bulk-purchases-select"></label></div>
                        </th>
                        <th class="align-middle sort">Order</th>
                        <th class="align-middle sort pr-7">Date</th>
                        <th class="align-middle sort">Title</th>
                        <th class="align-middle sort" style="min-width: 12.5rem;">Message</th>
                        <th class="align-middle sort text-center">Status</th>

                        <th class="no-sort"></th>
                    </tr>
                </thead>
                <tbody id="orders">
                    @php
                    $count = 1;
                    @endphp
                    @foreach($quote_requests as $quote_request)
                    <tr class="btn-reveal-trigger">
                        <td class="py-2 align-middle">
                            <div class="custom-control custom-checkbox"><input
                                    class="custom-control-input checkbox-bulk-select-target" type="checkbox"
                                    id="checkbox-0" /><label class="custom-control-label" for="checkbox-0"></label>
                            </div>
                        </td>
                        <td class="py-2 align-middle white-space-nowrap"><a href="order-details.html">
                                <strong>#{{$count}}</strong></a> by <strong>{{$quote_request->name}}</strong><br /><a
                                href="mailto:{{$quote_request->email}}">{{$quote_request->email}}</a></td>
                        <td class="py-2 align-middle">{{$quote_request->created_at->diffForHumans()}}</td>
                        <td class="py-2 align-middle  fs-0 font-weight-medium">{{$quote_request->service}}</td>
                        <td class="py-2 align-middle">{{$quote_request->description}}<p class="mb-0 text-500">
                                {{$quote_request->service}}</p>
                        </td>
                        <td class="py-2 align-middle text-center fs-0 white-space-nowrap"><span
                                class="badge badge rounded-capsule d-block badge-soft-success">{{$quote_request->status}}<span
                                    class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span></span></td>

                        <td class="py-2 align-middle white-space-nowrap">
                            <div class="dropdown text-sans-serif">
                                <button
                                    class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal mr-3" type="button"
                                    id="order-dropdown-0" data-toggle="dropdown" data-boundary="viewport"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--1"></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right border py-0"
                                    aria-labelledby="order-dropdown-0">
                                    <div class="bg-white py-2">
                                        <a class="dropdown-item change-status" data-id="{{$quote_request->id}}" data-status="Completed" href="#!">Completed</a>
                                        <a class="dropdown-item change-status" data-id="{{$quote_request->id}}" data-status="Processing" href="#!">Processing</a>
                                        <a class="dropdown-item change-status" data-id="{{$quote_request->id}}" data-status="On Hold"  href="#!">On Hold</a>
                                        <a class="dropdown-item change-status" data-id="{{$quote_request->id}}" data-status="Pending" href="#!">Pending</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger delete-request" data-id="{{$quote_request->id}}" href="#!">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @php
                    $count ++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <form>
        @csrf
    </form>
</div>
@endsection


@section('footer')
@include("layouts/partials.admin.footer")
@endsection

@section('scripts')
    <!--/ sweet alert script -->
    <script src="{{ asset('admin_assets/js/sweet-alert.js')}}"></script>
   <!--/ custom scripts -->
    <script src="{{ asset('admin_assets/js/manage_quote_requests.js')}}"></script>
@endsection