@extends('layout')

@section('content')
@include('partials._search')

<a href="/" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<x-card>
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="{{$oglas->slika ? asset('storage/'. $oglas->slika) : asset('/images/no-image.png')}}"
            alt=""
        />

        <h3 class="text-2xl mb-2">{{$oglas->naslov}}</h3>
        <div class="text-xl font-bold mb-4">{{$oglas->tvrtka}}</div>

        <x-oglas-oznake :oznakeCsv="$oglas->oznake"/>
            
        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> 
            {{$oglas->lokacija}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">
                Job Description
            </h3>
            <div class="text-lg space-y-6">
                
                {{$oglas->tekst}}

                <a
                    href="mailto:{{$oglas->email}}"
                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-envelope"></i>
                    Contact Employer</a
                >

                <a
                    href="{{$oglas->website}}"
                    target="_blank"
                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-globe"></i> Visit
                    Website</a
                >
            </div>
        </div>
    </div>
</x-card>



</div>
    @endsection