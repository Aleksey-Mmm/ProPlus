<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fiz_lico".
 *
 * @property int $id
 * @property int $predpr_id
 * @property int $deleted
 * @property string $fam
 * @property string $name
 * @property string $otch
 * @property string $telephone
 * @property string $email
 * @property string $birthday
 * @property int $sex
 * @property string $dop_info
 */
class FizLico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fiz_lico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['predpr_id', 'fam', 'name'], 'required', 'message'=>'Нужно заполнить!'],
            [['predpr_id', 'deleted', 'sex'], 'integer'],
            [['birthday'], 'safe'],
            [['dop_info'], 'string'],
            [['fam', 'name', 'otch', 'telephone', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'predpr_id' => 'Predpr ID',
            'deleted' => 'Deleted',
            'fam' => 'Fam',
            'name' => 'Name',
            'otch' => 'Otch',
            'telephone' => 'Telephone',
            'email' => 'Email',
            'birthday' => 'Birthday',
            'sex' => 'Sex',
            'dop_info' => 'Dop Info',
        ];
    }
}
