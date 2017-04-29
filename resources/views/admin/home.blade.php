@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    Hey! You are logged in as admin - {{ Auth::user()->name.' '.Auth::user()->lastname }}!
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
