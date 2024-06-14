<?php
$section = get_field('hero');

$title = $section['title'];
$descr = $section['descr'];
$link = $section['btn'];
$image = $section['image'];

if (!empty($section)) { ?>

  <section class="hero">
    <div class="hero__in">
      <div class="hero__row">
        <div class="hero__col hero__col--info">
          <div class="hero__info">
            <?php if (!empty($title)) { ?>
              <h1 class="hero__title"><?php echo $title ?></h1>
            <?php } ?>
            <?php if (!empty($descr)) { ?>
              <div class="hero__descr"><?php echo $descr ?></div>
            <?php } ?>
            <?php
            if ($link) {
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <div class="hero__btn_w">
                <a class="hero__link btn_base" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              </div>
            <?php } ?>
          </div>
        </div>
        <?php if (!empty($image)) { ?>
          <div class="hero__col hero__col--img">
            <picture class="hero__img_w">
              <?php echo wp_get_attachment_image($image, 'full', false, array('loading' => 'lazy')); ?>
            </picture>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

<?php
}
?>