@extends('layouts.main')

@section('title', 'Личный кабинет')

@section('content')
    <div class="p-6 border border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        Привет, {{ Auth::user()->name ?? 'Гость' }}
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <a href="#" class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition">
            Профиль
        </a>
        <a href="#" class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-lg transition">
            Посты
        </a>
        <form method="POST" action="{{ route('logout') }}" class="flex-1">
            @csrf
            <button type="submit"
                    class="ml-1 text-gray-900 dark:text-white  p-2 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                Выйти
            </button>
        </form>
    </div>
@endsection
