@extends('layouts.header')

@yield('content')

<br>
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
			@foreach($requests as $index => $request)
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
				<td style="text-align: center; padding-top: 5px;">
					<button id="btn2" type="button" class="btn btn-success">
						<a href="{{url('requests/'.$request->id)}}"><span style="color: white;" >Show Details</span></a>
					</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
				<div>
				<button id="btn2" type="button" class="btn btn-primary">
						<a href="{{route('addRequest')}}"><span style="color: white;" >Add Request</span></a>
					</button>
			</div>
	{{$requests->render()}}
</div>

<br><br>
@extends('layouts.footer')