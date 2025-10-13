@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 py-8">
    <div class="container mx-auto px-6">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Tableau de bord</h1>
                <p class="text-gray-600 mt-1">Bienvenue, {{ Auth::user()->name }}</p>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition-colors duration-200">
                    Déconnexion
                </button>
            </form>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-medium">Contacts</p>
                        <h3 class="text-3xl font-bold text-gray-900 mt-2">24</h3>
                    </div>
                    <div class="bg-cyan-100 rounded-full p-3">
                        <svg class="w-8 h-8 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-medium">Devis</p>
                        <h3 class="text-3xl font-bold text-gray-900 mt-2">12</h3>
                    </div>
                    <div class="bg-green-100 rounded-full p-3">
                        <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-medium">Rendez-vous</p>
                        <h3 class="text-3xl font-bold text-gray-900 mt-2">8</h3>
                    </div>
                    <div class="bg-purple-100 rounded-full p-3">
                        <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">Actions rapides</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <a href="#" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-3 px-4 rounded text-center transition-colors duration-200">
                    Voir les contacts
                </a>
                <a href="#" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded text-center transition-colors duration-200">
                    Gérer les devis
                </a>
                <a href="#" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-3 px-4 rounded text-center transition-colors duration-200">
                    Rendez-vous
                </a>
                <a href="/" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 px-4 rounded text-center transition-colors duration-200">
                    Voir le site
                </a>
            </div>
        </div>
    </div>
</div>
@endsection