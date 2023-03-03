@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-xl-6">
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
