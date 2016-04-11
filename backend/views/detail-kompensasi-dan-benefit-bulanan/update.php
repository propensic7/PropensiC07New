<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DetailKompensasiDanBenefitBulanan */

$this->title = 'Update Detail Kompensasi Dan Benefit Bulanan: ' . ' ' . $model->Id_KomBen;
$this->params['breadcrumbs'][] = ['label' => 'Detail Kompensasi Dan Benefit Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_KomBen, 'url' => ['view', 'Id_KomBen' => $model->Id_KomBen, 'Id_Karyawan' => $model->Id_Karyawan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-kompensasi-dan-benefit-bulanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
