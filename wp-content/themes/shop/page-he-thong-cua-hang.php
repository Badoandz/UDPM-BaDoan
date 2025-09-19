<?php
/*
Template Name: Hệ Thống Cửa Hàng
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
			<a href="<?php echo esc_url(get_permalink(get_page_by_path('he-thong-cua-hang')->ID)); ?>" class="active">Hệ thống cửa hàng</a>
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
			<span class="breadcrumb-current">Hệ thống cửa hàng</span>
		</nav>
	</div>
</div>

<div class="store-system-page">
    <div class="tn-container">
        <div class="store-layout">
            <!-- Left Column - Store Finder -->
            <div class="store-finder">
                <h1 class="store-finder-title">Tìm cửa hàng</h1>
                
                <!-- City Selection -->
                <div class="form-group">
                    <label for="citySelect" class="form-label">Chọn tỉnh thành</label>
                    <div class="select-wrapper">
                        <select id="citySelect" class="form-select">
                            <option value="hanoi" selected>Hà Nội</option>
                            <option value="hcm">TP. Hồ Chí Minh</option>
                            <option value="danang">Đà Nẵng</option>
                            <option value="haiphong">Hải Phòng</option>
                        </select>
                        <span class="select-arrow">▼</span>
                    </div>
                </div>
                
                <!-- Store Selection -->
                <div class="form-group">
                    <label for="storeSelect" class="form-label">Chọn cửa hàng</label>
                    <div class="select-wrapper">
                        <select id="storeSelect" class="form-select">
                            <option value="dong-da" selected>Đống Đa</option>
                            <option value="cau-giay">Cầu Giấy</option>
                            <option value="ba-dinh">Ba Đình</option>
                            <option value="hoan-kiem">Hoàn Kiếm</option>
                        </select>
                        <span class="select-arrow">▼</span>
                    </div>
                </div>
                
                <!-- Store List -->
                <div class="store-list">
                    <!-- Store 1 -->
                    <div class="store-item" data-store="chua-boc">
                        <div class="store-header">
                            <div class="store-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <h3 class="store-name">TORANO 02 CHÙA BỘC</h3>
                        </div>
                        <div class="store-details">
                            <p class="store-address">Số 02, Chùa Bộc, Q.Đống Đa, Hà Nội</p>
                            <p class="store-hours">Thời gian hoạt động: 8:30 - 22:00</p>
                            <p class="store-phone">Số điện thoại: 0976 408 388</p>
                            <a href="#" class="store-map-link">Xem bản đồ</a>
                        </div>
                    </div>
                    
                    <!-- Store 2 -->
                    <div class="store-item" data-store="yen-lang">
                        <div class="store-header">
                            <div class="store-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <h3 class="store-name">TORANO 31 YÊN LÃNG</h3>
                        </div>
                        <div class="store-details">
                            <p class="store-address">Số 31 Yên Lãng, Quận Đống Đa, TP. Hà Nội</p>
                            <p class="store-hours">Thời gian hoạt động: 8:30 - 22:00</p>
                            <p class="store-phone">Số điện thoại: 0969 963 658</p>
                            <a href="#" class="store-map-link">Xem bản đồ</a>
                        </div>
                    </div>
                    
                    <!-- Store 3 -->
                    <div class="store-item" data-store="cau-giay">
                        <div class="store-header">
                            <div class="store-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <h3 class="store-name">TORANO 15 CẦU GIẤY</h3>
                        </div>
                        <div class="store-details">
                            <p class="store-address">Số 15 Cầu Giấy, Quận Cầu Giấy, TP. Hà Nội</p>
                            <p class="store-hours">Thời gian hoạt động: 8:30 - 22:00</p>
                            <p class="store-phone">Số điện thoại: 0987 654 321</p>
                            <a href="#" class="store-map-link">Xem bản đồ</a>
                        </div>
                    </div>
                    
                    <!-- Store 4 -->
                    <div class="store-item" data-store="ba-dinh">
                        <div class="store-header">
                            <div class="store-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <h3 class="store-name">TORANO 25 BA ĐÌNH</h3>
                        </div>
                        <div class="store-details">
                            <p class="store-address">Số 25 Ba Đình, Quận Ba Đình, TP. Hà Nội</p>
                            <p class="store-hours">Thời gian hoạt động: 8:30 - 22:00</p>
                            <p class="store-phone">Số điện thoại: 0912 345 678</p>
                            <a href="#" class="store-map-link">Xem bản đồ</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Map -->
            <div class="store-map">
                <h1 class="map-title">Hệ thống cửa hàng</h1>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.123456789!2d105.8341598!3d21.028511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b6ca21a!2sCh%C3%B9a%20B%E1%BB%99c%2C%20Quang%20Trung%2C%20%C4%90%E1%BB%91ng%20%C4%90a%2C%20H%C3%A0%20N%E1%BB%99i!5e0!3m2!1svi!2s!4v1234567890123!5m2!1svi!2s"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // City selection functionality
    const citySelect = document.getElementById('citySelect');
    const storeSelect = document.getElementById('storeSelect');
    const storeItems = document.querySelectorAll('.store-item');
    
    // Store data
    const storeData = {
        'hanoi': {
            'dong-da': ['chua-boc', 'yen-lang'],
            'cau-giay': ['cau-giay'],
            'ba-dinh': ['ba-dinh'],
            'hoan-kiem': []
        },
        'hcm': {
            'quan-1': [],
            'quan-3': [],
            'quan-7': []
        },
        'danang': {
            'hai-chau': [],
            'thanh-khe': []
        },
        'haiphong': {
            'ngo-quyen': [],
            'le-chan': []
        }
    };
    
    // Update store options based on city
    function updateStoreOptions(city) {
        storeSelect.innerHTML = '';
        const districts = storeData[city] || {};
        
        Object.keys(districts).forEach(district => {
            const option = document.createElement('option');
            option.value = district;
            option.textContent = district.charAt(0).toUpperCase() + district.slice(1).replace('-', ' ');
            storeSelect.appendChild(option);
        });
        
        // Select first district
        if (Object.keys(districts).length > 0) {
            storeSelect.value = Object.keys(districts)[0];
            updateStoreList(city, storeSelect.value);
        }
    }
    
    // Update store list based on city and district
    function updateStoreList(city, district) {
        const stores = storeData[city]?.[district] || [];
        
        storeItems.forEach(item => {
            const storeId = item.getAttribute('data-store');
            if (stores.includes(storeId)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
    
    // Event listeners
    citySelect.addEventListener('change', function() {
        updateStoreOptions(this.value);
    });
    
    storeSelect.addEventListener('change', function() {
        updateStoreList(citySelect.value, this.value);
    });
    
    // Store item click functionality
    storeItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove active class from all items
            storeItems.forEach(i => i.classList.remove('active'));
            // Add active class to clicked item
            this.classList.add('active');
            
            // Update map (in real implementation, you would update the map marker)
            console.log('Store selected:', this.getAttribute('data-store'));
        });
    });
    
    // Initialize
    updateStoreOptions('hanoi');
});
</script>

</main>
<?php get_footer(); ?>
