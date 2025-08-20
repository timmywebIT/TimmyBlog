@extends('layouts.app')

@section('title', 'Теги')

@section('content')

@include('admin.includes.sidebar')

<form action=" {{ route('admin.tags.store') }}" method="POST">
    @csrf
    <div class="flex-1 p-4 overflow-auto">
        <div class="flex items-center gap-2">
            <input name="title" type="text"
                   class="form-control text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                   placeholder="Название тэга">
        </div>

        @error('title')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

        <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <input type="submit"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                   value="Подвердить">
        </div>
    </div>
</form>

@endsection
