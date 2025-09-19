<?php
get_header();
?>

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
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('ao-nam')->ID)); ?>">Áo nam</a>
			<a href="#">Quần nam</a>
			<a href="#">Bộ sưu tập</a>
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('he-thong-cua-hang')->ID)); ?>">Hệ thống cửa hàng</a>
		</nav>
		<div class="tn-actions">
			<button class="tn-icon search-trigger" aria-label="Tìm kiếm">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/><path d="M20 20l-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
			</button>
			<button class="tn-icon" aria-label="Tài khoản">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="1.5"/><path d="M4 20c0-3.314 3.582-6 8-6s8 2.686 8 6" stroke="currentColor" stroke-width="1.5"/></svg>
			</button>
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('gio-hang')->ID)); ?>" class="tn-icon" aria-label="Giỏ hàng">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 6h14l-1.5 9h-11L5 3H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="20" r="1" fill="currentColor"/><circle cx="17" cy="20" r="1" fill="currentColor"/></svg>
				<span class="cart-badge">0</span>
			</a>
		</div>
	</div>
</header>

<section class="tn-slider" data-autoplay="true" data-interval="5000">
	<div class="tn-slides">
		<div class="tn-slide is-active" style="--bg:url('https://picsum.photos/id/1011/1920/900');"></div>
		<div class="tn-slide" style="--bg:url('https://picsum.photos/id/1015/1920/900');"></div>
		<div class="tn-slide" style="--bg:url('https://picsum.photos/id/1025/1920/900');"></div>
	</div>
	<div class="tn-dots" aria-label="Chuyển slide" role="tablist">
		<button class="is-active" role="tab" aria-selected="true"></button>
		<button role="tab" aria-selected="false"></button>
		<button role="tab" aria-selected="false"></button>
	</div>
</section>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<div class="product-category-section tn-container">
    <div class="category-header">
        <h2 class="tn-section-title">DANH MỤC SẢN PHẨM</h2>
        <div class="category-nav-arrows">
            <button class="category-nav-btn category-prev-btn">‹</button>
            <button class="category-nav-btn category-next-btn">›</button>
        </div>
    </div>

    <!-- Slider wrapper -->
    <div class="swiper category-slider">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => false,
                'parent'     => 0
            );
            $product_categories = get_terms($args);
            
            // Nếu không có danh mục, hiển thị danh mục mẫu
            if (empty($product_categories) || is_wp_error($product_categories)) {
                $sample_categories = array(
                    array('name' => 'Áo Polo', 'image' => 'https://images.unsplash.com/photo-1542060748-10c28b62716d?q=80&w=1600&auto=format&fit=crop'),
                    array('name' => 'Áo Thun', 'image' => 'https://images.unsplash.com/photo-1603252109303-2751441dd157?q=80&w=1600&auto=format&fit=crop'),
                    array('name' => 'Quần Jeans', 'image' => 'https://images.unsplash.com/photo-1514311548104-ae305aac4688?q=80&w=1600&auto=format&fit=crop'),
                    array('name' => 'Quần Âu', 'image' => 'https://images.unsplash.com/photo-1620799139533-3f7b2a9a8121?q=80&w=1600&auto=format&fit=crop')
                );
                
                foreach ($sample_categories as $category) {
            ?>
                <div class="swiper-slide">
                    <div class="category-card">
                        <a href="#">
                            <img src="<?php echo $category['image']; ?>" alt="<?php echo $category['name']; ?>">
                            <div class="category-info">
                                <h4><?php echo $category['name']; ?></h4>
                                <span class="arrow">→</span>
                            </div>
                        </a>
                    </div>
                </div>
            <?php 
                }
            } else {
                foreach ($product_categories as $category) {
                    $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                    $image = wp_get_attachment_url($thumbnail_id);
                    
                    // Ảnh mặc định nếu không có
                    if (!$image) {
                        $image = 'https://images.unsplash.com/photo-1542060748-10c28b62716d?q=80&w=1600&auto=format&fit=crop';
                    }
            ?>
                <div class="swiper-slide">
                    <div class="category-card">
                        <a href="<?php echo get_term_link($category); ?>">
                            <img src="<?php echo $image; ?>" alt="<?php echo $category->name; ?>">
                            <div class="category-info">
                                <h4><?php echo $category->name; ?></h4>
                                <span class="arrow">→</span>
                            </div>
                        </a>
                    </div>
                </div>
            <?php 
                }
            }
            ?>
        </div>

        <!-- Navigation arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var categorySwiper = new Swiper(".category-slider", {
    slidesPerView: 4,
    spaceBetween: 20,
    navigation: {
      nextEl: ".category-next-btn",
      prevEl: ".category-prev-btn",
    },
    breakpoints: {
      0:   { slidesPerView: 1.2, spaceBetween: 10 },
      576: { slidesPerView: 2, spaceBetween: 15 },
      768: { slidesPerView: 3, spaceBetween: 20 },
      1200:{ slidesPerView: 4, spaceBetween: 20 }
    }
  });
