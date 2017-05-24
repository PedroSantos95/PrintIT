@extends('layouts.header')

@yield('contente')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Request</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" role="form" action="{{route('createRequest')}}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <br>
                            <label for="quantity" class="col-md-4 control-label">Quantity</label>
                            <div class="col-md-5">
                                <input id="quantity" type="text" class="form-control" name="quantity" value="{{ old('quantity') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('paperSize') ? ' has-error' : '' }}">
                            <br>
                            <label for="paperSize" class="col-md-4 control-label">Paper Size</label>
                            <div class="col-md-5">
                                <input id="paperSize" type="text" class="form-control" name="paperSize" value="{{ old('paperSize') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('paperType') ? ' has-error' : '' }}">
                            <br>
                            <label for="paperType" class="col-md-4 control-label">Paper Type</label>
                            <div class="col-md-5">
                                <input id="paperType" type="text" class="form-control" name="paperType" value="{{ old('paperType') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('colored') ? ' has-error' : '' }}">
                            <br>
                            <label for="colored" class="col-md-4 control-label">Colored</label>
                            <div class="col-md-5">
                                <input id="colored" type="text" class="form-control" name="colored" value="{{ old('colored') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('stapled') ? ' has-error' : '' }}">
                            <br>
                            <label for="stapled" class="col-md-4 control-label">Stapled</label>
                            <div class="col-md-5">
                                <input id="stapled" type="text" class="form-control" name="stapled" value="{{ old('stapled') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('frontback') ? ' has-error' : '' }}">
                            <br>
                            <label for="frontback" class="col-md-4 control-label">Front Back</label>
                            <div class="col-md-5">
                                <input id="frontback" type="text" class="form-control" name="frontback" value="{{ old('frontback') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <br>
                            <label for="file" class="col-md-4 control-label">File</label>
                            <div style="padding-top: 8px" class="col-md-5">
                            <input id="file" type="file" name="file" value="{{ old('file') }}" autofocus>
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <br>
                            <label for="description" class="col-md-4 control-label">Description</label>
                            <div class="col-md-5">
                                <textarea rows="5" id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" autofocus></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-10">
                                <button type="Submit" class="btn btn-primary">
                                    Add Request
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
@extends('layouts.footer')
