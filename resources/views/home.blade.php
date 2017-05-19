@extends('layouts.header')

@yield('content')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <div class="pull-right col-md-2 ">
                            <button type="button" class="btn btn-primary" style="width: 100%">
                                <a href="{{url('/requests')}}"><span style="color:white;" >Requests</span></a>
                            </button>
                        </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@extends('layouts.footer')
