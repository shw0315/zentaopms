<?php
$lang->score->common       = '我的积分';
$lang->score->record       = '积分记录';
$lang->score->current      = '当前积分';
$lang->score->level        = '等级积分';
$lang->score->reset        = '重置';
$lang->score->tips         = '昨天增加了积分：<strong>%d</strong><br/>总积分：<strong>%d</strong>';
$lang->score->resetTips    = '重置积分执行时间可能会比较长，<br/><strong>请不要关闭窗口。</strong>';
$lang->score->resetStart   = '开始重置';
$lang->score->resetLoading = '正在重置中，已处理：';
$lang->score->resetFinish  = '重置完成';

$lang->score->id      = '编号';
$lang->score->userID  = '用户ID';
$lang->score->account = '用户';
$lang->score->module  = '模块';
$lang->score->method  = '动作';
$lang->score->before  = '之前';
$lang->score->score   = '分值';
$lang->score->after   = '之后';
$lang->score->time    = '时间';
$lang->score->desc    = '描述';
$lang->score->noLimit = '不限制';
$lang->score->times   = '次数';
$lang->score->hour    = '时间间隔';

$lang->score->modules['task']        = '任务';
$lang->score->modules['tutorial']    = '新手教程';
$lang->score->modules['user']        = '用户';
$lang->score->modules['ajax']        = '其它';
$lang->score->modules['doc']         = '文档';
$lang->score->modules['todo']        = '待办';
$lang->score->modules['story']       = '需求';
$lang->score->modules['bug']         = 'Bug';
$lang->score->modules['testcase']    = '用例';
$lang->score->modules['testtask']    = '测试单';
$lang->score->modules['build']       = 'Build';
$lang->score->modules['project']     = '项目';
$lang->score->modules['productplan'] = '计划';
$lang->score->modules['release']     = '发布';
$lang->score->modules['block']       = '区块';
$lang->score->modules['search']      = '搜索';

$lang->score->methods['task']['create']              = '创建任务';
$lang->score->methods['task']['close']               = '关闭任务';
$lang->score->methods['task']['finish']              = '完成任务';
$lang->score->methods['tutorial']['finish']          = '学习完成';
$lang->score->methods['user']['login']               = '登录';
$lang->score->methods['user']['changePassword']      = '修改密码';
$lang->score->methods['user']['editProfile']         = '修改个人资料';
$lang->score->methods['ajax']['selectTheme']         = '切换主题';
$lang->score->methods['ajax']['selectLang']          = '切换语言';
$lang->score->methods['ajax']['showSearchMenu']      = '搜索高级用法';
$lang->score->methods['ajax']['customMenu']          = '自定义菜单';
$lang->score->methods['ajax']['dragSelected']        = '列表页面拖动选中';
$lang->score->methods['ajax']['lastNext']            = '快捷键翻页';
$lang->score->methods['ajax']['switchToDataTable']   = '使用高级表格';
$lang->score->methods['ajax']['submitPage']          = '修改分页数量';
$lang->score->methods['ajax']['quickJump']           = '使用快速跳转';
$lang->score->methods['ajax']['batchCreate']         = '首次使用批量添加';
$lang->score->methods['ajax']['batchEdit']           = '首次使用批量编辑';
$lang->score->methods['ajax']['batchOther']          = '其它批量操作';
$lang->score->methods['doc']['create']               = '创建文档';
$lang->score->methods['todo']['create']              = '创建待办';
$lang->score->methods['story']['create']             = '创建需求';
$lang->score->methods['story']['close']              = '需求关闭';
$lang->score->methods['bug']['create']               = '创建Bug';
$lang->score->methods['bug']['confirmBug']           = '确认Bug';
$lang->score->methods['bug']['createFormCase']       = '从用例创建';
$lang->score->methods['bug']['resolve']              = '解决Bug';
$lang->score->methods['bug']['saveTplModal']         = '保存模板';
$lang->score->methods['testtask']['runCase']         = '执行用例';
$lang->score->methods['testcase']['create']          = '创建用例';
$lang->score->methods['build']['create']             = '创建版本';
$lang->score->methods['project']['create']           = '创建项目';
$lang->score->methods['project']['close']            = '项目完成';
$lang->score->methods['productplan']['create']       = '创建计划';
$lang->score->methods['release']['create']           = '创建发布';
$lang->score->methods['block']['set']                = '区块自定义设置';
$lang->score->methods['search']['saveQuery']         = '保存搜索条件';
$lang->score->methods['search']['saveQueryAdvanced'] = '使用高级搜索';

$lang->score->extended = new stdClass();
$lang->score->extended->userchangePassword = '密码强度为中，额外获得##strength,1##个积分；为强，额外获得##strength,2##个积分。';
$lang->score->extended->projectclose       = '项目经理增加##manager,close##个积分，项目成员增加##member,close##个积分。按期或者提前完成，项目经理额外增加##manager,in##个积分，项目成员额外增加##member,in##个积分。';
$lang->score->extended->bugresolve         = 'Bug解决后，额外增加严重程度积分：s1 + ##severity,3##, s2 + ##severity,2##, s3 + ##severity,1##。';
$lang->score->extended->bugconfirmBug      = 'Bug确认后，额外增加严重程度积分：s1 + ##severity,3##, s2 + ##severity,2##, s3 + ##severity,1##。';
$lang->score->extended->taskfinish         = '额外增加工时积分 round(工时 / 10 * 预计 / 消耗) + 优先级积分(p1 ##pri,1##, p2 ##pri,2##)。';
$lang->score->extended->storyclose         = '需求的创建者额外增加##createID##分';
