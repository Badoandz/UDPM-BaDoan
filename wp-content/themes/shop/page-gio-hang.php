<?php
/*
Template Name: Giỏ Hàng
*/

get_header(); ?>

<div class="tn-topbar">
	<div class="tn-container">
		<span>Hotline mua hàng: <strong>0964942121</strong> (8:30-21:30, Tất cả các ngày trong tuần)</span>
		<a href="#">Liên hệ</a>
	</div>
</div>

<header class="tn-header">
	<div class="tn-container tn-header__inner">
		<div class="tn-logo">
			<a href="<?php echo esc_url(home_url('/')); ?>">TORANO</a>
		</div>
		<nav class="tn-nav">
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('san-pham-moi')->ID)); ?>">Sản phẩm mới</a>
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('danh-muc-sale')->ID)); ?>">Danh mục sale</a>
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('ao-nam')->ID)); ?>">Áo nam <span class="dropdown-arrow">▼</span></a>
			<a href="#">Quần nam <span class="dropdown-arrow">▼</span></a>
			<a href="#">Bộ sưu tập <span class="dropdown-arrow">▼</span></a>
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('he-thong-cua-hang')->ID)); ?>">Hệ thống cửa hàng</a>
		</nav>
		<div class="tn-actions">
			<button class="tn-icon" aria-label="Tìm kiếm">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/><path d="M20 20l-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
			</button>
			<button class="tn-icon" aria-label="Tài khoản">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="1.5"/><path d="M4 20c0-3.314 3.582-6 8-6s8 2.686 8 6" stroke="currentColor" stroke-width="1.5"/></svg>
			</button>
			<button class="tn-icon" aria-label="Giỏ hàng">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 6h14l-1.5 9h-11L5 3H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="20" r="1" fill="currentColor"/><circle cx="17" cy="20" r="1" fill="currentColor"/></svg>
				<span class="cart-badge">0</span>
			</button>
		</div>
	</div>
</header>

<!-- Breadcrumb -->
<div class="breadcrumb-section">
	<div class="tn-container">
		<nav class="breadcrumb">
			<a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a>
			<span class="breadcrumb-separator">/</span>
			<span class="breadcrumb-current">Giỏ hàng</span>
		</nav>
	</div>
</div>

<div class="cart-page">
    <div class="tn-container">
        <!-- Cart Header -->
        <div class="cart-header">
            <h1 class="cart-title">Giỏ hàng</h1>
            <button class="cart-close-btn" onclick="history.back()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Empty Cart Content -->
        <div class="empty-cart-content">
            <!-- Empty Cart Illustration -->
            <div class="empty-cart-illustration">
                <!-- Shopping Bag -->
                <div class="shopping-bag">
                    <svg width="120" height="140" viewBox="0 0 120 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Bag Body -->
                        <path d="M20 40 L20 120 C20 125.523 24.477 130 30 130 L90 130 C95.523 130 100 125.523 100 120 L100 40 L20 40 Z" 
                              stroke="#000" stroke-width="2" fill="none"/>
                        <!-- Bag Handles -->
                        <path d="M30 40 L30 25 C30 15 40 10 50 10 L70 10 C80 10 90 15 90 25 L90 40" 
                              stroke="#000" stroke-width="2" fill="none"/>
                        <!-- Sad Face -->
                        <circle cx="45" cy="70" r="3" fill="#ff0000"/>
                        <circle cx="75" cy="70" r="3" fill="#ff0000"/>
                        <path d="M50 90 Q60 100 70 90" stroke="#ff0000" stroke-width="2" fill="none"/>
                    </svg>
                </div>

                <!-- Decorative Elements -->
                <div class="decorative-elements">
                    <!-- Cloud shapes -->
                    <div class="cloud cloud-1"></div>
                    <div class="cloud cloud-2"></div>
                    <div class="cloud cloud-3"></div>
                    <div class="cloud cloud-4"></div>
                    
                    <!-- Stars -->
                    <div class="star star-1"></div>
                    <div class="star star-2"></div>
                    <div class="star star-3"></div>
                    <div class="star star-4"></div>
                    
                    <!-- Cross shapes -->
                    <div class="cross cross-1"></div>
                    <div class="cross cross-2"></div>
                    
                    <!-- Hangers -->
                    <div class="hanger hanger-1"></div>
                    <div class="hanger hanger-2"></div>
                </div>
            </div>

            <!-- Empty Cart Message -->
            <div class="empty-cart-message">
                <p>Chưa có sản phẩm trong giỏ hàng...</p>
            </div>

            <!-- Action Buttons -->
            <div class="cart-actions">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('san-pham-moi')->ID)); ?>" class="cart-action-btn return-btn">
                    Trở về trang sản phẩm
                </a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('danh-muc-sale')->ID)); ?>" class="cart-action-btn promotion-btn">
                    Khuyến mãi dành cho bạn
                </a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Close button functionality
    const closeBtn = document.querySelector('.cart-close-btn');
    closeBtn.addEventListener('click', function() {
        history.back();
    });
    
    // Action buttons functionality
    const returnBtn = document.querySelector('.return-btn');
    const promotionBtn = document.querySelector('.promotion-btn');
    
    returnBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = this.href;
    });
    
    promotionBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = this.href;
    });
});
</script>

</main>
<?php get_footer(); ?>
