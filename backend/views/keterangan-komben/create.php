<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\KeteranganKomben */

$this->title = 'Create Keterangan Komben';
$this->params['breadcrumbs'][] = ['label' => 'Keterangan Kombens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keterangan-komben-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