</script>

<!-- Promotional Products Section -->
<div class="promotional-products-section tn-container">
    <div class="promotional-header">
        <h2 class="promotional-title">SẢN PHẨM KHUYẾN MÃI</h2>
        <div class="promotional-nav">
            <button class="promo-nav-btn prev-btn">‹</button>
            <button class="promo-nav-btn next-btn">›</button>
        </div>
    </div>
    
    <div class="promotional-grid">
        <div class="promo-product-card">
            <div class="promo-discount-badge">-34%</div>
            <div class="promo-product-image">
                <img src="https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?q=80&w=400&auto=format&fit=crop" alt="Áo polo monogram">
            </div>
            <div class="promo-product-details">
                <div class="promo-variants">
                    <span class="color-variants">+2 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="promo-product-name">Áo polo monogram in tràn họa tiết GSTP051</h3>
                <div class="promo-prices">
                    <span class="promo-current-price">299,000₫</span>
                    <span class="promo-original-price">450,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="promo-product-card">
            <div class="promo-discount-badge">-34%</div>
            <div class="promo-product-image">
                <img src="https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=400&auto=format&fit=crop" alt="Áo Polo trơn">
            </div>
            <div class="promo-product-details">
                <div class="promo-variants">
                    <span class="color-variants">+8 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="promo-product-name">Áo Polo trơn bo kẻ FSTP003</h3>
                <div class="promo-prices">
                    <span class="promo-current-price">279,000₫</span>
                    <span class="promo-original-price">420,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="promo-product-card">
            <div class="promo-discount-badge">-29%</div>
            <div class="promo-product-image">
                <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=400&auto=format&fit=crop" alt="Áo T shirt thể thao">
            </div>
            <div class="promo-product-details">
                <div class="promo-variants">
                    <span class="color-variants">+4 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="promo-product-name">Áo T shirt trơn in thể thao GSTS017</h3>
                <div class="promo-prices">
                    <span class="promo-current-price">249,000₫</span>
                    <span class="promo-original-price">349,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="promo-product-card">
            <div class="promo-discount-badge">-29%</div>
            <div class="promo-product-image">
                <img src="https://images.unsplash.com/photo-1503341504253-dff4815485f1?q=80&w=400&auto=format&fit=crop" alt="Áo T shirt thể thao">
            </div>
            <div class="promo-product-details">
                <div class="promo-variants">
                    <span class="color-variants">+3 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="promo-product-name">Áo T shirt trơn in thể thao GSTS018</h3>
                <div class="promo-prices">
                    <span class="promo-current-price">249,000₫</span>
                    <span class="promo-original-price">349,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="promo-product-card">
            <div class="promo-discount-badge">-20%</div>
            <div class="promo-product-image">
                <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?q=80&w=400&auto=format&fit=crop" alt="Quần Jeans">
            </div>
            <div class="promo-product-details">
                <div class="promo-variants">
                    <span class="color-variants">+7 Màu sắc</span>
                    <span class="size-variants">+5 Kích thước</span>
                </div>
                <h3 class="promo-product-name">Quần Jeans basic slim EABJ012</h3>
                <div class="promo-prices">
                    <span class="promo-current-price">399,000₫</span>
                    <span class="promo-original-price">500,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="promo-product-card">
            <div class="promo-discount-badge">-20%</div>
            <div class="promo-product-image">
                <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?q=80&w=400&auto=format&fit=crop" alt="Quần âu">
            </div>
            <div class="promo-product-details">
                <div class="promo-variants">
                    <span class="color-variants">+6 Màu sắc</span>
                    <span class="size-variants">+5 Kích thước</span>
                </div>
                <h3 class="promo-product-name">Quần âu slim-fit cạp trơn - DABT900</h3>
                <div class="promo-prices">
                    <span class="promo-current-price">399,000₫</span>
                    <span class="promo-original-price">500,000₫</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="promotional-view-all">
        <button class="view-all-btn">XEM TẤT CẢ SẢN PHẨM KHUYẾN MÃI</button>
    </div>
