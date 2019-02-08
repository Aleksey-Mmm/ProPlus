<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "org".
 *
 * @property int $id
 * @property int $predpr_id
 * @property int $deleted
 * @property string $short_name
 * @property string $full_name
 * @property string $ogrn
 * @property string $inn
 * @property string $kpp
 * @property string $okpo
 * @property string $okved
 * @property string $jur_address
 * @property string $post_address
 */
class Org extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'org';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['predpr_id', 'short_name', 'full_name', 'ogrn', 'inn'], 'required', 'message'=>'Должно быть заполнено.'],
            [['predpr_id', 'deleted'], 'integer'],
            [['short_name', 'full_name', 'ogrn', 'inn', 'kpp', 'okpo', 'okved', 'jur_address', 'post_address'], 'string', 'max' => 255],
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
            'short_name' => 'Short Name',
            'full_name' => 'Full Name',
            'ogrn' => 'Ogrn',
            'inn' => 'Inn',
            'kpp' => 'Kpp',
            'okpo' => 'Okpo',
            'okved' => 'Okved',
            'jur_address' => 'Jur Address',
            'post_address' => 'Post Address',
        ];
    }
}
