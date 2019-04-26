<?php 

get_header(); 

$start_date = new DateTime(get_field('start_date_time'));
$end_date = new DateTime(get_field('end_date_time'));

$featured_image_id = get_post_thumbnail_id($post->ID);
$featured_image = wp_get_attachment_image_src($featured_image_id,'full', false, '');
$featured_image_alt = get_post_meta($featured_image_id,'_wp_attachment_image_alt', true);

?>

<main id="content" role="main">

    <div class="container-fluid bg-info cheetah-spots py-3">

      <div class="narrow">

        <ul class="extensible-list horizontal fs-md text-white text-shadow">
          <li>
            <a class="text-white" href="/get-involved/ccf-events">
              Events
            </a>
          </li>
          <li><span class="fa fa-caret-right" role="img"></span></li>
          <li class="text-primary font-weight-bold">
            <?php echo $start_date->format("F Y"); ?>
          </li>
        </ul>

      </div>
      <!-- .narrow -->

    </div>
    <!-- .container-fluid -->

    <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

    <article class="container-fluid blog py-6" id="primary-content">

        <header class="narrow mb-5">

            <h1 class="display-4 mb-3"><?php the_title(); ?></h1>

            <p class="f-sans-serif">
                <strong class="d-block"><?php echo ($end_date->format("j") != $start_date->format("j")) ? get_field('start_date_time') . ' – ' . get_field('end_date_time') : get_field('start_date_time') . ' – ' . $end_date->format('g:i a'); ?></strong>
            </p>

        </header>

        <div class="medium mb-5">

            <figure class="figure my-0">

                <?php if ($featured_image) : ?>
                    <img class="figure-img" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image_alt; ?>">
                <?php else : ?>
                    <img class="figure-img" src="https://via.placeholder.com/1000x563" alt="Placeholder">
                <?php endif; ?>

            </figure>

        </div>

        <div class="my-5 mx-n2">

            <figure class="w-100">

                <div class="figure-info">
                    <div id="map-affiliates"></div>
                </div>

                <div class="container py-1">
                    <div class="narrow">
                        <figcaption>
           
                            <span class="d-block fs-sm">
                                <em>
                                Map tiles by
                                <a href="http://stamen.com/" target="_blank">Stamen Design</a>, under
                                <a href="http://creativecommons.org/licenses/by/3.0" target="_blank">CC BY 3.0</a>.
                                Data by
                                <a href="http://openstreetmap.org" target="_blank">OpenStreetMap</a>, under
                                <a href="http://www.openstreetmap.org/copyright" target="_blank">ODbL</a>
                                </em>
                            </span>

                        </figcaption>
                    </div>
                </div>

            </figure>
        </div>
        <!-- .mx-n2 -->

        <?php

          $location = get_field('location');
          $latitude = get_field('latitude');
          $longitude = get_field('longitude');

          $map_location = array();
  
          $map_location['icon'] = 'officeIcon';
          $map_location['popupText'] = $location;
          $map_location['latitude'] = $latitude;
          $map_location['longitude'] = $longitude;

        
        ?>

        <?php wp_localize_script('ccf-global-map', 'map_locations', $map_location); ?>

        <?php get_template_part('template-parts/flexible-content-article'); ?>

        <?php get_template_part('template-parts/article-footer'); ?>

    </article>
    <!-- #primary-content -->

    <?php endwhile; endif; /* have_posts */ ?>

    <?php get_template_part('template-parts/section-join-the-race'); ?>

</main>
<!-- #content -->

<?php get_footer(); ?>