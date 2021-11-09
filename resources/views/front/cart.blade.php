@extends('layouts.front')
@section('content')
    <!-- Begin:: Cart Section -->
    <section class="cartPage" >
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="woocommerce">
                        <form action="#" method="post" class="woocommerce-cart-form">
                            <table class="shop_table">
                                <thead>
                                <tr>
                                    <th class="product-name">Nom du produit</th>
                                    <th class="product-price">Prix</th>
                                    <th class="product-quantity">Quantité</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cartitems as $cart)
                                <tr class="cart_item">
                                    <td class="product-name" data-title="Product">
                                        <a href="">{{$cart->name}}</a>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><bdi>{{$cart->price}}<span class="woocommerce-Price-currencySymbol">€</span></bdi></span>
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        <a href="">{{$cart->quantity}}</a>
                                    </td>
                                    <td class="product-subtotal" data-title="Subtotal">
                                        <span class="woocommerce-Price-amount amount"><bdi>{{$cart->price * $cart->quantity}}<span class="woocommerce-Price-currencySymbol">€</span></bdi></span>
                                    </td>
                                    <td class="product-remove">
                                        <a href="{{route('removecart', ['id' =>$cart->id ])}}" class="remove">×</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </form>
                        <div class="row">
                            <div class="col-xl-7 col-lg-6 col-md-4"></div>
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="cart-collaterals">
                                    <div class="cart_totals">
                                        <h2>Totaux du panier</h2>
                                        <table class="shop_table shop_table_responsive">
                                            <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Total</th>
                                                <td data-title="Subtotal"><span class="amount">5</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a class="checkout-button alt wc-forward" href="{{route('checkout')}}">Passer à la caisse</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
