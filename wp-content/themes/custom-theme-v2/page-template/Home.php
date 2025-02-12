<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $third_section = get_field('third_section');?>


<?php get_header(); ?>
<div class="mainBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-7 wow fadeInLeft">
                <div class="banner-content">
                    <h1 class="web-Heading"><?php echo $banner_section['heading'];?></h1>
                </div>
            </div>
            <div class="col-md-5 wow fadeInRight">
                <div class="banner-content">
                    <p><?php echo $banner_section['content'];?></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="slider-main wow fadeInUp">
                    <div class="index-slider">
                        <?php $box_list = $banner_section['box_list'];?>
                        <?php foreach ($box_list as $boxlist) {?>
                        <div>
                            <div class="sliderDiv" style="background-image: url('<?php echo $boxlist['image']; ?>');">
                                <div class="row">

                                    <?php $box_list_2 = $boxlist['box_list'];?>
                                    <?php foreach ($box_list_2 as $boxlist) {?>

                                    <div class="col-md-4">
                                        <div class="sliderData">
                                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                                            <h2><?php echo $boxlist['heading']; ?></h2>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="about-div">
                    <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                    <h2 class="web-Heading"><?php echo $first_section['sub_heading'];?></h2>
                    <p class="web-para"><?php echo $first_section['content'];?></p>
                    <a href="<?php echo $first_section['button_link'];?>"
                        class="theme-btn"><?php echo $first_section['button_text'];?></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <img src="<?php echo $first_section['image'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/giveaway"); ?>


<section class="sec-1">
    <div class="container">
        <span class="sub-heading wow fadeInDown">Giveaway</span>
        <h2 class="web-Heading wow fadeInUp">Throttle RX giveaway</h2>
        <div class="row wow zoomIn">

            <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 8 , 'post_status' => 'publish','orderby' => 'title', 'order'=>'ASC', );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            <div class="col-md-3">
                <div class="product-div">
                    <div class="div-product">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="image">
                    </div>
                    <h3><?php echo the_title();?></h3>
                    <div class="shop_price">
                        <?php echo $product->get_price_html();?>
                    </div>
                    <a href="<?php the_permalink()?>" class="add">Add to cart</a>
                </div>
            </div>
            <?php endwhile;  wp_reset_query(); ?>
        </div>
        <div class="pagination-wrap">
            <ul>
                <li class="active">1</li>
                <li>2</li>
                <li><i class="fal fa-long-arrow-right"></i></li>
            </ul>
        </div>
    </div>
</section>

<section class="sec-2" style="background-image: url('<?php echo $third_section['image'];?>');">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-7 wow fadeInUp">
                <div class="test-div">
                    <span class="sub-heading"><?php echo $third_section['heading'];?></span>
                    <h2 class="web-Heading"><?php echo $third_section['sub_heading'];?></h2>
                    <p class="web-para"><?php echo $third_section['content'];?>
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="testi-slider">
                    <?php    $x=1;  $args = array( 'post_type' => 'testimonial' , 'posts_per_page' => -1,'post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
                    <?php $testimonials = get_field('testimonials');?>
                    <div>
                        <div class="testimonial-wrap">
                            <?php the_excerpt();?>
                            <div class="flex">
                                <div>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div>
                                    <p><?php the_title(); ?></p>
                                    <p><?php echo $testimonials['heading'];?></p>
                                </div>
                            </div>
                            <img src="<?php echo $testimonials['image'];?>" alt="" class="image">
                        </div>
                    </div>
                    <?php endwhile;  wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>