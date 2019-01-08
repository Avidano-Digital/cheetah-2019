<?php $featured_videos = get_field('featured_videos');	

$headline = $featured_videos['headline'];
$videos = $featured_videos['videos'];

$post_objects = $videos;

if( $featured_videos ): ?>

<section class="container-fluid" id="videos">

    <div class="wide px-lg-2">

        <header class="row align-items-end justify-content-between mb-3">
            <div class="col-md-auto">
                <h3 class="display-4"><?php echo $headline; ?></h3>
            </div>
            <div class="col-md-auto">
                <a class="link text-body" href="#">All Videos</a>
            </div>
        </header>

        <div class="row matrix-border">

            <?php

            if( $post_objects ) :
            foreach($post_objects as $post) :
            setup_postdata( $post ); 

            $video_url = get_field('video_url');
            $video_id = substr( strrchr( $video_url, '/' ), 1 );
            ?>

            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video_id;?>" frameborder="0" allowTransparency="true" allowfullscreen="true"></iframe>
                </div>
            </div>
            <!-- .col -->

            <?php endforeach; endif; wp_reset_postdata(); /* post_objects */?>

        </div>
        <!-- .matrix-border -->

    </div>
    <!-- .wide -->

</section>
<!-- #videos -->

<?php endif; /* featured_videos */ ?>