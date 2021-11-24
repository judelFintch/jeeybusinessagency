@extends('layouts.admin')

@section('title')
    ADMINISTRATION UTILISATEUR
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Utilisateurs</h3>
                </div>
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="preview-item">
                                    <a href="{{ route('utilisateur.create') }}" class="btn btn-sm btn-primary"><em class="icon ni ni-plus"></em>  Ajouter</a>
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
                                    <span class="sub-text">Nom</span>
                                </th>
                                <th class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Email</span>
                                </th>
                                <th class="nk-tb-col tb-col-lg">
                                    <span class="sub-text">Telephone</span>
                                </th>
                                <th class="nk-tb-col nk-tb-col-tools text-right">
                                    <span class="sub-text">Actions</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col tb-col-mb" data-order="{{ asset('storage/'.$user->picture) }}">
                                        <div class="user-card">
                                            <div class="img-fluid">
                                                <img
                                                    src="{{ asset('storage/'.$user->picture) }}"
                                                    alt="{{ $user->key ?? "" }}"
                                                    height="30"
                                                    width="30"
                                                >
                                            </div>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span>{{ $user->name ?? "" }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                        <span>{{ $user->email ?? "" }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                        <span>{{ $user->phone_number ?? "" }}</span>
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
                                                                <a href="{{ route('utilisateur.show', $user->key) }}">
                                                                    <em class="icon ni ni-eye"></em>
                                                                    <span>Voir</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('utilisateur.edit', $user->key) }}">
                                                                    <em class="icon ni ni-edit"></em>
                                                                    <span>Editer</span>
                                                                </a>
                                                            </li>
                                                            @if($user->id == auth()->id())
                                                            <li>
                                                                <form action="{{ route('utilisateur.destroy', $user->key) }}" method="POST" onsubmit="return confirm('Voulez vous supprimer');">
                                                                    @method('DELETE')
                                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                    <button type="submit" class="btn btn-dim">
                                                                        <em class="icon ni ni-trash"></em>
                                                                        <span>Supprimer</span>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                            @endauth
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
