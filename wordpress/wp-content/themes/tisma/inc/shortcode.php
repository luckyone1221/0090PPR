<?php

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
        <a class="headerBlock__btn btn-animate link-modal-js" href="#modal-calc">
          <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/svg/calc.svg" alt=""/>
          <span>Рассчитать стоимость ППР</span>
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
  <section class="sForm sForm--js section" id="calc">
    <div class="container">
      <div class="sForm__box-wrap">
        <div class="sForm__box">
          <div class="section-title text-center text-md-start wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0" >
            <h2>
              <?php echo the_field('заголовок016'); ?>
              <span class="typed-js"
                    data-text='<?php echo the_field('зеленая_бегущая_строка016'); ?>'
              ></span>
            </h2>
          </div>
          <div class="sForm__search-box">
            <div class="sForm__input-wrap">
              <input class="sForm__input form-control sForm-search-js" type="text" name="search" placeholder="Введите свой ППР в поиск (более 471 вида ППР)" autocomplete="off"/>
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
                <div class="sForm__val sForm-items-found d-none">
<!--                  --><?php //echo $default_items_amount;?>

                </div>

              </div>
            </div>
            <div class="sForm__items ppr-items-js text-center text-md-start" data-price-from="<?php echo the_field('цена_от16'); ?>">
<!--              --><?php //if (have_rows('результат_по_умолчанию16')): while (have_rows('результат_по_умолчанию16')) : the_row(); ?>
<!--                <div class="sForm__item">-->
<!--                  <div class="sForm__i-row row align-items-center">-->
<!--                    <div class="sForm__i-title col-md">-->
<!--                      --><?php //echo get_sub_field('название');?>
<!--                    </div>-->
<!--                    <div class="sForm__i-price col-md-auto">-->
<!--                      --><?php //echo get_sub_field('цена');?>
<!--                    </div>-->
<!--                    <div class="col-md-auto">-->
<!--                      <a-->
<!--                        class="sForm__i-btn link-modal-js"-->
<!--                        href="#modal-price"-->
<!--                        data-title="--><?php //echo get_sub_field('название');?><!--"-->
<!--                        data-price="--><?php //echo get_sub_field('цена');?><!--"-->
<!--                      >-->
<!--                        Заказать ППр-->
<!--                      </a>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              --><?php //endwhile; else : endif; ?>
            </div>
            <div class="  mt-2 text-center d-none btn-wrap-more">
              <a class="sForm__show-more link-modal-js" href="#modal-calc">
                <svg class="icon icon-reload ">
                  <use xlink:href="<?php echo $get_template_directory_uri ?>/public/img/svg/sprite.svg#reload"></use>
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
      <div class="section-title text-center text-md-start wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0" >
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
      <div class="section-title text-center wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0" >
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
      <source type="image/avif" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/avif/sCategory-bg.avif" media="(min-width:576px)"/>
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sCategory-bg.webp" media="(min-width:576px)"/>
      <source type="image/avif" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/avif/sCategory-bg-mob.avif" media="(max-width:576px)"/>
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
      <div class="section-title text-center wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0" >
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
  <section class="sOrder section" id="sOrder">
    <div class="container">
      <div class="sOrder__row row">
        <div class="col-lg-7">
          <div class="section-title text-center text-lg-start wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0" >
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
                <div class="form-wrap__policy text-center">
                    Нажимая на кнопку вы соглашаетесь с
                    <a href="<?php echo the_field('ссилка_политики15', 'option'); ?>" target="_blank">
                        политикой конфиденциальности
                    </a>
                </div>
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
      <source type="image/avif" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/avif/sSpec-bg.avif" media="(min-width:576px)"/>
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sSpec-bg.webp" media="(min-width:576px)"/>
      <source type="image/avif" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/avif/sSpec-bg-mob.avif"  />
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sSpec-bg-mob.webp"  />
      <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sSpec-bg.png" alt=""/>
    </picture>
    <div class="container">
      <div class="section-title text-center wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0" >
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
      <source type="image/avif" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/avif/sStandart-bg.avif"/>
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sStandart-bg.webp"/>
      <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sStandart-bg.png" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="container">
      <div class="sStandart__row row">
        <div class="col-lg-7 col-xl-8">
          <div class="section-title text-center text-lg-start wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0" >
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
      <source type="image/avif" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/avif/sCategory-bg.avif" media="(min-width:576px)"/>
        <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sCategory-bg.webp" media="(min-width:576px)"/>
      <source type="image/avif" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/avif/sCategory-bg-mob.avif" />
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sCategory-bg-mob.webp" />

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
              <div class="section-title text-center text-md-start wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0">
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
  <section class="sOpen pb-0 section" id="sOpen">
    <div class="sOpen__container container">
        <div >
      <div class="sOpen__bg d-none d-xl-block">
        <img loading="lazy" src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sOpen-img.png" alt=""/>
      </div>
      <div class="section-title wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0">
        <?php echo the_field('заголовок010'); ?>
      </div>
        </div>

    </div>
  </section>
    <section class="sOpen section  sOpen--js pt-0" id="sert">
        <div class="sOpen__container container">
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
                                            <a class="sOpen__img" data-fancybox="serty" href="<?php echo $image['sizes']['large']; ?>">
                                                <img class="swiper-lazy" src="#" data-src="<?php echo $image['sizes']['373']; ?>" alt=""/>
                                            </a>
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
      <source type="image/avif" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/avif/sFeedback-bg.avif"/>
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sFeedback-bg.webp"/>
      <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sFeedback-bg.png" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="container">
      <div class="section-title text-center  wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0">
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
      <source type="image/avif" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/avif/sOrder-pencil.avif"/>
      <source type="image/webp" srcset="<?php echo $get_template_directory_uri;?>/public/img/@2x/webp/sOrder-pencil.webp"/>
      <img src="<?php echo $get_template_directory_uri;?>/public/img/@2x/sOrder-pencil.png" alt="" loading="lazy"/>
    </picture>
    <!-- /picture-->
    <div class="container">
      <div class="sOrder__row row">
        <div class="col-lg-7">
          <div class="section-title text-center text-lg-start wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0">
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
                <div class="form-wrap__policy text-center">
                    Нажимая на кнопку вы соглашаетесь с
                    <a href="<?php echo the_field('ссилка_политики15', 'option'); ?>" target="_blank">
                        политикой конфиденциальности
                    </a>
                </div>
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
    <div class="sContact__map d-none d-md-block" data-src='<?php echo get_field('скрипт_карты13', 'option'); ?>'>
<!--      <div class="make-yandex-lazy-js" ></div>-->
    </div>
    <div class="sContact__container container">
      <div class="sContact__box-wrap">
        <div class="sContact__box">
          <h2  class="wow animate__slideInLeft" data-wow-duration="0.4s" data-wow-delay="0" >Контакты</h2>
          <div class="sContact__title">
            Телефон:
          </div>
          <a class="sContact__txt sContact__txt--tell" href="<?php echo $tel_href;?>" onclick="yaCounter50042227.reachGoal('telefon')">
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