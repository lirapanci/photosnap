<?php if (!defined('ABSPATH')) { exit; }?>
</div>

<footer class="text-white">
    <div class="bg-black py-[64px] px-8 md:px-10 lg:px-[165px] text-white md:flex justify-between w-full">
       <div class="lg:flex">
           <div class="flex flex-col justify-between">
               <img src="<?php the_field('footer_logo', 'option'); ?>" alt="" class="max-w-[210px] mx-auto">
               <?php if (have_rows('social_media', 'option')): ?>
                   <ul class="flex md:justify-between mx-auto pt-8 md:16 lg:pt-0">
                       <?php while (have_rows('social_media', 'option')) :
                       the_row(); ?>
                       <li class="p-3">
                           <a href="<?php the_sub_field('link'); ?>"> <?php the_sub_field('icon'); ?></a>
                           <?php endwhile; ?>
                       </li>
                   </ul>

               <?php endif; ?>
           </div>
           <div class="uppercase text-sm tracking-[2px] lg:pl-24 footer-menu text-center pt-12 lg:pt-0">
               <?php wp_nav_menu(array(
                       'theme_location' => 'footer-menu',
                       'containers_class' => 'footer-menu-class')
               ); ?>
           </div>
       </div>

        <div class="flex flex-col justify-between pt-28 md:pt-0">
            <div class="flex footer-button uppercase tracking-[2px] mx-auto md:mx-0 hover:underline pointer">
                <?php
                $button = get_field('footer_button', 'option');
                if ($button):
                    ?>
                    <a href="<?php echo esc_url( $button['link'] ); ?>"><?php echo esc_html( $button['name']); echo($button['icon']);?></a>
                <?php endif; ?>
            </div>
            <span class="opacity-50 text-center">Copyright 2019. All Rights Reserved</span>
        </div>
    </div>






<?php wp_footer(); ?>
</footer>
</body>
</html>