@extends('layouts.admin')

@section('title')
    ADMINISTRATION ARTICLE
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Article :  / <strong class="text-primary small">{{ $user->name ?? "" }}</strong></h3>
                </div>
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="preview-item">
                                    @if ($user->status == false)
                                        @include('admins.partials.update', [
                                            'route' => 'utilisateur.active',
                                            'callback' => $user->key,
                                            'button' => 'btn-outline-success btn-sm',
                                            'icon' => 'ni-check-circle',
                                            'title' => 'Activer'
                                        ])
                                    @else
                                        @include('admins.partials.update', [
                                            'route' => 'utilisateur.inactive',
                                            'callback' => $user->key,
                                            'button' => 'btn-outline-danger btn-sm',
                                            'icon' => 'ni-check-circle',
                                            'title' => 'Désactiver'
                                        ])
                                    @endif
                                </li>
                                <li class="preview-item">
                                    <a href="{{ route('utilisateur.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
                                        <em class="icon ni ni-arrow-left"></em>
                                        <span>Back</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if($user->status == false)
            <div class="example-alert mb-3">
                <div class="alert alert-danger alert-icon">
                    <em class="icon ni ni-cross-circle"></em>
                    <strong>Information</strong>! Utilisateur ne pas encore confirmer.
                </div>
            </div>
        @endif
        <div class="nk-block">
            <div class="nk-block">
                <div class="card">
                    <div class="card-inner">
                        <div class="tab-content">
                            <div class="tab-pane active" id="room-info">
                                <div class="nk-block">
                                    <div class="profile-ud-list">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Nom</span>
                                                <span class="profile-ud-value">{{ $user->name ?? "" }}</span>
                                            </div>
                                        </div>

                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Email</span>
                                                <span class="profile-ud-value">{{ $user->email ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Telephone</span>
                                                <span class="profile-ud-value">{{ $user->phone_number ?? "" }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
