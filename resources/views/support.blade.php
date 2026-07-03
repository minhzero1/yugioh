@extends('layouts.app')
@section('title', 'Hỗ trợ - Yu-Gi-Oh Database')

@section('content')
<div class="page-wrap">
    <h1 class="title">HỖ TRỢ</h1>
    <p class="subtitle">Các câu hỏi thường gặp về Yu-Gi-Oh Database</p>

    <div class="faq-item">
        <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
            Làm sao để tìm một lá bài cụ thể?
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-answer">
            <p>Ở trang Tra cứu, gõ tên lá bài vào ô tìm kiếm, kết hợp thêm bộ lọc theo Loại thẻ và Thuộc tính để thu hẹp kết quả.</p>
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
            Tại sao một số lá bài chưa có bản dịch tiếng Việt?
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-answer">
            <p>Dữ liệu được đồng bộ và dịch tự động theo lịch mỗi ngày. Lá bài mới có thể cần đợi chu kỳ đồng bộ tiếp theo.</p>
        </div>
    </div>

    <div class="faq-item">
        <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
            Thông tin chỉ số (ATK/DEF) lấy từ đâu?
            <span class="faq-icon">+</span>
        </div>
        <div class="faq-answer">
            <p>Toàn bộ dữ liệu được đồng bộ từ cơ sở dữ liệu công khai YGOPRODeck.</p>
        </div>
    </div>

    <div class="contact-box">
        <h3>Liên hệ</h3>
        <p>Mọi thắc mắc hoặc góp ý, vui lòng gửi email tới:</p>
        <a href="mailto:support@example.com">support@example.com</a>
    </div>
</div>
@endsection