@extends('layouts.admin')

@section('title')
    ADMINISTRATION ARTICLE
@endsection

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">VALVE :  / <strong class="text-primary small">{{ $valve->title ?? "" }}</strong></h3>
                </div>
                <div class="nk-block-head-content">
                    <a href="{{ route('valves.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                </div>
            </div>
        </div>
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
                                                <span class="profile-ud-label">Titre</span>
                                                <span class="profile-ud-value">{{ $valve->title ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Titre</span>
                                                <span class="profile-ud-value">{{ $valve->title ?? "" }}</span>
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
