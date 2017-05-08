@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Test Dashboard</div>

                <div class="panel-body">
                    Hey! You are on test page and you are logged in as  - {{ Auth::user()->name.' '.Auth::user()->lastname }}!
                </div>
                <div class="panel-body text-success">
                    Your role is  - 
                    
                    @foreach (Auth::user()->role as $rol)
                        {{ $rol->name }}
                    @endforeach

                </div>                
            </div>
        </div>        
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Registrtion</div>

                <div class="panel-body">
                    <a href="{{ url('admin/register') }}">Register As Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection