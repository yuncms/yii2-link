<?php

use yii\db\Migration;

class m160921_063811_add_backend_menu extends Migration
{
    public function up()
    {
        $this->insert('{{%admin_menu}}', [
            'id' => 80,
            'name' => '连接管理',
            'parent' => 8,
            'route' => '/link/link/index', 'icon' => 'fa-link', 'sort' => null, 'data' => null]);

        $this->batchInsert('{{%admin_menu}}', ['name', 'parent', 'route', 'visible', 'sort'], [
            ['连接查看', 80, '/link/link/view', 0, NULL],
            ['创建连接', 80, '/link/link/create', 0, NULL],
            ['更新连接', 80, '/link/link/update', 0, NULL],
            ['连接设置', 80, '/link/link/setting', 0, NULL],
            ['类别设置', 80, '/link/type/setting', 0, NULL],
            ['创建类别', 80, '/link/type/create', 0, NULL],
            ['更新类别', 80, '/link/type/update', 0, NULL],
            ['查看类别', 80, '/link/type/view', 0, NULL],
        ]);
    }

    public function down()
    {
        $this->delete('{{%admin_menu}}', ['id' => 80,]);
        $this->delete('{{%admin_menu}}', ['parent' => 80,]);
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
