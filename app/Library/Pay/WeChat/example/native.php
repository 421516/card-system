<?php
ini_set('date.timezone', 'Asia/Shanghai'); require_once '../lib/WxPay.Api.php'; require_once 'WxPay.NativePay.php'; require_once '../WxLog.php'; $sp390b71 = new NativePay(); $sp614b18 = $sp390b71->GetPrePayUrl('123456789'); $spd2b050 = new WxPayUnifiedOrder(); $spd2b050->SetBody('test'); $spd2b050->SetAttach('test'); $spd2b050->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $spd2b050->SetTotal_fee('1'); $spd2b050->SetTime_start(date('YmdHis')); $spd2b050->SetTime_expire(date('YmdHis', time() + 600)); $spd2b050->SetGoods_tag('test'); $spd2b050->SetNotify_url('http://paysdk.weixin.qq.com/example/notify.php'); $spd2b050->SetTrade_type('NATIVE'); $spd2b050->SetProduct_id('123456789'); $sp9610ab = $sp390b71->GetPayUrl($spd2b050); $spfa43d6 = $sp9610ab['code_url']; ?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-退款</title>
</head>
<body>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式一</div><br/>
	<img alt="模式一扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($sp614b18); ?>
" style="width:150px;height:150px;"/>
	<br/><br/><br/>
	<div style="margin-left: 10px;color:#556B2F;font-size:30px;font-weight: bolder;">扫描支付模式二</div><br/>
	<img alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php  echo urlencode($spfa43d6); ?>
" style="width:150px;height:150px;"/>
	
</body>
</html><?php 