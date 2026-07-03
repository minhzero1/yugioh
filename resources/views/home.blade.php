@extends('layouts.app')
@section('title', 'Yu-Gi-Oh Database')

@section('content')
<section class="hero">
    <h1>YUGIOH DATABASE</h1>
    <p>Tra cứu nhanh chóng thông tin đầy đủ của hàng trăm lá bài Yu-Gi-Oh, kèm bản dịch tiếng Việt và chỉ số chính xác từ cơ sở dữ liệu chính thức.</p>
    <a href="/tra-cuu" class="hero-cta">🔍 Bắt đầu tra cứu</a>
</section>

<div class="stats">
    <div class="stat-item">
        <div class="num">{{ number_format($totalCards) }}</div>
        <div class="label">Lá bài trong cơ sở dữ liệu</div>
    </div>
    <div class="stat-item">
        <div class="num">9</div>
        <div class="label">Loại thẻ bài</div>
    </div>
    <div class="stat-item">
        <div class="num">Hằng ngày</div>
        <div class="label">Tự động cập nhật</div>
    </div>
</div>

<section class="featured">
    <h2>Lá bài nổi bật</h2>
    <p class="sub">Một vài gợi ý ngẫu nhiên từ kho dữ liệu</p>
    <div class="featured-grid">
        @foreach ($featuredCards as $card)
            <a href="/card/{{ $card->id }}" class="featured-card">
                <img src="{{ $card->image }}" loading="lazy">
                <div class="name">{{ $card->name }}</div>
            </a>
        @endforeach
    </div>
    <div class="section-footer-cta">
        <a href="/tra-cuu">Xem toàn bộ thẻ bài →</a>
    </div>
</section>

<footer>Yu-Gi-Oh Database — Dự án cá nhân, dữ liệu tổng hợp từ YGOPRODeck</footer>
@endsection