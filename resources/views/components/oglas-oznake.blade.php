@props(['oznakeCsv'])
@php 
$oznake = explode(',',$oznakeCsv);
@endphp
<ul class="flex">
 @foreach($oznake as $oznaka)
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/?oznaka={{$oznaka}}">{{$oznaka}}</a>
    </li>
    @endforeach
</ul>