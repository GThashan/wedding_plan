@extends('pages/service')

@section('content')

<div class="container_s">
    @foreach($services as $key => $service)
    {{-- @foreach($services as $service) --}}


        <div class="card" data-name="p-{{ $key + 1 }}">
            <div class="card-header">
                <img src="{{ asset('images') }}/{{ $service->image }}" class="card-img-top"/>
            </div>
            <div class="card-body">
                <h2 class="card-title">{{ $service->name }}</h2>
              <p>{{ $service->info }}</p>

            </div>
          </div>

    @endforeach
</div>
@include('components.preview')
@endsection






