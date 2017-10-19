### .gitattribute 用于设置文件的对比方式（常用非文本文件）
```
<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016080800193092",

		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEAwRatPvloqUZZTQ76WgiCB/ctCKS2Z7xvNywKHjJx6l3KJF8wh5WUrK/k91Ba+ZX1zMpBwiPSmg9qiLccaHSIw0z7Z3hPq/SBesSOGEZY7Y6kz/AC1aUMnn8aCEDODT34fNx67nOeOAXaAx2oiu9k/gzz5SCpOyE3Qy5EaIKgld9LPvlNIelRAmCa5XY2yc9q43lbIgQETlrBc9KVnyIzERPtyL7ltuyVCZhZ5lb8mVuZm2BqZNz81j+pQJrgFiohABQFgy6i1J7w1OMsE7Hqx4kHX9TlngTIuic6CJ/I81lOI/jhOWUVYshLiG2O60FmUF07FN9OxfK5MOri5YKvhQIDAQABAoIBAFa+W0JJRa2WPxQRQIMmA1SUxJR3esKLsuL0U+9Q9kA1tlQ0t1aR6mLR+mjonpY1umEwE+6lrT0s481bhdWfVLl4YhEPyasUgv6mQrfBEr5WMNCBoKReK5cgvo8qnebxCir92fQ52MCOUGzJ7CfOeG5xXzh2PdCkkXEK3gydcoshJ2Rr40j5hv4Ja/pmaWTLAyh5lzxjHR9azHNHbN/XjQEszbReFbj5jAcInM09YdMOzevvpy6ZLR+bhtRwdquSRMCqJ/2J9C1g1BuulV9JMD3OoJjTIXztXMxkQzMfUozS3aHTckU1FkVb11JqFzYCqQ1qjRCWRwNbg0aqQO3ojgECgYEA6f9LTgbdnnA8doKvophWReu/kQ7gk5vLSv9FScBabbyaAWfrgHkqzNNRLjR/yvzAyhPSwzscyPrgRixT3/9PLLY8As43mv5ivwDCyiXIbvGmYUqHw5rJsq03bzjN5739AcHEnp/tbIlJ41WTZ2DjzCv5fQYuG28bj+1qgESLysUCgYEA0z6kfJXUjcJ/3/mCiHqunpTN4KFDzrjJaIZuGN8SgZbSPXm/ZWN3EL290y4kwwqgZtoXLoaPCwkV6PLcE4OEnAaEywsz/Ec6N3Vlf8WdP+IRehLVkrM6lY6bCUzDafsBHjTyFwOfUEcewWPupK3OzXWxH9CUlHLnT6RizuX0ncECgYA7mghfXoZSlfoAobcE7lKDStInq6duUa+Nccn/SByAeRqtIwAsYDCTrXuvDjZCyPB+SGBV1Be35Zb8qMvQcWKEXAKbIFWvh/408oerH8aW47xiaa59F08q0M4e6VQhJBZuvSFM2iWKkMmeOyzplxdO6SCKROm3mSxnE60d8Ne+lQKBgQCYnB7U6qF+ME+VjXoiAw93/WSmrZqBE7pdyxBq421JNZ55TyVYp/zymUEz+ZgRV/H9m/03XXqlrFCp1Bnt9wusdIEm9tb9oK+MNUG4hxlNd5LMsCKfMuBV/4o9s7lRLUbnfbSPr8w+gMLVT86uJerLQAVQSK2ueTxmqwm/Ex4fgQKBgEvLF60KtUnbgIsAZfak00AnUYFJLel3Xp4Vn9cAO0Er1xnDzpW/DnPurzaXEFshNOBFc3JiXDINz8iLUtnDoDzZsMSVXTeSt3M5lHwoyAm9YZw4tlLSHJv/sOlMKa6/Vm1iUUHZdgJ9BE4eaUhnyCT2GL3sJC/ONOo75x+j2+4I",
		
		//异步通知地址
		'notify_url' => "http://pay.com/notify_url.php",
		
		//同步跳转
		'return_url' => "http://pay.com/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

	
		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs0aZAqLDZEqTe88fe9rcBoKaE5YEg3Hex4+q2o4fI4YnYKsg7cDrvyj4DzKI+1V6bQgRsxsNSl+nX1Vj6ETytVcYETzg4kfMkS2TJ6jmJen0rVdKufFGBJ3k6YABkdQ3KBDpaYKph8ByECW2kdbXhZgAOFF5i06ru/TiCvb4cmu3+sJccsB7UWVyr6Ixk6BXv0bjwfckohLD+ulkyU6hWP6+OkZEaWfT+hkVZJ+fRCdDklzvgFQj1mOarnjiv6gJTlKAy9lWCJwaOvQLq3CHLsPp2MJ1UUpPye/hOTsVSX8QodloDLj44zixPyozZCiE3WInlT9cRboyajS6B02HbQIDAQAB",
);
```