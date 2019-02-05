<?php

namespace app\models\blank;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "nastr_blank".
 *
 * @property int $id
 * @property int $predpr_id
 * @property int $ch_enable
 * @property string $name
 * @property string $prefix
 * @property int $ch_sprav_org
 * @property int $ch_sprav_chast
 * @property int $ch_calendar
 * @property int $ch_okaz_uslug
 * @property int $ch_obsl_oborud
 * @property int $ch_sn_in_blank
 * @property int $ch_ispoln
 * @property int $ch_comment
 * @property string $comment_name
 * @property int $ch_info
 * @property string $info_name
 * @property string $info_text
 */
class NastrBlank extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nastr_blank';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['predpr_id', 'ch_enable', 'ch_sprav_org', 'ch_sprav_chast', 'ch_calendar', 'ch_okaz_uslug', 'ch_obsl_oborud', 'ch_sn_in_blank', 'ch_ispoln', 'ch_comment', 'ch_info'], 'integer'],
            [['info_text'], 'string'],
            [['comment_name', 'info_name'], 'string', 'max' => 255],
            [['name', 'comment_name'], 'required', 'message' => 'Не может быть пустым' ],
            [['name', 'comment_name'], 'string', 'min' => 3, 'tooShort' => 'Не менее 3-х символов'],
            [['prefix'], 'string', 'max' => 10],
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
            'ch_enable' => 'Ch Enable',
            'name' => 'Name',
            'prefix' => 'Prefix',
            'ch_sprav_org' => 'Ch Sprav Org',
            'ch_sprav_chast' => 'Ch Sprav Chast',
            'ch_calendar' => 'Ch Calendar',
            'ch_okaz_uslug' => 'Ch Okaz Uslug',
            'ch_obsl_oborud' => 'Ch Obsl Oborud',
            'ch_sn_in_blank' => 'Ch Sn In Blank',
            'ch_ispoln' => 'Ch Ispoln',
            'ch_comment' => 'Ch Comment',
            'comment_name' => 'Comment Name',
            'ch_info' => 'Ch Info',
            'info_name' => 'Info Name',
            'info_text' => 'Info Text',
        ];
    }
}
