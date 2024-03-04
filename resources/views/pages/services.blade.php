@extends('pages/service')

@section('content')

<div class="cards">
    @foreach($services as $service)
        <div class=" mb-4">
            <div class="card">
                <img src="{{ asset('images') }}/{{ $service->image }}" class="card-img-top"/>
                <div class="card-body">
                    <h4 class="card-title">{{ $service->name }}</h4>
                    <p>{{ $service->author }}</p>
                    <p class="card-text"><strong>Price: </strong> RS .{{ $service->price }}</p>
                    <div class="select">
                    <p class="btn-holder"><a href="{{ route('addbook.to.cart', $service->id) }}" class="btn btn-outline-danger">Choose</a> </p>
                    <p class="btn-holder"><a href="" class="btn btn-outline-success">View More</a> </p>
                </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
