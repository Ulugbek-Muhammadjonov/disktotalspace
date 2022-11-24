<?php


use common\modules\disktotalspace\models\DiskTotalSpace;
use yii\helpers\Url;
use yii\web\View;

/** @var View $this */
/** @var DiskTotalSpace $memories */

$this->title = Yii::t('app', 'Memory information');
$this->params['breadcrumbs'][] = $this->title;

$formatter = Yii::$app->formatter;

?>
<div class="row">
    <div class="col-md-2">
        <a href="<?= Url::to(['disk-total-space/index']) ?>"
           class="btn btn-primary"><?= Yii::t('app', 'Settings') ?></a>
    </div>
    <div class="col-md-10">
        <?php if ($memories == null): ?>
            <h4><?= Yii::t('app', 'Memory not available, please add memory name and path in settings') ?></h4>
        <?php endif; ?>
        <?php if ($memories): ?>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($memories as $memory): ?>
                                <?php
                                $path = $memory->path;
                                $has_total = disk_total_space($path);
                                $has_free = disk_free_space($path);
                                ?>
                                <?php
                                $free = floor(disk_free_space($path) / (1024 * 1024 * 1024));
                                $total = floor(disk_total_space($path) / (1024 * 1024 * 1024));
                                echo Yii::t('app', 'Memory name') . ': <b>' . $memory->name . '</b><br>';
                                ?>
                                <?php $percent = 100 - round($free * 100 / $total); ?>
                                <div class="progress">
                                    <div class="progress-bar <?= $percent >= 90 ? "bg-danger" : " " ?>"
                                         role="progressbar"
                                         style="width: <?= $percent ?>%;"
                                         aria-valuenow="<?= $percent ?>" aria-valuemin="0"
                                         aria-valuemax="100"><?= $percent ?>%
                                    </div>
                                </div>
                                <b><?= $formatter->asInteger($total - $free) ?></b> GB <?= Yii::t('app', 'busy') ?>
                                <b><?= $formatter->asInteger($total) ?></b> GB <?= Yii::t('app', 'for') ?><br><br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        <?php endif; ?>
    </div>
</div>