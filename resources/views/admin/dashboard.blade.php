@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">{{ env('APP_NAME') }}</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        </ol>
                    </div>
                    <!--end col-->
                    <div class="col-auto align-self-center">
                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                            <span class="ay-name" id="Day_Name">Today:</span>&nbsp; <span class="" id="Select_date">{{ date('m d') }}</span> <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i data-feather="download" class="align-self-center icon-xs"></i></a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!--end row--><!-- end page title end breadcrumb -->
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-3">
            <div class="card report-card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <p class="text-dark mb-1 font-weight-semibold">Sama Cards</p>
                            <h3 class="my-2">{{ $cards->whereIsParent(1)->count() }}</h3>
                            <p class="mb-0 text-truncate text-muted">
                                <span class="text-success"><i class="mdi mdi-trending-up"></i><a href="{{ route('cards.index') }}">All created cards</a></span>
                            </p>
                        </div>
                        <div class="col-auto align-self-center">
                            <div class="report-main-icon bg-light-alt"><i data-feather="users" class="align-self-center text-muted icon-md"></i></div>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-6 col-lg-3">
            <div class="card report-card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <p class="text-dark mb-1 font-weight-semibold">Agents</p>
                            <h3 class="my-2">{{ $agents }}</h3>
                            <p class="mb-0 text-truncate text-muted">
                                <span class="text-success"><i class="mdi mdi-trending-up"></i><a href="{{ route('agents') }}"> All registered agents</a></span>
                            </p>
                        </div>
                        <div class="col-auto align-self-center">
                            <div class="report-main-icon bg-light-alt"><i data-feather="clock" class="align-self-center text-muted icon-md"></i></div>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-6 col-lg-3">
            <div class="card report-card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <p class="text-dark mb-1 font-weight-semibold">Agent Cards</p>
                            <h3 class="my-2">{{ $agent_cards }}</h3>
                            <p class="mb-0 text-truncate text-muted">
                                <span class="text-success"><i class="mdi mdi-trending-down"></i><a href="#"> All agent registered cards</a></span>
                            </p>
                        </div>
                        <div class="col-auto align-self-center">
                            <div class="report-main-icon bg-light-alt"><i data-feather="activity" class="align-self-center text-muted icon-md"></i></div>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-6 col-lg-3">
            <div class="card report-card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <p class="text-dark mb-1 font-weight-semibold">Expired Cards</p>
                            <h3 class="my-2">{{ $expired_cards }}</h3>
                            <p class="mb-0 text-truncate text-muted">
                                <span class="text-danger"><i class="mdi mdi-trending-up"></i>All expired cards</span>
                            </p>
                        </div>
                        <div class="col-auto align-self-center">
                            <div class="report-main-icon bg-light-alt"><i data-feather="briefcase" class="align-self-center text-muted icon-md"></i></div>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col"><h4 class="card-title">Recent Cards</h4></div>
                        <!--end col-->
                        <div class="col-auto">
                            <ul class="nav nav-pills-custom nav-pills mb-0" id="pills-tab" role="tablist">
                                <li class="nav-item mr-1">
                                    <a class="nav-link active"  href="{{ route('cards.index') }}" >View All Cards</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('cards.create') }}" >Add New Card</a></li>
                            </ul>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Traffic_Sources" role="tabpanel" aria-labelledby="pills-traffic-tab">

                            <div class="table-responsive browser_users">
                                <table class="table table-striped table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th>Full name</th>
                                        <th data-priority="1">CPR No</th>
                                        <th data-priority="3">Phone No.</th>
                                        <th data-priority="3">Email</th>
                                        <th data-priority="3">Status</th>
                                        <th data-priority="6">Paid</th>
                                        <th data-priority="6">Expiry Date</th>
                                        <th data-priority="6">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cards->whereIsParent(1)->latest()->paginate(10) as $item)
                                        <tr>
                                            <td class="text-capitalize">{{ $item->full_name }}</td>
                                            <td>{{ $item->cpr_no }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td class=" text-uppercase">{{ $item->status }}</td>
                                            <td>{{ $item->paid ? 'Yes' : 'No' }}</td>
                                            <td>{{ $item->expiry_date }}</td>
                                            <td>
                                                <a class="btn btn-warning" href="{{ route('cards.edit', $item->id) }}"><i class="fa fa-edit"></i> </a>
{{--                                                @if ($item->paid)--}}
{{--                                                    <a class="btn btn-success" href="{{ route('cards', $item->policy_no) }}">View Cards</a>--}}
{{--                                                @endif--}}
{{--                                                <a class="btn btn-danger" href=""><i class="fa fa-trash"></i> </a>--}}
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>

        <!--end col-->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col"><h4 class="card-title">Unapproved Cards</h4></div>
                        <!--end col-->
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="my-5">
                        <div id="ana_1" class="apex-charts d-block w-90 mx-auto"></div>
                        <hr class="hr-dashed w-25 mt-0" />
                    </div>
                    <div class="text-center">
                        <h4>76% Cards</h4>
                        <p class="text-muted mt-2"></p>
                        <button type="button" class="btn btn-sm btn-outline-primary px-3 mt-2">View all</button>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

</div>
@endsection

@section('js')
    <script src="{{ asset('js/dashboard.js')}}"></script>
@endsection

