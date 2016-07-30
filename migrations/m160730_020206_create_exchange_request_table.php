<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `exchange_request_table`.
 */
class m160730_020206_create_exchange_request_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('exchange_request', [
            'id' => $this->primaryKey(),
            'user_id' => Schema::TYPE_INTEGER. ' NOT NULL',
            'time' => Schema::TYPE_TIME. ' NOT NULL',
            'date' => Schema::TYPE_DATE. ' NOT NULL',
            'region_id' => Schema::TYPE_INTEGER. ' NOT NULL'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('exchange_request');
    }
}
