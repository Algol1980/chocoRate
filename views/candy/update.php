<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 08.08.2016
 * Time: 14:10
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Update Candy';

?>

<div class="site-update">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста заполните форму:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'update-form',
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'description')->textarea(['cols'=>'6']) ?>
    <?= $form->field($model, 'candyImage')->fileInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>

