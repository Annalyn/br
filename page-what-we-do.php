<!-- Section "Team" example 3: 4 Profiles Style 1 -->
<div class="section section-team-2" id="team2">
    <div class="container">
        <div class="text-area">
            <div class="title">
                <h5 class="text-gray">Team Profiles</h5>
                <h2>Our Team</h2>
                <div class="separator-container">
                    <div class="separator line-separator">✻</div>
                </div>
            </div>
        </div>

        <div class="team">
            <div class="row">
                <?php $team_posts = get_posts( array(
                  'post_type' => 'team',
                   'showposts'  => 4,
                  'orderby' => 'key', // Order alphabetically by name
                ) );

                if ( $team_posts ):
                ?>

                <?php 
                  foreach ( $team_posts as $post ): 
                  setup_postdata($post);
                  
                  // Resize and CDNize thumbnails using Automattic Photon service
                  $thumb_src = null;
                  if ( has_post_thumbnail($post->ID) ) {
                    $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
                    $thumb_src = $src[0];
                  }

                  ?>

                  <div class="col-md-3">
                    <div class="member">
                       <?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-circle")); ?>
                       <div class="description">
                            <h2 class="big-text"><?php the_title(); ?></h2>
                            <p class="small-text lead position"><?php the_field('team_position'); ?></p>
                        </div>
                         <div class="social-buttons">
                            <button href="#" class="btn btn-social btn-simple"><i class="fa fa-facebook-square"></i></button>
                            <button href="#" class="btn btn-social btn-simple"><i class="fa fa-twitter"></i></button>
                            <button href="https://ca.linkedin.com/in/erikbuckland" class="btn btn-social btn-simple"><i class="fa fa-linkedin"></i></button>
                        </div>
                      </div>
                  </div>

                  <h2><?php the_field('what_we_do_title'); ?></h2>

                <?php endforeach; ?>  
                
                    <?php endif; ?>

            </div>
        </div>
    </div>
</div>


        <?php
              $my_id = 4057;
              $post_id_4057 = get_post($my_id);
              $content = $post_id_4057->post_content;
              $content = apply_filters('the_content', $content);
              $content = str_replace(']]>', ']]>', $content);
              echo $content;
           ?>