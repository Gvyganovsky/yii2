<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
?>
<div class="site-about">
  <?php

use yii\bootstrap5\Carousel;

$this->title = 'Мой слайдер';

?>

<style>
    body {
        background-color: #212529;
    }

    .carousel-indicators {
        margin-top: 24px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: gray;
    }
</style>

<div class="site-index" >
    <div class="body-content flex text-center">
        <?php
        echo Carousel::widget([
            'items' => array_map(function ($product) {
                return [
                    'content' => '<img src="../web/uploads/' . $product->image . '" alt="Product Image" style="max-width: 400px; height: 600px;margin-bottom: 8px">' .
                        '<h2 style="color: white; margin-bottom: 42px;">' . $product->name . '</h2>',
                    'options' => [],
                ];
            }, $products),
        ]);
        ?>

    </div>

</div>

</div>
