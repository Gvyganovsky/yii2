<?php

/** @var yii\web\View $this */

use app\models\Categories;

$this->title = 'My Yii Application';
?>
<div class="container py-3">
  <main>
      <h1>Каталог</h1>

    <div style="display: flex; gap: 12px; margin-bottom: 18px;">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Упорядочить по:
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">стране поставщика</a></li>
                <li><a class="dropdown-item" href="#">наименованию</a></li>
                <li><a class="dropdown-item" href="#">цене</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Отфильтровать:
            </button>
            <ul class="dropdown-menu">
                <?php
                    $categories = Categories::find()->select(['name'])->distinct()->all();
                    foreach ($categories as $category) {
                        echo '<li><a class="dropdown-item" href="#">' . $category->name . '</a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <?php foreach ($products as $product): ?>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"><?= $product->name ?></h4>
                    </div>
                    <div class="card-body">
                        <img src="/web/uploads/<?= $product->image ?>" alt="product" width="300px" height="360px"/>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Цена: <?= $product->price ?> рублей</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                            <a href="/products/<?= $product->product_id ?>">Просмотр товара</a>
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  </main>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
