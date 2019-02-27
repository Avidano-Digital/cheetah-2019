<?php

get_header();

$resourceCategories = get_the_terms( $post->ID, 'resource-category' ) ;
$resourceCategory = $resourceCategories[0];

?>

<main id="content">

    <div class="container-fluid bg-info cheetah-spots py-4">

        <div class="narrow">
            <ul class="extensible-list horizontal fs-md text-white">
                <li><a href="<?php echo get_site_url() . '/resource-library'; ?>">Resource Library</a></li>
                <li><span class="fas fa-caret-right"></span></li>
                <li><a href="<?php echo get_site_url() . '/resource-category/' . $resourceCategory->slug; ?>"><?php echo $resourceCategory->name; ?></a></li>
            </ul>

        </div>

    </div>
    <!-- .container-fluid -->

    <?php if (have_posts()) : while ( have_posts() ) : the_post();

    $author_name = get_the_author_meta('display_name');

    $avatar_size = 96;
    $author_avatar = get_wp_user_avatar( get_the_author_meta( 'ID' ), $avatar_size );
    
    ?>

    <article class="container-fluid blog py-6" id="primary-content">

        <header class="narrow mb-5">

            <?php $postcat = get_the_category( $post->ID ); ?>
            <?php foreach ($postcat as $cat): if ($cat->parent != 0 ): ?>

            <p class="mb-0"><a class="no-link-style text-body" href="#"><em><?php echo $cat->name; ?></em></a></p>

            <?php endif; endforeach; ?> 

            <h1 class="display-4 mb-3"><?php the_title(); ?></h1>

            <ul class="extensible-list horizontal">

                <li>
                
                    <div class="rounded-circle" style="overflow:hidden;">
                        <?php echo $author_avatar; ?>
                    </div> 
                     
                </li>
            
                <li class="fs-md">
                    <strong class="d-block">by&nbsp;<?php echo $author_name; ?></strong>
                    <span class="text-muted"><?php the_date(); ?></span> 
                </li>
                
            </ul>
    
        </header>

        <?php if( has_post_thumbnail() ):
            $featured_image_url = get_the_post_thumbnail_url( get_the_ID(),'full' );
        ?>

        <div class="medium mb-5">

        <figure class="figure my-0">
            <img class="figure-img" src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>" />
            <?php if( $featured_image_caption ): ?>
                <figcaption class="figure-caption"><?php echo $featured_image_caption ?></figcaption>
            <?php endif; ?>
        </figure>

        </div>
        <!-- .narrow -->

        <?php endif; /* has_post_thumbnail */ ?>


        <?php $featured_image = get_field('featured_image');  
        
        if( $featured_image ): ?>

        <div class="medium mb-5">

            <figure class="figure my-0">
                <img class="figure-img" src="<?php echo $featured_image['image']; ?>" alt="<?php the_title(); ?>" />
                <?php if( $featured_image['caption'] ): ?>
                    <figcaption class="figure-caption"><?php echo $featured_image['caption'] ?></figcaption>
                <?php endif; ?>
            </figure>

        </div>
        <!-- .narrow -->

        <?php endif; /* featured_image */ ?>

<?php

        $video_url = get_field('video_url');
        $video_id = substr( strrchr( $video_url, '/' ), 1 );

        if ( get_field('video_url') ): 
?>

            <div class="video-block medium my-6">

                <div class="rounded">

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_id;?>" frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                    </div>

                </div>
                <!-- .wide -->

            </div>

        <?php endif; ?>    

        <?php get_template_part('template-parts/flexible-content-article'); ?>

        <?php get_template_part('template-parts/article-footer'); ?>

    </article>
    <!-- #primary-content -->

    <?php endwhile; endif; /* have_posts */ ?>


    <section class="featured-panel responsive-lg">

      <div class="card bg-dark">
        <img class="card-img opacity-30" src="<?php echo get_template_directory_uri(); ?>/images/donate.jpg" alt="Placeholder">
        <div class="card-img-overlay d-flex px-0">

          <div class="container align-self-center">

            <div class="narrow py-4">

              <h5 class="card-title h1 text-white text-center text-shadow">
                Join the race to
                <a class="text-primary" href="#">#SaveTheCheetah</a>
              </h5>

              <div class="row matrix-border shadow-lg">

                <div class="col-md-6">
                  <a class="btn btn-lg btn-block btn-primary" href="#" title="Donate">Donate</a>
                </div>
                <!-- .col -->

                <div class="col-md-6">
                  <a class="btn btn-lg btn-block btn-primary" href="#" title="Sponsor a Cheetah">Sponsor a Cheetah</a>
                </div>
                <!-- .col -->

              </div>
              <!-- .matrix-border -->

            </div>

          </div>
          <!-- .container -->
        </div>
      </div>

    </section>

</main>
<!-- #content -->

<?php get_footer(); ?>