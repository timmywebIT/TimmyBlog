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
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Действие
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-dark border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4 text-white">
                                    Silver
                                </td>
                                <td class="px-6 py-4 text-white">
                                    Laptop
                                </td>

                            </tr>

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
