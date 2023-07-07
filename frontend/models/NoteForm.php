<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

class NoteForm extends Model
{
    public $title;
    public $description;

    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
        ];
    }
}