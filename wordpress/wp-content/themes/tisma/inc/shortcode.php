<?php

/*
* *****************************************************
*/
add_shortcode('servises', 'servises_func');
function servises_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <!-- start sTopCards-->
  <div class="sTopCards section" id="sTopCards">
    <div class="container">
      <div class="sTopCards__row row">
        <?php if (have_rows('карточки')): while (have_rows('карточки')) : the_row(); ?>
          <?php
          $image = get_sub_field("изображение");
          $size = 'medium';
          $sizeSm = 'full';
          ?>
          <div class="sTopCards__col col-xl-6 wow  animate__fadeInUp">
            <div class="sTopCards__card-cont">
              <div class="sTopCards__bg-cont">
                <!-- picture-->
                <picture class="sTopCards__bg">
                  <?php
                  if ($image) {
                    echo wp_get_attachment_image($image, $size);
                  }
                  ?>
                </picture>
                <!-- /picture-->
              </div>
              <div class="sTopCards__txt">
                <h5><?php echo the_sub_field('название'); ?></h5>
                <p><?php echo the_sub_field('краткое_описание'); ?></p><a class="sTopCards__detail-link link-modal"
                                                                          href="#modal-case">
                  <div class="txt">Подробнее</div>
                  <svg class="icon icon-chevron-down ">
                    <use
                      xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#chevron-down"></use>
                  </svg>
                </a>
              </div>
              <div class="sTopCards__pic-cont d-none d-sm-block">
                <!-- picture-->
                <picture class="sTopCards__picture">
                  <?php
                  if ($image) {
                    echo wp_get_attachment_image($image, $sizeSm);
                  }
                  ?>
                </picture>
                <!-- /picture-->
              </div>
              <div class="d-none for-model-content">
                <div class="modal-win__caption">
                  <div class="modal-win__row row">
                    <h5><?php echo the_sub_field('название'); ?></h5>
                    <?php echo the_sub_field('полное_описание'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endwhile; else : endif; ?>

      </div>
    </div>
  </div>
  <!-- end sTopCards-->
  <?php
  return ob_get_clean();

}

/*
* *****************************************************
*/
add_shortcode('about', 'about_func');
function about_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php
  $image = get_field("фото");
  $size = 'full';
  ?>
  <!-- start sAbout-->
  <section class="sAbout section" id="sAbout">
    <div class="sAbout__red-block">
    </div>
    <div class="sAbout__left-rain"><img loading="lazy"
                                        src="<?php echo $get_template_directory_uri ?>/public/img/svg/sAbout-left-rain.svg"
                                        alt=""/>
    </div>
    <div class="sAbout__right-rain"><img loading="lazy"
                                         src="<?php echo $get_template_directory_uri ?>/public/img/svg/sAbout-right-rain.svg"
                                         alt=""/>
    </div>
    <div class="container">
      <div class="sAbout__row row  wow  animate__fadeInUp">
        <div class="sAbout__descr-col col-lg-7">
          <div class="sAbout__txt-cont">
            <div class="sAbout__left-col-bg"><img loading="lazy"
                                                  src="<?php echo $get_template_directory_uri ?>/public/img/@2x/sAbout-left-col-bg.jpg"
                                                  alt=""/>
            </div>
            <div class="sAbout__company-descr">
              <h2><?php echo the_field('заголовок_02'); ?></h2>
            </div>
            <?php echo the_field('текстовое_поле'); ?>
            <a class="sAbout__video-link" href="<?php echo the_field('видео'); ?>" data-fancybox="video"><span>Смотреть видео</span><span>о компании</span></a>
          </div>
        </div>
        <div class="sAbout__president-col col-lg-5">
          <div class="sAbout__right-col-content">
            <div class="sAbout__trapezoid-bg">
            </div>
            <div class="sAbout__pres-title">
              <h4><?php echo the_field('заголовок_обращения'); ?></h4>
              <p><?php echo the_field('имя'); ?></p>
            </div>
            <div class="sAbout__pres-descr">
              <p><?php echo the_field('текст__обращения'); ?></p>
            </div>
            <div class="sAbout__pres-portrait">
              <?php
              if ($image) {
                echo wp_get_attachment_image($image, $size);
              }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="sAbout__convince-row row">
        <?php if (have_rows('список')): while (have_rows('список')) : the_row(); ?>
          <div class="col-lg-4 col-sm-6  wow  animate__fadeInUp">
            <div class="sAbout__convince-txt"><?php echo the_sub_field('текст'); ?></div>
          </div>
        <?php endwhile; else : endif; ?>
      </div>
    </div>
  </section>
  <!-- end sAbout-->

  <?php
  return ob_get_clean();

}

