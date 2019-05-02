<?php
    $currentPage = (int)$currentPage;
    $totalPages = (int)$totalPages;

    if ($totalPages > $currentPage && $currentPage !== 1):
      $nextPage = true;
    else :
      $nextPage = false;
    endif;

    if ($currentPage == $totalPages) :
      $previousPage = false;
      $nextPage = true;
    else :
      $previousPage = true;
    endif;
?>

<div class="container-fluid wide my-5 bg-light py-5">

    <h2 class="f-cheetah-tracks display-3 mb-2 text-tertiary text-center">Artists of the Month</h2>
    <ul class="extensible-list horizontal justify-content-center">
        <?php if ($previousPage == true) : ?>
        <li>
            <a class="no-btn-style text-tertiary artist-pagination" data-page="<?php echo $currentPage + 1; ?>" href="#" title="Previous">
                <span class="fas fa-angle-double-left" title="Previous" role="img"></span>
            </a>
        </li>
        <?php endif; ?>
        <li>
            <strong class="text-tertiary">May, 2019</strong>
        </li>
        <?php if ($nextPage == true) : ?>
        <li>
            <a class="no-btn-style text-tertiary artist-pagination" data-page="<?php echo $currentPage - 1; ?>" href="#" title="Next">
                <span class="fas fa-angle-double-right" title="Previous" role="img"></span>
            </a>
        </li>
        <?php endif; ?>

    </ul>

    <?php
      
      $featured_image_id = get_post_thumbnail_id($post->ID);
      $featured_image = wp_get_attachment_image_src($featured_image_id, 'full', false, '');
      $featured_image_alt = get_post_meta($featured_image_id, '_wp_attachment_image_alt', true);
      
      if ($featured_image):
        $featured_image = $featured_image[0];
      else :
        $featured_image = 'http://via.placeholder.com/1500x1166.jpg';
        $featured_image_alt = 'Placeholder';
      endif;
    
    ?>

    <div class="figure-block medium my-3">

        <figure class="figure my-0">

            <div class="figure-img shadow-lg">

                <a class="enlarge" class="stretched-link" href="<?php echo $featured_image; ?>" title="<?php echo $featured_image_alt; ?>"
                    data-toggle="lightbox" data-footer="<?php echo $featured_image_alt; ?>">
                    <span>
                        <span class="fas fa-expand"></span>
                    </span>
                </a>

                <img src="<?php echo $featured_image; ?>" alt="<?php echo $featured_image_alt; ?>">

            </div>
            <!-- .figure-img -->

            <figcaption class="figure-caption mt-1 text-center"><?php echo $featured_image_alt; ?></figcaption>

        </figure>

    </div>
    <!-- .figure-block -->

    <div class="narrow gallery-thumbnails my-5">

        <div class="artist-bio my-3 text-center">
            <h3 class="text-tertiary"><?php the_title(); ?></h3>
            <p><?php the_field('description'); ?></p>
    
        </div>
        <!-- .artist-bio -->

        <?php 

        $images = get_field('gallery');

        if ($images) : 

        ?>

            <div class="row matrix-gutter">

                <?php foreach( $images as $image ): ?>
                    <div class="col-sm-6">

                        <div class="position-relative">

                            <a class="enlarge" class="stretched-link" href="<?php echo $image['url']; ?>"
                                title="<?php echo $image['alt']; ?>" data-toggle="lightbox"
                                data-gallery="example-gallery" data-footer="<?php echo $image['alt']; ?>">
                                <span>
                                    <span class="fas fa-expand"></span>
                                </span>
                            </a>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>

                    </div>
                    <!-- .col -->
                <?php endforeach; ?>

            </div>
            <!-- .row -->

        <?php endif; ?>

    </div>
    <!-- .gallery-thumbnails -->

</div>