  <!-- Section "Team" example 3: 4 Profiles Style 1 -->
<div class="section section-team-2" id="team2">
  <div class="container">
      <div class="text-area">
          <div class="title">
              <h5 class="text-gray"><?php the_field('team_section_subtitle'); ?></h5>
              <h2><?php the_field('team_section_heading'); ?></h2>
              <div class="separator-container">
                  <div class="separator line-separator">✻</div>
              </div>
          </div>
      </div>
      <div class="team">
          <div class="row">
            <?php if( have_rows('team_member') ): ?>

              <?php while( have_rows('team_member') ): the_row(); 

                // vars
                $image = get_sub_field('team_member_image');
                $name = get_sub_field('team_member_name');
                $position = get_sub_field('team_member_position');

                ?>

                <div class="col-md-3">
                  <div class="member">
                     <div class="member project add-animation-stopped animation-1 animate"">
                        <a class="over-area color-1" href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_3">
                          <img class="img-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        </a>
                       <div class="description">
                          <h3 class="big-text"><?php echo "$name"; ?></h3>
                          <p class="small-text"><?php echo "$position"; ?></p>
                       </div>
                        <div class="social-buttons">
                          <button href="#" class="btn btn-social btn-simple"><i class="fa fa-facebook-square"></i></button>
                          <button href="#" class="btn btn-social btn-simple"><i class="fa fa-twitter"></i></button>
                          <button href="https://ca.linkedin.com/in/erikbuckland" class="btn btn-social btn-simple"><i class="fa fa-linkedin"></i></button>
                      </div>
                     </div>
                  </div>
                </div>

              <?php endwhile; ?>

            <?php endif; ?>
          </div>
      </div>
  </div>

