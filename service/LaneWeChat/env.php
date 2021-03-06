<?php

include 'lanewechat.php';

/**
 * 自定义菜单
 */
//设置菜单

/*
$menuList = array(
    array('id'=>'1', 'pid'=>'0',  'name'=>'神州数码', 'type'=>'view', 'code'=>'http://115.173.207.75/microsite/app/index.php?i=3&c=home&t=3'),
    array('id'=>'2', 'pid'=>'0',  'name'=>'神州产品', 'type'=>'', 'code'=>'key_2'),
    array('id'=>'3', 'pid'=>'2',  'name'=>'企业服务总线(ESB)', 'type'=>'view', 'code'=>'http://vzan.cc/f/s-36862'),
    array('id'=>'4', 'pid'=>'2',  'name'=>'互联网开放平台', 'type'=>'view', 'code'=>'http://shequ.yunzhijia.com/thirdapp/forum/network/56cd2400e4b07b5dd9eb1b56'),
    array('id'=>'5', 'pid'=>'2',  'name'=>'PaaS私有云平台', 'type'=>'view', 'code'=>'http://shequ.yunzhijia.com/thirdapp/forum/network/56cd2493e4b081c602b4abc9'),
    array('id'=>'6', 'pid'=>'2',  'name'=>'外联平台', 'type'=>'view', 'code'=>'http://shequ.yunzhijia.com/thirdapp/forum/network/56cd251ce4b01e957cb4146f'),
    array('id'=>'7', 'pid'=>'2',  'name'=>'SOP平台', 'type'=>'view', 'code'=>'http://115.173.207.75/www/plugin.php?id=wechat:access'),
    array('id'=>'8', 'pid'=>'0',  'name'=>'神州之星', 'type'=>'', 'code'=>'key_8'),
    array('id'=>'9', 'pid'=>'8',  'name'=>'最新活动', 'type'=>'click', 'code'=>'key_9'),
    array('id'=>'13', 'pid'=>'8',  'name'=>'活动报名', 'type'=>'click', 'code'=>'key_13'),
    array('id'=>'10', 'pid'=>'8', 'name'=>'最新新闻', 'type'=>'click', 'code'=>'key_10'),
    array('id'=>'11', 'pid'=>'8', 'name'=>'神州商城', 'type'=>'view', 'code'=>'http://115.173.207.75/microsite/app/index.php?i=3&c=entry&do=list&m=ewei_shopping'),
    array('id'=>'12', 'pid'=>'8', 'name'=>'微商城', 'type'=>'view', 'code'=>'http://115.173.207.75/mall'),
);
\LaneWeChat\Core\Menu::setMenu($menuList);
*/

$menuList = array(
    array('id'=>'1', 'pid'=>'0',  'name'=>'神州商城', 'type'=>'', 'code'=>'key_1'),
    array('id'=>'2', 'pid'=>'1',  'name'=>'商城入口', 'type'=>'view', 'code'=>'http://115.173.207.75/weizanv300/app/index.php?i=12&c=entry&do=shop&m=ewei_shop'),
    array('id'=>'3', 'pid'=>'1',  'name'=>'订单入口', 'type'=>'view', 'code'=>'http://115.173.207.75/weizanv300/app/index.php?i=12&c=entry&do=order&m=ewei_shop'),
    array('id'=>'4', 'pid'=>'1',  'name'=>'购物车入口', 'type'=>'view', 'code'=>'http://115.173.207.75/weizanv300/app/index.php?i=12&c=entry&do=cart&m=ewei_shop'),
    array('id'=>'5', 'pid'=>'1',  'name'=>'我的收藏', 'type'=>'view', 'code'=>'http://115.173.207.75/weizanv300/app/index.php?i=12&c=entry&do=favorite&m=ewei_shop'),
    array('id'=>'6', 'pid'=>'1',  'name'=>'会员中心', 'type'=>'view', 'code'=>'http://115.173.207.75/weizanv300/app/index.php?i=12&c=entry&do=member&m=ewei_shop'),
    array('id'=>'7', 'pid'=>'0',  'name'=>'好中医', 'type'=>'', 'code'=>'key_7'),
    array('id'=>'8', 'pid'=>'7',  'name'=>'中医入口', 'type'=>'view', 'code'=>'http://115.173.207.75/weizanv300/app/index.php?i=12&c=entry&do=index&m=weisrc_businesscenter'),
);
\LaneWeChat\Core\Menu::setMenu($menuList);

?>

