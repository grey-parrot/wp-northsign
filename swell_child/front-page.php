<?php get_header('custom'); ?>

<!-- Main
====================================================================== -->
<main class="front-page">

  <!-- Top Hero
    ====================================================================== -->
  <section class="top-hero">
    <div class="top-hero__wrapper">
      <div class="top-hero__wrapper-image">
        <img
          class="top-hero__image"
          src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-hero.jpg"
          alt="起業家のアイディアをイノベーションに変える、ノースサインのブランディングイメージ"
          loading="eager"
          fetchpriority="high"
          decoding="async"
        />
      </div>
      <div class="top-hero__txt">
        <h1 class="top-hero__catch hd-sm lh-13 mb-3xs">
          起業家のアイディアを<br />
          イノベーションに変える。
        </h1>
        <p class="top-hero__txt1 tx-xs lh-13 mb-3xs">
          スタートアップの意思決定に並走する、<br />
          協創型デザインパートナー。
        </p>
        <p class="top-hero__txt2 tx-4xs lh-13">
          デザインを「作る」前に、<br />
          何を作らないかから一緒に考えます。
        </p>
      </div>
    </div>
  </section>

  <!-- News & Events
    ======================================== -->
  <section class="top-news-events section">
    <div class="container">

      <h2 class="top-news-events__title-en lexend hd-xs mb-3xs">
        News & Events
      </h2>
      <div class="top-news-events__inner">
<?php
$news_events = new WP_Query([
  'post_type'      => 'news-events',
  'posts_per_page' => 1,
  'no_found_rows'  => true, // パフォーマンス最適化
]);
?>
<?php if ( $news_events->have_posts() ) : ?>
        <dl class="top-news-events__list">
<?php while ( $news_events->have_posts() ) : $news_events->the_post(); ?>
          <dt class="top-news-events__date tx-3xs">
            <time datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
              <?php echo esc_html( get_the_date('Y/m/d') ); ?>
            </time>
          </dt>
          <dd class="top-news-events__item tx-3xs">            
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>   
          </dd>
<?php endwhile; ?>
        </dl>
        <a href="<?php echo esc_url( get_post_type_archive_link('news-events') ); ?>" class="top-news-events__more more tx-3xs">
          すべて見る
        </a>
