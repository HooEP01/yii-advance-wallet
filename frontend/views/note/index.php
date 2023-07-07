<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
<?php foreach ($notes as $note): ?>
    <li>
        <?= Html::encode("{$note->title}") ?>:
        <p><?= $note->description ?></p>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>