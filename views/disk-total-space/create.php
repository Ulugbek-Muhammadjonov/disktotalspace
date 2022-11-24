<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\modules\disktotalspace\models\DiskTotalSpace $model */

$this->title = Yii::t('app', 'Create Disk Total Space');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Disk Total Spaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disk-total-space-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
