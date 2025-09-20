<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="contact-page">
    <div class="tn-container">
        <!-- Contact Header -->
        <div class="contact-header">
            <h1 class="contact-title">LIÊN HỆ VỚI CHÚNG TÔI</h1>
            <p class="contact-subtitle">Chúng tôi luôn sẵn sàng hỗ trợ bạn</p>
        </div>

        <!-- Contact Content -->
        <div class="contact-content">
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-section">
                    <h2>Gửi tin nhắn</h2>
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <label for="name">Họ và tên *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Chủ đề *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Chọn chủ đề</option>
                                <option value="product">Hỏi về sản phẩm</option>
                                <option value="order">Hỏi về đơn hàng</option>
                                <option value="return">Đổi trả sản phẩm</option>
                                <option value="other">Khác</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Tin nhắn *</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">Gửi tin nhắn</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info-section">
                    <h2>Thông tin liên hệ</h2>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h3>Địa chỉ</h3>
                            <p>Tầng 8, tòa nhà Ford, số 313 Trường Chinh,<br>quận Thanh Xuân, Hà Nội</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h3>Điện thoại</h3>
                            <p>0964942121</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p>cskh@torano.vn</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12,6 12,12 16,14"></polyline>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h3>Giờ làm việc</h3>
                            <p>Thứ 2 - Thứ 6: 8:00 - 18:00<br>Thứ 7: 8:00 - 12:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.contact-page {
    padding: 60px 0;
    background: #f8f9fa;
}

.contact-header {
    text-align: center;
    margin-bottom: 50px;
}

.contact-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--tn-black);
    margin-bottom: 10px;
}

.contact-subtitle {
    font-size: 1.1rem;
    color: var(--tn-gray);
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    max-width: 1000px;
    margin: 0 auto;
}

.contact-form-section h2,
.contact-info-section h2 {
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--tn-black);
    margin-bottom: 30px;
}

.contact-form {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: var(--tn-black);
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #e1e5e9;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--tn-red);
}

.submit-btn {
    background: var(--tn-red);
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s ease;
    width: 100%;
}

.submit-btn:hover {
    background: #c41e3a;
}

.contact-info-section {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.contact-info-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #f0f0f0;
}

.contact-info-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.contact-icon {
    background: var(--tn-red);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    flex-shrink: 0;
}

.contact-details h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--tn-black);
    margin-bottom: 8px;
}

.contact-details p {
    color: var(--tn-gray);
    line-height: 1.6;
}

@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .contact-title {
        font-size: 2rem;
    }
    
    .contact-form,
    .contact-info-section {
        padding: 20px;
    }
}
</style>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    const name = formData.get('name');
    const email = formData.get('email');
    const subject = formData.get('subject');
    const message = formData.get('message');
    
    // Simple validation
    if (!name || !email || !subject || !message) {
        alert('Vui lòng điền đầy đủ thông tin bắt buộc!');
        return;
    }
    
    // Simulate form submission
    alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi trong thời gian sớm nhất.');
    this.reset();
});
</script>

<?php get_footer(); ?>
