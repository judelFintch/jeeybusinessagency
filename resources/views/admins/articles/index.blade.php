@extends('layouts.admin')

@section('title')
    ADMINISTRATION ARTICLE
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Articles</h3>
                </div>
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="preview-item">
                                    <a href="{{ route('article.create') }}" class="btn btn-sm btn-primary"><em class="icon ni ni-plus"></em>  Ajouter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="nk-block nk-block-lg">
                <div class="card card-preview">
                    <div class="card-inner">
                        <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                            <thead>
                            <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col tb-col-mb">
                                    <span class="sub-text">Photo</span>
                                </th>
                                <th class="nk-tb-col tb-col-md">
                                    <span class="sub-text">Titre</span>
                                </th>
                                <th class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Status</span>
                                </th>
                                <th class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Résumer</span>
                                </th>
                                <th class="nk-tb-col nk-tb-col-tools text-right">
                                    <span class="sub-text">Actions</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-mb" data-order="{{ asset('storage/'.$article->picture) }}">
                                        <div class="user-card">
                                            <div class="img-fluid">
                                                <img
                                                    src="{{ asset('storage/'.$article->picture) }}"
                                                    alt="{{ $article->key ?? "" }}"
                                                    height="30"
                                                    width="30"
                                                >
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span>{{ $article->title ?? "" }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        @if($article->status == true)
                                            <span class="dot bg-success d-mb-none"></span>
                                            <span class="badge badge-sm badge-dot has-bg badge-success d-none d-mb-inline-flex">Confirmer</span>
                                        @else
                                            <span class="dot bg-warning d-mb-none"></span>
                                            <span class="badge badge-sm badge-dot has-bg badge-warning d-none d-mb-inline-flex">En attente</span>
                                        @endif
                                    </td>
                                    <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                        <span>{{ $article->resume ?? "" }}</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
                                                        <em class="icon ni ni-more-h"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="{{ route('article.show', $article->key) }}">
                                                                    <em class="icon ni ni-eye"></em>
                                                                    <span>Voir article</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('article.edit', $article->key) }}">
                                                                    <em class="icon ni ni-edit"></em>
                                                                    <span>Editer article</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <form action="{{ route('article.destroy', $article->key) }}" method="POST" onsubmit="return confirm('Voulez vous supprimer');">
                                                                    @method('DELETE')
                                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                    <button type="submit" class="btn btn-dim">
                                                                        <em class="icon ni ni-trash"></em>
                                                                        <span>Supprimer article</span>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
