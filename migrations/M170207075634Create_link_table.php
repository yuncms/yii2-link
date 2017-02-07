<?php

namespace yuncms\link\migrations;

use yii\db\Migration;

class M170207075634Create_link_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%link}}', [
            'id' => $this->primaryKey(),
            'type_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'description' => $this->string(),
            'url' => $this->string()->notNull(),
            'logo' => $this->string(),
            'user_id' => $this->integer(),
            'sort' => $this->integer(5)->defaultValue(0),
            'created_at' => $this->integer()->unsigned()->notNull(),
            'updated_at' => $this->integer()->unsigned()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('{{%link_ibfk_1}}', '{{%link}}', 'user_id', '{{%user}}', 'id', 'SET NULL', 'CASCADE');
        //$this->addForeignKey('{{%link_ibfk_2}}', '{{%link}}', 'type_id', '{{%type}}', 'id', 'SET NULL', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%link}}');
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
