<?php
/*
Template Name: Áo Nam
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
			<div class="nav-dropdown">
				<a href="<?php echo esc_url(get_permalink(get_page_by_path('ao-nam')->ID)); ?>" class="active">Áo nam <span class="dropdown-arrow">▼</span></a>
				<div class="dropdown-menu">
					<a href="#" class="dropdown-item">Áo Polo</a>
					<a href="#" class="dropdown-item">Áo Thun</a>
					<a href="#" class="dropdown-item">Áo Sơ Mi</a>
					<a href="#" class="dropdown-item">Áo Blazer</a>
					<a href="#" class="dropdown-item">Áo Khoác</a>
					<a href="#" class="dropdown-item">Áo Len</a>
					<a href="#" class="dropdown-item">Áo - Quần Nỉ</a>
				</div>
			</div>
			<a href="#">Quần nam <span class="dropdown-arrow">▼</span></a>
			<a href="#">Bộ sưu tập <span class="dropdown-arrow">▼</span></a>
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

<!-- Breadcrumb -->
<div class="breadcrumb-section">
	<div class="tn-container">
		<nav class="breadcrumb">
			<a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a>
			<span class="breadcrumb-separator">/</span>
			<span class="breadcrumb-current">Áo nam</span>
		</nav>
	</div>
</div>

<div class="new-products-page">
    <div class="container-fluid">
        <div class="row">
            <!-- Left Sidebar - Filters -->
            <div class="col-lg-3 col-md-4">
                <div class="filters-sidebar">
                    <h2 class="filters-title">Bộ lọc</h2>
                    
                    <!-- Product Categories -->
                    <div class="filter-section">
                        <h3 class="filter-section-title">Danh mục sản phẩm</h3>
                        <ul class="filter-list">
                            <li class="filter-item">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('san-pham-moi')->ID)); ?>" class="filter-link">Sản phẩm mới</a>
                            </li>
                            <li class="filter-item">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('danh-muc-sale')->ID)); ?>" class="filter-link">Danh mục sale</a>
                            </li>
                            <li class="filter-item has-submenu active">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('ao-nam')->ID)); ?>" class="filter-link">Áo nam <span class="dropdown-arrow">▼</span></a>
                            </li>
                            <li class="filter-item has-submenu">
                                <a href="#" class="filter-link">Quần nam <span class="dropdown-arrow">▼</span></a>
                            </li>
                            <li class="filter-item has-submenu">
                                <a href="#" class="filter-link">Bộ sưu tập <span class="dropdown-arrow">▼</span></a>
                            </li>
                            <li class="filter-item">
                                <a href="#" class="filter-link">Hệ thống cửa hàng</a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Price Range -->
                    <div class="filter-section">
                        <h3 class="filter-section-title">Khoảng giá</h3>
                        <div class="price-range">
                            <div class="price-display">
                                <span class="price-min">0₫</span>
                                <span class="price-separator">-</span>
                                <span class="price-max">3,000,000₫</span>
                            </div>
                            <div class="price-slider">
                                <input type="range" class="range-slider" min="0" max="3000000" value="0" id="priceMin">
                                <input type="range" class="range-slider" min="0" max="3000000" value="3000000" id="priceMax">
                            </div>
                            <div class="price-display">
                                <span class="price-min">0₫</span>
                                <span class="price-separator">-</span>
                                <span class="price-max">3,000,000₫</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Color Filter -->
                    <div class="filter-section">
                        <h3 class="filter-section-title">Màu sắc</h3>
                        <div class="color-options">
                            <div class="color-item">
                                <input type="checkbox" id="color-teal" class="color-checkbox">
                                <label for="color-teal" class="color-label">
                                    <span class="color-swatch" style="background-color: #0d9488;"></span>
                                    Xanh rêu
                                </label>
                            </div>
                            <div class="color-item">
                                <input type="checkbox" id="color-blue" class="color-checkbox">
                                <label for="color-blue" class="color-label">
                                    <span class="color-swatch" style="background-color: #1e40af;"></span>
                                    Xanh dương
                                </label>
                            </div>
                            <div class="color-item">
                                <input type="checkbox" id="color-white" class="color-checkbox">
                                <label for="color-white" class="color-label">
                                    <span class="color-swatch" style="background-color: #ffffff; border: 1px solid #ddd;"></span>
                                    Trắng
                                </label>
                            </div>
                            <div class="color-item">
                                <input type="checkbox" id="color-black" class="color-checkbox">
                                <label for="color-black" class="color-label">
                                    <span class="color-swatch" style="background-color: #000000;"></span>
                                    Đen
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Size Filter -->
                    <div class="filter-section">
                        <h3 class="filter-section-title">Size</h3>
                        <div class="size-options">
                            <button class="size-btn" data-size="S">S</button>
                            <button class="size-btn" data-size="M">M</button>
                            <button class="size-btn" data-size="L">L</button>
                            <button class="size-btn" data-size="XL">XL</button>
                            <button class="size-btn" data-size="XXL">XXL</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-9 col-md-8">
                <div class="products-main">
                    <!-- Products Header -->
                    <div class="products-header">
                        <div class="products-title-section">
                            <h1 class="products-title">Áo nam</h1>
                            <span class="products-count">86 sản phẩm</span>
                        </div>
                        <div class="products-sort">
                            <label for="sortSelect" class="sort-label">Sắp xếp theo</label>
                            <select id="sortSelect" class="sort-select">
                                <option value="featured">Sản phẩm nổi bật</option>
                                <option value="price-low">Giá thấp đến cao</option>
                                <option value="price-high">Giá cao đến thấp</option>
                                <option value="newest">Mới nhất</option>
                                <option value="popular">Bán chạy</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Products Grid -->
                    <div class="products-grid">
                        <!-- Product 1 - Dark Teal T-shirt -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=400&auto=format&fit=crop" alt="Áo T shirt trơn in thể thao GSTS017">
                                <div class="discount-badge">-29%</div>
                            </div>
                            <div class="product-info">
                                <div class="product-variants">
                                    <span class="color-variants">+4 Màu sắc</span>
                                    <span class="size-variants">+4 Kích thước</span>
                                </div>
                                <h3 class="product-name">Áo T shirt trơn in thể thao GSTS017</h3>
                                <div class="product-price">
                                    <span class="current-price">249,000₫</span>
                                    <span class="original-price">349,000₫</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 2 - Dark Teal T-shirt -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=400&auto=format&fit=crop" alt="Áo T shirt trơn in thể thao GSTS018">
                                <div class="discount-badge">-29%</div>
                            </div>
                            <div class="product-info">
                                <div class="product-variants">
                                    <span class="color-variants">+3 Màu sắc</span>
                                    <span class="size-variants">+4 Kích thước</span>
                                </div>
                                <h3 class="product-name">Áo T shirt trơn in thể thao GSTS018</h3>
                                <div class="product-price">
                                    <span class="current-price">249,000₫</span>
                                    <span class="original-price">349,000₫</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 3 - Dark Blue Polo -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop" alt="Áo polo trơn active in logo Torano GSTP561">
                            </div>
                            <div class="product-info">
                                <div class="product-variants">
                                    <span class="color-variants">+8 Màu sắc</span>
                                    <span class="size-variants">+4 Kích thước</span>
                                </div>
                                <h3 class="product-name">Áo polo trơn active in logo Torano GSTP561</h3>
                                <div class="product-price">
                                    <span class="current-price">499,000₫</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 4 - Teal Polo -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.unsplash.com/photo-1594938298603-c8148c4dae35?q=80&w=400&auto=format&fit=crop" alt="Áo polo active in logo Torano ngực GSTP551">
                            </div>
                            <div class="product-info">
                                <div class="product-variants">
                                    <span class="color-variants">+8 Màu sắc</span>
                                    <span class="size-variants">+4 Kích thước</span>
                                </div>
                                <h3 class="product-name">Áo polo active in logo Torano ngực GSTP551</h3>
                                <div class="product-price">
                                    <span class="current-price">530,000₫</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 5 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=400&auto=format&fit=crop" alt="Áo polo trơn kẻ in logo ngực GSTP846">
                                <div class="discount-badge">-25%</div>
                            </div>
                            <div class="product-info">
                                <div class="product-variants">
                                    <span class="color-variants">+6 Màu sắc</span>
                                    <span class="size-variants">+4 Kích thước</span>
                                </div>
                                <h3 class="product-name">Áo polo trơn kẻ in logo ngực GSTP846</h3>
                                <div class="product-price">
                                    <span class="current-price">411,000₫</span>
                                    <span class="original-price">549,000₫</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 6 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.unsplash.com/photo-1594938298603-c8148c4dae35?q=80&w=400&auto=format&fit=crop" alt="Áo T shirt trơn in thể thao GSTS016">
                                <div class="discount-badge">-20%</div>
                            </div>
                            <div class="product-info">
                                <div class="product-variants">
                                    <span class="color-variants">+5 Màu sắc</span>
                                    <span class="size-variants">+4 Kích thước</span>
                                </div>
                                <h3 class="product-name">Áo T shirt trơn in thể thao GSTS016</h3>
                                <div class="product-price">
                                    <span class="current-price">279,000₫</span>
                                    <span class="original-price">349,000₫</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 7 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop" alt="Áo polo trơn kẻ in logo ngực GSTP844">
                                <div class="discount-badge">-15%</div>
                            </div>
                            <div class="product-info">
                                <div class="product-variants">
                                    <span class="color-variants">+7 Màu sắc</span>
                                    <span class="size-variants">+4 Kích thước</span>
                                </div>
                                <h3 class="product-name">Áo polo trơn kẻ in logo ngực GSTP844</h3>
                                <div class="product-price">
                                    <span class="current-price">466,000₫</span>
                                    <span class="original-price">549,000₫</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 8 -->
                        <div class="product-card">
                            <div class="product-image">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=400&auto=format&fit=crop" alt="Áo T shirt trơn in thể thao GSTS015">
                                <div class="discount-badge">-15%</div>
                            </div>
                            <div class="product-info">
                                <div class="product-variants">
                                    <span class="color-variants">+4 Màu sắc</span>
                                    <span class="size-variants">+4 Kích thước</span>
                                </div>
                                <h3 class="product-name">Áo T shirt trơn in thể thao GSTS015</h3>
                                <div class="product-price">
                                    <span class="current-price">296,000₫</span>
                                    <span class="original-price">349,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Load More Button -->
                    <div class="load-more-section">
                        <button class="load-more-btn">Xem thêm sản phẩm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Dropdown menu functionality
    const navDropdown = document.querySelector('.nav-dropdown');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    
    navDropdown.addEventListener('mouseenter', function() {
        dropdownMenu.style.display = 'block';
    });
    
    navDropdown.addEventListener('mouseleave', function() {
        dropdownMenu.style.display = 'none';
    });
    
    // Price range slider functionality
    const priceMin = document.getElementById('priceMin');
    const priceMax = document.getElementById('priceMax');
    const priceMinDisplay = document.querySelectorAll('.price-min');
    const priceMaxDisplay = document.querySelectorAll('.price-max');
    
    function updatePriceDisplay() {
        const minValue = parseInt(priceMin.value);
        const maxValue = parseInt(priceMax.value);
        
        priceMinDisplay.forEach(el => el.textContent = formatPrice(minValue));
        priceMaxDisplay.forEach(el => el.textContent = formatPrice(maxValue));
    }
    
    function formatPrice(price) {
        return new Intl.NumberFormat('vi-VN').format(price) + '₫';
    }
    
    priceMin.addEventListener('input', updatePriceDisplay);
    priceMax.addEventListener('input', updatePriceDisplay);
    
    // Size filter functionality
    const sizeBtns = document.querySelectorAll('.size-btn');
    sizeBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            sizeBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });
    
    // Color filter functionality
    const colorCheckboxes = document.querySelectorAll('.color-checkbox');
    colorCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // Handle color filter logic here
            console.log('Color filter changed:', this.id);
        });
    });
    
    // Sort functionality
    const sortSelect = document.getElementById('sortSelect');
    sortSelect.addEventListener('change', function() {
        console.log('Sort changed to:', this.value);
        // Handle sort logic here
    });
    
    // Load more functionality
    const loadMoreBtn = document.querySelector('.load-more-btn');
    loadMoreBtn.addEventListener('click', function() {
        console.log('Load more products');
        // Handle load more logic here
    });
    
    // Product card click functionality
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.addEventListener('click', function() {
            const productName = this.querySelector('.product-name').textContent;
            console.log('Product clicked:', productName);
            // Handle product click logic here
        });
    });
});
</script>

</main>
<?php get_footer(); ?>
