
@extends('layouts.app')

@section('content')
<div class="bg-affican-dark min-h-screen p-10 text-white">
    <h1 class="text-electric-blue text-4xl font-extrabold mb-10">Administration - Affican Digital</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-gray-900 p-6 rounded-xl border border-gray-800">
            <p class="text-gray-400">Utilisateurs Totaux</p>
            <p class="text-3xl font-bold">{{ $total_users }}</p>
        </div>
        <div class="bg-gray-900 p-6 rounded-xl border border-gold-glow shadow-glow">
            <p class="text-gold-glow">Revenus du Site (20%)</p>
            <p class="text-3xl font-bold text-gold-glow">${{ $site_revenue }}</p>
        </div>
    </div>

    <h2 class="text-2xl text-electric-blue mb-5">Livres en attente</h2>
    <div class="bg-gray-900 rounded-lg p-5">
        @foreach($pending_books as $book)
            <div class="flex justify-between items-center border-b border-gray-800 py-4">
                <span>{{ $book->title }} - ${{ $book->price }}</span>
                <form action="{{ route('admin.approve.book', $book->id) }}" method="POST">
                    @csrf
                    <button class="bg-gold-glow text-black px-4 py-1 rounded font-bold">Approuver</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