</div>

<!-- Featured Products Section -->
<div class="featured-products-section tn-container">
    <div class="featured-header">
        <h2 class="featured-title">SẢN PHẨM NỔI BẬT</h2>
        <div class="featured-categories">
            <span class="category-tab" data-category="featured">SẢN PHẨM NỔI BẬT</span>
            <span class="category-tab active" data-category="sport">ĐỒ THỂ THAO</span>
            <span class="category-tab" data-category="office">ĐỒ CÔNG SỞ</span>
            <span class="category-tab" data-category="winter">ĐỒ THU ĐÔNG</span>
        </div>
    </div>
    
    <!-- Sản phẩm nổi bật -->
    <div class="featured-products-grid" id="featured-products">
        <div class="featured-product-card">
            <div class="featured-discount-badge">-22%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=400&auto=format&fit=crop" alt="Áo polo seamless">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+4 Màu sắc</span>
                    <span class="size-variants">+5 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Áo polo seamless in logo ngực GSTP044</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">349,000₫</span>
                    <span class="featured-original-price">450,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-22%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?q=80&w=400&auto=format&fit=crop" alt="Áo polo seamless">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+4 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Áo polo seamless in logo ngực GSTP065</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">349,000₫</span>
                    <span class="featured-original-price">450,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-43%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?q=80&w=400&auto=format&fit=crop" alt="Áo Polo thể thao">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+4 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Áo Polo thể thao can vai FSTP001</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">229,000₫</span>
                    <span class="featured-original-price">400,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-48%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1503341504253-dff4815485f1?q=80&w=400&auto=format&fit=crop" alt="Áo Polo thể thao">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+6 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Áo Polo thể thao ngắn trơn basic FSTP027</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">199,000₫</span>
                    <span class="featured-original-price">380,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-40%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=400&auto=format&fit=crop" alt="Áo T shirt thể thao">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+5 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Áo T shirt thể thao basic FSTS002</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">149,000₫</span>
                    <span class="featured-original-price">250,000₫</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Đồ thể thao -->
    <div class="featured-products-grid" id="sport-products" style="display: none;">
        <div class="featured-product-card">
            <div class="featured-discount-badge">-25%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=400&auto=format&fit=crop" alt="Áo thể thao">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+6 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Áo thể thao nam cao cấp SP001</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">299,000₫</span>
                    <span class="featured-original-price">399,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-30%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1503341504253-dff4815485f1?q=80&w=400&auto=format&fit=crop" alt="Quần thể thao">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+5 Màu sắc</span>
                    <span class="size-variants">+5 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Quần thể thao jogger SP002</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">399,000₫</span>
                    <span class="featured-original-price">570,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-20%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?q=80&w=400&auto=format&fit=crop" alt="Áo khoác thể thao">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+4 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Áo khoác thể thao windbreaker SP003</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">599,000₫</span>
                    <span class="featured-original-price">749,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-35%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=400&auto=format&fit=crop" alt="Giày thể thao">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+3 Màu sắc</span>
                    <span class="size-variants">+8 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Giày thể thao chạy bộ SP004</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">899,000₫</span>
                    <span class="featured-original-price">1,380,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-15%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?q=80&w=400&auto=format&fit=crop" alt="Phụ kiện thể thao">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+7 Màu sắc</span>
                    <span class="size-variants">+3 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Mũ lưỡi trai thể thao SP005</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">149,000₫</span>
                    <span class="featured-original-price">175,000₫</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Đồ công sở -->
    <div class="featured-products-grid" id="office-products" style="display: none;">
        <div class="featured-product-card">
            <div class="featured-discount-badge">-18%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?q=80&w=400&auto=format&fit=crop" alt="Áo sơ mi công sở">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+8 Màu sắc</span>
                    <span class="size-variants">+5 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Áo sơ mi công sở cao cấp OF001</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">449,000₫</span>
                    <span class="featured-original-price">549,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-22%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=400&auto=format&fit=crop" alt="Quần âu công sở">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+6 Màu sắc</span>
                    <span class="size-variants">+5 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Quần âu công sở slim-fit OF002</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">599,000₫</span>
                    <span class="featured-original-price">769,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-25%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?q=80&w=400&auto=format&fit=crop" alt="Vest công sở">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+4 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Vest công sở 2 mảnh OF003</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">1,299,000₫</span>
                    <span class="featured-original-price">1,732,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-20%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1503341504253-dff4815485f1?q=80&w=400&auto=format&fit=crop" alt="Giày công sở">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+5 Màu sắc</span>
                    <span class="size-variants">+8 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Giày da công sở OF004</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">799,000₫</span>
                    <span class="featured-original-price">999,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-30%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=400&auto=format&fit=crop" alt="Cà vạt công sở">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+12 Màu sắc</span>
                    <span class="size-variants">+2 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Cà vạt lụa cao cấp OF005</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">299,000₫</span>
                    <span class="featured-original-price">427,000₫</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Đồ thu đông -->
    <div class="featured-products-grid" id="winter-products" style="display: none;">
        <div class="featured-product-card">
            <div class="featured-discount-badge">-35%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1571945153237-4929e783af4a?q=80&w=400&auto=format&fit=crop" alt="Áo khoác mùa đông">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+5 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Áo khoác dạ mùa đông WD001</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">1,199,000₫</span>
                    <span class="featured-original-price">1,845,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-28%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?q=80&w=400&auto=format&fit=crop" alt="Áo len mùa đông">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+7 Màu sắc</span>
                    <span class="size-variants">+4 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Áo len cao cổ mùa đông WD002</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">699,000₫</span>
                    <span class="featured-original-price">971,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-32%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?q=80&w=400&auto=format&fit=crop" alt="Quần dài mùa đông">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+4 Màu sắc</span>
                    <span class="size-variants">+5 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Quần dài len mùa đông WD003</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">549,000₫</span>
                    <span class="featured-original-price">807,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-25%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1503341504253-dff4815485f1?q=80&w=400&auto=format&fit=crop" alt="Găng tay mùa đông">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+6 Màu sắc</span>
                    <span class="size-variants">+3 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Găng tay len mùa đông WD004</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">199,000₫</span>
                    <span class="featured-original-price">265,000₫</span>
                </div>
            </div>
        </div>
        
        <div class="featured-product-card">
            <div class="featured-discount-badge">-40%</div>
            <div class="featured-product-image">
                <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=400&auto=format&fit=crop" alt="Khăn quàng mùa đông">
            </div>
            <div class="featured-product-details">
                <div class="featured-variants">
                    <span class="color-variants">+8 Màu sắc</span>
                    <span class="size-variants">+2 Kích thước</span>
                </div>
                <h3 class="featured-product-name">Khăn quàng len mùa đông WD005</h3>
                <div class="featured-prices">
                    <span class="featured-current-price">149,000₫</span>
                    <span class="featured-original-price">248,000₫</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Outfit of the Day Section -->
