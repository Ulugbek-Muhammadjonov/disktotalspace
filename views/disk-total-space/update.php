<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\modules\disktotalspace\models\DiskTotalSpace $model */

$this->title = Yii::t('app', 'Update Disk Total Space: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Disk Total Spaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="disk-total-space-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
