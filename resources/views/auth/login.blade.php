@extends('layouts.auth')
@section('title', 'Connexion')
@section('content')
    <div class="row align-items-center py-4">
        <!-- Colonne gauche image -->
        <div class="col-lg-6 d-none d-lg-block bg-login-image">
            <img src="{{ asset('auth/assets/img/stock.png') }}" alt="Stock Image" class="img-fluid h-100"
                style="object-fit: contain;">
        </div>

        <!-- Colonne droite formulaire -->
        <div class="col-lg-6">
            <div class="p-5 w-100" style="max-width: 470px; margin: auto;">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenue !</h1>
                </div>

                <form method="POST" action="{{ route('login') }}" class="user">
                    @csrf

                    <div class="form-group mb-4">
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control form-control-user" id="email" placeholder="Adresse e-mail">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <input type="password" name="password" class="form-control form-control-user" id="password"
                            placeholder="Mot de passe">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                        Se connecter
                    </button>
                </form>

                <hr>

                <div class="text-center">
                    <a class="small" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
    </div>
@endsection
