@extends('layout')
@section('content')

<div
class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
>
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Moj oglas
    </h2>
    <p class="mb-4">Make a job post for anything</p>
</header>

<form method="POST"action="/oglasi/store" enctype="multipart/form-data" >
    @csrf

    <div class="mb-6">
        <label
            for="tvrtka"
            class="inline-block text-lg mb-2"
            >Company (not mandatory)</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="tvrtka"
            value="{{old('company')}}"
        />
        @error('tvrtka')
        <p class="text-red-500 mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="naslov" class="inline-block text-lg mb-2"
            >Title</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="naslov"
            placeholder="Primjer: Pisanje diplomskih radova"
            value="{{old('naslov')}}"
        />
        @error('naslov')
        <p class="text-red-500 mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="lokacija"
            class="inline-block text-lg mb-2"
            >Location</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="lokacija"
            placeholder="Primjer: Osijek"
            value="{{old('lokacija')}}"
        />
        @error('lokacija')
        <p class="text-red-500 mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2"
            > Email</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
            value="{{old('email')}}"
        />
        @error('email')
        <p class="text-red-500 mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="website"
            class="inline-block text-lg mb-2"
        >
            Web page (not mandatory)
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="website"
            value="{{old('website')}}"
        />
        @error('website')
        <p class="text-red-500 mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="oznake" class="inline-block text-lg mb-2">
        Labels (seperate with Comma " , ")
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="oznake"
            value="{{old('oznake')}}"
            placeholder="Primjer: administracija, studentski posao, IT"
        />
        @error('oznake')
        <p class="text-red-500 mt-1">{{$message}}</p>
        @enderror
    </div>

     <div class="mb-6">
        <label for="slika" class="inline-block text-lg mb-2">
            Picture
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="slika"
        />
        @error('slika')
        <p class="text-red-500 mt-1">{{$message}}</p>
        @enderror
    </div> 

    <div class="mb-6">
        <label
            for="opis"
            class="inline-block text-lg mb-2"
        >
            Post description
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="opis"
            rows="10"
            placeholder="Upišite opis oglasa, kriterije, cijenu i sl."
        >
        {{old('opis')}}</textarea>
        @error('opis')
        <p class="text-red-500 mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <button
            class="text-white rounded py-2 px-4 hover:bg-black"
        >
            Objavi oglas
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</div>

@endsection