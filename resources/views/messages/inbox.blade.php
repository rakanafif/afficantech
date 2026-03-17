
@extends('layouts.app')

@section('content')
<div class="bg-affican-dark text-white p-6 min-h-screen">
    <h1 class="text-electric-blue text-2xl font-bold mb-6">
        {{ __('messages.messagerie') }} </h1>

    <div class="space-y-4">
        @foreach($messages as $message)
            <div class="border-l-4 border-gold-glow bg-gray-900 p-4 rounded shadow-glow">
                <p class="text-sm text-gray-400">De: {{ $message->sender->name }}</p>
                <p class="mt-2">{{ $message->content }}</p>
                <span class="text-xs text-electric-blue">{{ $message->created_at->diffForHumans() }}</span>
            </div>
        @endforeach
    </div>
</div>
@endsection
