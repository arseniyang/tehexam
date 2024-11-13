<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;  // Подключаем виджет для календаря

/** @var yii\web\View $this */
/** @var app\models\Students $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true])->label('Имя') ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])->label('Фамилия') ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('Электронная почта') ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label('Телефон') ?>

    <?= $form->field($model, 'birth_date')->widget(DatePicker::class, [
        'dateFormat' => 'yyyy-MM-dd',  // Указываем формат даты
        'options' => ['class' => 'form-control'],  // Подключаем стили
        'clientOptions' => [
            'changeMonth' => true,
            'changeYear' => true,
            'showButtonPanel' => true,
            'defaultDate' => '2024-11-11',  // Задаем дефолтную дату, можно убрать
        ],
    ])->label('Дата рождения') ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true])->label('Пол') ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6])->label('Адрес') ?>

    <?= $form->field($model, 'enrollment_date')->widget(DatePicker::class, [
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['class' => 'form-control'],
        'clientOptions' => [
            'changeMonth' => true,
            'changeYear' => true,
            'showButtonPanel' => true,
        ],
    ])->label('Дата поступления') ?>

    <?= $form->field($model, 'status')->textInput()->label('Статус') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
