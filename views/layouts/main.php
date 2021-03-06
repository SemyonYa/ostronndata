<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            // ['label' => 'Домой', 'url' => ['/site/index']],
            ['label' => 'Типы инструментов', 'url' => ['/type/index']],
            ['label' => 'Интсрументы', 'url' => ['/tool/index']],
            ['label' => 'Отзывы', 'url' => ['/testimonial/index']],
            ['label' => 'Причины', 'url' => ['/reason/index']],
            ['label' => 'Менеджер изображений', 'url' => ['/image/list']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'homeLink' => ['label' => 'Главная', 'url' => '/'],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-center">&copy; Ostro-NN <?= date('Y') ?></p>
    </div>
</footer>

<!-- Триггер кнопка модали-->  
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#OstroModal">
  Launch demo modal
</button> -->

<!-- Модаль -->  
<div class="modal fade" id="OstroModal" tabindex="-1" role="dialog" aria-labelledby="OstroModalLabel" data-input-id="-">
  Загрузка...
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
