@extends('layouts.auth')

@section('title', 'Réinitialiser le mot de passe')

@section('content')
    <div class="row align-items-center py-4">
        <!-- Colonne gauche image -->
        <div class="col-lg-6 d-none d-lg-block bg-password-image">
            <img src="{{ asset('auth/assets/img/forgot-password.avif') }}" alt="Reset Password" class="img-fluid"
                style="max-height: 400px; object-fit: contain;">
        </div>

        <!-- Colonne droite formulaire -->
        <div class="col-lg-6">
            <div class="p-5 w-100" style="max-width: 470px; margin: auto;">

                <div class="text-center mb-4">
                    <h1 class="h4 text-gray-900">Réinitialiser le mot de passe</h1>
                    <p class="mb-4">Entrez votre nouveau mot de passe.</p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.store') }}" class="user">
                    @csrf

                    <!-- Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email -->
                    <div class="form-group mb-4">
                        <input type="email" name="email" value="{{ old('email', $request->email) }}"
                            class="form-control form-control-user" placeholder="Adresse e-mail" required autofocus>

                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-4">
                        <input type="password" name="password" class="form-control form-control-user"
                            placeholder="Nouveau mot de passe" required>

                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group mb-4">
                        <input type="password" name="password_confirmation" class="form-control form-control-user"
                            placeholder="Confirmer le mot de passe" required>

                        @error('password_confirmation')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Réinitialiser le mot de passe
                    </button>
                </form>

                <hr>

                <div class="text-center">
                    <a class="small" href="{{ route('login') }}">
                        Vous vous souvenez de votre mot de passe ? Connectez-vous
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
