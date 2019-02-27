<?php 

get_header(); 

$date = DateTime::createFromFormat("F j, Y", get_field('date'));
$year = $date->format("Y");
$month = $date->format("F");

$featured_image_id = get_post_thumbnail_id($post->ID);
$featured_image = wp_get_attachment_image_src($featured_image_id,'full', false, '');
$featured_image_alt = get_post_meta($featured_image_id,'_wp_attachment_image_alt', true);

?>

<main id="content" role="main">

    <div class="container-fluid bg-info cheetah-spots py-3">

        <div class="narrow">

            <ul class="extensible-list horizontal fs-md text-white text-shadow">
                <li>
                    <a class="text-white" href="<?php echo get_site_url() . '/get-involved/ccf-events'; ?>">
                        CCF Events
                    </a>
                </li>
                <li>|</li>
                <li>
                    <?php echo $month . ' ' . $year; ?>
                </li>
            </ul>

        </div>

    </div>
    <!-- .container-fluid -->

    <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

    <article class="container-fluid blog py-6" id="primary-content">

        <header class="narrow mb-5">

            <h1 class="display-4 mb-3"><?php the_title(); ?></h1>

            <p class="f-sans-serif">
                <strong class="d-block"><?php the_field('date'); ?></strong>
                <span class="text-muted"><?php the_field('time'); ?></span>
            </p>

        </header>

        <div class="medium mb-5">

            <figure class="figure my-0">
                <img class="figure-img" src="<?php echo $featured_image[0]; ?>" alt="<?php echo $featured_image_alt; ?>">
            </figure>

        </div>

        <?php get_template_part('template-parts/flexible-content-article'); ?>

        <?php get_template_part('template-parts/article-footer'); ?>

    </article>
    <!-- #primary-content -->

    <?php endwhile; endif; /* have_posts */ ?>

    <?php get_template_part('template-parts/section-join-the-race'); ?>

</main>
<!-- #content -->

<?php get_footer(); ?>