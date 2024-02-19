<?php get_header(); ?>

<main class="layout-main">
  <div class="mv">
    <div class="mv__inner">
      <div class="mv__side">
        <div class="mv__copyright">
          <small>© Rinri-niigata, All Rights Reserved.</small>
        </div>
        <div class="mv__scroll-down"></div>
      </div>
      <div class="mv__container">
        <div class="mv__img">
          <img src="wp-content/themes/rinri/assets/images/top/mv@2x.webp" alt="" width="" height="" />
        </div>
        <div class="mv__title-wrap">
          <h2 class="mv__title-main">rinri<br>
            hojinkai<br>
            niigata</h2>
          <p class="mv__title-sub">あなたの変化で会社を変える</p>
        </div>
      </div>
    </div>
  </div>

  <section class="guide">
    <div class="guide__inner">
      <div class="guide__items">
        <div class="guide__item">
          <a href="#" class="guide__item-link">
            <div class="guide__item-title section-head">
              <p class="section-head__en">Beginner’s Guide</p>
              <h2 class="section-head__ja">はじめての方へ</h2>
            </div>
            <div class="guide__item-icon">
              <?php echo get_template_part("parts/icon-arrow-svg") ?>
            </div>
          </a>
        </div>
        <div class="guide__item">
          <a href="#" class="guide__item-link">
            <div class="guide__item-title section-head">
              <p class="section-head__en">Member</p>
              <h2 class="section-head__ja">会員の方へ</h2>
            </div>
            <div class="guide__item-icon">
              <?php echo get_template_part("parts/icon-arrow-svg") ?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="intro layout-intro">
    <div class="intro__inner inner">
      <div class="intro__container">
        <div class="intro__img">
          <img src="wp-content/themes/rinri/assets/images/top/intro@2x.webp" alt="笑顔で3人の男女が会話している様子" width="" height="" loading="lazy" />
        </div>
        <div class="intro__body">
          <div class="intro__title">倫理法人会って<br>
            どんなところ？</div>
          <div class="intro__text-wrap">
            <p class="intro__head">経営者が人としての立ち振る舞いを学び、<br>
              組織の活力を高めていくための場所です</p>
            <p class="intro__text text">当サイトをご覧になっている方の中には、<br>
              倫理法人会に対して、<br>
              「宗教なのか？」「怖い人がいるのでは？」<br>
              「強引な勧誘をされたらどうしよう」<br>
              などなど、さまざまな不安を感じている方もいると思います。<br>
              実際の会場の雰囲気や活動内容、加入されているメンバーのこと、
              ありのままをお伝えします。</p>
          </div>
          <div class="intro__button">
            <a href="#" class="button">Read more
              <div class="button__icon">
                <?php echo get_template_part("parts/icon-arrow-svg") ?>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="activity layout-activity">
    <div class="activity__inner inner">
      <div class="activity__container">
        <div class="activity__head">
          <div class="section-head">
            <p class="section-head__en">Activity</p>
            <h2 class="section-head__ja">倫理法人会の活動</h2>
          </div>
        </div>
        <div class="activity__list">
          <ol class="activity-cards">
            <li class="activity-card">
              <div class="activity-card__img">
                <img src="wp-content/themes/rinri/assets/images/top/activity1@2x.jpg" alt="">
              </div>
              <div class="activity-card__body">
                <h3 class="activity-card__head">
                  <span class="activity-card__number">#0</span>
                  <span class="activity-card__title">モーニングセミナー</span>
                </h3>
                <p class="activity-card__text text">経営者モーニングセミナーは、地元で活躍している方々の講話等を通し、企業のトップとして自らの生き方や会社のあり方を真剣に考えるための場所です。早朝の爽やかな空気を味わいながら明るい一日をスタートさせませんか。</p>
                <div class="activity-card__button">
                  <a href="#" class="button--red">Read more<div class="button__icon">
                      <?php echo get_template_part("parts/icon-arrow-svg") ?>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="activity-card--blue">
              <div class="activity-card__img">
                <img src="wp-content/themes/rinri/assets/images/top/activity2@2x.jpg" alt="">
              </div>
              <div class="activity-card__body">
                <h3 class="activity-card__head">
                  <span class="activity-card__number">#0</span>
                  <span class="activity-card__title">各種講演会・イベント</span>
                </h3>
                <p class="activity-card__text text">月に一度夕方より地域の経営者同士が共に学び、語り合う異業種交流の場です。その折々のテーマで講師を招いての講演会、勉強会、フォーラム、交流会を行います。</p>
                <div class="activity-card__button">
                  <a href="#" class="button--blue">Read more<div class="button__icon">
                      <?php echo get_template_part("parts/icon-arrow-svg") ?>
                    </div>
                  </a>
                </div>
              </div>
            </li>
            <li class="activity-card--green">
              <div class="activity-card__img">
                <img src="wp-content/themes/rinri/assets/images/top/activity3@2x.jpg" alt="">
              </div>
              <div class="activity-card__body">
                <h3 class="activity-card__head">
                  <span class="activity-card__number">#0</span>
                  <span class="activity-card__title">人材育成</span>
                </h3>
                <p class="activity-card__text text">倫理法人会では、経営者自身の内面的な成長だけでなく、各種モーニングセミナーや後継者倫理塾などの活動を通じて、企業の未来を担う将来の経営者の養成に力を注いでいます。</p>
                <div class="activity-card__button">
                  <a href="#" class="button--green">Read more<div class="button__icon">
                      <?php echo get_template_part("parts/icon-arrow-svg") ?>
                    </div>
                  </a>
                </div>
              </div>
            </li>

          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="member layout-member">
    <div class="member__inner inner">
      <div class="member__container">
        <div class="member__head">
          <div class="section-head">
            <p class="section-head__en">Member</p>
            <h2 class="section-head__ja">参加している方々</h2>
          </div>
        </div>
        <div class="member__text">
          <p class="text">倫理法人会に参加している方々をご紹介。<br>
            中小企業だけでなく、あなたもよく知る大企業の経営者も同じ場所で学んでいます。</p>
        </div>
        <div class="member__list">
          <div class="member__swiper swiper js-member-swiper">
            <ul class="member-cards swiper-wrapper">
              <li class="member-card swiper-slide">
                <div class="member-card__img-wrap">
                  <div class="member-card__img">
                    <img src="wp-content/themes/rinri/assets/images/top/member1@2x.jpg" alt="" width="" height="" loading="lazy">
                  </div>
                  <p class="member-card__company">株式会社◯◯◯◯◯</p>
                </div>
                <div class="member-card__body">
                  <p class="member-card__name">代表取締役　〇〇〇〇</p>
                  <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
                </div>
              </li>
              <li class="member-card swiper-slide">
                <div class="member-card__img-wrap">
                  <div class="member-card__img">
                    <img src="wp-content/themes/rinri/assets/images/top/member2@2x.jpg" alt="" width="" height="" loading="lazy">
                  </div>
                  <p class="member-card__company">株式会社◯◯◯◯◯</p>
                </div>
                <div class="member-card__body">
                  <p class="member-card__name">代表取締役　〇〇〇〇</p>
                  <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
                </div>
              </li>
              <li class="member-card swiper-slide">
                <div class="member-card__img-wrap">
                  <div class="member-card__img">
                    <img src="wp-content/themes/rinri/assets/images/top/member3@2x.jpg" alt="" width="" height="" loading="lazy">
                  </div>
                  <p class="member-card__company">株式会社◯◯◯◯◯</p>
                </div>
                <div class="member-card__body">
                  <p class="member-card__name">代表取締役　〇〇〇〇</p>
                  <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
                </div>
              </li>
              <li class="member-card swiper-slide">
                <div class="member-card__img-wrap">
                  <div class="member-card__img">
                    <img src="wp-content/themes/rinri/assets/images/top/member4@2x.jpg" alt="" width="" height="" loading="lazy">
                  </div>
                  <p class="member-card__company">株式会社◯◯◯◯◯</p>
                </div>
                <div class="member-card__body">
                  <p class="member-card__name">代表取締役　〇〇〇〇</p>
                  <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
                </div>
              </li>
              <li class="member-card swiper-slide">
                <div class="member-card__img-wrap">
                  <div class="member-card__img">
                    <img src="wp-content/themes/rinri/assets/images/top/member1@2x.jpg" alt="" width="" height="" loading="lazy">
                  </div>
                  <p class="member-card__company">株式会社◯◯◯◯◯</p>
                </div>
                <div class="member-card__body">
                  <p class="member-card__name">代表取締役　〇〇〇〇</p>
                  <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="member__swiper-ui">
            <div class="member__swiper-ui-prev swiper-button-prev"><img src="wp-content/themes/rinri/assets/images/common/icon-prev.svg" alt="前へ" width="" height="" loading="lazy" /></div>
            <div class="member__swiper-ui-next swiper-button-next"><img src="wp-content/themes/rinri/assets/images/common/icon-next.svg" alt="次へ" width="" height="" loading="lazy" /></div>
            <div class="member__swiper-ui-scrollbar swiper-scrollbar"></div>
          </div>
        </div>
        <div class="member__button">
          <a href="#" class="button">Read more
            <div class="button__icon">
              <?php echo get_template_part("parts/icon-arrow-svg") ?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- 共通 -->

  <div class=" inner">
    <div class="section-head">
      <p class="section-head__en">Beginner’s Guide</p>
      <h2 class="section-head__ja">はじめての方へ</h2>
    </div>


    <!-- カード -->
    <ul class="member-cards">
      <li class="member-card">
        <div class="member-card__img-wrap">
          <div class="member-card__img">
            <img src="wp-content/themes/rinri/assets/images/top/member1@2x.jpg" alt="">
          </div>
          <p class="member-card__company">株式会社◯◯◯◯◯</p>
        </div>
        <div class="member-card__body">
          <p class="member-card__name">代表取締役　〇〇〇〇</p>
          <p class="member-card__text text">ここに会社の紹介が入ります。この文章はダミーです。ここに会社の紹介が入ります。</p>
        </div>
      </li>
    </ul>

    <!-- カード -->
    <ul class="info-cards">
      <li class="info-card">
        <div class="info-card__img">
          <img src="wp-content/themes/rinri/assets/images/top/info1@2x.jpg" alt="" width="" height="" loading="lazy">
        </div>
        <h3 class="info-card__title">ここに活動報告のタイトルが入ります。ダミーです。</h3>
        <div class="info-card__meta">
          <time class="info-card__date" datetime="2024-01-04">2024.01.04</time>
          <span class="info-card__category">カテゴリ</span>
        </div>
      </li>
    </ul>

    <!-- カード -->
    <ul class="seminar-cards">
      <li class="seminar-card">
        <div class="seminar-card__head">
          <div class="seminar-card__title-wrap">
            <h3 class="seminar-card__title">
              <span class="seminar-card__title-number">第100回</span><span class="seminar-card__title-text">人生は倫理</span>
            </h3>
          </div>
          <div class="seminar-card__img">
            <img src="wp-content/themes/rinri/assets/images/top/seminar1@2x.jpg" alt="" width="" height="" loading="lazy">
          </div>
        </div>
        <dl class="seminar-card__info">
          <div class="seminar-card__info-wrap text">
            <dt class="seminar-card__info-term">日時</dt>
            <dd class="seminar-card__info-description">12月19日（火）</dd>
          </div>
          <div class="seminar-card__info-wrap text">
            <dt class="seminar-card__info-term">会場</dt>
            <dd class="seminar-card__info-description">下越北倫理法人会</dd>
          </div>
          <div class="seminar-card__info-wrap text">
            <dt class="seminar-card__info-term">講師</dt>
            <dd class="seminar-card__info-description">田村 征司／新潟県倫理法人会 相談役／(株)トゥルーワークス 会長</dd>
          </div>
        </dl>
      </li>
    </ul>

    <!-- カード -->
    <ul class="about-list">
      <li class="about-item">
        <h3 class="about-item__title">会場一覧（単会情報）</h3>
        <div class="about-item__img">
          <img src="wp-content/themes/rinri/assets/images/top/about1@2x.webp" alt="" width="" height="" loading="lazy" />
        </div>
        <div class="about-item__icon">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="13" viewBox="0 0 25 13">
            <defs>
              <clipPath id="a">
                <rect width="13" height="20" transform="translate(0 0.258)" fill="none" stroke="#c38b79" stroke-width="1" />
              </clipPath>
            </defs>
            <g transform="translate(-638 -975.248)">
              <ellipse cx="4.5" cy="5" rx="4.5" ry="5" transform="translate(638 977.248)" fill="#c38b79" opacity="0.5" />
              <g transform="translate(642.742 988.248) rotate(-90)">
                <g transform="translate(0 0)" clip-path="url(#a)">
                  <line y1="19.372" transform="translate(6.55 0.201)" fill="none" stroke="#c38b79" stroke-miterlimit="10" stroke-width="1" />
                  <path d="M0,0S5.282,1.5,6.12,9.1" transform="translate(0.43 10.468)" fill="none" stroke="#c38b79" stroke-miterlimit="10" stroke-width="1" />
                  <path d="M6.12,0S.838,1.5,0,9.1" transform="translate(6.55 10.468)" fill="none" stroke="#c38b79" stroke-miterlimit="10" stroke-width="1" />
                </g>
              </g>
            </g>
          </svg>
        </div>
      </li>
    </ul>
  </div>

  <!-- footer -->
  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__wrapper">
        <div class="footer__left">
          <div class="footer__logo">
            <a href="#" class="logo">
              <div class="logo__icon">
                <img src="wp-content/themes/rinri/assets/images/common/logo.svg" alt="Logo" width="" height="" loading="lazy">
              </div>
              <div class="logo__title">新潟県倫理法人会</div>
            </a>
          </div>
          <address class="footer__address text">
            〒955-0092<br>
            新潟県三条市須頃2丁目13番地<br>
            パークハイツ須頃　202号室-000
          </address>
          <dl class="footer__info text">
            <div class="footer__info-wrap">
              <dt class="footer__info-term">tel</dt>
              <dd class="footer__info-description">0256-35-4466</dd>
            </div>
            <div class="footer__info-wrap">
              <dt class="footer__info-term">fax</dt>
              <dd class="footer__info-description">0256-47-1023</dd>
            </div>
            <div class="footer__info-wrap--delta">
              <dt class="footer__info-term">E-mail</dt>
              <dd class="footer__info-description">rinri-ken@tiara.ocn.ne.jp</dd>
            </div>
          </dl>
        </div>
        <div class="footer__right">
          <div class="footer__nav">
            <ul class="footer__nav-lists">
              <li class="footer__nav-list">はじめての方へ
                <ul class="footer__nav-items text">
                  <li class="footer__nav-item"><a href="">・倫理法人会ってどんなところ？</a></li>
                  <li class="footer__nav-item"><a href="">・活動内容</a>
                  </li>
                  <li class="footer__nav-item"><a href="">・会員紹介</a>
                  </li>
                </ul>
              </li>
              <li class="footer__nav-list">会員の方へ
                <ul class="footer__nav-items text">
                  <li class="footer__nav-item"><a href="">・お知らせ一覧</a></li>
                  <li class="footer__nav-item"><a href="">・セミナー案内</a>
                  </li>
                  <li class="footer__nav-item"><a href="">・会報</a>
                  </li>
                </ul>
              </li>
              <li class="footer__nav-list">倫理法人会について
                <ul class="footer__nav-items text">
                  <li class="footer__nav-item"><a href="">・会場一覧</a>
                  </li>
                  <li class="footer__nav-item"><a href="">・組織・役員</a>
                  </li>
                  <li class="footer__nav-item"><a href="">・委員会</a>
                  </li>
                  <li class="footer__nav-item"><a href="">・事務局</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="footer__buttons">
            <div class="footer__button">
              <a href="#" class="button--white">入会のご案内<div class="button__icon">
                  <svg class="icon-arrow-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="13" viewBox="0 0 25 13">
                    <defs>
                      <clipPath id="a">
                        <rect width="13" height="20" transform="translate(0 0.258)" fill="none" stroke="#c38b79" stroke-width="1" />
                      </clipPath>
                    </defs>
                    <g transform="translate(-638 -975.248)">
                      <ellipse cx="4.5" cy="5" rx="4.5" ry="5" transform="translate(638 977.248)" fill="#c38b79" opacity="0.5" />
                      <g transform="translate(642.742 988.248) rotate(-90)">
                        <g transform="translate(0 0)" clip-path="url(#a)">
                          <line y1="19.372" transform="translate(6.55 0.201)" fill="none" stroke="#c38b79" stroke-miterlimit="10" stroke-width="1" />
                          <path d="M0,0S5.282,1.5,6.12,9.1" transform="translate(0.43 10.468)" fill="none" stroke="#c38b79" stroke-miterlimit="10" stroke-width="1" />
                          <path d="M6.12,0S.838,1.5,0,9.1" transform="translate(6.55 10.468)" fill="none" stroke="#c38b79" stroke-miterlimit="10" stroke-width="1" />
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
              </a>
            </div>
            <div class="footer__button">
              <a href="#" class="button--ocher">お問い合わせ<div class="button__icon">
                  <svg class="icon-arrow-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="13" viewBox="0 0 25 13">
                    <defs>
                      <clipPath id="a">
                        <rect width="13" height="20" transform="translate(0 0.258)" fill="none" stroke="#c38b79" stroke-width="1" />
                      </clipPath>
                    </defs>
                    <g transform="translate(-638 -975.248)">
                      <ellipse cx="4.5" cy="5" rx="4.5" ry="5" transform="translate(638 977.248)" fill="#c38b79" opacity="0.5" />
                      <g transform="translate(642.742 988.248) rotate(-90)">
                        <g transform="translate(0 0)" clip-path="url(#a)">
                          <line y1="19.372" transform="translate(6.55 0.201)" fill="none" stroke="#c38b79" stroke-miterlimit="10" stroke-width="1" />
                          <path d="M0,0S5.282,1.5,6.12,9.1" transform="translate(0.43 10.468)" fill="none" stroke="#c38b79" stroke-miterlimit="10" stroke-width="1" />
                          <path d="M6.12,0S.838,1.5,0,9.1" transform="translate(6.55 10.468)" fill="none" stroke="#c38b79" stroke-miterlimit="10" stroke-width="1" />
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
              </a>
            </div>
          </div>
          <div class="footer__links text">
            <a href="" class="footer__policy">プライバシーポリシー</a>
            <a href="" class="footer__link">リンク集</a>
          </div>
        </div>
      </div>
  </footer>

  </div>

</main>

<?php get_footer(); ?>