@extends('layouts.auth')
@section('title', 'Inscription')
@section('content')
    <div class="row">
        <!-- Colonne gauche avec image responsive -->
        <div class="col-lg-6 d-none d-lg-block bg-register-image">
            <img src="{{ asset('auth/assets/img/stock.png') }}" alt="Stock Image" class="img-fluid h-100"
                style="object-fit: contain;">
        </div>

        <!-- Colonne droite avec formulaire -->
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Créer un compte</h1>
                </div>

                <form method="POST" action="{{ route('register') }}" class="user">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control form-control-user" placeholder="Nom">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control form-control-user" placeholder="Adresse e-mail">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user"
                            placeholder="Mot de passe">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control form-control-user"
                            placeholder="Confirmer le mot de passe">
                    </div>

                    <button class="btn btn-primary btn-user btn-block" type="submit">Créer un compte</button>
                </form>

                <hr>

                <div class="text-center">
                    {{-- <a class="small" href="{{ route('password.request') }}">Mot de passe oublié ?</a> --}}
                </div>

                <div class="text-center">
                    <a class="small" href="{{ route('login') }}">Vous avez déjà un compte ? Connectez-vous</a>
                </div>
            </div>
        </div>
    </div>
@endsection
