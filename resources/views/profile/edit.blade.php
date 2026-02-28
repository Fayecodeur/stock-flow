@extends('layouts.app')

@section('title', 'Profil Utilisateur')
@section('heading', 'Mon Profil')

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Informations du Profil -->
                <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            Informations du Profil
                        </div>
                        <div class="card-body">

                            <!-- Formulaire renvoi email verification -->
                            <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
                                @csrf
                            </form>

                            <!-- Formulaire profile -->
                            <form method="POST" action="{{ route('profile.update') }}">
                                @csrf
                                @method('patch')

                                <!-- Nom -->
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input id="name" name="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $user->email) }}" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                    <!-- Email non vérifié -->
                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                        <p class="text-warning mt-2">
                                            Votre email n'est pas vérifié.
                                            <button type="submit" form="send-verification" class="btn btn-link p-0">
                                                Cliquez ici pour renvoyer l'email de vérification
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="text-success mt-1">
                                                Un nouveau lien de vérification a été envoyé à votre adresse email.
                                            </p>
                                        @endif
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>

                                @if (session('status') === 'profile-updated')
                                    <span class="text-success ml-2">Enregistré.</span>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>

                <!-- Changer le mot de passe -->
                <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white">
                            Changer le mot de passe
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                @method('put')

                                <!-- Current Password -->
                                <div class="form-group">
                                    <label for="current_password">Mot de passe actuel</label>
                                    <input type="password" name="current_password" id="current_password"
                                        class="form-control {{ $errors->updatePassword->has('current_password') ? 'is-invalid' : '' }}"
                                        autocomplete="current-password">
                                    @if ($errors->updatePassword->has('current_password'))
                                        <small
                                            class="text-danger">{{ $errors->updatePassword->first('current_password') }}</small>
                                    @endif
                                </div>

                                <!-- New Password -->
                                <div class="form-group">
                                    <label for="password">Nouveau mot de passe</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control {{ $errors->updatePassword->has('password') ? 'is-invalid' : '' }}"
                                        autocomplete="new-password">
                                    @if ($errors->updatePassword->has('password'))
                                        <small class="text-danger">{{ $errors->updatePassword->first('password') }}</small>
                                    @endif
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group">
                                    <label for="password_confirmation">Confirmer le mot de passe</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control {{ $errors->updatePassword->has('password_confirmation') ? 'is-invalid' : '' }}"
                                        autocomplete="new-password">
                                    @if ($errors->updatePassword->has('password_confirmation'))
                                        <small
                                            class="text-danger">{{ $errors->updatePassword->first('password_confirmation') }}</small>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>

                                @if (session('status') === 'password-updated')
                                    <span class="text-success ml-2">Enregistré.</span>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
