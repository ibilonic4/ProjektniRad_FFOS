@extends('layout')

@section('content')
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <header>
        <h1
            class="text-3xl text-center font-bold my-6 uppercase"
        >
          
        </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
           @unless($oglasi->isEmpty())
           @foreach($oglasi as $oglas)
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a href="show.html">
                        {{$oglas->naslov}}
                    </a>
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a
                        href="/oglasi/{{$oglas->id}}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    >
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <form method="POST"action="/oglasi/{{$oglas->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500">
                        <i class="fa-solid fa-trash"></i> Delete
                    </button>
                </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border-grey-300">
                <td class="px-4 py-8 border-5 border-b border-grey-300 text-lg">
                    Thera are no posts
                </td>
            </tr>
            @endunless
        </tbody>
    </table>
</div>

@endsection