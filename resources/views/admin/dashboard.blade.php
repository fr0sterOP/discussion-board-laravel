@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-white dark:bg-gray-800 p-6 rounded shadow">
            <h2 class="text-gray-500">Users</h2>
            <p class="text-3xl font-bold mt-2">1</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded shadow">
            <h2 class="text-gray-500">Categories</h2>
            <p class="text-3xl font-bold mt-2">0</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-6 rounded shadow">
            <h2 class="text-gray-500">Posts</h2>
            <p class="text-3xl font-bold mt-2">0</p>
        </div>

    </div>
@endsection
