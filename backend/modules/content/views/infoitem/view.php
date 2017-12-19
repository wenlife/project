<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\content\Infoitem */

$this->title = $model->infoid;
$this->params['breadcrumbs'][] = ['label' => 'Infoitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infoitem-view">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
   
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->itemid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->itemid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'itemid',
            'parentid',
            'itemname',
            'itemdesc',
            'itemorder',
        ],
    ]) ?>

</div>
