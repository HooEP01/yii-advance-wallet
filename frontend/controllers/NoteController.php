<?php

namespace frontend\controllers;

use Yii;
use common\models\Note;
use yii\data\Pagination;
use yii\web\Controller;
use frontend\models\NoteForm;

class NoteController extends Controller
{

    public function actionIndex()
    {
        $query = Note::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $notes = $query->orderBy('title')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'notes' => $notes,
            'pagination' => $pagination,
        ]);
    }

    public function actionNote()
    {
        $model = new NoteForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $note = new Note();
            $note->title = $model->title;
            $note->description = $model->description;
            $note->save();
            return $this->actionIndex();
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('note', ['model' => $model]);
        }
    }

    public function actionSay($message = 'Hello')
    {
        return $this->render('note', ['message' => $message]);
    }

}
