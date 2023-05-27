<?php /* Template Name: Stories */ ?>
<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<?php get_header(); ?>

<?php


$featured_post_id = [];

$posts = get_posts(array(
    'posts_per_page' => 1,
    'meta_query' => array(
        array(
            'key' => 'featured',
            'value' => '1',
        )
    )
));

if ($posts) {
    foreach ($posts as $post): ?>
    <?php
        $featured_post_id[] = $post->ID; ?>
    <div class="text-white font-dm bg-center" style="background-image: url('<?php echo get_the_post_thumbnail_url($post);?>')">
        <div class="border-b border-light-gray w-full mx-auto lg:pl-28 py-12">
            <div class=" max-w-[387px] mx-auto md:mx-0 px-[29px] md:px-12 lg:px-0">
                <h2 class="uppercase text-xs py-6 tracking-[2px]"> Last Month's Featured Story</h2>
                <h1 class="text-[40px] uppercase font-bold tracking-[4.16667px] pb-4"><?php echo $post->post_title ?></h1>
                <div class="pb-6 leading-6 flex">
                    <span class="pr-3 opacity-60"><?php echo get_the_date('', $post)?></span>
                    <span class="pr-3">by</span>
                    <h3 class="pl-1.5"><?php echo $post->post_author ?></h3>
                </div>
                <p class="opacity-60 pb-6"><?php echo get_the_excerpt($post) ?></p>
                <div class="mt-5 tracking-[2px]">
                    <a href="<?php echo get_permalink(); ?>" class="uppercase hover:underline flex">Read the Story
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach;
}

?>

<div class="grid mt-1.5 lg:mt-0 md:grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-0 place-content-center">
    <?php
    $others = array(
        'offset' => 3,
        'order' => 'ASC',
        'posts_per_page' => -1,
        'post__not_in' => $featured_post_id,
    );
    $other_posts = new WP_Query($others);
    if ($other_posts->have_posts()) :
        while ($other_posts->have_posts()) :
            $other_posts->the_post();
            ?>
            <div class="post-image w-full">
                <div class="relative text-white move">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="mx-auto">
                    <div class="absolute bottom-[80px] max-w-full px-0 md:px-12 lg:px-0">
                        <div class="mx-10 border-b border-light-gray w-full">
                            <h1 class="text-lg font-bold"><?php the_title() ?></h1>
                            <div class="py-1 leading-6 flex">
                                <span>by</span>
                                <h3 class="pl-1.5"><?php echo get_the_author(); ?></h3>
                            </div>
                        </div>
                        <div class="ml-10 my-5">
                            <a href="<?php echo get_permalink(); ?>" class="uppercase hover:underline flex justify-between">Read Story
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/>
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


<?php get_footer(); ?>
