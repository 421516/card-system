<?php
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信支付样例-查退款单</title>
</head>
<?php  require_once '../lib/WxPay.Api.php'; require_once 'WxPay.MicroPay.php'; require_once '../WxLog.php'; function printf_info($sp29e0c7) { foreach ($sp29e0c7 as $spf74fd0 => $sp67821d) { echo "<font color='#00ff55;'>{$spf74fd0}</font> : {$sp67821d} <br/>"; } } if (isset($_REQUEST['auth_code']) && $_REQUEST['auth_code'] != '') { $spc52a34 = $_REQUEST['auth_code']; $spd2b050 = new WxPayMicroPay(); $spd2b050->SetAuth_code($spc52a34); $spd2b050->SetBody('刷卡测试样例-支付'); $spd2b050->SetTotal_fee('1'); $spd2b050->SetOut_trade_no(WxPayConfig::MCHID . date('YmdHis')); $sp65cd41 = new MicroPay(); printf_info($sp65cd41->pay($spd2b050)); } ?>
<body>  
	<form action="#" method="post">
        <div style="margin-left:2%;">商品描述：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" readonly value="刷卡测试样例-支付" name="auth_code" /><br /><br />
        <div style="margin-left:2%;">支付金额：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" readonly value="1分" name="auth_code" /><br /><br />
        <div style="margin-left:2%;">授权码：</div><br/>
        <input type="text" style="width:96%;height:35px;margin-left:2%;" name="auth_code" /><br /><br />
       	<div align="center">
			<input type="submit" value="提交刷卡" style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" />
		</div>
	</form>
</body>
</html><?php 