@extends('layouts.header')

@yield('content')
<br><br><br>
@if(Auth::check())

<div align="center">
	<table id="listRequests" class=" table table-hover sortable" id="users-admin" style="width:80%;">
		<thead class="thead-inverse">
			<tr>
				<th style="text-align: center" class="col-xs-1">Request ID</th>
				<th style="text-align: center" class="col-xs-1">Owner ID</th>	
				<th style="text-align: center" class="col-xs-1">Colored</th>
				<th style="text-align: center" class="col-xs-1">Status</th>
				<th style="text-align: center" class="col-xs-1"></th>
			</tr>
		</thead>
		<tbody id="tbodyAssociados">
			@foreach($myRequests as $index => $request)
			<tr>
				<td style="text-align: center; padding-top: 15px;">{{$request->id}}</td>
				<td style="text-align: center; padding-top: 15px;">{{$request->owner_id}}</td>
				@if($request->colored == 1)
				<td style="text-align: center; padding-top: 15px;">YES</td>	
				@else
				<td style="text-align: center; padding-top: 15px;">NO</td>
				@endif
				@if($request->status == 1)
				<td style="text-align: center; padding-top: 15px;">Completed</td>
				@else
				<td style="text-align: center; padding-top: 15px;">Waiting</td>
				@endif	
				
				@if($request->status == 0)
				<td style="text-align: center; padding-top: 5px;">
					<button id="btn2" style="width: 100px" type="button" class="btn btn-warning">
						<a href="{{route('updateRequest', ['id' => $request->id])}}" ><span style="color: white;" >Edit</span></a>
					</button>	
					&nbsp
					<button id="btn2" type="button" style="width: 100px" class="btn btn-danger">
						<a href="{{route('deleteRequest', ['id' => $request->id])}}"><span style="color: white;" >Delete</span></a>
					</button>
				</td>
				@endif
				@if($request->status == 1)
				<td style="text-align: center; padding-top: 5px;">
					<button id="btn2" style="width: 100px" type="button" class="btn btn-success">
						<a href="#" ><span style="color: white;" >Rate</span></a>
					</button>	
				</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
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