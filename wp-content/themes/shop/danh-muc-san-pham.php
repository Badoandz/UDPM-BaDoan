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
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop" alt="Áo Polo">
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
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=400&auto=format&fit=crop" alt="Áo Thun">
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
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=400&auto=format&fit=crop" alt="Quần Jeans">
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
                    <img src="https://images.unsplash.com/photo-1594938298603-c8148c4dae35?q=80&w=400&auto=format&fit=crop" alt="Quần Âu">
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
