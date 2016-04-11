<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JenisPengeluaranHarian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-pengeluaran-harian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Jenis')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'Nama_Pengeluaran')->textInput(['maxlength' => 25]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
