@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded p-6">
        <x-errors />

        <form action="{{ route('process-csv') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="csv_file" class="block text-gray-800 mb-2">CSV File</label>
                <input type="file" id="csv_file" name="csv_file">
            </div>
            <div>
                <button type="submit" class="border border-sky-900 text-sky-900 px-4 py-2 rounded hover:bg-sky-200 hover:shadow">Upload CSV File</button>
            </div>
        </form>
    </div>
@endsection
