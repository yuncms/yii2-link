<?php

use yii\db\Migration;

/**
 * Handles the creation for table `link`.
 */
class m160914_023822_create_link_table extends Migration
{
    /**
     * @inheritdoc
     */
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
            'admin_id' => $this->integer(),
            'created_at' => $this->integer()->unsigned()->notNull(),
            'updated_at' => $this->integer()->unsigned()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('{{%link_ibfk_1}}', '{{%link}}', 'admin_id', '{{%admin}}', 'id', 'SET NULL', 'CASCADE');
        $this->addForeignKey('{{%link_ibfk_2}}', '{{%link}}', 'type_id', '{{%type}}', 'id', 'SET NULL', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%link}}');
    }
}
