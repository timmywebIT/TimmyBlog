@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <div class="flex flex-wrap gap-6 justify-center p-4 ">
        @foreach($posts as $post)

            <div class=" dark:bg-gray-800 shadow rounded-lg overflow-hidden w-72 flex flex-col">
                <!-- Картинка сверху -->
                @if($post->main_image)
                    <img src="{{ asset('storage/' . $post->main_image) }}"
                         alt="{{ $post->title }}"
                         class="w-full h-40 object-cover">
                @endif

                <!-- Контент снизу -->
                <div class="p-4 flex flex-col flex-1 justify-between">
                    <!-- Заголовок и теги -->
                    <div>
                        <h2 class="text-lg font-bold mb-1 text-gray-900 dark:text-white">{{ $post->title }}</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-300">
                            Теги: {{ $post->tagTitles ?: '-' }}
                        </p>
                    </div>
                    <!-- Контент -->
                    <div class="text-gray-800 dark:text-gray-200 text-sm mt-2">
                        {!! $post->content !!}
                    </div>
                    <a href="{{ route('admin.posts.show', $post->id) }}">Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
