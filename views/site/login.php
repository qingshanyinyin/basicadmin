<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use app\assets\AppAsset;
use yii\captcha\Captcha;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

AppAsset::register($this);
$this->title = 'Login';
?>

<input type="hidden" id="TenantId" name="TenantId" value=""/>
<div class="header"></div>
<div class="loginWraper">
    <div id="loginform" class="loginBox">

        <form class="form form-horizontal" action="<?=Url::toRoute('site/login')?>" method="post">
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-xs-8">
                    <input id="username" name="LoginForm[username]" type="text" placeholder="账户" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-xs-8">
                    <input id="password" name="LoginForm[password]" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="LoginForm[verifyCode]" class="input-text size-L" type="text" placeholder="验证码"
                           onblur="if(this.value==''){this.value='验证码:'}"
                           onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
<!--                    <img src="--><?//=Url::toRoute('site/captcha')?><!--"> <a id="kanbuq" href="javascript:;">看不清，换一张</a>-->
                    <?php echo Captcha::widget(['name'=>'captchaimg','captchaAction'=>'site/captcha','imageOptions'=>['title'=>'点击刷新'],'template'=>'{image}']); ?>

                </div>
            </div>
            <?php
            $errors = $model->getFirstErrors();
            if($errors) {
                ?>
                <div class="row cl">
                    <label class="col-xs-8 col-xs-offset-3"
                           style="color: red"><?=array_shift($errors) ?>
                    </label>
                </div>
                <?php
            }
            ?>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <label for="online">
                        <input type="checkbox" name="LoginForm[rememberMe]" id="online" value="" checked="checked" >
                        使我保持登录状态</label>
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="" type="submit" class="btn btn-success radius size-L"
                           value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                    <input name="" type="reset" class="btn btn-default radius size-L"
                           value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin v3.1</div>
