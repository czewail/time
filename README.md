# 时间戳操作库
用于获取各种类型时间戳

# 使用
## 安装
```bash
composer require ppeerit/time
```
## 引入命名空间
```php
use Ppeerit/Time/Time
```
# 方法
## 今天开始和结束的时间戳
```php
// 返回一个数组['开始时间戳','结束时间戳']
list($start_time, $end_time) = Time::today()
```
