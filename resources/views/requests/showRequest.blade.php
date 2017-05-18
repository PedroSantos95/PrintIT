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
						<div class="col-md-5 col-md-offset-1" >
							<div class="form-group">
								<label for="name" style="text-align: center;" class="col-md-4 control-label"><b>Request ID</b></label>
								<div style="padding-top: 7px" class="col-md-8">
									{{$request->id}}
								</div>
							</div>
						<div class="pull-right col-md-2	">
							<button type="button" class="btn btn-primary" style="width: 100%">
								<a href="{{url('/users')}}"><span style="color:white;" >Back</span></a>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br>
@extends('layouts.footer')