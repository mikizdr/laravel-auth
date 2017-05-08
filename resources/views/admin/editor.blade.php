@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editor Dashboard</div>

                <div class="panel-body">
                    Hey! You are logged in as editor - {{ Auth::user()->name.' '.Auth::user()->lastname }}!
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection
