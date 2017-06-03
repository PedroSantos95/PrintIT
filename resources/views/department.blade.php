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

<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				<div class="panel-heading" text-align="center"><b>Statistics By Department</b></div>
				<div class="panel-body">
					<div align="center">
						<table id="listUsers" class="table table-hover sortable" id="users-admin" style="widows: 80%;">
							<div class="row"> 
			<div class="col-md-2 " style="padding-left: 20px">
				<input placeholder="    Search here:" type="text" id="searchTerm" class="search_box" onkeyup="doSearch()" />
			</div>
	</div>
							<thead class="thead-inverse">
								<tr>
									<th style="text-align: center" class="col-xs-1">Department ID</th>
									<th style="text-align: center" class="col-xs-1">Department Name</th>
									<th style="text-align: center" class="col-xs-1">Color Copies - % </th>
									<th style="text-align: center" class="col-xs-1">Black White Copies - %</th>
									<th style="text-align: center" class="col-xs-1">Total Copies</th>
								</tr>
							</thead>
							<tbody id="tbodyAssociados">
								@foreach($departments as $index => $department)
								<tr>
									<td style="text-align: center;">{{$department->id}}</td>
									<td style="text-align: center;">{{$department->name}}</td>
									<td style="text-align: center;">{{$statisticsColor[$index+1]}}
										@if($statisticsColor[$index+1] > 0)
										- {{$statisticsColor[$index+1]/($statisticsBlack[$index+1] + $statisticsColor[$index+1])*100}}%
										@endif
									</td>
									<td style="text-align: center;">{{$statisticsBlack[$index+1]}}
										@if($statisticsBlack[$index+1] > 0)
										- {{$statisticsBlack[$index+1]/($statisticsBlack[$index+1] + $statisticsColor[$index+1])*100}}%
										@endif
									</td>
									<td style="text-align: center;">{{$statisticsBlack[$index+1] + $statisticsColor[$index+1]}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						{{$departments->render()}}
					</div>
					<br>
				<span><b>Users By Department:</b></span>
					<div id="poll_div"></div>

					<?= Lava::render('BarChart', 'Users', 'poll_div') ?>
				</div>
			</div>
		</div>
	</div>

</div>	

<br><br>
@extends('layouts.footer')