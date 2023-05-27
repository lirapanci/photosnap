<?php /* Template Name: Features */ ?>
<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<?php get_header(); ?>
<?php
    $header = get_field('header');
?>
<div class="flex bg-black text-white">
    <div class="max-w-[610px] my-44 lg:my-auto px-14 lg:px-28">
        <h1 class="text-[40px] tracking-[4.16667px] uppercase"><?php echo $header['title'];?></h1>
        <p class="opacity-60 py-5 leading-6"><?php echo $header['paragraph'];?></p>
    </div>
    <div class="">
        <img src="<?php echo esc_url( $header['image'] ); ?>" alt="" class="w-auto h-full object-cover">
    </div>
</div>


<div>
    <?php include('partials/features.php'); ?>
    <?php include('partials/footer-banner.php'); ?>
</div>
<?php get_footer(); ?>