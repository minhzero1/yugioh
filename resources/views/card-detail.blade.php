<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>{{ $card->name }} - Yu-Gi-Oh Database</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #1a1a2e;
            color: #eee;
            margin: 0;
            padding: 20px;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .detail-container {
            max-width: 900px;
            margin: 0 auto;
            background: #16213e;
            border: 1px solid #ffd700;
            border-radius: 10px;
            padding: 30px;
            display: flex;
            gap: 30px;
        }
        .detail-image img {
            width: 300px;
            border-radius: 10px;
        }
        .detail-info h1 {
            color: #ffd700;
            margin-top: 0;
        }
        .detail-info p {
            font-size: 16px;
            line-height: 1.6;
        }
        .stat-badge {
            display: inline-block;
            background: #0f3460;
            padding: 5px 12px;
            border-radius: 5px;
            margin-right: 10px;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <a href="/" class="back-link">&larr; Quay lại danh sách</a>

    <div class="detail-container">
        <div class="detail-image">
            @if ($card->image)
                <img src="{{ $card->image }}">
            @endif
        </div>
        <div class="detail-info">
            <h1>{{ $card->name }}</h1>

            <div>
                <span class="stat-badge">Loại: {{ $card->type }}</span>
                <span class="stat-badge">Thuộc tính: {{ $card->attribute }}</span>
                <span class="stat-badge">Level: {{ $card->level }}</span>
            </div>
            <div>
                <span class="stat-badge">ATK: {{ $card->atk }}</span>
                <span class="stat-badge">DEF: {{ $card->def }}</span>
            </div>

            <p>{{ $card->effect }}</p>
        </div>
    </div>

</body>
</html>
<a href="/card/{{ $card->id }}" style="text-decoration: none; color: inherit;">
    <div class="card">
        @if ($card->image)
            <img src="{{ $card->image }}">
        @endif
        <h3>{{ $card->name }}</h3>
        <p>Loại: {{ $card->type }}</p>
        <p>Thuộc tính: {{ $card->attribute }}</p>
        <p>Level: {{ $card->level }}</p>
        <p>ATK/DEF: {{ $card->atk }} / {{ $card->def }}</p>
        <div style="display: flex; gap: 20px; margin-top: 20px;">
    <div style="flex: 1; background: #0f3460; padding: 15px; border-radius: 8px;">
        <h4 style="color: #ffd700; margin-top: 0;">🇬🇧 Tiếng Anh</h4>
        <p>{{ $card->effect }}</p>
    </div>
    <div style="flex: 1; background: #0f3460; padding: 15px; border-radius: 8px;">
        <h4 style="color: #ffd700; margin-top: 0;">🇻🇳 Tiếng Việt</h4>
        <p>{{ $card->effect_vi ?? 'Chưa có bản dịch' }}</p>
    </div>
</div>
    </div>
</a>