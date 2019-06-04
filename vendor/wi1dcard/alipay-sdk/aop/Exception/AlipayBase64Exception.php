<?php
 namespace Alipay\Exception; class AlipayBase64Exception extends AlipayException { public function __construct($value) { parent::__construct("Value `{$value}` cound not be decoded"); } } 