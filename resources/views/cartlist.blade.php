@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-6">
            <div class="trending-wrapper">
                <h2>Cart List</h2>
                <div class="">
                    @foreach ($products as $item)
                        <div class="row search-item cart-list-devider">
                            <div class="col-sm-4">
                                <a href="detail/{{ $item->id }}">
                                    <img class="trending-img" src="{{ $item->gallery }}">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                
                                    <div class="">
                                        <h2>{{ $item->name }}</h2>
                                        <h5>{{ $item->description }}</h5>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-warning">Remove From Cart</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
