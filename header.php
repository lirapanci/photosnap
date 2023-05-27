<?php if (!defined('ABSPATH')) { exit; }?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="<?php bloginfo( 'charset' ); ?>"/>

    <?php wp_head(); ?> <!-- Load WP objects for head-tag -->
</head>

<body class="font-dm">
    <nav class="md:flex justify-between items-center py-4 md:mx-auto px-4 px-6 header text-base md:text-xs">
            <div class="uppercase text-black font-bold flex justify-between items-center pr-3 lg:pr-0">
                <?php echo get_custom_logo();?>
                <button class="h-10 navbar-burger items-center p-3 text-white bg-rcc-blue md:hidden">
                    <svg class="block h-4 w-4 fill-current burger-btn" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden x-btn" viewBox="0 0 20 20" style="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

            </div>

            <div class="uppercase text-black font-bold tracking-wider">

                <?php
                wp_nav_menu( array(
                    'theme_location' => 'my-custom-menu',
                    'container_class' => 'custom-menu-class' ) );
                ?>

            </div>

            <button type="button" class="w-full lg:w-fit uppercase text-white bg-black font-bold py-3 px-6 hidden md:block hover:bg-light-grey hover:text-black tracking-wider" id="inviteBtn">
                Get an invite
            </button>

    </nav>
</body>