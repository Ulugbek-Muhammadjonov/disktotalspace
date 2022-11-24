<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%disk_total_space}}`.
 */
class m221124_111746_create_disk_total_space_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%disk_total_space}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'path' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%disk_total_space}}');
    }
}
