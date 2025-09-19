// Banner Animation Script
document.addEventListener('DOMContentLoaded', function() {
    // Banner indicators functionality
    const indicators = document.querySelectorAll('.indicator');
    const banners = [
        {
            text: ['Bay tiếp', 'Là cờ', 'Hoà Bình'],
            colors: ['#dc2626', '#2563eb', '#16a34a']
        },
        {
            text: ['Tự hào', 'Việt Nam', 'Thương hiệu'],
            colors: ['#dc2626', '#fbbf24', '#dc2626']
        },
        {
            text: ['Chất lượng', 'Đỉnh cao', 'TORANO'],
            colors: ['#1e40af', '#dc2626', '#059669']
        },
        {
            text: ['Phong cách', 'Hiện đại', 'Sang trọng'],
            colors: ['#7c3aed', '#dc2626', '#0891b2']
        }
    ];
    
    let currentBanner = 0;
    
    function updateBanner(index) {
        const mainBanner = document.querySelector('.main-banner');
        const textLines = document.querySelectorAll('.text-line');
        
        // Update text
        if (textLines.length >= 3) {
            textLines[0].textContent = banners[index].text[0];
            textLines[1].textContent = banners[index].text[1];
            textLines[2].textContent = banners[index].text[2];
        }
        
        // Update background colors
        const colors = banners[index].colors;
        mainBanner.style.background = linear-gradient(135deg, 
             0%, 
             30%, 
             30%, 
             70%, 
             70%);
        
        // Update active indicator
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    }
    
    // Add click events to indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentBanner = index;
            updateBanner(currentBanner);
        });
    });
    
    // Auto-rotate banners every 5 seconds
    setInterval(() => {
        currentBanner = (currentBanner + 1) % banners.length;
        updateBanner(currentBanner);
    }, 5000);
    
    // Product hover effects
    const productItems = document.querySelectorAll('.product-item');
    productItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Remove active class from all links
            navLinks.forEach(l => l.classList.remove('active'));
            // Add active class to clicked link
            this.classList.add('active');
        });
    });
    
    // Search functionality placeholder
    const searchIcon = document.querySelector('.icon.search');
    if (searchIcon) {
        searchIcon.addEventListener('click', function() {
            const searchTerm = prompt('Nhập từ khóa tìm kiếm:');
            if (searchTerm) {
                alert(Đang tìm kiếm: );
                // Here you would implement actual search functionality
            }
        });
    }
    
    // Cart functionality placeholder
    const cartIcon = document.querySelector('.icon.cart');
    if (cartIcon) {
        cartIcon.addEventListener('click', function() {
            alert('Giỏ hàng của bạn đang trống');
            // Here you would implement cart functionality
        });
    }
    
    // Add some floating animation to text
    const textLines = document.querySelectorAll('.text-line');
    textLines.forEach((line, index) => {
        line.style.animationDelay = ${index * 0.2}s;
        line.classList.add('float-animation');
    });
    
    // Add floating animation CSS
    const style = document.createElement('style');
    style.textContent = 
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(var(--rotation, 0deg)); }
            50% { transform: translateY(-10px) rotate(var(--rotation, 0deg)); }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        .fly-text { --rotation: -2deg; }
        .flag-text { --rotation: 1deg; }
        .peace-text { --rotation: -1deg; }
        
        .brand-logo {
            transition: all 0.3s ease;
        }
        
        .brand-logo:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(220, 38, 38, 0.3);
        }
        
        .indicator {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .indicator:hover {
            transform: scale(1.2);
            background: rgba(220, 38, 38, 0.8);
        }
        
        .product-item {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .nav-link {
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .nav-link:hover::before {
            left: 100%;
        }
    ;
    document.head.appendChild(style);
});
