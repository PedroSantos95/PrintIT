@extends('layouts.header')

@yield('content')
<br><br><br>
@if(Auth::check())

<div align="center">
	<table id="listPrinters" class=" table table-hover sortable" id="users-admin" style="width:80%;">
		<thead class="thead-inverse">
			<tr>
				<th style="text-align: center" class="col-xs-2">Comment</th>
				<th style="text-align: center" class="col-xs-1">Commented On Request</th>	
				<th style="text-align: center" class="col-xs-1">Created At</th>
				<th style="text-align: center" class="col-xs-1">Unblock</th>
			</tr>
		</thead>
		<tbody id="tbodyAssociados">
			@foreach($comments as $index => $comment)
			@if($comment->blocked == 1)
			<tr>
				<td style="text-align: center; padding-top: 6px;">{{$comment->comment}}</td>
				<td style="text-align: center; padding-top: 25px;">{{$comment->request_id}}</td>
				<td style="text-align: center; padding-top: 25px;">{{$comment->created_at}}</td>
				<td>
				<form method="POST" action="{{route('unblockComment', ['id' => $comment->id])}}">
						{{csrf_field()}}			
						<div style="padding-left: 175px; padding-top: 7px;" class="form-group" class="col-md-3">
							<button type="submit" class="btn btn-success" style="width: 100px;" >Unblock</button>
						</div>
					</form>
				</td>
				@endif
				@endforeach
			</tbody>
		</table>
		{{$comments->render()}}
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