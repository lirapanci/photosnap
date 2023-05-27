<?php /* Template Name: Home */ ?>
<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<?php get_header(); ?>

<?php

if( have_rows('homepage_post') ):
    $post_count = 1;

    while( have_rows('homepage_post') ) : the_row();
        if (($post_count % 2) == 0) {
            $post_class = 'right';
        } else {
            $post_class = 'left';
        }

        $title = get_sub_field('title');
        $paragraph = get_sub_field('paragraph');
        $image = get_sub_field('image');
        ?>


        <div class="md:flex post font-dm items-center <?php echo $post_class?>">
            <div class="my-auto md:max-w-[495px] lg:max-w-[610px] md:px-[54px] lg:px-[111px] pr-[33px] pl-[24px] py-[72px]">
                <h1 class="uppercase text-4xl tracking-wide leading-[3rem]"><?php echo $title ?></h1>
                <div class="post-content opacity-60 py-5 leading-6"><?php echo $paragraph ?></div>
                <button class="uppercase flex items-center py-6 arrow">
                    <span class="tracking-wider pr-5 hover:underline"> View the Stories</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </button>
            </div>
            <div class="object-cover lg:flex-1" >
                <img src="<?php echo $image?>" alt="" class="lg:w-full">
            </div>
        </div>

<?php
        $post_count++;

    endwhile;

else :
endif;
?>

<?php
wp_reset_postdata();
?>

<div class="grid mt-1.5 lg:mt-0 md:grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-0 place-content-center">
<?php
    $others = array(
            'offset' => 3,
            'order' => 'ASC',
            'posts_per_page' => 4,
    );
$other_posts = new WP_Query($others);
if($other_posts->have_posts()) :
while($other_posts->have_posts()) :
$other_posts->the_post();
?>
<div class="post-image w-full">
    <div class="relative text-white move">
        <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" class="mx-auto">
        <div class="absolute bottom-[80px] max-w-full px-0 md:px-12 lg:px-0">
            <div class="mx-10 border-b border-light-gray w-full">
                <h1 class="text-lg font-bold"><?php the_title()?></h1>
                <div class="py-1 leading-6 flex">
                    <span>by</span> <h3 class="pl-1.5"><?php echo get_the_author();?></h3>
                </div>
            </div>
            <div class="ml-10 my-5">
                <a href="<?php echo get_permalink();?>" class="uppercase hover:underline flex justify-between">Read Story
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
    endwhile;
    endif;
wp_reset_postdata()
?>
</div>

<?php include('partials/features.php'); ?>

<?php get_footer(); ?>