<?php endif; ?>
<?php wp_reset_postdata(); ?>    
      </div>
    </div>
  </section>

  <div class="contents">
    <!-- Concept
    ======================================== -->
    <section class="top-concept">
      <div class="container">
        <div class="top-concept__wrapper">
          <div class="top-concept__wrapper-image">
            <img
              class="top-concept__image"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-concept.png"
              alt="経営のそばで考え続けるパートナーとしてのコンセプトイメージ"
              loading="lazy"
              decoding="async"
            />
          </div>
          <div class="top-concept__wrapper-txt">
            <h2 class="top-concept__title lexend hd-xs mb-3xs">Concept</h2>
            <p class="top-concept__txt1 tx-sm mb-2xs">
              経営のそばで、<br />
              考え続けるパートナーとして。
            </p>
            <p class="top-concept__txt2 tx-3xs mb-2xs">
              起業家の頭の中にあるアイディアを整理し、<br />
              ブランドの軸を共に探し、世界観を構築していく。<br />
              それが、私たちの大好きな仕事です。<br /><br />
              私たちは、デザインをただ見た目を装飾するものだとは<br />
              考えていません。<br />
              経営戦略と密接に関わるものだと捉えています。<br /><br />
              従来型の発注者・受注者の関係性を超えて、<br />
              単発の「納品」にとどまらず、<br />
              長期的に、貴社のブランドやサービスづくりに伴走します。
            </p>
            <div class="top-common__wrapper-more">
              <a href="/" class="top-common__more more tx-3xs"
                >私たちについて</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 私たちが伴走できること
    ======================================== -->
    <section class="top-we-support">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            私たちが伴走できること
          </h2>
          <p class="top-common__title-en lexend tx-3xs">What we support</p>
        </div>
        <div class="top-we-support__items mb-2xs">
          <div class="top-we-support__item box">
            <div class="top-we-support__wrapper-image mb-2xs">
              <img
                class="top-we-support__image"
                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/ico-flag.png"
                alt="ブランド構築支援のアイコン"
                loading="lazy"
                decoding="async"
              />
            </div>
            <h3 class="top-we-support__item-title hd-2xs tx-center mb-2xs">
              ブランド構築支援
            </h3>
            <p class="top-we-support__item-txt tx-4xs">
              事業の軸や判断基準を整理し、<br />
              迷わず進めるブランドの土台をつくります。<br /><br />
              企業やサービスの状況に合わせて最適なプログラムをご提案いたします。
            </p>
          </div>
          <div class="top-we-support__item box">
            <div class="top-we-support__wrapper-image mb-2xs">
              <img
                class="top-we-support__image"
                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/ico-design.png"
                alt="デザイン支援のアイコン"
                loading="lazy"
                decoding="async"
              />
            </div>
            <h3 class="top-we-support__item-title hd-2xs tx-center mb-2xs">
              デザイン支援
            </h3>
            <p class="top-we-support__item-txt tx-4xs">
              事業の状況や目的を共有しながら、<br />
              何をつくるか以前に、何をつくらないかを一緒に考え、UI/UXやWeb、マーケティングに関わる設計を支援します。<br /><br />
              UI/UX設計やWebデザインを中心に、<br />
              マーケデザイン、アニメーションでの作成なども得意としております。
            </p>
          </div>
          <div class="top-we-support__item box">
            <div class="top-we-support__wrapper-image mb-2xs">
              <img
                class="top-we-support__image"
                src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/ico-mortarboard.png"
                alt="講座・研修のアイコン"
                loading="lazy"
                decoding="async"
              />
            </div>
            <h3 class="top-we-support__item-title hd-2xs tx-center mb-2xs">
              講座・研修
            </h3>
            <p class="top-we-support__item-txt tx-4xs">
              デザイン業務を内製化したい企業様や、自社で制作フローを構築する際に、デザイン研修やサポートをさせていただいております。<br /><br />
              Figma、Canva、Webノーコードツールなど、最新ツールに対応しております。
            </p>
          </div>
        </div>
        <div class="top-common__wrapper-more">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('services'))); ?>" class="top-common__more more tx-3xs">サービス詳細</a>
        </div>
      </div>
    </section>

    <!-- 私たちの関わり方
    ======================================== -->
    <section class="top-we-work">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            私たちの関わり方
          </h2>
          <p class="top-common__title-en lexend tx-3xs">How we work</p>
        </div>
        <div class="top-we-work__items mt-2xs">
          <div class="top-we-work__item mb-lg">
            <h3 class="top-we-work__item-title hd-2xs mb-2xs">
              1.一緒に考え、一緒に決める<span>（共創型）</span>
            </h3>
            <img
              class="mq-md-up top-we-support__image mb-xs"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-we-work1__pc.png"
              alt="一緒に考え、一緒に決める共創型の関わり方を表す図（PC表示）"
              loading="lazy"
              decoding="async"
            />
            <img
              class="mq-md-down top-we-support__image mb-xs"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-we-work1__sp.png"
              alt="一緒に考え、一緒に決める共創型の関わり方を表す図（スマートフォン表示）"
              loading="lazy"
              decoding="async"
            />
            <p class="top-we-work__item-txt tx-4xs">
              私たちは、要件やアイディアを一方的に受け取り、そのまま形にする関わり方はしていません。<br /><br />
              経営者やチームの思考を共有しながら、どこに向かうのか、何を優先するのか。<br />
              ときには「何をやらないか」も含めて、一緒に考え、一緒に決めていきます。<br /><br />
              そのため、役割は「発注者／受注者」ではなく、同じ方向を向いて進むパートナーだと考えています。
            </p>
          </div>
          <div class="top-we-work__item">
            <h3 class="top-we-work__item-title hd-2xs mb-2xs">
              2.試しながら前に進める<span>（アジャイル型）</span>
            </h3>
            <img
              class="mq-md-up top-we-support__image mb-xs"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-we-work2__pc.png"
              alt="試しながら前に進めるアジャイル型の関わり方を表す図（PC表示）"
              loading="lazy"
              decoding="async"
            />
            <img
              class="mq-md-down top-we-support__image mb-xs"
              src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/top/img-top-we-work2__sp.png"
              alt="試しながら前に進めるアジャイル型の関わり方を表す図（スマートフォン表示）"
              loading="lazy"
              decoding="async"
            />
            <p class="top-we-work__item-txt tx-4xs">
              私たちは、最初からすべてを決め切る進め方は選んでいません。<br /><br />
              スタートアップの多くは、進めながら状況が変わり、考えや仮説も更新されていきます。<br />
              だからこそ、小さく試し、学びながら、次の一手を決めていく進め方を大切にしています。<br /><br />
              計画どおりに進めることよりも、事業が前に進むことを優先する。<br />
              そのための方法として、私たちはアジャイルな進め方を採用しています。
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- このような方のお役に立てます
    ======================================== -->
    <section class="top-who-for">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            このような方のお役に立てます
          </h2>
          <p class="top-common__title-en lexend tx-3xs">Who this is for</p>
        </div>
        <div class="top-who-for__items">
          <div class="top-who-for__item box">
            <h3 class="top-who-for__item-title hd-2xs mb-2xs">
              向いている方
            </h3>
            <ul class="top-who-for__item-lists">
              <li class="top-who-for__item-list tx-4xs mb-4xs">
                デザインを「見た目」ではなく、経営の一部として捉えている方
              </li>
              <li class="top-who-for__item-list tx-4xs mb-4xs">
                正解をすぐに求めるより、考える時間を大切にしたい方
              </li>
              <li class="top-who-for__item-list tx-4xs mb-4xs">
                アイディアや構想を、事業として整理していきたい方
              </li>
              <li class="top-who-for__item-list tx-4xs mb-4xs">
                状況の変化を前提に、柔軟に進めたいと考えている方
              </li>
              <li class="top-who-for__item-list tx-4xs mb-4xs">
                経験豊富なデザイナーにアイディア作りから伴走して欲しい方
              </li>
              <li class="top-who-for__item-list tx-4xs">
                単発ではなく、長期的にブランドやサービスを育てていきたい方
              </li>
            </ul>
          </div>
          <div class="top-who-for__item box">
            <h3 class="top-who-for__item-title hd-2xs mb-2xs">
              向いていない方
            </h3>
            <ul class="top-who-for__item-lists">
              <li class="top-who-for__item-list tx-4xs mb-4xs">
                仕様が決まっていて、見た目のデザインだけ作って欲しい
              </li>
              <li class="top-who-for__item-list tx-4xs mb-4xs">
                とにかく安く作りたい
              </li>
              <li class="top-who-for__item-list tx-4xs mb-4xs">
                丸投げしたい
              </li>
              <li class="top-who-for__item-list tx-4xs">
                単発で成果だけ欲しい
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- プロジェクト事例
    ======================================== -->
    <section class="top-projects">
      <div class="container-middle">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            プロジェクト事例
          </h2>
          <p class="top-common__title-en lexend tx-3xs">Projects</p>
        </div>
        <div class="top-projects__items mb-xs">
