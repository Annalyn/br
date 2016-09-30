<!-- Section "Clients" example 1: 4 Columns Logos -->
<div class="section section-clients-1" id="clients1">
    <div class="container">
        <div class="text-area">
            <div class="title">
                <h5 class="text-gray"><?php the_field('client_section_subtitle'); ?></h5>
                <h2><?php the_field('client_section_heading'); ?></h2>
                <div class="separator-container">
                    <div class="separator line-separator">✻</div>
                </div>
                <p class="add-animation animation-1">Buckland + Rempel has worked with global and local companies to locate, assess and hire their top talent.  We have completed over 550 assignments globally with large and small companies.  We have particular expertise in recruiting for large international development projects.</p>
            </div>
        </div>
        <div class="list-logos">
            <div class="row">
				<?php if( have_rows('clients') ): ?>

					<?php while( have_rows('clients') ): the_row(); 

						$image = get_sub_field('logo');

						?>

						<div class="col-md-3">
							<div class="logo">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							</div>
						</div>

					<?php endwhile; ?>

				<?php endif; ?>
			</div>
		</div>
	</div>
</div>