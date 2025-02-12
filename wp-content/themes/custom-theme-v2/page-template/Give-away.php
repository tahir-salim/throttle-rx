<?php /** * Template Name: Give Away Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="innerPage">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="giveAway wow fadeInLeft">
                    <figure>
                        <img src="<?php echo $first_section['image'];?>" alt="">
                    </figure>
                    <div class="giveAway-content wow zoomIn" data-wow-delay="0.6s">
                        <h3><?php echo $first_section['heading'];?></h3>
                        <h2><?php echo $first_section['sub_heading'];?></h2>
                        <a href="<?php echo $first_section['button_link'];?>"
                            class="theme-btn"><?php echo $first_section['button_text'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>