@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 justify-content-center">
            <div class="card">
                @foreach($users as $user)
                    <h2>{{$user->name}}</h2>
                    <p>{{$user->address->country}}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
