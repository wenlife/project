<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\content\Information */

$this->title = $model->headline;
$this->params['breadcrumbs'][] = ['label' => 'Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="information-view">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
     <ul class="list-inline">
        <li>作者:<?=$model->author?></li>
        <li>发布者:<?=$model->releaser?></li>
        <li>写作时间:<?=$model->release_date?></li>
        <li>发布时间:<?=$model->publish_date?></li>
        <li>重要级别:<?=$model->level?></li>
        <li>截止时间:<?=$model->deletedate?></li>
    </ul>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->infoid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->infoid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="well">
<?=$model->content?>
<div style="clear:both"></div>
</div>
</div>