<div class="outfit-section tn-container">
    <div class="outfit-header">
        <h2 class="outfit-title">OUTFIT OF THE DAY</h2>
    </div>
    
    <div class="outfit-grid">
        <!-- Outfit 1 -->
        <div class="outfit-card">
            <div class="outfit-image">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop" alt="Outfit 1 - Olive Green Polo">
                <div class="outfit-overlay">
                    <button class="outfit-plus-btn" data-product="polo-olive">+</button>
                    <button class="outfit-plus-btn" data-product="trousers-grey">+</button>
                </div>
            </div>
            <div class="outfit-details">
                <h3 class="outfit-name">Casual Green Look</h3>
                <p class="outfit-description">Áo polo xanh olive + Quần âu xám</p>
            </div>
        </div>
        
        <!-- Outfit 2 -->
        <div class="outfit-card">
            <div class="outfit-image">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=400&auto=format&fit=crop" alt="Outfit 2 - Black Polo with Stripes">
                <div class="outfit-overlay">
                    <button class="outfit-plus-btn" data-product="polo-black">+</button>
                    <button class="outfit-plus-btn" data-product="trousers-black">+</button>
                </div>
            </div>
            <div class="outfit-details">
                <h3 class="outfit-name">Smart Black Look</h3>
                <p class="outfit-description">Áo polo đen kẻ + Quần âu đen</p>
            </div>
        </div>
        
        <!-- Outfit 3 -->
        <div class="outfit-card">
            <div class="outfit-image">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=400&auto=format&fit=crop" alt="Outfit 3 - White Polo with Navy">
                <div class="outfit-overlay">
                    <button class="outfit-plus-btn" data-product="polo-white">+</button>
                    <button class="outfit-plus-btn" data-product="shorts-white">+</button>
                </div>
            </div>
            <div class="outfit-details">
                <h3 class="outfit-name">Summer White Look</h3>
                <p class="outfit-description">Áo polo trắng + Shorts trắng</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class="footer-section">
    <!-- Service Highlights -->
    <div class="service-highlights">
        <div class="tn-container">
            <div class="service-grid">
                <div class="service-item">
                    <div class="service-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8z"/>
                            <polyline points="3.27,6.96 12,12.01 20.73,6.96"/>
                            <line x1="12" y1="22.08" x2="12" y2="12"/>
                        </svg>
                    </div>
                    <div class="service-content">
                        <h4>Miễn phí vận chuyển</h4>
                        <p>Áp dụng cho mọi đơn hàng từ 500k</p>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8z"/>
                            <path d="M7 12l2 2 4-4"/>
                        </svg>
                    </div>
                    <div class="service-content">
                        <h4>Đổi hàng dễ dàng</h4>
                        <p>7 ngày đổi hàng vì bất kì lí do gì</p>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 12l2 2 4-4"/>
                            <path d="M21 12c.552 0 1-.448 1-1V5c0-.552-.448-1-1-1H3c-.552 0-1 .448-1 1v6c0 .552.448 1 1 1h18z"/>
                            <path d="M3 12v6c0 .552.448 1 1 1h16c.552 0 1-.448 1-1v-6"/>
                        </svg>
                    </div>
                    <div class="service-content">
                        <h4>Hỗ trợ nhanh chóng</h4>
                        <p>HOTLINE 24/7: 0964942121</p>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                            <line x1="1" y1="10" x2="23" y2="10"/>
                        </svg>
                    </div>
                    <div class="service-content">
                        <h4>Thanh toán đa dạng</h4>
                        <p>Thanh toán khi nhận hàng, Napas, Visa, Chuyển Khoản</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Footer Content -->
    <div class="footer-main">
        <div class="tn-container">
            <div class="footer-grid">
                <!-- Column 1: Company Info -->
                <div class="footer-column">
                    <h3 class="footer-title">Thời trang nam TORANO</h3>
                    <p class="footer-description">Hệ thống thời trang cho phái mạnh hàng đầu Việt Nam, hướng tới phong cách nam tính, lịch lãm và trẻ trung.</p>
                    
                    <div class="social-media">
                        <a href="#" class="social-icon facebook">f</a>
                        <a href="#" class="social-icon twitter">🐦</a>
                        <a href="#" class="social-icon instagram">📷</a>
                        <a href="#" class="social-icon tiktok">🎵</a>
                        <a href="#" class="social-icon youtube">▶</a>
                    </div>
                    
                    <div class="payment-methods">
                        <h4>Phương thức thanh toán</h4>
                        <div class="payment-logos">
                            <span class="payment-logo">VNPAY</span>
                            <span class="payment-logo">ZaloPay</span>
                            <span class="payment-logo">Moca</span>
                            <span class="payment-logo">Kredivo</span>
                            <span class="payment-logo">Napas</span>
                            <span class="payment-logo">Visa</span>
                        </div>
                    </div>
                </div>
                
                <!-- Column 2: Contact Info -->
                <div class="footer-column">
                    <h3 class="footer-title">Thông tin liên hệ</h3>
                    <div class="contact-info">
                        <p><strong>Địa chỉ:</strong> Tầng 8, tòa nhà Ford, số 313 Trường Chinh, quận Thanh Xuân, Hà Nội</p>
                        <p><strong>Điện thoại:</strong> 0964942121</p>
                        <p><strong>Fax:</strong> 0904636356</p>
                        <p><strong>Email:</strong> cskh@torano.vn</p>
                    </div>
                    
                    <div class="shipping-methods">
                        <h4>Phương thức vận chuyển</h4>
                        <div class="shipping-logos">
                            <span class="shipping-logo">GHN</span>
                            <span class="shipping-logo">Ninja Van</span>
                            <span class="shipping-logo">Ahamove</span>
                            <span class="shipping-logo">J&T</span>
                        </div>
                    </div>
                </div>
                
                <!-- Column 3: Links -->
                <div class="footer-column">
                    <h3 class="footer-title">Nhóm liên kết</h3>
                    <ul class="footer-links">
                        <li><a href="#">Tìm kiếm</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Tuyển dụng</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
                
                <!-- Column 4: Newsletter -->
                <div class="footer-column">
                    <h3 class="footer-title">Đăng ký nhận tin</h3>
                    <p class="newsletter-description">Để cập nhật những sản phẩm mới, nhận thông tin ưu đãi đặc biệt và thông tin giảm giá khác.</p>
                    
                    <form class="newsletter-form">
                        <div class="newsletter-input">
                            <input type="email" placeholder="Nhập email của bạn" required>
                            <button type="submit">ĐĂNG KÝ</button>
                        </div>
                    </form>
                    
                    <div class="government-badge">
                        <div class="badge-icon">✓</div>
                        <span>ĐÃ THÔNG BÁO BỘ CÔNG THƯƠNG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryTabs = document.querySelectorAll('.category-tab');
    const productGrids = {
        'featured': document.getElementById('featured-products'),
        'sport': document.getElementById('sport-products'),
        'office': document.getElementById('office-products'),
        'winter': document.getElementById('winter-products')
    };

    categoryTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Remove active class from all tabs
            categoryTabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all product grids
            Object.values(productGrids).forEach(grid => {
                if (grid) {
                    grid.style.display = 'none';
                }
            });
            
            // Show selected product grid
            if (productGrids[category]) {
                productGrids[category].style.display = 'grid';
            }
        });
    });

    // Outfit section functionality
    const outfitPlusBtns = document.querySelectorAll('.outfit-plus-btn');
    outfitPlusBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const product = this.getAttribute('data-product');
            alert('Đã thêm sản phẩm: ' + product + ' vào giỏ hàng!');
        });
    });
	});
