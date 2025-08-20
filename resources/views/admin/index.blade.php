@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <div class="flex min-h-screen bg-gray-50 light:bg-gray-900">
        <div class="w-60">
            @include('admin.includes.sidebar')
        </div>
        <div class="flex-1 p-6">
            <div class="p-6  mb-6 ">
                <h1 class="text-2xl font-bold">Привет, Админ</h1>
            </div>
        </div>
    </div>
@endsection
