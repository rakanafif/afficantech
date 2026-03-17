@extends('layouts.app')

@section('content')
<div class="bg-affican-dark min-h-screen p-8 text-white">
    <h1 class="text-electric-blue text-3xl font-bold mb-10">Tableau de bord du vendeur</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="bg-gray-900 border border-gray-800 p-6 rounded-xl">
            <p class="text-gray-400">Total des livres</p>
            <p class="text-3xl font-bold">{{ $data['total_books'] }}</p>
        </div>
        <div class="bg-gray-900 border border-gray-800 p-6 rounded-xl">
            <p class="text-gray-400">Ventes totales</p>
            <p class="text-3xl font-bold text-electric-blue">${{ $data['total_sales'] }}</p>
        </div>
        <div class="bg-gray-900 border border-gold-glow p-6 rounded-xl shadow-glow">
            <p class="text-gold-glow">Bénéfice Net (80%)</p>
            <p class="text-3xl font-bold text-gold-glow">${{ $data['net_profit'] }}</p>
        </div>
    </div>

    <h2 class="text-xl font-bold mb-4">Mes Livres</h2>
    <div class="bg-gray-900 rounded-lg overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-800 text-gray-400">
                <tr>
                    <th class="p-4">Titre</th>
                    <th class="p-4">Prix</th>
                    <th class="p-4">Statut</th>
                </tr>
            </thead>
            <tbody>
                @foreach($my_books as $book)
                <tr class="border-b border-gray-800">
                    <td class="p-4">{{ $book->title }}</td>
                    <td class="p-4">${{ $book->price }}</td>
                    <td class="p-4">
                        <span class="{{ $book->status == 'published' ? 'text-green-500' : 'text-gold-glow' }}">
                            {{ $book->status }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

