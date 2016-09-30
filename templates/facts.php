<!-- Section "Numbers" example 3: Text & Parallax -->
<div class="section section-numbers-2" id="numbers2">
    <div class="parallax pattern-image">
        <img src="<?php the_field( 'facts_background_image' ); ?>" alt="<?php the_title(); ?>"/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 text-center">
                <div class="description">
                    <div class="title">
                        <h5><?php the_field('facts_section_subtitle'); ?></h5>
                        <h2><?php the_field('facts_section_heading'); ?></h2>
                        <div class="separator-container">
                            <div class="separator line-separator">✻</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
            <div class="row">
                <?php if( have_rows('facts_about_us') ): ?>

                  <?php while( have_rows('facts_about_us') ): the_row(); 

                    // vars
                    $heading = get_sub_field('fact_heading');
                    $description = get_sub_field('fact_description');
                    $number = get_sub_field('fact_numbers');

                    ?>

                    <div class="col-md-4 text-center">
                        <div class="card card-plain">
                            <h3><?php echo "$heading"; ?></h3>
                            <h5><?php echo "$description"; ?></h5>
                            <div class="number" id="customersNo">
                                <?php echo "$number"; ?>
                            </div>
                        </div>
                    </div>

                  <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- End Section "Numbers" example 3: Text & Parallax -->