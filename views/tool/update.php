<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tool */

$this->title = 'Редактирование: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Инструменты', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="tool-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
