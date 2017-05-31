	@extends('layouts.header')

	@yield('content')
	<br><br><br>
	
<div align="center">
	<table id="listUsers" class="table table-hover sortable" id="users-admin" style="widows: 80%;">
		<thead class="thead-inverse">
			<tr>
				<th style="text-align: center" class="col-xs-1">Department ID</th>
				<th style="text-align: center" class="col-xs-1">Department Name</th>
				<th style="text-align: center" class="col-xs-1">Total Copies</th>
				<th style="text-align: center" class="col-xs-1">Black n White Copies</th>
				<th style="text-align: center" class="col-xs-1">Color Copies</th>
			</tr>
		</thead>
		<tbody id="tbodyAssociados">
			@foreach($departments as $index => $department)
			<tr>
				<td style="text-align: center;">{{$department->id}}</td>
				<td style="text-align: center;">{{$department->name}}</td>
				<td style="text-align: center;"></td>
				<td style="text-align: center;"></td>
				<td style="text-align: center;"></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$departments->render()}}
</div>
	

	<br><br>
	@extends('layouts.footer')