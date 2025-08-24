@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')
    <div class="flex flex-wrap gap-6 p-4 ">
            <div class="justify-start rounded-lg overflow-hidden w-100% flex flex-col">
                <!-- Картинка сверху -->
                @if($post->main_image)
                    <img class="w-full" src="{{ asset('storage/' . $post->main_image) }}"
                         alt="{{ $post->title }}"
                @endif
                <!-- Контент снизу -->
                <div class="text-black  mt-8">
                    {!! $post->content !!}
                </div>
                    <div class="mt-4">
                        <a class="text-white " href="{{ route('admin.posts.show', $post->id) }}">Подробнее</a>
                    </div>
                </div>
            </div>

@endsection
