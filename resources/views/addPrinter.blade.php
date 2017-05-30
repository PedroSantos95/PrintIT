@extends('layouts.header')

@yield('content')
<br><br>
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Printer</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" role="form" action="{{route('createPrinter')}}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <br>
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-5">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>
                        <br>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-10">
                                <button type="Submit" class="btn btn-primary">
                                    Add Printer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
