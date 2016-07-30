<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `region_table`.
 */
class m160730_021229_create_region_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('region_table', [
            'id' => $this->primaryKey(),
            'region_name' => Schema::TYPE_STRING. ' NOT NULL',
            'service_starting_time' => Schema::TYPE_TIME,
            'service_end_time' => Schema::TYPE_TIME
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('region_table');
    }
}
