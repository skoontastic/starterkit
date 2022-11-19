<?php
/** @var \Kirby\Cms\Block $block */
$images = $block->images()->toFiles();
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$ratio   = $block->ratio()->or('auto');
?>
<figure<?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>>
  <ul class="gallery" style="--columns: <?= $images->count() ?>">
    <?php foreach ($images as $image): ?>
      <li>
        <?= $image->crop(200,200) ?>
      </li>
    <?php endforeach ?>
  </ul>
  <?php if ($caption->isNotEmpty()): ?>
    <figcaption>
      <?= $caption ?>
    </figcaption>
  <?php endif ?>
</figure>
