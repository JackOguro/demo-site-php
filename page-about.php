<?php get_header();?>
  <main>
    <!-- トップセクション -->
    <section class="top">
      <div class="top-img top-img-about">
        <h1>ABOUT<span>Create future</span></h1>
      </div>
      <div class="top-img-back"></div>
    </section>

    <!-- スクロールダウン -->
    <div class="scrolldawn-lower-part">
      <h1>Scroll</h1>
    </div>

    <!-- カンパニーセクション -->
    <section class="about company">
      <h1 class="section-ttl">COMPANY</h1>
      <ul class="fadeUpTrigger">
        <li>
          <p>会社名</p>
          <span>株式会社WithCode</span>
        </li>
        <li>
          <p>所在地</p>
          <span>東京都渋谷区道玄坂1丁目1<br class="sp">（<a href="https://goo.gl/maps/RWDx8auVoAYztVV97" class="map_link">Googleマップ</a>）</span>
        </li>
        <li>
          <p>創立</p>
          <span>2022年1月1日</span>
        </li>
        <li>
          <p>資本金</p>
          <span>1000万円</span>
        </li>
        <li>
          <p>代表者</p>
          <span>代表取締役社長　WithCode太郎</span>
        </li>
        <li>
          <p>事業内容</p>
          <span>
          ・コンサルティング<br> 
          ・Web制作<br>
          ・動画編集
          </span>
        </li>
        <li>
          <p>取引銀行</p>
          <span>WithCode銀行</span>
        </li>
      </ul>
    </section>

    <!-- メンバーセクション -->
    <section class="about member">
      <h1 class="section-ttl">MEMBER</h1>
      <div class="member-blocks">
        <!-- メンバーブロック(代表取締役社長) -->
        <div class="member-block fadeRightTrigger">
          <h2>代表取締役社長</h2>
          <img src="<?php echo get_template_directory_uri()?>/img/about4.png" alt="代表取締役社長画像">
          <p class="name">WithCode太郎<span>WithCode Taro</span></p>
          <!-- 押すとボックスが出現 -->
          <div class="box">
            <p>「技術で世界を変える」をモットーにお客様1人1人に合ったIT課題を解決します。</p>
          </div>
        </div>
        <!-- メンバーブロック(代表取締役副社長) -->
        <div class="member-block fadeLeftTrigger">
          <h2>代表取締役副社長</h2>
          <img src="<?php echo get_template_directory_uri()?>/img/about5.png" alt="代表取締役副社長画像">
          <p class="name">WithCode次郎<span>WithCode Jiro</span></p>
          <!-- 押すとボックスが出現 -->
          <div class="box">
            <p>お客様の悩みは1人1人違います。だからこそ1人一人に合った適切な解決案を提案します。</p>
          </div>
        </div>
      </div>
    </section>

    <!-- アクセスセクション -->
    <section class="about access">
      <h1 class="section-ttl">ACCESS</h1>
      <div class="access-block">
        <!-- グーグルマップ -->
        <div class="access-map turnRightTrigger">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12967.0806533878!2d139.7016358!3d35.6580339!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x337328def1e2ab26!2z5riL6LC36aeF!5e0!3m2!1sja!2sjp!4v1646780727068!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- 住所・最寄り駅から -->
        <div class="access-list">
          <div class="access-list-address">
            <h2>住所</h2>
            <p>〒111－1111　東京都渋谷区道玄坂1丁目1</p>
          </div>
          <div class="access-list-near">
            <h2>最寄り駅</h2>
            <p>・渋谷駅北口から徒歩1分</p>
            <p>・渋谷駅南口から徒歩2分</p>
            <p>・渋谷駅東口から徒歩3分</p>
            <p>・渋谷駅西口から徒歩4分</p>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();?>