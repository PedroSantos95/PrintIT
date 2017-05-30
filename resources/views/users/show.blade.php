@extends('layouts.header')

@yield('content')
<br><br><br>

<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				<div class="panel-heading"><center><h2><font face="verdana"><b>Show User</b></font></h2></center></div>
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="row">
							<div class="col-md-2 col-md-offset-1">
								@if(!$user->profile_photo)
								<div class="form-group">
									<div style="padding-top: 7px">
										<img style="width: 350px; height: 195px; border: 2px solid grey;" src="{{ asset('img/profiles/unknowmale.png')}}" />
									</div>
								</div>
								@else
								<div class="form-group">
									<div style="padding-top: 7px" >
										<img style="width: 350px; height: 195px; border: 2px solid grey;" src="{{ asset('img/profiles/'. $user->profile_photo)}}" />
									</div>
								</div>
								@endif
							</div>
							<div class="col-md-5 col-md-offset-1" >
								<div class="form-group">
									<label for="name" style="text-align: center;" class="col-md-4 control-label"><b>Name</b></label>
									<div style="padding-top: 7px" class="col-md-8">
										{{$user->name}}
									</div>
								</div>

								<div class="form-group">
									<label for="email" style="text-align: center;" class="col-md-4 control-label"><b>E-Mail Address</b></label>
									<div style="padding-top: 7px" class="col-md-8">
										{{$user->email}}
									</div>
								</div>

								<div class="form-group">
									<label for="presentation" style="text-align: center;" class="col-md-4 control-label"><b>Department</b></label>
									<div style="padding-top: 7px" class="col-md-6">
										{{$user->department_id}}          
									</div>
								</div>

								<div class="form-group">
									<label for="presentation" style="text-align: center;" class="col-md-4 control-label"><b>Number of Evals</b></label>
									<div style="padding-top: 7px" class="col-md-6">
										{{$user->print_evals}}                     
									</div>
								</div>

								<div class="form-group">
									<label for="presentation" style="text-align: center;" class="col-md-4 control-label"><b>Number of Prints</b></label>
									<div style="padding-top: 7px;" class="col-md-6">
										{{$user->print_counts}}                     
									</div>
								</div>

							</div>
						</div>
						<hr>

						@if($user->phone)
						<div class="form-group">
							<label for="phone" style="text-align: center;" class="col-md-4 control-label"><b>Phone Number</b></label>
							<div style="padding-top: 7px" class="col-md-6">
								{{$user->phone}}
							</div>
						</div>
						@endif

						@if($user->profile_url)
						<div class="form-group">
							<label for="profile_url" style="text-align: center;" class="col-md-4 control-label"><b>Profile URL</b></label>
							<div style="padding-top: 7px;" class="col-md-6">
								{{$user->profile_url}}
							</div>
						</div>
						@endif
						
						@if($user->presentation)
						<div class="form-group">
							<label for="presentation" style="text-align: center;" class="col-md-4 control-label"><b>Presentation</b></label>
							<div style="padding-top: 7px" class="col-md-6">
								{{$user->presentation}}                     
							</div>
						</div>
						@endif
					</form>
					@if($user->blocked == 0)

					<form method="POST" action="{{route('blockUser', ['id' => $user->id])}}">
						{{csrf_field()}}			
						<div style="padding-left: 50px;" class="form-group" class="col-md-3">
							<button type="submit" class="btn btn-danger" style="width: 100px;" >Block User</button>
						</div>
					</form>
					@endif
					@if($user->blocked == 1)
				</form>
				<form method="POST" action="{{route('unblockUser', ['id' => $user->id])}}">
					{{csrf_field()}}			
					<div style="padding-left: 50px;" class="form-group" class="col-md-3">
						<button type="submit" class="btn btn-success" style="width: 115px;" >Unblock User</button>
					</div>
				</form>
				@endif
				<div class="pull-right col-md-2	">
					<button type="button" class="btn btn-primary" style="width: 100%">
						<a href="{{url('/users')}}"><span style="color:white;" >Back</span></a>
					</button>
				</div>

			</div>
		</div>
	</div>
</div>
</div>
<br><br>
@extends('layouts.footer')