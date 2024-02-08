<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
?>
<div class="site-about">
    <div class="container py-3">

        <main class="text-center">
            <span class="fs-4">FlowerWorld — укрась жизнь красками</span>

            <h1 class="mb-2">Новинки компании</h1>

            <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                <div class="carousel-inner" style="height: 740px">
                    <?php
                        foreach($products as $product) {
                            echo '
                                    <div class="carousel-item">
                                        <img src="../web/uploads/'.$product->image.'" alt="Product Image" style="max-width: 400px; height: 600px;margin-bottom: 24px">
                                        <h2>'.$product->name.'</h2>
                                    </div>
                                ';
                        }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </main>
    </div>
</div>
