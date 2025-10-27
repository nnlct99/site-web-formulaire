@extends('layouts.app')

@section('title', 'Nos réalisations')

@section('content')
<div class="container mx-auto px-6 py-12">
   
<h1 class="text-3xl font-medium text-left mt-20 mb-20 text-gray-800">Nos Réalisations</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        
        @foreach($realisations as $realisation)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <a href="{{ asset('images/realisations/' . $realisation->image) }}" data-lightbox="realisations" data-title="{{ $realisation->titre }}">
                    <img src="{{ asset('images/realisations/' . $realisation->image) }}" alt="{{ $realisation->titre }}" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                </a>
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-center items-center text-white p-4 text-center">
                    <h2 class="text-lg font-semibold mb-2">{{ $realisation->titre }}</h2>
                    <p class="text-sm">{{ $realisation->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- Lightbox2 --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
@endsection
