<?php

$routers = array();
$routers['/wechat/ws/test/%/aa/%'] = array('WechatBundle\Api', 'test');
$routers['/'] = array('MainBundle\Default', 'index');
$routers['/submitsuccess'] = array('MainBundle\Default', 'submitsuccess');
