@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">General Setting</h4>
                        </div>

                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>


        <!--end row--><!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">

                @include('admin.partials.msg.error')
                <!--end card-header-->
                    <div class="card-body">
                        <div class="">
                            <form action="{{ route('settings.store') }}" method="POST">

                                @csrf

                                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Site General setting</h6>


                                <input value="Save" type="submit" class="btn btn-success float-right  mr-2" />
                                <div class="table-wrapper">
                                    <table class="table table-bordered display table-condensed responsive nowrap">
                                        <thead>
                                        <tr>
                                            <th class="wd-20p"> Name</th>
                                            <th class="wd-70p">Value</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-capitalize">Logo White</td>
                                            <td>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <a data-input="logo_white_thumbnail" data-preview="logo_white" class="btn btn-primary lfm">
                                                            <i class="fas fa-picture"></i> Choose Image</a>
                                                    </span>
                                                    <input id="logo_white_thumbnail" class="form-control" type="text" value="{{ setting('logo_white') }}" name="logo_white">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-capitalize">Logo Colored</td>
                                            <td>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <a data-input="logo_color_thumbnail" data-preview="logo_color" class="btn btn-primary lfm">
                                                            <i class="fas fa-picture"></i> Choose Image</a>
                                                    </span>
                                                    <input id="logo_color_thumbnail" class="form-control" type="text" value="{{ setting('logo_color') }}" name="logo_color">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-capitalize">Site Name</td>
                                            <td>
                                                <input class="form-control" width="70%" name="site_phone" type="text"  required value="{{ setting('site_phone') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-capitalize">Phone</td>
                                            <td>
                                                <input class="form-control" width="70%" name="site_phone" type="text"  required value="{{ setting('site_phone') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-capitalize">Address</td>
                                            <td>
                                                <input class="form-control" width="70%" name="address" type="text"  required value="{{ setting('address') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-capitalize">Whatsapp</td>
                                            <td>
                                                <input class="form-control" width="70%" name="whatsapp" type="text"  required value="{{ setting('whatsapp') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-capitalize">Email</td>
                                            <td>
                                                <input class="form-control" width="70%" name="email" type="text"  required value="{{ setting('email') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-capitalize">Instagram Email</td>
                                            <td>
                                                <input class="form-control" width="70%" name="instagram" type="text"  required value="{{ setting('instagram') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-capitalize">Video Link
                                            <br/>[Only youtube links]
                                            </td>
                                            <td>
                                                <input class="form-control" width="70%" name="home_video_link" type="text"  required value="{{ setting('home_video_link', 'null') }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-capitalize">Site Info

                                            </td>
                                            <td>
                                                <textarea class="form-control" width="70%" name="site_info" type="text"  required>
                                                    {{ setting('site_info', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
We are among the most qualified implant providers in the AUS with over 30 years of quality training and experience.') }}
                                                </textarea>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- table-wrapper -->

                                <input value="Save" type="submit" class="btn btn-success float-right" />

                            </form>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
@endsection



@section('js')
    <!-- Required datatable js -->
    <script src="https://mannatthemes.com/dastyle/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://mannatthemes.com/dastyle/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->

    <!-- Responsive examples -->
    <script src="https://mannatthemes.com/dastyle/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="https://mannatthemes.com/dastyle/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="/assets/pages/jquery.datatable.init.js"></script>
    <!-- App js -->
@endsection

@section('styles')
    <link href="https://mannatthemes.com/dastyle/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="https://mannatthemes.com/dastyle/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

@endsection