/*
* *****************************************************
*/
add_shortcode('sCases', 'sCases_func');
function sCases_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>


  <!-- start sCases-->
  <section class="sCases section" id="sCases">
    <div class="sCases__container container">
      <div class="sCases__header  wow  animate__fadeInUp">
        <h2><?php echo the_field('заголовок_03'); ?></h2>
        <a class="sCases__watch-all" href="#"><span>Смотреть все</span>
          <svg class="icon icon-chevron-right ">
            <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#chevron-right"></use>
          </svg>
        </a>
        <div class="sCases__slider-nav">
          <div class="sCases__prev cases-prev-js">
            <svg class="icon icon-arrow-left ">
              <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#arrow-left"></use>
            </svg>
          </div>
          <div class="sCases__next cases-next-js">
            <svg class="icon icon-arrow-right ">
              <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#arrow-right"></use>
            </svg>
          </div>
        </div>
      </div>
      <div class="sCases__slider  wow  animate__fadeInUp">
        <div class="swiper-container cases-slider-js">
          <div class="swiper-wrapper">
            <?php if (have_rows('блоки_03')): while (have_rows('блоки_03')) : the_row(); ?>
              <?php
              $image = get_sub_field("фон");
              $image2 = get_sub_field("лого");
              $image3 = get_sub_field("лого");
              $image4 = get_sub_field("слайдер");
              $size = 'large';
              $sizeMd = 'card-image';
              $sizeSm = 'full';
              ?>
              <div class="swiper-slide">
                <a href="#modal-case" class="d-block text-white link-modal sCases__slide-content">
                  <div class="sCases__bg">
                    <?php
                    if (!empty($image)): ?>
                      <img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image['url']); ?>"
                           alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>

                  </div>
                  <div class="sCases__inner">
                    <div class="sCases__top-line">
                      <div class="sCases__logoes-cont">
                        <?php foreach ($image2 as $image2) {
                          // var_dump($images7)
                          ?>
                          <div class="sCases__logo">
                            <?php
                            if (!empty($image2)): ?>
                              <img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image2['url']); ?>"
                                   alt="<?php echo esc_attr($image2['alt']); ?>"/>
                            <?php endif; ?>

                          </div>
                        <?php } ?>
                      </div>
                      <div class="sCases__headline"><?php echo the_sub_field('заголовок'); ?></div>
                    </div>
                    <div class="sCases__lower-txt">
                      <div class="sCases__top-content">
                        <div class="sCases__title"><?php echo the_sub_field('текст'); ?></div>
                        <div class="sCases__list"><?php echo the_sub_field('список'); ?></div>
                      </div>
                      <div class="sCases__footer">
                        <div class="sCases__date">
                          <span>Период проведения:</span><span><?php echo the_sub_field('дата'); ?></span>
                        </div>
                        <div class="sCases__role"><span>Роль:</span><span><?php echo the_sub_field('роль'); ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none for-model-content">
                    <div class="modal-win__caption">
                      <div class="sCases__logoes-cont">
                        <?php foreach ($image3 as $image3) {
                          // var_dump($images7)
                          ?>
                          <div class="sCases__logo">
                            <?php
                            if (!empty($image3)): ?>
                              <img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image3['url']); ?>"
                                   alt="<?php echo esc_attr($image3['alt']); ?>"/>
                            <?php endif; ?>

                          </div>
                        <?php } ?>
                      </div>
                      <div class="modal-win__row row">
                        <div class="modal-win__col col-auto">Название мероприятия:</div>
                        <div class="col"><?php echo the_sub_field('заголовок'); ?></div>
                      </div>
                      <div class="modal-win__row row">
                        <div class="modal-win__col col-auto">Дата проведения:</div>
                        <div class="col-lg"><?php echo the_sub_field('дата'); ?></div>
                      </div>
                      <div class="modal-win__row row">
                        <div class="modal-win__col col-auto">Заказчик:</div>
                        <div class="col-lg"><?php echo the_sub_field('заказчик'); ?></div>
                      </div>
                      <div class="modal-win__row row">
                        <div class="modal-win__col col-auto">Роль:</div>
                        <div class="col-lg"><?php echo the_sub_field('роль'); ?></div>
                      </div>
                      <div class="modal-win__row row">
                        <div class="modal-win__col col-auto">Описание :</div>
                        <div class="col-lg"><?php echo the_sub_field('описание'); ?> </div>
                      </div>
                      <?php if (!empty($image4)): ?>
                        <div class="modal-win__slider modal-win__slider--js swiper-container">
                          <div class="swiper-button-hand swiper-button-hand-prev swiper-button-prev"></div>
                          <div class="swiper-button-hand swiper-button-hand-next swiper-button-next"></div>
                          <div class="swiper-wrapper">
                            <?php foreach ($image4 as $image4) {
                              // var_dump($images7)
                              ?>

                              <?php
                              if (!empty($image4)): ?>
                                <div class="modal-win__slide swiper-slide">
                                  <img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image4['url']); ?>"
                                       alt="<?php echo esc_attr($image4['alt']); ?>"/>
                                </div>
                              <?php endif; ?>


                            <?php } ?>
                          </div>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </a>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
        <div class="sCases__pugin cases-pugin-js">
        </div>
      </div>
    </div>
  </section>
  <!-- end sCases-->

  <?php
  return ob_get_clean();

}


/*
* *****************************************************
*/
add_shortcode('sFormAlt', 'sFormAlt_func');
function sFormAlt_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php
  $image = get_field("фотка_04");
  $size = 'full';
  ?>

  <!-- start sFormAlt-->
  <div class="sFormAlt section" id="sFormAlt">
    <div class="sFormAlt__bg"><img loading="lazy"
                                   src="<?php echo $get_template_directory_uri ?>/public/img/svg/sForm-rain.svg"
                                   alt=""/>
    </div>
    <div class="sFormAlt__container container  wow  animate__fadeInUp">
      <div class="form-wrap">

        <div class="form-wrap__man d-none d-md-block">
          <?php
          if ($image) {
            echo wp_get_attachment_image($image, $size);
          }
          ?>
        </div>
        <div class="form-wrap__form-content">
          <div class="form-wrap__bg"><img loading="lazy"
                                          src="<?php echo $get_template_directory_uri ?>/public/img/svg/form-rain-inner.svg"
                                          alt=""/>
          </div>
          <div class="form-wrap__txt-block">
            <?php echo the_field('текст_04'); ?>
          </div>

          <div class="form-wrap__inputs-block">
            <?php echo do_shortcode('[contact-form-7 id="168" title="Форма"]'); ?>
            <div class="form-wrap__polite"><span>
											Согласен на обработку
											</span><a href="<?php echo the_field('ссылка_04'); ?>" target="_blank">персональных данных</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end sFormAlt-->

  <?php
  return ob_get_clean();

}

/*
* *****************************************************
*/
add_shortcode('sTeam', 'sTeam_func');
function sTeam_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php $tel = get_field('телефон', 'option');
  $tel_str = str_replace(" ", "", $tel);
  ?>
  <?php
  $image = get_field("фотка_04");
  $size = 'full';
  ?>

  <!-- start sTeam-->
  <section class="sTeam section" id="sTeam">
    <div class="sTeam__container container">
      <div class="section-title  wow  animate__fadeInUp">
        <h2><?php echo the_field('заголовок_05'); ?></h2>
      </div>
      <div class="sTeam__slider  wow  animate__fadeInUp">
        <div class="swiper-container partners-slider-js">
          <div class="swiper-wrapper">
            <?php if (have_rows('блоки')): while (have_rows('блоки')) : the_row(); ?>
              <?php
              $image = get_sub_field("лого");
              $image2 = get_sub_field("фон");
              $size = 'medium';
              $sizeSm = 'full';
              ?>
              <div class="swiper-slide"><a href="" class="sTeam__inner-link"><span class="sTeam__top-logo">
										<?php if (!empty($image)): ?>
                      <img class="swiper-lazy" src="<?php echo the_sub_field('ссылка'); ?>"
                           data-src="<?php echo esc_url($image['url']); ?>"
                           alt="<?php echo esc_attr($image['alt']); ?>"/>
                    <?php endif; ?>
								</span><span class="sTeam__bg">
										<?php if (!empty($image2)): ?>
                      <img class="swiper-lazy" src="#" data-src="<?php echo esc_url($image2['url']); ?>"
                           alt="<?php echo esc_attr($image2['alt']); ?>"/>
                    <?php endif; ?>
									</span></a>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end sTeam-->

  <?php
  return ob_get_clean();

}

