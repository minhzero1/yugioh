<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Yu-Gi-Oh Database')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
</head>
<body>

    {{-- Hiệu ứng hạt sáng trôi, thuần CSS, không dùng JS/thư viện ngoài --}}
    <div class="particle" style="width:4px; height:4px; left:10%; animation-duration:18s; animation-delay:0s;"></div>
    <div class="particle" style="width:3px; height:3px; left:25%; animation-duration:22s; animation-delay:3s;"></div>
    <div class="particle" style="width:5px; height:5px; left:45%; animation-duration:16s; animation-delay:6s;"></div>
    <div class="particle" style="width:3px; height:3px; left:65%; animation-duration:25s; animation-delay:1s;"></div>
    <div class="particle" style="width:4px; height:4px; left:80%; animation-duration:20s; animation-delay:4s;"></div>
    <div class="particle" style="width:3px; height:3px; left:92%; animation-duration:19s; animation-delay:8s;"></div>

    @include('partials.nav')

    @yield('content')

</body>
</html>