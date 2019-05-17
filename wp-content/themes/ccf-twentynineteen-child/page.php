<?php

get_header();

$grandparent_title = get_the_title(intval(get_post($post->post_parent)->post_parent));
$parent_title = get_the_title($post->post_parent);

?>

<main id="content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="banner">

        <div class="card bg-white">

            <div class="gradient-overlay-y-black">

                <?php
                $featured_image_id = get_post_thumbnail_id($post->ID);
                $featured_image = wp_get_attachment_image_src($featured_image_id, 'full', false, '');
                $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
                ?>

                <?php if ($featured_image): ?>
                <img class="card-img"
                    src="<?php echo $featured_image[0]; ?>"
                    alt="<?php echo $featured_image_alt; ?>">
                <?php else : ?>
                <img class="card-img" src="http://via.placeholder.com/1500x500.jpg" alt="Placeholder">
                <?php endif; ?>

            </div>

            <div class="card-img-overlay d-flex">
                <div class="container-fluid align-self-end opacity-70">
                    <h1 class="text-right text-secondary">
                        <em><?php echo $parent_title; ?></em>
                    </h1>
                </div>
                <!-- .align-self-center -->
            </div>
        </div>

    </section>
    <!-- .banner -->

    <div class="container-fluid">

        <div class="row">

          <div class="col-xl-3 bg-dark">

              <div class="sticky-top py-xl-5">

                  <div class="btn-toggle d-xl-none offset-gutter-x">

                      <a class="btn btn-lg btn-block btn-primary" data-toggle="collapse" href="#aside-nav" aria-expanded="false" aria-controls="collapseExample">
                          <span class="title"><?php echo $parent_title; ?></span>
                      </a>

                  </div>

                  <nav class="collapse d-xl-block mb-xl-5" id="aside-nav"> 

                      <ul class="extensible-list text-white py-4 py-xl-0">
                          <li class="page_item">
                              <a href="/get-involved/visit-ccf/">Sidebar Menu Item</a>
                          </li>
                      </ul>

                  </nav>

                  <?php get_template_part('template-parts/aside-donate'); ?>

              </div>
              <!-- .sticky-top -->

          </div>
          <!-- .col -->

            <div class="col-xl-9 overflow-hidden">

                <article class="my-6" id="primary-content">

                    <header class="medium my-3">
                        <h1 class="display-4 text-center">
                            <?php the_title(); ?>
                        </h1>
                    </header>

                    <?php get_template_part('template-parts/flexible-content-article'); ?>

                    <?php

                    get_template_part('template-parts/article-footer');
                    get_template_part('template-parts/related-reading');

                    ?>

                </article>
                <!-- #primary-content -->

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </div>
    <!-- .container-fluid -->

    <?php endwhile; endif; /* have_posts */ ?>

</main>
<!-- #content -->

<?php get_footer();
