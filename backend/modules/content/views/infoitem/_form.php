<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\content\Infoitem */
/* @var $form yii\widgets\ActiveForm */

$parentList = $model->getParentList();
array_unshift($parentList,'顶级目录');
//var_export($parentList);
?>

<div class="infoitem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parentid')->dropDownList($parentList)?>

    <?= $form->field($model, 'itemname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'itemdesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'itemorder')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
