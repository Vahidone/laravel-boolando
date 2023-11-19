@extends('layouts.main')


@php
    $products = config('products');
@endphp


@section('content')

     <div class="cards-wrapper">
        @foreach ($products as $product)
        <div class="card">

                <img class="first" src="/img/{{ $product['frontImage']}}" alt="{{$product['name']}}">
                <img class="second"  src="/img/{{ $product['backImage']}}" alt="{{$product['name']}}">

            <span class="heart">&hearts;</span>

            <div class="marks">
                @if (($product['badges']))
                    @foreach ($product['badges'] as $badge)
                        @if ($badge['type'] === 'tag' && isset($badge['type']))
                            <span class="value">{{ $badge['value'] }}</span>
                        @elseif ($badge['type'] === 'discount' && isset($product['badges']))
                            <span class="range-discount">{{ $badge['value'] }}</span>
                        @endif
                    @endforeach
                @endif
            </div>

            <div class="product-details">
                <span class="brand">{{ $product['brand'] }}</span>
                <h4 class="product-name">{{ $product['name'] }}</h4>
                <span class="price">{{ $product['price'] }} €</span>
                @if (isset($product['firstPrice']))
                    <span class="discount">{{$product['firstPrice']}} €</span>
                @endif

            </div>

        </div>

        @endforeach


     </div>




@endsection

@section('title')
    | Home
@endsection
