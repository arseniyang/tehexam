<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Teachers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true])->label('Имя') ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])->label('Фамилия') ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('Электронная почта') ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label('Телефон') ?>

    <?= $form->field($model, 'birth_date')->widget(DatePicker::class, [
        'language' => 'ru',
        'dateFormat' => 'php:Y-m-d', // Формат для отображения в календаре
        'options' => ['class' => 'form-control'],
    ])->label('Дата рождения') ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true])->label('Пол') ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6])->label('Адрес') ?>

    <?= $form->field($model, 'hire_date')->widget(DatePicker::class, [
        'language' => 'ru',
        'dateFormat' => 'php:Y-m-d', // Формат для отображения в календаре
        'options' => ['class' => 'form-control'],
    ])->label('Дата найма') ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true])->label('Отдел') ?>

    <?= $form->field($model, 'status')->textInput()->label('Статус') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
