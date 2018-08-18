<?php
/**
 * LoginAbstract 类定义了支付接口的公共方法
 * @author : weiyi <294287600@qq.com>
 * Licensed ( http://www.wycto.com )
 * Copyright (c) 2016~2099 http://www.wycto.com All rights reserved.
 */
namespace wycto\pay;
abstract class PayAbstract
{
    abstract function setConfig($config);

    abstract function gateway($gateway);

    abstract function meta();
}
?>
