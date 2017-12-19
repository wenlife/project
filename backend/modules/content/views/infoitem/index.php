<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\content\InfoitemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Infoitems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infoitem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Infoitem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'itemid',
            'parentid',
            'itemname',
            'itemdesc',
            'itemorder',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