//delete top
/*
* *****************************************************
*/
/*
* *****************************************************
*/
add_shortcode('sInterier', 'sInterier_func');
function sInterier_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sInterier section" id="sInterier">
    <div class="section-title-alt">
      <div class="container">
        <div class="section-title-alt__row row align-items-center gy-3">
          <div class="section-title-alt__title-col col-lg-7 col-xl-8 col-xxl-auto">
            <h2>
              <?php echo the_field('заголовок02'); ?>
            </h2>
          </div>
          <div class="col-md-8 col-lg">
            <div class="section-title-alt__descr">
              <?php echo the_field('осписание02'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="sInterier__row row">
        <?php if (have_rows('карточки02')): while (have_rows('карточки02')) : the_row(); ?>
          <?php
            $cardType = get_sub_field("большая_карточка02");
          ?>
          <?php if ($cardType == 'Большая карточка') {?>
            <div class="col-md-8 col-lg-6">
              <div class="sInterier__item sInterier__item--big">
                <!-- picture-->
                <picture class="sInterier__pic">
                  <img src="<?php the_sub_field("картинка02");?>" alt="" loading="lazy"/>
                </picture>
                <!-- /picture-->
                <div class="sInterier__content">
                  <a class="sInterier__ball" href="#">
                    <span class="sInterier__name">
                      <?php the_sub_field("текст_ссилки02");?>
                    </span>
                  </a>
                  <a class="sInterier__calc-btn" href="#">
                    Рассчитать стоимость
                  </a>
                </div>
              </div>
            </div>
          <?php } else {?>
            <div class="sInterier__col sInterier__col--sm col-lg-3 col-sm-6 <?php the_sub_field("доп_класи_сетки02");?>">
              <div class="sInterier__item">
                <!-- picture-->
                <picture class="sInterier__pic">
                  <img src="<?php the_sub_field("картинка02");?>" alt="" loading="lazy"/>
                </picture>
                <!-- /picture-->
                <div class="sInterier__content">
                  <a class="sInterier__ball" href="#">
                    <span class="sInterier__name">
                      <?php the_sub_field("текст_ссилки02");?>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          <?php } ?>
        <?php endwhile; else : endif; ?>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();

}
/*
* *****************************************************
*/
add_shortcode('sMaterial', 'sMaterial_func');
function sMaterial_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <div class="sMaterial section" id="sMaterial">
    <div class="container">
      <div class="sMaterial__title">
        <?php echo the_field('заголовок05'); ?>
      </div>
      <div class="sMaterial__slider-wrap">
        <div class="swiper-container sMaterial-slider-js">
          <div class="swiper-wrapper">
            <?php if (have_rows('слайдер_материалов05')): while (have_rows('слайдер_материалов05')) : the_row(); ?>
              <div class="swiper-slide">
                <div class="sMaterial__img">
                  <img loading="lazy" src="<?php the_sub_field("изображение05");?>" alt=""/>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sRecent', 'sRecent_func');
function sRecent_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sRecent section" id="sRecent">
    <div class="container">
      <div class="section-title d-xl-none">
        <?php echo the_field('заголовок06'); ?>
        <h2>Наши крайние проекты</h2>
        <p>Самое свежее, мы публикуем в наших соцсетях</p>
      </div>
      <div class="sRecent__main-row row">
        <div class="sRecent__col sRecent__col--title col-sm-6 col-lg-3">
          <div class="section-title d-none d-xl-block">
            <?php echo the_field('заголовок06'); ?>
          </div>
          <div class="sRecent__links-box">
            <div class="sRecent__l-row row align-items-center gy-3">
              <div class="col-auto">
                <div class="sRecent__ball-logo">
                  <img loading="lazy" src="<?php echo the_field('логотип06'); ?>" alt=""/>
                </div>
              </div>
              <div class="col-auto">
                <div class="sRecent__soc-links">
                  <?php if (have_rows('соц_ссылки06')): while (have_rows('соц_ссылки06')) : the_row(); ?>
                    <a class="sRecent__link" href="<?php the_sub_field("ссылка06");?>" target="_blank">
                      <span class="sRecent__icon">
                        <img loading="lazy" src="<?php the_sub_field("соц_иконка06");?>" alt=""/>
                      </span>
                      <span class="sRecent__txt">
                        <?php the_sub_field("текст_ссылки06");?>
                      </span>
                    </a>
                  <?php endwhile; else : endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php if (have_rows('недавние_роботи06')): while (have_rows('недавние_роботи06')) : the_row(); ?>
          <div class="sRecent__col col-sm-6 col-lg-3">
            <picture class="sRecent__work-link">
              <img src="<?php the_sub_field("изображение_недавние06");?>" alt="" loading="lazy"/>
            </picture>
          </div>
        <?php endwhile; else : endif; ?>
      </div>
    </div>
  </section>

  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sFAQ', 'sFAQ_func');
function sFAQ_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sFAQ section" id="sFAQ">
    <div class="sFAQ__container container">
      <div class="sFAQ__q-sign d-none d-md-block"><img loading="lazy" src="img/svg/sFaq-q-sing.svg" alt=""/>
      </div>
      <div class="section-title">
        <?php echo the_field('заголовок07'); ?>
      </div>
      <div class="sFAQ__row row">
        <?php if (have_rows('вопросы07')): while (have_rows('вопросы07')) : the_row(); ?>
          <?php
            $openQuestion = get_sub_field("вопрос_открыт07");
          ?>

          <div class="sFAQ__col col-xl-4">
            <div class="sFAQ__item faq-item-js">
              <div class="sFAQ__ques-bl">
                <!-- picture-->
                <picture class="sFAQ__pic">
                  <img src="<?php the_sub_field("фоновое_изображение07");?>" alt="" loading="lazy"/>
                </picture>
                <!-- /picture-->
                <div class="sFAQ__question faq-question-js">
                  <?php the_sub_field("вопрос07");?>
                  Кухня у меня уже есть, мне нужно еще пару шкафчиков, вы это делаете?
                </div>
                <div class="sFAQ__show-btn faq-btn-js <?php if (get_sub_field("вопрос_открыт07") === 'Нет') {echo 'active';}?>">
                  Посмотреть ответ
                </div>
              </div>
              <div class="sFAQ__reply faq-reply-js <?php if (get_sub_field("вопрос_открыт07") === 'Да') {echo 'active';}?>">
                <?php the_sub_field("ответ07");?>
              </div>
            </div>
          </div>
        <?php endwhile; else : endif; ?>
      </div>
    </div>
  </section>

  <?php
  return ob_get_clean();
}

