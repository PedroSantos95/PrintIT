@extends('layouts.header')

@yield('content')
<script type="text/javascript">
function doSearch() {
    var searchText = document.getElementById('searchTerm').value;
    var targetTable = document.getElementById('listUsers');
    var targetTableColCount;
            
    //Loop through table rows
    for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
        var rowData = '';

        //Get column count from header row
        if (rowIndex == 0) {
           targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
           continue; //do not execute further code for header row.
        }
                
        //Process data rows. (rowIndex >= 1)
        for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
            rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent;
        }

        //If search term is not found in row data
        //then hide the row, else show
        if (rowData.indexOf(searchText) == -1)
            targetTable.rows.item(rowIndex).style.display = 'none';
        else
            targetTable.rows.item(rowIndex).style.display = 'table-row';
    }
}
</script>

<br>
@if(Auth::check())
<div align="center">
	<table id="listRequests" class=" table table-hover sortable" id="users-admin" style="width:80%;">
		<div class="row"> 
			<div class="col-md-1 col-md-offset-9" style="padding-left: 50px">
				<input placeholder="    Search here:" type="text" id="searchTerm" class="search_box" onkeyup="doSearch()" />
			</div>
	</div>
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
				<td style="text-align: center; padding-top: 15px;">{{$request->user->name}}</td>
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