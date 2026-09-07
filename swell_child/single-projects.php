<?php get_header('custom'); ?>

<!-- Main
====================================================================== -->
<main class="subpage-projects-detail">
  <!-- Subpage Title
  ====================================================================== -->
  <div class="contents mb-lg">
    <div class="container-middle">

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class('projects__item mb-md'); ?>>
        <h1 class="hd-sm tx-center mb-4xs"><?php the_title(); ?></h1>

  <?php if ( get_field('company_name') ) : ?>
        <p class="project-company tx-center tx-xs mb-md">
          <?php the_field('company_name'); ?>
        </p>
  <?php endif; ?>

  <?php if ( has_post_thumbnail() ) : ?>
        <div class="projects__thumb tx-center mb-md">
          <?php the_post_thumbnail('large'); ?>
        </div>
  <?php endif; ?>

        <div class="post_content tx-4xs md-3xs">
          <?php the_content(); ?>
        </div>
      </article>
  <?php endwhile; ?>
<?php endif; ?>

      <a href="<?php echo esc_url( get_post_type_archive_link('projects') ); ?>" class="tx-4xs">
        事例紹介 一覧へ
      </a>
    </div>
  </div>

  <!-- PageTop
  ======================================== -->
  <?php get_template_part('pagetop'); ?>
</main>

<?php get_footer('custom'); ?>
