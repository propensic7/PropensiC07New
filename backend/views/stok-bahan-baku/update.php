<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StokBahanBaku */

$this->title = 'Update Stok Bahan Baku: ' . ' ' . $model->Id_Bahan_Baku;
$this->params['breadcrumbs'][] = ['label' => 'Stok Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Bahan_Baku, 'url' => ['view', 'id' => $model->Id_Bahan_Baku]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stok-bahan-baku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
