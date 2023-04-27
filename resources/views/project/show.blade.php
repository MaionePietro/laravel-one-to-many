@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        project
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$project->title}}</h5>
        <p class="card-text">{{$project->customer}}</p>
        <p class="card-text">{{$project->description}}</p>
        <a href="{{$project->url}}"></a>
    </div>
    <div class="card-footer text-body-secondary">

    </div>
</div>
@endsection
