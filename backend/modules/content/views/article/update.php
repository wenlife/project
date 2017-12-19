<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\content\Information */

$this->title = 'Update Information: ' . ' ' . $model->infoid;
$this->params['breadcrumbs'][] = ['label' => 'Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->infoid, 'url' => ['view', 'id' => $model->infoid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="information-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
