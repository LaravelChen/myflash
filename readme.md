#Flash Message For Laravel5
![image](https://github.com/LaravelChen/myflash/raw/master/images/example.png)

##介绍
> 整个package采用了Laravel内置的```Illuminate\Session\Store```中的一次性请求flash函数.
显示视图的方式有三种，图中可以看到.


##安装
####使用composer安装
```
composer require laravelchen/myflash
```
####然后在```config/app.php```添加provider和alias
```
'providers' => [
   LaravelChen\MyFlash\MyFlashProvider::class,
   ];
```
```
'aliases' => [
    'MyFlash'=>LaravelChen\MyFlash\MyFlash::class,
];
```

##用法
####在redirect重定向之前添加falsh
```
public function index()
{
    MyFlash::success('邮件已发!请查收邮件!');

    return Redirect::home();
}
```
####同时你也可以使用下面这种形式
- MyFlash::success('邮件已发!请查收邮件!')
- MyFlash::info('邮件已发!请查收邮件!')
- MyFlash::error('邮件已发!请查收邮件!')
- MyFlash::warning('邮件已发!请查收邮件!')

####或者你可以使用```myflash()```这种辅助函数的形式
- myflash('邮件已发!请查收邮件!')
- myflash()->success('邮件已发!请查收邮件!')
- myflash()->info('邮件已发!请查收邮件!')
- myflash()->error('邮件已发!请查收邮件!')
- myflash()->warning('邮件已发!请查收邮件!')

####最后在你的视图中添加```message```视图
```
@include('myflash::notification')
或者
@include('myflash::top-message')
或者
@include('myflash::bottom-message')
```

##注意事项
####请在你的视图中增加font-awesome和jquery
```
<link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
```

##例子
```
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<h1 class="text-center">Hello World</h1>
<script src="//cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
@include('myflash::notification')
</body>
</html>
```
##自定义
####如果你想要自定义样式或者其他效果的话可以使用
```
php artisan vendor:publish
```
#####之后视图文件会出现在你的```resources/views/vendor/myflash```目录下

> 最后感谢mercuryseries和Jeffrey Way的package!


