<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KeteranganKomben */

$this->title = 'Update Keterangan Komben: ' . ' ' . $model->Id_Keterangan;
$this->params['breadcrumbs'][] = ['label' => 'Keterangan Kombens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Keterangan, 'url' => ['view', 'id' => $model->Id_Keterangan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keterangan-komben-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
