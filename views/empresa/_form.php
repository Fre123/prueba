<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Empresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigoEmpresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombreEmpresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccionEmpresa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciudadEmpresas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
