<?php get_header();?>
  <main>
    <!-- トップセクション -->
    <section class="top">
      <div class="top-img top-img-contact">
        <h1>CONTACT<span>Don't hesitate to ask for my help</span></h1>
      </div>
      <div class="top-img-back"></div>
    </section>
    
    <!-- スクロールダウン -->
    <div class="scrolldawn-lower-part">
      <h1>Scroll</h1>
    </div>

    <!-- コンタクトセクション -->
    <section class="contact">
      <div class="contact-block">
        <!-- コンタクトテキスト -->
        <div class="contact-txt">
          <p>項目に沿って必要事項をご入力ください。</p>
          <p>お問い合わせを頂戴した後、2～3営業日以内にお返事を差し上げます。</p>
          <p>営業や売り込みのご連絡は、お返事を確約いたしかねますこと、ご了承ください。</p>
        </div>
        <!-- コンタクトフォーム 
        <form action="" class="contact-form" id="form">
          プルダウンメニュー 
          <div class="contact-box">
            <label for="name" class="contact-form-ttl">お問い合わせ項目</label>
            <select name="subject" class="contact-form-box1" required="required">
              <optgroup value>
                <option class="select-with" value="プルダウンメニューで問い合わせ内容を選択" hidden>お問い合わせ内容を選択</option>
                <option class="select-with" value="コンサルティング">コンサルティング</option>
                <option class="select-with" value="動画編集">動画編集</option>
                <option class="select-with" value="Web制作">Web制作</option>
              </optgroup>
            </select>
          </div>
          お名前
          <div class="contact-box">
            <label for="name" class="contact-form-ttl">お名前（漢字）</label>
            <input type="text" class="contact-form-box2" name="" required="required" placeholder="例）田中　太郎">
          </div>
          メールアドレス
          <div class="contact-box">
            <label for="email" class="contact-form-ttl">メールアドレス</label>
            <input type="text" class="contact-form-box2" name="" required="required" placeholder="例）example@example.co.jp">
          </div>
          電話番号
          <div class="contact-box">
            <label for="tel" class="contact-form-ttl">電話番号</label>
            <input type="tel" class="contact-form-box2" name="" placeholder="例）080-1111-1111">
          </div>
          メッセージ
          <div class="contact-box contact-box-area">
            <label for="message" class="contact-form-ttl">お問い合わせ内容</label>
            <textarea type="message" class="contact-txtarea" id="message" required="required"
              placeholder="お問い合わせ内容をご入力下さい"></textarea>
          </div>
          ボタン
          <button type="submit" class="btn btn-contact">送信</button>
        </form>  -->
        <?php echo do_shortcode( '[contact-form-7 id="46" title="無題"]' );?>
      </div>
    </section>
  </main>
<?php get_footer();?>