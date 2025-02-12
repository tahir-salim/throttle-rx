<?php /** * Template Name: Contact Template */ ?>
<?php global $options; ?>
<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.4s">
                <h2 class="web-Heading">Send Us A Message</h2>
                <?php echo do_shortcode('[contact-form-7 id="86e1144" title="Contact form 1"]');?>

            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="contactMe">
                    <div class="contactUs">
                        <h5>Email</h5>
                        <a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                        <h5>Contact</h5>
                        <a href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                        <h5>Address</h5>
                        <p><?php echo $options['address'];?></p>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php get_footer(); ?>