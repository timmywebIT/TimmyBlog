@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <div class="flex min-h-screen bg-gray-50 light:bg-gray-900">
        <div class="w-60">
            @include('admin.includes.sidebar')
        </div>
        <div class="flex-1 p-6">
            <div class="p-6  mb-6 ">
                <div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Название поста
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Категория
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Удаление
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post )
                            <tr class="bg-dark border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                   {{ $post->title }}
                                </th>
                                <td class="px-6 py-4 text-white">
                                    {{ $post->category ? $post->category->title : '-' }}
                                </td>
                                <td class="px-6 py-4 text-white">
                                    <form action="{{ route('admin.posts.delete', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="style: align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>
                            <a href="{{route('admin.posts.create')}}" type="button" class="mt-10 text-white bg-gray-900 p-3 rounded-md">Создать пост</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
