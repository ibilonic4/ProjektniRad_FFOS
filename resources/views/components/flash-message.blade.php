@if(session()->has('message'))

<div class="fixed top-0 bg-laravel text-white px-48 py-3">
<p>{{session('message')}}</p>
</div>

@endif