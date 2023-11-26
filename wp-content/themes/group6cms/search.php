<?php get_header(); ?>
<div id="content">
    <div class="product-box page-category">
        <div class="container">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'product',
                    's' => $_GET['s'], // Thay 'từ_khóa' bằng từ khóa bạn muốn tìm kiếm
                    'posts_per_page' => 12,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        // Xử lý thông tin sản phẩm ở đây
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="item-product">
                                <div class="thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'thumnail')); ?>
                                    </a>
                                    <?php if ($product->is_on_sale()) { ?>
                                        <span class="sale">Giảm <br>
                                            <?php echo percentSale($product->get_regular_price(), $product->get_sale_price()); ?>%
                                        </span>
                                    <?php } ?>
                                    <div class="action">
                                        <a href="?add_to_cart=<?php the_ID(); ?>" class="buy"><i class="fa fa-cart-plus"></i>
                                            Mua ngay</a>
                                        <a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="info-product">
                                    <h4><a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a></h4>
                                    <div class="price">
                                        <?php echo $product->get_price_html(); ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="view-more">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo 'Không tìm thấy sản phẩm.';
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

<?php


?>