@extends('layouts.admin')

@section('content')
    <div>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm my-3">Indietro</a>
        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-secondary btn-sm mx-2">Modifica</a>
    </div>
    <div>
        <h3>{{ $project->title }}</h3>
        @if ($project->project_img)
            <div>
                <img src="{{ asset('storage/' . $project->project_img) }}">
            </div>
        @endif
        <p>{{ $project->description }}</p>
        <h5><span class="badge text-bg-dark">{{ $project->type?->title }}</span></h5>
    </div>
@endsection
