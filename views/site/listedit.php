<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Прайс-листы';
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Укажите прайс-лист и выберите файл для обновления
    </p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'id' => 'contact-form']]); ?>

                <?= $form->field($model, 'pricename')->dropDownList([
                    'price1' => 'Общий (химия)',
                    'price2' => 'Канцелярские товары',
                    'price3' => 'Хозяйственные товары (склад 1)',
                    'price4' => 'Хозяйственные товары (склад 3)',
                    'price5' => 'Хозяйственные товары (склад 3а)',
                    'price6' => 'Хозяйственные товары (склад 5)',
                    'price7' => 'Мелочи жизни',
                    'price8' => 'Колготки',
                    'price9' => 'Колготки Conte',
                    'price10' => 'Сезонные акции',
                    ]) ?>

                <?= $form->field($model, 'pricefile')->fileInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Загрузить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
