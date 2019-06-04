<?php
class fakala { public $gateway; public $uid; public $key; public function __construct($spad0233, $spf46c5d, $spf74fd0) { $this->gateway = $spad0233; $this->uid = $spf46c5d; $this->key = $spf74fd0; } function getSignStr($sp20678b) { ksort($sp20678b); $sp34d7e1 = ''; foreach ($sp20678b as $sp614732 => $sp154f6e) { if ('sign' !== $sp614732) { $sp34d7e1 .= $sp614732 . '=' . $sp154f6e . '&'; } } return $sp34d7e1; } function getSign($sp20678b, $spf74fd0, &$spc2a6c5 = false) { $sp34d7e1 = self::getSignStr($sp20678b); $sp9c9a88 = md5($sp34d7e1 . 'key=' . $spf74fd0); if ($spc2a6c5 !== false) { $spc2a6c5 = $sp34d7e1 . 'sign=' . $sp9c9a88; } return $sp9c9a88; } function goPay($sp651d92, $sp89af34, $sp206d07, $sp729689, $spbc3979, $spa76028, $sp804d12, $sp3b73c7) { $sp20678b = array('version' => '20190501', 'uid' => (int) $this->uid, 'subject' => $sp89af34, 'out_trade_no' => $sp206d07, 'total_fee' => (int) $spbc3979, 'cost' => (int) $sp729689, 'payway' => $sp651d92, 'return_url' => $sp804d12, 'notify_url' => $sp3b73c7, 'attach' => $spa76028); $sp20678b['sign'] = $this->getSign($sp20678b, $this->key); die('
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>正在转到付款页</title>
</head>
<body onload="document.pay.submit()">
<form name="pay" action="' . $this->gateway . '/api/order" method="post">
    <input type="hidden" name="version" value="' . $sp20678b['version'] . '">
    <input type="hidden" name="uid" value="' . $sp20678b['uid'] . '">
    <input type="hidden" name="subject" value="' . $sp20678b['subject'] . '">
    <input type="hidden" name="out_trade_no" value="' . $sp20678b['out_trade_no'] . '">
    <input type="hidden" name="total_fee" value="' . $sp20678b['total_fee'] . '">
    <input type="hidden" name="cost" value="' . $sp20678b['cost'] . '">
    <input type="hidden" name="payway" value="' . $sp20678b['payway'] . '">
    <input type="hidden" name="return_url" value="' . $sp20678b['return_url'] . '">
    <input type="hidden" name="notify_url" value="' . $sp20678b['notify_url'] . '">
    <input type="hidden" name="attach" value="' . $sp20678b['attach'] . '">
    <input type="hidden" name="sign" value="' . $sp20678b['sign'] . '">
</form>
</body>
        '); } function notify_verify() { $sp20678b = $_POST; if ($sp20678b['sign'] === $this->getSign($sp20678b, $this->key)) { echo 'success'; return true; } else { echo 'fail'; return false; } } function return_verify() { $sp20678b = $_GET; if ($sp20678b['sign'] === $this->getSign($sp20678b, $this->key)) { return true; } else { return false; } } function get_order($sp206d07) { $sp9610ab = $this->curl_post($this->gateway . '/api/order/query', 'uid=' . $this->uid . '&out_trade_no=' . $sp206d07); $sp9610ab = @json_decode($sp9610ab, true); if (is_array($sp9610ab) && is_array($sp9610ab['data']) && isset($sp9610ab['data']['order'])) { return $sp9610ab['data']['order']; } return array(); } private function curl_post($sp11a0e0, $sp29e0c7) { $sp6c533c = curl_init($sp11a0e0); curl_setopt($sp6c533c, CURLOPT_HEADER, 0); curl_setopt($sp6c533c, CURLOPT_RETURNTRANSFER, 1); curl_setopt($sp6c533c, CURLOPT_SSL_VERIFYPEER, true); curl_setopt($sp6c533c, CURLOPT_POST, true); curl_setopt($sp6c533c, CURLOPT_POSTFIELDS, $sp29e0c7); $sp0e2174 = curl_exec($sp6c533c); curl_close($sp6c533c); return $sp0e2174; } }