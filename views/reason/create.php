<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reason */

$this->title = 'Новая причина';
$this->params['breadcrumbs'][] = ['label' => 'Причины', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reason-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
