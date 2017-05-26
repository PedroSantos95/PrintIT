@extends('layouts.header')

@yield('content')
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				<div class="panel-heading"><center><h2><font face="verdana"><b>Show Request</b></font></h2></center></div>
				<div class="panel-body">
						<div class="row" >
							<div class="col-md-9 col-md-offset-2" >
								<div class="form-group">
									<label for="name" style="text-align: right" class="col-md-4 control-label"><b>Request ID</b></label>
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->id}}
									</div>
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Status</b></label>
									@if($request->status == 0)
									<div style="padding-top: 7px" class="col-md-8">
										Waiting
									</div>
									@else
									<div style="padding-top: 7px" class="col-md-8">
										Refused
									</div>
									@endif
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Due Date</b></label>
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->due_date}}
									</div>
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Description</b></label>
									@if($request->description)
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->description}}
									</div>
									@else
									<div style="padding-top: 7px" class="col-md-8">
										-
									</div>
									@endif
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Quantity</b></label>
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->quantity}}
									</div>
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Paper Size</b></label>
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->paper_size}}
									</div>
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Paper Type</b></label>
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->paper_type}}
									</div>
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Closed Date</b></label>
									@if($request->closed_date)
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->closed_date}}
									</div>
									@else
									<div style="padding-top: 7px" class="col-md-8">
										-
									</div>
									@endif
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Refused Reason</b></label>
									@if($request->refused_reason)
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->refused_reason}}
									</div>
									@else
									<div style="padding-top: 7px" class="col-md-8">
										-
									</div>
									@endif
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Satisfaction Grade</b></label>
									@if($request->satisfaction_grade)
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->satisfaction_grade}}
									</div>
									@else
									<div style="padding-top: 7px" class="col-md-8">
										-
									</div>
									@endif
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Created At</b></label>
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->created_at}}
									</div>
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Updated At</b></label>
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->updated_at}}
									</div>
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Colored</b></label>
									@if($request->colored == 0)
									<div style="padding-top: 7px" class="col-md-8">
										No
									</div>
									@else
									<div style="padding-top: 7px" class="col-md-8">
										Yes
									</div>
									@endif
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Stapled</b></label>
									@if($request->stapled == 0)
									<div style="padding-top: 7px" class="col-md-8">
										No
									</div>
									@else
									<div style="padding-top: 7px" class="col-md-8">
										Yes
									</div>
									@endif
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Front Back</b></label>
									@if($request->front_back == 0)
									<div style="padding-top: 7px" class="col-md-8">
										No
									</div>
									@else
									<div style="padding-top: 7px" class="col-md-8">
										Yes
									</div>
									@endif
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Owner ID</b></label>
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->owner_id}}
									</div>
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Printer ID</b></label>
									@if($request->printer_id)
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->printer_id}}
									</div>
									@else
									<div style="padding-top: 7px" class="col-md-8">
										-
									</div>
									@endif
								</div>
								<div class="form-group">
									<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Closed User ID</b></label>
									@if($request->closed_user_id)
									<div style="padding-top: 7px" class="col-md-8">
										{{$request->closed_user_id}}
									</div>
									@else
									<div style="padding-top: 7px" class="col-md-8">
										-
									</div>
									@endif
								</div>
								<hr>

								<div class="comments">
									<ul class="list-group">
										@foreach ($comments as $comment)

										<li class="list-group-item">
											<strong>
												{{$comment->created_at->diffForHumans()}}
											</strong>
											{{$comment->comment}}
										</li>
										@endforeach
									</ul>
								</div>
								<hr>
								<div class="card">
									<div class="card-block">

										<form method="POST" action="{{url('createComment')}}">
											{{csrf_field()}}
											<input type="hidden" name="requestId" value="{{$request->id}}">
											<div class="form-group">
												<textarea name="body" id="body" rows="6" placeholder="Place your comment here." class="form-control" >
												</textarea>
											</div>

											<div class="form-group">
												<button type="submit" class="btn btn-primary">Add Comment</button>
											</div>
										</form>

									</div>
								</div>

								<div class="pull-right col-md-2	">
									<button type="button" class="btn btn-primary" style="width: 200%">
										<a href="{{url('/requests')}}"><span style="color:white;" >Back</span></a>
									</button>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>

</div>
<br><br>
@extends('layouts.footer')