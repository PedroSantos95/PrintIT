@extends('layouts.header')

@yield('content')
<br>
@if(Auth::check())

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h2><font face="verdana"><b>Rate Request</b></font></h2></center></div>
                <div class="panel-body">                
                    {{csrf_field()}}    
                    <div class="row ">
                     <label for="id" style="text-align: right; padding-left: 50px" class=" col-md-4 control-label"><b>Request ID</b></label>
                                <div >
                                    {{$request->id}}
                                </div>
                    </div>
                    <div class="row ">
                     <label for="rating" style="text-align: right; padding-left: 50px" class=" col-md-4 control-label"><b>Rating</b></label>
                     <div >
                        <form method="POST" action="{{route('setRating', ['id' => $request->id])}}">
                        {{csrf_field()}}            

                        <div class="form-group" class="col-md-4">
                        
                               <select  name="rating">
                                <option value="0">Select an Option</option>
                                <option value="1">1- Unsatistory</option>
                                <option value="2">2- Average</option>
                                <option value="3">3- Good</option>
                                <option value="4">4- Very Good</option>
                                <option value="5">5- Excellent</option>
                            </select>
                        </div>
                              
                    </div>
                </div>
                    <div style="padding-left: 50px; padding-top: 20px" >
                                <button style="padding-left: " type="submit" class="btn btn-success">Complete</button>
                    </div>
             
                    </form>
            </div>
        </div>
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
<br>
@extends('layouts.footer')