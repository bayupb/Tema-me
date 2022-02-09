<?php get_header();?>
    <div class=" md:py-28 py-20 <?php echo get_theme_mod( 'temame_select_custom_colors_heading' ) ?>">
        <div class="max-w-6xl mx-auto flex flex-col justify-center items-center text-center">
            <h1 class="text-white text-heading <?php echo get_theme_mod( 'temame_select_heading_font' ) ?> <?php echo get_theme_mod( 'temame_select_heading_text' ) ?>">
            <?php echo get_theme_mod( 'temame_heading_text' ) ?>
            </h1>
            <p class="text-white mt-4 <?php echo get_theme_mod( 'temame_select_description_font' ) ?> <?php echo get_theme_mod( 'temame_select_description_text' ) ?>">
                <?php echo get_theme_mod( 'temame_description_text' ) ?>
                
            </p>
            <a href="#" class="px-5 py-2 mt-4 rounded-md text-gray-900 bg-white">
                Tlp: <?php echo get_theme_mod( 'temame_number_text' ) ?>
            </a>
        </div>
    </div>

    <div class="max-w-6xl container mx-auto text-center my-10">
        <div class="p-5">
            <h1 class="text-black text-3xl font-bold">Our Services</h1>
            <p class="mt-2 text-black text-base font-normal">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, dolorum?
            </p>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
            <?php 
                $s = array(
                    'post_type' => 'services',
                    'order'     => 'desc',
                    'post_per_page' => 6
                );

                $service = new WP_Query( $s );
                if($service->have_posts()){
                    while($service->have_posts()){
                        $service->the_post();
                        ?>
                        <div class="img-service flex flex-col rounded-md shadow-sm text-black bg-white text-center">
                            <?php the_post_thumbnail( )?>
                            <h1 class="text-xl font-semibold mt-2">
                                <?php the_title();?>
                            </h1>

                        </div>
                        <?php
                    }
                }
                else{
                    echo 'Data Services Not Found!';
                }
            ?>
        </div>
    </div>

    <div class="max-w-6xl container mx-auto text-center my-10">
        <div class="p-5">
            <h1 class="text-black text-3xl font-bold">See Our Work!</h1>
            <p class="mt-2 text-black text-base font-normal">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, dolorum?
            </p>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
            <?php 
                $w = array(
                    'post_type' => 'work',
                    'order'     => 'desc',
                    'post_per_page' => 6
                );

                $working = new WP_Query( $w);
                if($working->have_posts()){
                    while($working->have_posts()){
                        $working->the_post();
                        ?>
                        <div class="img-working flex flex-col rounded-md shadow-sm text-black bg-white text-center">
                            <?php the_post_thumbnail( )?>

                        </div>
                        <?php
                    }
                }
                else{
                    echo 'Data Work Not Found!';
                }
            ?>
        </div>
    </div>

    <!-- clients -->
    <div class="max-w-6xl container mx-auto text-center my-10">
        <div class="p-5">
            <h1 class="text-black text-3xl font-bold">Our Clients Speak!</h1>
            <p class="mt-2 text-black text-base font-normal">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, dolorum?
            </p>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
            <?php 
                $c = array(
                    'post_type' => 'clients',
                    'order'     => 'desc',
                    'post_per_page' => 6
                );

                $clients = new WP_Query( $c );
                if($clients->have_posts()){
                    while($clients->have_posts()){
                        $clients->the_post();
                        ?>
                        <div class="flex flex-col p-4 items-center rounded-sm shadow-sm border-t-2 border-gray-900 bg-white text-gray-900 text-center">
                            <p class="text-xs font-light text-gray-900">
                                <?php the_excerpt();?>
                            </p>  
                            <div class="flex items-center mt-10">
                                <div class="img-clients"><?php the_post_thumbnail(); ?> </div>
                                <h3 class="ml-4 text-base font-semibold text-center text-gray-900">
                                    <?php the_title();?>
                                </h3>
                            </div>
                        

                        </div>
                        <?php
                    }
                }
                else{
                    echo 'Data Clients Not Found!';
                }
            ?>
        </div>
    </div>
<?php get_footer();?>