</script>

<!-- Search Overlay -->
<div class="search-overlay" id="searchOverlay">
	<div class="search-modal">
		<!-- Search Header -->
		<div class="search-header">
			<div class="search-logo">
				<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<!-- Pegasus Logo -->
					<path d="M8 12 L12 8 L16 12 L20 8 L24 12 L28 8 L32 12 L32 16 L28 20 L24 16 L20 20 L16 16 L12 20 L8 16 Z" fill="#000"/>
					<path d="M10 14 L14 10 L18 14 L22 10 L26 14 L30 10 L30 14 L26 18 L22 14 L18 18 L14 14 L10 18 Z" fill="#000"/>
				</svg>
				<span class="search-brand">TORANO</span>
			</div>
			<button class="search-close" id="searchClose">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
					<line x1="18" y1="6" x2="6" y2="18"></line>
					<line x1="6" y1="6" x2="18" y2="18"></line>
				</svg>
			</button>
		</div>

		<!-- Search Input -->
		<div class="search-input-container">
			<input type="text" class="search-input" placeholder="Tìm kiếm sản phẩm..." id="searchInput">
			<button class="search-submit">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
					<circle cx="11" cy="11" r="7"></circle>
					<path d="M20 20l-3.5-3.5"></path>
				</svg>
			</button>
		</div>

		<!-- Search Suggestions -->
		<div class="search-suggestions">
			<span class="suggestion-item">Polo</span>
			<span class="suggestion-item">Short Đũi</span>
			<a href="#" class="suggestion-link">TShirt Text 1</a>
			<a href="#" class="suggestion-link">Text 2</a>
			<a href="#" class="suggestion-link">Text 3</a>
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	// Search overlay functionality
	const searchTrigger = document.querySelector('.search-trigger');
	const searchOverlay = document.getElementById('searchOverlay');
	const searchClose = document.getElementById('searchClose');
	const searchInput = document.getElementById('searchInput');

	// Open search overlay
	searchTrigger.addEventListener('click', function() {
		searchOverlay.classList.add('active');
		searchInput.focus();
	});

	// Close search overlay
	searchClose.addEventListener('click', function() {
		searchOverlay.classList.remove('active');
	});

	// Close on overlay click
	searchOverlay.addEventListener('click', function(e) {
		if (e.target === searchOverlay) {
			searchOverlay.classList.remove('active');
		}
	});

	// Close on Escape key
	document.addEventListener('keydown', function(e) {
		if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
			searchOverlay.classList.remove('active');
		}
	});

	// Search functionality
	const searchSubmit = document.querySelector('.search-submit');
	searchSubmit.addEventListener('click', function() {
		const query = searchInput.value.trim();
		if (query) {
			// Redirect to search results page
			window.location.href = '<?php echo esc_url(home_url('/')); ?>?s=' + encodeURIComponent(query);
		}
	});

	// Search on Enter key
	searchInput.addEventListener('keypress', function(e) {
		if (e.key === 'Enter') {
			const query = searchInput.value.trim();
			if (query) {
				window.location.href = '<?php echo esc_url(home_url('/')); ?>?s=' + encodeURIComponent(query);
			}
		}
	});

	// Suggestion links functionality
	const suggestionLinks = document.querySelectorAll('.suggestion-link');
	suggestionLinks.forEach(link => {
		link.addEventListener('click', function(e) {
			e.preventDefault();
			const suggestion = this.textContent;
			searchInput.value = suggestion;
			window.location.href = '<?php echo esc_url(home_url('/')); ?>?s=' + encodeURIComponent(suggestion);
		});
	});
});
</script>

<?php get_footer(); ?>