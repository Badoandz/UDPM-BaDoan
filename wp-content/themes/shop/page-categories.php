<?php
/*
Template Name: Danh Mục Sản Phẩm
*/

get_header(); ?>

<div class="category-page">
    <div class="tn-container">
        <!-- Category Header -->
        <div class="category-page-header">
            <h1 class="category-page-title">DANH MỤC SẢN PHẨM</h1>
            <div class="category-nav-arrows">
                <button class="category-nav-btn prev-btn" id="categoryPrevBtn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="15,18 9,12 15,6"></polyline>
                    </svg>
                </button>
                <button class="category-nav-btn next-btn" id="categoryNextBtn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="9,18 15,12 9,6"></polyline>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Category Cards -->
        <div class="category-cards-grid">
            <!-- Polo Card -->
            <div class="category-card">
                <div class="category-image">
                    <img src="https://bulbal.vn/wp-content/uploads/2022/02/AO-POLO-THE-THAO-NAM-BULBAL-MODERN-II-TRANG-1-scaled.jpg" alt="Áo Polo">
                    <div class="category-overlay">
                        <h3 class="category-name">Áo Polo</h3>
                        <button class="category-arrow-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- T-shirt Card -->
            <div class="category-card">
                <div class="category-image">
                    <img src="https://cf.shopee.vn/file/7e767303ceaa695d06e6038c5ff58499" alt="Áo Thun">
                    <div class="category-overlay">
                        <h3 class="category-name">Áo Thun</h3>
                        <button class="category-arrow-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Jeans Card -->
            <div class="category-card">
                <div class="category-image">
                    <img src="https://vulcano.sgp1.digitaloceanspaces.com/media/18550/quan-jean-3008a-vulcano01.webp" alt="Quần Jeans">
                    <div class="category-overlay">
                        <h3 class="category-name">Quần Jeans</h3>
                        <button class="category-arrow-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Dress Pants Card -->
            <div class="category-card">
                <div class="category-image">
                    <img src="https://salt.tikicdn.com/cache/w1200/ts/product/5c/77/9c/e864ba1172323c430a7610ede3e192bf.jpg" alt="Quần Âu">
                    <div class="category-overlay">
                        <h3 class="category-name">Quần Âu</h3>
                        <button class="category-arrow-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Áo Sơ Mi Card -->
            <div class="category-card">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?q=80&w=400&auto=format&fit=crop" alt="Áo Sơ Mi">
                    <div class="category-overlay">
                        <h3 class="category-name">Áo Sơ Mi</h3>
                        <button class="category-arrow-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Áo Khoác Card -->
            <div class="category-card">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?q=80&w=400&auto=format&fit=crop" alt="Áo Khoác">
                    <div class="category-overlay">
                        <h3 class="category-name">Áo Khoác</h3>
                        <button class="category-arrow-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Phụ Kiện Card -->
            <div class="category-card">
                <div class="category-image">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=400&auto=format&fit=crop" alt="Phụ Kiện">
                    <div class="category-overlay">
                        <h3 class="category-name">Phụ Kiện</h3>
                        <button class="category-arrow-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top Button -->
<div class="back-to-top" id="backToTop">
    <span class="back-to-top-text">Về đầu trang |→</span>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category card click functionality
    const categoryCards = document.querySelectorAll('.category-card');
    categoryCards.forEach(card => {
        card.addEventListener('click', function() {
            const categoryName = this.querySelector('.category-name').textContent;
            alert('Chuyển đến trang: ' + categoryName);
        });
    });

    // Back to top functionality
    const backToTop = document.getElementById('backToTop');
    
    backToTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Show/hide back to top button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.style.opacity = '1';
            backToTop.style.visibility = 'visible';
        } else {
            backToTop.style.opacity = '0';
            backToTop.style.visibility = 'hidden';
        }
    });
});
</script>

<?php get_footer(); ?>