/*
* *****************************************************
*/
add_shortcode('sKnow', 'sKnow_func');
function sKnow_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sKnow section" id="sKnow">
    <div class="section-title-alt">
      <div class="container">
        <div class="section-title-alt__row row align-items-center gy-3">
          <div class="section-title-alt__title-col col-lg-7 col-xl-8 col-xxl-auto">
            <?php echo the_field('заголовок09'); ?>
          </div>
          <div class="col-md-8 col-lg">
            <div class="section-title-alt__descr">
              <?php echo the_field('описание09'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="sKnow__main-row row gy-3">
        <div class="sKnow__steps-col col-xl-auto">
          <div class="quize quize--js">
            <div class="quize__slider-wrap">
              <div class="swiper-container quize-steps-slider-js">
                <div class="swiper-wrapper">
                  <div class="swiper-slide quize-step-slide-js">
                    <div class="quize__step quize-step-btn-js">Стиль интерьера
                    </div>
                  </div>
                  <div class="swiper-slide quize-step-slide-js">
                    <div class="quize__step quize-step-btn-js">Тип кухни
                    </div>
                  </div>
                  <div class="swiper-slide quize-step-slide-js">
                    <div class="quize__step quize-step-btn-js">Площадь кухни
                    </div>
                  </div>
                  <div class="swiper-slide quize-step-slide-js">
                    <div class="quize__step quize-step-btn-js">Сроки
                    </div>
                  </div>
                  <div class="swiper-slide quize-step-slide-js">
                    <div class="quize__step quize-step-btn-js">Бюджет
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="quize__body">
              <div class="quize__card-wrap quize-card-wrap-js active">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      <?php echo the_field('тест_шаг1_заголовок'); ?>
                    </div>
                  </div>
                  <div class="quize__content">
                    <div class="quize__content-row row gy-3">
                      <?php if (have_rows('тест_шаг1')): while (have_rows('тест_шаг1')) : the_row(); ?>
                        <div class="col-6 col-sm-4">
                          <label class="pic-chb small">
                            <input class="q-radio-choise-js invisible" type="radio" value="<?php echo the_sub_field('текст_варианта'); ?>" name="q-style"/>
                            <span class="item">
                            <span class="img-box">
                              <img loading="lazy" src="<?php echo the_sub_field('картинка_варианта'); ?>" alt=""/>
                              <span class="ball"></span>
                              <span class="ball ball--checked"></span>
                            </span>
                            <span class="text-center">
                              <span class="txt">
                                <?php echo the_sub_field('текст_варианта'); ?>
                              </span>
                            </span>
                          </span>
                          </label>
                        </div>
                      <?php endwhile; else : endif; ?>
                    </div>
                  </div>
                  <div class="quize__f-row row">
                    <div class="col-sm">
                      <label class="quize__hard-label">
                        <input class="q-radio-choise-js invisible" type="radio" value="Затрудняюсь с выбором" name="q-style"/>
                        <div class="hard-btn">Затрудняюсь с выбором</div>
                      </label>
                    </div>
                    <div class="col-sm-auto">
                      <button class="quize__forward-btn forward-btn-js" type="button">Следующий шаг
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--step -->
              <div class="quize__card-wrap quize-card-wrap-js">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      <?php echo the_field('тест_шаг2_заголовок'); ?>
                    </div>
                  </div>
                  <div class="quize__content">
                    <div class="quize__content-row row gy-3">
                      <?php if (have_rows('тест_шаг2')): while (have_rows('тест_шаг2')) : the_row(); ?>
                        <div class="col-6 col-md-3">
                          <label class="pic-chb img-contain">
                            <input class="q-radio-choise-js invisible" type="radio" value="<?php echo the_sub_field('текст_варианта'); ?>" name="q-type"/>
                            <span class="item"><span class="img-box">
                                <img loading="lazy" src="<?php echo the_sub_field('картинка_варианта'); ?>" alt=""/>
                                <span class="ball"></span>
                                <span class="ball ball--checked"></span>
                              </span>
																<span class="d-block text-center">
                                  <span class="txt">
                                    <?php echo the_sub_field('текст_варианта'); ?>
                                  </span>
                                </span>
                            </span>
                          </label>
                        </div>
                      <?php endwhile; else : endif; ?>
                    </div>
                  </div>
                  <div class="quize__f-row row">
                    <div class="col-sm">
                      <label class="quize__hard-label">
                        <input class="q-radio-choise-js invisible" type="radio" value="Затрудняюсь с выбором" name="q-type"/>
                        <div class="hard-btn">Затрудняюсь с выбором</div>
                      </label>
                    </div>
                    <div class="col-sm-auto">
                      <button class="quize__forward-btn forward-btn-js" type="button">Следующий шаг
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--step -->
              <div class="quize__card-wrap quize-card-wrap-js">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      <?php echo the_field('тест_шаг3_заголовок'); ?>
                    </div>
                  </div>
                  <div class="quize__content">
                    <div class="quize__content-row row gy-3">
                      <?php if (have_rows('тест_шаг3')): while (have_rows('тест_шаг3')) : the_row(); ?>
                        <div class="col-6 col-md-3">
                          <label class="pic-chb">
                            <input class="q-radio-choise-js invisible" type="radio" value="<?php echo the_sub_field('текст_варианта'); ?>" name="q-length"/>
                            <span class="item">
                              <span class="img-box">
                                <img loading="lazy" src="<?php echo the_sub_field('картинка_варианта'); ?>" alt=""/>
                                <span class="ball"></span>
                                <span class="ball ball--checked"></span>
                              </span>
																<span class="d-block text-center">
                                  <span class="txt">
                                    <?php echo the_sub_field('текст_варианта'); ?>
                                  </span>
                                </span>
                            </span>
                          </label>
                        </div>
                      <?php endwhile; else : endif; ?>
                    </div>
                  </div>
                  <div class="quize__f-row row">
                    <div class="col-sm">
                      <label class="quize__hard-label">
                        <input class="q-radio-choise-js invisible" type="radio" value="Затрудняюсь с выбором" name="q-length"/>
                        <div class="hard-btn">Затрудняюсь с выбором</div>
                      </label>
                    </div>
                    <div class="col-sm-auto">
                      <button class="quize__forward-btn forward-btn-js" type="button">Следующий шаг
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--step -->
              <div class="quize__card-wrap quize-card-wrap-js">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      <?php echo the_field('тест_шаг4_заголовок'); ?>
                    </div>
                  </div>
                  <div class="quize__content">
                    <div class="quize__content-row row gy-3">
                      <?php if (have_rows('тест_шаг4')): while (have_rows('тест_шаг4')) : the_row(); ?>
                        <div class="col-sm-6 col-md-4">
                          <label class="pic-chb pic-chb--ball">
                            <input class="q-radio-choise-js invisible" type="radio" value="<?php echo the_sub_field('текст_варианта'); ?>" name="q-time"/>
                            <span class="item">
                              <span class="img-box">
                                <span class="number">
                                  <?php echo the_sub_field('номер_варианта'); ?>
                                </span>
                                <span class="ball"></span>
                                <span class="ball ball--checked"></span>
                              </span>
																<span class="d-block text-center">
                                  <span class="txt txt--long">
                                    <?php echo the_sub_field('текст_варианта'); ?>
                                  </span>
																</span></span>
                          </label>
                        </div>
                      <?php endwhile; else : endif; ?>
                    </div>
                  </div>
                  <div class="quize__f-row row">
                    <div class="col-sm">
                      <label class="quize__hard-label">
                        <input class="q-radio-choise-js invisible" type="radio" value="Затрудняюсь с выбором" name="q-time"/>
                        <div class="hard-btn">Затрудняюсь с выбором</div>
                      </label>
                    </div>
                    <div class="col-sm-auto">
                      <button class="quize__forward-btn forward-btn-js" type="button">
                        Следующий шаг
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--step -->
              <div class="quize__card-wrap quize-card-wrap-js">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      <?php echo the_field('тест_шаг5_заголовок'); ?>
                    </div>
                  </div>
                  <div class="quize__content">
                    <div class="quize__content-row row gy-3">
                      <?php if (have_rows('тест_шаг5')): while (have_rows('тест_шаг5')) : the_row(); ?>
                        <div class="col-sm-6 col-md-4">
                          <label class="pic-chb pic-chb--ball">
                            <input class="q-radio-choise-js invisible" type="radio" value="<?php echo the_sub_field('текст_варианта'); ?>" name="q-price"/>
                            <span class="item">
                              <span class="img-box">
                                <span class="number">
                                  <?php echo the_sub_field('номер_варианта'); ?>
                                </span>
                                <span class="ball"></span>
                                <span class="ball ball--checked"></span>
                              </span>
																<span class="text-center">
                                  <span class="txt txt--long">
                                    <?php echo the_sub_field('текст_варианта'); ?>
                                  </span>
																</span>
                            </span>
                          </label>
                        </div>
                      <?php endwhile; else : endif; ?>
                    </div>
                  </div>
                  <div class="quize__f-row row">
                    <div class="col-sm">
                      <label class="quize__hard-label">
                        <input class="q-radio-choise-js invisible" type="radio" value="Затрудняюсь с выбором" name="q-price"/>
                        <div class="hard-btn">Затрудняюсь с выбором</div>
                      </label>
                    </div>
                    <div class="col-sm-auto">
                      <button class="quize__forward-btn forward-btn-js" type="button">Следующий шаг
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--last form-->
              <div class="quize__card-wrap quize-card-wrap-js">
                <div class="quize__card">
                  <div class="text-center">
                    <div class="quize__title">
                      Заполните форму, чтобы
                      <br class="d-none d-sm-block"/>получить результаты теста
                    </div>
                  </div>
                  <div class="card-form quize__content">
                    <div class="form-wrap">
                      <form>
                        <?php echo do_shortcode('[contact-form-7 id="295" title="Без названия"]'); ?>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sKnow__baners-col col">
          <div class="sKnow__b-row row">
            <div class="col-sm-6 col-lg-3 col-xl-6">
              <div class="sKnow__card">
                <div class="sKnow__c-ball">
                  <!-- picture-->
                  <picture class="sKnow__c-img">
                    <img src="<?php echo the_field('картинка_карточки01'); ?>" alt="" loading="lazy"/>
                  </picture>
                  <!-- /picture-->
                </div>
                <div class="sKnow__c-txt">
                  <?php echo the_field('текст_карточки09_1'); ?>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-6">
              <div class="sKnow__card">
                <div class="sKnow__c-ball">
                  <!-- picture-->
                  <picture class="sKnow__c-img">
                    <img src="<?php echo the_field('картинка_карточки02'); ?>" alt="" loading="lazy"/>
                  </picture>
                  <!-- /picture-->
                </div>
                <div class="sKnow__c-txt">
                  <?php echo the_field('текст_карточки09_2'); ?>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-12">
              <div class="sKnow__baner">
                <!-- picture-->
                <picture class="sKnow__b-img">
                  <img src="<?php echo the_field('картинка_банера09'); ?>" alt="" loading="lazy"/>
                </picture>
                <!-- /picture-->
                <div class="sKnow__b-content">
                  <div class="sKnow__b-ball">
                    <div class="sKnow__discont-txt">
                      Ваша скидка
                    </div>
                    <div class="sKnow__discont-val">
                      <?php echo the_field('скидка_банера09'); ?>
                    </div>
                  </div>
                  <div class="sKnow__b-txt">
                    <?php echo the_field('текст_банера09'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  return ob_get_clean();
}

//new
add_shortcode('headerBlock', 'headerBlock_func');
function headerBlock_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="headerBlock section" id="headerBlock">
    <!-- picture-->
    <picture class="headerBlock__bg">
      <img src="<?php echo the_field('фон01'); ?>" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <!-- picture-->
    <picture class="headerBlock__paper d-none d-lg-block">
      <img src="<?php echo the_field('документ01'); ?>" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="container">
      <div class="section-title">
        <?php echo the_field('заголовок01'); ?>
      </div>
      <div class="headerBlock__row row">
        <?php if (have_rows('плиточки01')): while (have_rows('плиточки01')) : the_row(); ?>
          <div class="col-6 col-md-auto <?php echo get_sub_field('cssclasses');?>">
            <div class="headerBlock__item">
              <div class="headerBlock__i-row row align-items-center">
                <div class="col-auto">
                  <div class="headerBlock__ball">
                    <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/check-ball.svg" alt=""/>
                  </div>
                </div>
                <div class="col">
                  <div class="headerBlock__gray">
                    <?php echo get_sub_field('заголовок');?>
                  </div>
                  <div class="headerBlock__txt">
                    <?php echo get_sub_field('значение');?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; else : endif; ?>
      </div>
      <div class="text-center text-md-start">
        <a class="headerBlock__btn link-modal-js" href="#modal-calc">
          <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/calc.svg" alt=""/>
          <span>Рассчитать стоимость</span>
        </a>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}

