<?php get_header('custom'); ?>

<!-- Main 
====================================================================== -->
<main class="subpage-contact">
  <!-- Subpage Title
  ====================================================================== -->
  <div class="subpage-title">
    <h1 class="subpage-title__txt hd-xs tx-center">相談する</h1>
    <p class="subpage-title__txt-en lexend tx-xs tx-center">Contact</p>
  </div>

  <div class="contents">
    <!-- よくある質問
    ====================================================================== -->
    <sections class="contact-faq">
      <div class="container-narrow">
        <h2 class="contact-common__title hd-xs mb-md">よくある質問</h2>
        <div class="contact-faq__items">
          <div class="contact-faq__item mb-xs">
            <div class="contact-faq__ques js-ques">
              <h3 class="contact-faq__ques-txt hd-2xs">
                Q. 相談内容がまとまっていなくても大丈夫ですか？
              </h3>
            </div>
            <div class="contact-faq__ans">
              <p class="contact-faq__ans-txt tx-4xs">
                A.
                アイディアが整理されていない状態や、課題がはっきりしていない段階からでもご相談いただけます。<br />
                対話を通して、一緒に整理していくことを大切にしています。
              </p>
            </div>
          </div>
          <div class="contact-faq__item mb-xs">
            <div class="contact-faq__ques js-ques">
              <h3 class="contact-faq__ques-txt hd-2xs">
                Q. 制作の依頼も可能でしょうか？
              </h3>
            </div>
            <div class="contact-faq__ans">
              <p class="contact-faq__ans-txt tx-4xs">
                A.
                デザイン顧問サービスは制作を前提とするものではありませんが<br />
                方向性が固まったタイミングで、制作をご依頼いただくこともできます。<br />
                また、他社や外部パートナーと進める場合のご相談も承っております。
              </p>
            </div>
          </div>
          <div class="contact-faq__item mb-xs">
            <div class="contact-faq__ques js-ques">
              <h3 class="contact-faq__ques-txt hd-2xs">
                Q. 打ち合わせはオンラインが基本でしょうか？
              </h3>
            </div>
            <div class="contact-faq__ans">
              <p class="contact-faq__ans-txt tx-4xs">
                A. 基本的にはオンラインで実施しています。<br />
                状況に応じて、対面での打ち合わせもご相談可能です。
              </p>
            </div>
          </div>
          <div class="contact-faq__item">
            <div class="contact-faq__ques js-ques">
              <h3 class="contact-faq__ques-txt hd-2xs">
                Q. スタートアップ以外でも相談できますか？
              </h3>
            </div>
            <div class="contact-faq__ans">
              <p class="contact-faq__ans-txt tx-4xs">
                A.
                スタートアップを中心に支援していますが、規模や業種を問わずご相談いただけます。<br />
                内容によっては、お受けできない場合もありますが、まずはお気軽にお問い合わせください。
              </p>
            </div>
          </div>
        </div>
      </div>
    </sections>

    <!-- お問い合わせ
    ====================================================================== -->
    <sections class="contact-inquiry">
      <div class="contact-container">
        <h2 class="contact-common__title hd-xs mb-md">お問い合わせ</h2>
          <?php echo do_shortcode('[contact-form-7 id="123" title="お問い合わせ"]'); ?>
      </div>
    </sections>
  </div>

  <!-- PageTop
  ======================================== -->
  <button
    class="scroll-top"
    data-scroll-top
    aria-label="ページトップへ"
  ></button>

  <!-- PageTop
  ======================================== -->
  <?php get_template_part('pagetop'); ?>
</main>

<?php get_footer('custom'); ?>
