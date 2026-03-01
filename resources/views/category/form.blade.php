@extends('layouts.app')

@section('title', 'Ajouter une catégorie')
@section('heading', 'Ajouter une catégorie')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="card shadow-sm w-50">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Nouvelle catégorie</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    {{-- Nom de la catégorie --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom de la catégorie</label>
                        <input type="text" name="name" id="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name') }}" placeholder="Entrez le nom">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description"
                                  class="form-control @error('description') is-invalid @enderror"
                                  rows="4" placeholder="Entrez une description">{{ old('description') }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Bouton --}}
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-plus me-2"></i> Ajouter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
