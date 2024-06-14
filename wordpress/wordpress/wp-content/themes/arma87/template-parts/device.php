<?php
$section = get_field('device');

$title = $section['title'];
$descr = $section['descr'];
$image = $section['image'];

if (!empty($section)) { ?>

  <section class="section device">
    <div class="device__in">
      <div class="device__row">
        <div class="device__col device__col--info">
          <div class="device__info">
            <?php if (!empty($title)) { ?>
              <h2 class="device__title"><?php echo $title ?></h2>
            <?php } ?>
            <?php if (!empty($descr)) { ?>
              <div class="device__descr"><?php echo $descr ?></div>
            <?php } ?>
          </div>
        </div>
        <?php if (!empty($image)) { ?>
          <div class="device__col device__col--img">
            <picture class="device__img_w">
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