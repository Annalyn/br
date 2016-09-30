<?php
/**
 * Template Name: Front Page
 */

?>

<?php while (have_posts()) : the_post(); ?>
  	<div class="section section-header" id="header4">
        <div id="video-container-4" class="full-image pattern-image filter filter-gradient-gold" data-color="gold">
            
            <div class="wrap-container">
                <div class="content">
                    <h1><span style="color: #000;">Buckland</span> <span style="color: #FF8400">+</span> <span style="color: #000;">Rempel</span></h1>
                    <h5>Moving Recruitment Forward</h5>
                </div>
            </div> 
        <video class="bgvid" preload="auto" loop="loop" autoplay="false" muted="muted" volume="0"><source src="/app/themes/br/dist/video/working-site.webm" type="video/webm" responsive-src="assets/img/rubik_responsive.jpg"><source src="/app/themes/br/dist/video/working-site.mp4" type="video/mp4">Video not supported</video></div>
        <a href="" data-scroll="true" data-id="#whoWeAre" class="scroll-arrow hidden-xs hidden-sm">
            <i class="fa fa-angle-down"></i>
        </a>
    </div>
 </div>

  <?php endwhile; ?>

<a id="WhoWeAre"></a>
<div class="section section-we-are-2 radu" id="whoWeAre">
    <div class="text-area">
         <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="title add-animation">
                    <h2><?php the_field('who_we_are_title'); ?></h2>    
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-7 col-md-offset-1"> 
                <?php get_template_part('templates/content', 'page'); ?>
                <div class="project add-animation-stopped animation-1 animate">
                      <a class="over-area color-1" href="javascript:void(0)" onClick="rubik.showModal(this)" data-target="project_1">
                        <p class="btn">Read More</p>
                      </a>
                </div>
              </div>
            </div>
        </div>

    </div>
</div>


<?php include('templates/team-profiles.php'); ?>
<?php include('templates/what-we-do.php'); ?>

<?php include('templates/clients.php'); ?>
<?php include('templates/facts.php'); ?>
<?php include('templates/contact.php'); ?>

  </div>
</div>










