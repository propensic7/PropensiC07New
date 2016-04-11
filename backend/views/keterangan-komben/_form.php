<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KeteranganKomben */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keterangan-komben-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Keterangan')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'Nama_Keterangan')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
