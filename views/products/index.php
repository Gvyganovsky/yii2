<?php

use app\models\Products;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'Категория', 
                'value'=> function($data){return $data->getCategory()->One()->name;}
            ],
            [
                'attribute' => 'name',
                'label' => 'Название',
            ],
            [
                'attribute'=>'Фото', 
                'format'=>'html', 
                'value'=>function($data){return"<img src='/web/uploads/{$data->image}' alt='photo' style='width: 70px;'>";}
            ],
            [
                'attribute' => 'stock_quantity',
                'label' => 'Количество',
            ],
            [
                'attribute' => 'price',
                'label' => 'Цена',
            ],
            [
                'attribute' => 'description',
                'label' => 'Страна-производитель',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Products $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'product_id' => $model->product_id]);
                 }
            ],
        ],
    ]); ?>
</div>

