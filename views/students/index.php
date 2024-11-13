<?php

use app\models\Students;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\StudentsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Студенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать студента', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name' => [
                'attribute' => 'first_name',
                'label' => 'Имя'
            ],
            'last_name' => [
                'attribute' => 'last_name',
                'label' => 'Фамилия'
            ],
            'email:email' => [
                'attribute' => 'email',
                'label' => 'Электронная почта'
            ],
            'phone' => [
                'attribute' => 'phone',
                'label' => 'Телефон'
            ],
            'birth_date' => [
                'attribute' => 'birth_date',
                'label' => 'Дата рождения'
            ],
            'gender' => [
                'attribute' => 'gender',
                'label' => 'Пол'
            ],
            'address:ntext' => [
                'attribute' => 'address',
                'label' => 'Адрес'
            ],
            'enrollment_date' => [
                'attribute' => 'enrollment_date',
                'label' => 'Дата поступления'
            ],
            'status' => [
                'attribute' => 'status',
                'label' => 'Статус'
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Students $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
