
<div class="my-5 mx-n2">

    <figure class="w-100">

        <div class="figure-info">
            <div id="map-affiliates"></div>
        </div>

        <div class="container py-1">
            <div class="narrow">
                <figcaption>

                    <ul class="extensible-list horizontal responsive-sm mb-0">
                        <li>
                            <span class="fas fas fa-circle office"></span>
                            <span class="mx-1">Headquarters</span> 
                        </li>
                        <li>
                            <span class="fas fas fa-circle affiliate"></span>
                            <span class="mx-1">Affiliates</span> 
                        </li>
                        <li>
                            <span class="fas fas fa-circle chapter"></span>
                            <span class="mx-1">Chapters</span> 
                        </li>
                        <li>
                            <span class="fas fas fa-circle partner-organization"></span>
                            <span class="mx-1">Partner Organisations</span> 
                        </li>
                    </ul>
   
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

<?php if( have_rows('ccf_global_list') ):

    while ( have_rows('ccf_global_list') ) : the_row();
    
    $headline = get_sub_field('headline');
    
    ?>

    <section class="narrow mb-5 mb-xl-6 bg-dangere">

        <h1 class="display-4 font-weight-light text-muted mb-4"><?php echo $headline; ?></h2>

        <?php if( have_rows('section') ): while( have_rows('section') ): the_row();

        $id = get_sub_field('id');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        
        ?>

        <section class="mb-5 mb-xl-6" <?php if($id !== '') echo 'id="' . $id . '"' ?>>

            <h2><?php echo $title; ?></h2>
            <p><?php echo $description; ?></p>

            <?php if( have_rows('details') ): ?>

            <div class="my-4 border-bottom">
                    
            <?php while( have_rows('details') ): the_row();

            $type = get_sub_field('type');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $link = get_sub_field('link');

            ?>
        
                <dl class="row no-gutters justify-content-between border-top py-2 mb-0 fs-md">

                    <dt class="col-sm-auto">
                        <?php echo $title; ?>
                    </dt>

                    <?php if ( $type == 'Static Text' ) : ?>
                    
                    <dd class="col-sm-auto">
                        <?php echo $text; ?>
                    </dd>

                    <?php elseif ( $type == 'Link' ) : ?>

                    <dd class="col-sm-auto">
                        <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                    </dd>

                    <?php endif; ?>
                </dl>

            <?php endwhile; ?>

            </div>
            <!-- .my-5 -->

            <?php endif; /* details */ ?>

        </section>
        <!-- affiliate -->

        <?php endwhile; endif; /* section */ ?>

    </section>
    <!-- .narrow -->

<?php endwhile; endif; /* ccf_global_content */ ?>