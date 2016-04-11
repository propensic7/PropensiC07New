<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JenisPengeluaranHarian */

$this->title = 'Update Jenis Pengeluaran Harian: ' . ' ' . $model->Id_Jenis;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Pengeluaran Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Jenis, 'url' => ['view', 'id' => $model->Id_Jenis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-pengeluaran-harian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
