<div class="my-16 md:my-[106px] text-center">
    <?php
    $i = 1;
    echo '<div class="md:table w-full">';
    if( have_rows('features') ):
        // Loop through rows.
        while( have_rows('features') ) : the_row();

            // Load sub field value.
            $icon = get_sub_field('icon');
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph'); ?>
            <div class="md:table-cell px-8 pb-[104px]">
                <div class="icon pb-[48px]"><?php echo $icon?></div>
                <h2 class="font-bold text-lg pb-4"><?php echo $title?></h2>
                <p><?php echo $paragraph?></p>
            </div>
            <?php
            if($i % 3 == 0) {echo '</div><div class="">';}

            $i++;?>
        <?php endwhile;
    endif;
    echo '</div>';
    ?>

</div>
