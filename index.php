<?php

// $a = '/test/aaa/%/sd/%';

// $pattern = preg_replace(array('/\//', '/%/'), array('\/', '(.*)'), $a);
// var_dump($pattern);
// $a = preg_match("/\/test\/b\/(.*)\/sd\/(.*)/", '/test/b/34/sd/343', $matches);
// var_dump($matches);exit;

// exit;
require_once dirname(__FILE__) . "/core/bootstrap.php";
$GLOBALS["HTTP_RAW_POST_DATA"] = '<xml>
 <ToUserName><![CDATA[toUser]]></ToUserName>
 <FromUserName><![CDATA[fromUser]]></FromUserName> 
 <CreateTime>1348831860</CreateTime>
 <MsgType><![CDATA[text]]></MsgType>
 <Content><![CDATA[芜湖]]></Content>
 <MsgId>1234567890123456</MsgId>
 </xml>';
Core::Response();

// header("Content-type: text/html; charset=utf-8");    
// $key = 'wechat:reply:event:136';
// $redis = new Redis();
// $redis->connect(REDIS_HOST, REDIS_PORT);
// // $redis->set($key, 324234);
// // $redis->setTimeout($key, 7);
// print $redis->get(LBS_DATA);
// var_dump(unserialize($redis->get(LBS_DATA)));
// exit;

// $GLOBALS["HTTP_RAW_POST_DATA"] = '<xml>
//  <ToUserName><![CDATA[toUser]]></ToUserName>
//  <FromUserName><![CDATA[fromUser]]></FromUserName> 
//  <CreateTime>1348831860</CreateTime>
//  <MsgType><![CDATA[text]]></MsgType>
//  <Content><![CDATA[芜湖]]></Content>
//  <MsgId>1234567890123456</MsgId>
//  </xml>';


// $key = 'wechat:reply:event:136';
// $redis = new Redis();
// $redis->connect(REDIS_HOST, REDIS_PORT);
// // $redis->set($key, 324234);
// // $redis->setTimeout($key, 7);
// print $redis->get($key);
// var_dump(unserialize($redis->get($key)));
// exit;

// $redis = new RedisAPI(REDIS_HOST, REDIS_PORT);
// var_dump($redis->getAccessToken());exit;


// http://127.0.0.1:9052/wechat/oauth2?id=cce&scope=snsapi_userinfo&timestamp=1457690021&sign=a0164e66&redirect_uri=http://www.baidu.com
// <xml>
// <ToUserName><![CDATA[toUser]]></ToUserName>
// <FromUserName><![CDATA[FromUser]]></FromUserName>
// <CreateTime>123456789</CreateTime>
// <MsgType><![CDATA[event]]></MsgType>
// <Event><![CDATA[CLICK]]></Event>
// <EventKey><![CDATA[EVENTKEY]]></EventKey>
// </xml>

// $redis = new Redis();
// $redis->connect(REDIS_HOST, REDIS_PORT);
// var_dump($redis->lRange(MSG_SQUEUE_PREFIX . ':msg:text', 0, -1));
// exit;
 // header("Content-type: text/html; charset=utf-8");       
// $wechatAPI = new WechatAPI(TOKEN);
// // valid
// if (isset($_GET["echostr"])) {
// 	$wechatAPI->valid();
// 	exit;
// }
// // process to record conversation
// $responseObj = $wechatAPI->responseMsg();
// $received = $wechatAPI->receivedDateFormat($responseObj);
// //var_dump($received);exit;
// $redisAPI = new RedisAPI(REDIS_HOST, REDIS_PORT);
// $redisAPI->saveReplyObject($received);
// $replyObject = $redisAPI->retrieveReplyObject($received);

// $wechatAPI->reply($replyObject);
