@extends('layouts.app')
@vite('resources/css/app.css')

@section('content')
<div class="relative mt-4">
    <!-- Image -->
    <div class="relative">
        <img src="{{ asset('images/Rectangle 1.png') }}" alt="Scandinavian Interior" class="w-full h-auto">
        <div class="absolute top-0 left-0 bg-black bg-opacity-50 text-white p-2">
            <a href="{{ url('/') }}" class="text-white hover:underline">Home</a> > 
            <a href="{{ url('/shop') }}" class="text-white hover:underline">Shop</a>
        </div>
    </div>
    
    <div class="flex flex-col items-center justify-center font-bold text-3xl mt-8">
        <h2>Our Products</h2>
    
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
    
        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $shops->links() }}
        </div>
    </div>
</div>
@endsection
