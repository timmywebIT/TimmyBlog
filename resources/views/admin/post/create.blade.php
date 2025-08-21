@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <div class="flex min-h-screen bg-gray-50 light:bg-gray-900">
        <div class="w-60">
            @include('admin.includes.sidebar')
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex-1 p-6">
                <div class="p-6 mb-6 ">
                    <h1 class="text-2xl font-bold">Создание поста</h1>
                </div>
                <form class="max-w-md ">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        </div>
                        <input name="title" type="search" id="default-search"
                               class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Название поста" required/>
                    </div>
                </form>
                <div class="form-group mt-3">
                    <textarea id="summernote" name="content"></textarea>
                    @error('content')
                    <div class="text-danger">Это поле необходимо для заполнения</div>
                    @enderror
                </div>
                <div class="form-group mt-3" >
                    <label for="countries" class="block mb-2 text-xl font-bold text-black-100">Выберите категорию</label>
                    <div id="multi-select-category">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="countries" class="block mb-2 text-xl font-bold text-black-100">Выберите теги</label>
                    <div id="multiselect-container"></div>
                </div>
                <div class="form-group mt-3">
                    <label for="countries" class="block mb-2 text-xl font-bold text-black-100">Выберите картинку</label>
                    <div id="selectimage-container"></div>
                    <input type="hidden" name="main_image" v-model="selectimage">
                </div>
                <div class="form-group">
                    <input class="mt-10 text-white bg-gray-900 p-3 rounded-md" type="submit" value="Создать">
                </div>
            </div>
        </form>

@endsection


