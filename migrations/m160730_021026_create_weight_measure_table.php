<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `weight_measure_table`.
 */
class m160730_021026_create_weight_measure_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('weight_measure_table', [
            'id' => $this->primaryKey(),
            'weight_name' => Schema::TYPE_STRING. ' NOT NULL'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('weight_measure_table');
    }
}
