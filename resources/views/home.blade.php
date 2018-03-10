@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Login Systme is Ok and Tested By Samenta.ir <br>
                    your name is : {{$user->name}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
