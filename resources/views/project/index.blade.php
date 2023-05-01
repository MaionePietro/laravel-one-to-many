@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row row-cols-4">
            @foreach ($projects as $project)
            <div class="col">
                <div class="card {{$project->trashed() ? 'bg-warning' : ''}} " style="width: 18rem;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{$project->title}}</h5>
                        <p class="card-text">{{$project->customer}}</p>
                        <p class="card-text">{{$project->description}}</p>
                        <p class="card-text">{{$project->type ? $project->type->name  : '-'}}</p>
                        <a href="{{$project->url}}"></a>
                        <div class="d-flex">
                            <a class="btn" href="{{ route('projects.show',$project) }}">VEDI</a>
                            <a class="btn" href="{{ route('projects.edit',$project) }}">MODIFICA</a>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="DELETE">
                            </form>
                            @if ($project->trashed())
                                <form action="{{ route('projects.restore', $project) }}" method="POST">
                                    @csrf
                                    <input type="submit" class="btn btn-success" value="RECUPERA">
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
