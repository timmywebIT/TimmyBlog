@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <div class="flex flex-wrap justify-start gap-6 p-5 ">
        @foreach($posts as $post)
            <div class=" dark:bg-gray-800 shadow rounded-lg overflow-hidden w-80 flex flex-col ">
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
                    <div class="mt-4">
                        <a class="text-white " href="{{ route('show', $post->id) }}">Подробнее</a>
                    </div>
                </div>
                <div class="ml-5 text-white">
                    <div class="like-button-container"
                         data-post-id="{{ $post->id }}"
                         data-initial-liked="{{ $post->likes->contains(auth()->id()) ? 'true' : 'false' }}"
                         data-initial-count="{{ $post->likes_count ?? 0 }}">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
