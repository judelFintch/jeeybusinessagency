@extends('layouts.auth')

@section('title')
    AUTHENTIFICATION
@endsection

@section('content')
    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-md">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                    <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                        <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                    </div>
                    <div class="nk-block nk-block-middle nk-auth-body">
                        <div class="brand-logo pb-5 pt-4">
                            <a href="{{ route('home.index') }}" class="logo-link">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" height="90%" width="50%">
                            </a>
                        </div>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Connexion</h5>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="name">Nom</label>
                                </div>
                                <input
                                    type="text"
                                    class="form-control form-control-lg @error('name') error @enderror"
                                    id="name"
                                    placeholder="Nom de l'utilisateur"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    autofocus
                                >
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="email">Email</label>
                                </div>
                                <input
                                    type="email"
                                    class="form-control form-control-lg @error('email') error @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus
                                    placeholder="Adresse email de l'utilisateur"
                                >
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="password">Mot de passe</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        type="password"
                                        class="form-control form-control-lg @error('password') error @enderror"
                                        id="password"
                                        placeholder="Enter your password"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                    >
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" value="avatar3.png" name="picture">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="password-confirm">Mot de passe (Confirmation)</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input
                                        type="password"
                                        class="form-control form-control-lg @error('password') error @enderror"
                                        id="password-confirm"
                                        placeholder="Enter your password"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                    >
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">S'inscrire</button>
                            </div>
                        </form>
                        <div class="form-note-s2 pt-4"> Already have an account ?
                            <a href="{{ route('login') }}">connexion</a>
                        </div>
                    </div>
                    <div class="nk-block nk-auth-footer">
                        <div class="mt-3">
                            <p>&copy; {{ now('Y')->format('Y') }} Fintchweb. Tout droit reserver.</p>
                        </div>
                    </div>
                </div>
                <div class="nk-split-content nk-split-stretch" style="background-image: url('{{ asset('assets/images/backend.jpg') }}'); background-position: center"></div>
            </div>
        </div>
    </div>
@endsection
