@extends('doctor.layouts.doctor-app')

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
							<div class="col">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											<img class="rounded-circle" alt="User Image" src="{{ asset('admin/assets/img/profiles/ashraf.jpg') }}">
										</a>
									</div>
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0">{{$doctor->name}}</h4>
										<h6 class="text-muted">{{$doctor->email}}</h6>
										<div class="user-Location"><i class="fa fa-map-marker"></i>{{$doctor->address}}</div>
										<div class="about-text">{{$doctor->designation_id}}</div>
									</div>
									<div class="col-auto profile-btn">

                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button>
									</div>
								</div>
							</div>

                            <!---Profile Edit Modal Start-->

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>Profile Editor</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                       Hello
                                                    </div>
                                                    <div class="col-md-6">
                                                        Hello
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!---Profile Edit Modal End-->


							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
									</li>
								</ul>
							</div>
							<div class="tab-content profile-tab-cont">

								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">

									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-12">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title justify-content-between">
														<span>Personal Details</span>

                                                        <form action="">
                                                            <div class="row">
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label for="name">Name</label>
                                                                        <input type="text" name="name" class="form-control" value="{{$doctor->name}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Email ID</label>
                                                                        <input type="email" name="email" class="form-control" value="{{$doctor->email}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Assistant Phone</label>
                                                                        <input type="text" name="phone" class="form-control" value="{{$doctor->assistant_phone}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Avatar</label>
                                                                        <input type="file" name="avatar" class="form-control" value="{{$doctor->avatar}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Address</label>
                                                                        <input type="text" name="address" class="form-control" value="{{$doctor->address}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        {{--                                                                            <h5 class="form-title"><span>Country</span></h5>--}}
                                                                        <label for="">Country</label>
                                                                        <select name="country" id="country">
                                                                            <option value="">Bangladesh</option>
                                                                            <option value="">Pakistan</option>
                                                                            <option value="">Turky</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Visit Fee</label>
                                                                        <input type="number" name="visit_fee" class="form-control" value="{{$doctor->visit_fee}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="mr-2">Any Offday</label>
                                                                        <input type="checkbox" name="is_offday" id="is_offday" class="mr-2" value="1"{{$doctor->is_offday ==1 ? 'checked' : ''}}>

                                                                        <select name="is_offday" id="is_offday">
                                                                            <option value="">Friday</option>
                                                                            <option value="">Saturday</option>
                                                                            <option value="">Sunday</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group hidden_break_time" style="display: none">
                                                                        <label>Break Time</label>
                                                                        <input type="number" name="break_time" class="form-control" value="{{$doctor->break_time}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Education</label>
                                                                        <table class="table table-bordered" id="dynamic_field">
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="text" name="education[0][key]" placeholder="Degree" class="form-control form-control-sm key_list" id="key" required>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" name="education[0][value]" placeholder="Institution" class="form-control form-control-sm value_list" id="value" required>
                                                                                </td>
                                                                                <td>
                                                                                    <button type="button" id="degree_add" class="btn btn-success fa fa-plus-circle">
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Address</label>
                                                                        <input type="text" name="address" class="form-control" value="{{$doctor->address}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Your Bio</label>
                                                                        <textarea class="form-control" name="bio" id="bio">{{$doctor->bio}}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Resume</label>
                                                                        <input type="file" name="resume" class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="mr-2">Is Madelist ?</label>
                                                                        <input type="checkbox" name="is_medelist" class="mr-2" value="1"{{$doctor->is_medelist ==1 ? 'checked' : ''}}>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <h5>Your Experience</h5>
                                                                    <div class="form-group">
                                                                        <label class="mr-2">Any Experience ?</label>
                                                                        <input type="checkbox" id="experience" class="" name="any_experience">
                                                                    </div>
                                                                    <img src="{{asset('loader/loader.gif')}}" id="loader" style="display:none">
                                                                    <div class="doctor_experience" style="display:none">
                                                                        <div class="form-group">
                                                                            <label>Start Date</label>
                                                                            <input type="date" class="form-control" name="start_date">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>End Date</label>
                                                                            <input type="date" class="form-control" name="start_date">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Clinic Name</label>
                                                                            <input type="text" class="form-control" name="clinic_name" id="clinic_name">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                                        </form>

												</div>
											</div>
										</div>
									</div>
									<!-- /Personal Details -->
								</div>
								<!-- /Personal Details Tab -->

								<!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">

									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
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
                                                                <button class="btn btn-primary btn-block" type="submit">Save Changes</button>
                                                            </div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Change Password Tab -->

							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /Page Wrapper -->

@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            //Doctor Profile Details form
            //hiding or showing is_offday div
            $("#is_offday").click(function() {
                if($("#is_offday").prop("checked")) {
                    setTimeout(()=>{
                        $('.hidden_break_time').fadeIn();
                    },1000)
                }
                else{
                    setTimeout(()=>{
                        $('.hidden_break_time').fadeOut();
                    },1000)
                }
            });

            //add more degree attributes options
            var i = 0;

            $('body').on('click','#degree_add',function(){

                var key = $("#key").val();
                var value = $("#value").val();
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="education['+i+'][key]" placeholder="Degree" class="form-control form-control-sm key_list" value="'+key+'" /></td><td><input type="text" name="education['+i+'][value]" placeholder="Institution" class="form-control form-control-sm value_list" value="'+value+'" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger fa fa-window-close btn_remove"></button></td></tr>');
            });
            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

            //hiding or showing experience div

            $("#experience").click(function() {
                if($("#experience").prop("checked")) {
                    $('#loader').fadeIn();
                    setTimeout(()=>{
                        $('.doctor_experience').fadeIn();
                    },1000)
                    $('#loader').fadeOut();
                }
                else{
                    setTimeout(()=>{
                        $('.doctor_experience').fadeOut();
                    },1000)
                }
            });

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
