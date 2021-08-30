@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Listing Cards</h4>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp; <span class="" id="Select_date"> {{ date('M d') }}</span> <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
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
        <form method="POST" action="{{ route('print.cards') }}">
            {{ csrf_field() }}
            @include('admin.partials.msg.all')
        <div class="row bg-white p-3">
                <div class="col">
                    <h3>Select policy numbers to print </h3>
                    @foreach($cards as $item)
                        <input type="checkbox" name="id[]" value="{{ $item->id }}"> {{ $item->policy_no }}
                    @endforeach
                    <input type="hidden" name="design" value="{{ $design  }}" />
                </div>
                <div class="col-auto align-self-center">
                    <a href="{{ route('card.policy.show', $id) }}" type="submit" class="btn btn-warning">EDIT CARD</a>
                    <button type="submit" class="btn btn-success">PRINT CARD</button>
                    @if ($design)
                        <a href="{{ request()->url() }}?download" class="btn btn-primary">PRINT ALL</a>


                        <a href="{{ request()->url() }}?no_design" class="btn btn-warning">No design</a>
                    @else
                        <a href="{{ request()->url() }}?no_design&download" class="btn btn-primary">PRINT ALL</a>

                        <a href="{{ request()->url() }}" class="btn btn-warning">Add design</a>
                    @endif


                </div>
        </div>
        </form>
        <div class="row -white p-4" style="background-color: #837e7e;">

            <div class="col-12">

                @foreach($cards as $item)
                    @if ($design)
                        <div class="sema-card" style="background-image: url('/images/card.jpeg')">
                            @else
                                <div class="sema-card">
                                @endif
                    <div class="header">

                    </div>
                    <div class="body">
                        <div class="photo" style="width: 25%; height: 100%" >
                            <img style="max-height: 160px; width: 100%" src="{{ $item->photo }}" />
{{--                            <img src="/assets/images/users/user-1.jpg" />--}}
                        </div>
                        <div class="detail">
                            <table>
                                <tr><td>Name </td><td style="text-transform: capitalize">:{{ $item->full_name }}</td></tr>
                                <tr><td>CPR </td><td>:{{ $item->cpr_no }}</td></tr>
                                <tr><td>ID No. </td><td>:{{ number_format($item->policy_no,'0',' ',' ') }}</td></tr>
                                <tr><td>Valid till </td><td>:{{ $item->expiry_date }}</td></tr>
                            </table>

                            <h4 style="margin-top: 13px"><strong>This is Not Insurance Card</strong></h4>

                        </div>
                    </div>
                    <div class="foot">
                    </div>


                                    <a href="{{ route('online.card', $item->policy_no) }}" class="btn btn-primary">View Card Online</a>

                                </div>

                                @endforeach
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
@endsection





