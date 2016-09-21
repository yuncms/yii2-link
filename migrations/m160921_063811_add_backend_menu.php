<?php

use yii\db\Migration;

class m160921_063811_add_backend_menu extends Migration
{
    public function up()
    {
        $this->batchInsert('{{%admin_menu}}', ['id', 'name', 'parent', 'route', 'icon', 'sort', 'data'], [
            [86, '连接管理', 8, '/link/index', 'fa-link', NULL, NULL],
        ]);
        $this->batchInsert('{{%admin_menu}}', ['name', 'parent', 'route', 'visible', 'sort'], [
            ['连接查看', 45, '/link/view', 0, NULL],
            ['创建连接', 45, '/link/create', 0, NULL],
            ['更新连接', 45, '/link/update', 0, NULL],
            ['连接设置', 80, '/link/setting', 0, NULL],
        ]);
    }

    public function down()
    {
        echo "m160921_063811_add_backend_menu cannot be reverted.\n";

        return false;
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
