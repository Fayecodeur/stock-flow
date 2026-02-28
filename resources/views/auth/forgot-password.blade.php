@extends('layouts.auth')
@section('title', 'Récupération du mot de passe')
@section('content')
    <div class="row align-items-center py-4">
        <div class="col-lg-6 d-none d-lg-block bg-password-image">
            <img src="{{ asset('auth/assets/img/forgot-password.avif') }}" alt="Stock Image" class="img-fluid"
                style="max-height: 400px; object-fit: contain;">
        </div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Mot de passe oublié ?</h1>
                    <p class="mb-4">Entrez votre e-mail pour recevoir le lien de réinitialisation.</p>
                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success mb-4">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <form method="POST" action="{{ route('password.email') }}" class="user">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control form-control-user" placeholder="Entrez votre adresse e-mail...">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-user btn-block">
                        Réinitialiser le mot de passe
                    </button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="{{ route('login') }}">Mot de passe retrouvé ? Se connecter</a>
                </div>
            </div>
        </div>
    </div>
@endsection
