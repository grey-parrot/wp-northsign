<?php get_header('custom'); ?>

<!-- Main 
====================================================================== -->
<main class="subpage-projects">
  <!-- Subpage Title
  ====================================================================== -->
  <div class="subpage-title">
    <h1 class="subpage-title__txt hd-xs tx-center">事例紹介</h1>
    <p class="subpage-title__txt-en lexend tx-xs tx-center">Projects</p>
  </div>

  <div class="contents mb-lg">
    <div class="projects-grid">

<?php if ( have_posts() ) : ?>
      <div class="projects-grid__items">
  <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('projects-grid__item'); ?>>
          <a class="projects-grid__link" href="<?php the_permalink(); ?>">
    <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail('large', [ 'class' => 'projects-grid__img', 'alt' => '' ]); ?>
    <?php endif; ?>
            <div class="projects-grid__caption">
    <?php if ( get_field('company_name') ) : ?>
              <p class="projects-grid__company"><?php the_field('company_name'); ?> 様</p>
    <?php endif; ?>
              <h2 class="projects-grid__title"><?php the_title(); ?></h2>
            </div>
          </a>
        </article>
  <?php endwhile; ?>
      </div>

      <div class="pagination">
        <?php the_posts_pagination(); ?>
      </div>

<?php else : ?>
      <p>投稿がありません。</p>
<?php endif; ?>

    </div>
  </div>

  <!-- PageTop
  ======================================== -->
  <?php get_template_part('pagetop'); ?>
</main>

<?php get_footer('custom'); ?>