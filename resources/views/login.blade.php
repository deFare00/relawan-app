<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | Login Page</title>

        <!-- Global stylesheets -->
        <link href="{{ asset('css/googleapis-roboto.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('plugins/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/bootstrap/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/dist/layout.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/dist/components.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/dist/colors.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon">
        <style>
            .content { overflow-x: hidden !important; }
            .bg-gray-2 { background: #464b51; }
            .card-login { width: 334px; }
        </style>
    </head>
    <body>
        <!-- Page content -->
        <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Content area -->
                <div class="content p-0">
                    <div class="row h-100" style="overflow-x:hidden">
                        <div class="col-lg-6 d-flex justify-content-center align-items-center bg-white">
                            <img src="{{ asset('img/prabowonew.png') }}" width="50%" alt="" />
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center align-items-center bg-gray-2">
                            <form method="POST" action="{{ url('login') }}" novalidate="novalidate">
                                <div class="card card-login">
                                    <div class="card-header text-center pb-2">
                                        <h6 class="card-title font-weight-semibold text-muted">Login Page</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group form-group-feedback form-group-feedback-right">
        									<input type="email" id="email" autocomplete="off" name="email" class="form-control" placeholder="Email" required="" value="">
        									<div class="form-control-feedback">
        										<i class="icon-user text-muted"></i>
        									</div>
        								</div>
                                        <div class="form-group form-group-feedback form-group-feedback-right">
        									<input type="password" id="password" autocomplete="off" name="password" class="form-control" placeholder="Password" required="" value="">
        									<div class="form-control-feedback">
        										<i class="icon-lock2 text-muted"></i>
        									</div>
        								</div>
                                        <div class="form-group mb-2">
        									<button type="submit" class="btn bg-primary w-100">Login</button>
        								</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /content area -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->
        <!-- /default modal -->
        <!-- Core JS files -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('plugins/loaders/blockui.min.js') }}"></script>
        <!-- /core JS files -->
        <!-- Theme JS files -->
        <script>var main_url = "{{ env('APP_URL') }}";</script>
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- /theme JS files -->
    </body>
</html>
