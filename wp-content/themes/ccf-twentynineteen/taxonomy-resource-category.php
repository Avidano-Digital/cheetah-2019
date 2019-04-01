<?php 

  get_header();
  $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 

?>

<main id="content">

    <section class="banner">

        <div class="card bg-white">

            <div class="overlay-gradient-y-black">

            <?php
                $args = array(
                  'name'        => 'resource-library',
                  'post_type'   => 'page',
                  'post_status' => 'publish',
                  'numberposts' => 1
                );

                $resource_library = get_posts($args);

                if( $resource_library ) :
        
                    $featured_image_id = get_post_thumbnail_id($resource_library[0]->ID);
                    $featured_image = wp_get_attachment_image_src($featured_image_id,'full', false, '');
                    $featured_image_alt = get_post_meta($featured_image_id,'_wp_attachment_image_alt', true);

                endif;

                $image = get_field('featured_image', 'term_' . $term->term_id);

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

            <div class="col-xl-3 bg-dark">

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

            <div class="col-xl-9 py-6">

                <header class="medium">
                    <h1 class="display-4 text-center"><?php echo $term->name; ?></h1>
                </header>

                <div class="text-block narrow my-5">
                    <?php if ($image) : ?>
                        <img class="mb-5" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                    <?php endif; ?>
                    <p>
                        <?php echo $term->description; ?>
                    </p>
                </div>

                <div class="narrow my-5">

                    <?php if ( have_posts() ) : ?>

                        <ul class="list-group list-group-flush mb-3">

                            <?php while ( have_posts() ) : the_post();
                            
                            $categories = get_the_category();
                            $category_first = $categories[0]->cat_name;
                            
                            ?>

                                <li class="list-group-item">
                                    <a class="text-body" href="<?php the_permalink(); ?>">
                                        <p class="f-sans-serif fs-md mb-0"><?php echo get_the_date(); ?></p>
                                        <strong class="h5">
                                            <?php the_title(); ?>
                                        </strong>
<?php
                                        if (get_field('authors')) :                                        
?>                                            
                                            <p class="f-sans-serif text-muted fs-md">
                                                By <?php the_field('authors'); ?>
                                            </p>
<?php
                                        endif;
?>                                                                                
                                    </a>
                                </li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </div>
                <!-- .narrow -->

                <?php get_template_part('template-parts/article-footer'); ?>
                  
            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </article>

</main>
<!-- #content -->

<?php get_footer(); ?>