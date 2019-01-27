<?php

use yii\db\Migration;

/**
 * Handles the creation of table `nastr_blank`.
 */
class m190125_033041_create_nastr_blank_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('nastr_blank', [
            'id' => $this->primaryKey(),
            'predpr_id' => $this->integer(),
            'ch_enable' => $this->smallInteger()->notNull()->defaultValue(0),
            'name' => $this->string(),
            'prefix' => $this->string(10),
            'ch_sprav_org' => $this->smallInteger()->notNull()->defaultValue(0),
            'ch_sprav_chast' => $this->smallInteger()->notNull()->defaultValue(0),
            'ch_calendar' => $this->smallInteger()->notNull()->defaultValue(0),
            'ch_okaz_uslug' => $this->smallInteger()->notNull()->defaultValue(0),
            'ch_obsl_oborud' => $this->smallInteger()->notNull()->defaultValue(0),
            'ch_sn_in_blank' => $this->smallInteger()->notNull()->defaultValue(0),
            'ch_ispoln' => $this->smallInteger()->notNull()->defaultValue(0),
            'ch_comment' => $this->smallInteger()->notNull()->defaultValue(0),
            'comment_name' => $this->string()->defaultValue('Комментарий клиента'),
            'ch_info' => $this->smallInteger()->notNull()->defaultValue(0),
            'info_name' => $this->string()->defaultValue('Информация для клиента'),
            'info_text' => $this->text(),
        ], $tableOptions);

        $this->createIndex('idx-nastr_blank-predpr_id', 'nastr_blank', 'predpr_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('nastr_blank');
    }
}
