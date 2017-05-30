@extends('layouts.header')

@yield('content')

<br>
@if(Auth::check())



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