<?php if( have_rows('post_content') ):

    while ( have_rows('post_content') ) : the_row(); ?>

        <section class="mb-5">

            <?php if( get_row_layout() == 'text_block' ):

            $wysiwyg = get_sub_field('wysiwyg'); ?>

            <div class="narrow mb-6">
                <?php echo $wysiwyg; ?>
            </div>

            <?php elseif( get_row_layout() == 'figure_block' ): 

            $figure_inline_single = get_sub_field('figure_inline_single');

            $image = $figure_inline_single['image'];
            $caption = $figure_inline_single['caption'];

            ?>

            <div class="narrow mb-5">
                <figure class="figure my-0">
                    <a href="<?php echo $image['url']; ?>" class="figure-img" title="A caption for the above image.">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                        <span class="fas fa-search-plus"></span>
                    </a>
                    <figcaption class="figure-caption"><?php echo $caption; ?></figcaption>
                </figure>
            </div>
            <!-- .narrow -->

            <?php endif; /* text_block */ ?>

        </section>
    
<?php endwhile; endif; /* post_content */ ?>