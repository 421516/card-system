<?php
use Illuminate\Database\Seeder; class PayTableSeeder extends Seeder { private function initPay() { $spb09730 = new \App\Pay(); $spb09730->name = '支付宝'; $spb09730->img = '/plugins/images/ali.png'; $spb09730->driver = 'Fakala'; $spb09730->way = 'alipay'; $spb09730->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $spb09730->config = '{
  "gateway": "https://www.327ka.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $spb09730->enabled = \App\Pay::ENABLED_PC; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '支付宝'; $spb09730->img = '/plugins/images/ali.png'; $spb09730->driver = 'Fakala'; $spb09730->way = 'alipaywap'; $spb09730->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $spb09730->config = '{
  "gateway": "https://www.327ka.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $spb09730->enabled = \App\Pay::ENABLED_MOBILE; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '微信'; $spb09730->img = '/plugins/images/wx.png'; $spb09730->driver = 'Fakala'; $spb09730->way = 'wx'; $spb09730->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $spb09730->config = '{
  "gateway": "https://www.327ka.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $spb09730->enabled = \App\Pay::ENABLED_PC; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '微信'; $spb09730->img = '/plugins/images/wx.png'; $spb09730->driver = 'Fakala'; $spb09730->way = 'wxwap'; $spb09730->comment = 'alipay、alipaywap、wx、wxwap、qq、qqwap'; $spb09730->config = '{
  "gateway": "https://www.327ka.com",
  "api_id": "your api_id",
  "api_key": "your api_key"
}'; $spb09730->enabled = \App\Pay::ENABLED_MOBILE; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '支付宝'; $spb09730->img = '/plugins/images/ali.png'; $spb09730->driver = 'Alipay'; $spb09730->way = 'pc'; $spb09730->comment = '支付宝 - 即时到账套餐(企业)V2'; $spb09730->config = '{
  "partner": "partner",
  "key": "key"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '支付宝'; $spb09730->img = '/plugins/images/ali.png'; $spb09730->driver = 'Aliwap'; $spb09730->way = 'wap'; $spb09730->comment = '支付宝 - 高级手机网站支付V4'; $spb09730->config = '{
  "partner": "partner",
  "key": "key"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '支付宝扫码'; $spb09730->img = '/plugins/images/ali.png'; $spb09730->driver = 'AliAop'; $spb09730->way = 'f2f'; $spb09730->comment = '支付宝 - 当面付'; $spb09730->config = '{
  "app_id": "app_id",
  "alipay_public_key": "alipay_public_key",
  "merchant_private_key": "merchant_private_key"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '支付宝'; $spb09730->img = '/plugins/images/ali.png'; $spb09730->driver = 'AliAop'; $spb09730->way = 'pc'; $spb09730->comment = '支付宝 - 电脑网站支付 (新)'; $spb09730->config = '{
  "app_id": "app_id",
  "alipay_public_key": "alipay_public_key",
  "merchant_private_key": "merchant_private_key"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '手机支付宝'; $spb09730->img = '/plugins/images/ali.png'; $spb09730->driver = 'AliAop'; $spb09730->way = 'mobile'; $spb09730->comment = '支付宝 - 手机网站支付 (新)'; $spb09730->config = '{
  "app_id": "app_id",
  "alipay_public_key": "alipay_public_key",
  "merchant_private_key": "merchant_private_key"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '微信扫码'; $spb09730->img = '/plugins/images/wx.png'; $spb09730->driver = 'WeChat'; $spb09730->way = 'NATIVE'; $spb09730->comment = '微信支付 - 扫码'; $spb09730->config = '{
  "APPID": "APPID",
  "APPSECRET": "APPSECRET",
  "MCHID": "商户ID",
  "KEY": "KEY"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '微信H5'; $spb09730->img = '/plugins/images/wx.png'; $spb09730->driver = 'WeChat'; $spb09730->way = 'MWEB'; $spb09730->comment = '微信支付 - H5 (需要开通权限)'; $spb09730->config = '{
  "APPID": "APPID",
  "APPSECRET": "APPSECRET",
  "MCHID": "商户ID",
  "KEY": "KEY"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '手机QQ'; $spb09730->img = '/plugins/images/qq.png'; $spb09730->driver = 'QPay'; $spb09730->way = 'NATIVE'; $spb09730->comment = '手机QQ - 扫码'; $spb09730->config = '{
  "mch_id": "mch_id",
  "mch_key": "mch_key"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '支付宝'; $spb09730->img = '/plugins/images/ali.png'; $spb09730->driver = 'Youzan'; $spb09730->way = 'alipay'; $spb09730->comment = '有赞支付 - 支付宝'; $spb09730->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '微信'; $spb09730->img = '/plugins/images/wx.png'; $spb09730->driver = 'Youzan'; $spb09730->way = 'wechat'; $spb09730->comment = '有赞支付 - 微信'; $spb09730->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '手机QQ'; $spb09730->img = '/plugins/images/qq.png'; $spb09730->driver = 'Youzan'; $spb09730->way = 'qq'; $spb09730->comment = '有赞支付 - 手机QQ'; $spb09730->config = '{
  "client_id": "client_id",
  "client_secret": "client_secret",
  "kdt_id": "kdt_id"
}'; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '支付宝'; $spb09730->img = '/plugins/images/ali.png'; $spb09730->driver = 'CodePay'; $spb09730->way = 'alipay'; $spb09730->comment = '码支付 - 支付宝'; $spb09730->config = '{
  "id": "id",
  "key": "key"
}'; $spb09730->fee_system = 0; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '微信'; $spb09730->img = '/plugins/images/wx.png'; $spb09730->driver = 'CodePay'; $spb09730->way = 'weixin'; $spb09730->comment = '码支付 - 微信'; $spb09730->config = '{
  "id": "id",
  "key": "key"
}'; $spb09730->fee_system = 0; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); $spb09730 = new \App\Pay(); $spb09730->name = '手机QQ'; $spb09730->img = '/plugins/images/qq.png'; $spb09730->driver = 'CodePay'; $spb09730->way = 'qq'; $spb09730->comment = '码支付 - 手机QQ'; $spb09730->config = '{
  "id": "id",
  "key": "key"
}'; $spb09730->fee_system = 0; $spb09730->enabled = \App\Pay::ENABLED_DISABLED; $spb09730->save(); } public function run() { self::initPay(); } }