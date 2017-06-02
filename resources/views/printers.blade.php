@extends('layouts.header')

@yield('content')
<br>
@if(Auth::check())
<div align="center">
	<table id="listPrinters" class=" table table-hover sortable" id="users-admin" style="width:80%;">
		<thead class="thead-inverse">
			<tr>
				<th style="text-align: center" class="col-xs-1">Name</th>
				<th style="text-align: center" class="col-xs-1">Created At</th>	
				<th style="text-align: center" class="col-xs-1">Updated At</th>
			</tr>
		</thead>
		<tbody id="tbodyAssociados">
			@foreach($printers as $index => $printer)
			<tr>
				<td style="text-align: center; padding-top: 15px;">{{$printer->name}}</td>
				<td style="text-align: center; padding-top: 15px;">{{$printer->created_at}}</td>
				<td style="text-align: center; padding-top: 15px;">{{$printer->updated_at}}</td>				
			</tr>
			@endforeach
		</tbody>
	</table>
	@if(Auth::User()->admin == 1)
	<div classe="col-md-12 col-md-offset-5" >
	<button id="btn2" type="button" class="btn btn-primary">
		<a href="{{url('/printers/addPrinter')}}"><span style="color: white;" >Add Printer</span></a>
	</button>		
	</div>
	@endif
	{{$printers->render()}}
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