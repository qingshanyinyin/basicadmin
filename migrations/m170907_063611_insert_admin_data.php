<?php

use yii\db\Migration;

class m170907_063611_insert_admin_data extends Migration
{
    public function safeUp()
    {
            $sql = <<<EOF

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/*', '2', NULL, NULL, NULL, '1504439487', '1504439487');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/*', '2', NULL, NULL, NULL, '1504439480', '1504439480');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/assignment/*', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/assignment/assign', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/assignment/index', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/assignment/revoke', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/assignment/view', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/default/*', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/default/index', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/item/*', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/item/add-child', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/item/create', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/item/delete', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/item/index', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/item/remove-child', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/item/update', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/item/view', '2', NULL, NULL, NULL, '1504439467', '1504439467');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/menu/*', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/menu/create', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/menu/delete', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/menu/index', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/menu/update', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/menu/values', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/menu/view', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/route/*', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/route/add', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/route/index', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/route/remove', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/rule/*', '2', NULL, NULL, NULL, '1504439480', '1504439480');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/rule/create', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/rule/delete', '2', NULL, NULL, NULL, '1504439480', '1504439480');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/rule/index', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/rule/update', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('/admin/rule/view', '2', NULL, NULL, NULL, '1504439476', '1504439476');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('后台管理员', '1', '管理&维护网站后台数据', NULL, NULL, '1504676516', '1504677542');
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES ('超级管理员', '2', '拥有最高管理权限', NULL, NULL, '1504676053', '1504677372');

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES ('超级管理员', '1', '1504676721');

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/*');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/*');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/assignment/*');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/assignment/assign');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/assignment/index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/assignment/revoke');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/assignment/view');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/default/*');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/default/index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/item/*');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/item/add-child');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/item/create');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/item/delete');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/item/index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/item/remove-child');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/item/update');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/item/view');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/menu/*');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/menu/create');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/menu/delete');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/menu/index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/menu/update');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/menu/values');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/menu/view');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/route/*');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/route/add');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/route/index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/route/remove');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/rule/*');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/rule/create');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/rule/delete');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/rule/index');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/rule/update');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('超级管理员', '/admin/rule/view');
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES ('后台管理员', '超级管理员');

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES ('1', '权限控制', NULL, '/admin/default/index', '1', '');
INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES ('2', '路由列表', '1', '/admin#!/route', '2', NULL);
INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES ('3', '权限管理', '1', '/admin#!/permission', '3', NULL);
INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES ('4', '角色管理', '1', '/admin#!/role', '4', NULL);
INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES ('5', '分配权限', '1', '/admin#!/assignment', '5', NULL);
INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES ('6', '规则管理', '1', '/admin#!/rule', '6', NULL);
INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES ('7', '菜单管理', '1', '/admin#!/menu', '7', NULL);

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES ('1', 'admin', 'C5f5K1Kg8tL-IutYAom4-s7RMh_xMk_l', '$2y$13\$FP7HspGVwfd8bv8cMlzbLeRAsAWHuof4yR5h1T6XNKW2gy5P420dq', NULL, '123456@foxmail.com', '10', '1467626063', '1467626063'); 
EOF;

            return $this->execute($sql);
    }

    public function safeDown()
    {
        $sql = <<<EOF
        delete from   `user` ;
        delete from   `menu` ;
        delete from   `auth_assignment` ;
        delete from   `auth_item_child` ;
        delete from   `auth_item` ;
EOF;

       

        return $this->execute($sql);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170907_063611_insert_admin_data cannot be reverted.\n";

        return false;
    }
    */
}
