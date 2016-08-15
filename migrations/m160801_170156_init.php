<?php

use yii\db\Migration;

class m160801_170156_init extends Migration
{
    public function up()
    {
        $this->createTable('user', [
           'id' => $this->primaryKey(),
            'firstName' => $this->string(64),
            'lastName' => $this->string(64),
            'email' => $this->string(64)->notNull(),
            'password' => $this->string(64)->notNull(),
            'createdAt' => $this->dateTime()->notNull(),
            'updatedAt' => $this->dateTime()->notNull()
        ]);

        $this->createTable('candy', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
            'price' => $this->float(),
            'description' => $this->text(),
            'createdAt' => $this->dateTime()->notNull(),
            'updatedAt' => $this->dateTime()->notNull()
        ]);

        $this->createTable('rate', [
            'userId' => $this->integer(),
            'candyId' => $this->integer(),
            'value' => $this->integer(),
            'createdAt' => $this->dateTime()->notNull(),
            'updatedAt' => $this->dateTime()->notNull()
        ]);

        $this->addPrimaryKey('pk_rate', 'rate', [ 'userId',  'candyId']);
        $this->addForeignKey('fk_user_rate', 'rate', 'userId', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_candy_rate', 'rate', 'candyId', 'candy', 'id', 'CASCADE', 'CASCADE');


    }

    public function down()
    {
        $this->dropTable('rate');
        $this->dropTable('candy');
        $this->dropTable('user');

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
