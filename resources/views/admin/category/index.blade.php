@extends('layouts.app')

@section('title', 'Теги')

@section('content')
    <div class="flex min-h-screen bg-gray-50">


        <!-- Sidebar -->
        <div class="w-60">
            @include('admin.includes.sidebar')
        </div>

        <div id="tag-list-app" class="flex-1 p-6"></div>
    </div>
@endsection
