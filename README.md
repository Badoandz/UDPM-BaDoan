# TORANO - WordPress Theme

## 📋 Mô tả dự án
Theme WordPress tự phát triển cho thương hiệu thời trang nam TORANO với giao diện hiện đại và tính năng đầy đủ.

## 🚀 Tính năng chính

### 🎨 Giao diện
- **Responsive Design** - Tương thích mọi thiết bị
- **Modern UI/UX** - Giao diện hiện đại, dễ sử dụng
- **Bootstrap 5** - Framework CSS mạnh mẽ
- **Custom CSS** - Thiết kế riêng biệt cho thương hiệu

### 📄 Page Templates
- **Home Page** - Trang chủ với slider và sản phẩm nổi bật
- **Danh Mục Sản Phẩm** - Hiển thị các danh mục sản phẩm
- **Sản Phẩm Mới** - Trang sản phẩm mới với ACF
- **Áo Nam** - Trang chuyên về áo nam
- **Danh Mục Sale** - Trang sản phẩm khuyến mãi
- **Hệ Thống Cửa Hàng** - Thông tin cửa hàng
- **Giỏ Hàng** - Trang giỏ hàng

### ⚙️ Tính năng kỹ thuật
- **ACF Integration** - Custom fields cho sản phẩm
- **Shortcode Support** - `[new_products]` shortcode
- **Swiper.js** - Slider/carousel hiện đại
- **Newsletter Form** - Form đăng ký nhận tin
- **SEO Optimized** - Tối ưu SEO

## 🛠️ Cài đặt

### Yêu cầu hệ thống
- WordPress 5.0+
- PHP 7.4+
- MySQL 5.6+

### Cài đặt theme
1. Upload thư mục `shop` vào `/wp-content/themes/`
2. Kích hoạt theme trong WordPress Admin
3. Cài đặt plugin ACF (Advanced Custom Fields)
4. Import dữ liệu mẫu (nếu có)

### Cấu hình
1. **Menu**: Vào Appearance > Menus để cấu hình menu
2. **ACF**: Tạo field group "new-product" cho sản phẩm mới
3. **Pages**: Tạo các trang và chọn template tương ứng

## 📁 Cấu trúc thư mục

```
wp-content/themes/shop/
├── assets/
│   ├── images/          # Hình ảnh
│   ├── torano.css       # CSS chính
│   └── torano.js        # JavaScript
├── templates/           # Template parts
├── *.php               # Page templates
├── functions.php       # Functions chính
├── style.css          # Style chính
└── README.md          # Tài liệu
```

## 🎯 Sử dụng

### Shortcode
```php
[new_products] // Hiển thị sản phẩm mới từ ACF
```

### Custom Fields
- **new-product**: Field group cho sản phẩm mới
  - `image-new-product`: Hình ảnh sản phẩm
  - `name-new-product`: Tên sản phẩm
  - `price-new-product`: Giá sản phẩm

## 🔧 Tùy chỉnh

### CSS Variables
```css
:root {
    --tn-black: #111;
    --tn-white: #fff;
    --tn-gray: #666;
    --tn-border: #eee;
    --tn-red: #e11d48;
}
```

### JavaScript
- Swiper.js cho slider
- Custom scripts trong `torano.js`
- Banner script trong `banner-script.js`

## 📱 Responsive Breakpoints
- Mobile: < 576px
- Tablet: 576px - 768px
- Desktop: 768px - 1200px
- Large: > 1200px

## 🚀 Deployment

### GitHub
- Repository: [GitHub Link]
- Branch: main
- Auto-deploy: Có thể setup với GitHub Actions

### Server Requirements
- PHP 7.4+
- MySQL 5.6+
- Apache/Nginx
- SSL Certificate (khuyến nghị)

## 📄 License
MIT License - Sử dụng tự do cho mục đích học tập và thương mại.

## 👨‍💻 Tác giả
**Badoan** - Sinh viên UDPM

## 📞 Liên hệ
- Email: [your-email]
- GitHub: [your-github]

---
*Được phát triển với ❤️ cho dự án UDPM*