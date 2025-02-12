<?php global $options; ?>
<?php if(is_shop()){?>
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

<?php get_template_part("includes/giveaway"); ?>
<?php } ?>


<?php if(is_product() || is_cart() || is_checkout()) { ?>
</div>
</section>
  <?php } ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo site_url();?>" class="logo">
                    <img src="<?php echo $options['footer-logo'];?>" alt="">
                </a>
                <p><?php echo $options['footer_about'];?></p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Quick Links</h4>
                        <!-- <ul>
                            <li><a href="./">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="">Giveaway</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul> -->
                        <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> '' ) ); ?>

                    </div>
                    <div class="col-md-5">
                        <h4>Contact</h4>
                        <ul>
                            <li>
                                <div class="flex">
                                    <div>
                                        <i class="fal fa-home"></i>
                                    </div>
                                    <div>
                                        <a href=""><?php echo $options['address'];?></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    <div>
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div>
                                        <a
                                            href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex">
                                    <div>
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div>
                                        <a
                                            href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Follow Us</h4>
                        <div class="socialLinks1">
                            <ul>
                                <li><a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li><a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="<?php echo $options['twitter'];?>"><i class="fa-solid fa-x"></i></a></li>
                            </ul>
                            <h4>Sign Up For Giveaways</h4>
                            <?php echo do_shortcode('[email-subscribers-form id="1"]');?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="copyright">
        <p><?php echo $options['copyright'];?></p>
    </div>

</footer>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>

</main>
</body>

</html>