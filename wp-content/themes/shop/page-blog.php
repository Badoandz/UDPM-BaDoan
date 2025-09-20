<?php
/*
Template Name: Blog
*/

get_header(); ?>

<div class="blog-page">
    <div class="tn-container">
        <!-- Blog Header -->
        <div class="blog-header">
            <h1 class="blog-title">BLOG TORANO</h1>
            <p class="blog-subtitle">Cập nhật xu hướng thời trang nam mới nhất</p>
        </div>

        <!-- Blog Content -->
        <div class="blog-content">
            <div class="blog-grid">
                <?php
                // Query blog posts
                $blog_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'post_status' => 'publish'
                ));

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                ?>
                    <article class="blog-card">
                        <div class="blog-card-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="blog-card-date">
                                <span class="day"><?php echo get_the_date('d'); ?></span>
                                <span class="month"><?php echo get_the_date('M'); ?></span>
                            </div>
                        </div>
                        <div class="blog-card-content">
                            <h3 class="blog-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="blog-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <div class="blog-card-meta">
                                <span class="author">By <?php the_author(); ?></span>
                                <span class="comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></span>
                            </div>
                        </div>
                    </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="no-posts">
                        <h3>Chưa có bài viết nào</h3>
                        <p>Hãy quay lại sau để xem những bài viết mới nhất!</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<style>
.blog-page {
    padding: 60px 0;
    background: #f8f9fa;
}

.blog-header {
    text-align: center;
    margin-bottom: 50px;
}

.blog-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--tn-black);
    margin-bottom: 10px;
}

.blog-subtitle {
    font-size: 1.1rem;
    color: var(--tn-gray);
}

.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
}

.blog-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.blog-card:hover {
    transform: translateY(-5px);
}

.blog-card-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.blog-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.blog-card-date {
    position: absolute;
    top: 15px;
    left: 15px;
    background: var(--tn-red);
    color: white;
    padding: 8px 12px;
    border-radius: 6px;
    text-align: center;
    font-weight: 600;
}

.blog-card-date .day {
    display: block;
    font-size: 1.2rem;
    line-height: 1;
}

.blog-card-date .month {
    display: block;
    font-size: 0.8rem;
    text-transform: uppercase;
}

.blog-card-content {
    padding: 25px;
}

.blog-card-title {
    margin-bottom: 15px;
}

.blog-card-title a {
    color: var(--tn-black);
    text-decoration: none;
    font-size: 1.3rem;
    font-weight: 600;
    line-height: 1.4;
}

.blog-card-title a:hover {
    color: var(--tn-red);
}

.blog-card-excerpt {
    color: var(--tn-gray);
    line-height: 1.6;
    margin-bottom: 20px;
}

.blog-card-meta {
    display: flex;
    justify-content: space-between;
    font-size: 0.9rem;
    color: var(--tn-gray);
}

.no-posts {
    text-align: center;
    padding: 60px 20px;
    grid-column: 1 / -1;
}

@media (max-width: 768px) {
    .blog-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .blog-title {
        font-size: 2rem;
    }
}
</style>

<?php get_footer(); ?>
