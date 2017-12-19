<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'my navbar-inverse navbar-fixed-top',
        ],
    ]);

    echo Nav::widget([
        'items'=>[
            ['label'=>'果实驾驶','url'=>['/site/index']],
        ],
        'options'=>['class'=>'navbar-nav'],
    ]);

    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => '文章', 'url' => ['/content/article']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>

    <div class="container">
        <div class="row my">
            <div class="jumbotron"></div>
        </div>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        
        <div class="row">
            <div class="col-sm-3">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">队伍领导</h3>
                </div>
                  <div class="panel-body"> 
                        <div class="thumbnail"><img src="images/tuanzhang.jpg" alt="Thumbnail Image 1">
                          <div class="caption">
                            <h3>团长：凉宫春日</h3>
                            <p>让世界变得更热闹的SOS团团长</p>
                            
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-sm-9 my">
            <?= $content ?>
            </div>
        </div>
    </div>
</div>


<div class="footer" style="clear:both;height: auto">
    <div class="container">
        <p class="text-center">小马飞奔工作室 倾力制作</p>
        <p class="text-center">Yii powerd</p>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
