<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `exchange_request_items_table`.
 */
class m160730_020520_create_exchange_request_items_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('exchange_request_items', [
            'id' => $this->primaryKey(),
            'exchange_id' => Schema::TYPE_INTEGER. ' NOT NULL',
            'item_name' => Schema::TYPE_STRING. ' NOT NULL',
            'weight_value' => Schema::TYPE_STRING. ' NOT NULL',
            'weight_measure_id' => Schema::TYPE_INTEGER. ' NOT NULL'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('exchange_request_items');
    }
}
