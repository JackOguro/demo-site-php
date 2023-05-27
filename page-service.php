<?php get_header();?>
  <main>
    <!-- トップセクション -->
    <section class="top">
      <div class="top-img top-img-service">
        <h1>SERVICE<span>commit to result</span></h1>
      </div>
      <div class="top-img-back"></div>
    </section>

    <!-- スクロールダウン -->
    <div class="scrolldawn-lower-part">
      <h1>Scroll</h1>
    </div>

    <!-- サービスセクション -->
    <section class="service">
      <div class="service-blocks">
        <!-- コンサルティング -->
        <div class="service-block">
          <div class="service-left turnRightTrigger">
            <img src="<?php echo get_template_directory_uri();?>/img/service5.png" alt="コンサルティング画像">
          </div>
          <div class="service-right turnLeftTrigger">
            <h1 class="section-ttl">CONSULTING</h1>
            <div class="service-txt">
              <h2>コンサルティング</h2>
              <p>実績のある優秀な担当者を用いた適切な人員配置でマーケティング全体の戦略設計から各施策の進歩管理まで一括して行います。</p>
              <a href="" class="btn-service btn-consulting">
                <h1>LEARN MORE</h1>
                </div>
              </a>
            </div>
          </div>
        </div>
  
        <!-- 動画編集 -->
        <div class="service-block service-block-reverse">
          <div class="service-left service-left-reverse turnLeftTrigger">
            <img src="<?php echo get_template_directory_uri();?>/img/service6.png" alt="動画編集画像">
          </div>
          <div class="service-right turnRightTrigger">
            <h1 class="section-ttl video-ttl">VIDEO<br class="pc"> EDITING</h1>
            <div class="service-txt service-txt-reverse">
              <h2>動画編集</h2>
              <p>数々のチャンネル編集から知見から質の高い業務を遂行します。スピード/質ともに高水準でご提供し、修正に対しても迅速に対応します。</p>
              <a href="" class="btn-service btn-video">
                <h1>LEARN MORE</h1>
              </a>
            </div>
          </div>
        </div>
  
        <!-- Web制作 -->
        <div class="service-block">
          <div class="service-left turnRightTrigger">
            <img src="<?php echo get_template_directory_uri();?>/img/service7.png" alt="Web制作画像">
          </div>
          <div class="service-right turnLeftTrigger">
            <h1 class="section-ttl web-ttl">WEB<br class="pc"> PRODUCTION</h1>
            <div class="service-txt">
              <h2>Web制作</h2>
              <p>体系化されたノウハウに基づきマネタイズから逆算した制作プランを策定し、設計・開発を遂行します。また、クイックレスポンスの徹底を意識して制作しています。</p>
              <a href="" class="btn-service btn-web">
                <h1>LEARN MORE</h1>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();?>