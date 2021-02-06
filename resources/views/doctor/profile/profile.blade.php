@extends('layouts.app')

@push('style')

    <style>
        .is-valid{
            border:1px soli green;
        }
    </style>


@endpush

@section('main-content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Doctor Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">


                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <!-- Main Wrapper -->
            <div class="main-wrapper login-body">
                <div class="login-wrapper">
                    <div class="container">
                        <div class="loginbox">
                            <div class="login-left">
                                <img class="img-fluid" src="{{ asset('admin/assets/img/reset-pass.png') }}" alt="Logo">
                            </div>
                            <div class="login-right">
                                <div class="login-right-wrap">
                                    <h1>Forgot Password?</h1>

                                @includeif('admin.success.message')

                                <!-- Form -->
                                    <form action="{{ route('doctor.change.password') }}" method="POST" id="doctor_update_password">
                                        @csrf

                                        @method('PATCH')

                                        <div class="form-group">
                                            <input id="oldpassword" name="oldpassword" class="form-control" type="password" placeholder="Old Password">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" id="password" class="form-control" type="password" placeholder="New Password">
                                        </div>
                                        <div class="form-group">
                                            <input  name="password_confirmation" class="form-control" type="password" placeholder="Confirm Password">
                                        </div>

                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                                        </div>


                                    </form>
                                    <!-- /Form -->

                                    <div class="text-center dont-have">Remember your password? <a href="{{ route('doctor.login') }}">Login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Wrapper -->

        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            //Validate form data
            $('#doctor_update_password').validate({
                rules: {
                    oldpassword: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    password_confirmation: {
                        required: true,
                        equalTo: '#password'
                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid').addClass('is-valid');
                }
            });
        });
    </script>
@endpush
