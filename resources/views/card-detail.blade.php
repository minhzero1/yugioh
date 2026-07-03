@extends('layouts.app')
@section('title', $card->name . ' - Yu-Gi-Oh Database')

@section('content')
<div class="page-wrap">
    <a href="/tra-cuu" class="back-link">← Quay lại danh sách</a>

    <div class="detail-container">
        <div class="detail-image">
            @if ($card->image)
                <img src="{{ $card->image }}">
            @endif
        </div>
        <div class="detail-info">
            <h1>{{ $card->name }}</h1>
            <div class="badge-row">
                <span class="badge">{{ $card->type }}</span>
                @if ($card->attribute)
                    <span class="badge badge-attr-{{ $card->attribute }}">{{ $card->attribute }}</span>
                @endif
                @if ($card->level)
                    <span class="badge">Level/Rank {{ $card->level }}</span>
                @endif
            </div>
            @if ($card->atk !== null)
                <div class="stat-box">
                    <div>ATK {{ $card->atk }}</div>
                    <div>DEF {{ $card->def }}</div>
                </div>
            @endif
            <div class="effect-columns">
                <div class="effect-box">
                    <h4>🇬🇧 Tiếng Anh</h4>
                    <p>{{ $card->effect }}</p>
                </div>
                <div class="effect-box">
                    <h4>🇻🇳 Tiếng Việt</h4>
                    <p>{{ $card->effect_vi ?? 'Chưa có bản dịch' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection