
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

<?php if( have_rows('ccf_global_content') ):

    while ( have_rows('ccf_global_content') ) : the_row(); ?>

    <?php if( get_row_layout() == 'category' ):  

    $headline = get_sub_field('headline');

    ?>

    <h1 class="display-1">HELLO World</h1> 

    <section class="narrow mb-5 mb-xl-6 bg-danger">

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



    <?php endif; /* category */ ?>

<?php endwhile; endif; /* ccf_global_content */ ?>





<section class="narrow mb-5 mb-xl-6">

    <h1 class="font-weight-light display-4 text-muted mb-4">Headquarters</h2>

        <section id="namibia" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold">Namibia</h2>

            <p>The Cheetah Conservation Fund is a registered Trust in Namibia (Incorporated
                Association Not
                For Gain). You can
                <a href="#">donate</a> to the CCF account in Namibia.</p>

            <address class="f-serif">
                <strong>Address:</strong>
                <br> P.O. Box 1755
                <br> Otjiwarongo, Namibia
            </address>

            <ul class="two-column-list-group mb-4">
                <li>
                    <span class="title">Charitable Registration #:</span>
                    <span class="info">21/20002/341</span>
                </li>
                <li>
                    <span class="title">Phone:</span>
                    <span class="info">+264 (0) 67 306 247</span>
                </li>
                <li>
                    <span class="title">Email:</span>
                    <span class="info">
                        <a href="#">info@cheetah.org</a>
                    </span>
                </li>
            </ul>

            <a href="" class="btn btn-lg btn-primary">Contact Us</a>

        </section>
        <!-- #namibia -->

</section>
<!-- .narrow -->

<section class="narrow mb-5 mb-xl-6">

    <h1 class="font-weight-light display-4 text-muted mb-4">Affiliates</h2>

        <section id="australia" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold mb-0">Australia</h2>
            <p class="f-sans-serif text-muted">Epping, Victoria</p>

            <p>Cheetah Conservation Fund Australia is registered as a charity with the Australian Charities
                and Not-for-Profits Commission.</p>

            <ul class="two-column-list-group">
                <li>
                    <span class="title">Charity ABN:</span>
                    <span class="info">143 460 397</span>
                </li>
                <li>
                    <span class="title">Email:</span>
                    <span class="info">
                        <a href="#">australia@cheetah.org</a>
                    </span>
                </li>
                <li>
                    <span class="title">Website</span>
                    <span class="info">
                        <a href="#">
                            <a href="#">www.cheetah.org/australia</a>
                        </a>
                    </span>
                </li>
            </ul>

        </section>
        <!-- #australia -->

        <section id="belgium" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold mb-0">Belgium</h2>
            <p class="f-sans-serif text-muted">Brussels, Belgium</p>

            <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium
                et dolor parturient.</p>

            <ul class="two-column-list-group">
                <li>
                    <span class="title">Charitable Registration #:</span>
                    <span class="info">86513 6824 RR0001</span>
                </li>
                <li>
                    <span class="title">Email:</span>
                    <span class="info">
                        <a href="mailTo:info@cheetahconservationfund.ca">belgium@cheetah.org</a>
                    </span>
                </li>
                <li>
                    <span class="title">Website:</span>
                    <span class="info">
                        <a href="#">www.cheetah.org/belgium</a>
                    </span>
                </li>
            </ul>

        </section>
        <!-- #belgium -->

        <section id="canada" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold mb-0">Canada</h2>
            <p class="f-sans-serif text-muted">London, Ontario</p>

            <p>Cheetah Conservation Fund Canada is a registered charity run by volunteers, and directs 98% of
                all funds to programming in Namibia.</p>

            <ul class="two-column-list-group">
                <li>
                    <span class="title">Charitable Registration #:</span>
                    <span class="info">86513 6824 RR0001</span>
                </li>
                <li>
                    <span class="title">Phone:</span>
                    <span class="info">+1-613-562-5874</span>
                </li>
                <li>
                    <span class="title">Email:</span>
                    <span class="info">
                        <a href="mailTo:info@cheetahconservationfund.ca">canada@cheetah.org</a>
                    </span>
                </li>
                <li>
                    <span class="title">Website:</span>
                    <span class="info">
                        <a href="#">www.cheetah.org/canada</a>
                    </span>
                </li>
            </ul>

        </section>
        <!-- #canada -->

        <section id="italy" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold mb-0">Italy</h2>
            <p class="f-sans-serif text-muted">Biella, Italy</p>

            <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium
                et dolor parturient.</p>

            <ul class="two-column-list-group">
                <li>
                    <span class="title">Charitable Registration #:</span>
                    <span class="info">86513 6824 RR0001</span>
                </li>
                <li>
                    <span class="title">Phone:</span>
                    <span class="info">+39 33 93534001</span>
                </li>
                <li>
                    <span class="title">Email:</span>
                    <span class="info">
                        <a href="#">italia@cheetah.org</a>
                    </span>
                </li>
                <li>
                    <span class="title">Website:</span>
                    <span class="info">
                        <a href="#">www.cheetah.org/italia</a>
                    </span>
                </li>
            </ul>

        </section>
        <!-- #italy -->

        <section id="japan" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold mb-0">Japan</h2>
            <p class="f-sans-serif text-muted">Tokyo, Japan</p>

            <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium
                et dolor parturient.</p>

            <ul class="two-column-list-group">
                <li>
                    <span class="title">Email:</span>
                    <span class="info">
                        <a href="#">japan@cheetah.org</a>
                    </span>
                </li>
                <li>
                    <span class="title">Website:</span>
                    <span class="info">
                        <a href="#">www.cheetah.org/japan</a>
                    </span>
                </li>
            </ul>

        </section>
        <!-- #japan -->

        <section id="uk" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold mb-0">UK</h2>
            <p class="f-sans-serif text-muted">Toddington, Bedfordshire</p>

            <p>The mission of the Cheetah Conservation Fund UK is to increase awareness in the UK about the
                cheetah and the threats it faces in the wild.</p>

            <ul class="two-column-list-group">
                <li>
                    <span class="title">Charitable Registration #:</span>
                    <span class="info">86513 6824 RR0001</span>
                </li>
                <li>
                    <span class="title">Phone:</span>
                    <span class="info">+44 7912 194731</span>
                <li>
                    <span class="title">Email:</span>
                    <span class="info">
                        <a href="#">uk@cheetah.org</a>
                    </span>
                </li>
                <li>
                    <span class="title">Website:</span>
                    <span class="info">
                        <a href="#">www.cheetah.org/uk</a>
                    </span>
                </li>
            </ul>

        </section>
        <!-- #uk -->

        <section id="usa" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold mb-0">USA</h2>
            <p class="f-sans-serif text-muted">Alexandria, Virginia</p>

            <p>CCF USA is a registered non profit 501(c) 3. Donations are fully tax-deductible in the United
                States if given to a CCF USA office and/or deposited to a U.S. bank. In-kind donations (in
                arrangement with CCF) may also be claimed against tax.</p>

            <address class="f-serif">
                <strong>Address:</strong>
                <br> 200 Daingerfield Rd.
                <br> Suite 200
                <br> Alexandria, VA 22314
            </address>

            <ul class="two-column-list-group">
                <li>
                    <span class="title">Charitable Registration #:</span>
                    <span class="info">31-1726923</span>
                </li>
                <li>
                    <span class="title">Phone:</span>
                    <span class="info">1 (866) 909-3399</span>
                </li>
                <li>
                    <span class="title">Email:</span>
                    <span class="info">
                        <a href="#">usa@cheetah.org</a>
                    </span>
                </li>
                <li>
                    <span class="title">Website:</span>
                    <span class="info">
                        <a href="#">www.cheetah.org/usa</a>
                    </span>
                </li>
            </ul>

        </section>
        <!-- #usa -->

</section>
<!-- .narrow -->

<section class="narrow mb-5 mb-xl-6">

    <h1 class="font-weight-light display-4 text-muted mb-4">Partner Organisations</h2>

        <section id="germany" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold mb-0">AGA Artenschutz</h2>
            <p class="f-sans-serif text-muted">Korntal-Münchingen, Germany</p>

            <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium
                et dolor parturient.</p>

            <ul class="two-column-list-group">
                <li>
                    <span class="title">Website:</span>
                    <span class="info">
                        <a href="#">www.aga-artenschutz.de</a>
                    </span>
                </li>
            </ul>

        </section>
        <!-- #germany -->

        <section id="france" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold mb-0">AMIFELINS</h2>
            <p class="f-sans-serif text-muted">Puteaux, France</p>

            <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium
                et dolor parturient.</p>

            <ul class="two-column-list-group">
                <li>
                    <span class="title">Website:</span>
                    <span class="info">
                        <a href="#">www.amifelins.fr</a>
                    </span>
                </li>
            </ul>

        </section>
        <!-- #france -->

        <section id="the-netherlands" class="mb-5 mb-xl-6">

            <h2 class="font-weight-bold mb-0">Stichting SPOTS</h2>
            <p class="f-sans-serif text-muted">Etten-Leur, Netherlands</p>

            <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium
                et dolor parturient.</p>

            <ul class="two-column-list-group">
                <li>
                    <span class="title">Website:</span>
                    <span class="info">
                        <a href="#">www.stichtingspots.nl</a>
                    </span>
                </li>
            </ul>

        </section>
        <!-- #the-netherlands -->

</section>
<!-- .narrow -->
