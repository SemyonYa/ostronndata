<?php

use app\models\Type;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tool */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tool-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput(['type' => 'number', 'min' => 0]) ?>

    <?= $form->field($model, 'img')->hiddenInput() ?>
    <img src="/web/images/<?= $model->img ?: 'fake.png' ?>" class="img-preview" id="OstroImgPreview" data-toggle="modal" data-target="#OstroModal" onclick="LoadImageManager('tool-img')" alt="Нужно выбрать другое изображение...">

    <?= $form->field($model, 'type_id')->dropdownList(
        Type::find()->select(['name', 'id'])->indexBy('id')->column(),
        ['prompt' => '...']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>