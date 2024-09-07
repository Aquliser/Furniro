@vite('resources/css/app.css')
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.default.min.css" />

    <div class="relative mt-4">
        <!-- Image -->
        <img src="{{ asset('images/scandinavian-interior-mockup-wall-decal-background 1.png') }}" alt="Scandinavian Interior" class="w-full h-auto">

        <!-- Boardcard (Overlay) -->
        <div class="absolute inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
            <div class="text-white text-center p-4">
                <h2 class="text-3xl font-bold">Scandinavian Interior</h2>
                <p class="mt-2">A beautiful and modern interior design.</p>
                <!-- Tailwind-styled link -->
                <a href="/browse-range" class="mt-4 inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600">
                    Browse The Range
                </a>
            </div>
        </div>
    </div>

    <!-- Additional Content -->
    <div class="flex flex-col items-center justify-center font-bold text-3xl mt-8">
        <h2>Browse The Range</h2>
    
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/card1.jpg') }}" alt="Card 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Card Title 1</h3>
                    <p class="text-gray-700">This is a description for the first card.</p>
                </div>
            </div>
    
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/card2.jpg') }}" alt="Card 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Card Title 2</h3>
                    <p class="text-gray-700">This is a description for the second card.</p>
                </div>
            </div>
    
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/card3.jpg') }}" alt="Card 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">Card Title 3</h3>
                    <p class="text-gray-700">This is a description for the third card.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center font-bold text-3xl mt-8">
        <h2>Our Products</h2>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
        @foreach($shops as $shop)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset($shop->image) }}" alt="{{ $shop->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2">{{ $shop->name }}</h3>
                    <p class="text-gray-700">{{ $shop->description }}</p>
                    <p class="text-gray-900 font-bold">{{ $shop->price }} ฿</p>
                </div>
            </div>
        @endforeach
    </div>
    
    <!-- Show More Button -->
    <div class="flex justify-center mt-8">
        <a href="/shop" class="bg-blue-500 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-600">Show More</a>
    </div>

    <div class="relative bg-gray-100 p-4">
        <!-- Owl Carousel Container -->
        <div class="owl-carousel owl-theme">
            <!-- Card 1 -->
            <div class="item bg-white p-6 shadow-md rounded-lg">
                <h2 class="text-xl font-bold">Card 1</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis hendrerit turpis. Integer ultricies nulla non purus cursus.</p>
            </div>
            <!-- Card 2 -->
            <div class="item bg-white p-6 shadow-md rounded-lg">
                <h2 class="text-xl font-bold">Card 2</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis hendrerit turpis. Integer ultricies nulla non purus cursus.</p>
            </div>
            <!-- Card 3 -->
            <div class="item bg-white p-6 shadow-md rounded-lg">
                <h2 class="text-xl font-bold">Card 3</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis hendrerit turpis. Integer ultricies nulla non purus cursus.</p>
            </div>
            <!-- Card 4 -->
            <div class="item bg-white p-6 shadow-md rounded-lg">
                <h2 class="text-xl font-bold">Card 4</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis hendrerit turpis. Integer ultricies nulla non purus cursus.</p>
            </div>
            <!-- Add more cards as needed -->
        </div>
    
        <!-- Text Aligned to the Left Center -->
        <div class="absolute left-0 inset-y-0 flex items-center pl-4">
            <p class="text-lg font-semibold text-gray-700">Left Centered Text</p>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
@endsection
