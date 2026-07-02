<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Yu-Gi-Oh Database</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #1a1a2e;
            color: #eee;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #ffd700;
        }
        .search-box {
            text-align: center;
            margin-bottom: 30px;
        }
        .search-box input {
            padding: 10px;
            width: 300px;
            border-radius: 5px;
            border: none;
        }
        .search-box button {
            padding: 10px 20px;
            background: #ffd700;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }
        .card {
            background: #16213e;
            border: 1px solid #ffd700;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
        }
        .card img {
            max-width: 100%;
            border-radius: 5px;
        }
        .card h3 {
            color: #ffd700;
            margin: 10px 0 5px;
        }
        .card p {
            font-size: 14px;
            margin: 3px 0;
        }
    </style>
</head>
<body>

    <h1>YUGIOH DATABASE</h1>
<div class="search-box">
    <form method="GET" action="/">
        <input type="text" name="keyword" placeholder="Nhập tên lá bài" value="{{ request('keyword') }}">
        <button type="submit">Tìm kiếm</button>
    </form>
</div>

    <div class="card-grid">
        @foreach ($cards as $card)
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
            <p>{{ $card->effect }}</p>
        </div>
    </a>
@endforeach

</body>
</html>