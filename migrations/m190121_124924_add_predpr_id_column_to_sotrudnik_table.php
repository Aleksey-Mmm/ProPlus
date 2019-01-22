<?php

use yii\db\Migration;

/**
 * Handles adding predpr_id to table `sotrudnik`.
 */
class m190121_124924_add_predpr_id_column_to_sotrudnik_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('sotrudnik', 'predpr_id', $this->integer()->notNull()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('sotrudnik', 'predpr_id');
    }
}
