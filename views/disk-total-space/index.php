<?php

use common\modules\disktotalspace\models\DiskTotalSpace;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\modules\disktotalspace\models\search\DiskTotalSpaceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Disk Total Spaces');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disk-total-space-index">

    <p>
        <?= Html::a(Yii::t('app', 'Create Disk Total Space'), ['create'], ['class' => 'btn btn-success']) ?>

        <?= Html::a(Yii::t('app', 'Memory info'), ['/disk-total-space-manager'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'path',
            'created_at:date',
//            'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DiskTotalSpace $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