@section('styles')
    <style>

        .sema-card {
            /*border-radius: 40px;*/
            background-color: white;
            background-position: center !important;
            background-size: cover!important;
            background-repeat: no-repeat;
            position:relative;
            height:350px;
            width:550px;
            margin:20px auto;
        }
        .sema-card .header {
            height:80px;
            width:100%;
            padding:15px 20px;
        }
        .sema-card .body {
            padding: 10px 10px;
            height: 180px;
            /*background: #ccc;*/
        }
        .sema-card .body td {
            /*padding-right: 15px;*/
            font-weight: 400;
            font-size: 1.5em;

            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .sema-card .body .detail {
            float: left;
        }

        .sema-card .body .photo {
            margin-right: 15px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            float: left;
        }
    </style>
@endsection

@section('styless')
   <style>
       .bg-grid-line,
       .card:after,
       .card header:before {
           background-color: #333;
           background-image:
               linear-gradient(0deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent),
               linear-gradient(90deg, transparent 24%, rgba(255, 255, 255, .05) 25%, rgba(255, 255, 255, .05) 26%, transparent 27%, transparent 74%, rgba(255, 255, 255, .05) 75%, rgba(255, 255, 255, .05) 76%, transparent 77%, transparent);
           height:100%;
           background-size:50px 50px;
       }



       .card:hover img {
           -webkit-filter:invert(100%);
           filter:invert(100%);

           border:5px solid rgba(0, 0, 0, .5);
           box-shadow:0 0 3px rgba(255, 255, 255, .25);
       }

       /* card stripe */
       .card:before {
           position:absolute;
           z-index:2;
           content:'';
           left:50%;
           top:-70px;
           margin: 0 0 0 -40px;
           height:100px;
           width:80px;
           background: rgba(255, 255, 255, .2);
           background-image:
               linear-gradient(left, rgba(255,255,255, .4) 0%, rgba(255,255,255, .1) 50%,rgba(255,255,255, .4) 100%),
               linear-gradient(bottom, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 40%),
               linear-gradient(top, rgba(255, 255, 255, .8) 0%, rgba(255, 255, 255, 0) 40%)
       ;
           border-radius:6px;
           box-shadow:0 0 0 1px rgba(0, 0, 0, .8);
           opacity:.5;
       }


       /* card stripe clip */
       .card:after {
           position:absolute;
           content:'';
           z-index:2;
           height:20px;
           width:20px;
           top:-55px;
           left:50%;
           margin:0 0 0 -10px;

           border-radius:50%;
           box-shadow:
               0 0 0 5px rgba(255, 255, 255, .6),
               0 0 10px rgba(0, 0, 0, .7),
               inset 2px 2px 2px rgba(0, 0, 0, .5)
       ;
       }

       .card header {
           position:relative;
           background:#ED3D34;
           height:90px;
           width:100%;
           border-top-left-radius:4px;
           border-top-right-radius:4px;
           border-bottom:2px solid rgba(180, 80, 80, .5);
           border-top:1px solid rgba(221, 108, 108, .8);
           box-shadow:
               inset 0 1px 0 0 rgba(255, 120, 120, .8),
               0 1px 2px rgba(0, 0, 0, .4)
       ;

           padding:35px 20px;
           opacity:.9;
       }

       /* top gradient */
       .card header:after {
           position:absolute;
           content:'';
           left:1px;
           top:1px;
           width:100%;
           height:10px;
           background:
               linear-gradient(bottom, rgba(255,255,255, .1) 0%, rgba(255,255,255,.05) 70%, rgba(255,255,255,0) 100%);
       }

       /* card hole */
       .card header:before {
           position:absolute;
           z-index:1;
           content:'';
           left:50%;
           top:22px;
           margin: 0 0 0 -50px;
           height:15px;
           width:100px;
           border-radius:25px;
           box-shadow:
               inset 1px 1px 0 1px rgba(0, 0, 0, .3),
               inset -1px -1px 0 0 rgba(255, 255, 255, .5)
       ;
       }

       .card header h1 {
           color:#fff;
           line-height:90%;
           font-size:35px;
           margin:0;
           text-shadow:-1px -1px 1px rgba(0, 0, 0, .5);
       }

       .card article {
           padding:30px;
       }

       .card article img {
           border:5px solid #fff;
           box-shadow:0 0 3px rgba(0, 0, 0, .25);
           float:left;
           margin-right:30px;
           width:190px;
           height:250px;
           transition:all .3s ease-in-out;
       }

       .card article h2 {
           color:#515355;
           float:left;
           margin:0 5px 15px 0;
           font-weight:normal;
           padding:0 0 8px 0;
           width:450px;
       }

       .card article .area {
           position:relative;
           height:170px;
           width:470px;
           float:left;
           overflow-y:scroll;
       }

       .card article .area h3 {
           margin:0;
           color:#5F6163;
           font-size:20px
       }

       .card article .area ul {
           margin:5px 0 30px 0;
           padding:0;
           list-style:none;
       }

       .card article .area ul li {
           margin:20px 0 0 0;
           font-size:16px;
           color:#94957F;
           text-shadow:0 0 1px rgba(0, 0, 0, .3);
       }

       .card article .area ul li .bar {
           position:relative;
           width:280px;
           height:15px;
           display:inline-block;
           border-radius:50px;
           float:right;
           margin:0 15px 0 0;

           opacity:.9;

           background-color:#CACACA;
           box-shadow: inset 0 2px 2px rgba(0, 0, 0, .35);
       }

       .card article .area ul li .bar:before {
           position:absolute;
           left:0;
           width:0;
           height:15px;
           background: rgb(254,213,121);
           /*background-image:
             linear-gradient(left, rgba(254,213,121,.8) 0%,rgba(254,204,105,.8) 100%),
             repeating-linear-gradient(-45deg, transparent,
               transparent 4px,
               rgba(255,255,255,.5) 4px,
               rgba(255,255,255,.5) 10px);
           background-image:
             linear-gradient(to right, rgba(254,213,121,.8) 0%,rgba(254,204,105,.8) 100%),
             repeating-linear-gradient(-45deg, transparent,
               transparent 4px,
               rgba(255,255,255,.5) 4px,
               rgba(255,255,255,.5) 10px);*/
           box-shadow:
               inset 0 4px 4px rgba(255, 255, 255, .3),
               inset 0 -2px 3px rgba(0, 0, 0, .05),
               0 1px 0 0px #D29D40
       ;
           display:inline-block;
           border-radius:50px;
           content:'';
           z-index:-1;
       }

       .card article .area ul li .bar.percent-100:before {width:280px;}
       .card article .area ul li .bar.percent-90:before {width:260px;}
       .card article .area ul li .bar.percent-80:before {width:240px;}
       .card article .area ul li .bar.percent-70:before {width:220px;}
       .card article .area ul li .bar.percent-60:before {width:200px;}
       .card article .area ul li .bar.percent-50:before {width:180px;}

       .card article .area ul li:before {
           content:'\2605';
           margin-right:5px;
       }

       .card article .area::-webkit-scrollbar {
           width: 10px;
       }

       .card article .area::-webkit-scrollbar-track {
           background-color: rgba(217, 217, 217, .5);
           border-radius:50px;
       }

       .card article .area::-webkit-scrollbar-thumb {
           background: rgba(184, 184, 184, .5);
           box-shadow:
               inset 1px 1px 0 rgba(0, 0, 0, 0.10),
               inset 0 -1px 0 rgba(0, 0, 0, 0.07)
       ;
           border-radius:50px;
       }
   </style>
@endsection
