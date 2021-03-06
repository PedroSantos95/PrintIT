@extends('layouts.header')

@yield('content')

<br>
@if(Auth::check())
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Request</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" role="form" action="{{route('storeRequest' , ['id' => $myRequests->id])}}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <br>
                            <label for="id" class="col-md-4 control-label">Request ID</label>
                            <div style="margin-top: 5px" class="col-md-5">
                                <span>{{$myRequests->id}}</span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <br>
                            <label for="quantity" class="col-md-4 control-label">Quantity</label>
                            <div class="col-md-5">
                                <input id="quantity" type="text" class="form-control" name="quantity" value="{{$myRequests->quantity}}" required autofocus>
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('paperSize') ? ' has-error' : '' }}">
                            <br>
                            <label for="paperSize" class="col-md-4 control-label">Paper Size</label>
                            <div style="padding-top: 7px"  class="col-md-5">
                               <select  name="paperSize">
                                    <option value="3">A3</option>
                                    <option value="4">A4</option>
                                </select>
                            </div>
                        </div>
                        <div  class="form-group{{ $errors->has('paperType') ? ' has-error' : '' }}">
                            <br>
                            <label for="paperType" class="col-md-4 control-label">Paper Type</label>
                            <div style="padding-top: 7px" class="col-md-5">
                               <select   name="paperType">
                                    <option value="0">Normal</option>
                                    <option value="1">Photography</option>
                                    <option value="2">Recycled</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('colored') ? ' has-error' : '' }}">
                            <br>
                            <label for="colored" class="col-md-4 control-label">Colored</label>
                            <div class="col-md-5">
                                <div style="padding-top: 7px; " class="col-md-5">
                                    <select  name="colored">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                            <div class="form-group{{ $errors->has('stapled') ? ' has-error' : '' }}">
                                <br>
                                <label for="stapled" class="col-md-4 control-label">Stapled</label>
                                <div class="col-md-5">
                                    <div style="padding-top: 7px; " class="col-md-5">
                                        <select  name="stapled">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('frontback') ? ' has-error' : '' }}">
                                <br>
                                <label for="frontback" class="col-md-4 control-label">Front Back</label>
                                <div class="col-md-5">
                                 <div style="padding-top: 7px; " class="col-md-5">
                                    <select  name="frontback">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <br>
                            <label for="quantity" class="col-md-4 control-label">File</label>
                            <div class="col-md-5">
                                <input id="file" type="file" class="form-control" name="file" value="{{$myRequests->file}}" required autofocus>
                        </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <br>
                            <label for="description" class="col-md-4 control-label">Description</label>
                            <div class="col-md-5">
                                <textarea rows="5" id="description" type="text" class="form-control" name="description" value="{{$myRequests->description}}" autofocus></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-10">
                                <button type="Submit" class="btn btn-success">
                                    Edit Request
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
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