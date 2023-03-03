@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <div class="card-header text-center bg-white mb-3">
                <h1>{{ $tool->name }}</h1>
            </div>
            <div class="card-body d-flex justify-content-center">
                <div class="card mb-2 text-center p-3">
                    <img class="img-fluid mx-auto rounded-3" src="{{ $tool->image_url }}" alt="{{ $tool->name }}">
                    <div>Description: {{ $tool->description }}</div>
                    <div>Category: {{ $tool->category }}</div>
                    <div>Year: {{ $tool->release_year }}</div>
                    <div>Version: {{ $tool->latest_version }}</div>
                    <a class="btn btn-primary" href="{{ $tool->download_link }}">Download now</a>
                    <div>Operating System: {{ $tool->supported_os }}</div>
                    <div>Vote: {{ $tool->vote }}</div>
                </div>
            </div>
            <div class="card-footer bg-white d-flex justify-content-center">
                <form action="{{ route('tools.destroy', $tool->id) }}" method="POST" class="delete-form"
                    data-name="{{ $tool->short_name }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger me-2">Elimina</button>
                </form>
                <a href="{{ route('tools.edit', $tool->id) }}" class="btn btn-warning me-2">Modifica</a>
                <a href="{{ route('tools.index') }}" class="btn btn-secondary">Indietro</a>
            </div>
        </div>
    </main>
@endsection
