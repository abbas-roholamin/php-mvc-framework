<?php

/** @var $model \app\models\LoginForm */

use thecodeholic\phpmvc\form\Form;

?>

<div style="height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div style="width: 50%;">

        <h1>Login</h1>
        <?php $form = Form::begin('', 'post') ?>
        <?php echo $form->field($model, 'email') ?>
        <?php echo $form->field($model, 'password')->passwordField() ?>
        <button class="btn btn-success">Submit</button>
        <?php Form::end() ?>
    </div>
</div>