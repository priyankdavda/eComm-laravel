@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Order List</h2>
                <a href="/ordernow" class="btn btn-success">Order Now</a>
                <br>
                <br>
                <div class="">
                    @foreach ($orders as $item)
                        <div class="row search-item cart-list-devider">
                            <div class="col-sm-4">
                                <a href="detail/{{ $item->id }}">
                                    <img class="trending-img" src="{{ $item->gallery }}">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                
                                    <div class="">
                                        <h2>{{ $item->name }}</h2>
                                        <h5>Delivery Status : {{ $item->status }}</h5>
                                        <h5>Payment Status : {{ $item->payment_status }}</h5>
                                        <h5>Payment Method : {{ $item->payment_method }}</h5>
                                        <h5>Delivery Address : {{ $item->address}}</h5>
                                        <h5>Price : {{ $item->price}}</h5>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                {{-- <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove From Cart</a> --}}
                            </div>
                        </div>
                    @endforeach
                    <a href="/ordernow" class="btn btn-success">Order Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection
