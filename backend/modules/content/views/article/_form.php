<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use common\models\content\Infoitem;

/* @var $this yii\web\View */
/* @var $model common\models\content\Information */
/* @var $form yii\widgets\ActiveForm */
$infoItem  = new infoItem();
$list = $infoItem->getParentList();
?>

<div class="information-form">

    <?php $form = ActiveForm::begin(['options' => ['class' => 'form'],]); ?>

    
        <div class="row">
            <div class="col-xs-4 col-sm-4">
             <?= $form->field($model, 'infoitem')->dropDownList($list) ?>
            </div>
    
            <div class="col-xs-4 col-sm-4">
              <?= $form->field($model, 'level')->dropDownList([0=>'正常',1=>'紧急',2=>'guanjian']) ?>
            </div>
        </div>
 

    <div class="row">
        <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'headline')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'headcolor')->textInput(['maxlength' => true])?>
        </div>
    </div>
     <div class="row">
        <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'subhead')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4">
             <?= $form->field($model, 'subhcolor')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'publish_date')->widget(DatePicker::className(),['dateFormat'=>'yyyy-MM-dd']) ?>
        </div>
    </div>
    
     <div class="row">
        <div class="col-xs-4 col-sm-4">           
           <?= $form->field($model, 'releaser')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4">
            <?= $form->field($model, 'release_date')->widget(DatePicker::className(),['dateFormat'=>'yyyy-MM-dd']) ?>
        </div>
    </div>
    <?= $form->field($model, 'abstract')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget('pjkui\kindeditor\KindEditor',['clientOptions'=>['allowFileManager'=>'true','allowUpload'=>'true']])?>

    <?= $form->field($model, 'ishow')->checkBox() ?>

    <?= $form->field($model, 'iscomment')->checkBox() ?>

    <?= $form->field($model, 'isdelete')->checkBox() ?>

    <?= $form->field($model, 'deletedate')->widget(DatePicker::className(),['dateFormat'=>'yyyy-MM-dd']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
