@extends('layouts.admin')

@section('title')
    ADMINISTRATION ARTICLE
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Article :  / <strong class="text-primary small">{{ $article->title ?? "" }}</strong></h3>
                </div>
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="preview-item">
                                    @if ($article->status == false)
                                        @include('admins.partials.update', [
                                            'route' => 'article.active',
                                            'callback' => $article->key,
                                            'button' => 'btn-outline-success btn-sm',
                                            'icon' => 'ni-check-circle',
                                            'title' => 'Activer'
                                        ])
                                    @else
                                        @include('admins.partials.update', [
                                            'route' => 'article.inactive',
                                            'callback' => $article->key,
                                            'button' => 'btn-outline-danger btn-sm',
                                            'icon' => 'ni-check-circle',
                                            'title' => 'Désactiver'
                                        ])
                                    @endif
                                </li>
                                <li class="preview-item">
                                    <a href="{{ route('article.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
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
        @if($article->status == false)
            <div class="example-alert mb-3">
                <div class="alert alert-danger alert-icon">
                    <em class="icon ni ni-cross-circle"></em>
                    <strong>Information</strong>! Article n'est pas encore approuvé.
                </div>
            </div>
        @endif
        <div class="nk-block">
            <div class="nk-block">
                <div class="card">
                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#room-info">
                                <em class="icon ni ni-info"></em>
                                <span>Détail article</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile-courses">
                                <em class="icon ni ni-sign-dollar"></em>
                                <span>Commentaires</span>
                            </a>
                        </li>
                    </ul>
                    <div class="card-inner">
                        <div class="tab-content">
                            <div class="tab-pane active" id="room-info">
                                <div class="nk-block">
                                    <div class="profile-ud-list">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Titre</span>
                                                <span class="profile-ud-value">{{ $article->title ?? "" }}</span>
                                            </div>
                                        </div>

                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Résumer</span>
                                                <span class="profile-ud-value">{{ $article->resume ?? "" }}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="nk-divider divider md"></div>
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                        <h5 class="title">Description de la salle</h5>
                                    </div>
                                    <div class="bq-note">
                                        <div class="bq-note-item">
                                            <div class="bq-note-text">
                                                <p>
                                                    {{ $article->content ?? "" }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile-courses">
                                <div class="nk-tb-list border border-light rounded overflow-hidden is-compact">
                                    <div class="nk-tb-item nk-tb-head text-center">
                                        <div class="nk-tb-col">
                                            <span class="lead-text">Commentaire</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="lead-text">Status</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="lead-text">Confirmation</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span class="lead-text d-none d-sm-inline">Action</span>
                                        </div>
                                        @foreach($article->comments as $comment)
                                            <div class="nk-tb-item text-center">
                                                <div class="nk-tb-col">{{ $comment->comments ?? "" }}</div>
                                                <div class="nk-tb-col">
                                                    @if($comment->status)
                                                        <span class="badge badge-dot badge-dot-xs badge-success">Confirmer</span>
                                                    @else
                                                        <span class="badge badge-dot badge-dot-xs badge-warning">En attente</span>
                                                    @endif
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1 text-center">
                                                        <li>
                                                            <a href="" class="btn btn-dim btn-sm btn-primary">
                                                                Voir
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
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
