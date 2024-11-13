<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Teachers $model */

$this->title = 'Обновить преподаватели: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Преподаватели', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="teachers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
