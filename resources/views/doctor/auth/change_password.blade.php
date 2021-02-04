@extends('layouts.app')

@section('main-content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Update Password</h3>
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
								<p class="account-subtitle">Reset Password</p>
								
								<!-- Form -->
								<form action="{{ route('doctor.change.password') }}" method="POST">
                                    @csrf

                                    @method('PATCH')

									<div class="form-group">
										<input id="oldpassword" name="oldpassword" class="form-control" type="password" placeholder="Old Password">
                                    </div>
                                    <div class="form-group">
										<input name="oldpassword" class="form-control" type="password" placeholder="New Password">
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