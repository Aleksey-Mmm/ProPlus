<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%fiz_lico}}`.
 */
class m190410_114227_create_fiz_lico_table extends Migration
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
        $this->createTable('{{%fiz_lico}}', [
            'id' => $this->primaryKey(),
            'predpr_id' => $this->integer()->notNull(),
            'deleted' => $this->smallInteger()->notNull()->defaultValue(0),
            'fam' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'otch' => $this->string(),
            'telephone' => $this->string(),
            'email' => $this->string(),
            'birthday' => $this->date(),
            'sex' => $this->smallInteger(),
            'dop_info' => $this->text(),
        ], $tableOptions);

        $this->createIndex('idx-fiz_lico-predpr_id', '{{%fiz_lico}}', 'predpr_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%fiz_lico}}');
    }
}
