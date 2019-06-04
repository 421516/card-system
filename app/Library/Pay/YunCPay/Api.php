<?php
namespace App\Library\Pay\YunCPay; use App\Library\CurlRequest; use App\Library\Pay\ApiInterface; use Illuminate\Support\Facades\Log; class Api implements ApiInterface { private $url_notify = ''; private $url_return = ''; public function __construct($spf46c5d) { $this->url_notify = SYS_URL_API . '/pay/notify/' . $spf46c5d; $this->url_return = SYS_URL . '/pay/return/' . $spf46c5d; } function goPay($spa9e109, $sp206d07, $sp89af34, $sp92f0c1, $sp28f24f) { $spbc3979 = sprintf('%.2f', $sp28f24f / 100); if (!isset($spa9e109['id'])) { throw new \Exception('请设置id'); } if (!isset($spa9e109['key'])) { throw new \Exception('请设置key'); } $sp5dc7fe = '1.0'; $spfa208d = $spa9e109['id']; $sp171b96 = $sp206d07; $spa69a50 = $spa9e109['payway']; $sp12ec75 = ''; if (substr($spa69a50, 0, 4) === 'bank') { $sp12ec75 = substr($spa69a50, 5); $spa69a50 = 'bank'; } $sp979fa8 = ''; $sp231565 = '0'; $sp9c9a88 = md5('version=' . $sp5dc7fe . '&customerid=' . $spfa208d . '&total_fee=' . $spbc3979 . '&sdorderno=' . $sp171b96 . '&notifyurl=' . $this->url_notify . '&returnurl=' . $this->url_return . '&' . $spa9e109['key']); ?>
        <!doctype html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>正在转到付款页</title>
        </head>
        <body onload="document.pay.submit()">
        <form name="pay" action="http://api.yuncpay.com/api/submit" method="get">
            <input type="hidden" name="version" value="<?php  echo $sp5dc7fe; ?>
">
            <input type="hidden" name="customerid" value="<?php  echo $spfa208d; ?>
">
            <input type="hidden" name="sdorderno" value="<?php  echo $sp171b96; ?>
">
            <input type="hidden" name="total_fee" value="<?php  echo $spbc3979; ?>
">
            <input type="hidden" name="paytype" value="<?php  echo $spa69a50; ?>
">
            <input type="hidden" name="notifyurl" value="<?php  echo $this->url_notify; ?>
">
            <input type="hidden" name="returnurl" value="<?php  echo $this->url_return; ?>
">
            <input type="hidden" name="remark" value="<?php  echo $sp979fa8; ?>
">
            <input type="hidden" name="bankcode" value="<?php  echo $sp12ec75; ?>
">
            <input type="hidden" name="is_qrcode" value="<?php  echo $sp231565; ?>
">
            <input type="hidden" name="sign" value="<?php  echo $sp9c9a88; ?>
">
        </form>
        </body>
        </html>

        <?php  die; } function verify($spa9e109, $spf8927a) { $spf53f48 = isset($spa9e109['isNotify']) && $spa9e109['isNotify']; if ($spf53f48) { $sp7a1202 = $_POST['status']; $spfa208d = $_POST['customerid']; $sp171b96 = $_POST['sdorderno']; $spbc3979 = $_POST['total_fee']; $spa69a50 = $_POST['paytype']; $sp28b7eb = $_POST['sdpayno']; $sp9c9a88 = $_POST['sign']; $spc6ce21 = md5('customerid=' . $spfa208d . '&status=' . $sp7a1202 . '&sdpayno=' . $sp28b7eb . '&sdorderno=' . $sp171b96 . '&total_fee=' . $spbc3979 . '&paytype=' . $spa69a50 . '&' . $spa9e109['key']); if ($sp9c9a88 == $spc6ce21) { if ($sp7a1202 == '1') { $spbc3979 = (int) round($spbc3979 * 100); $spf8927a($sp171b96, $spbc3979, $sp28b7eb); echo 'success'; return true; } else { echo 'success'; } } else { echo 'sign_err'; } } else { if (!empty($spa9e109['out_trade_no']) || !isset($_GET['sign']) && isset($_GET['sdorderno'])) { $sp171b96 = ''; if (!empty($spa9e109['out_trade_no'])) { $sp171b96 = $spa9e109['out_trade_no']; } elseif (isset($_GET['sdorderno'])) { $sp171b96 = $_GET['sdorderno']; } $sp4488da = 'customerid=' . $spa9e109['id'] . '&sdorderno=' . $sp171b96 . '&reqtime=' . date('YmdHis'); $sp4488da .= '&sign=' . md5($sp4488da . '&' . $spa9e109['key']); $sp177bbf = CurlRequest::post('http://api.yuncpay.com/api/query', $sp4488da); $sp5780b9 = json_decode($sp177bbf, true); if (!isset($sp5780b9['status'])) { Log::error('Pay.YunCPay.verify Error: ' . $sp177bbf); } if ($sp5780b9['status'] === 1) { $spbc3979 = (int) round($sp5780b9['total_fee'] * 100); $spf8927a($sp5780b9['sdorderno'], $spbc3979, $sp5780b9['sdpayno']); return true; } return false; } $sp7a1202 = $_GET['status']; $spfa208d = $_GET['customerid']; $sp171b96 = $_GET['sdorderno']; $spbc3979 = $_GET['total_fee']; $spa69a50 = $_GET['paytype']; $sp28b7eb = $_GET['sdpayno']; $sp9c9a88 = $_GET['sign']; $spc6ce21 = md5('customerid=' . $spfa208d . '&status=' . $sp7a1202 . '&sdpayno=' . $sp28b7eb . '&sdorderno=' . $sp171b96 . '&total_fee=' . $spbc3979 . '&paytype=' . $spa69a50 . '&' . $spa9e109['key']); if ($sp9c9a88 == $spc6ce21) { if ($sp7a1202 == '1') { $spbc3979 = (int) round($spbc3979 * 100); $spf8927a($sp171b96, $spbc3979, $sp28b7eb); return true; } else { throw new \Exception('付款失败'); } } else { throw new \Exception('sign error'); } } return false; } }