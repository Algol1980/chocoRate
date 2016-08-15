<?php

use yii\db\Migration;

class m160815_113418_addImage extends Migration
{
    public function up()
    {
        $this->addColumn('candy', 'candyImage', $this->string());
    }

    public function down()
    {
        $this->dropColumn('candy', 'candyImage');
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
