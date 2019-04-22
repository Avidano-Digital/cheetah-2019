<?php 

get_header(); 

$date = DateTime::createFromFormat("F j, Y", get_field('start_date_time'));
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
            <a class="text-white" href="news-ccf-blog.html">
              Events
            </a>
          </li>
          <li><span class="fa fa-caret-right" role="img"></span></li>
          <li class="text-primary font-weight-bold">
            <?php echo $month . ' ' . $year; ?>
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
                <span class="bg-danger d-block">

                Starts on:
                
                </span>
                <strong class="d-block"><?php the_field('start_date_time'); ?></strong>
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

        <?php get_template_part('template-parts/flexible-content-article'); ?>

        <?php get_template_part('template-parts/article-footer'); ?>

    </article>
    <!-- #primary-content -->

    <?php endwhile; endif; /* have_posts */ ?>

    <?php get_template_part('template-parts/section-join-the-race'); ?>

</main>
<!-- #content -->

<?php get_footer(); ?>