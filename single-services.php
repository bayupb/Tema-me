<?php get_header();?>
<div class="container mx-auto max-w-6xl">
    <div class="flex flex-col mt-10 items-center justify-center">
        <?php the_post_thumbnail();?>
        <h1 class="mt-5 text-black font-semibold">
            <?php the_title();?>
        </h1>

    </div>
</div>