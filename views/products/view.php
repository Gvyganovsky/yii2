<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Products $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center" style="display: flex; justify-content: center;">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"><?= $model->name ?></h4>
                    </div>
                    <div class="card-body">
                        <img src="/web/uploads/<?= $model->image ?>" alt="product" width="300px" height="360px"/>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Цена: <?= $model->price ?> рублей</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                            
                        </button>
                    </div>
                </div>
            </div>
    </div>
</div>