/*
* *****************************************************
*/
add_shortcode('sForm', 'sForm_func');
function sForm_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sForm sForm--js section">
    <div class="container">
      <div class="sForm__box-wrap">
        <div class="sForm__box">
          <div class="section-title text-center text-md-start">
            <h2>
              <?php echo the_field('заголовок016'); ?>
              <span class="typed-js"
                 <?php
                  $sec_num = 1;

                  if (have_rows('зеленая_бегущая_строка016')): while (have_rows('зеленая_бегущая_строка016')) : the_row(); ?>
                    data-txt<?php echo $sec_num;?>="<?php echo get_sub_field('зеленая_строка');?>"
                    <?php $sec_num++; ?>
                <?php endwhile; else : endif; ?>
              ></span>
            </h2>
          </div>
          <div class="sForm__search-box">
            <div class="sForm__input-wrap">
              <input class="sForm__input form-control sForm-search-js" type="text" name="search" placeholder="Введите свой ППР в поиск" autocomplete="off"/>
              <button class="sForm__btn sForm-btn-js" type="button">Найти ППР
              </button>
            </div>
            <div class="sForm__result-row row d-none d-md-flex">
              <div class="col-auto">
                <div class="sForm__key">Найдено результатов:
                </div>
                <?php
                  $default_items_amount = 0;
                  if (have_rows('результат_по_умолчанию16')): while (have_rows('результат_по_умолчанию16')) : the_row();
                    $default_items_amount++;
                  endwhile; else : endif; ?>
                <div class="sForm__val sForm-items-found">
                  <?php echo $default_items_amount;?>
                </div>
              </div>
            </div>
            <div class="sForm__items ppr-items-js text-center text-md-start" data-price-from="<?php echo the_field('цена_от16'); ?>">
              <?php if (have_rows('результат_по_умолчанию16')): while (have_rows('результат_по_умолчанию16')) : the_row(); ?>
                <div class="sForm__item">
                  <div class="sForm__i-row row align-items-center">
                    <div class="sForm__i-title col-md">
                      <?php echo get_sub_field('название');?>
                    </div>
                    <div class="sForm__i-price col-md-auto">
                      <?php echo get_sub_field('цена');?>
                    </div>
                    <div class="col-md-auto">
                      <a
                        class="sForm__i-btn link-modal-js"
                        href="#modal-price"
                        data-title="<?php echo get_sub_field('название');?>"
                        data-price="<?php echo get_sub_field('цена');?>"
                      >
                        Заказать ППр
                      </a>
                    </div>
                  </div>
                </div>
              <?php endwhile; else : endif; ?>
            </div>
            <div class="text-center d-md-none">
              <a class="sForm__show-more" href="#">
                <svg class="icon icon-reload ">
                  <use xlink:href="img/svg/sprite.svg#reload"></use>
                </svg><span class="sForm__sm-txt">Показать больше</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sAlso', 'sAlso_func');
