@extends('layouts.header')

@yield('content')
<br><br><br>
@if(Auth::check())
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
								<div  class="col-md-8">
									{{$request->id}}
								</div>
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Status</b></label>
								@if($request->status == 0)
								<div  class="col-md-8">
									Waiting
								</div>
								@else
								<div class="col-md-8">
									Completed
								</div>
								@endif
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Due Date</b></label>
								<div class="col-md-8">
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
								<div class="col-md-8">
									-
								</div>
								@endif
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Quantity</b></label>
								<div  class="col-md-8">
									{{$request->quantity}}
								</div>
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Paper Size</b></label>
								<div  class="col-md-8">
									{{$request->paper_size}}
								</div>
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Paper Type</b></label>
								<div  class="col-md-8">
									{{$request->paper_type}}
								</div>
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Closed Date</b></label>
								@if($request->closed_date)
								<div  class="col-md-8">
									{{$request->closed_date}}
								</div>
								@else
								<div  class="col-md-8">
									-
								</div>
								@endif
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Refused Reason</b></label>
								@if($request->refused_reason)
								<div class="col-md-8">
									{{$request->refused_reason}}
								</div>
								@else
								<div  class="col-md-8">
									-
								</div>
								@endif
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Satisfaction Grade</b></label>
								@if($request->satisfaction_grade)
								<div  class="col-md-8">
									{{$request->satisfaction_grade}}
								</div>
								@else
								<div class="col-md-8">
									-
								</div>
								@endif
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Created At</b></label>
								<div  class="col-md-8">
									{{$request->created_at}}
								</div>
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Updated At</b></label>
								<div  class="col-md-8">
									{{$request->updated_at}}
								</div>
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Colored</b></label>
								@if($request->colored == 0)
								<div class="col-md-8">
									No
								</div>
								@else
								<div  class="col-md-8">
									Yes
								</div>
								@endif
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Stapled</b></label>
								@if($request->stapled == 0)
								<div  class="col-md-8">
									No
								</div>
								@else
								<div  class="col-md-8">
									Yes
								</div>
								@endif
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Front Back</b></label>
								@if($request->front_back == 0)
								<div  class="col-md-8">
									No
								</div>
								@else
								<div class="col-md-8">
									Yes
								</div>
								@endif
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Owner ID</b></label>
								<div  class="col-md-8">
									{{$request->owner_id}}
								</div>
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Printer ID</b></label>
								@if($request->printer_id)
								<div  class="col-md-8">
									{{$request->printer_id}}
								</div>
								@else
								<div class="col-md-8">
									-
								</div>
								@endif
							</div>
							<div class="form-group">
								<label for="name" style="text-align: right;" class="col-md-4 control-label"><b>Closed User ID</b></label>
								@if($request->closed_user_id)
								<div  class="col-md-8">
									{{$request->closed_user_id}}
								</div>
								@else
								<div  class="col-md-8">
									-
								</div>
								@endif
							</div>	
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-1">
										@if($request->status == 0)
										<form method="POST" action="{{route('completeRequest', ['id' => $request->id])}}">
											{{csrf_field()}}			
											<div class="form-group" class="col-md-4">
												<button type="submit" class="btn btn-success">Complete</button>

												<div style="padding-top: 10px" class="form-group">

													<select style="padding-top: 5px" name="printer_id">
														<option value="">Select a Printer</option>
														@foreach($printers as $printer)
														<option value={{$printer->id}}>{{$printer->name}}</option>
														@endforeach
													</select>
												</div>
											</div>
										</form>
										@endif
									</div>
									<div class="col-md-offset-7">
										@if($request->status == 0)
										<form method="POST" action="{{route('refuseRequest', ['id' => $request->id])}}">
											{{csrf_field()}}			
											<div class="form-group" class="col-md-3">

												<button type="submit" class="btn btn-danger" style="width: 100px;" >Refuse</button>

												<div style="padding-top: 5px" class="form-group">
													<textarea name="refuseReason" id="refuseReason" rows="3" placeholder="Place your refuse reason here." class="form-control" ></textarea>
												</div>
											</div>
										</form>
										@endif
									</div>
								</div>
							</div>	
							<hr>
							<div class="comments">
								<ul class="list-group">
									@foreach ($comments as $comment)
									@if($comment->parent_id == null)
									@if($comment->blocked == 0)
									<li class="list-group-item">
										<strong>
											{{$comment->user_id}} - {{$comment->created_at->diffForHumans()}}
										</strong>
										{{$comment->comment}}
										<div>
											<!--<button type="submit" class="btn btn-danger btn-xs" style="text-align: right;"><small>Block</small></button>-->
											<a href="{{route('blockComment', ['id' => $request->id, 'commentId' => $comment->id ])}}" style="color: red"><b>Block</b></a>
										</div>
										@endif
										@foreach ($comments as $comment2)
										@if($comment2->parent_id == $comment->id)						
										@if($comment2->blocked == 0)
										<li class="list-group-item">
											<strong>
												{{$comment2->user_id}} - {{$comment2->created_at->diffForHumans()}}
											</strong>
											{{$comment2->comment}}
											<div>
												<!--<button type="submit" class="btn btn-danger btn-xs" style="text-align: right;"><small>Block</small></button>-->
												<a href="{{route('blockComment', ['id' => $request->id, 'commentId' => $comment->id ])}}" style="color: red"><b>Block</b></a>
											</div>
										</li>
										<br>
										@endif
										@endif
										@endforeach
									</li>
									<br>
									@endif
									@endforeach
								</ul>
							</div>
							<hr>
							<div class="card">
								<div class="card-block">

									<form method="POST" action="{{url('createComment')}}">
										{{csrf_field()}}
										<input type="hidden" name="request_id" value="{{$request->id}}">
										<div class="form-group">
											<textarea name="body" id="body" rows="6" placeholder="Place your comment here." class="form-control" ></textarea>
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