<?php
$lang->chat->common          = '喧喧';
$lang->chat->turnon          = '是否打开';
$lang->chat->downloadXXD     = '下载喧喧服务端';

$lang->chat->turnonList = array();
$lang->chat->turnonList[1] = '是';
$lang->chat->turnonList[0] = '否';

$lang->chat->status          = '状态';
$lang->chat->xxdServer       = 'XXD服务器';
$lang->chat->downloadXXD     = '下载喧喧服务端';
$lang->chat->listenIP        = '监听IP';
$lang->chat->chatPort        = '客户端通讯端口';
$lang->chat->chatPort        = '客户端通讯端口';
$lang->chat->uploadFileSize  = '上传文件大小';
$lang->chat->downloadPackage = '下载完整包';
$lang->chat->downloadConfig  = '只下载配置文件';

$lang->chat->statusList[1] = '启用';
$lang->chat->statusList[0] = '不启用';

$lang->chat->xxdServerTip   = 'XXD服务器地址为完整的协议+地址+端口，示例：https://127.0.0.1:11443。';
$lang->chat->xxdServerEmpty = 'XXD服务器地址为空。';
$lang->chat->xxdSchemeError = '服务器地址应该以<strong>http://</strong>或<strong>https://</strong>开头。';
$lang->chat->xxdPortError   = '服务器地址应该包含有效的端口号，默认为<strong>11443</strong>。';
$lang->chat->staffEmpty     = '客服为空。';
$lang->chat->createChatFail = '创建会话失败。';

$lang->chat->xxd = new stdclass();
$lang->chat->xxd->os             = '操作系统';
$lang->chat->xxd->ip             = '监听IP';
$lang->chat->xxd->chatPort       = '客户端通讯端口';
$lang->chat->xxd->commonPort     = '通用端口';
$lang->chat->xxd->isHttps        = '启用https';
$lang->chat->xxd->uploadFileSize = '上传文件大小';
$lang->chat->xxd->maxOnlineUser  = '最大在线人数';
$lang->chat->xxd->sslcrt         = '证书内容';
$lang->chat->xxd->sslkey         = '证书私钥';

$lang->chat->httpsOptions[1] = '启用';
$lang->chat->httpsOptions[0] = '不启用';

$lang->chat->placeholder->xxd = new stdclass();
$lang->chat->placeholder->xxd->ip             = '监听的服务器ip地址，没有特殊需要直接填写0.0.0.0';
$lang->chat->placeholder->xxd->chatPort       = '与聊天客户端通讯的端口';
$lang->chat->placeholder->xxd->commonPort     = '通用端口，该端口用于客户端登录时验证，以及文件上传下载使用';
$lang->chat->placeholder->xxd->isHttps        = '启用https';
$lang->chat->placeholder->xxd->uploadFileSize = '上传文件的大小';
$lang->chat->placeholder->xxd->maxOnlineUser  = '最大在线人数';
$lang->chat->placeholder->xxd->sslcrt         = '请将证书内容复制到此处';
$lang->chat->placeholder->xxd->sslkey         = '请将证书密钥复制到此处';

$lang->chat->osList['win32']   = 'Windows 32位压缩包';
$lang->chat->osList['win64']   = 'Windows 64位压缩包';
$lang->chat->osList['linux32'] = 'Linux 32位压缩包';
$lang->chat->osList['linux64'] = 'Linux 64位压缩包';
$lang->chat->osList['mac']     = 'Mac 压缩包';
