<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\JenisPengeluaranHarian */

$this->title = 'Create Jenis Pengeluaran Harian';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Pengeluaran Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-pengeluaran-harian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