<?php
$args = array(
  'post_type'      => 'projects',
  'posts_per_page' => 3, // 表示件数
  'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
);

$projects_query = new WP_Query($args);
?>

<?php if ( $projects_query->have_posts() ) : ?>
  <div class="list-projects__items">

    <?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); ?>
      <article <?php post_class('list-projects__item'); ?>>
        <div class="list-projects__inner">

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

            <div class="post_content tx-4xs mb-3xs">
              <?php the_excerpt(); ?>
            </div>
          </div>
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
  </div>

  <div class="pagination">
    <?php
      echo paginate_links(array(
        'total' => $projects_query->max_num_pages
      ));
    ?>
  </div>

<?php else : ?>
  <p>投稿がありません。</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

        </div>
        <div class="top-common__wrapper-more">
          <a href="<?php echo esc_url( get_post_type_archive_link('projects') ); ?>" class="top-common__more more tx-3xs">もっと見る</a>
        </div>
      </div>
    </section>

    <!-- デザイン顧問サービス｜料金プラン
    ======================================== -->
    <section class="top-plans">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            デザイン顧問サービス｜料金プラン
          </h2>
          <p class="top-common__title-en lexend tx-3xs mb-md">
            Design Advisory Plans
          </p>
          <p class="top-plans__txt tx-3xs tx-center mb-md">
            貴社の事業を継続的に理解し、伴走しながら支援を行うため、<br
              class="mq-md-up"
            />
            月額制でのデザイン顧問サービスをご用意しています。
          </p>
        </div>
        <div class="top-plans__items mb-xs">
          <div class="top-plans__item box">
            <p class="top-plans__item-txt1 tx-4xs mb-4xs">
              考えるための壁打ち・判断の整理
            </p>
            <h3 class="top-plans__item-title hd-xs mb-4xs">相談プラン</h3>
            <h4 class="top-plans__item-price hd-2xs mb-4xs">5万円/月額</h4>
            <p class="top-plans__item-txt2 tx-4xs mb-5xs">
              デザイナー不在の組織で、デザインの相談や、ツールの使い方のサポートなど、継続的なサポートを必要とする企業・組織のためのプランです。デザインの作る/作らないの判断や、仕様を考えるお手伝いも可能です。
            </p>
          </div>
          <div class="top-plans__item box">
            <p class="top-plans__item-txt1 tx-4xs mb-4xs">
              意思決定に並走し、プロジェクトを前へ
            </p>
            <h3 class="top-plans__item-title hd-xs mb-4xs">伴走プラン</h3>
            <h4 class="top-plans__item-price hd-2xs mb-4xs">10万円/月額</h4>
            <p class="top-plans__item-txt2 tx-4xs mb-5xs">
              選ばれるブランド作りを目指して、戦略の部分をお手伝いするプランです。厳選したフレームワークを使い、様々な分析を行ったり、デザインの方向性を決めるお手伝いをします。
            </p>
          </div>
          <div class="top-plans__item box">
            <p class="top-plans__item-txt1 tx-4xs mb-4xs">外部CDO</p>
            <h3 class="top-plans__item-title hd-xs mb-4xs">
              戦略パートナー
            </h3>
            <h4 class="top-plans__item-price hd-2xs mb-4xs">15万円/月額</h4>
            <p class="top-plans__item-txt2 tx-4xs mb-5xs">
              創業3年以上の企業で、デザイン責任者が不在の組織で、ブランドを維持し、発展したい組織のために、経営に直結するブランド支援や、デザインシステムの構築をサポートいたします。
            </p>
          </div>
        </div>
        <p class="top-plans__comments tx-4xs mb-md">
          ※ 制作は別途お見積りになります。お問い合わせください。
        </p>
        <div class="top-plans__wrapper-link tx-center">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('services'))); ?>"
            class="top-plans__link more tx-xs"
            >サービス詳細はこちら</a
          >
        </div>
      </div>
    </section>

    <!-- ブログ
    ======================================== -->
    <section class="top-blog">
      <div class="container-middle">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">ブログ</h2>
          <p class="top-common__title-en lexend tx-3xs">Blog</p>
        </div>

