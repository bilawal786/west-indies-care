@extends('layouts.front')

@section('content')

<!-- Begin:: Account Section -->
<section class="cartPage" >
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-lg-6">
                <div class="authWrap authLogin">
                    <h2 class="authTitle">S'identifier</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <input placeholder="Email" type="text" class="@error('email') is-invalid @enderror" name="email" required value="">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <input placeholder="Mot de passe" class="@error('password') is-invalid @enderror" type="password" required name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit mo_btn" name="login" value="Log in">
                                    <i class="icofont-unlock"></i>S'identifier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="authWrap authLogin">
                    <h2 class="authTitle">S'inscrire</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <input placeholder="Prénom" type="text" class="@error('fname') is-invalid @enderror" required name="fname" value="">
                                @error('fname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input placeholder="Nom" type="text" class="@error('lname') is-invalid @enderror" required name="lname" value="">
                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <input placeholder="Email" class="@error('email') is-invalid @enderror" type="text" required name="email" value="">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <input placeholder="Téléphone" type="text" required name="phone" value="">
                            </div>
                            <div class="col-sm-12">
                                <input placeholder="Mot de passe" type="password" class="@error('password') is-invalid @enderror" required name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <input placeholder="Confirmez le mot de passe" type="password" required name="password_confirmation">
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit mo_btn" name="login" value="Log in">
                                    <i class="icofont-user-alt-7"></i>S'inscrire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Account Section -->

@endsection