function sAlso_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sAlso section" id="sAlso">
    <!-- picture-->
    <picture class="sAlso__bg d-none d-xxl-block">
      <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/pin.png" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="container">
      <div class="section-title text-center text-md-start">
        <h2>
          <?php echo the_field('заголовок02'); ?>
        </h2>
      </div>
      <div class="sAlso__row row">
        <?php if (have_rows('плиточки02')): while (have_rows('плиточки02')) : the_row(); ?>
          <div class="col-lg-4">
          <a class="sAlso__item" href="<?php echo get_sub_field('ссылка');?>" target="_blank">
            <div class="sAlso__i-row row align-items-center flex-nowrap">
              <div class="col-auto">
                <!-- picture-->
                <picture class="sAlso__img">
                  <img src="<?php echo get_sub_field('картинка');?>" alt="" loading="lazy"/>
                </picture>
                <!-- /picture-->
              </div>
              <div class="sAlso__txt-col col">
                <?php echo get_sub_field('текст');?>
              </div>
            </div>
          </a>
        </div>
        <?php endwhile; else : endif; ?>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}

/*
* *****************************************************
*/
add_shortcode('sMade', 'sMade_func');
function sMade_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sMade section" id="sMade">
    <div class="container">
      <div class="section-title text-center">
        <?php echo the_field('заголовок04'); ?>
      </div>
      <div class="sMade__slider-wrap">
        <div class="swiper sMade-slider-js">
          <div class="swiper-wrapper">
            <?php
              $slideIndex = 0;
            ?>
            <?php if (have_rows('сладер04')): while (have_rows('сладер04')) : the_row(); ?>
              <?php
                $slideIndex += 1;
              ?>
              <div class="swiper-slide">
              <div class="sMade__item-wrap">
                <div class="sMade__item">
                  <div class="sMade__i-row row justify-content-center">
                    <div class="sMade__col sMade__col--img col-md-9 col-lg-6 col-xl-auto">
                      <a class="sMade__link" href="<?php echo get_sub_field('картинка');?>" data-fancybox="sMadeSlide<?php echo $slideIndex;?>">
                        <!-- picture-->
                        <picture class="sMade__img">
                          <img src="<?php echo get_sub_field('картинка');?>" alt="" loading="lazy"/>
                        </picture>
                        <!-- /picture-->
                        <div class="sMade__btn-pl">
                          <svg class="icon icon-zoom-pl ">
                            <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#zoom-pl"></use>
                          </svg>
                        </div>
                      </a>
                    </div>
                    <div class="sMade__col sMade__col--content col-lg-6 col-xl text-center text-lg-start">
                      <div class="sMade__title">
                        <?php echo get_sub_field('заголовок');?>
                      </div>
                      <div class="sMade__client">
                        <?php echo get_sub_field('клиент');?>
                      </div>
                      <div class="sMade__b-row row justify-content-lg-start justify-content-center">
                        <div class="col-12">
                          <div class="sMade__difficulty">
                            <div class="sMade__d-txt">
                              Сложность
                            </div>
                            <div class="sMade__d-stars">
                              <?php for ($i = 1; $i <= get_sub_field('сложность'); $i++) {?>
                                <svg class="icon icon-star ">
                                  <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#star"></use>
                                </svg>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                        <?php if (have_rows('синие_плиточки04')): while (have_rows('синие_плиточки04')) : the_row(); ?>
                          <div class="col-md-auto">
                            <div class="sMade__blue">
                              <?php echo get_sub_field('текс04');?>
                            </div>
                          </div>
                        <?php endwhile; else : endif; ?>
                      </div>
                      <a class="sMade__btn link-modal-js" href="#modal-price" data-title="<?php echo get_sub_field('заголовок');?>">
                        <?php echo get_sub_field('текст_кнопки_в_слайде04'); ?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; else : endif; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sCategory', 'sCategory_func');
function sCategory_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sCategory section" id="sCategory">
    <picture class="sCategory__bg">
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sCategory-bg.webp" media="(min-width:576px)"/>
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sCategory-bg-mob.webp" media="(max-width:576px)"/>
      <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sCategory-bg.png" alt=""/>
    </picture>
    <div class="sCategory__pic sCategory__pic--pencil">
      <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sCategory-pencil.png" alt=""/>
    </div>
    <!-- picture-->
    <picture class="sCategory__pic sCategory__pic--paper d-none d-xl-block">
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sCategory-paper.webp"/>
      <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sCategory-paper.png" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="container">
      <div class="section-title text-center">
        <?php echo the_field('заголовок05'); ?>
      </div>
      <div class="sCategory__row sCategory-row-js row">
        <?php
          $images = get_field('галерея05');
          if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="sCategory__item">
                  <!-- picture-->
                  <picture class="sCategory__img">
                    <?php echo wp_get_attachment_image( $image['ID'], '560' ); ?>
                  </picture>
                  <!-- /picture-->
                  <div class="sCategory__title">
                    <?php echo $image['alt']; ?>
                  </div>
                  <div class="sCategory__price">
                    <?php echo $image['caption']; ?>
                  </div>
                  <a class="sCategory__i-btn sCategory-item-btn-js link-modal-js"
                     href="#modal-call"
                     data-title="<?php echo $image['alt']; ?>"
                     data-price="<?php echo $image['caption']; ?>"
                  >
                    Заказать ППр
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <button class="sCategory__btn sCategory-btn-js" type="button">
        <svg class="icon icon-reload ">
          <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#reload"></use>
        </svg>
        <span class="txt">
          <span>Смотеть больше категорий ппр</span>
          <span>Скрыть категории</span>
        </span>
      </button>
    </div>
  </section>
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sOrder', 'sOrder_func');
function sOrder_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sOrder section">
    <div class="container">
      <div class="sOrder__row row">
        <div class="col-lg-7">
          <div class="section-title text-center text-lg-start">
            <?php echo the_field('заголовок06'); ?>
          </div>
          <div class="sOrder__items">
            <?php if (have_rows('плиточки06')): while (have_rows('плиточки06')) : the_row(); ?>
              <div class="sOrder__item">
                <div class="sOrder__i-row row">
                  <div class="col-auto">
                    <div class="sOrder__ball">
                      <svg class="icon icon-check ">
                        <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#check"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="col">
                    <div class="sOrder__sub-row row">
                      <div class="col-auto">
                        <div class="sOrder__title">
                          <?php echo get_sub_field('заголовок');?>
                        </div>
                        <div class="sOrder__descr d-none d-sm-block">
                          <?php echo get_sub_field('описание');?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-sm-none">
                    <div class="sOrder__descr">
                      <?php echo get_sub_field('описание');?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
            <div class="sOrder__item d-none d-lg-block item-inverse">
              <div class="sOrder__i-row row">
                <div class="col-auto">
                  <div class="sOrder__ball">
                    <svg class="icon icon-check ">
                      <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#check"></use>
                    </svg>
                  </div>
                </div>
                <div class="col">
                  <div class="sOrder__sub-row row">
                    <?php if (have_rows('зеленая_плиточка06')): while (have_rows('зеленая_плиточка06')) : the_row(); ?>
                      <div class="col-auto">
                        <div class="sOrder__title">
                          <?php echo get_sub_field('заголовок');?>
                        </div>
                        <div class="sOrder__descr">
                          <?php echo get_sub_field('описание');?>
                        </div>
                      </div>
                    <?php endwhile; else : endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sOrder__item green-item d-lg-none">
            <?php if (have_rows('зеленая_плиточка06')): while (have_rows('зеленая_плиточка06')) : the_row(); ?>
              <div class="sOrder__i-row row">
                <div class="col-auto">
                  <div class="sOrder__ball">
                    <svg class="icon icon-check ">
                      <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#check"></use>
                    </svg>
                  </div>
                </div>
                <div class="col">
                  <div class="sOrder__title">
                    <?php echo get_sub_field('заголовок');?>
                  </div>
                  <div class="sOrder__descr">
                    <?php echo get_sub_field('описание');?>
                  </div>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="form-wrap">
            <div class="form-wrap__box">
              <div class="text-center">
                <div class="form-wrap__title">
                  <?php echo the_field('заголовок_форма06'); ?>
                </div>
                <div class="form-wrap__sm-txt">
                  Заполните форму:
                </div>
              </div>
              <?php echo do_shortcode('[contact-form-7 id="256" title="секция sOrder"]');?>
            </div>
            <div class="form-wrap__green-box">
              <div class="form-wrap__g-row row align-items-center justify-content-center">
                <div class="form-wrap__g-val col-auto">
                  <?php echo the_field('скидка_форма_значение06'); ?>
                </div>
                <div class="form-wrap__g-txt col-auto">
                  <?php echo the_field('скидка_форма_текст06'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}

/*
* *****************************************************
*/
add_shortcode('sSpec', 'sSpec_func');
function sSpec_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sSpec section" id="sSpec">
    <picture class="sSpec__bg">
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sSpec-bg.webp" media="(min-width:576px)"/>
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sSpec-bg-mob.webp" media="(max-width:576px)"/>
      <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sSpec-bg.png" alt=""/>
    </picture>
    <div class="container">
      <div class="section-title text-center">
        <?php echo the_field('заголовок07'); ?>
      </div>
      <div class="sSpec__slider-wrap">
        <div class="swiper sSpec-slider-js">
          <div class="swiper-wrapper">
            <?php if (have_rows('слайды07')): while (have_rows('слайды07')) : the_row(); ?>
              <div class="swiper-slide">
                <div class="sSpec__card-wrap">
                  <div class="sSpec__card">
                    <div class="sSpec__top-row row align-items-center">
                      <div class="col-auto">
                        <div class="sSpec__img">
                          <?php
                            $image = get_sub_field('портрет');
                            if($image) {
                              echo wp_get_attachment_image( $image['ID'], 'thumbnail' );
                            } else { ?>
                              <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/user-stab.svg" alt=""/>
                          <?php }  ?>
                        </div>
                      </div>
                      <div class="sSpec__name-col col">
                        <?php echo get_sub_field('должность');?>
                      </div>
                    </div>
                    <div class="sSpec__descr">
                      <?php echo get_sub_field('описание');?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
          <div class="swiper-pagination d-md-none"></div>
        </div>
      </div>
      <div class="text-center">
        <a class="sSpec__btn link-modal-js" href="#modal-calc">
          <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/calc.svg" alt=""/>
          <span>Рассчитать стоимость</span>
        </a>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sStandart', 'sStandart_func');
function sStandart_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sStandart section" id="sStandart">
    <!-- picture-->
    <picture class="sStandart__bg d-none d-lg-block">
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sStandart-bg.webp"/>
      <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sStandart-bg.png" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="container">
      <div class="sStandart__row row">
        <div class="col-lg-7 col-xl-8">
          <div class="section-title text-center text-lg-start">
            <?php echo the_field('заголовок08'); ?>
          </div>
          <div class="sStandart__items-row row">
            <?php if (have_rows('плиточки08')): while (have_rows('плиточки08')) : the_row(); ?>
              <div class="col-md-6">
                <div class="sStandart__item">
                  <div class="sStandart__i-row row align-items-center">
                    <div class="col-auto">
                      <div class="sStandart__i-ball">
                        <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/check-ball.svg" alt=""/>
                      </div>
                    </div>
                    <div class="col">
                      <div class="sStandart__i-title">
                        <?php echo get_sub_field('заголовок');?>
                      </div>
                    </div>
                  </div>
                  <div class="sStandart__descr">
                    <?php echo get_sub_field('описание');?>
                  </div>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
          <!--remove d-none d-sm-block, love pp-->
          <a class="sStandart__btn d-none d-sm-block link-modal-js" href="#modal-price">
            Заказать ппр по строительным стандартам
          </a>
        </div>
        <div class="col-lg">
          <div class="sStandart__ball">
            <?php echo the_field('шарик08'); ?>
          </div>
        </div>
      </div>
      <div class="sStandart__paper">
        <img src="<?php echo the_field('картинка08'); ?>" alt=""/>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sDay', 'sDay_func');
function sDay_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sDay section" id="sDay">
    <picture class="sDay__bg">
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sCategory-bg.webp" media="(min-width:576px)"/>
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sCategory-bg-mob.webp" media="(max-width:576px)"/>
      <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sCategory-bg.png" alt=""/>
    </picture>
    <div class="sDay__img d-none d-xl-block">
      <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sDay-img.png" alt=""/>
    </div>
    <div class="container">
      <div class="sDay__row row">
        <div class="col-xl-8 ms-auto">
          <div class="sDay__sub-row row">
            <div class="col-md-6">
              <div class="section-title text-center text-md-start">
                <?php echo the_field('заголовок09'); ?>
              </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
              <div class="sDay__green">
                <div class="sDay__green-bg">
                  <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/sDay-green.svg" alt=""/>
                </div>
                <?php echo the_field('зеленая_плашка09'); ?>
              </div>
            </div>
          </div>
          <div class="sDay__items-row row">
            <?php if (have_rows('плиточки09')): while (have_rows('плиточки09')) : the_row(); ?>
              <div class="sDay__col col-md-6">
                <div class="sDay__item">
                  <div class="sDay__title-wrap">
                    <div class="sDay__title">
                      <?php echo get_sub_field('тайтл');?>
                    </div>
                  </div>
                  <div class="sDay__descr">
                    <?php echo get_sub_field('описание');?>
                  </div>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}

