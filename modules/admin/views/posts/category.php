<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">
    
    <?php $form = ActiveForm::begin(); ?>
    
    <?= Html::dropDownList('category', $selected, $categories, ['class' => 'form-control']) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Set category', ['class' => 'btn btn-success']) ?>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>
