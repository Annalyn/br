<nav class="navbar navbar-default navbar-fixed navbar-transparent" role="navigation">
    
    <div class="container">
      <?php
        if (has_nav_menu('primary_navigation')) : ?>
      <div class="navbar-header">
          <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar bar1"></span>
              <span class="icon-bar bar2"></span>
              <span class="icon-bar bar3"></span>
          </button>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>" <?php the_custom_logo(); ?></a>
      </div>

      <div class="navbar-scroll-to navbar-collapse" id="bs-example-navbar-collapse-1" role="navigation">
          <?php wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-right navbar-uppercase']); ?>
          <?php endif; ?>
      </div>
  </div>
</nav>


