<?php
return [

	// 安全检验码，以数字和字母组成的32位字符。
	'key' => 'y8z1t3vey08bgkzlw78u9cbc4pizy2sj',

	//签名方式
	'sign_type' => 'MD5',

	// 服务器异步通知页面路径。
	'notify_url' => url('per/AliPayNotify'),

	// 页面跳转同步通知页面路径。
	'return_url' => url('per/AliPayReturn')
];
