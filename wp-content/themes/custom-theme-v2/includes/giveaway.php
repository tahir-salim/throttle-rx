<?php $second_section = get_field('second_section',67);?>
<section class="sec" style="background-image: url('<?php echo $second_section['image'];?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInUp">
                <div class="giveAway">
                    <span class="sub-heading"><?php echo $second_section['heading'];?></span>
                    <h2 class="web-Heading"><?php echo $second_section['sub_heading'];?></h2>
                    <p class="web-para"><?php echo $second_section['content'];?></p>
                    <a href="<?php echo $second_section['button_link'];?>"
                        class="theme-btn"><?php echo $second_section['button_text'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>