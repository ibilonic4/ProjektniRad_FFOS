@props(['oglas'])

<x-card>
    <div class="flex">
        <img
            class=" w-48 mr-6 md:block"
            src="{{$oglas->slika ? asset('storage/'. $oglas->slika) : asset('/images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/oglasi/{{$oglas->id}}">{{$oglas->naslov}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$oglas->tvrtka}}</div>
            
          <x-oglas-oznake :oznakeCsv="$oglas->oznake"/>

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>
                {{$oglas->lokacija}}
            </div>
        </div>
    </div>
</x-card>