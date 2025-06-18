@extends('layouts.main')
@section('content')
    <div class="max-w-6xl mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @for ($i = 0; $i < 10; $i++)
                <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col items-center p-4 gap-3">
                    <img src="https://grabacar.xyz/storage/images/IC1EXIMymw35JeZPi27Z6Wb6LIv59juvr01z76QZ.jpg" alt="Lexus RX450"
                        class="w-full h-32 object-cover rounded-t-xl" />
                    <div class="w-full flex flex-col items-center">
                        <p class="text-gray-500 text-xs">City {{ $i + 1 }}</p>
                        <h3 class="text-base font-bold text-gray-800">2024 - Car Model {{ $i + 1 }}</h3>
                        <p class="text-sm font-semibold text-green-600">${{ number_format(500000 + $i * 10000) }}</p>
                        <div class="flex gap-2 mt-1">
                            <span
                                class="px-2 py-0.5 bg-gray-100 rounded-full text-xs font-medium text-gray-700">SUV</span>
                            <span
                                class="px-2 py-0.5 bg-gray-100 rounded-full text-xs font-medium text-gray-700">Hybrid</span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
