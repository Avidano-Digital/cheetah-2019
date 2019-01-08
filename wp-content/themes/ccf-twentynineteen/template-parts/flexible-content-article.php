<section class="mb-7">

    <?php if( have_rows('article_content') ): while ( have_rows('article_content') ) : the_row(); ?>

    <?php if( get_row_layout() == 'text_block' ):

    $wysiwyg = get_sub_field('wysiwyg');
    
    ?>

    <div class="text-block narrow mb-5">
        <?php echo $wysiwyg; ?>
    </div>

    <?php elseif( get_row_layout() == 'video_block' ):

    $video = get_sub_field( 'video');
    $post_object = $video;

    ?>

    <?php if( $post_object ): 

    // override $post
    $post = $post_object;
    setup_postdata( $post ); 

    $video_url = get_field('video_url');
    $video_id = substr( strrchr( $video_url, '/' ), 1 );

    ?>

    <div class="video-block medium my-6">

        <div class="rounded">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_id;?>" frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
            </div>

        </div>
        <!-- .wide -->

    </div>
    <!-- .video_block -->

    <?php endif; wp_reset_postdata(); /* post_objects */ ?>

    <?php elseif( get_row_layout() == 'banner_block' ):  

    $type = get_sub_field('type');
    $image = get_sub_field('image');
    $caption = get_sub_field('caption');

    $page_summary = get_sub_field('page_summary');

    $page_summary_headline = $page_summary['headline'];
    $page_summary_text = $page_summary['text'];
    $page_summary_link = $page_summary['link'];

    $quote = get_sub_field('quote');
    
    $quote_text = $quote['text'];
    $quote_credit_name = $quote['credit_name'];
    $quote_credit_title = $quote['credit_title'];

    ?>

    <div class="banner-block offset-gutter-x my-7">

        <figure class="figure w-100">

            <div class="featured-panel responsive-xl figure-info">

                <div class="card bg-info">

                    <?php if( $image ): ?>
                        <div class="overlay-gradient-y-black-tall">
                            <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                        </div>
                    <?php else : ?>
                        <div class="overlay-gradient-y-black-tall">
                            <img class="card-img" src="https://via.placeholder.com/1200x800" alt="Placeholder">
                        </div>
                    <?php endif; ?>

                    <div class="card-img-overlay d-flex">
                        <div class="align-self-end">
                            <div class="container px-0 py-3">
                                <div class="narrow text-shadow">

                                    <?php if( $type == 'Page Summary' ) : ?>

                                        <h3 class="text-primary">
                                            <?php echo $page_summary_headline; ?>
                                        </h3>

                                        <div class="text-white">

                                            <div class="fs-lg mb-2">
                                                <?php echo $page_summary_text; ?>
                                            </div>

                                            <a class="link text-primary" href="<?php echo $link['url']; ?>">
                                                <?php echo $page_summary_link['title']; ?>
                                            </a>

                                        </div>

                                    <?php elseif( $type == 'Quote' ) : ?>

                                        <blockquote class="blockquote text-white">

                                            <span class="fs-xl text-primary mb-2"><span class="fas fa-quote-left"></span></span>

                                            <?php echo $quote_text; ?>

                                            <footer class="blockquote-footer text-white">
                                                <?php echo $quote_credit_name; ?> <cite title="Source Title">
                                                    <?php echo $quote_credit_title; ?></cite>
                                            </footer>

                                        </blockquote>

                                    <?php endif; ?>

                                </div>
                                <!-- .narrow -->
                            </div>
                            <!-- .container -->
                        </div>
                        <!-- .align-self-center -->
                    </div>
                    <!-- .card-img-overlay -->
                </div>
                <!-- .card -->

            </div>
            <!-- .featured-panel -->

            <div class="container">
                <div class="narrow">
                    <figcaption class="figure-caption">
                        <?php echo $caption; ?>
                    </figcaption>
                </div>
            </div>
        </figure>
        <!-- figure -->

    </div>
    <!-- .offset-gutter-x -->

    <?php elseif( get_row_layout() == 'figure_block' ):  

    $figure = get_sub_field('figure');
    $enlarge = $figure['enlarge'];

    $image = $figure['image'];
    $caption = $figure['caption'];
    
    ?>

    <div class="figure-block medium my-6">

        <figure class="figure my-0">

            <?php if( $enlarge ): ?>

            <a class="figure-img enlarge" href="<?php echo $image['url']; ?>" title="<?php echo $caption; ?>" data-toggle="lightbox" data-footer="<?php echo $caption; ?>">
                <?php if( $image ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                <?php else : ?>
                    <img src="https://placehold.it/1000x600.jpg" alt="Placeholder">
                <?php endif; ?>
                <span class="fas fa-expand"></span>
            </a>
                
            <?php else : ?>

            <?php if( $image ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
            <?php else : ?>
                <img src="https://placehold.it/1000x600.jpg" alt="Placeholder">
            <?php endif; ?>
            
            <?php endif; ?>

            <?php if( $caption ): ?>

            <figcaption class="figure-caption"><?php echo $caption; ?></figcaption>
            
            <?php endif; ?>
        
        </figure>

    </div>
    <!-- .medium -->
    
    <?php elseif( get_row_layout() == 'two_figure_block' ): 

    $figure_a = get_sub_field('figure_a');

    $image_a = $figure_a['image'];
    $caption_a = $figure_a['caption'];
    $enlarge_a = $figure['enlarge'];

    $figure_b = get_sub_field('figure_b');

    $image_b = $figure_b['image'];
    $caption_b = $figure_b['caption'];
    $enlarge_b = $figure['enlarge'];

    ?>

    <div class="two-figure-block offset-gutter-x my-6">

        <div class="row matrix-gutter">

            <div class="col-sm-6">

                <figure class="figure my-0">

                    <?php if( $enlarge_a ): ?>

                    <a class="figure-img enlarge" href="<?php echo $image_a['url']; ?>" title="<?php echo $caption; ?>" data-toggle="lightbox" data-footer="<?php echo $caption_a; ?>">
                        <img src="<?php echo $image_a['url']; ?>" alt="<?php echo $image_a['alt'] ?>">
                        <span class="fas fa-expand"></span>
                    </a>
                        
                    <?php else : ?>

                    <img class="figure-img" src="<?php echo $image_a['url']; ?>" alt="<?php echo $image_a['alt'] ?>">

                    <?php endif; ?>

                    <?php if( $caption_a ): ?>

                    <figcaption class="figure-caption px-2"><?php echo $caption_a; ?></figcaption>

                    <?php endif; ?>

                </figure>

            </div>
            <!-- .col -->

            <div class="col-sm-6">

                <figure class="figure my-0">

                    <?php if( $enlarge_b ): ?>

                    <a class="figure-img enlarge" href="<?php echo $image_b['url']; ?>" title="<?php echo $caption; ?>" data-toggle="lightbox" data-footer="<?php echo $caption_b; ?>">
                        <img src="<?php echo $image_b['url']; ?>" alt="<?php echo $image_b['alt'] ?>">
                        <span class="fas fa-expand"></span>
                    </a>
                        
                    <?php else : ?>

                    <img class="figure-img" src="<?php echo $image_b['url']; ?>" alt="<?php echo $image_b['alt'] ?>">

                    <?php endif; ?>

                    <?php if( $caption_b ): ?>

                    <figcaption class="figure-caption px-2"><?php echo $caption_b; ?></figcaption>

                    <?php endif; ?>

                </figure>

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </div>
    <!-- .two-figure-block -->

    <?php elseif( get_row_layout() == 'gallery_carousel_block' ): 
            
    $images = get_sub_field('images');

    $count_a = 0;
    $count_b = 0;
    
    ?>

    <?php if( $images ): ?>

    <div class="gallery-carousel-block offset-gutter-x my-7">

        <div class="carousel slide" data-ride="carousel" data-keyboard="true" data-interval="false" id="carousel-gallery" dir="ltr">

            <div class="carousel-outer">

                <div class="carousel-arrows d-none d-md-block">

                    <ul>
                        <li>
                            <a class="half-circle right" href="#carousel-gallery" role="button" data-slide="prev">
                                <span class="fas fa-arrow-left m-auto" title="Previous"></span>
                            </a>
                        </li>
                        <li>
                            <a class="half-circle left text-white d-flex" href="#carousel-gallery" role="button" data-slide="next">
                                <span class="fas fa-arrow-right m-auto" title="Next"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- .row -->

                </div>
                <!-- .carousel-arrows -->

                <div class="carousel-inner">

                    <?php foreach( $images as $image ): ?>

                    <div class="carousel-item <?php if($count_a == 0){ echo 'active'; } ?>">

                        <img class="w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                        <div class="carousel-caption bg-opacity-black-60">
                            <?php if ($image['caption']) : ?>
                            <p>
                                <?php echo $image['caption']; ?>
                            </p>
                            <? else : ?>
                            <p>
                                A caption for the image.
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php $count_a++; endforeach; ?>

                </div>
                <!-- .carousel-inner -->

            </div>
            <!-- .carousel-outer  -->

            <div class="row no-gutters align-items-center justify-content-between py-1">

                <div class="col-auto text-left px-2 d-md-none">
                    <a class="no-btn-style" href="#carousel-gallery" role="button" data-slide="prev">
                        <span class="fas fa-arrow-left" title="Previous"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
                <!-- .col -->

                <div class="col">

                    <ol class="carousel-indicators">

                        <?php foreach( $images as $image ): ?>

                        <li class="<?php if($count_b == 0){ echo 'active'; } ?>" data-target="#carousel-gallery" data-slide-to="<?php echo $count_b; ?>" role="button">
                            <button class="no-btn-style"> <?php echo ($count_b + 1); ?></button>
                        </li>

                        <?php $count_b++; endforeach; ?>

                    </ol>

                </div>
                <!-- .col -->

                <div class="col-auto text-right px-2 d-md-none">
                    <a class="no-btn-style" href="#carousel-gallery" role="button" data-slide="next">
                        <span class="fas fa-arrow-right" title="Next"></span>
                    </a>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- #carousel-gallery -->

    </div>
    <!-- .offset-gutter-x -->

    <?php endif; ?>

    <?php elseif( get_row_layout() == 'thumnail_links_block' ): ?>

    <?php if( have_rows('links') ): ?>

    <div class="thumbnail-links-block offset-gutter-x my-7">

        <div class="medium">

            <div class="row matrix-gutter">

            <?php while ( have_rows('links') ) : the_row(); 

            // vars
            $image = get_sub_field('image');
            $link = get_sub_field('link');

            ?>

                <div class="col-sm-6 col-lg-4">
                    <a class="text-body" href="<?php echo $link['url']; ?>">
                        <img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                        <p class="h6 bg-primary p-2"><?php echo $link['title']; ?></p>
                    </a>
                </div>
                <!-- .col -->

            <?php endwhile; ?>

            </div>
            <!-- .row -->

        </div>
        <!-- .medium -->

    </div>
    <!-- .offset-gutter-x -->

    <?php endif; ?>

    <?php elseif( get_row_layout() == 'gallery_thumbnail_block' ): ?>

    <div class="offset-gutter-x my-7">

        <div class="medium gallery-thumbnails">

            <div class="row matrix-gutter">

                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->
                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .medium -->
    
    </div>
    <!-- .offset-gutter-x -->

    <?php elseif( get_row_layout() == 'color_callout_block' ): ?>

    <?php if( have_rows('callouts') ): ?>

    <div class="offset-gutter-x my-7">

        <?php while ( have_rows('callouts') ) : the_row(); 

        // vars
        $background_color = get_sub_field('background_color');
        $headline = get_sub_field('headline');   
        $text = get_sub_field('text');   
        $link = get_sub_field('link');

        if( $background_color == 'Purple' ){
            $class_name = 'bg-info';
        } else {
            $class_name = 'bg-tertiary';
        }

        ?>

        <div class="row no-gutters">

            <div class="col-lg-6">
                <img src="https://placehold.it/1000x800.jpg" alt="Placeholder">
            </div>
            <!-- .col -->

            <div class="col-lg-6 d-flex <?php echo $class_name; ?> text-white">
                <div class="narrow align-self-center p-3">
                    <h3 class="h4 text-primary"><?php echo $headline; ?></h3>
                    <div class="f-sans-serif mb-2">
                        <?php echo $text; ?>
                    </div>
                </div>
            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

        <?php endwhile; ?>

    </div>
    <!-- .offset-gutter-x -->

    <?php endif; ?>

    <?php elseif( get_row_layout() == 'horizontal_button_block' ): ?>

    <?php if( have_rows('buttons') ): ?>

    <div class="narrow my-5">

        <ul class="extensible-list horizontal justify-content-center">

            <?php while ( have_rows('buttons') ) : the_row();

            // vars
            $link = get_sub_field('link');

            ?>
                <li><a class="btn btn-primary btn-lg" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a></li>
            
            <?php endwhile; ?>
        
        </ul>

    </div>
    <!-- .narrow -->

    <?php endif; ?>

    <?php endif; /* text_block | video_block | banner_block | figure_block | two_figure_block | gallery_carousel_block  | thumnail_links_block | gallery_thumbnail_block */ ?>

    <?php endwhile; endif; /* article_content */ ?>

    <?php if ( is_single( 'article-tearsheet' ) ) : ?>

    <div class="narrow mb-5">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
    </div>
    <!-- .narrow -->

    <div class="offset-gutter-x my-7">

        <div class="medium">

            <div class="row matrix-gutter">

                <div class="col-sm-6 col-lg-4">
                    <a class=" text-body" href="#1">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <p class="h6 bg-primary p-2">Link Title</p>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6 col-lg-4">
                    <a class=" text-body" href="#1">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <p class="h6 bg-primary p-2">Link Title</p>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6 col-lg-4">
                    <a class=" text-body" href="#1">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <p class="h6 bg-primary p-2">Link Title</p>
                    </a>
                </div>
                <!-- .col -->
                <div class="col-sm-6 col-lg-4">
                    <a class=" text-body" href="#1">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <p class="h6 bg-primary p-2">Link Title</p>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6 col-lg-4">
                    <a class=" text-body" href="#1">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <p class="h6 bg-primary p-2">Link Title</p>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6 col-lg-4">
                    <a class=" text-body" href="#1">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <p class="h6 bg-primary p-2">Link Title</p>
                    </a>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .medium -->
    </div>
    <!-- .offset-gutter-x -->

    <div class="narrow mb-5">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
    </div>
    <!-- .narrow -->

    <div class="offset-gutter-x my-7">

        <div class="row medium no-gutters">

            <div class="col-sm-6">
                <img src="<?php echo get_template_directory_uri(); ?>/images/experimental/01.jpg' ?>" alt="Placeholder">
            </div>
            <!-- .col -->

            <div class="col-sm-6 d-flex bg-light pattern-border-colored">

                <div class="align-self-center p-3">

                    <h3 class="h4 text-info">Cheetah Museum</h3>
                    <p class="fs-md f-sans-serif">
                    Displays at our Cheetah Museum are designed around CCF’s scientific research findings and provide detailed information about the cheetah: its history, physiology, importance within the ecosystem, conflict with humans, and what CCF is doing to ensure the species’ survival for future generations.
                    </p>
                    <a class="fs-md text-info" href="#1">

                    <span class="far fa-images fa-lg"></span>
                    <span><strong>Explore</strong></span>

                    </a>

                </div>

            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

    </div>
    <!-- .medium -->

    <div class="narrow mb-5">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
    </div>
    <!-- .narrow -->

    <div class="offset-gutter-x my-7">

        <div class="medium gallery-thumbnails">

            <div class="row matrix-gutter">

                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->
                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->

                <div class="col-sm-6">
                    <a class="enlarge" href="https://placehold.it/1200x800.jpg" data-toggle="lightbox" data-gallery="example-gallery" data-footer="A custom footer text">
                        <img src="https://placehold.it/600x400.jpg" class="img-fluid">
                        <span class="fas fa-expand"></span>
                    </a>
                </div>
                <!-- .col -->

            </div>
            <!-- .row -->

        </div>
        <!-- .medium -->
    
    </div>
    <!-- .offset-gutter-x -->

    <div class="narrow mb-5">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>

        <figure class="right">
            <img src="https://placehold.it/240x360.jpg" alt="Placeholder">
            <figcaption>A caption for the image</figcaption>
        </figure>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
    </div>
    <!-- .narrow --> 

    <div class="narrow mb-5">
        <h2>Here is another headline</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
    </div>
    <!-- .narrow -->

    <div class="offset-gutter-x my-7">

        <div class="row no-gutters">

            <div class="col-lg-6">
                <img src="https://placehold.it/1000x800.jpg" alt="Placeholder">
            </div>
            <!-- .col -->

            <div class="col-lg-6 d-flex bg-info text-white">
                <div class="narrow align-self-center p-3">
                    <h3 class="h4 text-primary">Cheetah Museum</h3>
                    <p class=" fs-md f-sans-serif">
                        Displays at our Cheetah Museum are designed around CCF’s scientific research findings and provide detailed
                        information about the cheetah: its history, physiology, importance within the ecosystem, conflict with humans,
                        and what CCF is doing to ensure the species’ survival for future generations.
                    </p>
                    <a class="fs-md text-primary" href="#1">
                        <span class="far fa-images fa-lg"></span>
                        <span><strong>Explore</strong></span>
                    </a>
                </div>
            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

        <div class="row no-gutters">

            <div class="col-lg-6">
                <img src="https://placehold.it/1000x800.jpg" alt="Placeholder">
            </div>
            <!-- .col -->

            <div class="col-lg-6 d-flex bg-tertiary text-white">
                <div class="narrow align-self-center p-3">
                    <h3 class="h4 text-primary">Model Farm</h3>
                    <p class=" fs-md f-sans-serif">
                        Displays at our Cheetah Museum are designed around CCF’s scientific research findings and provide detailed
                        information about the cheetah: its history, physiology, importance within the ecosystem, conflict with humans,
                        and what CCF is doing to ensure the species’ survival for future generations.
                    </p>
                    <a class="fs-md text-primary" href="#1">
                        <span class="far fa-images fa-lg"></span>
                        <span><strong>Explore</strong></span>
                    </a>
                </div>
            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

        <div class="row no-gutters">

            <div class="col-lg-6">
                <img src="https://placehold.it/1000x800.jpg" alt="Placeholder">
            </div>
            <!-- .col -->

            <div class="col-lg-6 d-flex bg-info text-white">
                <div class="narrow align-self-center p-3">
                    <h3 class="h4 text-primary">Camp Lightfoot</h3>
                    <p class=" fs-md f-sans-serif">
                        Displays at our Cheetah Museum are designed around CCF’s scientific research findings and provide detailed
                        information about the cheetah: its history, physiology, importance within the ecosystem, conflict with humans,
                        and what CCF is doing to ensure the species’ survival for future generations.
                    </p>
                    <a class="fs-md text-primary" href="#1">
                        <span class="far fa-images fa-lg"></span>
                        <span><strong>Explore</strong></span>
                    </a>
                </div>
            </div>
            <!-- .col -->

        </div>
        <!-- .row -->

        <div class="row no-gutters">
            <div class="col-lg-6">
                <img src="https://placehold.it/1000x800.jpg" alt="Placeholder">
            </div>
            <!-- .col -->

            <div class="col-lg-6 d-flex bg-tertiary text-white">
                <div class="narrow align-self-center p-3">
                    <h3 class="h4 text-primary">Biomass Technology Demonstration Center</h3>
                    <p class=" fs-md f-sans-serif">
                        Displays at our Cheetah Museum are designed around CCF’s scientific research findings and provide detailed
                        information about the cheetah: its history, physiology, importance within the ecosystem, conflict with humans,
                        and what CCF is doing to ensure the species’ survival for future generations.
                    </p>
                    <a class="fs-md text-primary" href="#1">
                        <span class="far fa-images fa-lg"></span>
                        <span><strong>Explore</strong></span>
                    </a>
                </div>
            </div>
            <!-- .col -->

        </div>
        <!-- .row -->
        
    </div>
    <!-- .offset-gutter-x -->

    <div class="narrow mb-5">
        <h2>Here is another headline</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue ultricies lacinia. Suspendisse
            pharetra vulputate augue sed pharetra. Etiam pharetra tortor sed tortor eleifend, non varius tortor sodales.
            Duis et molestie diam, id facilisis ligula. Sed eleifend erat orci, sit amet laoreet eros pretium ut. Nullam
            luctus blandit mollis. Pellentesque lacinia magna quis malesuada accumsan. Suspendisse gravida non tortor eu
            tempus. Cras at nunc ac lectus iaculis aliquam ut posuere nibh.
        </p>
    </div>
    <!-- .narrow -->

    <div class="narrow my-5">

        <ul class="extensible-list horizontal justify-content-center">
            <li><a class="btn btn-primary btn-lg" href="#1">Button Link</a></li>
            <li><a class="btn btn-primary btn-lg" href="#1">Button Link</a></li>
        </ul>

    </div>
    <!-- .narrow -->

    <?php endif; ?>

</section>