<?php

use app\models\Categories;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CategoriesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Административная панель';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Просмотр списка заказов', ['/orders']) ?>
    </p>
    <p>
        <?= Html::a('Управление товарами', ['/products']) ?>
    </p>
    <p>
        <?= Html::a('Управление категориями', ['/categories']) ?>
    </p>
</div>
