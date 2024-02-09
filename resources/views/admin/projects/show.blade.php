@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm my-3">Indietro</a>
    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-secondary btn-sm mx-2">Modifica</a>
    <h3>{{ $project->title }}</h3>
    <p>{{ $project->description }}</p>
    <p>{{ $project->slug }}</p>
@endsection
