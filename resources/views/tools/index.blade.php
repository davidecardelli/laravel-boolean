@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($tools as $tool)
                    @include('includes.card')
                @endforeach
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href="{{ route('tools.create') }}">Create tool</a>
            </div>
        </div>
    </main>
@endsection