/*
* *****************************************************
*/
add_shortcode('sOpen', 'sOpen_func');
function sOpen_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sOpen sOpen--js section" id="sOpen">
    <div class="sOpen__container container">
      <div class="sOpen__bg d-none d-xl-block">
        <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sOpen-img.png" alt=""/>
      </div>
      <div class="section-title">
        <?php echo the_field('заголовок010'); ?>
      </div>
      <div class="sOpen__cert-title">
        <?php echo the_field('заголовок_сертификат010'); ?>
      </div>
      <div class="sOpen__slider-wrap">
        <div class="swiper sOpen-slider-js">
          <div class="swiper-wrapper">
            <?php
              $images = get_field('галерея010');
              if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                  <div class="swiper-slide">
                    <div class="sOpen__card-wrap">
                      <div class="sOpen__card">
                        <div class="sOpen__img">
                          <img class="swiper-lazy" src="#" data-src="<?php echo $image['sizes']['373']; ?>" alt=""/>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <div class="d-none d-xl-block">
            <div class="swiper-button-hand swiper-button-hand-prev swiper-button-prev">
              <svg class="icon icon-arrow-left ">
                <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#arrow-left"></use>
              </svg>
            </div>
            <div class="swiper-button-hand swiper-button-hand-next swiper-button-next">
              <svg class="icon icon-arrow-right ">
                <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#arrow-right"></use>
              </svg>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}

