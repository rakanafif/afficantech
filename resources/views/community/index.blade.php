
@extends('layouts.app')

@section('content')
<div class="bg-affican-dark min-h-screen p-8">
    <h1 class="text-gold-glow text-3xl font-bold mb-8">{{ __('messages.community') }}</h1>

    <div class="bg-gray-900 border border-electric-blue p-6 rounded-lg shadow-glow mb-10">
        <form action="{{ route('community.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <textarea name="content" class="w-full bg-black text-white p-4 rounded border border-gray-700 focus:border-gold-glow" placeholder="Quoi de neuf ?"></textarea>
            <div class="flex justify-between mt-4">
                <input type="file" name="media" class="text-sm text-gray-400">
                <button type="submit" class="bg-gold-glow text-black px-6 py-2 rounded font-bold hover:scale-105 transition">Publier</button>
            </div>
        </form>
    </div>

    @foreach($posts as $post)
    <div class="bg-gray-900 p-6 rounded-lg mb-6 border-b border-gray-800">
        <div class="flex items-center mb-4">
            <span class="text-electric-blue font-bold">{{ $post->user->name }}</span>
            <span class="text-gray-500 text-xs ml-3">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <p class="text-white mb-4">{{ $post->content }}</p>
        @if($post->media_path)
            <div class="rounded overflow-hidden border border-gray-700">
                </div>
        @endif
    </div>
    @endforeach
</div>
@endsection
