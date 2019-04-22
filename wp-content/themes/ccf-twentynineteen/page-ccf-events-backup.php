<?php

/*
Template Name: CCF Events
*/

get_header(); ?>

<main id="content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="container-fluid">

        <div class="row">

            <?php get_template_part('template-parts/sidebar-get-involved'); ?>

            <div class="col-xl-9">

                <article class="py-6" id="primary-content">

                    <header class="medium">
                        <h1 class="display-4 text-center"><?php the_title(); ?></h1>
                    </header>

                    <div class="text-block narrow my-6">
                        
                        <?php the_content(); ?>
                              
                    </div>
                    <!-- .narrow -->

                    <?php

                    $args = array( 
                        'post_type' => 'events', 
                        'order' => 'ASC',
                        'meta_key' => 'date',
                        'orderby' => 'meta_value',
                    );
                    
                    $loop = new WP_Query( $args );
                    $date_groups = [];

                    while ( $loop->have_posts() ) : $loop->the_post();

                        date_default_timezone_set('America/New_York');

                        $today = DateTime::createFromFormat("U", time());
                        $date = DateTime::createFromFormat("F j, Y", get_field('date'));
                        
                        if ($date > $today) :
                            $year = $date->format("Y");
                            $month = $date->format("F");
                            if (!in_array($month . ' ' . $year, $date_groups)) :
                                array_push($date_groups, $month . ' ' . $year);                            
                            endif;
                        endif;
                    endwhile;

                    foreach ($date_groups as $group) :
                        if ($first) :
?>
                            <hr class="medium">
<?php
                        endif;
                        $first = true;
?>                        
                        <div class="text-block medium my-6 events">

                            <h2 class="mb-3"><?php echo $group; ?></h2>

                            <div class="row matrix-gutter">
<?php                                                    
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $date = DateTime::createFromFormat("F j, Y", get_field('date'));
                                    $year = $date->format("Y");
                                    $month = $date->format("F");
                                    $time = get_field('time');
                                    $featured_image_id = get_post_thumbnail_id($post->ID);
                                    $featured_image = wp_get_attachment_image_src($featured_image_id,'full', false, '');
                                    $featured_image_alt = get_post_meta($featured_image_id,'_wp_attachment_image_alt', true);
                                    if ($month . ' ' . $year == $group) :
?>
                                        <div class="col-md-6">

                                            <div class="card border h-100">
                                                <img class="card-img-top" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image_alt; ?>">
                                                <div class="card-body">
                                                    <h2 class="h5"><?php the_title(); ?></h2>
                                                    <p class="f-sans-serif fs-md">
                                                        <strong class="d-block"><?php the_field('date'); ?></strong>
<?php 
                                                        if ($time) : 
?>
                                                            <span class="text-muted"><?php echo $time; ?></span>
<?php 
                                                        endif; 
?>
                                                    </p>
                                                </div>
                                                <!-- .card-body -->
                                                <div class="card-footer py-2">
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-block btn-primary stretched-link">
                                                        Event Details
                                                    </a>
                                                </div>
                                                <!-- .card-footer -->
                                            </div>
                                            <!-- .card -->

                                        </div>
                                        <!-- .col -->
<?php                                        
                                    endif;
                                endwhile;
?>
                            </div>
                            <!-- .row -->

                        </div>
                        <!-- .text-block -->

<?php                        
                    endforeach;
?>                    

                    <?php get_template_part('template-parts/article-footer'); ?>
            
                </article>
                <!-- #primary-content -->

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </article>

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer(); ?>