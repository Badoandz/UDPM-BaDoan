# TORANO - WordPress E-commerce Website

## 📋 Mô tả dự án

TORANO là website thương mại điện tử chuyên về thời trang nam, được phát triển bằng WordPress với theme tự thiết kế. Website mang phong cách yêu nước với banner đặc trưng "Bay tiếp Là cờ Hoà Bình".

## 🚀 Tính năng chính

### Theme Custom
- **Theme tự phát triển**: "shop" theme với thiết kế responsive
- **Banner yêu nước**: Thiết kế đặc trưng với màu sắc cờ Việt Nam
- **8 Page Templates**: Home, Sản phẩm mới, Danh mục sale, Áo nam, Giỏ hàng, Hệ thống cửa hàng, Danh mục sản phẩm
- **Custom Shortcode**: `[new_products]` để hiển thị sản phẩm mới

### Plugins sử dụng
- **Advanced Custom Fields (ACF)**: Quản lý custom fields cho sản phẩm
- **WooCommerce**: Hệ thống e-commerce hoàn chỉnh
- **Akismet**: Bảo mật chống spam

### Tính năng nâng cao
- **Slider sản phẩm**: Sử dụng Swiper.js
- **Newsletter**: Form đăng ký nhận tin
- **Social Media Integration**: Facebook, Twitter, Instagram, YouTube
- **Payment Methods**: VNPAY, ZaloPay, Moca, Kredivo, Napas, Visa
- **Shipping Partners**: GHN, Ninja Van, Ahamove, J&T

## 🛠️ Công nghệ sử dụng

- **WordPress**: 6.4+
- **PHP**: 7.4+
- **Bootstrap**: 5.3.3
- **JavaScript**: Vanilla JS + jQuery
- **CSS**: Custom CSS với responsive design
- **Database**: MySQL

## 📁 Cấu trúc dự án

```
project_wp/
├── wp-content/
│   ├── themes/
│   │   └── shop/                 # Custom theme
│   │       ├── assets/           # CSS, JS, images
│   │       ├── templates/        # Page templates
│   │       ├── functions.php     # Theme functions
│   │       ├── style.css         # Main stylesheet
│   │       ├── header.php        # Header template
│   │       ├── footer.php        # Footer template
│   │       └── *.php             # Page templates
│   └── plugins/
│       ├── advanced-custom-fields/
│       ├── woocommerce/
│       └── akismet/
├── wp-config.php                 # WordPress configuration
└── README.md                     # Project documentation
```

## 🎨 Thiết kế

### Màu sắc chủ đạo
- **Đỏ**: #dc2626 (Màu cờ Việt Nam)
- **Xanh dương**: #2563eb
- **Xanh lá**: #16a34a
- **Xám đậm**: #2d3748

### Typography
- **Font chính**: Inter (Google Fonts)
- **Font size**: Responsive từ 13px đến 48px

## 🚀 Cài đặt

### Yêu cầu hệ thống
- PHP 7.4 hoặc cao hơn
- MySQL 5.5.5 hoặc cao hơn
- Apache/Nginx web server
- WordPress 6.4+

### Hướng dẫn cài đặt

1. **Clone repository**
```bash
git clone https://github.com/Badoandz/UDPM-BaDoan.git
cd UDPM-BaDoan
```

2. **Cấu hình database**
- Tạo database MySQL
- Import file SQL (nếu có)
- Cập nhật thông tin database trong `wp-config.php`

3. **Cài đặt WordPress**
- Upload files lên web server
- Truy cập website và làm theo hướng dẫn cài đặt WordPress

4. **Kích hoạt theme và plugins**
- Vào Admin Dashboard → Appearance → Themes
- Kích hoạt theme "shop"
- Vào Plugins và kích hoạt các plugin cần thiết

## 📱 Responsive Design

Website được thiết kế responsive hoàn toàn, tương thích với:
- **Desktop**: 1200px+
- **Tablet**: 768px - 1199px
- **Mobile**: 320px - 767px

## 🔧 Customization

### Thêm sản phẩm mới
1. Vào Admin Dashboard → Custom Fields → Field Groups
2. Chỉnh sửa group "new-product"
3. Thêm sản phẩm mới với các field: image, name, price

### Tùy chỉnh banner
- Chỉnh sửa file `front-page.php`
- Cập nhật CSS trong `assets/torano.css`

## 📞 Thông tin liên hệ

- **Địa chỉ**: Tầng 8, tòa nhà Ford, số 313 Trường Chinh, quận Thanh Xuân, Hà Nội
- **Điện thoại**: 0964942121
- **Email**: cskh@torano.vn

## 📄 License

Dự án này được phát triển cho mục đích học tập và nghiên cứu.

## 👨‍💻 Tác giả

**Badoandz** - Sinh viên UDPM

---

*Website được phát triển với tinh thần yêu nước và hướng tới phong cách nam tính, lịch lãm và trẻ trung.*
