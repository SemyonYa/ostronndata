<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reason */

$this->title = 'Редактирование: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Причины', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="reason-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
