<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DetailKompensasiDanBenefitBulanan */

$this->title = 'Create Detail Kompensasi Dan Benefit Bulanan';
$this->params['breadcrumbs'][] = ['label' => 'Detail Kompensasi Dan Benefit Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-kompensasi-dan-benefit-bulanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
