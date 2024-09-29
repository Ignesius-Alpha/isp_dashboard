@if (!empty(session('success')))
<div>
    {{ session('success') }}
</div>
@endif

@if (!empty(session('error')))
<div class=" text-red-500 font-bold text-center">
    {{ session('error') }}
</div>
@endif