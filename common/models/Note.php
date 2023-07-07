<?php

namespace common\models;

use Codeception\Test\Descriptor;
use yii\db\ActiveRecord;

class Note extends ActiveRecord
{
    public static function tableName() {
        return '{{%note}}';
    }

    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
        ];
    }

    public function fields()
    {
        return [
            'title',
            'description',
        ];
    }
}