<?php
$swell_posts = new WP_Query([
  'post_type'      => 'post',
  'posts_per_page' => 3,
  'no_found_rows'  => true,
]);
?>

<?php if ( $swell_posts->have_posts() ) : ?>

        <div class="front-posts__items">
  <?php while ( $swell_posts->have_posts() ) : $swell_posts->the_post(); ?>

          <article <?php post_class('front-posts__item'); ?>>
            <div class="front-posts__inner">

              <!-- 左：テキスト -->
              <div class="front-posts__body">
                <h3 class="hd-2xs mb-2xs">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <div class="tx-4xs mb-4xs">
                  <?php the_excerpt(); ?>
                </div>
                <p class="front-posts__date tx-5xs">
                  <?php echo esc_html( get_the_date('Y.m.d') ); ?>
                </p>
              </div>

              <!-- 右：アイキャッチ -->
    <?php if ( has_post_thumbnail() ) : ?>

              <div class="front-posts__thumb">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium'); ?>
                </a>
              </div>

    <?php endif; ?>

            </div>
          </article>
  
  <?php endwhile; ?>

        </div>

        <div class="top-common__wrapper-more">
          <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>"class="top-common__more more tx-3xs">
            投稿一覧へ
          </a>
        </div>

<?php endif; ?>
<?php wp_reset_postdata(); ?>

      </div>
    </section>

    <!-- 相談してみる
    ======================================== -->
    <section class="top-contact mb-lg">
      <div class="container">
        <div class="top-common__title mb-md">
          <h2 class="top-common__title-ja hd-xs lh-1 mb-5xs">
            相談してみる
          </h2>
          <p class="top-common__title-en lexend tx-3xs">Contact</p>
        </div>
        <div class="top-contact__clock">
          <div class="bg-watch">
            <span class="watch-center"></span>
            <span class="watch-hour"></span>
            <span class="watch-min"></span>
            <span class="watch-sec"></span>
          </div>
        </div>
        <div class="top-contact__item">
          <p class="top-contact__txt tx-4xs tx-center mb-2xs">
            まずは、一緒に考える時間を、つくりませんか。
          </p>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('contact'))); ?>" class="button tx-4xs bg-white mb-3xs"
            >ご相談はこちら</a
          >
        </div>
      </div>
    </section>
  </div>
  <!-- PageTop
  ======================================== -->
  <?php get_template_part('pagetop'); ?>
</main>

<?php get_footer('custom'); ?>
