<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>

<body <?php body_class(); ?>>

    <header>
        <section class="topSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="topNav">
                            <ul>
                                <li>
                                    <i class="fas fa-phone"></i> <a
                                        href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                                </li>
                                <li>
                                    <i class="fal fa-envelope"></i> <a
                                        href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="socialLinks">
                            <ul>
                                <li>
                                    <a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo $options['twitter'];?>"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="main-header">
            <div class="container">
                <div class="menu-Bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4 text-left">
                        <a href="<?php echo site_url();?>" class="logo">
                            <img src="<?php echo $options['logo'];?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 text-end">
                        <div class="menuWrap">
                            <!-- <ul class="menu">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="about.php">About</a>
                                </li>
                                <li>
                                    <a href="shop.php">Shop</a>
                                </li>
                                <li>
                                    <a href="give-away.php">Giveaway</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>
                                <li>
                                    <a href="#" class="theme-btn">Donate</a>
                                </li>

                            </ul> -->
                            <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu' ) ); ?>


                            <ul class="menu">
                                <li>
                                    <a href="#" class="icon"><i class="far fa-search"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="icon"><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <span class="count">
                                        <strong>
                                        <?php echo $woocommerce->cart->cart_contents_count; ?>
                                        </strong>
                                    </span>
                                    <a href="#" class="icon"><i class="far fa-shopping-bag"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>

        <?php if(is_home() || is_front_page() ){?>

        <?php } elseif (is_shop()) {
          $shop = get_option( 'woocommerce_shop_page_id' );?>

        <?php $banner_section = get_field('banner_section',$shop);?>
        <section class="mainBanner">
            <div class="container">
                <div class="aboutBanner wow fadeInUp"
                    style="background-image: url('<?php echo $banner_section['image'];?>');">
                    <h1 class="web-Heading wow zoomIn" data-wow-delay="0.6s"><?php echo $banner_section['heading'];?>
                    </h1>
                </div>
            </div>
        </section>
        <?php } else{?>
        <?php $banner_section = get_field('banner_section');?>
        <section class="mainBanner">
            <div class="container">
                <div class="aboutBanner wow fadeInUp"
                    style="background-image: url('<?php echo $banner_section['image'];?>');">
                    <h1 class="web-Heading wow zoomIn" data-wow-delay="0.6s"><?php echo $banner_section['heading'];?>
                    </h1>
                </div>
            </div>
        </section>
        <?php } ?>

        <?php if(is_shop()){?>



        <section class="sec-1 pt-0 bg-white">
            <div class="container">
                <span class="sub-heading wow fadeInDown">Giveaway</span>
                <h2 class="web-Heading wow fadeInUp">Throttle RX giveaway</h2>
                <div class="row wow zoomIn">
                    <?php } ?>

<?php if(is_product() || is_cart() || is_checkout()) { ?>
      <section class="wooo">
        <div class="container">
  <?php } ?>