<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Testimonial */

$this->title = 'Редактирование: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'редактирование';
?>
<div class="testimonial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
