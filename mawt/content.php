    <article class="Content">
      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
        <article>
          <?php the_post_thumbnail(); ?>
          <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <?php the_excerpt(); ?>
          <?php the_category(); ?>
          <p><?php the_category(', '); ?></p>
          <p><?php the_tags(); ?></p>
          <p>
            <?php the_time( get_option('date_format') ); ?>
          </p>
          <p>
            <?php the_author_posts_link(); ?>
          </p>
        </article>
        <hr>
      <?php endwhile; else: ?>
        <p>El contenido solicitado no existe</p>
      <?php endif; ?>
    </article>
    <section class="Pagination  Other">
      <?php //previous_post_link(); ?>
      <?php //next_post_link(); ?>
      <?php echo paginate_links(); ?>
    </section>
