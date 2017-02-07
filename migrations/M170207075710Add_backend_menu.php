<?php

namespace yuncms\link\migrations;

use yii\db\Migration;

class M170207075710Add_backend_menu extends Migration
{
    public function up()
    {
        $this->insert('{{%admin_menu}}', [
            'name' => '连接管理',
            'parent' => 8,
            'route' => '/link/link/index', 'icon' => 'fa-link', 'sort' => null, 'data' => null]);
        $id = (new \yii\db\Query())->select(['id'])->from('{{%admin_menu}}')->where(['name' => '连接管理', 'parent' => 8,])->scalar($this->getDb());

        $this->batchInsert('{{%admin_menu}}', ['name', 'parent', 'route', 'visible', 'sort'], [
            ['连接查看', $id, '/link/link/view', 0, NULL],
            ['创建连接', $id, '/link/link/create', 0, NULL],
            ['更新连接', $id, '/link/link/update', 0, NULL],
            ['连接设置', $id, '/link/link/setting', 0, NULL],
            ['类别设置', $id, '/link/type/setting', 0, NULL],
            ['创建类别', $id, '/link/type/create', 0, NULL],
            ['更新类别', $id, '/link/type/update', 0, NULL],
            ['查看类别', $id, '/link/type/view', 0, NULL],
        ]);
    }

    public function down()
    {
        $id = (new \yii\db\Query())->select(['id'])->from('{{%admin_menu}}')->where(['name' => '连接管理', 'parent' => 8,])->scalar($this->getDb());
        $this->delete('{{%admin_menu}}', ['parent' => $id]);
        $this->delete('{{%admin_menu}}', ['id' => $id]);
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
