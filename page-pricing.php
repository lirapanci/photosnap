<?php /* Template Name: Pricing */ ?>
<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<?php get_header(); ?>

<?php
$header = get_field('header');
?>
    <div class="flex bg-black text-white mb-20">
        <div class="max-w-[610px] my-44 lg:my-auto px-14 lg:px-28">
            <h1 class="text-[40px] tracking-[4.16667px] uppercase"><?php echo $header['title']; ?></h1>
            <p class="opacity-60 py-5 leading-6"><?php echo $header['paragraph']; ?></p>
        </div>
        <div class="">
            <img src="<?php echo esc_url($header['image']); ?>" alt="" class="w-auto h-full object-cover">
        </div>
    </div>

    <div>
    </div>

    <div class="flex items-center justify-center font-bold font-dm my-10">
        <div class="opacity-50">
            <span>Monthly</span>
        </div>
        <div class="px-8 switch">
            <input class="hidden" type="checkbox" id="toggle"/><label for="toggle"></label>
        </div>
        <div class="opacity-50">
            <span>Yearly</span>
        </div>
    </div>

    <div class="lg:flex md:mx-10 lg:mx-40">
        <?php
        if (have_rows('pricing_plans')):

            // Loop through rows.
            while (have_rows('pricing_plans')) : the_row(); ?>
                <div class="bg-gray mx-8 p-10 my-6 lg:my-0 pricing">
                    <div class="md:flex lg:block text-center md:text-left lg:text-center">
                        <div class="pr-10 lg:pr-0">
                            <h2 class="font-bold text-2xl pb-5"><?php echo get_sub_field('plan_name'); ?></h2>
                            <p class="pb-10 opacity-60 leading-6"><?php echo get_sub_field('plan_description'); ?></p>
                        </div>
                        <div class="plan-data">
                            <div class="text-4xl font-bold flex justify-center">
                                $
                                <data class="plan-price"> <?php echo get_sub_field('plan_price'); ?></data>
                            </div>
                            <span class="opacity-60 plan-duration">per month</span>
                        </div>
                    </div>
                    <a href="#" class="text-xs uppercase py-3 bg-black text-white mt-10 hover:bg-light-grey hover:text-black block text-center md:w-1/2 lg:w-full">Pick Plan</a>
                </div>

            <?php endwhile;

        endif;

        ?>

    </div>

    <div class="mt-16 md:mt-28 lg:mt-40 px-7 md:mx-10 lg:mx-40 uppercase font-bold leading-6 tracking-[4.16667px]">

        <h2 class="text-4xl hidden md:block font-bold text-center pb-14">Compare</h2>
        <div class="grid grid-cols-2 border-b text-center">
            <div class="text-left">
                <h3>The Features</h3>
            </div>

            <div class="grid grid-cols-3">
                <div class="hidden md:block">
                    <h3>Basic</h3>
                </div>

                <div class="hidden md:block">
                    <h3>Pro</h3>
                </div>

                <div class="hidden md:block">
                    <h3>Business</h3>
                </div>
            </div>
        </div>

        <?php

        if (have_rows('features_compare')):

            // Loop through rows.
            while (have_rows('features_compare')) : the_row();?>

            <div class="md:grid grid-cols-2 py-6 plans">
                <div>
                    <h4><?php echo get_sub_field('feature_name');?></h4>
                </div>
                <div class="grid grid-cols-3">
                    <div class="text-center py-4">
                        <div class="md:hidden">
                            <h3 class="opacity-50 md:opacity-100">Basic</h3>
                        </div>
                        <span><?php if (get_sub_field('basic')) {
                                echo "<i class='fa-solid fa-check pt-3 md:pt-0' style='color: #080808;'></i>";
                            } ?>
                        </span>
                    </div>
                    <div class="text-center py-4">
                        <div class="md:hidden">
                            <h3 class="opacity-50 md:opacity-100">Pro</h3>
                        </div>
                        <span><?php if (get_sub_field('pro')) {
                                echo "<i class='fa-solid fa-check pt-3 md:pt-0' style='color: #080808;'></i>";
                            } ?>
                        </span>
                    </div>
                    <div class="text-center py-4">
                        <div class="md:hidden">
                            <h3 class="opacity-50 md:opacity-100">Business</h3>
                        </div>
                        <span><?php if (get_sub_field('business')) {
                                echo "<i class='fa-solid fa-check pt-3 md:pt-0' style='color: #080808;'></i>";
                            } ?>
                        </span>
                    </div>
                </div>
            </div>

            <?php endwhile;

        endif;
        ?>


    </div>

    <div>
        <?php include('partials/features.php'); ?>
        <?php include('partials/footer-banner.php'); ?>
    </div>
<?php get_footer(); ?>