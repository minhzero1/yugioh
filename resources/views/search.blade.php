@extends('layouts.app')
@section('title', 'Tra cứu - Yu-Gi-Oh Database')

@section('content')
<div class="page-wrap">
    <h1 class="title">TRA CỨU THẺ BÀI</h1>

    <form method="GET" action="/tra-cuu" class="filter-bar">
        <input type="text" name="keyword" placeholder="Nhập tên lá bài" value="{{ request('keyword') }}">
        <select name="type">
            <option value="">Tất cả loại</option>
            @foreach ($types as $t)
                <option value="{{ $t }}" @selected(request('type') == $t)>{{ $t }}</option>
            @endforeach
        </select>
        <select name="attribute">
            <option value="">Tất cả thuộc tính</option>
            @foreach ($attributes as $a)
                <option value="{{ $a }}" @selected(request('attribute') == $a)>{{ $a }}</option>
            @endforeach
        </select>
        <button type="submit">Lọc / Tìm kiếm</button>
        <a href="/tra-cuu" class="reset-link">Xóa bộ lọc</a>
    </form>

    <div class="result-count">
        Hiển thị {{ $cards->firstItem() ?? 0 }}–{{ $cards->lastItem() ?? 0 }} trên tổng {{ $cards->total() }} thẻ
    </div>

    <div class="card-grid">
        @foreach ($cards as $card)
            <a href="/card/{{ $card->id }}" class="card-link">
                <div class="card">
                    @if ($card->image)
                        <img src="{{ $card->image }}" loading="lazy">
                    @endif
                    <h3>{{ $card->name }}</h3>
                    <div class="badge-row">
                        <span class="badge">{{ $card->type }}</span>
                        @if ($card->attribute)
                            <span class="badge badge-attr-{{ $card->attribute }}">{{ $card->attribute }}</span>
                        @endif
                        @if ($card->level)
                            <span class="badge">Lv.{{ $card->level }}</span>
                        @endif
                    </div>
                    @if ($card->atk !== null)
                        <div class="stat-atk-def">ATK {{ $card->atk }} / DEF {{ $card->def }}</div>
                    @endif
                </div>
            </a>
        @endforeach
    </div>

    <div class="pagination-wrap">
        {{ $cards->links('pagination.custom') }}
    </div>
</div>
@endsection