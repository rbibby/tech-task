@extends('layouts.app')

@section('content')
    <p class="mb-4">
        <a href="{{ route('upload-csv') }}" class="underline text-blue-500 hover:text-blue-600">Start again</a>
    </p>
    <pre>
@json($people, JSON_PRETTY_PRINT)
    </pre>
@endsection
