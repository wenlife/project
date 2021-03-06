<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\content\InfoitemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="infoitem-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'itemid') ?>

    <?= $form->field($model, 'parentid') ?>

    <?= $form->field($model, 'itemname') ?>

    <?= $form->field($model, 'itemdesc') ?>

    <?= $form->field($model, 'itemorder') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
