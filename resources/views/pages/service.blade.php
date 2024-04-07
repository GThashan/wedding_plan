@extends('layout.layout3')

@section('service-content')
<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
    @endif
    @yield('content')
</div>


@yield('scripts')

@endsection
