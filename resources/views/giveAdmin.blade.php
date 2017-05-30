	@extends('layouts.header')

	@yield('content')
	<br><br><br>
	@if(Auth::check())

	<div align="center">
		<table id="listUsers" class="table table-hover sortable" id="users-admin" style="width:80%;">
			<thead class="thead-inverse">
				<tr>
					<th style="text-align: center" class="col-xs-1">Photo</th>
					<th style="text-align: center" class="col-xs-1">Name</th>
					<th style="text-align: center" class="col-xs-1">Email</th>
					<th style="text-align: center" class="col-xs-1">Phone</th>
					<th style="text-align: center" class="col-xs-1">Administrator</th>
					<th style="text-align: center" class="col-xs-1">Actions</th>
				</tr>
			</thead>
			<tbody id="tbodyAssociados">

				@foreach($users as $index => $user)

				<tr>
					@if($user->profile_photo)
					<td style="text-align: center"><img style="width: 80px; height: 80px; border: 2px solid grey;" src="{{ asset('img/profiles/'.$user->profile_photo)}}" /></td>
					@else
					<td style="text-align: center"><img style="width: 80px; height: 80px; border: 2px solid grey;" src="{{ asset('img/profiles/unknowmale.png')}}" /></td>
					@endif
					<td style="text-align: center; padding-top: 35px;">{{$user->name}}</td>
					<td style="text-align: center; padding-top: 35px;">{{$user->email}}</td>
					@if($user->phone)
					<td style="text-align: center; padding-top: 35px;">{{$user->phone}}</td>
					@else
					<td style="text-align: center; padding-top: 35px;">-</td>
					@endif
					@if($user->admin == 1)
					<td style="text-align: center; padding-top: 35px;">Yes</td>
					@else
					<td style="text-align: center; padding-top: 35px;">No</td>
					@endif
					<td style="text-align: center; padding-top: 27px;">
						@if($user->admin == 0)
						<form method="POST" action="{{route('giveAdmin', ['id' => $user->id])}}">
							{{csrf_field()}}			
							<div style="padding-left: 0px;" class="form-group" class="col-md-3">
								<button type="submit" class="btn btn-success" style="width: ;" >Give Admin Premissions</button>
							</div>
						</form>
						@endif
						@if($user->admin == 1)
						<form method="POST" action="{{route('removeAdmin', ['id' => $user->id])}}">
							{{csrf_field()}}			
							<div style="padding-left: 0px;" class="form-group" class="col-md-3">
								<button type="submit" class="btn btn-danger" style="width: ;" >Remove Admin Premissions</button>
							</div>
						</form>
						@endif
					</td>
				</tr>

				@endforeach

			</tbody>
		</table>
		{{$users->render()}}
	</div>


	@else

	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row" >

							<div class="form-group">
								<label for="name" style="text-align: right; margin-top: 10px" class="col-md-4 control-label"><b>You need to be logged in to view this page!</b></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endif
	<br><br>
	@extends('layouts.footer')