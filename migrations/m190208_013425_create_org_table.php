<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%org}}`.
 */
class m190208_013425_create_org_table extends Migration
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
        $this->createTable('{{%org}}', [
            'id' => $this->primaryKey(),
            'predpr_id' => $this->integer()->notNull(),
            'deleted' => $this->smallInteger()->notNull()->defaultValue(0),
            'short_name' => $this->string()->notNull(),
            'full_name' => $this->string()->notNull(),
            'ogrn' => $this->string()->notNull(),
            'inn' => $this->string()->notNull(),
            'kpp' => $this->string(),
            'okpo' => $this->string(),
            'okved' => $this->string(),
            'jur_address' => $this->string(),
            'post_address' => $this->string(),

        ], $tableOptions);

        $this->createIndex('idx-org-predpr_id', '{{%org}}', 'predpr_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%org}}');
    }
}
