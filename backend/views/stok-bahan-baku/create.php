<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\StokBahanBaku */

$this->title = 'Create Stok Bahan Baku';
$this->params['breadcrumbs'][] = ['label' => 'Stok Bahan Bakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-bahan-baku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
