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
	<br><br><br>
	@if(Auth::check())

	<div align="center">
	<table id="listUsers" class="table table-hover sortable" id="users-admin" style="width:80%;">
		<div class="row"> 
			<div class="col-md-1 col-md-offset-9" style="padding-left: 50px">
				<input placeholder="    Search here:" type="text" id="searchTerm" class="search_box" onkeyup="doSearch()" />
			</div>
	</div>
		<thead class="thead-inverse">
			<tr>
				<th style="text-align: center" class="col-xs-1">Photo</th>
				<th style="text-align: center" class="col-xs-1">Name</th>
				<th style="text-align: center" class="col-xs-1">Email</th>
				<th style="text-align: center" class="col-xs-1">Phone</th>
				<th style="text-align: center" class="col-xs-1">Administrator</th>
				<th style="text-align: center" class="col-xs-1">Actions</th>
			</tr>
		</thead>
		<tbody id="tbodyAssociados">

			@foreach($users as $index => $user)
			
			<tr>
			@if($user->blocked == 1)
				@if($user->profile_photo)
				<td style="text-align: center"><img style="width: 80px; height: 80px; border: 2px solid grey;" src="{{ asset('img/profiles/'.$user->profile_photo)}}" /></td>
				@else
				<td style="text-align: center"><img style="width: 80px; height: 80px; border: 2px solid grey;" src="{{ asset('img/profiles/unknowmale.png')}}" /></td>
				@endif
				<td style="text-align: center; padding-top: 35px;">{{$user->name}}</td>
				<td style="text-align: center; padding-top: 35px;">{{$user->email}}</td>
				@if($user->phone)
				<td style="text-align: center; padding-top: 35px;">{{$user->phone}}</td>
				@else
				<td style="text-align: center; padding-top: 35px;">-</td>
				@endif
				@if($user->admin == 1)
				<td style="text-align: center; padding-top: 35px;">Yes</td>
				@else
				<td style="text-align: center; padding-top: 35px;">No</td>
				@endif
					@if(Auth::User()->admin == 1)
				<td style="text-align: center; padding-top: 27px;">
				<form method="POST" action="{{route('unblockUserList', ['id' => $user->id])}}">
					{{csrf_field()}}			
					<div style="padding-left: 0px;" class="form-group" class="col-md-3">
						<button type="submit" class="btn btn-success" style="width: 115px;" >Unblock User</button>
					</div>
				</form>
				</td>
				@endif
					@endif
			</tr>
					
			@endforeach

		</tbody>
	</table>
	{{$users->render()}}
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