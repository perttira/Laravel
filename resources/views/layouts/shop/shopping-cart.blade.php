@extends('layouts/master')
@section('title')

<!-- Shoppinc Cart saa ProductController.php kautta parametrinaan
Sessioniin tallennetun Cart:in -->
  Shopping Cart
@endsection
@section('content')
    @if(Session::has('cart'))
        <div class="row"></div>
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item'] ['title'] }}</strong>
                            <span class="label label-success">{{ $product['price'] }}</span>
                            <div class="dropdown btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" id="dropdownMenuButton">Action <span class="caret"></span></button>
                                <!--TODO laita dropdown toimimaan -->
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Reduce by 1</a>
                                    <a class="dropdown-item">href="#">Reduce all</a>
                                </div>
                                </div>
                        </li>
                    @endforeach

                </ul>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <strong>Total:{{ $totalPrice }}</strong>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <button type="button "class="btn btn-success">Checkout</button>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                    <h2>No items in cart</h2>
                </div>
            </div>
    @endif
@endsection
