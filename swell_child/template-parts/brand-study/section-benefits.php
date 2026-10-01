<?php
/**
 * 無料ブランド勉強会LP：効果と事例（Benefits）＋ お客様の声
 * SP では「インタビューを読む」リンクをお客様の声の最下部へ移動する（CSS の order で並び替え）
 */
$benefits = [
  [
    'title'      => '価値が伝わり、<br class="brand-study-only-pc" />自然と選ばれる',
    'text'       => '自社ならではの価値がひと目で伝わると、こちらから売り込まなくても、お客様のほうから興味を持ってもらえるようになります。',
    'client'     => '株式会社アーテリジェンス様',
    'work'       => '展示会ツール',
    'case'       => '「こちらから声をかけなくてもブースに来場いただいている」と、スタッフの方からコメントをいただきました。',
  ],
  [
    'title'      => '社長でなくても、<br />同じように伝えられる',
    'text'       => '判断の基準がチームに共有されるので、営業・発信・プロダクトまで、誰が担当しても伝えることがそろいます。',
    'client'     => '株式会社アニポス様',
    'work'       => 'ブランド構築・CDO',
    'case'       => 'ブランドガイドラインを策定し、ノベルティやWeb・UIのデザインシステムに反映して、組織に浸透させました。',
  ],
  [
    'title'      => '採用や発信でも、<br />会社の姿が伝わる',
    'text'       => '「どんな会社か」が言葉とデザインで整理されると、お客様だけでなく、これから仲間になる人にも伝わります。',
    'client'     => '株式会社ペースノート様',
    'work'       => '採用サイト',
    'case'       => '採用サイトの公開後、応募者の方から「会社の様子がよく分かる」と好評だと伺っています。',
  ],
];
$quotes = [
  [
    'img'  => 'avatar-aoyagi',
    'alt'  => '青柳様の写真',
    'name' => '代表取締役　青柳 様',
    'text' => '3か月間のプログラムを通じて、ブランドコアからブランドイメージまでを整理していただきました。<br />ベンチャーキャピタルとの対話でも、「自分たちはどこをやる会社なのか」を明確に説明できるようになったと感じています。',
  ],
  [
    'img'  => 'avatar-kato',
    'alt'  => '加藤様の写真',
    'name' => 'COO　加藤 様',
    'text' => 'プロセスの中で、メンバー全員で会話しながら「自分たちは何にフォーカスする会社なのか」を明確にできたことが大きかったです。見せ方一つひとつに対する共通認識ができ、結果的に作業効率もかなり上がりました。',
  ],
];
$allowed_br = [ 'br' => [ 'class' => [] ] ];
?>
<section class="brand-study-benefits brand-study-section">
  <div class="brand-study-inner">
    <div class="brand-study-heading">
      <h2 class="brand-study-heading__title">ブランドの軸が決まると、<br class="brand-study-only-sp" />変わること</h2>
      <p class="brand-study-heading__en" lang="en">Benefits</p>
    </div>

    <ol class="brand-study-benefits__list">
      <?php foreach ( $benefits as $i => $benefit ) : ?>
        <li class="brand-study-benefits__item">
          <p class="brand-study-benefits__num" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></p>
          <h3 class="brand-study-benefits__title"><?php echo wp_kses( $benefit['title'], $allowed_br ); ?></h3>
          <p class="brand-study-benefits__text"><?php echo esc_html( $benefit['text'] ); ?></p>
          <div class="brand-study-case">
            <p class="brand-study-case__label" lang="en">CASE</p>
            <p class="brand-study-case__title">
              <?php echo esc_html( $benefit['client'] ); ?><span class="brand-study-case__sep brand-study-only-pc">｜</span><br class="brand-study-only-sp" /><?php echo esc_html( $benefit['work'] ); ?>
            </p>
            <p class="brand-study-case__text"><?php echo esc_html( $benefit['case'] ); ?></p>
            <?php if ( ! empty( $args['case_urls'][ $i + 1 ] ) ) : ?>
              <a href="<?php echo esc_url( $args['case_urls'][ $i + 1 ] ); ?>" class="brand-study-link">事例を見る</a>
            <?php endif; ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>

    <div class="brand-study-voice">
      <div class="brand-study-voice__head">
        <p class="brand-study-pill brand-study-pill--black">お客様の声</p>
        <p class="brand-study-voice__catch">「資料や発信のトーンが<br />統一され、余計な迷いが<br />なくなりました。」</p>
        <div class="brand-study-voice__client">
          <p class="brand-study-voice__client-name">株式会社PHOSLOOP 様</p>
          <p class="brand-study-voice__client-text">2025年7月設立／リン資源の循環に取り組むスタートアップ<span class="brand-study-only-sp">。</span><br class="brand-study-only-pc" />3ヶ月ブランド構築プログラムにご参加</p>
        </div>
        <?php if ( $args['interview_url'] ) : ?>
          <a href="<?php echo esc_url( $args['interview_url'] ); ?>" class="brand-study-link brand-study-voice__link">インタビューを読む</a>
        <?php endif; ?>
      </div>
      <div class="brand-study-voice__quotes">
        <?php foreach ( $quotes as $quote ) : ?>
          <figure class="brand-study-quote">
            <img
              class="brand-study-quote__avatar"
              src="<?php echo esc_url( $args['img'] . '/' . $quote['img'] ); ?>.webp"
              alt="<?php echo esc_attr( $quote['alt'] ); ?>"
              width="72"
              height="72"
              loading="lazy"
            />
            <figcaption class="brand-study-quote__name"><?php echo esc_html( $quote['name'] ); ?></figcaption>
            <blockquote class="brand-study-quote__text"><p><?php echo wp_kses( $quote['text'], $allowed_br ); ?></p></blockquote>
          </figure>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="brand-study-video">
      <iframe
        class="brand-study-video__iframe"
        src="https://www.youtube.com/embed/jUHoCX-4wMw"
        title="創業直後のスタートアップが3ヶ月で「ブランドの軸」をつくるまで｜PHOSLOOP様インタビュー"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        loading="lazy"
        allowfullscreen
      ></iframe>
    </div>

    <p class="brand-study-benefits__note">※ お客様の声・事例は、ノースサイン公式サイトに掲載のインタビュー・事例紹介より抜粋しています。</p>
  </div>
</section>
