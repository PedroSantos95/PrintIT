@extends('layouts.header')

@yield('content')
<br>

<div align="center">
	<table id="listPrinters"class=" table table-hover id="users-admin" style="width:80%;">
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
	<div classe="col-md-12 col-md-offset-5" >
	<button id="btn2" type="button" class="btn btn-primary">
		<a href="{{url('/printers/add')}}"><span style="color: white;" >Add Printer</span></a>
	</button>		
	</div>
	{{$printers->render()}}
</div>


<br><br>
@extends('layouts.footer')