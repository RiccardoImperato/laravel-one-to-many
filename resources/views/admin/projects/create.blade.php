@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm my-3">Indietro</a>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
            @error('title')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select" name="type_id">
                <option selected>Seleziona un tipo</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @if (old('type_id') == $type->id) selected @endif>
                        {{ $type->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" style="height: 100px"></textarea>
            @error('description')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
@endsection
