<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `user_table`.
 */
class m160730_015604_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'first_name' => Schema::TYPE_STRING. ' NOT NULL',
            'last_name' => Schema::TYPE_STRING. ' NOT NULL',
            'email' => Schema::TYPE_STRING. ' NOT NULL',
            'password' => Schema::TYPE_STRING. ' NOT NULL',
            'mobile' => Schema::TYPE_STRING. ' NOT NULL',
            'birth_date' => Schema::TYPE_DATE,
            'address' => Schema::TYPE_STRING. ' NOT NULL',
            'avatar' => Schema::TYPE_TEXT
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
