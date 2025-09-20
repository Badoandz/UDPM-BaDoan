<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Topbar -->
<div class="tn-topbar">
    <div class="tn-container">
        <div class="topbar-left">
            <span>Miễn phí vận chuyển cho đơn hàng từ 500.000₫</span>
        </div>
        <div class="topbar-right">
            <a href="#">Hỗ trợ</a>
            <a href="#">Theo dõi đơn hàng</a>
        </div>
    </div>
</div>

<!-- Header -->
<header class="tn-header">
    <div class="tn-container">
        <div class="tn-header__inner">
            <!-- Logo -->
            <div class="tn-logo">
                <?php 
                $custom_logo = get_theme_mod('mytheme_logo');
                if ($custom_logo) : ?>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo esc_url($custom_logo); ?>" alt="<?php bloginfo('name'); ?>" class="custom-logo">
                    </a>
                <?php else : ?>
                    <a href="<?php echo home_url(); ?>" style="color: <?php echo get_theme_mod('mytheme_title_color', '#111'); ?>">TORANO</a>
                <?php endif; ?>
            </div>

            <!-- Navigation -->
            <nav class="tn-nav">
                <a href="<?php echo home_url(); ?>">Trang chủ</a>
                <a href="<?php echo get_permalink(get_page_by_path('danh-muc-san-pham')); ?>">Danh mục</a>
                <a href="<?php echo get_permalink(get_page_by_path('san-pham-moi')); ?>">Sản phẩm mới</a>
                <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>">Blog</a>
                <a href="<?php echo get_permalink(get_page_by_path('lien-he')); ?>">Liên hệ</a>
            </nav>

            <!-- Actions -->
            <div class="tn-actions">
                <button class="tn-icon" title="Tìm kiếm">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </button>
                <button class="tn-icon" title="Tài khoản">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </button>
                <button class="tn-icon" title="Giỏ hàng">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="m1 1 4 4 13 0 4 12-4 4-13 0-4-4"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>