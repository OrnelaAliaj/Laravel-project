@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<!-- @if (session()->has('massage'))
    <h1 class="alert alert-success"> {{session()->get('message')}}</h1>
@endif -->