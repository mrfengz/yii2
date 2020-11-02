<?php

use yii\db\Migration;

/**
 * Class m191103_005237_auth_and_menu_init
 */
class m191103_005237_auth_and_menu_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("SET FOREIGN_KEY_CHECKS=0");
        // Records of auth_assignment 角色-用户 关联表
        $this->execute("INSERT INTO `auth_assignment` VALUES ('超级管理员', '1', '1487817340');");

        // Records of auth_item 路由表
        $this->execute("INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1487816675', '1487816675');
INSERT INTO `auth_item` VALUES ('/admin/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/default/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/default/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/batch/*', '2', null, null, null, '1487839853', '1487839853');
INSERT INTO `auth_item` VALUES ('/batch/cruds', '2', null, null, null, '1487839853', '1487839853');
INSERT INTO `auth_item` VALUES ('/batch/index', '2', null, null, null, '1487839853', '1487839853');
INSERT INTO `auth_item` VALUES ('/batch/models', '2', null, null, null, '1487839853', '1487839853');
INSERT INTO `auth_item` VALUES ('/debug/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/debug/default/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/debug/default/db-explain', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/debug/default/download-mail', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/debug/default/toolbar', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/debug/default/view', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/gii/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/gii/default/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/gii/default/action', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/gii/default/diff', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/gii/default/preview', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/gii/default/view', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/site/*', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/site/error', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/site/index', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/site/login', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('/site/logout', '2', null, null, null, '1487816732', '1487816732');
INSERT INTO `auth_item` VALUES ('超级管理员', '1', null, null, null, '1487817275', '1487817275');");

        // Records of auth_item_child 角色-权限关联表
        $this->execute("INSERT INTO `auth_item_child` VALUES ('超级管理员', '/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/assign');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/revoke');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/view');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/default/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/default/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/create');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/delete');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/update');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/view');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/assign');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/create');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/delete');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/remove');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/update');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/view');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/assign');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/create');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/delete');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/remove');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/update');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/view');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/assign');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/create');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/refresh');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/remove');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/create');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/delete');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/update');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/view');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/activate');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/change-password');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/delete');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/login');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/logout');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/request-password-reset');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/reset-password');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/signup');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/view');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/batch/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/batch/cruds');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/batch/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/batch/models');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/db-explain');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/download-mail');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/toolbar');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/view');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/action');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/diff');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/preview');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/view');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/*');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/error');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/index');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/login');
    INSERT INTO `auth_item_child` VALUES ('超级管理员', '/site/logout');");
        // Records of menu 菜单表
        $this->execute("INSERT INTO `menu` VALUES ('1', '系统设置', null, null, '100', 0x66612066612D7772656E6368);
    INSERT INTO `menu` VALUES ('2', '菜单列表', '1', '/admin/menu/index', '1', 0x66612066612D62617273);
    INSERT INTO `menu` VALUES ('3', '角色列表', '1', '/admin/role/index', '2', 0x66612066612D7573657273);
    INSERT INTO `menu` VALUES ('4', '用户管理', '1', '/admin/user/index', '3', 0x66612066612D75736572);
    INSERT INTO `menu` VALUES ('5', '权限列表', '1', '/admin/permission/index', '6', 0x66612066612D6C6F636B);
    INSERT INTO `menu` VALUES ('6', '路由列表', '1', '/admin/route/index', '4', 0x66612066612D696E7465726E65742D6578706C6F726572);
    INSERT INTO `menu` VALUES ('7', '规则列表', '1', '/admin/rule/index', '5', 0x66612066612D6C697374);
    INSERT INTO `menu` VALUES ('8', '分配权限', '1', '/admin/assignment/index', '7', 0x66612066612D756E6C6F636B);");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191103_005237_auth_and_menu_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191103_005237_auth_and_menu_init cannot be reverted.\n";

        return false;
    }
    */
}
