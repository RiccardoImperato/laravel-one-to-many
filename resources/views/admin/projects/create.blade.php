@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm my-3">Indietro</a>
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type_id" class="form-label">Tipo</label>
            <select class="form-select @error('type_id') is-invalid @enderror" name="type_id">
                <option value="">Seleziona un tipo</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @if (old('type_id') == $type->id) selected @endif>
                        {{ $type->title }}
                    </option>
                @endforeach
            </select>
            @error('type_id')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="project_img" class="form-label">Immagine</label>
            <input type="file" class="form-control @error('project_img') is-invalid @enderror" name="project_img">
            @error('project_img')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" style="height: 100px">{{ old('description') }}</textarea>
            @error('description')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
@endsection
