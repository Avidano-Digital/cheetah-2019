<?php

/*
Template Name: About Us
*/

get_header(); ?>

<main id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="banner">

        <div class="card bg-white">

            <div class="overlay-gradient-y-black">
        
            <?php 
                $featured_image_id = get_post_thumbnail_id($post->ID);
                $featured_image = wp_get_attachment_image_src($featured_image_id,'full', false, '');
                $featured_image_alt = get_post_meta($featured_image_id,'_wp_attachment_image_alt', true);
             ?>
  
            <?php if( $featured_image ): ?>
                <img class="card-img" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image_alt; ?>">
            <?php else : ?>
                <img class="card-img" src="http://via.placeholder.com/1500x500.jpg" alt="Placeholder">
            <?php endif; ?>

            </div>

            <div class="card-img-overlay d-flex">
                <div class="container-fluid align-self-end opacity-70">
                    <h1 class="text-right text-secondary">
                        <em>Learn</em>
                    </h1>
                </div>
                <!-- .align-self-center -->
            </div>
        </div>

    </section>
    <!-- .banner -->

    <article class="container-fluid">

        <div class="row">

            <div class="col-xl-3 bg-dark px-xl-4">

                <div class="sticky-top py-xl-5">

                    <div class="btn-toggle d-xl-none offset-gutter-x">

                        <a class="btn btn-lg btn-block btn-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="collapseExample">
                            <span class="title">Learn</span>
                        </a>

                    </div>

                    <nav class="collapse d-xl-block mb-xl-5" id="aside-nav">
                        <ul class="extensible-list text-white py-4 py-xl-0">
                            <li class="page_item current_page_item">
                                <a href="/about-us/learn/resource-library/">Resource Library</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'about-cheetahs' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">About Cheetahs</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'human-wildlife-conflict' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">Human Wildlife Conflict</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'illegal-pet-trade' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">Illegal Pet Trade</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'habitat-loss' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">Habitat Loss</a>
                            </li>
                            <li class="page_item <?php if ( is_single( 'ccf-videos' ) ) : ?>current_page_item<?php endif; ?>">
                                <a href="#">CCF Videos</a>
                            </li>
                        </ul>

                    </nav>

                    <?php get_template_part('template-parts/aside-donate'); ?>

                </div>
                <!-- .sticky-top -->

            </div>
            <!-- .col -->

            <div class="col-xl-9 py-7">

                <header class="medium">
                    <h1 class="display-3 text-center mb-3"><?php the_title(); ?></h1>
                </header>
<?php
                if (get_field(resource_library_description)) {
?>                    
                    <div class="text-block narrow mb-5">
                        <p>
                            <?php the_field('resource_library_description'); ?>
                        </p>
                    </div>
<?php
                }
?>                
                <div class="medium">

                    <div class="accordion-group offset-gutter-x mt-6 border-bottom" role="tablist" id="acc-resource-library">

<?php
                        $args = array(
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'taxonomy' => 'resource-category'
                        );

                        $categories = get_categories($args);
                        $category_count = 0;
                        foreach($categories as $category) {
                            $category_count++;
                            $visibility = '';
                            $expanded = 'false';
                            $description = $category->description;
                            if ($category_count == 1) {
                                $visibility = 'show';
                                $expanded = 'true';
                            }
?>

                            <div class="card">

                                <a class="card-header h4 collapse collapsed" id="acc-button-<?php echo $category->slug; ?>" data-toggle="collapse" href="#acc-panel-<?php echo $category->slug; ?>"
                                    role="tab" aria-expanded="<?php echo $expanded; ?>" aria-controls="acc-panel-<?php echo $category->slug; ?>">
                                    <span class="title" role="heading" aria-level="2"><?php echo $category->name; ?></span>
                                </a>

                                <div class="collapse <?php echo $visibility; ?>" id="acc-panel-<?php echo $category->slug; ?>" role="tabpanel" aria-labelledby="acc-button-<?php echo $category->slug; ?>" data-parent="#acc-resource-library">

                                    <div class="card-body bg-light py-7">

                                        <div class="narrow">

                                            <img class="mb-5 rounded d-none" src="https://via.placeholder.com/800x400" alt="Placeholder">
                                            <img class="mb-5 rounded" src="<?php echo get_template_directory_uri(); ?>/images/resource-library-<?php echo $category->slug; ?>.jpg" alt="Placeholder">

<?php                                        
                                            if ($description) {
?>                                                
                                                <p class="mb-5">
                                                    <?php echo $description; ?>
                                                </p>
<?php
                                            }
?>                                            

                                            <ul class="list-group list-group-flush mb-3">

<?php
                                                $posts = get_posts(array(
                                                        'numberposts' => 5,
                                                        'post_type'   => 'resourcelibrary',
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'resource-category',
                                                                'terms' => $category->term_id
                                                            )
                                                        )
                                                    )
                                                );

                                                if ($posts) {
                                                    foreach($posts as $post) {
                                                        setup_postdata($post);
                                                        if ($category->slug == 'lectures-and-presentations') {
                                                            $video_url = get_field('video_url');
                                                            $video_id = substr( strrchr( $video_url, '/' ), 1 );
?>
                                                            <li class="list-group-item">

                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6 mb-3 mb-md-0">
                                                                        <div class="embed-responsive embed-responsive-16by9">
                                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .col -->

                                                                    <div class="col-md-6">
                                                                        <a class="text-body" href="<?php the_permalink(); ?>">
                                                                            <p class="f-sans-serif fs-md mb-0"><?php echo get_the_date(); ?></p>
                                                                            <strong>
                                                                                <?php the_title(); ?>
                                                                            </strong>
                                                                        </a>
                                                                    </div>
                                                                    <!-- .col -->

                                                                </div>
                                                                <!-- .row -->

                                                            </li>
<?php                                                            
                                                        }
                                                        else {
?>
                                                            <li class="list-group-item">
                                                                <a class="text-body" href="<?php the_permalink(); ?>">
                                                                    <p class="f-sans-serif fs-md mb-0"><?php echo get_the_date(); ?></p>
                                                                    <strong>
                                                                        <?php the_title(); ?>
                                                                    </strong>
                                                                </a>
                                                            </li>                              
<?php
                                                        }
                                                    }
                                                }
?>
                                            </ul>

                                            <a class="link text-secondary" href="<?php echo get_site_url() . '/resource-category/' . $category->slug; ?>" class="link">
                                                See All
                                            </a>

                                        </div>
                                        <!-- .narrow -->

                                    </div>

                                </div>
                                <!-- .collapse -->

                            </div>
                            <!-- .card -->
<?php
                        }
?>

                    </div>
                    <!-- .accordion-group -->
                   
                </div>
                <!-- .medium -->

                <?php get_template_part('template-parts/article-footer'); ?>
                  
            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </article>

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer(); ?>