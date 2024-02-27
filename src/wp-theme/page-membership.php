<?php get_header(); ?>

<main class="layout-main">
  <section class="sub-fv">
    <div class="sub-fv__inner">
      <div class="sub-fv__container">
        <div class="sub-fv__img">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sub/fv@2x.jpg')); ?>" alt="" width="916" height="335" />
        </div>
        <h2 class="sub-fv__title">入会のご案内</h2>
      </div>
    </div>
    <div class="sub-fv__breadcrumb">
      <?php if (function_exists('bcn_display')) { ?>
        <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      <?php } ?>
    </div>
    <div class="sub-fv__copyright copyright">
      <small>© Rinri-niigata, All Rights Reserved.</small>
    </div>
  </section>

  <div class="sub-read layout-sub-read">
    <div class="sub-read__inner inner">
      <div class="sub-read__text">
        <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。<br>
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
    </div>
  </div>

  <section class="sub-flow layout-sub-flow">
    <div class="sub-flow__inner inner">
      <div class="sub-flow__container">
        <div class="sub-flow__head">
          <h3 class="title--medium">ご入会の流れ</h3>
        </div>
        <div class="sub-flow__list">
          <ol class="flow-list">
            <li class="flow-list__item">
              <div class="flow-item">
                <div class="flow-item__left">
                  <p class="flow-item__number"></p>
                </div>
                <div class="flow-item__right">
                  <div class="flow-item__title">
                    <h4 class="title-small">お問い合わせ、またはセミナーに参加してみましょう</h4>
                  </div>
                  <div class="flow-item__text">
                    <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  </div>
                  <div class="flow-item__buttons">
                    <div class="flow-item__button">
                      <a href="#" class="button--ocher">お問い合わせ
                        <div class="button__icon">
                          <?php echo get_template_part("parts/icon-arrow-svg") ?>
                        </div>
                      </a>
                    </div>
                    <div class="flow-item__button">
                      <a href="#" class="button">モーニングセミナー一覧へ
                        <div class="button__icon">
                          <?php echo get_template_part("parts/icon-arrow-svg") ?>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="flow-list__item">
              <div class="flow-item">
                <div class="flow-item__left">
                  <p class="flow-item__number"></p>
                </div>
                <div class="flow-item__right">
                  <div class="flow-item__title">
                    <h4 class="title-small">入会申込書をご提出ください</h4>
                  </div>
                  <div class="flow-item__text">
                    <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="flow-list__item">
              <div class="flow-item">
                <div class="flow-item__left">
                  <p class="flow-item__number"></p>
                </div>
                <div class="flow-item__right">
                  <div class="flow-item__title">
                    <h4 class="title-small">お手続き完了です</h4>
                  </div>
                  <div class="flow-item__text">
                    <p class="text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  </div>
                </div>
              </div>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="sub-reward layout-sub-reward">
    <div class="sub-reward__inner inner">
      <div class="sub-reward__container">
        <div class="sub-reward__head">
          <h3 class="title--medium">ご入会の特典</h3>
        </div>
        <div class="sub-reward__list">
          <ol class="activity-cards--column2">
            <li class="activity-cards__card activity-card--orange">
              <div class="activity-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/activity1@2x.jpg')); ?>" alt="" width="384" height="270" loading="lazy">
              </div>
              <div class="activity-card__body">
                <h4 class="activity-card__head">
                  <span class="activity-card__number">#0</span>
                  <span class="activity-card__title">モーニングセミナーへ参加できます</span>
                </h4>
                <p class="activity-card__text text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              </div>
            </li>
            <li class="activity-cards__card activity-card--pink">
              <div class="activity-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/activity4@2x.jpg')); ?>" alt="" width="384" height="270" loading="lazy">
              </div>
              <div class="activity-card__body">
                <h4 class="activity-card__head">
                  <span class="activity-card__number">#0</span>
                  <span class="activity-card__title">「職場の教養」を30冊贈呈します</span>
                </h4>
                <p class="activity-card__text text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              </div>
            </li>
            <li class="activity-cards__card activity-card--purple">
              <div class="activity-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/activity2@2x.jpg')); ?>" alt="" width="384" height="270" loading="lazy">
              </div>
              <div class="activity-card__body">
                <h4 class="activity-card__head">
                  <span class="activity-card__number">#0</span>
                  <span class="activity-card__title">「倫理指導」が受けられます</span>
                </h4>
                <p class="activity-card__text text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              </div>
            </li>
            <li class="activity-cards__card activity-card--sagegreen">
              <div class="activity-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/top/activity3@2x.jpg')); ?>" alt="" width="384" height="270" loading="lazy">
              </div>
              <div class="activity-card__body">
                <h4 class="activity-card__head">
                  <span class="activity-card__number">#0</span>
                  <span class="activity-card__title">朝礼指導や社員教育、研修のご相談に応じます。</span>
                </h4>
                <p class="activity-card__text text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              </div>
            </li>
          </ol>
        </div>
      </div>
  </section>

  <div class=" join layout-sub-join">
    <div class="join__inner inner">
      <div class="join__container">
        <p class="join__head title--medium">倫理法人会で一緒に<br class="u-mobile">解決策を学びませんか？</p>
        <div class="join__text">
          <p class="text">「会社を変えたい、でもどうすれば…」<br>
            数多くの経営者が学び合う倫理法人会で、答えが見つかるかもしれません。</p>
        </div>
        <div class="join__button">
          <a href="#" class="button">入会について
            <div class="button__icon">
              <?php echo get_template_part("parts/icon-arrow-svg") ?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <section class="contact layout-contact">
    <div class="contact__inner inner">
      <div class="contact__container">
        <div class="contact__head">
          <div class="section-head--white">
            <p class="section-head__en">Contact</p>
            <h2 class="section-head__ja">お問い合わせ</h2>
          </div>
        </div>
        <div class="contact__text">
          <p class="text--white">倫理法人会についてご不明な点があれば、<wbr>まずはお気軽にご相談ください。</p>
        </div>
        <div class="contact__button">
          <a href="#" class="button">Contact form
            <div class="button__icon">
              <?php echo get_template_part("parts/icon-arrow-svg") ?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>