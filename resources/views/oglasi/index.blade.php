@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')


<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>
@if(count($oglasi)==0)
<p>No posts</p>
@endif

@foreach($oglasi as $oglas) 

<x-oglas-card :oglas="$oglas"/>
   @endforeach

</div>

<div class="mt-6 p-4">
   {{$oglasi->links()}}
</div>
   @endsection