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
    <div class="container-middle">

<?php if ( have_posts() ) : ?>
      <div class="list-projects__items">
  <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('list-projects__item'); ?>>
          <div class="list-projects__inner">
            <!-- 左：テキスト -->
            <div class="list-projects__body">
              <h2 class="hd-2xs mb-4xs">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>

    <?php if ( get_field('company_name') ) : ?>
              <p class="project-company tx-3xs mb-4xs">
                <?php the_field('company_name'); ?>
              </p>
    <?php endif; ?>

              <div class="post_content tx-4xs">
                <?php the_excerpt(); ?>
              </div>
            </div>

    <!-- 右：アイキャッチ -->
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="list-projects__thumb">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('medium'); ?>
        </a>
      </div>
    <?php endif; ?>

          </div>
        </article>
  <?php endwhile; ?>

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