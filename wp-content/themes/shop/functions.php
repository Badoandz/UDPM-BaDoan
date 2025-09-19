    <?php
    // Kích hoạt các tính năng cơ bản của theme
    function mytheme_setup() {
        add_theme_support("title-tag");
        add_theme_support("post-thumbnails");

        register_nav_menus(array(
            "primary" => __("Menu Chính", "mytheme"),
        ));
    }
    add_action("after_setup_theme", "mytheme_setup");


    // Load CSS & JS
    function mytheme_enqueue_assets() {
        $theme_dir  = get_template_directory_uri();
        $theme_path = get_template_directory();

        // Google Fonts
        wp_enqueue_style(
            "google-fonts",
            "https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap",
            [],
            null
        );

        // Bootstrap
        wp_enqueue_style(
            "bootstrap-5",
            "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css",
            [],
            "5.3.3"
        );

        // Main style
        if (file_exists($theme_path . "/style.css")) {
            wp_enqueue_style(
                "style",
                get_stylesheet_uri(),
                ["bootstrap-5"],
                filemtime($theme_path . "/style.css")
            );
        }

        // Custom CSS
        if (file_exists($theme_path . "/assets/torano.css")) {
            wp_enqueue_style(
                "torano",
                $theme_dir . "/assets/torano.css",
                ["style"],
                filemtime($theme_path . "/assets/torano.css")
            );
        }

        if (file_exists($theme_path . "/assets/lv.css")) {
            wp_enqueue_style(
                "lv",
                $theme_dir . "/assets/lv.css",
                ["style"],
                filemtime($theme_path . "/assets/lv.css")
            );
        }

        if (file_exists($theme_path . "/assets/torano.css")) {
            wp_enqueue_style(
                "torano",
                $theme_dir . "/assets/torano.css",
                ["style"],
                filemtime($theme_path . "/assets/torano.css")
            );
        }

        // Bootstrap JS
        wp_enqueue_script(
            "bootstrap-5",
            "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js",
            [],
            "5.3.3",
            true
        );

        // Custom JS
        if (file_exists($theme_path . "/banner-script.js")) {
            wp_enqueue_script(
                "banner-script",
                $theme_dir . "/banner-script.js",
                ["bootstrap-5"],
                filemtime($theme_path . "/banner-script.js"),
                true
            );
        }

        if (file_exists($theme_path . "/assets/torano.js")) {
            wp_enqueue_script(
                "torano",
                $theme_dir . "/assets/torano.js",
                [],
                filemtime($theme_path . "/assets/torano.js"),
                true
            );
        }
    }
    add_action("wp_enqueue_scripts", "mytheme_enqueue_assets");


    // Tùy chỉnh độ dài excerpt
    function mytheme_excerpt_length() {
        return 20;
    }
    add_filter("excerpt_length", "mytheme_excerpt_length");


    // Thêm class cho body
    function mytheme_body_classes($classes) {
        if (is_page_template("sanphammoi.php")) {
            $classes[] = "torano-products-page";
        }
        return $classes;
    }
    add_filter("body_class", "mytheme_body_classes");


    // Shortcode: [new_products]
    add_shortcode("new_products", "display_new_products_shortcode");

    function display_new_products_shortcode($atts) {
        $new_products = get_field("new-product");

        if (!$new_products) {
            return '<div class="alert alert-info text-center">'
                . '<i class="fas fa-info-circle me-2"></i>'
                . 'Chưa có sản phẩm mới nào được thêm.'
                . '</div>';
        }

        ob_start();
        ?>
        <div class="new-products-container">
            <div class="row">
                <?php foreach ($new_products as $product_group): ?>
                    <?php
                    $product_image = isset($product_group["image-new-product"]) ? $product_group["image-new-product"] : null;
                    $product_name  = isset($product_group["name-new-product"]) ? $product_group["name-new-product"] : '';
                    $product_price = isset($product_group["price-new-product"]) ? $product_group["price-new-product"] : '';
                    ?>

                    <?php if ($product_image || $product_name || $product_price): ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="card h-100 shadow-sm product-card">

                                <?php if ($product_image): ?>
                                    <div class="card-img-top-container">
                                        <img src="<?php echo esc_url($product_image['url']); ?>"
                                             alt="<?php echo esc_attr($product_image['alt']); ?>"
                                             class="card-img-top product-image">
                                    </div>
                                <?php endif; ?>

                                <div class="card-body d-flex flex-column">
                                    <?php if (!empty($product_name)): ?>
                                        <h5 class="card-title product-name"><?php echo esc_html($product_name); ?></h5>
                                    <?php endif; ?>

                                    <?php if (!empty($product_price)): ?>
                                        <div class="mt-auto">
                                            <p class="card-text product-price">
                                                <span class="price-label">Giá:</span>
                                                <span class="price-value"><?php echo esc_html($product_price); ?></span>
                                            </p>
                                        </div>
                                    <?php endif; ?>

                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-sm w-100 add-to-cart-btn">
                                            <i class="fas fa-shopping-cart me-2"></i>Thêm vào giỏ
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }

    // Thêm script xử lý button
    add_action("wp_footer", "add_to_cart_script");

    function add_to_cart_script() {
        $should_output = is_page_template("sanphammoi.php");

        if (!$should_output && function_exists('get_post')) {
            $post_obj = get_post();
            if ($post_obj) {
                $should_output = has_shortcode($post_obj->post_content, 'new_products');
            }
        }

        if (!$should_output) {
            return;
        }
        ?>
        <script>
        jQuery(document).ready(function($){
            $(".add-to-cart-btn").on("click", function(){
                var productName = $(this).closest(".card").find(".product-name").text();
                var productPrice = $(this).closest(".card").find(".price-value").text();

                alert("Đã thêm sản phẩm: " + productName + " (Giá: " + productPrice + ") vào giỏ hàng!");

                $(this).html('<i class="fas fa-check me-2"></i>Đã thêm');
                $(this).removeClass("btn-primary").addClass("btn-success");
                $(this).prop("disabled", true);
            });
        });
        </script>
        <?php
    }
