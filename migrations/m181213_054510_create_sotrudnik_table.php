<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sotrudnik`.
 */
class m181213_054510_create_sotrudnik_table extends Migration
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

        $this->createTable('{{%sotrudnik}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'fam' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'otch' => $this->string(),
            'auth_key' => $this->string(32),
            'email_confirm_token' => $this->string(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),
            'email' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'group' => $this->integer()->notNull()->defaultValue(2),
        ], $tableOptions);

        $this->createIndex('idx-sotrudnik-email', '{{%sotrudnik}}', 'email');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sotrudnik}}');
    }
}
