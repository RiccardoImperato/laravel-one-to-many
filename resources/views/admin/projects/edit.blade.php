@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm my-3">Indietro</a>
    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo progetto</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                value="{{ $project->title }}">
            @error('title')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select" name="type_id">
                <option selected>Select a type</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @if (old('type_id', $project->type_id) == $type->id) selected @endif>
                        {{ $type->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" style="height: 100px">{{ $project->description }}</textarea>
            @error('description')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
@endsection
