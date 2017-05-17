@extends('layouts.header')

@yield('content')
<br><br><br>
<div align="center">
	<table id="listUsers"class="table table-hover" id="users-admin" style="width:80%;">
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
				<td style="text-align: center"><img src="{{ storage_path('app/public/profiles/'. $user->profile_photo)}}" /></td>
				@else
				<td style="text-align: center"><img src="{{ storage_path('app/public/profiles/unknowmale.png')}}" /></td>
				@endif
				<td style="text-align: center">{{$user->name}}</td>
				<td style="text-align: center">{{$user->email}}</td>
				@if($user->phone)
				<td style="text-align: center">{{$user->phone}}</td>
				@else
				<td style="text-align: center">-</td>
				@endif
				@if($user->admin == 1)
				<td style="text-align: center">Yes</td>
				@else
				<td style="text-align: center">No</td>
				@endif
				<td style="text-align: center">
					<button id="btn2" type="button" class="btn btn-success">
						Show Profile
					</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$users->render()}}
</div>

<br><br>
@extends('layouts.footer')