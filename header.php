<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>">

    <?php if(is_singular( ) && get_option( 'thread_comments' )){
        wp_enqueue_script( 'comment-reply' );
    } ?>
    <?php wp_head();?>
    
</head>
<body <?php body_class();?> x-data="{openNavbar:false}" >
    <?php wp_body_open();?>

<header class="w-full md:px-12 py-4 h-24 my-auto bg-gray-900">
    <div class="flex container md:mx-auto max-w-6xl px-3 md:px-0 items-center justify-between">
        <div>
            <?php
                the_custom_logo();
                if(is_front_page() && is_home()) :
                    ?>
                    <h1 class="site-title text-white font-bold text-3xl">
                        <a href="<?php echo esc_url(home_url( '/' )) ?>" rel="home" class="text-3xl">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>
                    <?php
                else :
                    ?>
                    <p class="site-title text-white text-3xl">
                        <a href="<?php echo esc_url(home_url( '/' )) ?>" rel="home" class="text-3xl">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </p>
                    <?php
                    endif;
                $temame_description = get_bloginfo( 'description', 'display' );
                if($temame_description || is_customize_preview()) :
                    ?>
                    <p class="site-description">
                        <?php echo $temame_description; ?>
                    </p>
                    <?php endif;?>
        </div>

        <div>
            <nav class="md:block hidden">
                <?php
                    if(has_nav_menu( 'primary' )):
                        wp_nav_menu( [
                            'theme_location'    => 'primary',
                            // 'container'         => '',
                            'items_wrap'        => '<ul class="md:flex hidden space-x-4 text-white">%3$s</ul>'
                        ] );
                    ?>
                    <?php
                    endif;
                ?>
            </nav>

            <!-- mobile menu -->
            <nav class="md:hidden block">
                <button class="md:hidden items-center" @click="openNavbar = !openNavbar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                </button>
                <ul class="
                            fixed left-0 right-0 min-h-screen bg-gray-900 text-white space-y-6 p-4 transform translate-x-full duration-200
                            md:relative md:flex md:min-h-0 md:space-y-0 md:space-x-4 md:p-0 md:transform"
                    :class="{'translate-x-full': !openNavbar, 'translate-x-0': openNavbar}">
                    <?php if(has_nav_menu('mobile-menu')):
                    wp_nav_menu( [
                        'theme_location' => 'mobile-menu',
                        'container'      => '',
                        'items_wrap'     => '<li class="text-white text-base md:items-center md:flex-row flex-col block container">%3$s</li>'
                    ] );
                    endif;?>
                </ul>
            </nav>
            
        </div>
    
    </div>

    

</header>