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
        <p class="card-text">{{$project->type ? $project->type->name  : ''}}</p>
        <a href="{{$project->url}}"></a>
    </div>
    <div class="card-footer text-body-secondary">
        {{-- <div class="container">
            <h2>Articoli correlati</h2>
            @if($project->type)
            <ul>
                @foreach($project->getRelatedPosts() as $related_project)
                    <li>
                        <a href="{{ route('project.show',$related_project)}}">
                            {{ $related_project->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
            @else
                nessun articolo correlato
            @endif
        </div> --}}
    </div>
</div>
@endsection
