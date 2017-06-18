<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="contactForm">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-top">Запись</div>
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <p>Оставьте номер телефона и наш администратор свяжется с вами, чтобы
                    записать на прием</p>
                <?php $form = ActiveForm::begin([
                    'action' => ['site/contact'],
                    'id' => 'contactForm',
                    'enableClientValidation' => true,
                    'validateOnBlur' => false,
                    'validateOnType' => false,
                    'validateOnChange' => true,
                ]) ?>
                <?= $form->field($contactForm, 'author') ?>
                <?= $form->field($contactForm, 'phone')
                    ->widget(\yii\widgets\MaskedInput::className(), [
                        'mask' => '+38-099-999-99-99',
                    ]) ?>
                <div class="text-right">
                    <?= Html::submitButton('Отправить', [
                        'class' => 'btn btn-primary',
                        'id' => 'submitButton',
                    ]) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>