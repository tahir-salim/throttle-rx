<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="about-div">
                    <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                    <h2 class="web-Heading"><?php echo $first_section['sub_heading'];?></h2>
                    <p class="web-para"><?php echo $first_section['content'];?></p>
                    <p class="web-para"><?php echo $first_section['content_2'];?></p>

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

<section class="abt-sec p-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="abt-img wow zoomIn">
                    <img src="<?php echo $first_section['image_2'];?>" alt="">
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="abt-content">
                    <h2 class="web-Heading"><?php echo $first_section['heading_2'];?></h2>
                    <p><?php echo $first_section['content_3'];?></p>
                    <div class="row">

                        <?php $box_list = $first_section['box_list'];?>
                        <?php foreach ($box_list as $boxlist) {?>

                        <div class="col-md-4">
                            <div class="best">
                                <h3><?php echo $boxlist['heading']; ?></h3>
                                <p><?php echo $boxlist['para']; ?></p>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("includes/giveaway"); ?>
<?php get_footer(); ?>