/*
* *****************************************************
*/
add_shortcode('sFeedback', 'sFeedback_func');
function sFeedback_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sFeedback sFeedback--js section" id="sFeedback">
    <!-- picture-->
    <picture class="sFeedback__bg">
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sFeedback-bg.webp"/>
      <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sFeedback-bg.png" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="container">
      <div class="section-title text-center">
        <?php echo the_field('заголовок11'); ?>
      </div>
      <div class="sOpen__slider-wrap">
        <div class="swiper sFeedback-slider-js">
          <div class="swiper-wrapper">
            <?php
              $images = get_field('галерея011');
              if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                  <div class="swiper-slide">
                    <div class="sOpen__card-wrap">
                      <div class="sOpen__card">
                        <div class="sOpen__img">
                          <img class="swiper-lazy" src="#" data-src="<?php echo $image['sizes']['373']; ?>" alt=""/>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
            <?php endif; ?>
          </div>
          <div class="d-none d-xl-block">
            <div class="swiper-button-hand swiper-button-hand-prev swiper-button-prev">
              <svg class="icon icon-arrow-left ">
                <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#arrow-left"></use>
              </svg>
            </div>
            <div class="swiper-button-hand swiper-button-hand-next swiper-button-next">
              <svg class="icon icon-arrow-right ">
                <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#arrow-right"></use>
              </svg>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}
/*
* *****************************************************
*/
add_shortcode('sOrder2', 'sOrder2_func');
function sOrder2_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  ?>
  <section class="sOrder section">
    <!-- picture-->
    <picture class="sOrder__bg d-none d-xl-flex">
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sOrder-pencil.webp"/>
      <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sOrder-pencil.png" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="container">
      <div class="sOrder__row row">
        <div class="col-lg-7">
          <div class="section-title text-center text-lg-start">
            <?php echo the_field('заголовок12'); ?>
          </div>
          <div class="sOrder__items">
            <?php if (have_rows('плиточки06')): while (have_rows('плиточки06')) : the_row(); ?>
              <div class="sOrder__item">
                <div class="sOrder__i-row row">
                  <div class="col-auto">
                    <div class="sOrder__ball">
                      <svg class="icon icon-check ">
                        <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#check"></use>
                      </svg>
                    </div>
                  </div>
                  <div class="col">
                    <div class="sOrder__sub-row row">
                      <div class="col-auto">
                        <div class="sOrder__title">
                          <?php echo get_sub_field('заголовок');?>
                        </div>
                        <div class="sOrder__descr d-none d-sm-block">
                          <?php echo get_sub_field('описание');?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-sm-none">
                    <div class="sOrder__descr">
                      <?php echo get_sub_field('описание');?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
            <div class="sOrder__item d-none d-lg-block item-inverse">
              <div class="sOrder__i-row row">
                <div class="col-auto">
                  <div class="sOrder__ball">
                    <svg class="icon icon-check ">
                      <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#check"></use>
                    </svg>
                  </div>
                </div>
                <div class="col">
                  <div class="sOrder__sub-row row">
                    <?php if (have_rows('зеленая_плиточка06')): while (have_rows('зеленая_плиточка06')) : the_row(); ?>
                      <div class="col-auto">
                        <div class="sOrder__title">
                          <?php echo get_sub_field('заголовок');?>
                        </div>
                        <div class="sOrder__descr">
                          <?php echo get_sub_field('описание');?>
                        </div>
                      </div>
                    <?php endwhile; else : endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sOrder__item green-item d-lg-none">
            <?php if (have_rows('зеленая_плиточка06')): while (have_rows('зеленая_плиточка06')) : the_row(); ?>
              <div class="sOrder__i-row row">
                <div class="col-auto">
                  <div class="sOrder__ball">
                    <svg class="icon icon-check ">
                      <use xlink:href="<?php echo $get_template_directory_uri;?>/public/img/svg/sprite.svg#check"></use>
                    </svg>
                  </div>
                </div>
                <div class="col">
                  <div class="sOrder__title">
                    <?php echo get_sub_field('заголовок');?>
                  </div>
                  <div class="sOrder__descr">
                    <?php echo get_sub_field('описание');?>
                  </div>
                </div>
              </div>
            <?php endwhile; else : endif; ?>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="form-wrap">
            <div class="form-wrap__box">
              <div class="text-center">
                <div class="form-wrap__title">
                  <?php echo the_field('заголовок_форма06'); ?>
                </div>
                <div class="form-wrap__sm-txt">
                  Заполните форму:
                </div>
              </div>
              <?php echo do_shortcode('[contact-form-7 id="256" title="секция sOrder"]');?>
            </div>
            <div class="form-wrap__green-box">
              <div class="form-wrap__g-row row align-items-center justify-content-center">
                <div class="form-wrap__g-val col-auto">
                  <?php echo the_field('скидка_форма_значение06'); ?>
                </div>
                <div class="form-wrap__g-txt col-auto">
                  <?php echo the_field('скидка_форма_текст06'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}

/*
* *****************************************************
*/

add_shortcode('sContact', 'sContact_func');
function sContact_func()
{
  global $get_template_directory_uri, $delay;
  ob_start();
  $mail = get_field('имейл00', 'option');
  $mail_href = 'mailto:'.get_field('имейл00', 'option');

  $tel = get_field('телефон00', 'option');
  $tel_href = "tel:+".str_replace('/[^0-9]/', "", $tel);

  ?>
  <section class="sContact section" id="sContact">
    <div class="sContact__map d-none d-md-block">
      <div class="make-yandex-lazy-js" data-src="<?php echo get_field('скрипт_карты13', 'option'); ?>"></div>
    </div>
    <div class="sContact__container container">
      <div class="sContact__box-wrap">
        <div class="sContact__box">
          <h2>Контакты</h2>
          <div class="sContact__title">
            Телефон:
          </div>
          <a class="sContact__txt sContact__txt--tell" href="<?php echo $tel_href;?>">
            <?php echo $tel;?>
          </a>
          <div class="sContact__title">Режим работы:
          </div>
          <div class="sContact__txt sContact__txt--shedule">
            <?php echo get_field('режим_работы00', 'option'); ?>
          </div>
          <div class="sContact__title">Электронная почта:
          </div>
          <a class="sContact__txt sContact__txt--mail" href="<?php echo $mail_href;?>">
            <?php echo $mail;?>
          </a>
          <div class="sContact__title">Адрес офиса:
          </div>
          <div class="sContact__txt sContact__txt--address">
            <?php echo get_field('адрес00', 'option'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  return ob_get_clean();
}