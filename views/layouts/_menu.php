<?php

use mdm\admin\classes\MenuHelper;
use yii\helpers\Url;

?>

<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
        <?php
        $i = 1;
        foreach (MenuHelper::getAssignedMenu(Yii::$app->user->id,null,null,false) as $menu){
        ?>
        <dl id="menu-<?=$i++?>">
            <dt><i class="Hui-iconfont">&#xe62e;</i> <?=$menu['label']?><i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <?php
                            foreach ($menu['items'] as $item) {
                                ?>
                                <li><a data-href="<?=Url::toRoute($item['url'][0])?>" data-title="<?=$item['label']?>"
                                       href="javascript:void(0)"><?=$item['label']?></a></li>
                                <?php
                            }
                    ?>
                </ul>
            </dd>
        </dl>
        <?php
        }
        ?>

<!--        <dl id="menu-mydamin">-->
<!--            <dt><i class="Hui-iconfont">&#xe613;</i> 权限管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>-->
<!--            <dd>-->
<!--                <ul>-->
<!--                    <li><a data-href="--><?//=Url::toRoute('/admin#!/assignment')?><!--" data-title="分配权限" href="javascript:void(0)">分配权限</a></li>-->
<!--                    <li><a data-href="--><?//=Url::toRoute('/admin#!/role')?><!--" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>-->
<!--                    <li><a data-href="--><?//=Url::toRoute('/admin#!/permission')?><!--" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>-->
<!--                    <li><a data-href="--><?//=Url::toRoute('/admin#!/rule')?><!--" data-title="规则管理" href="javascript:void(0)">规则管理</a></li>-->
<!--                    <li><a data-href="--><?//=Url::toRoute('/admin#!/route')?><!--" data-title="路由列表" href="javascript:void(0)">路由列表</a></li>-->
<!--                    <li><a data-href="--><?//=Url::toRoute('/admin#!/menu')?><!--" data-title="菜单管理" href="javascript:void(0)">菜单管理</a></li>-->
<!--                </ul>-->
<!--            </dd>-->
<!--        </dl>-->

    </div>
</aside>
