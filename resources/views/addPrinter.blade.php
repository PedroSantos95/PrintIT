@extends('layouts.header')

@yield('contente')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Printer</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="#">
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
                                <button type="#" class="btn btn-primary">
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
<br><br>
@extends('layouts.footer')
