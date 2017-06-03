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
		<tbody class="list" id="tbodyAssociados">
			@foreach($users as $index => $user)
			<tr>
				@if($user->profile_photo)
				<td style="text-align: center"><img style="width: 80px; height: 80px; border: 2px solid grey;" src="{{ asset( 'img/profiles/'. $user->profile_photo)}}" /></td>
				@else
				<td style="text-align: center"><img style="width: 80px; height: 80px; border: 2px solid grey;" src="{{ asset('img/profiles/unknowmale.png')}}" /></td>
				@endif
				<td class="name" style="text-align: center; padding-top: 35px;">{{$user->name}}</td>
				<td class="email" style="text-align: center; padding-top: 35px;">{{$user->email}}</td>
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
				<td style="text-align: center; padding-top: 27px;">
					<button id="btn2" type="button" class="btn btn-success">
						<a href="{{url('users/'.$user->id)}}"><span style="color: white;" >Show Profile</span></a>
					</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$users->render()}}
</div>

<br><br>
@extends('layouts.footer')