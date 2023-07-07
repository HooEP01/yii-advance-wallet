<?php
use frontend\models\NoteForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$model = new NoteForm();
$model->title = 'title';
$model->description = 'description';

if ($model->validate()) {
    echo "<h2>PHP is Fun!</h2>";
} else {
    $model->getErrors();
}

?>


<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->label('Note Title') ?>
    <?= $form->field($model, 'description')->label('Note Description') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>